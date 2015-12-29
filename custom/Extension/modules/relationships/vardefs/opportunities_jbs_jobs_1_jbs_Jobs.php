<?php
// created: 2015-02-17 23:10:03
$dictionary["jbs_Jobs"]["fields"]["opportunities_jbs_jobs_1"] = array (
  'name' => 'opportunities_jbs_jobs_1',
  'type' => 'link',
  'relationship' => 'opportunities_jbs_jobs_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_JBS_JOBS_1_FROM_JBS_JOBS_TITLE',
  'id_name' => 'opportunities_jbs_jobs_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["jbs_Jobs"]["fields"]["opportunities_jbs_jobs_1_name"] = array (
  'name' => 'opportunities_jbs_jobs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_JBS_JOBS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_jbs_jobs_1opportunities_ida',
  'link' => 'opportunities_jbs_jobs_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["jbs_Jobs"]["fields"]["opportunities_jbs_jobs_1opportunities_ida"] = array (
  'name' => 'opportunities_jbs_jobs_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_JBS_JOBS_1_FROM_JBS_JOBS_TITLE_ID',
  'id_name' => 'opportunities_jbs_jobs_1opportunities_ida',
  'link' => 'opportunities_jbs_jobs_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
