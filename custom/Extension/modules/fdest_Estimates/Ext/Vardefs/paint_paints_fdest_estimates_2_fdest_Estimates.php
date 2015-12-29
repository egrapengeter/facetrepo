<?php
// created: 2015-11-30 18:17:46
$dictionary["fdest_Estimates"]["fields"]["paint_paints_fdest_estimates_2"] = array (
  'name' => 'paint_paints_fdest_estimates_2',
  'type' => 'link',
  'relationship' => 'paint_paints_fdest_estimates_2',
  'source' => 'non-db',
  'module' => 'paint_Paints',
  'bean_name' => 'paint_Paints',
  'side' => 'right',
  'vname' => 'LBL_PAINT_PAINTS_FDEST_ESTIMATES_2_FROM_FDEST_ESTIMATES_TITLE',
  'id_name' => 'paint_paints_fdest_estimates_2paint_paints_ida',
  'link-type' => 'one',
);
$dictionary["fdest_Estimates"]["fields"]["paint_paints_fdest_estimates_2_name"] = array (
  'name' => 'paint_paints_fdest_estimates_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAINT_PAINTS_FDEST_ESTIMATES_2_FROM_PAINT_PAINTS_TITLE',
  'save' => true,
  'id_name' => 'paint_paints_fdest_estimates_2paint_paints_ida',
  'link' => 'paint_paints_fdest_estimates_2',
  'table' => 'paint_paints',
  'module' => 'paint_Paints',
  'rname' => 'name',
);
$dictionary["fdest_Estimates"]["fields"]["paint_paints_fdest_estimates_2paint_paints_ida"] = array (
  'name' => 'paint_paints_fdest_estimates_2paint_paints_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PAINT_PAINTS_FDEST_ESTIMATES_2_FROM_FDEST_ESTIMATES_TITLE_ID',
  'id_name' => 'paint_paints_fdest_estimates_2paint_paints_ida',
  'link' => 'paint_paints_fdest_estimates_2',
  'table' => 'paint_paints',
  'module' => 'paint_Paints',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
