<?php
$module_name = 'fdest_Estimates';
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
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL21',
            'label' => 'LBL_RECORDVIEW_PANEL21',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'total_price',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE',
              ),
              1 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              2 => 
              array (
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'total_price_paint',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_PAINT',
              ),
              4 => 
              array (
                'name' => 'total_price_labor',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_LABOR',
              ),
              5 => 
              array (
                'name' => 'total_price_boards',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_BOARDS',
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'total_price_supplies',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_SUPPLIES',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL22',
            'label' => 'LBL_RECORDVIEW_PANEL22',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'application_type',
                'studio' => 'visible',
                'label' => 'LBL_APPLICATION_TYPE',
              ),
              1 => 
              array (
                'name' => 'cust_paint_selection',
                'studio' => 'visible',
                'label' => 'LBL_CUST_PAINT_SELECTION',
              ),
              2 => 
              array (
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'total_price_paint_duration',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_PAINT_DURATION',
              ),
              5 => 
              array (
                'name' => 'total_price_paint_superpaint',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_PAINT_SUPERPAINT',
              ),
              6 => 
              array (
                'name' => 'total_price_paint_resiliance',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_PAINT_RESILIANCE',
              ),
              7 => 
              array (
                'name' => 'total_price_paint_woodscapes',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_PRICE_PAINT_WOODSCAPES',
                'span' => 6,
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL25',
            'label' => 'LBL_RECORDVIEW_PANEL25',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'total_cost',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST',
                'span' => 12,
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'total_cost_paint',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_PAINT',
              ),
              3 => 
              array (
                'name' => 'total_cost_labor',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_LABOR',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'total_cost_boards',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_BOARDS',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'total_cost_supplies',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_SUPPLIES',
                'span' => 6,
              ),
              6 => 
              array (
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'total_cost_paint_duration',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_PAINT_DURATION',
              ),
              9 => 
              array (
                'name' => 'total_cost_paint_resiliance',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_PAINT_RESILIANCE',
              ),
              10 => 
              array (
                'name' => 'total_cost_paint_superpaint',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_PAINT_SUPERPAINT',
              ),
              11 => 
              array (
                'name' => 'total_cost_paint_woodscapes',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TOTAL_COST_PAINT_WOODSCAPES',
                'span' => 6,
              ),
              12 => 
              array (
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL78',
            'label' => 'LBL_RECORDVIEW_PANEL78',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'cost_paint_duration_br',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_DURATION_BR',
              ),
              1 => 
              array (
                'name' => 'cost_paint_duration_sp',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_DURATION_SP',
              ),
              2 => 
              array (
                'name' => 'cost_paint_resiliance_br',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_RESILIANCE_BR',
              ),
              3 => 
              array (
                'name' => 'cost_paint_resiliance_sp',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_RESILIANCE_SP',
              ),
              4 => 
              array (
                'name' => 'cost_paint_superpaint_br',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_SUPERPAINT_BR',
              ),
              5 => 
              array (
                'name' => 'cost_paint_superpaint_sp',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_SUPERPAINT_SP',
              ),
              6 => 
              array (
                'name' => 'cost_paint_woodscapes_br',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_WOODSCAPES_BR',
              ),
              7 => 
              array (
                'name' => 'cost_paint_woodscapes_sp',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_COST_PAINT_WOODSCAPES_SP',
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL77',
            'label' => 'LBL_RECORDVIEW_PANEL77',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'hourly_cost_labor',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_HOURLY_COST_LABOR',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'complementary_margin_pct',
                'label' => 'LBL_COMPLEMENTARY_MARGIN_PCT',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'contractor_pickup',
                'studio' => 'visible',
                'label' => 'LBL_CONTRACTOR_PICKUP',
              ),
              3 => 
              array (
                'name' => 'customer_perboard_price',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_CUSTOMER_PERBOARD_PRICE',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'contractor_perboard_install',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_CONTRACTOR_PERBOARD_INSTALL',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'contractor_perboard_pickup',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_CONTRACTOR_PERBOARD_PICKUP',
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'cost_gal_resiliance',
                'label' => 'LBL_COST_GAL_RESILIANCE',
              ),
              7 => 
              array (
                'name' => 'cost_gal_superpaint',
                'label' => 'LBL_COST_GAL_SUPERPAINT',
              ),
              8 => 
              array (
                'name' => 'cost_gal_duration',
                'label' => 'LBL_COST_GAL_DURATION',
              ),
              9 => 
              array (
                'name' => 'cost_gal_woodscapes',
                'label' => 'LBL_COST_GAL_WOODSCAPES',
                'span' => 6,
              ),
              10 => 
              array (
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL23',
            'label' => 'LBL_RECORDVIEW_PANEL23',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_boards',
                'label' => 'LBL_QTY_BOARDS',
                'span' => 12,
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_prep_localizedfailures_fe',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_FE',
              ),
              3 => 
              array (
                'name' => 'qty_prep_caulking_fe',
                'label' => 'LBL_QTY_PREP_CAULKING_FE',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_prep_localizedfailures_fm',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_FM',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'qty_prep_caulking_fm',
                'label' => 'LBL_QTY_PREP_CAULKING_FM',
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'qty_prep_localizedfailures_fh',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_FH',
                'span' => 6,
              ),
              7 => 
              array (
                'name' => 'qty_prep_caulking_fh',
                'label' => 'LBL_QTY_PREP_CAULKING_FH',
                'span' => 6,
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_wash_fe',
                'label' => 'LBL_QTY_PREP_WASH_FE',
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_prep_wash_fm',
                'label' => 'LBL_QTY_PREP_WASH_FM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_prep_wash_fh',
                'label' => 'LBL_QTY_PREP_WASH_FH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          10 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL28',
            'label' => 'LBL_RECORDVIEW_PANEL28',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          11 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_rolling_fe',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_FE',
              ),
              1 => 
              array (
                'name' => 'qty_application_brushing_fe',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_FE',
              ),
              2 => 
              array (
                'name' => 'qty_application_rolling_fm',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_FM',
                'span' => 6,
              ),
              3 => 
              array (
                'name' => 'qty_application_brushing_fm',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_FM',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_rolling_fh',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_FH',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'qty_application_brushing_fh',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_FH',
                'span' => 6,
              ),
            ),
          ),
          12 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL9',
            'label' => 'LBL_RECORDVIEW_PANEL9',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_evestroughs_fe',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_FE',
              ),
              1 => 
              array (
                'name' => 'qty_application_soffits_fe',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_FE',
              ),
              2 => 
              array (
                'name' => 'qty_application_evestroughs_fm',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_FM',
                'span' => 6,
              ),
              3 => 
              array (
                'name' => 'qty_application_soffits_fm',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_FM',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_evestroughs_fh',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_FH',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'qty_application_soffits_fh',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_FH',
                'span' => 6,
              ),
            ),
          ),
          13 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL11',
            'label' => 'LBL_RECORDVIEW_PANEL11',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_downspouts_fe',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_FE',
              ),
              1 => 
              array (
                'name' => 'qty_application_windows_fe',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_FE',
              ),
              2 => 
              array (
                'name' => 'qty_application_downspouts_fm',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_FM',
                'span' => 6,
              ),
              3 => 
              array (
                'name' => 'qty_application_windows_fm',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_FM',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_downspouts_fh',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_FH',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'qty_application_windows_fh',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_FH',
                'span' => 6,
              ),
            ),
          ),
          14 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL14',
            'label' => 'LBL_RECORDVIEW_PANEL14',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_doors_fe',
                'label' => 'LBL_QTY_APPLICATION_DOORS_FE',
              ),
              1 => 
              array (
                'name' => 'qty_application_garagedoors_fe',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_FE',
              ),
              2 => 
              array (
                'name' => 'qty_application_doors_fm',
                'label' => 'LBL_QTY_APPLICATION_DOORS_FM',
                'span' => 6,
              ),
              3 => 
              array (
                'name' => 'qty_application_garagedoors_fm',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_FM',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_doors_fh',
                'label' => 'LBL_QTY_APPLICATION_DOORS_FH',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'qty_application_garagedoors_fh',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_FH',
                'span' => 6,
              ),
            ),
          ),
          15 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL12',
            'label' => 'LBL_RECORDVIEW_PANEL12',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_shutters_fe',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_FE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_application_shutters_fm',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_FM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_shutters_fh',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_FH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          16 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL16',
            'label' => 'LBL_RECORDVIEW_PANEL16',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          17 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL30',
            'label' => 'LBL_RECORDVIEW_PANEL30',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_localizedfailures_re',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_RE',
              ),
              1 => 
              array (
                'name' => 'qty_prep_caulking_re',
                'label' => 'LBL_QTY_PREP_CAULKING_RE',
              ),
              2 => 
              array (
                'name' => 'qty_prep_localizedfailures_rm',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_RM',
              ),
              3 => 
              array (
                'name' => 'qty_prep_caulking_rm',
                'label' => 'LBL_QTY_PREP_CAULKING_RM',
              ),
              4 => 
              array (
                'name' => 'qty_prep_localizedfailures_rh',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_RH',
              ),
              5 => 
              array (
                'name' => 'qty_prep_caulking_rh',
                'label' => 'LBL_QTY_PREP_CAULKING_RH',
              ),
            ),
          ),
          18 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL29',
            'label' => 'LBL_RECORDVIEW_PANEL29',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_wash_re',
                'label' => 'LBL_QTY_PREP_WASH_RE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_prep_wash_rm',
                'label' => 'LBL_QTY_PREP_WASH_RM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_prep_wash_rh',
                'label' => 'LBL_QTY_PREP_WASH_RH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          19 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL37',
            'label' => 'LBL_RECORDVIEW_PANEL37',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_rolling_re',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_RE',
              ),
              1 => 
              array (
                'name' => 'qty_application_brushing_re',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_RE',
              ),
              2 => 
              array (
                'name' => 'qty_application_rolling_rm',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_RM',
              ),
              3 => 
              array (
                'name' => 'qty_application_brushing_rm',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_RM',
              ),
              4 => 
              array (
                'name' => 'qty_application_rolling_rh',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_RH',
              ),
              5 => 
              array (
                'name' => 'qty_application_brushing_rh',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_RH',
              ),
            ),
          ),
          20 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL36',
            'label' => 'LBL_RECORDVIEW_PANEL36',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_evestroughs_re',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_RE',
              ),
              1 => 
              array (
                'name' => 'qty_application_soffits_re',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_RE',
              ),
              2 => 
              array (
                'name' => 'qty_application_evestroughs_rm',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_RM',
              ),
              3 => 
              array (
                'name' => 'qty_application_soffits_rm',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_RM',
              ),
              4 => 
              array (
                'name' => 'qty_application_evestroughs_rh',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_RH',
              ),
              5 => 
              array (
                'name' => 'qty_application_soffits_rh',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_RH',
              ),
            ),
          ),
          21 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL35',
            'label' => 'LBL_RECORDVIEW_PANEL35',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_downspouts_re',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_RE',
              ),
              1 => 
              array (
                'name' => 'qty_application_windows_re',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_RE',
              ),
              2 => 
              array (
                'name' => 'qty_application_downspouts_rm',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_RM',
              ),
              3 => 
              array (
                'name' => 'qty_application_windows_rm',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_RM',
              ),
              4 => 
              array (
                'name' => 'qty_application_downspouts_rh',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_RH',
              ),
              5 => 
              array (
                'name' => 'qty_application_windows_rh',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_RH',
              ),
            ),
          ),
          22 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL34',
            'label' => 'LBL_RECORDVIEW_PANEL34',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_doors_re',
                'label' => 'LBL_QTY_APPLICATION_DOORS_RE',
              ),
              1 => 
              array (
                'name' => 'qty_application_garagedoors_re',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_RE',
              ),
              2 => 
              array (
                'name' => 'qty_application_doors_rm',
                'label' => 'LBL_QTY_APPLICATION_DOORS_RM',
              ),
              3 => 
              array (
                'name' => 'qty_application_garagedoors_rm',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_RM',
              ),
              4 => 
              array (
                'name' => 'qty_application_doors_rh',
                'label' => 'LBL_QTY_APPLICATION_DOORS_RH',
              ),
              5 => 
              array (
                'name' => 'qty_application_garagedoors_rh',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_RH',
              ),
            ),
          ),
          23 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL33',
            'label' => 'LBL_RECORDVIEW_PANEL33',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_shutters_re',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_RE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_application_shutters_rm',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_RM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_shutters_rh',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_RH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          24 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL17',
            'label' => 'LBL_RECORDVIEW_PANEL17',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          25 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL46',
            'label' => 'LBL_RECORDVIEW_PANEL46',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_localizedfailures_be',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_BE',
              ),
              1 => 
              array (
                'name' => 'qty_prep_caulking_be',
                'label' => 'LBL_QTY_PREP_CAULKING_BE',
              ),
              2 => 
              array (
                'name' => 'qty_prep_localizedfailures_bm',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_BM',
              ),
              3 => 
              array (
                'name' => 'qty_prep_caulking_bm',
                'label' => 'LBL_QTY_PREP_CAULKING_BM',
              ),
              4 => 
              array (
                'name' => 'qty_prep_localizedfailures_bh',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_BH',
              ),
              5 => 
              array (
                'name' => 'qty_prep_caulking_bh',
                'label' => 'LBL_QTY_PREP_CAULKING_BH',
              ),
            ),
          ),
          26 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL44',
            'label' => 'LBL_RECORDVIEW_PANEL44',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_wash_be',
                'label' => 'LBL_QTY_PREP_WASH_BE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_prep_wash_bm',
                'label' => 'LBL_QTY_PREP_WASH_BM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_prep_wash_bh',
                'label' => 'LBL_QTY_PREP_WASH_BH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          27 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL42',
            'label' => 'LBL_RECORDVIEW_PANEL42',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_rolling_be',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_BE',
              ),
              1 => 
              array (
                'name' => 'qty_application_brushing_be',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_BE',
              ),
              2 => 
              array (
                'name' => 'qty_application_rolling_bm',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_BM',
              ),
              3 => 
              array (
                'name' => 'qty_application_brushing_bm',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_BM',
              ),
              4 => 
              array (
                'name' => 'qty_application_rolling_bh',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_BH',
              ),
              5 => 
              array (
                'name' => 'qty_application_brushing_bh',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_BH',
              ),
            ),
          ),
          28 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL41',
            'label' => 'LBL_RECORDVIEW_PANEL41',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_evestroughs_be',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_BE',
              ),
              1 => 
              array (
                'name' => 'qty_application_soffits_be',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_BE',
              ),
              2 => 
              array (
                'name' => 'qty_application_evestroughs_bm',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_BM',
              ),
              3 => 
              array (
                'name' => 'qty_application_soffits_bm',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_BM',
              ),
              4 => 
              array (
                'name' => 'qty_application_evestroughs_bh',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_BH',
              ),
              5 => 
              array (
                'name' => 'qty_application_soffits_bh',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_BH',
              ),
            ),
          ),
          29 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL40',
            'label' => 'LBL_RECORDVIEW_PANEL40',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_downspouts_be',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_BE',
              ),
              1 => 
              array (
                'name' => 'qty_application_windows_be',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_BE',
              ),
              2 => 
              array (
                'name' => 'qty_application_downspouts_bm',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_BM',
              ),
              3 => 
              array (
                'name' => 'qty_application_windows_bm',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_BM',
              ),
              4 => 
              array (
                'name' => 'qty_application_downspouts_bh',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_BH',
              ),
              5 => 
              array (
                'name' => 'qty_application_windows_bh',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_BH',
              ),
            ),
          ),
          30 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL39',
            'label' => 'LBL_RECORDVIEW_PANEL39',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_doors_be',
                'label' => 'LBL_QTY_APPLICATION_DOORS_BE',
              ),
              1 => 
              array (
                'name' => 'qty_application_garagedoors_be',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_BE',
              ),
              2 => 
              array (
                'name' => 'qty_application_doors_bm',
                'label' => 'LBL_QTY_APPLICATION_DOORS_BM',
              ),
              3 => 
              array (
                'name' => 'qty_application_garagedoors_bm',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_BM',
              ),
              4 => 
              array (
                'name' => 'qty_application_doors_bh',
                'label' => 'LBL_QTY_APPLICATION_DOORS_BH',
              ),
              5 => 
              array (
                'name' => 'qty_application_garagedoors_bh',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_BH',
              ),
            ),
          ),
          31 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL38',
            'label' => 'LBL_RECORDVIEW_PANEL38',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_shutters_be',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_BE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_application_shutters_bm',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_BM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_shutters_bh',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_BH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          32 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL18',
            'label' => 'LBL_RECORDVIEW_PANEL18',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          33 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL54',
            'label' => 'LBL_RECORDVIEW_PANEL54',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_localizedfailures_le',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_LE',
              ),
              1 => 
              array (
                'name' => 'qty_prep_caulking_le',
                'label' => 'LBL_QTY_PREP_CAULKING_LE',
              ),
              2 => 
              array (
                'name' => 'qty_prep_localizedfailures_lm',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_LM',
              ),
              3 => 
              array (
                'name' => 'qty_prep_caulking_lm',
                'label' => 'LBL_QTY_PREP_CAULKING_LM',
              ),
              4 => 
              array (
                'name' => 'qty_prep_localizedfailures_lh',
                'label' => 'LBL_QTY_PREP_LOCALIZEDFAILURES_LH',
              ),
              5 => 
              array (
                'name' => 'qty_prep_caulking_lh',
                'label' => 'LBL_QTY_PREP_CAULKING_LH',
              ),
            ),
          ),
          34 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL53',
            'label' => 'LBL_RECORDVIEW_PANEL53',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_wash_le',
                'label' => 'LBL_QTY_PREP_WASH_LE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_prep_wash_lm',
                'label' => 'LBL_QTY_PREP_WASH_LM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_prep_wash_lh',
                'label' => 'LBL_QTY_PREP_WASH_LH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          35 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL51',
            'label' => 'LBL_RECORDVIEW_PANEL51',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_rolling_le',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_LE',
              ),
              1 => 
              array (
                'name' => 'qty_application_brushing_le',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_LE',
              ),
              2 => 
              array (
                'name' => 'qty_application_rolling_lm',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_LM',
              ),
              3 => 
              array (
                'name' => 'qty_application_brushing_lm',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_LM',
              ),
              4 => 
              array (
                'name' => 'qty_application_rolling_lh',
                'label' => 'LBL_QTY_APPLICATION_ROLLING_LH',
              ),
              5 => 
              array (
                'name' => 'qty_application_brushing_lh',
                'label' => 'LBL_QTY_APPLICATION_BRUSHING_LH',
              ),
            ),
          ),
          36 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL50',
            'label' => 'LBL_RECORDVIEW_PANEL50',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_evestroughs_le',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_LE',
              ),
              1 => 
              array (
                'name' => 'qty_application_soffits_le',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_LE',
              ),
              2 => 
              array (
                'name' => 'qty_application_evestroughs_lm',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_LM',
              ),
              3 => 
              array (
                'name' => 'qty_application_soffits_lm',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_LM',
              ),
              4 => 
              array (
                'name' => 'qty_application_evestroughs_lh',
                'label' => 'LBL_QTY_APPLICATION_EVESTROUGHS_LH',
              ),
              5 => 
              array (
                'name' => 'qty_application_soffits_lh',
                'label' => 'LBL_QTY_APPLICATION_SOFFITS_LH',
              ),
            ),
          ),
          37 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL49',
            'label' => 'LBL_RECORDVIEW_PANEL49',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_downspouts_le',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_LE',
              ),
              1 => 
              array (
                'name' => 'qty_application_windows_le',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_LE',
              ),
              2 => 
              array (
                'name' => 'qty_application_downspouts_lm',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_LM',
              ),
              3 => 
              array (
                'name' => 'qty_application_windows_lm',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_LM',
              ),
              4 => 
              array (
                'name' => 'qty_application_downspouts_lh',
                'label' => 'LBL_QTY_APPLICATION_DOWNSPOUTS_LH',
              ),
              5 => 
              array (
                'name' => 'qty_application_windows_lh',
                'label' => 'LBL_QTY_APPLICATION_WINDOWS_LH',
              ),
            ),
          ),
          38 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL48',
            'label' => 'LBL_RECORDVIEW_PANEL48',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_doors_le',
                'label' => 'LBL_QTY_APPLICATION_DOORS_LE',
              ),
              1 => 
              array (
                'name' => 'qty_application_garagedoors_le',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_LE',
              ),
              2 => 
              array (
                'name' => 'qty_application_doors_lm',
                'label' => 'LBL_QTY_APPLICATION_DOORS_LM',
              ),
              3 => 
              array (
                'name' => 'qty_application_garagedoors_lm',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_LM',
              ),
              4 => 
              array (
                'name' => 'qty_application_doors_lh',
                'label' => 'LBL_QTY_APPLICATION_DOORS_LH',
              ),
              5 => 
              array (
                'name' => 'qty_application_garagedoors_lh',
                'label' => 'LBL_QTY_APPLICATION_GARAGEDOORS_LH',
              ),
            ),
          ),
          39 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL47',
            'label' => 'LBL_RECORDVIEW_PANEL47',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_application_shutters_le',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_LE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'qty_application_shutters_lm',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_LM',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'qty_application_shutters_lh',
                'label' => 'LBL_QTY_APPLICATION_SHUTTERS_LH',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          40 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL73',
            'label' => 'LBL_RECORDVIEW_PANEL73',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          41 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL74',
            'label' => 'LBL_RECORDVIEW_PANEL74',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_prep_localfail_tot_e',
                'label' => 'LBL_QTY_PREP_LOCALFAIL_TOT_E',
              ),
              1 => 
              array (
                'name' => 'std_prep_localfail_tot_e',
                'label' => 'LBL_STD_PREP_LOCALFAIL_TOT_E',
              ),
              2 => 
              array (
                'name' => 'qty_prep_localfail_tot_m',
                'label' => 'LBL_QTY_PREP_LOCALFAIL_TOT_M',
              ),
              3 => 
              array (
                'name' => 'std_prep_localfail_tot_m',
                'label' => 'LBL_STD_PREP_LOCALFAIL_TOT_M',
              ),
              4 => 
              array (
                'name' => 'qty_prep_localfail_tot_h',
                'label' => 'LBL_QTY_PREP_LOCALFAIL_TOT_H',
              ),
              5 => 
              array (
                'name' => 'std_prep_localfail_tot_h',
                'label' => 'LBL_STD_PREP_LOCALFAIL_TOT_H',
              ),
              6 => 
              array (
                'name' => 'qty_prep_caulking_tot_e',
                'label' => 'LBL_QTY_PREP_CAULKING_TOT_E',
              ),
              7 => 
              array (
                'name' => 'std_prep_caulking_tot_e',
                'label' => 'LBL_STD_PREP_CAULKING_TOT_E',
              ),
              8 => 
              array (
                'name' => 'qty_prep_caulking_tot_m',
                'label' => 'LBL_QTY_PREP_CAULKING_TOT_M',
              ),
              9 => 
              array (
                'name' => 'std_prep_caulking_tot_m',
                'label' => 'LBL_STD_PREP_CAULKING_TOT_M',
              ),
              10 => 
              array (
                'name' => 'qty_prep_caulking_tot_h',
                'label' => 'LBL_QTY_PREP_CAULKING_TOT_H',
              ),
              11 => 
              array (
                'name' => 'std_prep_caulking_tot_h',
                'label' => 'LBL_STD_PREP_CAULKING_TOT_H',
              ),
              12 => 
              array (
                'name' => 'qty_prep_wash_tot_e',
                'label' => 'LBL_QTY_PREP_WASH_TOT_E',
              ),
              13 => 
              array (
                'name' => 'std_prep_wash_tot_e',
                'label' => 'LBL_STD_PREP_WASH_TOT_E',
              ),
              14 => 
              array (
                'name' => 'qty_prep_wash_tot_m',
                'label' => 'LBL_QTY_PREP_WASH_TOT_M',
              ),
              15 => 
              array (
                'name' => 'std_prep_wash_tot_m',
                'label' => 'LBL_STD_PREP_WASH_TOT_M',
              ),
              16 => 
              array (
                'name' => 'qty_prep_wash_tot_h',
                'label' => 'LBL_QTY_PREP_WASH_TOT_H',
              ),
              17 => 
              array (
                'name' => 'std_prep_wash_tot_h',
                'label' => 'LBL_STD_PREP_WASH_TOT_H',
              ),
            ),
          ),
          42 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL75',
            'label' => 'LBL_RECORDVIEW_PANEL75',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'qty_appl_rolling_tot_e',
                'label' => 'LBL_QTY_APPL_ROLLING_TOT_E',
              ),
              1 => 
              array (
                'name' => 'std_appl_rolling_tot_e',
                'label' => 'LBL_STD_APPL_ROLLING_TOT_E',
              ),
              2 => 
              array (
                'name' => 'qty_appl_rolling_tot_m',
                'label' => 'LBL_QTY_APPL_ROLLING_TOT_M',
              ),
              3 => 
              array (
                'name' => 'std_appl_rolling_tot_m',
                'label' => 'LBL_STD_APPL_ROLLING_TOT_M',
              ),
              4 => 
              array (
                'name' => 'qty_appl_rolling_tot_h',
                'label' => 'LBL_QTY_APPL_ROLLING_TOT_H',
              ),
              5 => 
              array (
                'name' => 'std_appl_rolling_tot_h',
                'label' => 'LBL_STD_APPL_ROLLING_TOT_H',
              ),
              6 => 
              array (
                'name' => 'qty_appl_brushing_tot_e',
                'label' => 'LBL_QTY_APPL_BRUSHING_TOT_E',
              ),
              7 => 
              array (
                'name' => 'std_appl_brushing_tot_e',
                'label' => 'LBL_STD_APPL_BRUSHING_TOT_E',
              ),
              8 => 
              array (
                'name' => 'qty_appl_brushing_tot_m',
                'label' => 'LBL_QTY_APPL_BRUSHING_TOT_M',
              ),
              9 => 
              array (
                'name' => 'std_appl_brushing_tot_m',
                'label' => 'LBL_STD_APPL_BRUSHING_TOT_M',
              ),
              10 => 
              array (
                'name' => 'qty_appl_brushing_tot_h',
                'label' => 'LBL_QTY_APPL_BRUSHING_TOT_H',
              ),
              11 => 
              array (
                'name' => 'std_appl_brushing_tot_h',
                'label' => 'LBL_STD_APPL_BRUSHING_TOT_H',
              ),
              12 => 
              array (
                'name' => 'qty_appl_evestrou_tot_e',
                'label' => 'LBL_QTY_APPL_EVESTROU_TOT_E',
              ),
              13 => 
              array (
                'name' => 'std_appl_evestrou_tot_e',
                'label' => 'LBL_STD_APPL_EVESTROU_TOT_E',
              ),
              14 => 
              array (
                'name' => 'qty_appl_evestrou_tot_m',
                'label' => 'LBL_QTY_APPL_EVESTROU_TOT_M',
              ),
              15 => 
              array (
                'name' => 'std_appl_evestrou_tot_m',
                'label' => 'LBL_STD_APPL_EVESTROU_TOT_M',
              ),
              16 => 
              array (
                'name' => 'qty_appl_evestrou_tot_h',
                'label' => 'LBL_QTY_APPL_EVESTROU_TOT_H',
              ),
              17 => 
              array (
                'name' => 'std_appl_evestrou_tot_h',
                'label' => 'LBL_STD_APPL_EVESTROU_TOT_H',
              ),
              18 => 
              array (
                'name' => 'qty_appl_soffits_tot_e',
                'label' => 'LBL_QTY_APPL_SOFFITS_TOT_E',
              ),
              19 => 
              array (
                'name' => 'std_appl_soffits_tot_e',
                'label' => 'LBL_STD_APPL_SOFFITS_TOT_E',
              ),
              20 => 
              array (
                'name' => 'qty_appl_soffits_tot_m',
                'label' => 'LBL_QTY_APPL_SOFFITS_TOT_M',
              ),
              21 => 
              array (
                'name' => 'std_appl_soffits_tot_m',
                'label' => 'LBL_STD_APPL_SOFFITS_TOT_M',
              ),
              22 => 
              array (
                'name' => 'qty_appl_soffits_tot_h',
                'label' => 'LBL_QTY_APPL_SOFFITS_TOT_H',
              ),
              23 => 
              array (
                'name' => 'std_appl_soffits_tot_h',
                'label' => 'LBL_STD_APPL_SOFFITS_TOT_H',
              ),
              24 => 
              array (
                'name' => 'qty_appl_downspou_tot_e',
                'label' => 'LBL_QTY_APPL_DOWNSPOU_TOT_E',
              ),
              25 => 
              array (
                'name' => 'std_appl_downspou_tot_e',
                'label' => 'LBL_STD_APPL_DOWNSPOU_TOT_E',
              ),
              26 => 
              array (
                'name' => 'qty_appl_downspou_tot_m',
                'label' => 'LBL_QTY_APPL_DOWNSPOU_TOT_M',
              ),
              27 => 
              array (
                'name' => 'std_appl_downspou_tot_m',
                'label' => 'LBL_STD_APPL_DOWNSPOU_TOT_M',
              ),
              28 => 
              array (
                'name' => 'qty_appl_downspou_tot_h',
                'label' => 'LBL_QTY_APPL_DOWNSPOU_TOT_H',
              ),
              29 => 
              array (
                'name' => 'std_appl_downspou_tot_h',
                'label' => 'LBL_STD_APPL_DOWNSPOU_TOT_H',
              ),
              30 => 
              array (
                'name' => 'qty_appl_windows_tot_e',
                'label' => 'LBL_QTY_APPL_WINDOWS_TOT_E',
              ),
              31 => 
              array (
                'name' => 'std_appl_windows_tot_e',
                'label' => 'LBL_STD_APPL_WINDOWS_TOT_E',
              ),
              32 => 
              array (
                'name' => 'qty_appl_windows_tot_m',
                'label' => 'LBL_QTY_APPL_WINDOWS_TOT_M',
              ),
              33 => 
              array (
                'name' => 'std_appl_windows_tot_m',
                'label' => 'LBL_STD_APPL_WINDOWS_TOT_M',
              ),
              34 => 
              array (
                'name' => 'qty_appl_windows_tot_h',
                'label' => 'LBL_QTY_APPL_WINDOWS_TOT_H',
              ),
              35 => 
              array (
                'name' => 'std_appl_windows_tot_h',
                'label' => 'LBL_STD_APPL_WINDOWS_TOT_H',
              ),
              36 => 
              array (
                'name' => 'qty_appl_doors_tot_e',
                'label' => 'LBL_QTY_APPL_DOORS_TOT_E',
              ),
              37 => 
              array (
                'name' => 'std_appl_doors_tot_e',
                'label' => 'LBL_STD_APPL_DOORS_TOT_E',
              ),
              38 => 
              array (
                'name' => 'qty_appl_doors_tot_m',
                'label' => 'LBL_QTY_APPL_DOORS_TOT_M',
              ),
              39 => 
              array (
                'name' => 'std_appl_doors_tot_m',
                'label' => 'LBL_STD_APPL_DOORS_TOT_M',
              ),
              40 => 
              array (
                'name' => 'qty_appl_doors_tot_h',
                'label' => 'LBL_QTY_APPL_DOORS_TOT_H',
              ),
              41 => 
              array (
                'name' => 'std_appl_doors_tot_h',
                'label' => 'LBL_STD_APPL_DOORS_TOT_H',
              ),
              42 => 
              array (
                'name' => 'qty_appl_garagedo_tot_e',
                'label' => 'LBL_QTY_APPL_GARAGEDO_TOT_E',
              ),
              43 => 
              array (
                'name' => 'std_appl_garagedo_tot_e',
                'label' => 'LBL_STD_APPL_GARAGEDO_TOT_E',
              ),
              44 => 
              array (
                'name' => 'qty_appl_garagedo_tot_m',
                'label' => 'LBL_QTY_APPL_GARAGEDO_TOT_M',
              ),
              45 => 
              array (
                'name' => 'std_appl_garagedo_tot_m',
                'label' => 'LBL_STD_APPL_GARAGEDO_TOT_M',
              ),
              46 => 
              array (
                'name' => 'qty_appl_garagedo_tot_h',
                'label' => 'LBL_QTY_APPL_GARAGEDO_TOT_H',
              ),
              47 => 
              array (
                'name' => 'std_appl_garagedo_tot_h',
                'label' => 'LBL_STD_APPL_GARAGEDO_TOT_H',
              ),
              48 => 
              array (
                'name' => 'qty_appl_shutters_tot_e',
                'label' => 'LBL_QTY_APPL_SHUTTERS_TOT_E',
              ),
              49 => 
              array (
                'name' => 'std_appl_shutters_tot_e',
                'label' => 'LBL_STD_APPL_SHUTTERS_TOT_E',
              ),
              50 => 
              array (
                'name' => 'qty_appl_shutters_tot_m',
                'label' => 'LBL_QTY_APPL_SHUTTERS_TOT_M',
              ),
              51 => 
              array (
                'name' => 'std_appl_shutters_tot_m',
                'label' => 'LBL_STD_APPL_SHUTTERS_TOT_M',
              ),
              52 => 
              array (
                'name' => 'qty_appl_shutters_tot_h',
                'label' => 'LBL_QTY_APPL_SHUTTERS_TOT_H',
              ),
              53 => 
              array (
                'name' => 'std_appl_shutters_tot_h',
                'label' => 'LBL_STD_APPL_SHUTTERS_TOT_H',
              ),
            ),
          ),
          43 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL72',
            'label' => 'LBL_RECORDVIEW_PANEL72',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'total_hours',
                'label' => 'LBL_TOTAL_HOURS',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'total_spray_hours',
                'label' => 'LBL_TOTAL_SPRAY_HOURS',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'total_hours_appl_hours_br',
                'label' => 'LBL_TOTAL_HOURS_APPL_HOURS_BR',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'total_hours_appl_hours_sp',
                'label' => 'LBL_TOTAL_HOURS_APPL_HOURS_SP',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'total_hours_appl_hours_ta',
                'label' => 'LBL_TOTAL_HOURS_APPL_HOURS_TA',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'total_hours_appl_backroll_br',
                'label' => 'LBL_TOTAL_HOURS_APPL_BACKROLL_BR',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          44 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL69',
            'label' => 'LBL_RECORDVIEW_PANEL69',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'hours_prep_localfail_br',
                'label' => 'LBL_HOURS_PREP_LOCALFAIL_BR',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'hours_prep_caulking_br',
                'label' => 'LBL_HOURS_PREP_CAULKING_BR',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'hours_prep_wash_br',
                'label' => 'LBL_HOURS_PREP_WASH_BR',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'hours_appl_rolling_br',
                'label' => 'LBL_HOURS_APPL_ROLLING_BR',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'hours_appl_brushing_br',
                'label' => 'LBL_HOURS_APPL_BRUSHING_BR',
                'span' => 12,
              ),
              6 => 
              array (
                'name' => 'hours_appl_evestrou_br',
                'label' => 'LBL_HOURS_APPL_EVESTROU_BR',
                'span' => 12,
              ),
              7 => 
              array (
                'name' => 'hours_appl_soffits_br',
                'label' => 'LBL_HOURS_APPL_SOFFITS_BR',
                'span' => 12,
              ),
              8 => 
              array (
                'name' => 'hours_appl_downspou_br',
                'label' => 'LBL_HOURS_APPL_DOWNSPOU_BR',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'hours_appl_windows_br',
                'label' => 'LBL_HOURS_APPL_WINDOWS_BR',
                'span' => 12,
              ),
              10 => 
              array (
                'name' => 'hours_appl_doors_br',
                'label' => 'LBL_HOURS_APPL_DOORS_BR',
              ),
              11 => 
              array (
                'name' => 'hours_appl_garagedo_br',
                'label' => 'LBL_HOURS_APPL_GARAGEDO_BR',
              ),
              12 => 
              array (
                'name' => 'hours_appl_shutters_br',
                'label' => 'LBL_HOURS_APPL_SHUTTERS_BR',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          45 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL68',
            'label' => 'LBL_RECORDVIEW_PANEL68',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'hours_appl_rolling_sp',
                'label' => 'LBL_HOURS_APPL_ROLLING_SP',
              ),
              1 => 
              array (
                'name' => 'hours_appl_brushing_sp',
                'label' => 'LBL_HOURS_APPL_BRUSHING_SP',
              ),
              2 => 
              array (
                'name' => 'hours_appl_evestrou_sp',
                'label' => 'LBL_HOURS_APPL_EVESTROU_SP',
              ),
              3 => 
              array (
                'name' => 'hours_appl_soffits_sp',
                'label' => 'LBL_HOURS_APPL_SOFFITS_SP',
              ),
              4 => 
              array (
                'name' => 'hours_appl_downspou_sp',
                'label' => 'LBL_HOURS_APPL_DOWNSPOU_SP',
              ),
              5 => 
              array (
                'name' => 'hours_appl_windows_sp',
                'label' => 'LBL_HOURS_APPL_WINDOWS_SP',
              ),
              6 => 
              array (
                'name' => 'hours_appl_doors_sp',
                'label' => 'LBL_HOURS_APPL_DOORS_SP',
              ),
              7 => 
              array (
                'name' => 'hours_appl_garagedo_sp',
                'label' => 'LBL_HOURS_APPL_GARAGEDO_SP',
              ),
              8 => 
              array (
                'name' => 'hours_appl_shutters_sp',
                'label' => 'LBL_HOURS_APPL_SHUTTERS_SP',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          46 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL67',
            'label' => 'LBL_RECORDVIEW_PANEL67',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'hours_appl_rolling_ta',
                'label' => 'LBL_HOURS_APPL_ROLLING_TA',
              ),
              1 => 
              array (
                'name' => 'hours_appl_brushing_ta',
                'label' => 'LBL_HOURS_APPL_BRUSHING_TA',
              ),
              2 => 
              array (
                'name' => 'hours_appl_downspou_ta',
                'label' => 'LBL_HOURS_APPL_DOWNSPOU_TA',
              ),
              3 => 
              array (
                'name' => 'hours_appl_windows_ta',
                'label' => 'LBL_HOURS_APPL_WINDOWS_TA',
              ),
              4 => 
              array (
                'name' => 'hours_appl_evestrou_ta',
                'label' => 'LBL_HOURS_APPL_EVESTROU_TA',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'hours_appl_soffits_ta',
                'label' => 'LBL_HOURS_APPL_SOFFITS_TA',
              ),
              6 => 
              array (
                'name' => 'hours_appl_doors_ta',
                'label' => 'LBL_HOURS_APPL_DOORS_TA',
              ),
              7 => 
              array (
                'name' => 'hours_appl_garagedo_ta',
                'label' => 'LBL_HOURS_APPL_GARAGEDO_TA',
              ),
              8 => 
              array (
                'name' => 'hours_appl_shutters_ta',
                'label' => 'LBL_HOURS_APPL_SHUTTERS_TA',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          47 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL79',
            'label' => 'LBL_RECORDVIEW_PANEL79',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          48 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL83',
            'label' => 'LBL_RECORDVIEW_PANEL83',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tot_gal_br_duration',
                'label' => 'LBL_TOT_GAL_BR_DURATION',
              ),
              1 => 
              array (
                'name' => 'tot_gal_sp_duration',
                'label' => 'LBL_TOT_GAL_SP_DURATION',
              ),
              2 => 
              array (
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'gal_appl_rolling_duration',
                'label' => 'LBL_GAL_APPL_ROLLING_DURATION',
              ),
              5 => 
              array (
                'name' => 'gal_appl_brushing_duration',
                'label' => 'LBL_GAL_APPL_BRUSHING_DURATION',
              ),
              6 => 
              array (
                'name' => 'gal_appl_evestrou_duration',
                'label' => 'LBL_GAL_APPL_EVESTROU_DURATION',
              ),
              7 => 
              array (
                'name' => 'gal_appl_soffits_duration',
                'label' => 'LBL_GAL_APPL_SOFFITS_DURATION',
              ),
              8 => 
              array (
                'name' => 'gal_appl_downspou_duration',
                'label' => 'LBL_GAL_APPL_DOWNSPOU_DURATION',
              ),
              9 => 
              array (
                'name' => 'gal_appl_windows_duration',
                'label' => 'LBL_GAL_APPL_WINDOWS_DURATION',
              ),
              10 => 
              array (
                'name' => 'gal_appl_doors_duration',
                'label' => 'LBL_GAL_APPL_DOORS_DURATION',
                'span' => 6,
              ),
              11 => 
              array (
                'name' => 'gal_appl_garagedo_duration',
                'label' => 'LBL_GAL_APPL_GARAGEDO_DURATION',
              ),
              12 => 
              array (
                'name' => 'gal_appl_shutters_duration',
                'label' => 'LBL_GAL_APPL_SHUTTERS_DURATION',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          49 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL82',
            'label' => 'LBL_RECORDVIEW_PANEL82',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tot_gal_br_super_paint',
                'label' => 'LBL_TOT_GAL_BR_SUPER_PAINT',
              ),
              1 => 
              array (
                'name' => 'tot_gal_sp_super_paint',
                'label' => 'LBL_TOT_GAL_SP_SUPER_PAINT',
              ),
              2 => 
              array (
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'gal_appl_rolling_super_paint',
                'label' => 'LBL_GAL_APPL_ROLLING_SUPER_PAINT',
              ),
              5 => 
              array (
                'name' => 'gal_appl_brushing_super_paint',
                'label' => 'LBL_GAL_APPL_BRUSHING_SUPER_PAINT',
              ),
              6 => 
              array (
                'name' => 'gal_appl_evestrou_super_paint',
                'label' => 'LBL_GAL_APPL_EVESTROU_SUPER_PAINT',
              ),
              7 => 
              array (
                'name' => 'gal_appl_soffits_super_paint',
                'label' => 'LBL_GAL_APPL_SOFFITS_SUPER_PAINT',
              ),
              8 => 
              array (
                'name' => 'gal_appl_downspou_super_paint',
                'label' => 'LBL_GAL_APPL_DOWNSPOU_SUPER_PAINT',
              ),
              9 => 
              array (
                'name' => 'gal_appl_windows_super_paint',
                'label' => 'LBL_GAL_APPL_WINDOWS_SUPER_PAINT',
              ),
              10 => 
              array (
                'name' => 'gal_appl_doors_super_paint',
                'label' => 'LBL_GAL_APPL_DOORS_SUPER_PAINT',
              ),
              11 => 
              array (
                'name' => 'gal_appl_garagedo_super_paint',
                'label' => 'LBL_GAL_APPL_GARAGEDO_SUPER_PAINT',
              ),
              12 => 
              array (
                'name' => 'gal_appl_shutters_super_paint',
                'label' => 'LBL_GAL_APPL_SHUTTERS_SUPER_PAINT',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          50 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL81',
            'label' => 'LBL_RECORDVIEW_PANEL81',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tot_gal_br_resiliance',
                'label' => 'LBL_TOT_GAL_BR_RESILIANCE',
              ),
              1 => 
              array (
                'name' => 'tot_gal_sp_resiliance',
                'label' => 'LBL_TOT_GAL_SP_RESILIANCE',
              ),
              2 => 
              array (
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'gal_appl_rolling_resiliance',
                'label' => 'LBL_GAL_APPL_ROLLING_RESILIANCE',
              ),
              5 => 
              array (
                'name' => 'gal_appl_brushing_resiliance',
                'label' => 'LBL_GAL_APPL_BRUSHING_RESILIANCE',
              ),
              6 => 
              array (
                'name' => 'gal_appl_evestrou_resiliance',
                'label' => 'LBL_GAL_APPL_EVESTROU_RESILIANCE',
              ),
              7 => 
              array (
                'name' => 'gal_appl_soffits_resiliance',
                'label' => 'LBL_GAL_APPL_SOFFITS_RESILIANCE',
              ),
              8 => 
              array (
                'name' => 'gal_appl_downspou_resiliance',
                'label' => 'LBL_GAL_APPL_DOWNSPOU_RESILIANCE',
              ),
              9 => 
              array (
                'name' => 'gal_appl_windows_resiliance',
                'label' => 'LBL_GAL_APPL_WINDOWS_RESILIANCE',
              ),
              10 => 
              array (
                'name' => 'gal_appl_doors_resiliance',
                'label' => 'LBL_GAL_APPL_DOORS_RESILIANCE',
              ),
              11 => 
              array (
                'name' => 'gal_appl_garagedo_resiliance',
                'label' => 'LBL_GAL_APPL_GARAGEDO_RESILIANCE',
              ),
              12 => 
              array (
                'name' => 'gal_appl_shutters_resiliance',
                'label' => 'LBL_GAL_APPL_SHUTTERS_RESILIANCE',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          51 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL80',
            'label' => 'LBL_RECORDVIEW_PANEL80',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tot_gal_br_woodscapes',
                'label' => 'LBL_TOT_GAL_BR_WOODSCAPES',
              ),
              1 => 
              array (
                'name' => 'tot_gal_sp_woodscapes',
                'label' => 'LBL_TOT_GAL_SP_WOODSCAPES',
              ),
              2 => 
              array (
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'gal_appl_rolling_woodscapes',
                'label' => 'LBL_GAL_APPL_ROLLING_WOODSCAPES',
              ),
              5 => 
              array (
                'name' => 'gal_appl_brushing_woodscapes',
                'label' => 'LBL_GAL_APPL_BRUSHING_WOODSCAPES',
              ),
              6 => 
              array (
                'name' => 'gal_appl_evestrou_woodscapes',
                'label' => 'LBL_GAL_APPL_EVESTROU_WOODSCAPES',
              ),
              7 => 
              array (
                'name' => 'gal_appl_soffits_woodscapes',
                'label' => 'LBL_GAL_APPL_SOFFITS_WOODSCAPES',
              ),
              8 => 
              array (
                'name' => 'gal_appl_downspou_woodscapes',
                'label' => 'LBL_GAL_APPL_DOWNSPOU_WOODSCAPES',
              ),
              9 => 
              array (
                'name' => 'gal_appl_windows_woodscapes',
                'label' => 'LBL_GAL_APPL_WINDOWS_WOODSCAPES',
              ),
              10 => 
              array (
                'name' => 'gal_appl_doors_woodscapes',
                'label' => 'LBL_GAL_APPL_DOORS_WOODSCAPES',
              ),
              11 => 
              array (
                'name' => 'gal_appl_garagedo_woodscapes',
                'label' => 'LBL_GAL_APPL_GARAGEDO_WOODSCAPES',
              ),
              12 => 
              array (
                'name' => 'gal_appl_shutters_woodscapes',
                'label' => 'LBL_GAL_APPL_SHUTTERS_WOODSCAPES',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          52 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'assigned_user_name',
              2 => 'team_name',
              3 => 
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
              4 => 
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
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
