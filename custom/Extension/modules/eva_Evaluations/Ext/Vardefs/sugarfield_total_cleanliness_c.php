<?php
 // created: 2015-03-03 21:08:11
$dictionary['eva_Evaluations']['fields']['total_cleanliness_c']['duplicate_merge_dom_value']=0;
$dictionary['eva_Evaluations']['fields']['total_cleanliness_c']['labelValue']='Total Cleanliness';
$dictionary['eva_Evaluations']['fields']['total_cleanliness_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['eva_Evaluations']['fields']['total_cleanliness_c']['calculated']='1';
$dictionary['eva_Evaluations']['fields']['total_cleanliness_c']['formula']='multiply(100,
add(
multiply(0.015,divide($homebase_utilization_c,5)),
multiply(0.01,divide($equip_organization_end_c,5)),
multiply(0.02,divide($trash_gathered_discarded_c,5)),
multiply(0.015,divide($latters_left_standing_end_c,5)),
multiply(0.025,divide($window_taped_longer_one_nigh_c,5)),
multiply(0.015,divide($tools_organized_during_op_c,5))
)
)';
$dictionary['eva_Evaluations']['fields']['total_cleanliness_c']['enforced']='1';
$dictionary['eva_Evaluations']['fields']['total_cleanliness_c']['dependency']='';

 ?>