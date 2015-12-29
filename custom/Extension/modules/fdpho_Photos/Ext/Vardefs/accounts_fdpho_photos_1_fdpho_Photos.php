<?php
// created: 2015-10-23 11:59:50
$dictionary["fdpho_Photos"]["fields"]["accounts_fdpho_photos_1"] = array (
  'name' => 'accounts_fdpho_photos_1',
  'type' => 'link',
  'relationship' => 'accounts_fdpho_photos_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_FDPHO_PHOTOS_1_FROM_FDPHO_PHOTOS_TITLE',
  'id_name' => 'accounts_fdpho_photos_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["fdpho_Photos"]["fields"]["accounts_fdpho_photos_1_name"] = array (
  'name' => 'accounts_fdpho_photos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_FDPHO_PHOTOS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_fdpho_photos_1accounts_ida',
  'link' => 'accounts_fdpho_photos_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["fdpho_Photos"]["fields"]["accounts_fdpho_photos_1accounts_ida"] = array (
  'name' => 'accounts_fdpho_photos_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_FDPHO_PHOTOS_1_FROM_FDPHO_PHOTOS_TITLE_ID',
  'id_name' => 'accounts_fdpho_photos_1accounts_ida',
  'link' => 'accounts_fdpho_photos_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
