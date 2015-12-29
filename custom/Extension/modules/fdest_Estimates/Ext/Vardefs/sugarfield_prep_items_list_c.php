<?php
 // created: 2015-10-14 10:52:33
$dictionary['fdest_Estimates']['fields']['prep_items_list_c']['duplicate_merge_dom_value']=0;
$dictionary['fdest_Estimates']['fields']['prep_items_list_c']['labelValue']='Prep Items List';
$dictionary['fdest_Estimates']['fields']['prep_items_list_c']['calculated']='true';
$dictionary['fdest_Estimates']['fields']['prep_items_list_c']['formula']='concat(
ifElse(greaterThan($hours_prep_caulking_br,0),
"Caulking",""),
ifElse(and(
greaterThan($hours_prep_caulking_br,0),
greaterThan($hours_prep_localfail_br,0)
),", ",""),
ifElse(greaterThan($hours_prep_localfail_br,0),
"Scraping, Feather Sand, Putty, Prime",""),
ifElse(and(
greaterThan($hours_prep_localfail_br,0),
greaterThan($hours_prep_wash_br,0)
),", ",""),
ifElse(greaterThan($hours_prep_wash_br,0),
"Wash","")
)';
$dictionary['fdest_Estimates']['fields']['prep_items_list_c']['enforced']='true';
$dictionary['fdest_Estimates']['fields']['prep_items_list_c']['dependency']='';

 ?>