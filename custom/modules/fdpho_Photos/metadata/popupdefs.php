<?php
$popupMeta = array (
    'moduleMain' => 'fdpho_Photos',
    'varName' => 'fdpho_Photos',
    'orderBy' => 'fdpho_photos.name',
    'whereClauses' => array (
  'name' => 'fdpho_photos.name',
),
    'searchInputs' => array (
  0 => 'fdpho_photos_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ACCOUNTS_FDPHO_PHOTOS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_FDPHO_PHOTOS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_FDPHO_PHOTOS_1ACCOUNTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_fdpho_photos_1_name',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_ID' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
),
);
