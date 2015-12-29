<?php
 // created: 2015-07-22 22:09:21
$dictionary['Project']['fields']['name']['audited']=false;
$dictionary['Project']['fields']['name']['massupdate']=false;
$dictionary['Project']['fields']['name']['comments']='Project name';
$dictionary['Project']['fields']['name']['importable']='false';
$dictionary['Project']['fields']['name']['duplicate_merge']='disabled';
$dictionary['Project']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['Project']['fields']['name']['merge_filter']='disabled';
$dictionary['Project']['fields']['name']['unified_search']=false;
$dictionary['Project']['fields']['name']['calculated']='true';
$dictionary['Project']['fields']['name']['formula']='concat("Project: ",related($jbs_jobs_project_1,"name"))';
$dictionary['Project']['fields']['name']['enforced']=true;

 ?>