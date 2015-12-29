<?php
// created: 2015-09-18 15:57:12
$dictionary["fdest_Estimates"]["fields"]["con_contractors_fdest_estimates_1"] = array (
  'name' => 'con_contractors_fdest_estimates_1',
  'type' => 'link',
  'relationship' => 'con_contractors_fdest_estimates_1',
  'source' => 'non-db',
  'module' => 'con_Contractors',
  'bean_name' => 'con_Contractors',
  'side' => 'right',
  'vname' => 'LBL_CON_CONTRACTORS_FDEST_ESTIMATES_1_FROM_FDEST_ESTIMATES_TITLE',
  'id_name' => 'con_contractors_fdest_estimates_1con_contractors_ida',
  'link-type' => 'one',
);
$dictionary["fdest_Estimates"]["fields"]["con_contractors_fdest_estimates_1_name"] = array (
  'name' => 'con_contractors_fdest_estimates_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CON_CONTRACTORS_FDEST_ESTIMATES_1_FROM_CON_CONTRACTORS_TITLE',
  'save' => true,
  'id_name' => 'con_contractors_fdest_estimates_1con_contractors_ida',
  'link' => 'con_contractors_fdest_estimates_1',
  'table' => 'con_contractors',
  'module' => 'con_Contractors',
  'rname' => 'name',
);
$dictionary["fdest_Estimates"]["fields"]["con_contractors_fdest_estimates_1con_contractors_ida"] = array (
  'name' => 'con_contractors_fdest_estimates_1con_contractors_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CON_CONTRACTORS_FDEST_ESTIMATES_1_FROM_FDEST_ESTIMATES_TITLE_ID',
  'id_name' => 'con_contractors_fdest_estimates_1con_contractors_ida',
  'link' => 'con_contractors_fdest_estimates_1',
  'table' => 'con_contractors',
  'module' => 'con_Contractors',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
