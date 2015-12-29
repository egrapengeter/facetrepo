<?php
// created: 2015-11-10 17:44:34
$subpanel_layout['list_fields'] = array (
  'opportunities_fdest_estimates_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_OPPORTUNITIES_FDEST_ESTIMATES_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_FDEST_ESTIMATES_1OPPORTUNITIES_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'opportunities_fdest_estimates_1opportunities_ida',
  ),
  'contractor_pickup' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CONTRACTOR_PICKUP',
    'width' => '10%',
  ),
  'qty_boards' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_QTY_BOARDS',
    'width' => '10%',
  ),
  'application_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_APPLICATION_TYPE',
    'width' => '10%',
  ),
  'total_hours' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_TOTAL_HOURS',
    'width' => '10%',
    'default' => true,
  ),
  'total_cost_labor' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_TOTAL_COST_LABOR',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'cont_wo_num_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CONT_WO_NUM_C',
    'width' => '10%',
  ),
  'interior_exterior_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_INTERIOR_EXTERIOR_C',
    'width' => '10%',
  ),
  'prep_items_list_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PREP_ITEMS_LIST',
    'sortable' => false,
    'width' => '10%',
  ),
  'prep_interior_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PREP_INTERIOR',
    'width' => '10%',
  ),
  'other_area_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_OTHER_AREA',
    'sortable' => false,
    'width' => '10%',
  ),
  'deck_patio_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_DECK_PATIO',
    'width' => '10%',
  ),
  'application_items_list_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_APPLICATION_ITEMS_LIST',
    'sortable' => false,
    'width' => '10%',
  ),
  'additional_areas_interior_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
    'width' => '10%',
  ),
  'primary_interior_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRIMARY_INTERIOR',
    'width' => '10%',
  ),
  'primary_area_exterior_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRIMARY_AREA_EXTERIOR',
    'width' => '10%',
  ),
  'primary_area_serviced_other_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRIMARY_AREA_SERVICED_OTHER',
    'sortable' => false,
    'width' => '10%',
  ),
  'extra_item_description_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EXTRA_ITEM_DESCRIPTION',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);