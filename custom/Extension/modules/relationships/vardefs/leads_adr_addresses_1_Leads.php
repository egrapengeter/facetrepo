<?php
// created: 2015-02-03 16:05:01
$dictionary["Lead"]["fields"]["leads_adr_addresses_1"] = array (
  'name' => 'leads_adr_addresses_1',
  'type' => 'link',
  'relationship' => 'leads_adr_addresses_1',
  'source' => 'non-db',
  'module' => 'adr_Addresses',
  'bean_name' => 'adr_Addresses',
  'vname' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_ADR_ADDRESSES_TITLE',
  'id_name' => 'leads_adr_addresses_1adr_addresses_idb',
);
$dictionary["Lead"]["fields"]["leads_adr_addresses_1_name"] = array (
  'name' => 'leads_adr_addresses_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_ADR_ADDRESSES_TITLE',
  'save' => true,
  'id_name' => 'leads_adr_addresses_1adr_addresses_idb',
  'link' => 'leads_adr_addresses_1',
  'table' => 'adr_addresses',
  'module' => 'adr_Addresses',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["leads_adr_addresses_1adr_addresses_idb"] = array (
  'name' => 'leads_adr_addresses_1adr_addresses_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_ADR_ADDRESSES_TITLE_ID',
  'id_name' => 'leads_adr_addresses_1adr_addresses_idb',
  'link' => 'leads_adr_addresses_1',
  'table' => 'adr_addresses',
  'module' => 'adr_Addresses',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
