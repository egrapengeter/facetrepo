<?php
// created: 2015-10-30 18:27:37
$dictionary["paili_PaintLineItems"]["fields"]["fdest_estimates_paili_paintlineitems_1"] = array (
  'name' => 'fdest_estimates_paili_paintlineitems_1',
  'type' => 'link',
  'relationship' => 'fdest_estimates_paili_paintlineitems_1',
  'source' => 'non-db',
  'module' => 'fdest_Estimates',
  'bean_name' => 'fdest_Estimates',
  'side' => 'right',
  'vname' => 'LBL_FDEST_ESTIMATES_PAILI_PAINTLINEITEMS_1_FROM_PAILI_PAINTLINEITEMS_TITLE',
  'id_name' => 'fdest_estimates_paili_paintlineitems_1fdest_estimates_ida',
  'link-type' => 'one',
);
$dictionary["paili_PaintLineItems"]["fields"]["fdest_estimates_paili_paintlineitems_1_name"] = array (
  'name' => 'fdest_estimates_paili_paintlineitems_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FDEST_ESTIMATES_PAILI_PAINTLINEITEMS_1_FROM_FDEST_ESTIMATES_TITLE',
  'save' => true,
  'id_name' => 'fdest_estimates_paili_paintlineitems_1fdest_estimates_ida',
  'link' => 'fdest_estimates_paili_paintlineitems_1',
  'table' => 'fdest_estimates',
  'module' => 'fdest_Estimates',
  'rname' => 'name',
);
$dictionary["paili_PaintLineItems"]["fields"]["fdest_estimates_paili_paintlineitems_1fdest_estimates_ida"] = array (
  'name' => 'fdest_estimates_paili_paintlineitems_1fdest_estimates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_FDEST_ESTIMATES_PAILI_PAINTLINEITEMS_1_FROM_PAILI_PAINTLINEITEMS_TITLE_ID',
  'id_name' => 'fdest_estimates_paili_paintlineitems_1fdest_estimates_ida',
  'link' => 'fdest_estimates_paili_paintlineitems_1',
  'table' => 'fdest_estimates',
  'module' => 'fdest_Estimates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
