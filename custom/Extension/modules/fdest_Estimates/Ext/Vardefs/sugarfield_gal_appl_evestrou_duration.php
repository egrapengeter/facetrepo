<?php
$dictionary['fdest_Estimates']['fields']['gal_appl_evestrou_duration']['calculated'] = '1';
$dictionary['fdest_Estimates']['fields']['gal_appl_evestrou_duration']['formula'] = 'multiply(add($qty_appl_evestrou_tot_e,$qty_appl_evestrou_tot_m,$qty_appl_evestrou_tot_h),divide(divide(300,related($paint_paints_fdest_estimates_1, "sqft_coverage_per_gal_c")),number(getDropdownValue("application_sqft_to_paint_gallons","evestrou"))))';
