<?php
 // created: 2015-10-14 11:47:24
$dictionary['fdest_Estimates']['fields']['application_items_list_c']['duplicate_merge_dom_value']=0;
$dictionary['fdest_Estimates']['fields']['application_items_list_c']['labelValue']='Application Items List';
$dictionary['fdest_Estimates']['fields']['application_items_list_c']['calculated']='true';
$dictionary['fdest_Estimates']['fields']['application_items_list_c']['formula']='concat(
ifElse(greaterThan(
add(
$hours_appl_brushing_br,
$hours_appl_brushing_sp,
$hours_appl_brushing_ta
)
,0),
"Brushing",""),
ifElse(and(
greaterThan(
add(
$hours_appl_brushing_br,
$hours_appl_brushing_sp,
$hours_appl_brushing_ta
)
,0),
greaterThan($hours_prep_localfail_br,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_doors_br,
$hours_appl_doors_sp,
$hours_appl_doors_ta
)
,0),
"Doors",""),
ifElse(and(
greaterThan($hours_prep_localfail_br,0),
greaterThan(
add(
$hours_appl_downspou_br,
$hours_appl_downspou_sp,
$hours_appl_downspou_ta
)
,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_downspou_br,
$hours_appl_downspou_sp,
$hours_appl_downspou_ta
)
,0),
"Downspouts",""),
ifElse(and(
greaterThan(
add(
$hours_appl_downspou_br,
$hours_appl_downspou_sp,
$hours_appl_downspou_ta
)
,0),
greaterThan(
add(
$hours_appl_evestrou_br,
$hours_appl_evestrou_sp,
$hours_appl_evestrou_ta
)
,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_evestrou_br,
$hours_appl_evestrou_sp,
$hours_appl_evestrou_ta
)
,0),
"Eves / Troughs",""),
ifElse(and(
greaterThan(
add(
$hours_appl_evestrou_br,
$hours_appl_evestrou_sp,
$hours_appl_evestrou_ta
)
,0),
greaterThan(
add(
$hours_appl_garagedo_br,
$hours_appl_garagedo_sp,
$hours_appl_garagedo_ta
)
,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_garagedo_br,
$hours_appl_garagedo_sp,
$hours_appl_garagedo_ta
)
,0),
"Garage Door",""),
ifElse(and(
greaterThan(
add(
$hours_appl_garagedo_br,
$hours_appl_garagedo_sp,
$hours_appl_garagedo_ta
)
,0),
greaterThan(
add(
$hours_appl_rolling_br,
$hours_appl_rolling_sp,
$hours_appl_rolling_ta
)
,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_rolling_br,
$hours_appl_rolling_sp,
$hours_appl_rolling_ta
)
,0),
"Rolling",""),
ifElse(and(
greaterThan(
add(
$hours_appl_rolling_br,
$hours_appl_rolling_sp,
$hours_appl_rolling_ta
)
,0),
greaterThan(
add(
$hours_appl_shutters_br,
$hours_appl_shutters_sp,
$hours_appl_shutters_ta
)
,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_shutters_br,
$hours_appl_shutters_sp,
$hours_appl_shutters_ta
)
,0),
"Shutters",""),
ifElse(and(
greaterThan(
add(
$hours_appl_shutters_br,
$hours_appl_shutters_sp,
$hours_appl_shutters_ta
)
,0),
greaterThan(
add(
$hours_appl_soffits_br,
$hours_appl_soffits_sp,
$hours_appl_soffits_ta
)
,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_soffits_br,
$hours_appl_soffits_sp,
$hours_appl_soffits_ta
)
,0),
"Soffits",""),
ifElse(and(
greaterThan(
add(
$hours_appl_soffits_br,
$hours_appl_soffits_sp,
$hours_appl_soffits_ta
)
,0),
greaterThan(
add(
$hours_appl_windows_br,
$hours_appl_windows_sp,
$hours_appl_windows_ta
)
,0)
),", ",""),
ifElse(greaterThan(
add(
$hours_appl_windows_br,
$hours_appl_windows_sp,
$hours_appl_windows_ta
)
,0),
"Windows","")
)';
$dictionary['fdest_Estimates']['fields']['application_items_list_c']['enforced']='true';
$dictionary['fdest_Estimates']['fields']['application_items_list_c']['dependency']='';

 ?>