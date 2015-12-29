<?php
// created: 2015-09-18 16:44:17
$dictionary["Document"]["fields"]["fdest_estimates_documents_1"] = array (
  'name' => 'fdest_estimates_documents_1',
  'type' => 'link',
  'relationship' => 'fdest_estimates_documents_1',
  'source' => 'non-db',
  'module' => 'fdest_Estimates',
  'bean_name' => 'fdest_Estimates',
  'side' => 'right',
  'vname' => 'LBL_FDEST_ESTIMATES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'fdest_estimates_documents_1fdest_estimates_ida',
  'link-type' => 'one',
);
$dictionary["Document"]["fields"]["fdest_estimates_documents_1_name"] = array (
  'name' => 'fdest_estimates_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FDEST_ESTIMATES_DOCUMENTS_1_FROM_FDEST_ESTIMATES_TITLE',
  'save' => true,
  'id_name' => 'fdest_estimates_documents_1fdest_estimates_ida',
  'link' => 'fdest_estimates_documents_1',
  'table' => 'fdest_estimates',
  'module' => 'fdest_Estimates',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["fdest_estimates_documents_1fdest_estimates_ida"] = array (
  'name' => 'fdest_estimates_documents_1fdest_estimates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_FDEST_ESTIMATES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE_ID',
  'id_name' => 'fdest_estimates_documents_1fdest_estimates_ida',
  'link' => 'fdest_estimates_documents_1',
  'table' => 'fdest_estimates',
  'module' => 'fdest_Estimates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
