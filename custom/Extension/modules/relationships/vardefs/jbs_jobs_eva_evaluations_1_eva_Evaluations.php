<?php
// created: 2015-02-24 19:47:28
$dictionary["eva_Evaluations"]["fields"]["jbs_jobs_eva_evaluations_1"] = array (
  'name' => 'jbs_jobs_eva_evaluations_1',
  'type' => 'link',
  'relationship' => 'jbs_jobs_eva_evaluations_1',
  'source' => 'non-db',
  'module' => 'jbs_Jobs',
  'bean_name' => 'jbs_Jobs',
  'side' => 'right',
  'vname' => 'LBL_JBS_JOBS_EVA_EVALUATIONS_1_FROM_EVA_EVALUATIONS_TITLE',
  'id_name' => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
  'link-type' => 'one',
);
$dictionary["eva_Evaluations"]["fields"]["jbs_jobs_eva_evaluations_1_name"] = array (
  'name' => 'jbs_jobs_eva_evaluations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JBS_JOBS_EVA_EVALUATIONS_1_FROM_JBS_JOBS_TITLE',
  'save' => true,
  'id_name' => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
  'link' => 'jbs_jobs_eva_evaluations_1',
  'table' => 'jbs_jobs',
  'module' => 'jbs_Jobs',
  'rname' => 'name',
);
$dictionary["eva_Evaluations"]["fields"]["jbs_jobs_eva_evaluations_1jbs_jobs_ida"] = array (
  'name' => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_JBS_JOBS_EVA_EVALUATIONS_1_FROM_EVA_EVALUATIONS_TITLE_ID',
  'id_name' => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
  'link' => 'jbs_jobs_eva_evaluations_1',
  'table' => 'jbs_jobs',
  'module' => 'jbs_Jobs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
