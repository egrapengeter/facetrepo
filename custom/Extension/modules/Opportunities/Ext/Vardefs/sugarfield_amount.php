<?php
 // created: 2015-11-25 14:41:27
$dictionary['Opportunity']['fields']['amount']['massupdate']=false;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['importable']='false';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['calculated']='1';
$dictionary['Opportunity']['fields']['amount']['formula']='rollupCurrencySum($opportunities_fdest_estimates_1,"final_total_c")';
$dictionary['Opportunity']['fields']['amount']['enforced']=true;
$dictionary['Opportunity']['fields']['amount']['required']=false;

 ?>