<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ContractorSignatureApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'ContractorSignatureEndpoint' => array(
                'reqType'   => 'GET',
                'path'      => array('ContractorSignature', 'fetch', '?'),
                'pathVars'  => array('', '', 'est_id'),
                'method'    => 'fetchEstDetail',
                'shortHelp' => 'Fetch Estimate Details',
                'longHelp'  => ''
            ),
            'ContractorSignatureDisregard' => array(
                'reqType'   => 'POST',
                'path'      => array('ContractorSignature', 'post'),
                'pathVars'  => array('', ''),
                'method'    => 'postSignature',
                'shortHelp' => 'Submit signature details',
                'longHelp'  => ''
            ),
        );
    }

    public function fetchEstDetail($api, $args)
    {
        $this->requireArgs($args, array('est_id'));

        global $db;
        $data = array();

        $estimate = BeanFactory::getBean('fdest_Estimates', $args['est_id']);
        $data['estimate'] = $this->formatBean($api, $args, $estimate);

	$users = $estimate->get_linked_beans('users', 'Users');
        if(!empty($users[0])) {
            $data['user'] = $this->formatBean($api, $args, $users[0]);
            $GLOBALS['log']->debug(__METHOD__." Found User data." .print_r($data['user'],TRUE));
        } else {
            $GLOBALS['log']->fatal(__METHOD__." Unable to find User data."); 
        }
        if (!empty($data['user']['phone_work'])) {
            $data['opportunity']['advisor_phone'] = $data['user']['phone_work'];
            $data['estimate']['advisor_phone'] = $data['user']['phone_work'];
        }
	$data['user_id'] = $estimate->assigned_user_id;
        // Estimate to Opportunity
        $opportunities = $estimate->get_linked_beans('opportunities_fdest_estimates_1', 'fdest_Estimates');
        $opportunity = $opportunities[0];
        if(!empty($opportunities[0])) {
            $data['opportunity'] = $this->formatBean($api, $args, $opportunities[0]);
            $GLOBALS['log']->debug(__METHOD__." Found Opportunity data.".print_r($data['opportunity'],TRUE));
        } else {
            $GLOBALS['log']->fatal(__METHOD__." Unable to find Opportunity data.");
            $data['opportunity'] = null;
        }

        $accounts = $opportunity->get_linked_beans('accounts', 'Accounts');
        if (!empty($accounts[0])) {
            $data['account'] = $this->formatBean($api, $args, $accounts[0]);
            $GLOBALS['log']->debug(__METHOD__." Found Account data.".print_r($data['account'],TRUE));
        } else {
            $GLOBALS['log']->fatal(__METHOD__." Unable to find Account data.");
            $data['account'] = null;
        }

        $contractors = $estimate->get_linked_beans('con_contractors_fdest_estimates_1', 'Contractors');
        if (!empty($contractors[0])) {
            $data['contractor'] = $this->formatBean($api, $args, $contractors[0]);
            $GLOBALS['log']->debug(__METHOD__." Found Contractor data.".print_r($data['contractor'],TRUE));
        } else {
            $GLOBALS['log']->fatal(__METHOD__." Unable to find Contractor data.");
            $data['contractor'] = null;
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
        $this->requireArgs($args, array('est_id', 'signature'));

        $est = BeanFactory::getBean('fdest_Estimates', $args['est_id']);
        $est->contractor_signature_c = $args['signature'];
        $est->cont_wo_num_c = 'LPIC'.date('y').sprintf('%03d',date('z')).date('His');
        $est->save();

        if (empty($est->id)) {
            throw new SugarApiExceptionInvalidParameter('Estimate not found');
        }

        // Estimate to Opportunity
        $opportunities = $est->get_linked_beans('opportunities_fdest_estimates_1', 'fdest_Estimates');
        $opp = $opportunities[0];

        if (empty($opp->id)) {
            throw new SugarApiExceptionInvalidParameter('Opportunity not found');
        }

        // 20150714 peter@facetdata.com 
//      $opp->invoice_number_c = 'LP'.date('y').sprintf('%03d',date('z')).date('His');
//      $opp->sales_stage = 'Closed Won';
//      $opp->date_closed = date('Y-m-d');
//      $opp->probability = '100';
//        $opp->signature_c = $args['signature'];
//        $opp->save();

        $data = $this->fetchEstDetail($api, $args);

        // generate the pdf
        $document = BeanFactory::newBean('Documents');
        // egrap 8/30/15 - document name
        $document->name = 'Contractor Agreement ' . $data['contractor']['name'] . $est->cont_wo_num_c;
        $document->revision = 1;
        $document->category_id = 'Contract';
        $document->save();

        // link the document to the Account
        $document->load_relationship('accounts');
        $document->accounts->add($data['account']['id']);

        // link the new document to the Opp
        $opp->load_relationship('documents');
        $opp->documents->add($document->id);

        // link the new document to the Est
        $est->load_relationship('fdest_estimates_documents_1');
        $est->fdest_estimates_documents_1->add($document->id);

        // create document revision record
        $docRevision = new DocumentRevision();
        $docRevision->revision = 1;
        $docRevision->document_id = $document->id;
        $docRevision->filename = $document->name . '.pdf';
        $docRevision->file_ext = 'pdf';
        $docRevision->file_mime_type = 'application/pdf';
        $docRevision->save();

        // this actually creates the pdf
        // egrap 8/26/15 - changed to generate_contractor_pdf.php
        require 'custom/epicom/lime_opp_pdf/generate_contractor_pdf.php';

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
