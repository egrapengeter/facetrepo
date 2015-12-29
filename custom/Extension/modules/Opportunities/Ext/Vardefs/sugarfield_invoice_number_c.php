<?php
 // created: 2015-07-16 13:30:41
$dictionary['Opportunity']['fields']['invoice_number_c']['labelValue']='Invoice Number';
$dictionary['Opportunity']['fields']['invoice_number_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Opportunity']['fields']['invoice_number_c']['enforced']='';
$dictionary['Opportunity']['fields']['invoice_number_c']['dependency']='equal($sales_stage,"Closed Won")';

 ?>