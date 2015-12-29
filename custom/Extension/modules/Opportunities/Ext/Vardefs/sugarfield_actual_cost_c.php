<?php
 // created: 2015-07-20 17:39:06
$dictionary['Opportunity']['fields']['actual_cost_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['actual_cost_c']['labelValue']='Paint Product Cost';
$dictionary['Opportunity']['fields']['actual_cost_c']['calculated']='1';
$dictionary['Opportunity']['fields']['actual_cost_c']['formula']='rollupSum($opportunities_paili_paintlineitems_1,"paint_line_item_total_cost_c")';
$dictionary['Opportunity']['fields']['actual_cost_c']['enforced']='1';
$dictionary['Opportunity']['fields']['actual_cost_c']['dependency']='not(equal($sales_stage,"Prospecting"))';
$dictionary['Opportunity']['fields']['actual_cost_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>