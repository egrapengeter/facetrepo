<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SignatureApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'SignatureEndpoint' => array(
                'reqType'   => 'GET',
                'path'      => array('Signature', 'fetch', '?'),
                'pathVars'  => array('', '', 'opp_id'),
                'method'    => 'fetchOppDetail',
                'shortHelp' => 'Fetch Opportunity Details',
                'longHelp'  => ''
            ),
            'SignatureDisregard' => array(
                'reqType'   => 'POST',
                'path'      => array('Signature', 'post'),
                'pathVars'  => array('', ''),
                'method'    => 'postSignature',
                'shortHelp' => 'Submit signature details',
                'longHelp'  => ''
            ),
        );
    }

    public function fetchOppDetail($api, $args)
    {
        $this->requireArgs($args, array('opp_id'));

        global $db;
        $data = array();

        $opportunity = BeanFactory::getBean('Opportunities', $args['opp_id']);
	if(!empty($opportunity->id)) {
           $data['opportunity'] = $this->formatBean($api, $args, $opportunity);
           $GLOBALS['log']->debug(__METHOD__." Found Opportunity data.". print_r($data['opportunity'],TRUE)); 
        } else {
	   $GLOBALS['log']->fatal(__METHOD__." Unable to find Opportunity.");
        }

        $data['user_id'] = $opportunity->assigned_user_id;
       
        if($user = BeanFactory::getBean('Users', $opportunity->assigned_user_id)) {
          $data['user'] = $this->formatBean($api,$args,$user);
          $GLOBALS['log']->debug(__METHOD__." Found User data." .print_r($data['user'],TRUE));
        } else {
            $GLOBALS['log']->fatal(__METHOD__." Unable to find User data.");
        }
        if (!empty($data['user']['phone_work'])) {
            $data['opportunity']['advisor_phone'] = $data['user']['phone_work'];
            $data['estimate']['advisor_phone'] = $data['user']['phone_work'];
        }

        $user = $db->fetchOne("SELECT phone_work FROM users WHERE id = '{$opportunity->assigned_user_id}'");
        if (!empty($user['phone_work'])) {
            $data['opportunity']['advisor_phone'] = $user['phone_work'];
        }
/*
	// get estimates as well.
	$estimates = $opportunity->get_linked_beans('opportunities_fdest_estimates_1', 'Opportunities');
	if(!empty($estimates[0])) {
           $data['estimates'] = $this->format_bean($api,$args,$estimates);
           $GLOBALS['log']->info(__METHOD__." Found ".count($estimates)." estimates.");
        } else {
	   $data['estimates'][0]['name'] = 'No Estimates Found';
           $GLOBALS['log']->fatal(__METHOD__." Found no estimates.");
        }
*/
        $accounts = $opportunity->get_linked_beans('accounts', 'Accounts');
        if (!empty($accounts[0])) {
            $data['account'] = $this->formatBean($api, $args, $accounts[0]);
        } else {
            $data['account'] = null;
        }

        $line_items = $opportunity->get_linked_beans('opportunities_fdest_estimates_1', 'fdest_Estimates');
        $data['line_items'] = array();

        foreach ($line_items as $line_item) {
            $data['line_items'][] = $this->formatBean($api, $args, $line_item);
        }

        usort($data['line_items'], function($a, $b) {
            if ($a['line_item_num_c'] == $b['line_item_num_c']) return 0;
            return $a['line_item_num_c'] < $b['line_item_num_c'] ? -1 : 1;
        });

        $paints = $opportunity->get_linked_beans('opportunities_paili_paintlineitems_1', 'paili_PaintLineItems');
        $data['paints'] = array();

        foreach ($paints as $paint) {
            $data['paints'][] = $this->formatBean($api, $args, $paint);
        }

        return $data;
    }

    public function postSignature($api, $args)
    {
        $this->requireArgs($args, array('opp_id', 'signature'));

        $opp = BeanFactory::getBean('Opportunities', $args['opp_id']);

        if (empty($opp->id)) {
            throw new SugarApiExceptionInvalidParameter('Opportunity not found');
        }

        // 20150714 peter@facetdata.com	
	$opp->invoice_number_c = 'LP'.date('y').sprintf('%03d',date('z')).date('His');
	$opp->sales_stage = 'Closed Won';
	$opp->date_closed = date('Y-m-d');
	$opp->probability = '100';
        $opp->signature_c = $args['signature'];
        $opp->save();

        $data = $this->fetchOppDetail($api, $args);

        // generate the pdf
        $document = BeanFactory::newBean('Documents');
        $document->name = 'Contract '. $opp->name . $opp->invoice_number_c;
        $document->revision = 1;
        $document->category_id = 'Contract';
        $document->save();

        // link the document to the Account
        $document->load_relationship('accounts');
        $document->accounts->add($data['account']['id']);

        // link the new document to the Opp
        $opp->load_relationship('documents');
        $opp->documents->add($document->id);

        // create document revision record
        $docRevision = new DocumentRevision();
        $docRevision->revision = 1;
        $docRevision->document_id = $document->id;
        $docRevision->filename = $document->name . '.pdf';
        $docRevision->file_ext = 'pdf';
        $docRevision->file_mime_type = 'application/pdf';
        $docRevision->save();

        // this actually creates the pdf
        require 'custom/epicom/lime_opp_pdf/generate_pdf.php';

// probably should create the JOB too...
	$job = BeanFactory::newBean('jbs_Jobs');
	$job->name = 'Job: '.$opp->name;
	$job->description = "Auto-generated Job from Opp.";
	$job->status = 'New';
	$job->priority = 'P2';
	$job->start_date_c = $opp->expected_job_start_c;
	$job->save();

	// link the job back to this opp
	$job->load_relationship('opportunities_jbs_jobs_1');
	$job->opportunities_jbs_jobs_1->add($opp->id);

//        $this->email_contract($user, $data['account'], $docRevision);

        return array('success' => true);
    }

