<?php
 // created: 2015-03-04 16:07:42
$dictionary['eva_Evaluations']['fields']['evaluation_total_c']['duplicate_merge_dom_value']=0;
$dictionary['eva_Evaluations']['fields']['evaluation_total_c']['labelValue']='Evaluation Total';
$dictionary['eva_Evaluations']['fields']['evaluation_total_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['eva_Evaluations']['fields']['evaluation_total_c']['calculated']='1';
$dictionary['eva_Evaluations']['fields']['evaluation_total_c']['formula']='add(number($total_cust_service_c),number($total_communication_c),number($total_cleanliness_c),number($total_preparation_c),number($total_application_c),number($total_job_operations_c))';
$dictionary['eva_Evaluations']['fields']['evaluation_total_c']['enforced']='1';
$dictionary['eva_Evaluations']['fields']['evaluation_total_c']['dependency']='';

 ?>