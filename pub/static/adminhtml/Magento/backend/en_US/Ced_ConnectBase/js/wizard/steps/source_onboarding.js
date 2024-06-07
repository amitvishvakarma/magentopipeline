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
                "wizard_module_registration.wizard_module_registration:responseData": "responseDataChanged"
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
            if (!this.readyToRender()) {
                this.wizard.openSystemRequirementModal();
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
            var module_registration_form = uiRegistry.get('wizard_module_registration.wizard_module_registration');
            if (module_registration_form != undefined) {
                module_registration_form.ajaxSave = true;
                module_registration_form.validate();
                if (!module_registration_form.additionalInvalid && !module_registration_form.source.get('params.invalid')) {
                    module_registration_form.save();
                }
            }
            this.setNotificationMessage();
        },

        readyToRender: function () {
            return this.readyToRenderNextStep;
        },

        responseDataChanged: function (newValue) {
            if (newValue.error == false) {
                this.readyToRenderNextStep = true;
                var ced_module_steps_wizard = uiRegistry.get('ced-module-steps-wizard');
                ced_module_steps_wizard.next();
                this.readyToRenderNextStep = false;
                var wizard_registration_edit_field = uiRegistry.get('wizard_module_registration.wizard_module_registration.general.edit');
                wizard_registration_edit_field.value(true);
            } else if (newValue.error == true) {
                this.wizard.setNotificationMessage(newValue.messages, true);
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
