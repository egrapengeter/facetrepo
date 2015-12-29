<?php
// created: 2015-12-17 06:51:52
$dictionary["fdmea_Measurements"]["fields"]["fdest_estimates_fdmea_measurements_1"] = array (
  'name' => 'fdest_estimates_fdmea_measurements_1',
  'type' => 'link',
  'relationship' => 'fdest_estimates_fdmea_measurements_1',
  'source' => 'non-db',
  'module' => 'fdest_Estimates',
  'bean_name' => 'fdest_Estimates',
  'side' => 'right',
  'vname' => 'LBL_FDEST_ESTIMATES_FDMEA_MEASUREMENTS_1_FROM_FDMEA_MEASUREMENTS_TITLE',
  'id_name' => 'fdest_estimates_fdmea_measurements_1fdest_estimates_ida',
  'link-type' => 'one',
);
$dictionary["fdmea_Measurements"]["fields"]["fdest_estimates_fdmea_measurements_1_name"] = array (
  'name' => 'fdest_estimates_fdmea_measurements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FDEST_ESTIMATES_FDMEA_MEASUREMENTS_1_FROM_FDEST_ESTIMATES_TITLE',
  'save' => true,
  'id_name' => 'fdest_estimates_fdmea_measurements_1fdest_estimates_ida',
  'link' => 'fdest_estimates_fdmea_measurements_1',
  'table' => 'fdest_estimates',
  'module' => 'fdest_Estimates',
  'rname' => 'name',
);
$dictionary["fdmea_Measurements"]["fields"]["fdest_estimates_fdmea_measurements_1fdest_estimates_ida"] = array (
  'name' => 'fdest_estimates_fdmea_measurements_1fdest_estimates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_FDEST_ESTIMATES_FDMEA_MEASUREMENTS_1_FROM_FDMEA_MEASUREMENTS_TITLE_ID',
  'id_name' => 'fdest_estimates_fdmea_measurements_1fdest_estimates_ida',
  'link' => 'fdest_estimates_fdmea_measurements_1',
  'table' => 'fdest_estimates',
  'module' => 'fdest_Estimates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
