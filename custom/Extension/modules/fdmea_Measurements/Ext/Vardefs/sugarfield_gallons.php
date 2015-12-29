<?php
 // created: 2015-12-17 08:13:15
$dictionary['fdmea_Measurements']['fields']['gallons']['importable']='false';
$dictionary['fdmea_Measurements']['fields']['gallons']['duplicate_merge']='disabled';
$dictionary['fdmea_Measurements']['fields']['gallons']['duplicate_merge_dom_value']=0;
$dictionary['fdmea_Measurements']['fields']['gallons']['calculated']='1';
$dictionary['fdmea_Measurements']['fields']['gallons']['formula']='multiply($measurement_qty,divide(divide(300,related($paint_paints_fdmea_measurements_1,"sqft_coverage_per_gal_c")),number(getDropdownValue("application_sqft_to_paint_gallons",$application_type))))';
$dictionary['fdmea_Measurements']['fields']['gallons']['enforced']=true;
$dictionary['fdmea_Measurements']['fields']['gallons']['required']=false;

 ?>