define([
    'jquery',
    'underscore',
    'Magento_Ui/js/grid/columns/select',
    "Magento_Ui/js/modal/modal"
], function ($, _, Column, modal) {
    'use strict';

    return Column.extend({
        defaults: {
            bodyTmpl: 'Ced_ConnectBase/ui/grid/cells/text',
        },
        getMarketplaceProductStatusColor: function (column, row) {
            if (column.index === "marketplace_status" && row.marketplace_status === 0) {
                return 'marketplace-product-not-uploaded';
            } else if(column.index === "marketplace_status" && row.marketplace_status === 4) {
                return 'marketplace-product-in-progress';
            } else if(column.index === "marketplace_status" && row.marketplace_status === 5) {
                return 'marketplace-product-live';
            } else if(column.index === "marketplace_status" && row.marketplace_status === 3) {
                return 'marketplace-product-failed';
            } else if(column.index === "marketplace_status" && row.marketplace_status === 6) {
                return 'marketplace-product-failed';
            } else if(column.index === "marketplace_status" && row.marketplace_status === 7) {
                return 'marketplace-product-deactivated';
            } else if(column.index === "marketplace_status" && row.marketplace_status === 2) {
                return 'marketplace-product-ready-to-upload';
            }

            if (column.index === "validation_status" && row.validation_status === "not_validated") {
                return 'marketplace-product-not-uploaded';
            } else if (column.index === "validation_status" && row.validation_status === "valid") {
                return 'marketplace-product-live';
            } else if(column.index === "validation_status" && row.validation_status === "invalid") {
                return 'marketplace-product-failed';
            } else if(column.index === "validation_status" && row.validation_status === "validating") {
                return 'marketplace-product-in-progress';
            }

            if (column.index === "warning_status" && row.warning_status == 0) {
                return 'marketplace-product-live';
            } else if (column.index === "warning_status" && row.warning_status == 1) {
                return 'marketplace-product-ready-to-upload';
            }

            return '';
        },

        isErrorColumn: function (row, column) {
            return (column.index === "validation_status" && row.validation_status === 'invalid')
                || (column.index === "marketplace_status" && (
                    row.marketplace_status === 3 || row.marketplace_status === 6
                    )
                ) || (column.index === "warning_status" && row.warning_status == 1);
        },

        showError: function (productId) {
            let modelSelector = $('#modal'+productId)
            let options = {
                type: 'popup',
                responsive: true,
                title: 'Error',
                buttons: [{
                    text: $.mage.__('Ok'),
                    class: '',
                    click: function () {
                        this.closeModal();
                    }
                }]
            };

            modal(options, modelSelector);
            modelSelector.modal('openModal');
        }
    });
});
