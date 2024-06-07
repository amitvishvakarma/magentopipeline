
/**
 * @api
 */
define([
    'jquery',
    'underscore',
    'uiComponent',
    'ko',
    'jquery/jquery-storageapi'
], function ($, _, Component, ko) {
    'use strict';

    return Component.extend({
        defaults: {},
        options: {},
        localStorage: $.initNamespaceStorage('ced_category_tree').localStorage,
        hasResults: ko.observable(false),
        categories: ko.observableArray([]),
        minSearchLength: 2,
        backNodeSelector: $('#category-back'),
        browseCategorySelector: $('#browse-and-select-category'),
        searchCategorySelector: $('#ced-search-category'),
        rightImageUrl: null,
        checkImageUrl: null,
        currentAccountId: null,
        currentMarketplaceId: null,

        initialize: function (options) {
            this.options = options;
            let self = this;
            self.rightImageUrl = options.rightImageUrl;
            self.checkImageUrl = options.checkImageUrl
            self.currentAccountId = options.currentAccountId
            self.currentMarketplaceId = options.currentMarketplaceId
            self.localStorage.removeAll();

            $(document).on('click', 'li.menu-item-child', function () {
                if ($(this).data('is-parent')) {
                    self.loadChildCategories(options.childCategoriesUrl, $(this).data('category-id'));
                } else {
                    $('.ced-child-categories-image').remove()
                    let imageHtml = '<img id="ced-child-categories-image" class="ced-child-categories-image" src="'+self.checkImageUrl+'" alt="">';
                    $('#ced-category-id').val($(this).data('category-id'));
                    $('#ced-category-hierarchy').val($(this).data('category-name'));
                    $('#anchor-id-'+$(this).data('category-id')).append(imageHtml)
                }
            });

            $('#ced-search-btn').on('click', function () {
                let keyword = self.searchCategorySelector.val();
                if (keyword && keyword.length > self.minSearchLength) {
                    self.loadSearchCategories(options.searchCategoriesUrl, keyword);
                }
            });

            $('#category-back').on('click', function () {
                self.loadChildCategories(options.childCategoriesUrl, $(this).data('grand-parent-node'));
            });

            $('#ced-search-category').on("paste keyup", function() {
                if ($(this).val().length > self.minSearchLength) {
                    self.loadSearchCategories(options.searchCategoriesUrl, $(this).val());
                }
                if ($(this).val().length === 0) {
                    self.loadSearchCategories(options.searchCategoriesUrl, $(this).val());
                }
            });

            return this._super();
        },

        loadChildCategories: function (url, parentNode = 0) {
            let self = this;
            let keyword = 'ced-category-node-'+ parentNode;
            self.backNodeSelector.attr('data-grand-parent-node', self.backNodeSelector.data('parent-node'));
            self.backNodeSelector.attr('data-parent-node', parentNode);
            self.browseCategorySelector.text($(this).data('category-name'))
            this.xhr = $.ajax({
                type: "POST",
                url: url,
                data: {parent_id: parentNode, form_key: window.FORM_KEY},
                dataType: "json",
                showLoader: true,
                beforeSend: function (xhr) {
                    let response = self.loadFromLocalStorage(keyword+self.currentMarketplaceId)
                    if (response) {
                        self.updateCategoryTree(response);
                        xhr.abort();
                        self.initNormalJs();
                    }
                },
                success: $.proxy(function (response) {
                    self.saveToLocalStorage(response, keyword+self.currentMarketplaceId);
                    self.updateCategoryTree(response);
                    self.initNormalJs();
                }),
            });
        },

        loadSearchCategories: function (url, keyword) {
            let self = this;
            this.xhr = $.ajax({
                type: "POST",
                url: url,
                data: {
                    keyword: keyword,
                    account_id: self.currentAccountId,
                    marketplace_id: self.currentMarketplaceId,
                    form_key: window.FORM_KEY
                },
                dataType: "json",
                showLoader: true,
                beforeSend: function (xhr) {
                    let response = self.loadFromLocalStorage(keyword+self.currentMarketplaceId)
                    if (response) {
                        self.updateCategoryTree(response);
                        xhr.abort();
                        self.initNormalJs();
                    }
                },
                success: $.proxy(function (response) {
                    self.saveToLocalStorage(response, keyword+self.currentMarketplaceId);
                    self.updateCategoryTree(response);
                    self.initNormalJs();
                }),
            });
        },

        updateCategoryTree: function (response) {
            let self = this;
            $('li.menu-item-child').remove();
            self.hasResults(true)
            if (response.success && response.success === true) {
                ko.utils.objectForEach(response.data, function(key, entry) {
                    let rootElement = $('.ced-category-tree-menu');
                    let disabled = entry.category_status && entry.category_status == 0 ? 'disabled' : '';
                    let html = self.prepareChildHtml(
                        entry.code ?? entry.category_id,
                        entry.category_path ?? entry.name,
                        entry.parentNode,
                        disabled
                    );
                    rootElement.append(html);
                })
            } else {
                let html = '<li class="menu-item menu-item-child">';
                html += '<span class="no-data-found">'+response.message+'</span>';
                html += '</li>';
                let rootElement = $('.ced-category-tree-menu');
                rootElement.append(html);
            }
        },

        loadFromLocalStorage: function (queryText) {
            if (!this.localStorage) {
                return;
            }
            let hash = this._hash(queryText);
            return this.localStorage.get(hash);
        },

        saveToLocalStorage: function (data, queryText) {
            if (!this.localStorage) {
                return;
            }

            let hash = this._hash(queryText);

            this.localStorage.remove(hash);
            this.localStorage.set(hash, data);
        },

        _hash: function (object) {
            let string = JSON.stringify(object) + "";

            let hash = 0, i, chr, len;
            if (string.length === 0) {
                return hash;
            }
            for (i = 0, len = string.length; i < len; i++) {
                chr = string.charCodeAt(i);
                hash = ((hash << 5) - hash) + chr;
                hash |= 0;
            }
            return 'h' + hash;
        },

        initNormalJs: function() {

        },

        prepareChildHtml: function (code, name, isParent = false, disabled = '') {
            let imageHtml = '';
            if (isParent) {
                imageHtml = '<img id="ced-child-categories-image" class="ced-child-categories-image" src="'+this.rightImageUrl+'" alt="">';
            }
            return '<li class="menu-item menu-item-child '+ disabled +'" id="'
                + code
                +'" data-is-parent="'
                + isParent + '" data-category-name="'
                + name + '" data-category-id="'
                + code + '"><a href="javascript:void(0)" id="anchor-id-'
                + code + '"><span class="ced-category-name">'
                + name + '</span><div class="horizontal-stack"></div>'
                + imageHtml + '</a></li>';
        },

    });
});
