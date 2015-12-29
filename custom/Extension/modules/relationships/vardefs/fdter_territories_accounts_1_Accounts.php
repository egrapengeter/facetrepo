<?php
// created: 2015-09-23 17:20:46
$dictionary["Account"]["fields"]["fdter_territories_accounts_1"] = array (
  'name' => 'fdter_territories_accounts_1',
  'type' => 'link',
  'relationship' => 'fdter_territories_accounts_1',
  'source' => 'non-db',
  'module' => 'fdter_Territories',
  'bean_name' => 'fdter_Territories',
  'side' => 'right',
  'vname' => 'LBL_FDTER_TERRITORIES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'fdter_territories_accounts_1fdter_territories_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["fdter_territories_accounts_1_name"] = array (
  'name' => 'fdter_territories_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FDTER_TERRITORIES_ACCOUNTS_1_FROM_FDTER_TERRITORIES_TITLE',
  'save' => true,
  'id_name' => 'fdter_territories_accounts_1fdter_territories_ida',
  'link' => 'fdter_territories_accounts_1',
  'table' => 'fdter_territories',
  'module' => 'fdter_Territories',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["fdter_territories_accounts_1fdter_territories_ida"] = array (
  'name' => 'fdter_territories_accounts_1fdter_territories_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_FDTER_TERRITORIES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'fdter_territories_accounts_1fdter_territories_ida',
  'link' => 'fdter_territories_accounts_1',
  'table' => 'fdter_territories',
  'module' => 'fdter_Territories',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
