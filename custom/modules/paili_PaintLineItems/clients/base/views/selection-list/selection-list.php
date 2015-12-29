<?php
$module_name = 'paili_PaintLineItems';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              1 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              3 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              4 => 
              array (
                'name' => 'color_c',
                'label' => 'LBL_COLOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              5 => 
              array (
                'name' => 'quantity_c',
                'label' => 'LBL_QUANTITY',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'gallons_c',
                'label' => 'LBL_GALLONS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'paint_paints_paili_paintlineitems_1_name',
                'label' => 'LBL_PAINT_PAINTS_PAILI_PAINTLINEITEMS_1_FROM_PAINT_PAINTS_TITLE',
                'enabled' => true,
                'id' => 'PAINT_PAINTS_PAILI_PAINTLINEITEMS_1PAINT_PAINTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'wo_line_item_num_c',
                'label' => 'LBL_WO_LINE_ITEM_NUM',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'opportunities_paili_paintlineitems_1_name',
                'label' => 'LBL_OPPORTUNITIES_PAILI_PAINTLINEITEMS_1_FROM_OPPORTUNITIES_TITLE',
                'enabled' => true,
                'id' => 'OPPORTUNITIES_PAILI_PAINTLINEITEMS_1OPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'paint_cost_c',
                'label' => 'LBL_PAINT_COST',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
