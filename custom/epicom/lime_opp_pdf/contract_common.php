<?php
// Removed from the individual contract pdfs, since this is all common.

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Lime Painting');
$pdf->SetTitle('Contractor Agreement for Painting Services');

// set default header data
$pdf->SetHeaderData();
$pdf->setFooterData();

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
}

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
$pdf->AddPage();

// egrap 10/10/15 new background image.  Saving the old one in the commented out line.
//$pdf->Image($path.'/custom/themes/default/images/pdf_lime_bg_70.png', 15, 70, 175, 175, '', '', '', false, 0, '', false, false, 0);
$pdf->Image($path.'/custom/themes/default/images/pdf_lime_bg_50.png', 15, 70, 175, 175, '', '', '', false, 0, '', false, false, 0);
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));


function generate_line_items_table($data) {

    $html = '
    <table cellpadding="5" style="width:100%;border-collapse:collapse;border:solid 1px #80b43d;font-family:Arial,sans-serif;font-size:10px;">
        <tr>
            <th style="border:solid 1px #80b43d;" width="10%">Item #</th>
            <th style="border:solid 1px #80b43d;" width="60%">Description</th>
            <th style="border:solid 1px #80b43d;" width="15%">Price</th>
            <th style="border:solid 1px #80b43d;" width="15%">Extended</th>
        </tr>';

    foreach ($data['line_items'] as $item) {

        $location = strtolower($item['interior_exterior_c']);
        $GLOBALS['log']->fatal(__METHOD__.print_r($item,TRUE));
        switch ($location) {
            case 'interior':
                $primary_name = 'primary_interior_c';
                $primary_list = 'primary_interior_list';
                $addl_name = 'additional_areas_interior_c';
                $addl_list = 'additional_areas_interior_list';
                $addl_areas = make_list($item[$addl_name], $addl_list);
                $prep_name = 'prep_interior_c'; $prep_list = 
                'preparation_list'; $primary_areas = 
                make_list($item[$primary_name], $primary_list); 
                $preparation = make_list($item[$prep_name], 
                $prep_list); break;
            case 'exterior':
                // 20151016 redundant - replacing with calculated field for exterior
                // $primary_name = 'primary_area_exterior_c';
                // $primary_list = 'primary_exterior_list';
                $addl_name = '';
                $addl_list = '';
                // $prep_name = 'prep_exterior_c';
                // $prep_list = 'preparation_list';
                $primary_areas = $item['application_items_list_c'];
                $preparation = $item['prep_items_list_c'];
                break;
            case 'deckpatio':
                $primary_name = 'deck_patio_c';
                $primary_list = 'deck_patio_list';
                $addl_name = '';
                $addl_list = '';
                $prep_name = 'prep_deck_c';
                $prep_list = 'preparation_list';
                $primary_areas = make_list($item[$primary_name], $primary_list);
                $preparation = make_list($item[$prep_name], $prep_list);
                break;
        }
        $products = find_paint($data['paints'], $item['line_item_num_c']);
        
        if($item['extra_item_cost_c'] > 0) {
            $extra_item = "&nbsp; &nbsp; Extra Items: " . $item['extra_items_description_c'];
        }
        if($item['override_total_c'] > 0) {
            $extra_item = "&nbsp; &nbsp; Override Applied:" ;
        } elseif ( $item['discount_price_by_c'] > 0 ) {
            $html .= '<tr><td style="border:solid 1px #80b43d;">'.'</td>';
            $html .= '    <td style="border:solid 1px #80b43d;">&nbsp; &nbsp; Discount Applied:</td>';
            $html .= '    <td style="border:solid 1px #80b43d;"></td>';
            $html .= '    <td style="border:solid 1px #80b43d;"></td></tr>';
        }

        $html .= '
        <tr>
                <td style="border:solid 1px #80b43d;">'.$item['line_item_num_c'].'</td>
                <td style="border:solid 1px #80b43d;">'.$item['interior_exterior_c'].'<br>Preparation: '.$preparation.'<br>Application: '.$primary_areas.'<br> Additional Areas: '.$addl_areas.'<br>Other Areas: '.$item['other_area_c'].'<br>Products: '.$products.'</td>
                <td style="border:solid 1px #80b43d;">$'.number_format($item['total_price'],2).'</td>
                <td style="border:solid 1px #80b43d;">$'.number_format($item['final_total_c'],2).'</td>
        </tr>';

        if (!empty($item['description'])) {
                $html .= '
                <tr>
                        <td style="border:solid 1px #80b43d;">Notes</td>
                        <td colspan="7" style="border:solid 1px #80b43d;">'.$item['description'].'</td>
                </tr>';
        }
    }


    $html .= '</table>';

    return $html;
}

function make_list($array, $list_name) {
        $map = $GLOBALS['app_list_strings'][$list_name];
        $list = '';
        $length = count($array);

        foreach ($array as $idx => $item) {
                $list .= $map[$item];
                $list .= ($idx < ($length - 1)) ? ', ' : '';
        }

        return $list;
}

