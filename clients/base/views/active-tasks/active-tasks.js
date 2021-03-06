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
({extendsFrom:'TabbedDashletView',_defaultSettings:{limit:10,visibility:'user'},initialize:function(options){options.meta=options.meta||{};options.meta.template='tabbed-dashlet';this.plugins=_.union(this.plugins,['LinkedModel']);this.tbodyTag='ul[data-action="pagination-body"]';this._super('initialize',[options]);},_initEvents:function(){this._super('_initEvents');this.on('active-tasks:close-task:fire',this.closeTask,this);return this;},closeTask:function(model){var self=this;var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.get('LBL_MODULE_NAME_SINGULAR',model.module).toLowerCase()+' '+name;app.alert.show('complete_task_confirmation:'+model.get('id'),{level:'confirmation',messages:app.utils.formatString(app.lang.get('LBL_ACTIVE_TASKS_DASHLET_CONFIRM_CLOSE'),[context]),onConfirm:function(){model.save({status:'Completed'},{showAlerts:true,success:self._getRemoveModelCompleteCallback()});}});},_initTabs:function(){this._super("_initTabs");var today=new Date();today.setHours(23,59,59);today.toISOString();_.each(_.pluck(_.pluck(this.tabs,'filters'),'date_due'),function(filter){_.each(filter,function(value,operator){if(value==='today'){filter[operator]=today;}});});},createRecord:function(event,params){if(this.module!=='Home'){this.createRelatedRecord(params.module,params.link);}else{var self=this;app.drawer.open({layout:'create-actions',context:{create:true,module:params.module}},function(context,model){if(!model){return;}
self.context.resetLoadFlag();self.context.set('skipFetch',false);if(_.isFunction(self.loadData)){self.loadData();}else{self.context.loadData();}});}},bindCollectionAdd:function(model){var pictureUrl=app.api.buildFileURL({module:'Users',id:model.get('assigned_user_id'),field:'picture'});model.set('picture_url',pictureUrl);this._super('bindCollectionAdd',[model]);},_renderHtml:function(){if(this.meta.config){this._super('_renderHtml');return;}
var tab=this.tabs[this.settings.get('activeTab')];if(tab.overdue_badge){this.overdueBadge=tab.overdue_badge;}
this._super('_renderHtml');}})