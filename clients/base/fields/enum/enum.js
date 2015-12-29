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
({fieldTag:'input.select2',plugins:['EllipsisInline'],appendValueTag:'input[name=append_value]',defaultOnUndefined:true,BLANK_VALUE_ID:'___i_am_empty___',isFetchingOptions:false,items:null,_keysOrder:null,bindKeyDown:function(callback){var $el=this.$(this.fieldTag);if($el){$el.on('keydown.record',{field:this},callback);var plugin=$el.data('select2');if(plugin){if(plugin.focusser){plugin.focusser.on('keydown.record',{field:this},callback);}
plugin.search.on('keydown.record',{field:this},callback);}}},unbindKeyDown:function(callback){if(this.$el){var $el=this.$(this.fieldTag);if($el){$el.off('keydown.record',callback);var plugin=$el.data('select2');if(plugin){plugin.search.off('keydown.record',callback);}}}},_render:function(){var self=this;if(!this.items||_.isEmpty(this.items)){this.loadEnumOptions(false,function(){self.isFetchingOptions=false;if(!this.disposed){this.render();}});if(this.isFetchingOptions){return this;}}
if(this.def.isMultiSelect&&!_.isUndefined(this.items[''])&&this.items['']===''){var obj={};_.each(this.items,function(value,key){if(key!==''&&value!==''){obj[key]=value;}},this);this.items=obj;}
var optionsKeys=_.isObject(this.items)?_.keys(this.items):[];if(this.defaultOnUndefined&&!this.def.isMultiSelect&&_.isUndefined(this.model.get(this.name))&&app.acl.hasAccessToModel('write',this.model,this.name)){var defaultValue=this._getDefaultOption(optionsKeys);if(defaultValue){this.model.set(this.name,defaultValue,{silent:true});if(_.isFunction(this.model.setDefaultAttribute)){this.model.setDefaultAttribute(this.name,defaultValue);}}}
app.view.Field.prototype._render.call(this);if(this.tplName=='noaccess'){return this;}
var select2Options=this.getSelect2Options(optionsKeys);var $el=this.$(this.fieldTag);if(!_.isEmpty(optionsKeys)){if(this.tplName==='edit'||this.tplName==='list-edit'||this.tplName==='massupdate'){$el.select2(select2Options);var plugin=$el.data('select2');if(plugin&&plugin.focusser){plugin.focusser.on('select2-focus',_.bind(_.debounce(this.handleFocus,0),this));}
$el.select2("container").addClass("tleft");$el.on('change',function(ev){var value=ev.val;if(_.isUndefined(value)){return;}
if(self.model&&!(self.name=='currency_id'&&_.isUndefined(value))){self.model.set(self.name,self.unformat(value));if(_.isFunction(self.model.removeDefaultAttribute)){self.model.removeDefaultAttribute(self.name)}}});if(this.def.ordered){$el.select2("container").find("ul.select2-choices").sortable({containment:'parent',start:function(){$el.select2("onSortStart");},update:function(){$el.select2("onSortEnd");}});}}else if(this.tplName==='disabled'){$el.select2(select2Options);$el.select2('disable');}
if(!_.isUndefined(this.value)){if(!_.isArray(this.value)){this.value=[this.value];}
$el.select2('val',this.value);}}else{this.$el.html(app.lang.get("LBL_LOADING"));}
return this;},focus:function(){if(this.action!=='disabled'&&!this.def.isMultiSelect){this.$(this.fieldTag).select2('open');}},loadEnumOptions:function(fetch,callback){var self=this,meta=app.metadata.getModule(this.module,'fields'),fieldMeta=meta&&meta[this.name]?meta[this.name]:this.def;this.items=this.def.options||fieldMeta.options;fetch=fetch||false;if(fetch||!this.items){this.isFetchingOptions=true;var _key='request:'+this.module+':'+this.name;if(this.context.get(_key)){var request=this.context.get(_key);request.xhr.done(_.bind(function(o){if(this.items!==o){this.items=o;callback.call(this);}},this));}else{var request=app.api.enumOptions(self.module,self.name,{success:function(o){if(self.disposed){return;}
if(self.items!==o){self.items=o;fieldMeta.options=self.items;self.context.unset(_key);callback.call(self);}}});this.context.set(_key,request);}}else if(_.isString(this.items)){this.items=app.lang.getAppListStrings(this.items);}},getSelect2Options:function(optionsKeys){var select2Options={};var emptyIdx=_.indexOf(optionsKeys,"");if(emptyIdx!==-1){select2Options.allowClear=true;if(emptyIdx>1){this.hasBlank=true;}}
if(!this.def.isMultiSelect){select2Options.placeholder=app.lang.get("LBL_SEARCH_SELECT");}
if(_.isEmpty(optionsKeys)){select2Options.placeholder=app.lang.get("LBL_LOADING");}
select2Options.width=this.def.enum_width?this.def.enum_width:'100%';select2Options.dropdownCssClass=this.def.dropdown_class?this.def.dropdown_class:'';select2Options.containerCssClass=this.def.container_class?this.def.container_class:(this.def.isMultiSelect?'select2-choices-pills-close':'');if(this.def.dropdown_width){select2Options.dropdownCss={width:this.def.dropdown_width};}
select2Options.minimumResultsForSearch=this.def.searchBarThreshold?this.def.searchBarThreshold:7;if(this.def.isMultiSelect){select2Options.multiple=true;}
select2Options.separator=this.def.separator||',';if(this.def.separator){select2Options.tokenSeparators=[this.def.separator];}
select2Options.initSelection=_.bind(this._initSelection,this);select2Options.query=_.bind(this._query,this);select2Options.sortResults=_.bind(this._sortResults,this);return select2Options;},_initSelection:function($ele,callback){var data=[];var options=_.isString(this.items)?app.lang.getAppListStrings(this.items):this.items;var values=$ele.val();if(this.def.isMultiSelect){values=values.split(this.def.separator||',');}
_.each(_.pick(options,values),function(value,key){data.push({id:key,text:value});},this);if(data.length===1){callback(data[0]);}else{callback(data);}},_query:function(query){var options=_.isString(this.items)?app.lang.getAppListStrings(this.items):this.items;var data={results:[],more:false};if(_.isObject(options)){_.each(options,function(element,index){var text=""+element;if(query.matcher(query.term,text)){data.results.push({id:index,text:text});}});}else{options=null;}
query.callback(data);},_sortResults:function(results,container,query){var keys,sortedResults;if(this.def.sort_alpha){sortedResults=_.sortBy(results,function(item){return item.text;});return sortedResults;}
if(!this._keysOrder){this._keysOrder={};keys=_.map(app.lang.getAppListKeys(this.def.options),function(key){return key.toString();});if(!_.isEqual(keys,_.keys(this.items))){_.each(keys,function(key,index){return this._keysOrder[key]=index;},this);}}
if(_.isEmpty(this._keysOrder)){return results;}
sortedResults=results;if(!this.def.visibility_grid){sortedResults=_.sortBy(results,function(item){return this._keysOrder[item.id];},this);}
return sortedResults;},_getDefaultOption:function(optionsKeys){return _.first(optionsKeys);},unformat:function(value){if(this.def.isMultiSelect&&_.isArray(value)&&_.indexOf(value,this.BLANK_VALUE_ID)>-1){value=_.clone(value);delete value[this.BLANK_VALUE_ID];}
if(this.def.isMultiSelect&&_.isNull(value)){return[];}else{return value;}},format:function(value){if(this.def.isMultiSelect&&_.isArray(value)&&_.indexOf(value,'')>-1){value=_.clone(value);delete value[''];}
if(this.def.isMultiSelect&&_.isString(value)){return this.convertMultiSelectDefaultString(value);}else{return value;}},convertMultiSelectDefaultString:function(defaultString){var result=defaultString.split(",");_.each(result,function(value,key){if(value!=='^^'){result[key]=value.replace(/\^/g,"");}});return result;},bindDataChange:function(){if(this.model){this.model.on('change:'+this.name,function(){if(_.isEmpty(this.$(this.fieldTag).data('select2'))){this.render();}else{this.$(this.fieldTag).select2('val',this.model.get(this.name));}},this);}},bindDomChange:function(){var $el=this.$(this.appendValueTag);if($el.length){$el.on('change',_.bind(function(){this.appendValue=$el.prop('checked');this.model.set(this.name+'_replace',this.appendValue?'1':'0');},this));}},unbindDom:function(){this.$(this.appendValueTag).off();this.$(this.fieldTag).select2('destroy');this._super('unbindDom');},unbindData:function(){var _key='request:'+this.module+':'+this.name;this.context.unset(_key);app.view.Field.prototype.unbindData.call(this);},_dispose:function(){this.unbindKeyDown();this._super('_dispose');}})