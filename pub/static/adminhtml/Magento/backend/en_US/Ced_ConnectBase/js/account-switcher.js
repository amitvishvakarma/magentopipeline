
define([
    'jquery'
], function ($) {
    'use strict';

    /**
     * @param {Object} accountSwitchConfig
     */
    return function (accountSwitchConfig) {
        let scopeSwitcherHandler;

        (function () {
            let accountsList = $('[data-role=accounts-list]');

            accountsList.on('click', '[data-value]', function (event) {
                let val = $(event.target).data('value'),
                    role = $(event.target).data('role'),
                    switcher = $('[data-role=' + role + ']');

                event.preventDefault();

                if (!switcher.val() || val !== switcher.val()) {

                    /* Set the value & trigger event */
                    switcher.val(val).trigger('change');
                }
            });
        })($);

        /**
         * Switch store scope
         *
         * @param {Object} obj
         * @return void
         */
        function switchScope(obj) {
            let switcher = $(obj),
                scopeId = switcher.val(),
                scopeParams = '',
                switcherParams = {};

            if (scopeId) {
                scopeParams = switcher.data('param') + '/' + scopeId + '/';
            }

            if (obj.switchParams) {
                scopeParams += obj.switchParams;
            }

            /**
             * Reload function for switcher
             */
            function reload() {
                let url;

                if (!accountSwitchConfig.isUsingIframe) {

                    if (accountSwitchConfig.switchUrl && accountSwitchConfig.switchUrl.length > 0) {
                        url = accountSwitchConfig.switchUrl + scopeParams;

                        /* eslint-disable no-undef */
                        setLocation(url);
                    }

                } else {
                    $('#preview_selected_store').val(scopeId);
                    $('#preview_form').trigger('submit');

                    $('.store-switcher .dropdown-menu li a').each(function () {
                        let $this = $(this);

                        if ($this.data('role') === 'account-id' && $this.data('value') === scopeId) {
                            $('#store-change-button').html($this.text());
                        }
                    });

                    $('#store-change-button').trigger('click');
                }
            }

            if (typeof scopeSwitcherHandler !== 'undefined') {
                switcherParams = {
                    scopeId: scopeId,
                    scopeParams: scopeParams,
                    useConfirm: accountSwitchConfig.useConfirm
                };

                scopeSwitcherHandler(switcherParams);
            } else if (accountSwitchConfig.useConfirm) {
                require([
                    'Magento_Ui/js/modal/confirm',
                    'mage/translate'
                ], function (confirm, $t) {
                    confirm({
                        content: $t('Please confirm account switching. All data that hasn\'t been saved will be lost.'),
                        actions: {

                            /**
                             * Confirm action
                             */
                            confirm: function () {
                                reload();
                            },

                            /**
                             * Cancel action
                             */
                            cancel: function () {
                                obj.value = accountSwitchConfig.accountId ? accountSwitchConfig.accountId : '';
                            }
                        }
                    });
                });
            } else {
                reload();
            }
        }

        window.scopeSwitcherHandler = scopeSwitcherHandler;
        window.switchScope = switchScope;
    };
});
