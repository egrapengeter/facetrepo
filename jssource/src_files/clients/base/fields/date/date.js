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
 * @class View.Fields.Base.DateField
 * @alias SUGAR.App.view.fields.BaseDateField
 * @extends View.Field
 */
({
    /**
     * @inheritDoc
     */
    plugins: [
        'EllipsisInline',
        'Tooltip'
    ],

    /**
     * @inheritDoc
     */
    fieldTag: 'input[data-type=date]',

    /**
     * @inheritDoc
     */
    events: {
        'hide': 'handleHideDatePicker'
    },

    /**
     * @inheritDoc
     */
    initialize: function(options) {
        // FIXME: Remove this when SIDECAR-517 gets in
        this._initPlugins();
        this._super('initialize', [options]);
        this._initEvents();
        this._initDefaultValue();
        this._initPlaceholderAttribute();
    },

    /**
     * Initialize plugins.
     *
     * @chainable
     * @protected
     * @template
     *
     * FIXME: Remove this when SIDECAR-517 gets in
     */
    _initPlugins: function() {
        return this;
    },

    /**
     * Initialize events.
     *
     * @chainable
     * @protected
     * @template
     */
    _initEvents: function() {
        return this;
    },

    /**
     * If we're creating a new model and a valid `display_default` property was
     * supplied (e.g.: `next friday`) we'll use it as a date instead.
     *
     * @chainable
     * @protected
     */
    _initDefaultValue: function() {
        if (!this.model.isNew() || this.model.get(this.name) || !this.def.display_default) {
            return this;
        }

        var value = app.date.parseDisplayDefault(this.def.display_default);
        if (!value) {
            return this;
        }

        value = this.unformat(
            app.date(value).format(
                app.date.convertFormat(this.getUserDateFormat())
            )
        );

        this.model.set(this.name, value);
        this.model.setDefaultAttribute(this.name, value);

        return this;
    },

    /**
     * Initializes the field's placeholder attribute.
     *
     * Placeholder attribute can be used in different ways. Based on metadata
     * settings one can do:
     *
     *     // ...
     *     array(
     *         'name' => 'my_date_field',
     *         'type' => 'date',
     *         'placeholder' => 'TPL_MY_PLACEHOLDER',
     *         // ...
     *     )
     *     // ...
     *
     * Where `TPL_MY_PLACEHOLDER` is able to receive the `format` flag such as:
     *
     *     'TPL_MY_PLACEHOLDER' => 'Accepts the {{format}} format'
     *
     * If none supplied, user date format is used instead
     * {@link #getUserDateformat}.
     *
     * @chainable
     * @protected
     */
    _initPlaceholderAttribute: function() {
        var placeholder = app.date.toDatepickerFormat(this.getUserDateFormat());

        this.fieldPlaceholder = this.def.placeholder && app.lang.get(
            this.def.placeholder,
            this.module,
            {format: placeholder}
        ) || placeholder;

        return this;
    },

    /**
     * Return user date format.
     *
     * @return {String} User date format.
     */
    getUserDateFormat: function() {
        return app.user.getPreference('datepref');
    },

    /**
     * Set up date picker.
     *
     * We rely on the library to confirm that the date picker is only created
     * once.
     *
     * @protected
     */
    _setupDatePicker: function() {
        var $field = this.$(this.fieldTag),
            userDateFormat = this.getUserDateFormat(),
            options = {
                format: app.date.toDatepickerFormat(userDateFormat),
                languageDictionary: this._patchPickerMeta()
            };

        var appendToTarget = this._getAppendToTarget();
        if (appendToTarget) {
            options['appendTo'] = appendToTarget;
        }

        $field.datepicker(options);
    },

    /**
     * Retrieve a selector against which the date picker should be appended to.
     *
     * FIXME: find a proper way to do this and avoid scrolling issues SC-2739
     *
     * @return {String/undefined} Selector against which the date picker should
     *   be appended to, `undefined` if none.
     * @private
     */
    _getAppendToTarget: function() {
        if (this.$el.parents('div#drawers').length) {
            return 'div#drawers .active .main-pane:first';
        }

        if (this.$el.parents('div#content').length) {
            return 'div#content .main-pane:first';
        }

        return;
    },

    /**
     * Date picker doesn't trigger a `change` event whenever the date value
     * changes we need to override this method and listen to the `hide` event.
     *
     * All invalid values are cleared from fields without triggering an event
     * because `this.model.set()` could have been already empty thus not
     * triggering a new event and not calling the default code of
     * `bindDomChange()`.
     */
    handleHideDatePicker: function() {
        var $field = this.$(this.fieldTag),
            value = this.unformat($field.val());

        if (!value) {
            $field.val(value);
        }

        this.model.set(this.name, value);
    },

    /**
     * {@override}
     *
     * Parent method isn't called 'cause `handleHideDatePicker()` already takes
     * care of unformatting the value.
     */
    bindDomChange: function() {
        var $field = this.$(this.fieldTag);

        $field.on('focus', _.bind(this.handleFocus, this));

        $('.main-pane, .flex-list-view-content').on('scroll.' + this.cid, _.bind(function() {
            $field.datepicker('place');
        }, this));
    },

    /**
     * @inheritDoc
     */
    unbindDom: function() {
        this._super('unbindDom');

        $('.main-pane, .flex-list-view-content').off('scroll.' + this.cid);

        var $field = this.$(this.fieldTag),
            datePicker = $field.data('datepicker');
        if (datePicker && !datePicker.hidden) {
            // todo: when SC-2395 gets implemented change this to 'remove' not 'hide'
            $field.datepicker('hide');
        }
    },

    /**
     * Patches our `dom_cal_*` metadata for use with date picker plugin since
     * they're very similar.
     *
     * @private
     */
    _patchPickerMeta: function() {
        var pickerMap = [], pickerMapKey, calMapIndex, mapLen, domCalKey,
            calProp, appListStrings, calendarPropsMap, i, filterIterator;

        appListStrings = app.metadata.getStrings('app_list_strings');

        filterIterator = function(v, k, l) {
            return v[1] !== "";
        };

        // Note that ordering here is used in following for loop
        calendarPropsMap = ['dom_cal_day_long', 'dom_cal_day_short', 'dom_cal_month_long', 'dom_cal_month_short'];

        for (calMapIndex = 0, mapLen = calendarPropsMap.length; calMapIndex < mapLen; calMapIndex++) {

            domCalKey = calendarPropsMap[calMapIndex];
            calProp  = appListStrings[domCalKey];

            // Patches the metadata to work w/datepicker; initially, "calProp" will look like:
            // {0: "", 1: "Sunday", 2: "Monday", 3: "Tuesday", 4: "Wednesday", 5: "Thursday", 6: "Friday", 7: "Saturday"}
            // But we need:
            // ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
            if (!_.isUndefined(calProp) && !_.isNull(calProp)) {
                // Reject the first 0: "" element and then map out the new language tuple
                // so it's back to an array of strings
                calProp = _.filter(calProp, filterIterator).map(function(prop) {
                    return prop[1];
                });
                //e.g. pushed the Sun in front to end (as required by datepicker)
                calProp.push(calProp);
            }
            switch (calMapIndex) {
                case 0:
                    pickerMapKey = 'day';
                    break;
                case 1:
                    pickerMapKey = 'daysShort';
                    break;
                case 2:
                    pickerMapKey = 'months';
                    break;
                case 3:
                    pickerMapKey = 'monthsShort';
                    break;
            }
            pickerMap[pickerMapKey] = calProp;
        }
        return pickerMap;
    },

    /**
     * Formats date value according to user preferences.
     *
     * @param {String} value Date value to format.
     * @return {String/undefined} Formatted value or `undefined` if value is an
     *   invalid date.
     */
    format: function(value) {
        if (!value) {
            return value;
        }

        value = app.date(value);

        if (!value.isValid()) {
            return;
        }

        return value.formatUser(true);
    },

    /**
     * Unformats date value for storing in model.
     *
     * @return {String/undefined} Unformatted value or `undefined` if value is
     *   an invalid date.
     */
    unformat: function(value) {
        if (!value) {
            return value;
        }

        value = app.date(value, app.date.convertFormat(this.getUserDateFormat()), true);

        if (!value.isValid()) {
            return;
        }

        return value.formatServer(true);
    },

    /**
     * @inheritDoc
     */
    _render: function() {
        this._super('_render');

        if (this.tplName !== 'edit' && this.tplName !== 'massupdate') {
            return;
        }

        this._setupDatePicker();
    },

    /**
     * @inheritDoc
     */
    _dispose: function() {
        // FIXME: new date picker versions have support for plugin removal/destroy
        // we should do the upgrade in order to prevent memory leaks

        var $field = this.$(this.fieldTag);
        if ($field.data('datepicker')) {
            $(window).off('resize', $field.data('datepicker').place);
        }

        this._super('_dispose');
    }
})
