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
    'uiLayout',
    'Magento_Ui/js/grid/provider'
], function (layout, uiGridProvider) {
    'use strict';

    return uiGridProvider.extend({

        /**
         * Update Component Data.
         *
         * @returns {Provider} Chainable.
         */
        updateComponentData: function (marketplace_attribute_code) {
            if(this.storage() && marketplace_attribute_code.marketplace_attribute_code != undefined) {
                this.storage().clearRequests();
                var currentAttrCode = marketplace_attribute_code.marketplace_attribute_code;
                var previousUrl = this.update_url;
                previousUrl = previousUrl.replace(/(marketplace_attribute_code[\/]).*?[\/]/, '$1' + currentAttrCode + '/');

                this.update_url = previousUrl;
                this.storage().updateUrl = this.update_url;
                this.storage().requestConfig.url = this.storage().updateUrl;
            }
        }
    });
});
