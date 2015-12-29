<?php
 // created: 2015-03-03 21:05:04
$dictionary['eva_Evaluations']['fields']['total_cust_service_c']['duplicate_merge_dom_value']=0;
$dictionary['eva_Evaluations']['fields']['total_cust_service_c']['labelValue']='Total Customer Service';
$dictionary['eva_Evaluations']['fields']['total_cust_service_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['eva_Evaluations']['fields']['total_cust_service_c']['calculated']='1';
$dictionary['eva_Evaluations']['fields']['total_cust_service_c']['formula']='multiply(100,
add(
multiply(0.02,divide($communication_c,5)),
multiply(0.015,divide($professionalism_c,5)),
multiply(0.01,divide($abilitytohandlecomplaint_c,5)),
multiply(0.02,divide($ability_rebound_c,5)),
multiply(0.015,divide($overal_cust_exp_c,5)),
multiply(0.18,divide($would_client_refer_c,5))
)
)';
$dictionary['eva_Evaluations']['fields']['total_cust_service_c']['enforced']='1';
$dictionary['eva_Evaluations']['fields']['total_cust_service_c']['dependency']='';

 ?>