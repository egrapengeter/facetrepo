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
({extendsFrom:'RecordlistView',worksheetType:'sales_rep',totals:{},before_colspan:0,after_colspan:0,selectedUser:{},canEdit:true,filters:[],filteredCollection:new Backbone.Collection(),selectedTimeperiod:'',navigationMessage:'',routeNavigationMessage:'',displayNavigationMessage:false,hasCheckedForDraftRecords:false,previewModel:undefined,previewVisible:false,isCollectionSyncing:false,isLoadingCommits:false,noAccessDataErrorTemplate:undefined,targetURL:'',currentURL:'',initialize:function(options){this.plugins=_.without(this.plugins,'ReorderableColumns');this.plugins.push('CteTabbing','DirtyCollection');this._super("initialize",[options]);this.template=app.template.getView('flex-list',this.module);this.selectedUser=this.context.get('selectedUser')||this.context.parent.get('selectedUser')||app.user.toJSON();this.selectedTimeperiod=this.context.get('selectedTimePeriod')||this.context.parent.get('selectedTimePeriod')||'';this.context.set('skipFetch',!(this.selectedUser.showOpps||!this.selectedUser.is_manager));this.filters=this.context.get('selectedRanges')||this.context.parent.get('selectedRanges');this.collection.sync=_.bind(this.sync,this);this.noAccessDataErrorTemplate=app.template.getField('base','noaccess')(this);this.currentURL=Backbone.history.getFragment();},_dispose:function(){if(!_.isUndefined(this.context.parent)&&!_.isNull(this.context.parent)){this.context.parent.off(null,null,this);if(this.context.parent.has('collection')){this.context.parent.get('collection').off(null,null,this);}}
app.routing.offBefore('route',this.beforeRouteHandler,this);$(window).off("beforeunload."+this.worksheetType);this._super("_dispose");},bindDataChange:function(){if(!_.isUndefined(this.context.parent)&&!_.isUndefined(this.context.parent.get('model'))){if(this.context.parent.get('model').module=='Forecasts'){this.context.parent.on('button:export_button:click',function(){if(this.layout.isVisible()){this.exportCallback();}},this);this.before('render',function(){return this.beforeRenderCallback()},this);this.on('render',function(){this.renderCallback();if(this.previewVisible){this.decorateRow(this.previewModel);}},this);this.on('list:toggle:column',function(column,isVisible,columnMeta){this.calculateTotals();},this);this.context.parent.on('forecasts:worksheet:totals',function(totals,type){if(type==this.worksheetType&&this.layout.isVisible()){var tpl=app.template.getView('recordlist.totals',this.module);this.$el.find('tfoot').remove();this.$el.find('tbody').after(tpl(this));}},this);this.dirtyModels.on("add change reset",function(){if(this.layout.isVisible()){this.context.parent.trigger("forecasts:worksheet:dirty",this.worksheetType,this.dirtyModels.length>0);}},this);this.context.parent.on('change:selectedTimePeriod',function(model,changed){this.updateSelectedTimeperiod(changed);},this);this.context.parent.on('change:selectedUser',function(model,changed){this.updateSelectedUser(changed)},this);this.context.parent.on('button:save_draft_button:click',function(){if(this.layout.isVisible()){this.context.parent.once('forecasts:worksheet:saved',function(){this.setNavigationMessage(false,'','');this.cleanUpDirtyModels();this.refreshData();this.collection.once('reset',function(){this.context.parent.trigger('forecasts:worksheet:needs_commit',this.worksheetType);},this);},this);this.saveWorksheet(true);}},this);this.context.parent.on('button:commit_button:click',function(){if(this.layout.isVisible()){this.context.parent.once('forecasts:worksheet:saved',function(){this.context.parent.trigger('forecasts:worksheet:commit',this.selectedUser,this.worksheetType,this.getCommitTotals())},this);this.saveWorksheet(false);}},this);this.context.parent.on('change:currentForecastCommitDate',function(context,changed){if(this.layout.isVisible()){this.checkForDraftRows(changed);}},this);if(this.context.parent.has('collection')){var parentCollection=this.context.parent.get('collection');parentCollection.on('data:sync:start',function(){this.isLoadingCommits=true;},this);parentCollection.on('data:sync:complete',function(){this.isLoadingCommits=false;},this);}
this.collection.on('data:sync:start',function(){this.isCollectionSyncing=true;},this);this.collection.on('data:sync:complete',function(){this.isCollectionSyncing=false;},this);this.collection.on('reset',function(){this.setNavigationMessage(false,'','');this.cleanUpDirtyModels();var ctx=this.context.parent||this.context;ctx.trigger('forecasts:worksheet:is_dirty',this.worksheetType,false);if(this.isLoadingCommits===false){this.checkForDraftRows(ctx.get('currentForecastCommitDate'));}
this.filterCollection();},this);this.collection.on('change:commit_stage',function(model){if(!_.isEmpty(this.filters)&&_.indexOf(this.filters,model.get('commit_stage'))===-1){this.filterCollection();if(!this.disposed){this.render();}}else{var commitStage=model.get('commit_stage'),includedCommitStages=app.metadata.getModule('Forecasts','config').commit_stages_included,el=this.$el.find('tr[name='+model.module+'_'+model.id+']'),isIncluded=_.include(includedCommitStages,commitStage);if(el){el.attr('data-forecast',commitStage);if(isIncluded&&!el.hasClass('included')){el.addClass('included');model.set({includedInForecast:true},{silent:true});}else if(!isIncluded&&el.hasClass('included')){el.removeClass('included');model.unset('includedInForecast');}}}},this);this.context.parent.on('change:selectedRanges',function(model,changed){this.filters=changed;this.once('render',function(){app.alert.dismiss('worksheet_filtering');});this.filterCollection();this.calculateTotals();if(!this.disposed)this.render();},this);this.context.parent.on('forecasts:worksheet:committed',function(){if(this.layout.isVisible()){this.setNavigationMessage(false,'','');this.cleanUpDirtyModels();var ctx=this.context.parent||this.context;ctx.trigger('forecasts:worksheet:is_dirty',this.worksheetType,false);this.refreshData();}},this);this.context.parent.on('forecasts:worksheet:is_dirty',function(worksheetType,is_dirty){if(this.worksheetType==worksheetType){if(is_dirty){this.setNavigationMessage(true,'LBL_WARN_UNSAVED_CHANGES','LBL_WARN_UNSAVED_CHANGES');}else{this.setNavigationMessage(false,'','');}}},this);app.routing.before('route',this.beforeRouteHandler,{},this);$(window).bind("beforeunload."+this.worksheetType,_.bind(function(){var ret=this.showNavigationMessage('window');if(_.isString(ret)){return ret;}},this));}}
this.before('list:orderby',function(options){if(this.isDirty()){app.alert.show('leave_confirmation',{level:'confirmation',messages:app.lang.get('LBL_WARN_UNSAVED_CHANGES_CONFIRM_SORT','Forecasts'),onConfirm:_.bind(function(){this._setOrderBy(options);},this)});return false;}
return true;},undefined,this);this.collection.on('reset change',function(){this.calculateTotals();},this);if(!_.isUndefined(this.dirtyModels)){this.dirtyModels.on('add',function(){if(this.canEdit){var ctx=this.context.parent||this.context;ctx.trigger('forecasts:worksheet:is_dirty',this.worksheetType,true);}},this);}
this.layout.on('hide',function(){this.totals={};},this);this._super("bindDataChange");},beforeRouteHandler:function(){return this.showNavigationMessage('router');},defaultNavCallback:function(){this.displayNavigationMessage=false;app.router.navigate(this.targetURL,{trigger:true});},unbindData:function(){app.events.off(null,null,this);this._super("unbindData");},showNavigationMessage:function(type,callback){if(!_.isFunction(callback)){callback=this.defaultNavCallback;}
if(this.layout.isVisible()){var canEdit=this.dirtyCanEdit||this.canEdit;if(canEdit&&this.displayNavigationMessage){if(type=='window'){if(!_.isEmpty(this.routeNavigationMessage)){return app.lang.get(this.routeNavigationMessage,'Forecasts');}
return false;}
this.targetURL=Backbone.history.getFragment();app.router.navigate(this._currentUrl,{trigger:false,replace:true});app.alert.show('leave_confirmation',{level:'confirmation',messages:app.lang.get(this.navigationMessage,'Forecasts').split('<br>'),onConfirm:_.bind(function(){callback.call(this);},this)});return false;}}
return true;},setNavigationMessage:function(display,reload_label,route_label){this.displayNavigationMessage=display;this.navigationMessage=reload_label;this.routeNavigationMessage=route_label;this.context.parent.trigger("forecasts:worksheet:navigationMessage",this.navigationMessage);},exportCallback:function(){if(this.canEdit&&this.isDirty()){app.alert.show('leave_confirmation',{level:'confirmation',messages:app.lang.get('LBL_WORKSHEET_EXPORT_CONFIRM','Forecasts'),onConfirm:_.bind(function(){this.doExport();},this)});}else{this.doExport();}},doExport:function(){app.alert.show('massexport_loading',{level:'process',title:app.lang.getAppString('LBL_LOADING')});var params={timeperiod_id:this.selectedTimeperiod,user_id:this.selectedUser.id,filters:this.filters,platform:app.config.platform};var url=app.api.buildURL(this.module,'export',null,params);app.api.fileDownload(url,{complete:function(data){app.alert.dismiss('massexport_loading');}},{iframe:this.$el});},beforeRenderCallback:function(){var showOpps=(_.isUndefined(this.selectedUser.showOpps))?false:this.selectedUser.showOpps,isManager=(_.isUndefined(this.selectedUser.is_manager))?true:this.selectedUser.is_manager;if(!(showOpps||!isManager)&&this.layout.isVisible()){this.layout.hide();}else if((showOpps||!isManager)&&!this.layout.isVisible()){this.layout.once('show',this.calculateTotals,this);this.layout.show();}
this.leftColumns=[];return(showOpps||!isManager);},renderCallback:function(){var user=this.selectedUser||this.context.parent.get('selectedUser')||app.user.toJSON()
if(user.showOpps||!user.is_manager){if(!this.layout.isVisible()){this.layout.show();}
if(this.filteredCollection.length==0){var tpl=app.template.getView('recordlist.noresults',this.module);this.$el.find('tbody').html(tpl(this));}
if(!_.isEmpty(this.totals)&&this.layout.isVisible()){var tpl=app.template.getView('recordlist.totals',this.module);this.$el.find('tbody').after(tpl(this));}
var sales_stage_width=this.$el.find('td[data-field-name="sales_stage"] span.isEditable').width();var sales_stage_outerwidth=this.$el.find('td[data-field-name="sales_stage"] span.isEditable').outerWidth();this.$el.find('td[data-field-name="sales_stage"] span.isEditable').width(sales_stage_width+20);this.$el.find('td[data-field-name="sales_stage"] span.isEditable').parent("td").css("min-width",sales_stage_outerwidth+26+"px");this.setRowActionButtonStates();}else{if(this.layout.isVisible()){this.layout.hide();}}},updateSelectedUser:function(changed){var doFetch=false;if(this.selectedUser.id!=changed.id){doFetch=(changed.showOpps||!changed.is_manager);}
if(!doFetch&&(changed.showOpps||!changed.is_manager)){doFetch=true;}
if(this.displayNavigationMessage){this.dirtyUser=this.selectedUser;this.dirtyCanEdit=this.canEdit;}
this.cleanUpDirtyModels();this.selectedUser=changed;this.canEdit=(this.selectedUser.id==app.user.get('id'));this.hasCheckedForDraftRecords=false;if(doFetch){this.refreshData();}else{if((!this.selectedUser.showOpps&&this.selectedUser.is_manager)&&this.layout.isVisible()){this.layout.hide();}}},updateSelectedTimeperiod:function(changed){if(this.displayNavigationMessage){this.dirtyTimeperiod=this.selectedTimeperiod;}
this.selectedTimeperiod=changed;this.hasCheckedForDraftRecords=false;if(this.layout.isVisible()){this.refreshData();}},checkForDraftRows:function(lastCommitDate){if(this.layout.isVisible()&&this.canEdit&&this.hasCheckedForDraftRecords===false&&!_.isEmpty(this.collection.models)&&this.isCollectionSyncing===false){this.hasCheckedForDraftRecords=true;if(_.isUndefined(lastCommitDate)){this.context.parent.trigger('forecasts:worksheet:needs_commit',this.worksheetType);}else{this.collection.find(function(item){if(item.get('date_modified')>lastCommitDate){this.context.parent.trigger('forecasts:worksheet:needs_commit',this.worksheetType);return true;}
return false;},this);}}else if(this.layout.isVisible()===false&&this.canEdit&&this.hasCheckedForDraftRecords===false){this.layout.once('show',function(){this.checkForDraftRows(lastCommitDate);},this);}else if(this.isCollectionSyncing===true){this.collection.once('data:sync:complete',function(){this.checkForDraftRows(lastCommitDate);},this);}},setRowActionButtonStates:function(){_.each(this.fields,function(field){if(field.def.event==='list:preview:fire'){field.setDisabled((field.model.get('parent_deleted')=="1"));field.render();}});},filterCollection:function(){this.filteredCollection.reset();if(_.isEmpty(this.filters)){this.filteredCollection.add(this.collection.models);}else{this.collection.each(function(model){if(_.indexOf(this.filters,model.get('commit_stage'))!==-1){this.filteredCollection.add(model);}},this);}},saveWorksheet:function(isDraft){var totalToSave=0;if(this.layout.isVisible()){var saveCount=0,ctx=this.context.parent||this.context;if(this.isDirty()){totalToSave=this.dirtyModels.length;this.dirtyModels.each(function(model){model.set({"draft":(isDraft&&isDraft==true)?1:0,"timeperiod_id":this.dirtyTimeperiod||this.selectedTimeperiod,"current_user":this.dirtyUser.id||this.selectedUser.id},{silent:true});model.save({},{success:_.bind(function(){saveCount++;if(this.previewVisible){var previewId=this.previewModel.get('parent_id')||this.previewModel.get('id');if(model.get('parent_id')==previewId){var previewCollection=new Backbone.Collection();this.filteredCollection.each(function(model){if(model.get('parent_deleted')!=="1"){previewCollection.add(model);}},this);app.events.trigger("preview:render",model,previewCollection,true,model.get('id'),true);}}
if(totalToSave===saveCount){if(isDraft){app.alert.show('success',{level:'success',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get("LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS","Forecasts")]});}
ctx.trigger('forecasts:worksheet:saved',totalToSave,this.worksheetType,isDraft);}},this),silent:true,alerts:{'success':false}});},this);this.cleanUpDirtyModels();}else{if(isDraft){app.alert.show('success',{level:'success',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get("LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS","Forecasts")]});}
ctx.trigger('forecasts:worksheet:saved',totalToSave,this.worksheetType,isDraft);}}
return totalToSave},calculateTotals:function(){if(this.layout.isVisible()){this.totals=this.getCommitTotals();var calcFields=['worst_case','best_case','likely_case'],fields=_.filter(this._fields.visible,function(field){if(_.contains(calcFields,field.name)){this.totals[field.name+'_access']=app.acl.hasAccess('read',this.module,app.user.get('id'),field.name);this.totals[field.name+'_display']=true;return true;}
return false;},this);for(var x=0;x<this._fields.visible.length;x++){var f=this._fields.visible[x];if(_.contains(calcFields,f.name)){break;}}
this.before_colspan=x;this.after_colspan=(this._fields.visible.length-(x+fields.length));var ctx=this.context.parent||this.context;ctx.trigger('forecasts:worksheet:totals',this.totals,this.worksheetType);}},displayLoadingMessage:function(){app.alert.show('workshet_loading',{level:'process',title:app.lang.getAppString('LBL_LOADING')});this.collection.once('reset',function(){app.alert.dismiss('workshet_loading');},this);},refreshData:function(){this.displayLoadingMessage();this.collection.fetch();},sync:function(method,model,options){var callbacks,url;options=options||{};options.params=options.params||{};if(!_.isUndefined(this.selectedUser.id)){options.params.user_id=this.selectedUser.id;}
if(!_.isEmpty(this.selectedTimeperiod)){options.params.timeperiod_id=this.selectedTimeperiod;}
options.limit=1000;options=app.data.parseOptionsForSync(method,model,options);if(!_.isUndefined(options.params.order_by)&&options.params.order_by.indexOf('parent_name')===0){options.params.order_by=options.params.order_by.replace('parent_','');}
options.success=_.bind(function(model,data,options){if(!this.disposed){this.collection.reset(data);}},this);callbacks=app.data.getSyncCallbacks(method,model,options);this.collection.trigger("data:sync:start",method,model,options);url=app.api.buildURL("ForecastWorksheets",null,null,options.params);app.api.call("read",url,null,callbacks);},getCommitTotals:function(){var includedAmount=0,includedBest=0,includedWorst=0,filteredAmount=0,filteredBest=0,filteredWorst=0,filteredCount=0,overallAmount=0,overallBest=0,overallWorst=0,includedCount=0,lostCount=0,lostAmount=0,lostBest=0,lostWorst=0,wonCount=0,wonAmount=0,wonBest=0,wonWorst=0,includedClosedCount=0,includedClosedAmount=0,cfg=app.metadata.getModule('Forecasts','config'),startEndDates=this.context.get('selectedTimePeriodStartEnd')||this.context.parent.get('selectedTimePeriodStartEnd'),activeFilters=this.context.get('selectedRanges')||this.context.parent.get('selectedRanges')||[];var sales_stage_won_setting=cfg.sales_stage_won||[],sales_stage_lost_setting=cfg.sales_stage_lost||[];var commit_stages_in_included_total=['include'];if(cfg.forecast_ranges=='show_custom_buckets'){commit_stages_in_included_total=cfg.commit_stages_included;}
this.collection.each(function(model){if(app.date(model.get('date_closed')).isBetween(startEndDates['start'],startEndDates['end'])){var won=_.include(sales_stage_won_setting,model.get('sales_stage')),lost=_.include(sales_stage_lost_setting,model.get('sales_stage')),commit_stage=model.get('commit_stage'),base_rate=model.get('base_rate'),worst_base=app.currency.convertWithRate(model.get('worst_case'),base_rate)||0,amount_base=app.currency.convertWithRate(model.get('likely_case'),base_rate)||0,best_base=app.currency.convertWithRate(model.get('best_case'),base_rate)||0,includedInForecast=_.include(commit_stages_in_included_total,commit_stage),includedInFilter=_.include(activeFilters,commit_stage);if(won&&includedInForecast){wonAmount=app.math.add(wonAmount,amount_base);wonBest=app.math.add(wonBest,best_base);wonWorst=app.math.add(wonWorst,worst_base);wonCount++;includedClosedCount++;includedClosedAmount=app.math.add(amount_base,includedClosedAmount);}else if(lost){lostAmount=app.math.add(lostAmount,amount_base);lostBest=app.math.add(lostBest,best_base);lostWorst=app.math.add(lostWorst,worst_base);lostCount++;}
if(includedInFilter||_.isEmpty(activeFilters)){filteredAmount=app.math.add(filteredAmount,amount_base);filteredBest=app.math.add(filteredBest,best_base);filteredWorst=app.math.add(filteredWorst,worst_base);filteredCount++;}
if(includedInForecast){includedAmount=app.math.add(includedAmount,amount_base);includedBest=app.math.add(includedBest,best_base);includedWorst=app.math.add(includedWorst,worst_base);includedCount++;model.set({includedInForecast:true},{silent:true});}else if(model.has('includedInForecast')){model.unset('includedInForecast');}
overallAmount=app.math.add(overallAmount,amount_base);overallBest=app.math.add(overallBest,best_base);overallWorst=app.math.add(overallWorst,worst_base);}},this);return{'likely_case':includedAmount,'best_case':includedBest,'worst_case':includedWorst,'overall_amount':overallAmount,'overall_best':overallBest,'overall_worst':overallWorst,'filtered_amount':filteredAmount,'filtered_best':filteredBest,'filtered_worst':filteredWorst,'timeperiod_id':this.dirtyTimeperiod||this.selectedTimeperiod,'lost_count':lostCount,'lost_amount':lostAmount,'won_count':wonCount,'won_amount':wonAmount,'included_opp_count':includedCount,'total_opp_count':this.collection.length,'closed_count':includedClosedCount,'closed_amount':includedClosedAmount};},addPreviewEvents:function(){this.context.on("list:preview:fire",function(model){var previewCollection=new Backbone.Collection();this.filteredCollection.each(function(model){if(model.get('parent_deleted')!=="1"){previewCollection.add(model);}},this);if(_.isUndefined(this.previewModel)||model.get('id')!=this.previewModel.get('id')){this.previewModel=model;app.events.trigger("preview:render",model,previewCollection,true);}else{this.decorateRow();app.events.trigger('preview:close');}},this);app.events.on("list:preview:decorate",this.decorateRow,this);if(this.layout){this.layout.on("list:sort:fire",function(){app.events.trigger("preview:close");},this);}
app.events.on('preview:render',function(model){this.previewModel=model;this.previewVisible=true;},this);app.events.on('preview:close',function(){this.previewVisible=false;this.previewModel=undefined;},this);}})