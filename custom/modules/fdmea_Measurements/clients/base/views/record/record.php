<?php
$module_name = 'fdmea_Measurements';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'assigned_user_name',
              1 => 'team_name',
              2 => 
              array (
                'name' => 'fdest_estimates_fdmea_measurements_1_name',
              ),
              3 => 
              array (
                'name' => 'paint_paints_fdmea_measurements_1_name',
              ),
              4 => 
              array (
                'name' => 'int_ext',
                'studio' => 'visible',
                'label' => 'LBL_INT_EXT',
              ),
              5 => 
              array (
                'name' => 'application_type',
                'studio' => 'visible',
                'label' => 'LBL_APPLICATION_TYPE',
              ),
              6 => 
              array (
                'name' => 'meas_area',
                'studio' => 'visible',
                'label' => 'LBL_MEAS_AREA',
              ),
              7 => 
              array (
                'name' => 'measurement_qty',
                'label' => 'LBL_MEASUREMENT_QTY',
              ),
              8 => 
              array (
                'name' => 'meas_prep_item',
                'studio' => 'visible',
                'label' => 'LBL_MEAS_PREP_ITEM',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'meas_int_item',
                'studio' => 'visible',
                'label' => 'LBL_MEAS_INT_ITEM',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'measured_ext_item',
                'studio' => 'visible',
                'label' => 'LBL_MEASURED_EXT_ITEM',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'paint_cost',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_PAINT_COST',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'gallons',
                'label' => 'LBL_GALLONS',
              ),
              3 => 
              array (
                'name' => 'hours_c',
                'label' => 'LBL_HOURS_C',
              ),
              4 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              6 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
