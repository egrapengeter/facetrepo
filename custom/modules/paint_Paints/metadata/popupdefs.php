<?php
$popupMeta = array (
    'moduleMain' => 'paint_Paints',
    'varName' => 'paint_Paints',
    'orderBy' => 'paint_paints.name',
    'whereClauses' => array (
  'name' => 'paint_paints.name',
),
    'searchInputs' => array (
  0 => 'paint_paints_number',
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
  'GALLONS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GALLONS',
    'width' => '10%',
  ),
  'COST_PER_GALLON_C' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_COST_PER_GALLON',
    'currency_format' => true,
    'width' => '10%',
  ),
),
);
