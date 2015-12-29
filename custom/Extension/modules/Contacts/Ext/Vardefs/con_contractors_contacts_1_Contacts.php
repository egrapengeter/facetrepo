<?php
// created: 2015-07-17 16:52:54
$dictionary["Contact"]["fields"]["con_contractors_contacts_1"] = array (
  'name' => 'con_contractors_contacts_1',
  'type' => 'link',
  'relationship' => 'con_contractors_contacts_1',
  'source' => 'non-db',
  'module' => 'con_Contractors',
  'bean_name' => 'con_Contractors',
  'side' => 'right',
  'vname' => 'LBL_CON_CONTRACTORS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'con_contractors_contacts_1con_contractors_ida',
  'link-type' => 'one',
);
$dictionary["Contact"]["fields"]["con_contractors_contacts_1_name"] = array (
  'name' => 'con_contractors_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CON_CONTRACTORS_CONTACTS_1_FROM_CON_CONTRACTORS_TITLE',
  'save' => true,
  'id_name' => 'con_contractors_contacts_1con_contractors_ida',
  'link' => 'con_contractors_contacts_1',
  'table' => 'con_contractors',
  'module' => 'con_Contractors',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["con_contractors_contacts_1con_contractors_ida"] = array (
  'name' => 'con_contractors_contacts_1con_contractors_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CON_CONTRACTORS_CONTACTS_1_FROM_CONTACTS_TITLE_ID',
  'id_name' => 'con_contractors_contacts_1con_contractors_ida',
  'link' => 'con_contractors_contacts_1',
  'table' => 'con_contractors',
  'module' => 'con_Contractors',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
