<?php
// created: 2015-02-03 16:05:01
$dictionary["adr_Addresses"]["fields"]["leads_adr_addresses_1"] = array (
  'name' => 'leads_adr_addresses_1',
  'type' => 'link',
  'relationship' => 'leads_adr_addresses_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_adr_addresses_1leads_ida',
);
$dictionary["adr_Addresses"]["fields"]["leads_adr_addresses_1_name"] = array (
  'name' => 'leads_adr_addresses_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_adr_addresses_1leads_ida',
  'link' => 'leads_adr_addresses_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["adr_Addresses"]["fields"]["leads_adr_addresses_1leads_ida"] = array (
  'name' => 'leads_adr_addresses_1leads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_LEADS_TITLE_ID',
  'id_name' => 'leads_adr_addresses_1leads_ida',
  'link' => 'leads_adr_addresses_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
