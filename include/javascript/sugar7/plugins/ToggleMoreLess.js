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
(function(app){app.events.on('app:init',function(){app.plugins.register('ToggleMoreLess',['view'],{events:{'click [data-moreless]':'moreLessClicked'},MORE_LESS_KEY:'show_more',MORE_LESS_STATUS:{MORE:'more',LESS:'less'},onAttach:function(){this.on('init',function(){this.meta=this.meta||{};this.meta.last_state=this.meta.last_state||{id:this.name+'_view',defaults:{}};this.meta.last_state['defaults'][this.MORE_LESS_KEY]='less';this.SHOW_MORE_KEY=app.user.lastState.key(this.MORE_LESS_KEY,this);app.user.lastState.register(this);});this.before('render',function(){var lastStatus=app.user.lastState.get(this.SHOW_MORE_KEY);if(_.contains(this.MORE_LESS_STATUS,lastStatus)){this._setVisibility(lastStatus);}},this);},moreLessClicked:function(evt){var moreLess=this.$(evt.currentTarget).data('moreless');this.toggleMoreLess(moreLess);},toggleMoreLess:function(moreLess,skipSetState){this._setVisibility(moreLess);this.$('[data-moreless=more]').toggleClass('hide',this.hideMoreButton);this.$('[data-moreless=less]').toggleClass('hide',this.hideLessButton);var target=this.$('[data-moreless='+moreLess+']').data('target')||'.panel-hidden';this.$(target).toggleClass('hide',this.hidePanel);if(!skipSetState){app.user.lastState.set(this.SHOW_MORE_KEY,moreLess);}
this.trigger('more-less:toggled',moreLess);},_setVisibility:function(moreLess){this.hideMoreButton=(moreLess===this.MORE_LESS_STATUS.MORE);this.hideLessButton=(moreLess===this.MORE_LESS_STATUS.LESS);this.hidePanel=(moreLess===this.MORE_LESS_STATUS.LESS);}});});})(SUGAR.App);