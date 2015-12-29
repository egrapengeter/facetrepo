<?php
// created: 2015-08-24 17:08:22
$dictionary["fdest_Estimates"]["fields"]["opportunities_fdest_estimates_1"] = array (
  'name' => 'opportunities_fdest_estimates_1',
  'type' => 'link',
  'relationship' => 'opportunities_fdest_estimates_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_FDEST_ESTIMATES_1_FROM_FDEST_ESTIMATES_TITLE',
  'id_name' => 'opportunities_fdest_estimates_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["fdest_Estimates"]["fields"]["opportunities_fdest_estimates_1_name"] = array (
  'name' => 'opportunities_fdest_estimates_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_FDEST_ESTIMATES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_fdest_estimates_1opportunities_ida',
  'link' => 'opportunities_fdest_estimates_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["fdest_Estimates"]["fields"]["opportunities_fdest_estimates_1opportunities_ida"] = array (
  'name' => 'opportunities_fdest_estimates_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_FDEST_ESTIMATES_1_FROM_FDEST_ESTIMATES_TITLE_ID',
  'id_name' => 'opportunities_fdest_estimates_1opportunities_ida',
  'link' => 'opportunities_fdest_estimates_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
