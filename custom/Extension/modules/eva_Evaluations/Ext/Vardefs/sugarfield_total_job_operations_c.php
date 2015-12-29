<?php
 // created: 2015-03-03 21:13:10
$dictionary['eva_Evaluations']['fields']['total_job_operations_c']['duplicate_merge_dom_value']=0;
$dictionary['eva_Evaluations']['fields']['total_job_operations_c']['labelValue']='Total Job Operations';
$dictionary['eva_Evaluations']['fields']['total_job_operations_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['eva_Evaluations']['fields']['total_job_operations_c']['calculated']='1';
$dictionary['eva_Evaluations']['fields']['total_job_operations_c']['formula']='multiply(100,
add(
multiply(0.02,divide($attendance_job_c,5)),
multiply(0.02,divide($reliability_job_c,5)),
multiply(0.02,divide($work_ethic_c,5)),
multiply(0.02,divide($safety_job_c,5)),
multiply(0.02,divide($product_material_coordinatio_c,5)),
multiply(0.02,divide($property_damage_c,5)),
multiply(0.1,divide($before_after_pics_c,5))
)
)';
$dictionary['eva_Evaluations']['fields']['total_job_operations_c']['enforced']='1';
$dictionary['eva_Evaluations']['fields']['total_job_operations_c']['dependency']='';

 ?>