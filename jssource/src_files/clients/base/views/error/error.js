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
/**
 * @class View.Views.Base.ErrorView
 * @alias SUGAR.App.view.views.BaseErrorView
 * @extends View.View
 */
({
    className: 'error-page',

    cubeOptions: {spin: false},

    events: {
        'click .sugar-cube': 'spinCube'
    },

    initialize: function(options) {
        // Adds the metadata for the Error module
        app.metadata.set(this._metadata);
        app.data.declareModels();

        // Reprepare the context because it was initially prepared without metadata
        app.controller.context.prepare(true);

        // Attach the metadata to the view
        this.options.meta = this._metadata.modules[this.options.module].views[this.options.name].meta;
        app.view.View.prototype.initialize.call(this, options);
    },
    _render: function() {
        if(this.context.get('errorType')) {
            var attributes = this.getErrorAttributes();
            this.model.set(attributes);
        }
        app.view.View.prototype._render.call(this);
    },
    getErrorAttributes: function() {
        var attributes = {};
        if(this.context.get('errorType') ==='404') {
            attributes = {
                title: 'ERR_HTTP_404_TITLE',
                type: 'ERR_HTTP_404_TYPE',
                message: 'ERR_HTTP_404_TEXT',
                link: '<a href="javascript:window.history.back()">' + app.lang.get('ERR_HTTP_404_ACTION') + '</a>'
            };
        } else if(this.context.get('errorType') ==='422') {
            attributes = {
                title: 'ERR_HTTP_DEFAULT_TEXT',
                type: error.status || 'ERR_HTTP_DEFAULT_TYPE',
                message: 'ERR_CONTACT_TECH_SUPPORT',
                link: '<a href="javascript:window.history.back()">' + app.lang.get('ERR_HTTP_DEFAULT_ACTION') + '</a>'
            };
        } else if(this.context.get('errorType') ==='500') {
            attributes = {
                title: 'ERR_HTTP_500_TITLE',
                type: 'ERR_HTTP_500_TYPE',
                message: 'ERR_HTTP_500_TEXT',
                link: '<a href="javascript:window.history.back()">' + app.lang.get('ERR_HTTP_500_ACTION') + '</a>'
            };
        } else {
            var error = this.context.get('error') || {};
            var title = null;
            if (error.status && error.errorThrown) {
                title = 'HTTP: ' + error.status + ' ' + error.errorThrown;
            }
            attributes = {
                title: title || 'ERR_HTTP_DEFAULT_TITLE',
                type: error.status || 'ERR_HTTP_DEFAULT_TYPE',
                message: error.message || 'ERR_HTTP_DEFAULT_TEXT'
            };
        }
        return attributes;
    },

    _metadata : {
        "modules": {
            "Error": {
                "views": {
                    "error": {
                        "meta": {}
                    }
                },
                "layouts": {
                    "error": {
                        "meta": {
                            "type": "simple",
                            "components": [
                                {view: "error"}
                            ]
                        }
                    }
                }
            }
        },
        'module_tab_map': {
            'Error': ''
        }
    },

    spinCube: function() {
        this.cubeOptions.spin = !this.cubeOptions.spin;
        this.render();
    }
})
