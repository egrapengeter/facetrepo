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
({tagName:"span",className:"table-cell",initialize:function(options){this._super('initialize',[options]);this._select2formatSelectionTemplate=app.template.get("filter-module-dropdown.selection-partial");this._select2formatResultTemplate=app.template.get("filter-module-dropdown.result-partial");this.listenTo(this.layout,"filter:change:module",this.handleChange);this.listenTo(this.layout,"filter:render:module",this._render);},_render:function(){this._super('_render');if(this.layout.showingActivities){this.filterList=this.getModuleListForActivities();}else if(this.layout.layoutType==="record"){this.filterList=this.getModuleListForSubpanels();}else{this.$el.hide();return this;}
this._renderDropdown(this.filterList);},_renderDropdown:function(data){var self=this;this.filterNode=this.$(".related-filter");this.filterNode.select2({data:data,multiple:false,minimumResultsForSearch:7,formatSelection:_.bind(this.formatSelection,this),formatResult:_.bind(this.formatResult,this),dropdownCss:{width:'auto'},dropdownCssClass:'search-related-dropdown',initSelection:_.bind(this.initSelection,this),escapeMarkup:function(m){return m;},width:'off'});if(this.layout.layoutType!=="record"||this.layout.showingActivities){this.filterNode.select2("disable");}
this.filterNode.off("change");this.filterNode.on("change",function(e){var linkModule=e.val;if(self.layout.layoutType==="record"&&linkModule!=="all_modules"){linkModule=app.data.getRelatedModule(self.module,linkModule);}
self.layout.trigger("filter:change:module",linkModule,e.val);});},handleChange:function(linkModuleName,linkName,silent){var cacheKey=app.user.lastState.key('subpanels-last',this.layout);if(linkName==="all_modules"){this.layout.trigger("subpanel:change");app.user.lastState.remove(cacheKey);}else if(linkName){this.layout.trigger("subpanel:change",linkName);app.user.lastState.set(cacheKey,linkName);}
this.context.set('currentFilterId',null);if(this.filterNode){this.filterNode.select2("val",linkName||linkModuleName);}
if(!silent){this.layout.layout.trigger("filter:change",linkModuleName,linkName);this.layout.trigger('filter:get',linkModuleName,linkName);this.layout.trigger('filter:clear:quicksearch');}},getModuleListForSubpanels:function(){var filters=[];filters.push({id:"all_modules",text:app.lang.get("LBL_MODULE_ALL")});var subpanels=this.pullSubpanelRelationships();subpanels=this._pruneHiddenModules(subpanels);if(subpanels){_.each(subpanels,function(value,key){var module=app.data.getRelatedModule(this.module,value);if(app.acl.hasAccess("list",module)){filters.push({id:value,text:app.lang.get(key,this.module)});}},this);}
return filters;},getModuleListForActivities:function(){var filters=[],label;if(this.module=="Activities"){label=app.lang.get("LBL_MODULE_ALL");}else{label=app.lang.get('LBL_MODULE_NAME',this.module);}
filters.push({id:'Activities',text:label});return filters;},pullSubpanelRelationships:function(){return app.utils.getSubpanelList(this.module);},_pruneHiddenModules:function(subpanels){var hiddenSubpanels=_.map(app.metadata.getHiddenSubpanels(),function(subpanel){return subpanel.toLowerCase();});var pruned=_.reduce(subpanels,function(obj,value,key){var relatedModule=app.data.getRelatedModule(this.module,value);if(relatedModule&&!_.contains(hiddenSubpanels,relatedModule.toLowerCase())){obj[key]=value;}
return obj;},{},this);return pruned;},initSelection:function(el,callback){var selection,label;if(el.val()==="all_modules"){label=(this.layout.layoutType==="record")?app.lang.get("LBL_MODULE_ALL"):app.lang.get("LBL_MODULE_NAME",this.module);selection={id:"all_modules",text:label};}else if(_.findWhere(this.filterList,{id:el.val()})){selection=_.findWhere(this.filterList,{id:el.val()});}else if(this.filterList&&this.filterList.length>0){selection=this.filterList[0];}
callback(selection);},formatSelection:function(item){var selectionLabel,safeString;safeString=Handlebars.Utils.escapeExpression(item.text);this.$('.choice-related').html(safeString);if(this.layout.layoutType!=="record"||this.layout.showingActivities){selectionLabel=app.lang.get("LBL_MODULE");}else{selectionLabel=app.lang.get("LBL_RELATED")+'<i class="icon-caret-down"></i>';}
return this._select2formatSelectionTemplate(selectionLabel);},formatResult:function(option){return this._select2formatResultTemplate(option.text);},_dispose:function(){if(!_.isEmpty(this.filterNode)){this.filterNode.select2('destroy');}
this._super('_dispose');}})