<?php

require_once('include/Sugarpdf/Sugarpdf.php');

class OpportunityPDF extends Sugarpdf
{
    private $line_items;
    private $user;

    /**
     * Override
     */
    function process() {

        $this->SetMargins(20, 13, -1, $keepmargins = false);

        $this->preDisplay();
        $this->display();
        $this->buildFileName();
    }

    /**
     * Custom header
     */
    public function Header()
    {
        // $this->SetFont(PDF_FONT_NAME_MAIN, 'B', 16);
        // $this->MultiCell(0, 0, 'TCPDF Header',0,'C');
        // $this->drawLine();
    }

    /**
     * Custom header
     */
    public function Footer()
    {
        // $this->SetFont(PDF_FONT_NAME_MAIN, '', 8);
        // $this->MultiCell(0,0,'TCPDF Footer', 0, 'C');
    }

    /**
     * Predisplay content
     */
    function preDisplay()
    {
        //Adds a predisplay page
        // $this->AddPage();
        // $this->SetFont(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN);
        // $this->Ln();
        // $this->MultiCell(0, 0, $this->bean->name , 0, 'C');

        // get related Line Items
        $this->line_items = $this->bean->get_linked_beans('opportunities_epi_wo_line_items_1','EPI_WO_Line_Items');

        $this->user = BeanFactory::getBean("Users", $this->bean->assigned_user_id);

    }

    /**
     * Main content
     */
    function display()
    {
        //add a display page
        $this->AddPage();
        $this->heading();
        $this->detail();
        $this->fine_print();
    }

    /**
     * Make pretty heading with company name, etc
     */
    function heading() {
        $this->reset_font();

        $this->drawLine();
        // $this->Image('upload/hallmark.png', $x = '20', $y = '14', $w = '80', $h = '11');

        $address = "\n10200 Westside Court\n";
        $address .= 'Littleton, CO 80125';

        $this->SetFont('helvetica', 'B', 9);
        $this->MultiCell(0, 2, 'Lime Painting' . $address, 0, $align = 'L', $fill = false, $ln = 1, $x = '', $y = '24');

        // $this->SetFont('helvetica', '', 9);
        // $this->MultiCell(0, 0, "Representing Kewaunee Scientific For Casework, Fume Hoods,\nAdaptable Systems, Equipment & Accessories.", 0, $align = 'L', $fill = false, $ln = 1, $x = '', $y = '28');

        $this->SetTextColor(130, 130, 130);
        $this->SetFont('helvetica', 'B', 19);
        $this->MultiCell(0, 0, "Quote", 0, $align = 'R', $fill = false, $ln = 1, $x = '100', $y = '30');
        $this->SetFont('helvetica', 'B', 14);
        // $this->MultiCell(86, 0, strtoupper($this->bean->name), 0, $align = 'R', $fill = false, $ln = 2, $x = '110', $y = '22');

        $this->Ln();

        $this->reset_font();

    }

