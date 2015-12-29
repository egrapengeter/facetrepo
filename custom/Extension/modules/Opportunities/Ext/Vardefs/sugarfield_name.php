<?php
 // created: 2015-07-13 15:58:21
$dictionary['Opportunity']['fields']['name']['required']=false;
$dictionary['Opportunity']['fields']['name']['audited']=false;
$dictionary['Opportunity']['fields']['name']['massupdate']=false;
$dictionary['Opportunity']['fields']['name']['comments']='Name of the opportunity';
$dictionary['Opportunity']['fields']['name']['importable']='false';
$dictionary['Opportunity']['fields']['name']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['name']['calculated']='true';
$dictionary['Opportunity']['fields']['name']['formula']='concat(related($accounts,"name")," - ",related($accounts,"shipping_address_street")," ",$opportunity_type," ",toString($date_closed))';
$dictionary['Opportunity']['fields']['name']['enforced']=true;

 ?>