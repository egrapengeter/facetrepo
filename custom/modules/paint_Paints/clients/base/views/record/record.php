<?php
$module_name = 'paint_Paints';
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
              0 => 
              array (
                'name' => 'paint_type_c',
                'studio' => 'visible',
                'label' => 'LBL_PAINT_TYPE',
              ),
              1 => 
              array (
                'name' => 'paint_groups_c',
                'studio' => 'visible',
                'label' => 'LBL_PAINT_GROUPS',
              ),
              2 => 
              array (
                'name' => 'gallons_c',
                'studio' => 'visible',
                'label' => 'LBL_GALLONS',
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'sqft_coverage_per_gal_c',
                'label' => 'LBL_SQFT_COVERAGE_PER_GAL',
              ),
              4 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'cost_per_gallon_c',
                'label' => 'LBL_COST_PER_GALLON',
                'span' => 12,
              ),
              5 => 'assigned_user_name',
              6 => 'team_name',
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'series_400_c',
                'studio' => 'visible',
                'label' => 'LBL_SERIES_400',
              ),
              1 => 
              array (
                'name' => 'series_200_c',
                'studio' => 'visible',
                'label' => 'LBL_SERIES_200',
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'cashmere_c',
                'studio' => 'visible',
                'label' => 'LBL_CASHMERE',
              ),
              3 => 
              array (
                'name' => 'duration_home_c',
                'studio' => 'visible',
                'label' => 'LBL_DURATION_HOME',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'proclassic_alkyd_c',
                'studio' => 'visible',
                'label' => 'LBL_PROCLASSIC_ALKYD',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'proclassic_acrylic_c',
                'studio' => 'visible',
                'label' => 'LBL_PROCLASSIC_ACRYLIC',
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'caulking_1_c',
                'studio' => 'visible',
                'label' => 'LBL_CAULKING_1',
              ),
              7 => 
              array (
                'name' => 'sundries_1_c',
                'studio' => 'visible',
                'label' => 'LBL_SUNDRIES_1',
              ),
              8 => 
              array (
                'name' => 'interior_primers_1_c',
                'studio' => 'visible',
                'label' => 'LBL_INTERIOR_PRIMERS_1',
                'span' => 12,
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'deck_stain_c',
                'studio' => 'visible',
                'label' => 'LBL_DECK_STAIN',
              ),
              1 => 
              array (
                'name' => 'vertical_c',
                'studio' => 'visible',
                'label' => 'LBL_VERTICAL',
              ),
              2 => 
              array (
                'name' => 'primers_1_c',
                'studio' => 'visible',
                'label' => 'PRIMERS 1',
              ),
              3 => 
              array (
                'name' => 'elastometrics_1_c',
                'studio' => 'visible',
                'label' => 'LBL_ELASTOMETRICS_1',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'satins_c',
                'studio' => 'visible',
                'label' => 'LBL_SATINS',
                'span' => 12,
              ),
            ),
          ),
          4 => 
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
                'name' => 'description',
                'span' => 12,
              ),
              1 => 
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
              2 => 
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
