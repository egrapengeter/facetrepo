<?php

$path = '/local/customers/lp/lp_20150807';

// Include the main TCPDF library (search for installation path).
require_once($path.'/custom/epicom/tcpdf-6.2.6/tcpdf.php');
require_once($path.'/custom/epicom/lime_opp_pdf/contract_common.php');

// Set some content to print
$html = file_get_contents($path.'/custom/epicom/lime_opp_pdf/pdf_contractor.tpl.html');

$address1 = str_replace("\n", ' ', $data['account']['billing_address_street']);
$address2 = $data['account']['billing_address_city'].', '.$data['account']['billing_address_state'].' '.$data['account']['billing_address_postalcode'];
$contractor_address1 = str_replace("\n", ' ', $data['contractor']['billing_address_street']);
$contractor_address2 = $data['contractor']['billing_address_city'].', '.$data['contractor']['billing_address_state'].' '.$data['contractor']['billing_address_postalcode'];

$user = BeanFactory::getBean('Users', $opp->assigned_user_id);

$tags = array(
	'{opportunity:invoice_number_c}' => $opp->invoice_number_c,
	'{date:now}' => date('m/d/Y'),
	'{opportunity:assigned_user_name}' => $opp->assigned_user_name,
	'{opportunity:assigned_user_phone}' => $user->phone_work,
	'{account:name}' => $data['account']['name'],
	'{account:address1}' => $address1,
	'{account:address2}' => $address2,
	'{account:cell_phone}' => $data['account']['phone_office'],
	'{account:home_phone}' => $data['account']['phone_alternate'],
	'{account:email_address}' => $data['account']['email1'],
	'{html_from_php:line_items}' => generate_line_items_table($data),
	'{html_from_php:areas_of_attention}' => generate_areas_of_attention($data),
	'{html_from_php:footer}' => generate_footer($opp, $data),
	'{opportunity:signature_c}' => $est->contractor_signature_c,
	'{users:signature_c}' => $user->signature_c,
        //egrap 8/29/15 - added for contractor agreement pdf
	'{contractor:name}' => $data['contractor']['name'],
	'{contractor:address1}' => $contractor_address1,
	'{contractor:address2}' => $contractor_address2,
);

$html = str_replace(array_keys($tags), array_values($tags), $html);

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// page 2

//$pdf->AddPage();
//$pdf->Image($path.'/custom/themes/default/images/pdf_lime_bg_70.png', 15, 70, 175, 175, '', '', '', false, 0, '', false, false, 0);
//$html = file_get_contents($path.'/custom/epicom/lime_opp_pdf/pdf2.tpl.html');
//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// Close and output PDF document
$pdf->Output($path.'/upload/'.$docRevision->id, 'F');

