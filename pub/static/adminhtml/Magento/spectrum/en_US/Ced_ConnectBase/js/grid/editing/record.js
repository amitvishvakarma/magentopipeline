/**
 * CedCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End User License Agreement (EULA)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://cedcommerce.com/license-agreement.txt
 *
 * @category    Ced
 * @package     Ced_ConnectBase
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright CedCommerce (https://cedcommerce.com/)
 * @license     https://cedcommerce.com/license-agreement.txt
 */

/**
 * @api
 */
define([
    'underscore',
    'mageUtils',
    'uiLayout',
    'Magento_Ui/js/grid/editing/record'
], function (_, utils, layout, uiRecord) {
    'use strict';

    return uiRecord.extend({
        defaults: {
            templates: {
                fields: {
                    base: {
                        parent: '${ $.$data.record.name }',
                        name: '${ $.$data.column.index }',
                        provider: '${ $.$data.record.name }',
                        dataScope: 'data.${ $.$data.column.index }',
                        imports: {
                            disabled: '${ $.$data.record.parentName }:fields.${ $.$data.column.index }.disabled'
                        },
                        isEditor: true
                    },
                    text: {
                        component: 'Magento_Ui/js/form/element/abstract',
                        template: 'ui/form/element/input'
                    },
                    date: {
                        component: 'Magento_Ui/js/form/element/date',
                        template: 'ui/form/element/date',
                        dateFormat: 'MMM d, y h:mm:ss a'
                    },
                    select: {
                        component: 'Magento_Ui/js/form/element/select',
                        template: 'ui/form/element/select',
                        options: '${ JSON.stringify($.$data.column.options) }'
                    },
                    multiselect: {
                        component: 'Magento_Ui/js/form/element/multiselect',
                        template: 'ui/form/element/multiselect',
                        options: '${ JSON.stringify($.$data.column.options) }'
                    }
                }
            }
        },

        /**
         * Builds fields' configuration described in a provided column.
         *
         * @param {Column} column - Column instance which contains field definition.
         * @returns {Object} Complete fields' configuration.
         */
        buildField: function (column) {
            var fields = this.templates.fields,
                field  = column.editor;

            if(this.data != undefined && column.index == "default_recommended_value") {
                var marketplace_options = [];
                var option_values = this.data.option_values;
                option_values = JSON.parse(option_values);
                for (const key in option_values){
                    if(option_values.hasOwnProperty(key)) {
                        var option = {value:String(key), label:String(option_values[key])};
                        marketplace_options.push(option);
                    }
                }
                var additional_data = this.data.additional_data;
                additional_data = JSON.parse(additional_data);
                if(marketplace_options.length > 0 || true) {
                    if (additional_data.is_multiselect != undefined && additional_data.is_multiselect == true) {
                        column.editor.editorType = 'multiselect';
                    } else {
                        column.editor.editorType = 'select';
                    }
                    field.options = [
                        {
                            "value": "",
                            "label": "--Please Select--"
                        },
                        {
                            "value": marketplace_options,
                            "label": this.data.marketplace_attribute_code
                        }
                    ];
                } else if (marketplace_options.length <= 1) {
                    column.editor.editorType = 'text';
                }
            }

            if (_.isObject(field) && field.editorType) {
                field = utils.extend({}, fields[field.editorType], field);
            } else if (_.isString(field)) {
                field = fields[field];
            }

            field = utils.extend({}, fields.base, field);

            return utils.template(field, {
                record: this,
                column: column
            }, true, true);
        },

        /**
         * Updates 'fields' array filling it with available editors
         * or with column instances if associated field is not present.
         *
         * @returns {Record} Chainable.
         */
        updateFields: function () {
            var fields;

            fields = this.columns().elems.map(function (column) {
                var child_column = this.getChild(column.index);
                if (
                    this.data
                    && this.data.magento_attribute_code == "default_recommended_value"
                    && child_column != undefined
                ) {
                    if(column.index == "default_custom_value") {
                        child_column.disabled(true);
                    } else {
                        child_column.disabled(false);
                    }
                } else if (
                    this.data
                    && this.data.magento_attribute_code != "default_recommended_value"
                    && child_column != undefined
                ) {
                    if(column.index == "default_recommended_value") {
                        child_column.disabled(true);
                    } else {
                        child_column.disabled(false);
                    }
                }
                return this.getChild(column.index) || column;
            }, this);

            this.fields(fields);

            return this;
        },

        /**
         * Updates state of a 'hasChanges' property.
         *
         * @returns {Record} Chainable.
         */
        updateState: function () {
            var diff = this.checkChanges(),
                changed = {};

            this.hasChanges = !diff.equal;
            changed[this.index] = this.data;
            this.editor().set('changed', [changed]);


            var fields;

            fields = this.columns().elems.map(function (column) {
                var child_column = this.getChild(column.index);
                if (
                    this.data
                    && this.data.magento_attribute_code == "default_recommended_value"
                    && child_column != undefined
                ) {
                    if(column.index == "default_custom_value") {
                        child_column.disabled(true);
                    } else {
                        child_column.disabled(false);
                    }
                } else if (
                    this.data
                    && this.data.magento_attribute_code != "default_recommended_value"
                    && child_column != undefined
                ) {
                    if(column.index == "default_recommended_value") {
                        child_column.disabled(true);
                    } else {
                        child_column.disabled(false);
                    }
                }
            }, this);
            return this;
        }
    });
});
