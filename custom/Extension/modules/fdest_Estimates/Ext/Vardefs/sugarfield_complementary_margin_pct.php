<?php
 // created: 2015-10-30 16:44:02
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['importable']='false';
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['duplicate_merge']='disabled';
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['duplicate_merge_dom_value']=0;
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['calculated']='1';
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['formula']='ifElse(
greaterThan(34,$visible_margin_pct_c),
0.660000,
ifElse(greaterThan($visible_margin_pct_c,99),0.010000,subtract(1,divide($visible_margin_pct_c,100))))';
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['enforced']=true;
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['default']='';
$dictionary['fdest_Estimates']['fields']['complementary_margin_pct']['full_text_search']=array (
);

 ?>