    function detail() {
        // global $log;
        // $log->fatal(print_r($this->bean->name, true));
        // $log->fatal(print_r($this->bean->signature_c, true));

        $this->reset_font();

        $address = "10200 Westside Court, ";
        $address .= 'Littleton, CO 80125';

        $this->Cell(85, 2, 'Prepared By:   ' . $this->bean->assigned_user_name, 0, 0, $align = 'L');
        $this->Cell(85, 2, 'Quotation Number:   ' . @$this->bean->invoice_number_c, 0, 0, $align = 'R');
        $this->Ln();
        $this->Cell(85, 2, 'Address:   ' . $address, 0, 0, $align = 'L');
        $this->Cell(85, 2, 'Date:   ' . date('m/d/y'), 0, 0, $align = 'R');
        $this->Ln();
        $this->Cell(85, 2, 'Phone:   ' . @$this->user->phone_work, 0, 0, $align = 'L');
        $valid_through = (@$this->bean->date_closed) ? date('m/d/y', strtotime($this->bean->date_closed)) : '';
        $this->Cell(85, 2, 'Valid Through:   ' . $valid_through, 0, 0, $align = 'R');
        $this->Ln();
        $this->Cell(85, 2, 'Email:   ' . @$this->user->email1, 0, 0, $align = 'L');
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        // $this->writeHTML('<img src="'.$this->bean->signature_c.'" height="20" width="20"/>');

        $imgdata = explode(',', $this->bean->signature_c);

        $image_name = 'upload/' . $this->bean->id . '.png';
        file_put_contents($image_name, base64_decode($imgdata[1]));


        if (@$this->bean->description) {
            $statement = $this->bean->description;
            $this->write(0, $statement);
            $this->Ln();
            $this->Ln();
            $this->write(0, "Sincerely,");
            $this->Ln();
            $this->Ln();
            $this->write(0, $this->bean->assigned_user_name);
            $this->Ln();
            $this->Ln();
            $this->Ln();
            $this->Ln();
        }

        // Line item table
        $w = array(310, 75, 90);

        $description = '';
        $i = 0;
        foreach($this->line_items as $li) {
            $i++;
            $description .= "<b>{$i}. {$li->section}</b><br/>\n";
            $description .= nl2br($li->description) . "<br/>\n<br/>\n";
        }
        $img_url = "https://app.box.com/embed_widget/s/{$this->bean->box_link_c}?view=list&sort=name&direction=ASC&theme=blue";
        $total = @$this->bean->amount ? '$' . number_format($this->bean->amount, 2, '.', ',') : '';

        $table = <<<"TABLE"
<table border="1" cellspacing="0" cellpadding="4">
  <thead>
    <tr>
      <th width="{$w[0]}" bgcolor="#B4D2E6">Description</th>
      <th width="{$w[1]}" bgcolor="#B4D2E6" align="center">Total</th>
      <th width="{$w[2]}" bgcolor="#B4D2E6" align="center">Attachment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="{$w[0]}"><span>{$description}</span></td>
      <td width="{$w[1]}" align="center">{$total}</td>
      <td width="{$w[2]}" align="center"></td>
    </tr>
  </tbody>
</table>
<h4>Signature</h4>
<div><img src="{$image_name}" height="50" width="200"/></div>
TABLE;
// </table><table border="1" cellspacing="0" cellpadding="4">
//   <thead>
//     <tr>
//       <th width="{$w[0]}" bgcolor="#B4D2E6">Description</th>
//       <th width="{$w[1]}" bgcolor="#B4D2E6" align="center">Total</th>
//       <th width="{$w[2]}" bgcolor="#B4D2E6" align="center">Attachment</th>
//     </tr>
//   </thead>
//   <tbody>
//     <tr>
//       <td width="{$w[0]}"><span>{$description}</span></td>
//       <td width="{$w[1]}" align="center">{$total}</td>
//       <td width="{$w[2]}" align="center"><a href="$img_url" style="text-decoration: none;" title="Link to Box folder" target="_new"><img src="{$this->bean->signature_c}" height="20" width="20"/></a></td>
//     </tr>
//   </tbody>
// </table>

        $this->writeHTML($table);

        $this->Ln();
        $this->Ln();
        $this->Ln();

    }

    function fine_print() {
        $this->reset_font();
        $this->SetFont('helvetica', '', intval(PDF_FONT_SIZE_MAIN) - 1);

        $fine_print = "Quotation Prepared By:   {$this->bean->assigned_user_name}

ADDITIONAL TERMS & REQUIREMENTS:

Lime Painting shall be paid monthly progress payments net 30 days for the value of work performed including all material manufactured or purchased in accordance with the construction schedule or other authorization and brought to the job-site or suitably stored at an off-site location. Retention, if required, shall be no greater than that being held by the owner. Additionally, Lime Painting shall be entitled to a mobilization progress payment of 10% of the contract amount upon submittal of shop drawings. Final payment is due 30 days after substantial completion.

Delivery can be made 8-10 weeks after all approvals, color/finish selections and field dimensions as may be required are received. Shop drawings for approval can be sent 3-4 weeks per phase after receipt of an acceptable order or notification to proceed.

All obligations of Lime Painting under this proposal are contingent upon Lime Painting's receipt of all required submittals a nd the access to the areas where equipment is to be installed for field measurements prior to the required lead time. Should dimensions not be available, they must be guaranteed in writing. All work areas are to be prepared so as to be acceptable to Lime Painting for the work. Lime Painting will b e called upon to start work until sufficient areas are ready to ensure continued work. Prior to delivery, windows must be installed and temporary or permanent heat maintained to ensure a humidity reading of no less than 10% and no more than 50% to ensure stability in the wood casework and minimize any swelling or warping. Lime Painting will be furnished temporary heat, water, electricity, dumpsters and suitable storage space at no additional cost. Heat for se tting tops with epoxy must be no less than 65 F.

Lime Painting will not be subject to any liquidated damages or penalties in excess of 1/10 of 1% of our contract amount per day. No such amount will be assessed against Lime Painting for more than the amount assessed by the owner for unexcused delays and then only shall be assessed pro rata against Lime Painting to the extent such delay is caused by Hallmark Casework

To Accept This Quotation, Sign Here And Return: _____________________________________________________________________________";

        $this->write(0, $fine_print);
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();

        $this->SetFont('', 'B', intval(PDF_FONT_SIZE_MAIN) + 2);
        $this->write(0, "Thank You For Your Business!", $link='', $fill=false, $align='C');

    }

    function reset_font() {
        $this->SetFont('helvetica', '', intval(PDF_FONT_SIZE_MAIN) + 1);
        $this->SetTextColor(0, 0, 0);
    }

    /**
     * Build filename
     */
    function buildFileName()
    {
        $this->fileName = 'work_order.pdf';
    }

    /**
     * This method draw an horizontal line with a specific style.
     */
    protected function drawLine()
    {
        $this->SetLineStyle(array('width' => 0.85 / $this->getScaleFactor(), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(90, 90, 90)));
        $this->MultiCell(0, 0, '', 'T', 0, 'C');
    }
}