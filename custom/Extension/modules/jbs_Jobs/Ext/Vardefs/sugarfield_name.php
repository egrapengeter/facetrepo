<?php
 // created: 2015-07-13 15:53:06
$dictionary['jbs_Jobs']['fields']['name']['massupdate']=false;
$dictionary['jbs_Jobs']['fields']['name']['comments']='The short description of the bug';
$dictionary['jbs_Jobs']['fields']['name']['importable']='false';
$dictionary['jbs_Jobs']['fields']['name']['duplicate_merge']='disabled';
$dictionary['jbs_Jobs']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['jbs_Jobs']['fields']['name']['merge_filter']='disabled';
$dictionary['jbs_Jobs']['fields']['name']['unified_search']=false;
$dictionary['jbs_Jobs']['fields']['name']['calculated']='1';
$dictionary['jbs_Jobs']['fields']['name']['formula']='concat("Job ",$jbs_jobs_number,": ",related($opportunities_jbs_jobs_1,"name"))';
$dictionary['jbs_Jobs']['fields']['name']['enforced']=true;
$dictionary['jbs_Jobs']['fields']['name']['required']=false;

 ?>