<?php
// created: 2015-12-17 06:53:58
$dictionary["fdmea_Measurements"]["fields"]["paint_paints_fdmea_measurements_1"] = array (
  'name' => 'paint_paints_fdmea_measurements_1',
  'type' => 'link',
  'relationship' => 'paint_paints_fdmea_measurements_1',
  'source' => 'non-db',
  'module' => 'paint_Paints',
  'bean_name' => 'paint_Paints',
  'side' => 'right',
  'vname' => 'LBL_PAINT_PAINTS_FDMEA_MEASUREMENTS_1_FROM_FDMEA_MEASUREMENTS_TITLE',
  'id_name' => 'paint_paints_fdmea_measurements_1paint_paints_ida',
  'link-type' => 'one',
);
$dictionary["fdmea_Measurements"]["fields"]["paint_paints_fdmea_measurements_1_name"] = array (
  'name' => 'paint_paints_fdmea_measurements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAINT_PAINTS_FDMEA_MEASUREMENTS_1_FROM_PAINT_PAINTS_TITLE',
  'save' => true,
  'id_name' => 'paint_paints_fdmea_measurements_1paint_paints_ida',
  'link' => 'paint_paints_fdmea_measurements_1',
  'table' => 'paint_paints',
  'module' => 'paint_Paints',
  'rname' => 'name',
);
$dictionary["fdmea_Measurements"]["fields"]["paint_paints_fdmea_measurements_1paint_paints_ida"] = array (
  'name' => 'paint_paints_fdmea_measurements_1paint_paints_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PAINT_PAINTS_FDMEA_MEASUREMENTS_1_FROM_FDMEA_MEASUREMENTS_TITLE_ID',
  'id_name' => 'paint_paints_fdmea_measurements_1paint_paints_ida',
  'link' => 'paint_paints_fdmea_measurements_1',
  'table' => 'paint_paints',
  'module' => 'paint_Paints',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
