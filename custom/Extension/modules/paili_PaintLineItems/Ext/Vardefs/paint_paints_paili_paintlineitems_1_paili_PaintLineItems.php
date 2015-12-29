<?php
// created: 2015-03-04 20:52:06
$dictionary["paili_PaintLineItems"]["fields"]["paint_paints_paili_paintlineitems_1"] = array (
  'name' => 'paint_paints_paili_paintlineitems_1',
  'type' => 'link',
  'relationship' => 'paint_paints_paili_paintlineitems_1',
  'source' => 'non-db',
  'module' => 'paint_Paints',
  'bean_name' => 'paint_Paints',
  'side' => 'right',
  'vname' => 'LBL_PAINT_PAINTS_PAILI_PAINTLINEITEMS_1_FROM_PAILI_PAINTLINEITEMS_TITLE',
  'id_name' => 'paint_paints_paili_paintlineitems_1paint_paints_ida',
  'link-type' => 'one',
);
$dictionary["paili_PaintLineItems"]["fields"]["paint_paints_paili_paintlineitems_1_name"] = array (
  'name' => 'paint_paints_paili_paintlineitems_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAINT_PAINTS_PAILI_PAINTLINEITEMS_1_FROM_PAINT_PAINTS_TITLE',
  'save' => true,
  'id_name' => 'paint_paints_paili_paintlineitems_1paint_paints_ida',
  'link' => 'paint_paints_paili_paintlineitems_1',
  'table' => 'paint_paints',
  'module' => 'paint_Paints',
  'rname' => 'name',
);
$dictionary["paili_PaintLineItems"]["fields"]["paint_paints_paili_paintlineitems_1paint_paints_ida"] = array (
  'name' => 'paint_paints_paili_paintlineitems_1paint_paints_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PAINT_PAINTS_PAILI_PAINTLINEITEMS_1_FROM_PAILI_PAINTLINEITEMS_TITLE_ID',
  'id_name' => 'paint_paints_paili_paintlineitems_1paint_paints_ida',
  'link' => 'paint_paints_paili_paintlineitems_1',
  'table' => 'paint_paints',
  'module' => 'paint_Paints',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
