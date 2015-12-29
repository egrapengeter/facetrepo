<?php
 // created: 2015-10-30 17:21:56
$dictionary['fdest_Estimates']['fields']['final_total_c']['duplicate_merge_dom_value']=0;
$dictionary['fdest_Estimates']['fields']['final_total_c']['labelValue']='Final Total';
$dictionary['fdest_Estimates']['fields']['final_total_c']['calculated']='true';
$dictionary['fdest_Estimates']['fields']['final_total_c']['formula']='ifElse(greaterThan($override_total_c,$total_cost),$override_total_c,ifElse(equal(0,$override_total_c),$total_price,$total_cost))';
$dictionary['fdest_Estimates']['fields']['final_total_c']['enforced']='true';
$dictionary['fdest_Estimates']['fields']['final_total_c']['dependency']='';
$dictionary['fdest_Estimates']['fields']['final_total_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>