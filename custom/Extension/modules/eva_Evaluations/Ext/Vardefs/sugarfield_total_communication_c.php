<?php
 // created: 2015-03-03 21:07:28
$dictionary['eva_Evaluations']['fields']['total_communication_c']['duplicate_merge_dom_value']=0;
$dictionary['eva_Evaluations']['fields']['total_communication_c']['labelValue']='Total Communication';
$dictionary['eva_Evaluations']['fields']['total_communication_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['eva_Evaluations']['fields']['total_communication_c']['calculated']='1';
$dictionary['eva_Evaluations']['fields']['total_communication_c']['formula']='multiply(100,
add(
multiply(0.02,divide($respons_timely_c,5)),
multiply(0.025,divide($state_of_mind_c,5)),
multiply(0.01,divide($ability_to_comm_proj_strat_c,5)),
multiply(0.025,divide($advocate_lime_paint_cult_c,5)),
multiply(0.02,divide($leads_pass_along_c,5))
)
)';
$dictionary['eva_Evaluations']['fields']['total_communication_c']['enforced']='1';
$dictionary['eva_Evaluations']['fields']['total_communication_c']['dependency']='';

 ?>