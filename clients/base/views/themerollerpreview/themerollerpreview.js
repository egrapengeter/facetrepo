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
({initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.customTheme="default";this.context.on("change:colors",this.reloadIframeBootstrap,this);},reloadIframeBootstrap:function(){var self=this;var params={preview:new Date().getTime(),platform:app.config.platform,themeName:this.customTheme};_.extend(params,this.context.attributes.colors);var cssLink=app.api.buildURL('css/preview','',{},params);$('iframe#previewTheme').hide();self.$(".ajaxLoading").show();$.get(cssLink).success(function(data){$('iframe#previewTheme').contents().find('style').html(data);self.$(".ajaxLoading").hide();$('iframe#previewTheme').show();});$('iframe').contents().find('body').css("backgroundColor","transparent");},_renderHtml:function(){if(!app.acl.hasAccess('admin','Administration')){return;}
this._super('_renderHtml');}})