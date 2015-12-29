<?php

require_once('custom/epicom/OpportunityPDF.php');

$opportunity = BeanFactory::getBean('Opportunities', 'f0fd0b34-0b21-88b4-7b18-559bfcd68d05');
$pdf = new OpportunityPDF();
$pdf->bean = $opportunity;
$pdf->process();
$pdf->Output('workOrder.pdf', 'I');
