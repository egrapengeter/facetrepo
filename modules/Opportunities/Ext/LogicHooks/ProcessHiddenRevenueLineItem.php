<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Define the after_save hook that will process the hidden RevenueLineItem, if forecast is setup and
 * forecasting by Revenue Line Items
 */
$hook_array['after_save'][] = array(
    1,
    'processHiddenRevenueLineItem',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'processHiddenRevenueLineItem',
);
