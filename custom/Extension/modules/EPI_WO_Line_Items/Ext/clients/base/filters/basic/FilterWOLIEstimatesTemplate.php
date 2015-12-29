<?php
$viewdefs['EPI_WO_Line_Items']['base']['filter']['basic']['filters'][] = array(
    'id' => 'FilterWOLIEstimatesTemplate',
    'name' => 'LBL_FILTER_WOLI_ESTIMATES_TEMPLATE',
    'filter_definition' => array(
        array(
            opportunities_epi_wo_line_items_1opportunities_ida  => array(
                '$equals' => ' ',
            ),
        ),
    ),
    'editable' => true,
    'is_template' => true,
);

