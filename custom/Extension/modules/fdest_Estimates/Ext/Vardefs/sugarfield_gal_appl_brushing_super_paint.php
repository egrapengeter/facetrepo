<?php
$dictionary['fdest_Estimates']['fields']['gal_appl_brushing_super_paint']['calculated'] = '1';
$dictionary['fdest_Estimates']['fields']['gal_appl_brushing_super_paint']['formula'] = 'multiply(add($qty_appl_brushing_tot_e,$qty_appl_brushing_tot_m,$qty_appl_brushing_tot_h),divide(divide(300,related($paint_paints_fdest_estimates_2, "sqft_coverage_per_gal_c")),number(getDropdownValue("application_sqft_to_paint_gallons","brushing"))))';
