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
(function(app){app.events.on('app:init',function(){app.plugins.register('Chart',['view'],{chart_loaded:false,chartCollection:null,chart:null,total:0,onAttach:function(component,plugin){this.on('init',function(){if(this.meta.config){return;}
app.events.on('preview:close',function(){if(_.isUndefined(app.drawer)||app.drawer.isActive(this.$el)){this.resize();}},this);this.layout.on('dashlet:collapse',function(collapse){if(!collapse){this.resize();}},this);this.layout.context.on('dashlet:draggable:stop',function(){this.resize();},this);$(window).on('resize.'+this.cid,_.debounce(_.bind(this.resize,this),100));this.handlePrinting('on');if(!_.isFunction(this.chartResize)){this.chartResize=this._chartResize;}
if(!_.isFunction(this.hasChartData)){this.hasChartData=this._hasChartData;}},this);this.on('render',function(){this.$('.nv-chart').on('click',_.bind(this.chart.dispatch.chartClick,this));this.renderChart();},this);},_hasChartData:function(){return this.total!==0;},_chartResize:function(){this.chart.update();},onDetach:function(){if(this.meta.config){return;}
if(this.layout){this.layout.off(null,null,this);}
if(this.layout&&this.layout.context){this.layout.context.off(null,null,this);}
$(window).off('resize.'+this.cid);this.handlePrinting('off');},isChartReady:function(){if(this.meta.config||this.disposed){return false;}
if(!this.$el||(this.$el.parents().length>0&&!this.$el.is(':visible'))){return false;}
if(!_.isFunction(this.chart)||!this.hasChartData()){this.chart_loaded=false;this.displayNoData(true);return false;}
this.displayNoData(false);return true;},resize:function(){if(!this.chart_loaded){return;}
if(!this.$el||(this.$el.parents().length>0&&!this.$el.is(':visible'))){return;}
this.chartResize();},handlePrinting:function(state){var self=this,mediaQueryList=window.matchMedia&&window.matchMedia('print');var pausecomp=function(millis){var date=new Date(),curDate=null;do{curDate=new Date();}while(curDate-date<millis);};var printResize=function(mql){if(mql.matches){if(!_.isUndefined(self.chart.legend)&&_.isFunction(self.chart.legend.showAll)){self.chart.legend.showAll(true);}
self.chart.width(640).height(320);self.resize();pausecomp(200);}else{browserResize();}};var browserResize=function(){if(!_.isUndefined(self.chart.legend)&&_.isFunction(self.chart.legend.showAll)){self.chart.legend.showAll(false);}
self.chart.width(null).height(null);self.resize();};if(state==='on'){if(window.matchMedia){mediaQueryList.addListener(printResize);}else if(window.attachEvent){window.attachEvent('onbeforeprint',printResize);window.attachEvent('onafterprint',browserResize);}else{window.onbeforeprint=printResize;window.onafterprint=browserResize;}}else{if(window.matchMedia){mediaQueryList.removeListener(printResize);}else if(window.detachEvent){window.detachEvent('onbeforeprint',printResize);window.detachEvent('onafterprint',browserResize);}else{window.onbeforeprint=null;window.onafterprint=null;}}},displayNoData:function(state){this.$('[data-content="chart"]').toggleClass('hide',state);this.$('[data-content="nodata"]').toggleClass('hide',!state);}});});})(SUGAR.App);