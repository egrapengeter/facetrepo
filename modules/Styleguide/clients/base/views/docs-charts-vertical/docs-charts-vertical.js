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
({className:'container-fluid',_renderHtml:function(){this._super('_renderHtml');d3.json("styleguide/content/charts/data/multibar_data.json",function(data){nv.addGraph(function(){var chart=nv.models.multiBarChart().showTitle(false).tooltips(true).showControls(false).colorData('default').tooltipContent(function(key,x,y,e,graph){return'<p>Stage: <b>'+key+'</b></p>'+'<p>Amount: <b>$'+parseInt(y,10)+'K</b></p>'+'<p>Percent: <b>'+x+'%</b></p>';});d3.select('#vert1 svg').datum(data).transition().duration(500).call(chart);nv.utils.windowResize(chart.update);return chart;});});d3.json("styleguide/content/charts/data/pareto_data_salesrep.json",function(data){nv.addGraph({generate:function(){var chart=nv.models.paretoChart().showTitle(false).showLegend(true).tooltips(true).showControls(false).stacked(true).clipEdge(false).colorData('default').yAxisTickFormat(function(d){return'$'+d3.format(',.2s')(d);}).quotaTickFormat(function(d){return'$'+d3.format(',.3s')(d);});d3.select('#vert2 svg').datum(data).call(chart);nv.utils.windowResize(chart.update);return chart;},callback:function(graph){$('#log').text('Chart is loaded');}});});}})