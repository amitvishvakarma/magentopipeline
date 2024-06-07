
define([
    'uiComponent',
    'jquery',
    'underscore',
    'mage/translate',
], function (Component, $, _) {
    'use strict';

    return Component.extend({
        productsLabels: {},
        stepInitialized: false,
        defaults: {
            modules: {
                multiselect: '${ $.multiselectName }',
                productProvider: '${ $.providerName }'
            },
            listens: {
                '${ $.multiselectName }:rows': 'doSelectSavedProducts',
                '${ $.multiselectName }:excluded': 'excludedProducts',
            },
        },
        url: '',
        renderUrl: '',
        templateId: null,

        /** @inheritdoc */
        initialize: function (options) {
            let self = this
            this.url = options.url
            this.renderUrl = options.renderUrl
            this.templateId = options.templateId
            this._super();
            this.selected = [];

            $('#btn-apply-query').on('click', function () {
                self.applyQuery()
            })
        },

        /** @inheritdoc */
        initObservable: function () {
            this._super().observe(['selectedProducts']);

            return this;
        },

        /**
         * Excluded products.
         */
        excludedProducts: function (productIds) {
            $('#excluded-product-ids').val(JSON.stringify(productIds))
        },

        /**
         * Do select saved products.
         */
        doSelectSavedProducts: function () {
            var self = this
            if (this.stepInitialized === false) {
                this.stepInitialized = true;
                //cache products labels, which can be present on the 2nd page
                $.ajax({
                    method: "post",
                    dataType: "json",
                    url: this.url,
                    data: {
                        form_key: window.FORM_KEY,
                        namespace: 'ct_product_listing',
                        filter: self.selectedCondition()
                    },
                    success: $.proxy(function (response) {

                    })
                });
                self.applyQuery()
            }
        },

        selectedCondition: function () {
            let conditions = {};
            let selectedConditions = null
            if (window.conditions_fieldset) {
                selectedConditions = window.conditions_fieldset.parent.elements
            }
            $.each(selectedConditions, function (key, item) {
                let name = $(item).attr('name')
                if (name === undefined) {
                    return false;
                }
                name = name.replace("[", "][")
                conditions[name] = $(item).val()
            })
            return conditions
        },

        applyQuery: function () {
            let self = this
            $.ajax({
                method: "post",
                dataType: "json",
                url: this.renderUrl,
                showLoader: true,
                data: {
                    form_key: window.FORM_KEY,
                    namespace: 'ct_product_listing',
                    filter: self.selectedCondition()
                },
                success: $.proxy(function (response) {
                    self.productProvider().setData(response)
                })
            });
        }
    });
});
