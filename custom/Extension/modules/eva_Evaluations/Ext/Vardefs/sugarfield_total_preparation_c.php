<?php
 // created: 2015-03-03 21:10:13
$dictionary['eva_Evaluations']['fields']['total_preparation_c']['duplicate_merge_dom_value']=0;
$dictionary['eva_Evaluations']['fields']['total_preparation_c']['labelValue']='Total Preparation';
$dictionary['eva_Evaluations']['fields']['total_preparation_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['eva_Evaluations']['fields']['total_preparation_c']['calculated']='1';
$dictionary['eva_Evaluations']['fields']['total_preparation_c']['formula']='multiply(100,
add(
multiply(0.02,divide($detail_attention_c,5)),
multiply(0.02,divide($protected_surfaces_c,5)),
multiply(0.02,divide($maximum_water_seal_c,5)),
multiply(0.02,divide($drop_cloths_vacuum_catch_c,5)),
multiply(0.02,divide($scrape_paint_feather_sanded_c,5)),
multiply(0.02,divide($power_wash_remove_c,5)),
multiply(0.02,divide($chaulk_warranty_c,5))
)
)';
$dictionary['eva_Evaluations']['fields']['total_preparation_c']['enforced']='1';
$dictionary['eva_Evaluations']['fields']['total_preparation_c']['dependency']='';

 ?>