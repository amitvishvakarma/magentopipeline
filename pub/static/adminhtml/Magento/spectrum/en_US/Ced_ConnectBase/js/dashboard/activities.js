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
        staticsData: ko.observableArray(),
        isEmptyActivity: ko.observable(),

        /**
         * @override
         */
        initialize: function(options) {
            let self = this;

            $.ajax({
                type: "POST",
                url: options.url,
                data: {
                    tag: 2,
                    current_page: 1,
                    page_size: 5,
                    marketplace_id: options.marketplace_id,
                    form_key: window.FORM_KEY
                },
                dataType: "json",
                success: function (response) {
                    if (response.rows && response.rows.length > 0) {
                        self.isEmptyActivity(false);
                        $.each(response.rows, function (index, element) {
                            self.staticsData.push({'created_at': element.created_at, 'message': element.message});
                        });
                    } else {
                        self.isEmptyActivity(true);
                    }
                }
            });

            return this._super();
        }
    });
});
