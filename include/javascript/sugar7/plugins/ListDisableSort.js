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
(function(app){app.events.on("app:init",function(){app.plugins.register('ListDisableSort',['view'],{onAttach:function(component,plugin){component.on('init',function(){_.each(component.meta.panels,function(panel){_.each(panel.fields,function(field){field.sortable=false;});});},null,component);}});});})(SUGAR.App);