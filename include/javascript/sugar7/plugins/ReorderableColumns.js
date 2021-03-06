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
(function(app){app.events.on('app:init',function(){app.plugins.register('ReorderableColumns',['view'],{_listDragColumnSelector:'th[data-fieldname]',_listDragItemSelector:'th[data-fieldname] [data-draggable="true"]',_listDragColumn:[],_makeColumnReorderable:function(){if(!this.$('table').hasClass('reorderable-columns')){app.logger.error('ReorderableColumns plugin expects the table to have .draggable-columns class '+'in order to work.');return;}
this._listDragColumn=_.map(this.$(this._listDragColumnSelector),function(column){return $(column).data('fieldname');});this.$(this._listDragItemSelector).draggable({revert:'invalid',axis:'x',stop:_.bind(function(event,ui){if(ui.helper._renderView&&!this.disposed){this.render();}},this)});this.$('.th-droppable-placeholder').droppable({accept:this._listDragItemSelector,hoverClass:'th-droppable-placeholder-highlight',tolerance:'touch',drop:_.bind(this._onColumnDrop,this)});},_onColumnDrop:function(event,ui){var $draggedItem=$(ui.draggable),$droppedInItem=$(event.target),draggedIndex,droppedInIndex,initialOrder,visibleOrder,hasChanged;draggedIndex=$draggedItem.closest('th').find('.th-droppable-placeholder:first').data('droppableindex');droppedInIndex=$droppedInItem.data('droppableindex');if(droppedInIndex>draggedIndex){droppedInIndex--;}
initialOrder=_.clone(this._listDragColumn);visibleOrder=_.moveIndex(this._listDragColumn,draggedIndex,droppedInIndex);hasChanged=!_.isEqual(visibleOrder,initialOrder);if(!hasChanged){$draggedItem.draggable('option','revert',true);return;}
var newOrder=this._calculateNewOrder($draggedItem,$droppedInItem);this.trigger('list:reorder:columns',this._fields,newOrder);ui.draggable._renderView=true;},_calculateNewOrder:function($draggedItem,$droppedInItem){var globalOrder,draggedIndex,droppedInIndex;globalOrder=_.pluck(this._fields.all,'name');draggedIndex=_.indexOf(globalOrder,$draggedItem.closest('th').data('fieldname'));droppedInIndex=_.indexOf(globalOrder,$droppedInItem.closest('th').data('fieldname'));if($droppedInItem.hasClass('th-droppable-placeholder-last')){droppedInIndex++;}
if(droppedInIndex>draggedIndex){droppedInIndex--;}
return _.moveIndex(globalOrder,draggedIndex,droppedInIndex);},onAttach:function(component,plugin){this.on('render',_.debounce(this._makeColumnReorderable,200),this);}});});})(SUGAR.App);