function find_paint($paints, $line_num) {
        foreach ($paints as $paint) {
                if ($paint['wo_line_item_num_c'] == $line_num) {
                        return $paint['paint_paints_paili_paintlineitems_1_name'];
                }
        }
}

function generate_areas_of_attention($data) {
        $html = '
        <table cellpadding="5" style="width:100%;border-collapse:collapse;border:solid 1px #80b43d;border-radius:10px;font-family:Arial,sans-serif;font-size:10px;">
          <tr>
            <th style="border:solid 1px #80b43d;">Item #</th>
            <th style="border:solid 1px #80b43d;">Sun Ware</th>
            <th style="border:solid 1px #80b43d;">Faded</th>
            <th style="border:solid 1px #80b43d;">Chalking</th>
            <th style="border:solid 1px #80b43d;">Mildew & Decay Buildup</th>
            <th style="border:solid 1px #80b43d;">Peeling & Flaking</th>
            <th style="border:solid 1px #80b43d;">Structural Failures</th>
            <th style="border:solid 1px #80b43d;">Surface Bondage</th>
            <th style="border:solid 1px #80b43d;">Water Sealed</th>
            <th style="border:solid 1px #80b43d;">Weathering</th>
            <th style="border:solid 1px #80b43d;"><strong>Score</strong></th>
            <th style="border:solid 1px #80b43d;"><strong>Rating</strong></th>
          </tr>';


        foreach ($data['line_items'] as $item) {
                $html .= '
            <tr>
              <td style="border:solid 1px #80b43d;">'.$item['line_item_num_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['sunware_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['faded_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['chalking_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['mildew_decay_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['peeling_flaking_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['structural_failures_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['surface_bondage_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['water_sealed_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.$item['weathering_c'].'</td>
              <td style="border:solid 1px #80b43d;">'.sprintf("%0.2f",$item['average_areas_of_attention_c']).'</td>
              <td style="border:solid 1px #80b43d;">'.$item['areas_of_attention_rating_c'].'</td>
            </tr>';
        }

        $html .= '
        </table>';

        return $html;
}

function generate_footer_customer($opp,$data = null) {
        $html = '
        <table cellpadding="2" style="width:100%;font-family:Arial,sans-serif;font-size:10px;">';

        if ($opp->touch_up_plan_c) {
                $html .= '
                <tr>
              <td>3 to 5 Year Touch Plan</td>
              <td style="text-align:right">$'.number_format($opp->touch_up_cost_c, 2).'</td>
            </tr>';
        }

    $expected_job_start = empty($opp->expected_job_start_c) ? "Date Not Set" : date('m/d/Y', strtotime($opp->expected_job_start_c));
    $expected_job_completion = empty($opp->expected_completion_date_c) ? "Date Not Set" : date('m/d/Y', strtotime($opp->expected_completion_date_c));
        $html .= '
            <tr>
              <td>Expected Job Start</td>
              <td style="text-align:right">'.$expected_job_start.'</td>
            </tr>
            <tr>
              <td>Expected Completion</td>
              <td style="text-align:right">'.$expected_job_completion.'</td>
            </tr>';

        $html .= '
            <tr>
              <td>Total Estimate</td>
              <td style="text-align:right">
                <b>Good:</b> $'.number_format($opp->good_c, 2).'<br>
                <b>Better:</b> $'.number_format($opp->better_c, 2).' <br>
                <b>Best:</b> $'.number_format($opp->best, 2).' <br>
              </td>
            </tr>
        </table>';

        return $html;
}

function generate_footer($opp,$data = null) {
        $html = '
        <table cellpadding="2" style="width:100%;font-family:Arial,sans-serif;font-size:10px;">';

        if ($opp->touch_up_plan_c) {
                $html .= '
                <tr>
              <td>3 to 5 Year Touch Plan</td>
              <td style="text-align:right">$'.number_format($opp->touch_up_cost_c, 2).'</td>
            </tr>';
        }

    $expected_job_start = empty($opp->expected_job_start_c) ? "Date Not Set" : date('m/d/Y', strtotime($opp->expected_job_start_c));
    $expected_job_completion = empty($opp->expected_completion_date_c) ? "Date Not Set" : date('m/d/Y', strtotime($opp->expected_completion_date_c));
        $html .= '
            <tr>
              <td>Expected Job Start</td>
              <td style="text-align:right">'.$expected_job_start.'</td>
            </tr>
            <tr>
              <td>Expected Completion</td>
              <td style="text-align:right">'.$expected_job_completion.'</td>
            </tr>';

        $html .= '
            <tr>
              <td>Total Estimate</td>
              <td style="text-align:right">
                <b>Good:</b> $'.number_format($opp->contractor_total_c, 2).'<br>
                <b>Better:</b> $'.number_format($opp->contractor_total_better_c, 2).' <br>
                <b>Best:</b> $'.number_format($opp->contractor_total_best_c, 2).' <br>
              </td>
            </tr>
        </table>';

        return $html;
}