/*
    private function email_contract($user, $account, $docRevision) {
        // Create a new email and SugarPHPMailer object
        require_once('modules/Emails/Email.php');
        require_once('include/SugarPHPMailer.php');
        $emailObj   = new Email();
        $mail       = new SugarPHPMailer();

        // Create an id for the email
        $emailObj->id          = create_guid();
        $emailObj->new_with_id = true;
        $emailObj->parent_type = 'Accounts';
        $emailObj->parent_id   = $account['id'];
        $emailObj->status      = 'Lime Painting Contract';
        $emailObj->assigned_user_id = $user->id;

        // Clear recipients
        $mail->ClearAllRecipients();
        $mail->ClearReplyTos();

        // Get the email addresses and names
        $currentUser_email    = $user->email1;
        $currentUser_name     = $user->first_name.' '.$user->last_name;
        $currentAccount_email = $account['email1'];
        $currentAccount_name  = $account['name'];

        // Set the different fields for the attachments
        $file_name  = $docRevision->filename;
        $location   = getcwd()."/upload/{$docRevision->id}";
        $mime_type  = $docRevision->file_mime_type;

        // Add attachment to email
        $mail->AddAttachment($location, $file_name, 'base64', $mime_type);

        // load email template
        $template = BeanFactory::getBean('EmailTemplates', '534bcab4-fc6e-6d04-8831-5543bd2a9e0f');

        // Set the typical fields in the email
        $mail->From     = $currentUser_email;
        $mail->FromName = $currentUser_name;
        $mail->Subject  = $template->subject;
        $mail->Body     = from_html($template->body);

        $mail->AddAddress($currentAccount_email, $currentAccount_name);
        $mail->IsHTML( true );

        $emailObj->save();

        $mail->prepForOutbound();
        $mail->setMailerForSystem();
        $mail->send();
    }
*/
}
