<?php
 // created: 2015-09-23 17:02:39
$dictionary['fdest_Estimates']['fields']['areas_of_attention_rating_c']['duplicate_merge_dom_value']=0;
$dictionary['fdest_Estimates']['fields']['areas_of_attention_rating_c']['labelValue']='Areas of Attention Rating';
$dictionary['fdest_Estimates']['fields']['areas_of_attention_rating_c']['calculated']='true';
$dictionary['fdest_Estimates']['fields']['areas_of_attention_rating_c']['formula']='ifElse(greaterThan(3.0,$average_areas_of_attention_c),
"Preventative",
ifElse(greaterThan(4.55,$average_areas_of_attention_c),
"Rehabilitate",
"Distressed"
)
)';
$dictionary['fdest_Estimates']['fields']['areas_of_attention_rating_c']['enforced']='true';
$dictionary['fdest_Estimates']['fields']['areas_of_attention_rating_c']['dependency']='';

 ?>