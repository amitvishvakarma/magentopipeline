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
            }
        },
        nextLabelText: $.mage.__('Finish'),

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
            var wizard = this.wizard;
            var link_product = $('#ced_link_existing_product:checked').val();
            $('body').trigger('processStart');

            $.ajax({
                url: this.finishUrl,
                data: {
                    "wizard_complete": true,
                    "link_product": link_product
                },

                /**
                 * Success callback.
                 * @param {Object} resp
                 * @returns {Boolean}
                 */
                success: function (resp) {
                    if (resp.error == false && resp.redirect_url) {
                        var redirect_url = resp.redirect_url;
                        window.location = redirect_url;
                    } else if (resp.error == true) {
                        wizard.setNotificationMessage(resp.messages, true);
                        wizard.showNotificationMessage();
                    }
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
            //this.readyToRenderNextStep = false;
        }
    });
});
