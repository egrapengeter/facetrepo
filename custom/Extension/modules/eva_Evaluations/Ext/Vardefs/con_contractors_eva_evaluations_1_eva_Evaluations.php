<?php
// created: 2015-02-24 19:51:03
$dictionary["eva_Evaluations"]["fields"]["con_contractors_eva_evaluations_1"] = array (
  'name' => 'con_contractors_eva_evaluations_1',
  'type' => 'link',
  'relationship' => 'con_contractors_eva_evaluations_1',
  'source' => 'non-db',
  'module' => 'con_Contractors',
  'bean_name' => 'con_Contractors',
  'side' => 'right',
  'vname' => 'LBL_CON_CONTRACTORS_EVA_EVALUATIONS_1_FROM_EVA_EVALUATIONS_TITLE',
  'id_name' => 'con_contractors_eva_evaluations_1con_contractors_ida',
  'link-type' => 'one',
);
$dictionary["eva_Evaluations"]["fields"]["con_contractors_eva_evaluations_1_name"] = array (
  'name' => 'con_contractors_eva_evaluations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CON_CONTRACTORS_EVA_EVALUATIONS_1_FROM_CON_CONTRACTORS_TITLE',
  'save' => true,
  'id_name' => 'con_contractors_eva_evaluations_1con_contractors_ida',
  'link' => 'con_contractors_eva_evaluations_1',
  'table' => 'con_contractors',
  'module' => 'con_Contractors',
  'rname' => 'name',
);
$dictionary["eva_Evaluations"]["fields"]["con_contractors_eva_evaluations_1con_contractors_ida"] = array (
  'name' => 'con_contractors_eva_evaluations_1con_contractors_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CON_CONTRACTORS_EVA_EVALUATIONS_1_FROM_EVA_EVALUATIONS_TITLE_ID',
  'id_name' => 'con_contractors_eva_evaluations_1con_contractors_ida',
  'link' => 'con_contractors_eva_evaluations_1',
  'table' => 'con_contractors',
  'module' => 'con_Contractors',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
