<?php
 // created: 2015-09-23 16:53:04
$dictionary['fdest_Estimates']['fields']['average_areas_of_attention_c']['duplicate_merge_dom_value']=0;
$dictionary['fdest_Estimates']['fields']['average_areas_of_attention_c']['labelValue']='Average Areas of Attention';
$dictionary['fdest_Estimates']['fields']['average_areas_of_attention_c']['calculated']='1';
$dictionary['fdest_Estimates']['fields']['average_areas_of_attention_c']['formula']='divide(	
add(number($sunware_c),number($faded_c),number($chalking_c),number($mildew_decay_c),number($peeling_flaking_c),number($structural_failures_c),number($surface_bondage_c),number($water_sealed_c),number($weathering_c)),
add(
ifElse(equal($sunware_c,""),0,1),
ifElse(equal($faded_c,""),0,1),
ifElse(equal($chalking_c,""),0,1),
ifElse(equal($mildew_decay_c,""),0,1),
ifElse(equal($peeling_flaking_c,""),0,1),
ifElse(equal($structural_failures_c,""),0,1),
ifElse(equal($surface_bondage_c,""),0,1),
ifElse(equal($water_sealed_c,""),0,1),
ifElse(equal($weathering_c,""),0,1)
)
)';
$dictionary['fdest_Estimates']['fields']['average_areas_of_attention_c']['enforced']='1';
$dictionary['fdest_Estimates']['fields']['average_areas_of_attention_c']['dependency']='';

 ?>