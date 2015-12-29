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
({plugins:['Dropdown','RelativeTime','EllipsisInline','Tooltip'],collection:null,_alertsCollections:{},dateStarted:null,_remindersIntervalId:null,_intervalId:null,_defaultOptions:{delay:5,limit:4},events:{'click [data-action=is-read-handler]':'isReadHandler'},initialize:function(options){options.module='Notifications';this._super('initialize',[options]);app.events.on('app:sync:complete',this._bootstrap,this);app.events.on('app:logout',this.stopPulling,this);},_bootstrap:function(){this._initOptions();this._initCollection();this._initReminders();this.startPulling();this.collection.on('change:is_read',this.render,this);return this;},_initOptions:function(){var options=_.extend(this._defaultOptions,this.meta||{});this.delay=options.delay*60*1000;this.limit=options.limit;return this;},_initCollection:function(){this.collection=app.data.createBeanCollection(this.module);this.collection.options={params:{order_by:'date_entered:desc'},limit:this.limit,myItems:true,fields:['date_entered','id','is_read','name','severity']};this.collection.filterDef=[{is_read:{$equals:false}}];this.collection.sync=_.wrap(this.collection.sync,function(sync,method,model,options){options=options||{};options.endpoint=function(method,model,options,callbacks){var url=app.api.buildURL(model.module,'pull',{},options.params);return app.api.call('read',url,{},callbacks);};sync(method,model,options);});return this;},_initReminders:function(){var timeOptions=_.keys(app.lang.getAppListStrings('reminder_time_options')),max=_.max(timeOptions,function(key){return parseInt(key,10);});this.reminderMaxTime=parseInt(max,10)+this.delay / 1000;this.reminderDelay=30*1000;_.each(['Calls','Meetings'],function(module){this._alertsCollections[module]=app.data.createBeanCollection(module);this._alertsCollections[module].options={limit:this.meta.remindersLimit,fields:['date_start','id','name','reminder_time','location','parent_name']};},this);return this;},startPulling:function(){if(!_.isNull(this._intervalId)){return this;}
this.dateStarted=new Date().getTime();this.pull();this._pullReminders();this._intervalId=window.setTimeout(_.bind(this._pullAction,this),this.delay);this._remindersIntervalId=window.setTimeout(_.bind(this.checkReminders,this),this.reminderDelay);return this;},_pullAction:function(){if(!app.api.isAuthenticated()){this.stopPulling();return;}
var diff=this.delay-(new Date().getTime()-this.dateStarted)%this.delay;this._intervalId=window.setTimeout(_.bind(this._pullAction,this),diff);this.pull();this._pullReminders();},stopPulling:function(){if(!_.isNull(this._intervalId)){window.clearInterval(this._intervalId);this._intervalId=null;}
if(!_.isNull(this._remindersIntervalId)){window.clearInterval(this._remindersIntervalId);this._remindersIntervalId=null;}
return this;},pull:function(){if(this.disposed||this.isOpen()){return this;}
var self=this;this.collection.fetch({success:function(){if(self.disposed||self.isOpen()){return this;}
self.render();}});return this;},_pullReminders:function(){if(this.disposed||!_.isFinite(this.reminderMaxTime)){return this;}
var date=new Date(),startDate=date.toISOString(),endDate;date.setTime(date.getTime()+this.reminderMaxTime*1000);endDate=date.toISOString();_.each(['Calls','Meetings'],function(module){this._alertsCollections[module].filterDef=_.extend({},this.meta.remindersFilterDef||{},{'date_start':{'$dateBetween':[startDate,endDate]},'users.id':{'$equals':app.user.get('id')}});this._alertsCollections[module].fetch({silent:true,merge:true,apiOptions:{skipMetadataHash:true}});},this);return this;},checkReminders:function(){if(!app.api.isAuthenticated()){this.stopPulling();return this;}
var date=new Date(),diff=this.reminderDelay-(date.getTime()-this.dateStarted)%this.reminderDelay;this._remindersIntervalId=window.setTimeout(_.bind(this.checkReminders,this),diff);_.each(this._alertsCollections,function(collection){_.chain(collection.models).filter(function(model){var needDate=new Date(model.get('date_start'))-parseInt(model.get('reminder_time'),10)*1000;return needDate>date&&needDate-date<=diff;},this).each(this._showReminderAlert,this);},this);return this;},_showReminderAlert:function(model){var url=app.router.buildRoute(model.module,model.id),dateFormat=app.user.getPreference('datepref')+' '+app.user.getPreference('timepref'),dateValue=app.date.format(new Date(model.get('date_start')),dateFormat),template=app.template.getView('notifications.notifications-alert'),message=template({title:app.lang.get('LBL_REMINDER_TITLE',model.module),module:model.module,model:model,location:model.get('location'),description:model.get('description'),dateStart:dateValue,parentName:model.get('parent_name')});_.defer(function(){if(confirm(message)){app.router.navigate(url,{trigger:true});}});},isOpen:function(){return this.$('[data-name=notifications-list-button]').hasClass('open');},isReadHandler:function(event){var element=$(event.currentTarget),id=element.data('id'),notification=this.collection.get(id),isRead=notification.get('is_read');if(!isRead){notification.set({is_read:true});}},_renderHtml:function(){if(!app.api.isAuthenticated()||app.config.appStatus==='offline'){return;}
this._super('_renderHtml');},_dispose:function(){this.stopPulling();this._alertsCollections={};this._super('_dispose');}})