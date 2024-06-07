/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'uiComponent',
    'uiRegistry',
    'jquery',
    'underscore',
    'mage/translate'
], function (Component, uiRegistry, $, _) {
    'use strict';

    return Component.extend({
        readyToRenderNextStep: false,
        stepInitialized: false,
        defaults: {
            notificationMessage: {
                text: null,
                error: null
            }
        },

        /** @inheritdoc */
        initialize: function () {
            this._super();
        },

        /**
         * @param {Object} wizard
         */
        render: function (wizard) {
            this.wizard = wizard;
            this.setNotificationMessage();
            if (this.readyToRenderNextStep == true) {
                var ced_module_steps_wizard = uiRegistry.get('ced-module-steps-wizard');
                ced_module_steps_wizard.next();
            }
        },

        /**
         * Set notification message.
         */
        setNotificationMessage: function () {
            /*eslint-disable max-len*/
            var msg = $.mage.__('When you remove or add an attribute, we automatically update all configurations and you will need to recreate current configurations manually.');

            /*eslint-enable max-len*/

            if (this.mode === 'edit') {
                this.wizard.setNotificationMessage(msg);
            }
        },

        /**
         * @param {Object} wizard
         */
        force: function (wizard) {
            var policy_listing = uiRegistry.get('policies_listing.policies_listing_data_source');
            if (policy_listing.data.items != undefined && policy_listing.data.items.length > 0) {
                var items = policy_listing.data.items;
                $.each(items, function (index, record) {
                    if (record.validation_status == 0) {
                        this.readyToRenderNextStep = false;
                        throw new Error($.mage.__('All Policy must be Valid. Please update invalid policies.'));
                    }
                });
                this.readyToRenderNextStep = true;
            }
            this.setNotificationMessage();
        },

        readyToRender: function () {
            return this.readyToRenderNextStep;
        },

        /**
         * Back.
         */
        back: function () {
        },

        /**
         * Back.
         */
        preBack: function () {
            this.readyToRenderNextStep = false;
        },

        /**
         * Back.
         */
        fetchOnboardingData: function (url) {
            var wizard = this.wizard;
            var wizard_account_form = uiRegistry.get('connectbase_account_form.connectbase_account_form_data_source');
            var account_id = wizard_account_form.data.id;
            $('body').trigger('processStart');
            $.ajax({
                url: url,
                data: {
                    "id": account_id
                },

                /**
                 * Success callback.
                 * @param {Object} resp
                 * @returns {Boolean}
                 */
                success: function (resp) {
                    if (resp.error == false) {
                        wizard.setNotificationMessage(resp.messages);
                        wizard.showNotificationMessage();
                    } else if (resp.error == true) {
                        wizard.setNotificationMessage(resp.messages, true);
                        wizard.showNotificationMessage();
                    };
                    $('body').trigger('processStop');
                    return true;
                },

                /**
                 * Complete callback.
                 */
                complete: function () {
                    $('body').trigger('processStop');
                }
            });
        }
    });
});
