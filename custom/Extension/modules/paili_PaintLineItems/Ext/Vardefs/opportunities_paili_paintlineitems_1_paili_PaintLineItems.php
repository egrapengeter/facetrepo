<?php
// created: 2015-03-04 20:50:43
$dictionary["paili_PaintLineItems"]["fields"]["opportunities_paili_paintlineitems_1"] = array (
  'name' => 'opportunities_paili_paintlineitems_1',
  'type' => 'link',
  'relationship' => 'opportunities_paili_paintlineitems_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_PAILI_PAINTLINEITEMS_1_FROM_PAILI_PAINTLINEITEMS_TITLE',
  'id_name' => 'opportunities_paili_paintlineitems_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["paili_PaintLineItems"]["fields"]["opportunities_paili_paintlineitems_1_name"] = array (
  'name' => 'opportunities_paili_paintlineitems_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PAILI_PAINTLINEITEMS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_paili_paintlineitems_1opportunities_ida',
  'link' => 'opportunities_paili_paintlineitems_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["paili_PaintLineItems"]["fields"]["opportunities_paili_paintlineitems_1opportunities_ida"] = array (
  'name' => 'opportunities_paili_paintlineitems_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PAILI_PAINTLINEITEMS_1_FROM_PAILI_PAINTLINEITEMS_TITLE_ID',
  'id_name' => 'opportunities_paili_paintlineitems_1opportunities_ida',
  'link' => 'opportunities_paili_paintlineitems_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
