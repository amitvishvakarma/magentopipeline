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

define([
    'uiComponent',
    'jquery',
    'ko',
    'underscore',
    'mage/translate'
], function (Component, $, ko, _) {
    'use strict';
    return Component.extend({
        topSellingProducts: ko.observableArray(),
        isEmptyTSP: ko.observable(),

        /**
         * @override
         */
        initialize: function(options) {
            let self = this;
            $.getJSON(options.url, function(data){
                if (data.length > 0) {
                    self.isEmptyTSP(false);
                    $.each(data, function (index, element) {
                        self.topSellingProducts.push(
                            element
                        );
                    });
                } else {
                    self.isEmptyTSP(true);
                }
            });
            return this._super();
        }
    });
});
