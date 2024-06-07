define([
    'jquery'
], function ($) {
    'use strict';

    var mixin = {

        /**
         * Handles changes of 'params' object.
         */
        onParamsChange: function () {
            if (!this.firstLoad) {
                this.reload();
            } else {
                this.triggerDataReload = true;
            }
            if (this.params.namespace === 'ct_product_listing') {
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
                this.params['filter'] = conditions
            }
        },
    };

    return function (target) {
        return target.extend(mixin);
    };
});
