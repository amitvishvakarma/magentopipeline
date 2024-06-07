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
            },
            listens: {
                "connectbase_account_form.connectbase_account_form:responseData": "responseDataChanged"
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
            var target_onboarding_form = uiRegistry.get('connectbase_account_form.connectbase_account_form');
            target_onboarding_form.ajaxSave = true;
            target_onboarding_form.validate();
            if (!target_onboarding_form.additionalInvalid && !target_onboarding_form.source.get('params.invalid')) {
                target_onboarding_form.save();
            }
            this.setNotificationMessage();
        },

        readyToRender: function () {
            return this.readyToRenderNextStep;
        },

        responseDataChanged: function (responseData) {
            if (responseData.error == false) {
                var redirect_url = responseData.redirect_url;
                window.location = redirect_url;
                /*this.readyToRenderNextStep = true;
                var ced_module_steps_wizard = uiRegistry.get('ced-module-steps-wizard');
                ced_module_steps_wizard.next();
                this.readyToRenderNextStep = false;*/
            } else if (newValue.error == true) {
                this.wizard.setNotificationMessage(responseData.messages, true);
                this.wizard.showNotificationMessage();
            }
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
        }
    });
});
