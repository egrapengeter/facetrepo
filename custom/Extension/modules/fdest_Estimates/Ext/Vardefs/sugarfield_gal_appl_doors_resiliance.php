<?php
$dictionary['fdest_Estimates']['fields']['gal_appl_doors_resiliance']['calculated'] = '1';
$dictionary['fdest_Estimates']['fields']['gal_appl_doors_resiliance']['formula'] = 'multiply(add($qty_appl_doors_tot_e,$qty_appl_doors_tot_m,$qty_appl_doors_tot_h),divide(divide(300,related($paint_paints_fdest_estimates_3, "sqft_coverage_per_gal_c")),number(getDropdownValue("application_sqft_to_paint_gallons","doors"))))';
