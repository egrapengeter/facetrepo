<?php
 // created: 2015-03-03 21:12:26
$dictionary['eva_Evaluations']['fields']['total_application_c']['duplicate_merge_dom_value']=0;
$dictionary['eva_Evaluations']['fields']['total_application_c']['labelValue']='Total Application';
$dictionary['eva_Evaluations']['fields']['total_application_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['eva_Evaluations']['fields']['total_application_c']['calculated']='1';
$dictionary['eva_Evaluations']['fields']['total_application_c']['formula']='multiply(100,
add(
multiply(0.02,divide($application_detail_c,5)),
multiply(0.02,divide($windows_not_painted_shut_c,5)),
multiply(0.02,divide($no_lap_flash_marks_c,5)),
multiply(0.02,divide($no_runs_c,5)),
multiply(0.02,divide($applied_product_c,5)),
multiply(0.02,divide($professional_edging_finish_c,5)),
multiply(0.02,divide($sufficient_application_c,5)),
multiply(0.02,divide($no_watering_tampering_c,5)),
multiply(0.02,divide($prime_bare_wood_c,5))
)
)';
$dictionary['eva_Evaluations']['fields']['total_application_c']['enforced']='1';
$dictionary['eva_Evaluations']['fields']['total_application_c']['dependency']='';

 ?>