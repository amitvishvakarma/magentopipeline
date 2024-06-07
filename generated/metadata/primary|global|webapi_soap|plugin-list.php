<?php return array (
  0 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Store\\Model\\Store' => 
    array (
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Store\\Model\\StoreResolver' => 
    array (
      'staging_preview_allowed_stores_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\StoreResolver',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone' => 
    array (
      'staging_datetime_timezone_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\DateTime\\Timezone',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Config\\Model\\Config' => 
    array (
      'configPermissionChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\ConfigData',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\Session' => 
    array (
      'staging_preview_customer_session_id_change_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Customer\\Model\\Session',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'recollect_quote_on_customer_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Model\\Plugin\\RecollectQuoteOnCustomerGroupChange',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository' => 
    array (
      'create_delete_customer_groups_index_tables' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Customer\\Model\\ResourceModel\\GroupRepositoryPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
      'website_restriction_model_account_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebsiteRestriction\\Plugin\\Model\\AccountManagement',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'saveCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\SaveCustomerGroupExcludedWebsite',
      ),
      'deleteCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\DeleteCustomerGroupExcludedWebsite',
      ),
      'getByIdCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetByIdCustomerGroupExcludedWebsite',
      ),
      'getListCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetListCustomerGroupExcludedWebsite',
      ),
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
      'customerGroupEdit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\GroupRepository',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface' => 
    array (
      'saveWishlistDataAndAddReferenceKeyToBackUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\SaveWishlistDataAndAddReferenceKeyToBackUrl',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Indexer\\Model\\Indexer' => 
    array (
      'reindexRow' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Helper\\Indexer',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
      'catalogPermissionsIndexerConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext' => 
    array (
      'defer_cache_cleaning' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\DeferCacheCleaning',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsPageUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository' => 
    array (
      'versions_cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VersionsCmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepositoryPlugin',
      ),
    ),
    'Magento\\Cms\\Ui\\Component\\DataProvider' => 
    array (
      'filterCmsPageAndBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Ui\\Component\\DataProvider\\UpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'catalogPermissionsProductChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product',
      ),
      'availabilityStaging' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Product',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'catalogCategoryDataProviderTrimData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Category\\DataProvider\\TrimData',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
      'catalogPermissionsCachingTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
      'catalogPermissionsIndexerSetStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'outOfStockSorting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CollectionPlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
      'invalidateTargetRuleOnStoreViewChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Store',
      ),
      'catalogPermissionsIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
      'invalidateTargetRuleOnStoreGroupChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\StoreGroup',
      ),
      'catalogPermissionsIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
      'invalidateTargetRuleOnDeleteAttributeSet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer' => 
    array (
      'addRowIdToFlatDefinition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatColumnsDefinition',
      ),
      'addRowIdToIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatIndexes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation' => 
    array (
      'isUsingPriceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection\\ProductLimitation',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'append_gift_card_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Plugin\\QuoteItem',
      ),
      'gift_registry_item_from_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'remove_images_from_gallery_after_removing_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\RemoveImagesFromGalleryAfterRemovingProduct',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
      'product_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\ProductAuthorization',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver' => 
    array (
      'captcha_check_user_login_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\CheckUserLoginBackendObserverPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver' => 
    array (
      'captcha_reset_attempt_for_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ResetAttemptForBackendObserverPlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\AdminTokenService' => 
    array (
      'admin_adobe_ims_admin_token_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminTokenPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
      'accessControl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\AccessChangeQuoteControl',
      ),
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'convertQuoteAddressToCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToCustomerAddress',
      ),
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote' => 
    array (
      'substract_product_from_quotes' => 
      array (
        'sortOrder' => 800,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Quote\\SubstractProductFromQuotes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'update_quote_items_after_giftcard_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\ResourceModel\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
      ),
      'connectbase_product_validate' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'Ced\\ConnectBase\\Model\\Catalog\\Product\\Validate',
      ),
      'create_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CreateSourceItemsPlugin',
      ),
      'create_source_item_configurations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CreateSourceItemConfigurationPlugin',
      ),
      'process_default_source_item_configuration_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessDefaultSourceItemConfigurationPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface' => 
    array (
      'update_quote_items_after_tier_prices_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuote',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'update_url_rewrites_after_websites_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Model\\Product\\UpdateProductWebsiteUrlRewrites',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'catalogPermissionsProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product\\Action',
      ),
      'stagingMassAttributesUpdate' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Model\\Product\\ActionPlugin',
      ),
    ),
    'Magento\\Payment\\Block\\Form\\Container' => 
    array (
      'PaymentMethodProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Payment\\Plugin\\PaymentMethodProcess',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_reorder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_view_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo' => 
    array (
      'refundRewardPoints' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\RewardPointsRefund',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'aroundSetValidationFilter' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
      'beforeSetValidationFilter' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'rewardTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'update_bundle_quote_item_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Bundle\\Plugin\\Quote\\UpdateBundleQuoteItemOptions',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
      'giftCardOpenAmount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\Product\\Attribute\\Backend\\Price',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'disabled' => true,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'disabled' => true,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'sequence_application' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleImportExportStaging\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Configuration' => 
    array (
      'out_of_stock_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventoryStaging\\Model\\Plugin\\Configuration',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\Query\\IdListBuilder' => 
    array (
      'process_archive_entities' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ArchivedEntitiesProcessorPlugin',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
      'targetRuleImportInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Import',
      ),
      'catalogPermissionImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Import',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product' => 
    array (
      'staging-import-products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExportStaging\\Model\\Import\\ProductPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'fulltext_search_indexer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Model\\Plugin\\Category',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
      'addAgreementsToMinicartConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddAgreementsToMinicartConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToCollection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'can_show_price_in_layered_navigation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection',
      ),
      'loadPreview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Fulltext\\Collection',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToFulltextCollection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'convertQuoteAddressToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
      'gift_registry_quote_address_to_order_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Name' => 
    array (
      'formatPrefixSuffixOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\FormatPrefixSuffixOptions',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'updateDataCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\AddCustomAttributesToCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form' => 
    array (
      'set_customer_custom_attribute_for_company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Customer\\Block\\Form\\CustomerCustomAttributePlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerBillingAddressCustomAttributes',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'disable-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\PaymentInformationManagementPlugin',
      ),
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerShippingAddressCustomAttributes',
      ),
      'gift_registry_save_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\SaveAddress',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestShippingAddressCustomAttributes',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'giftCardAmountTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsConverter',
      ),
      'gift_wrapping_total' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\TotalsConverter',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\OrderRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\OrderRepository',
      ),
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'get_order_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderGiftWrapping',
      ),
      'get_order_item_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderItemGiftWrapping',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'rewardCreditmemoUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\OrderRepository',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'GiftCard' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Product\\CartConfiguration\\Plugin\\GiftCard',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'updateStockChangedAuto' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\UpdateStockChangedAuto',
      ),
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
      'after_update_stock_item_for_new_configurable_product' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\UpdateLegacyStockItemForNewConfigurableProduct',
      ),
      'update_source_stock_for_configurable_product' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\UpdateLegacyStockStatusForConfigurableProduct',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'beforeRestDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\RestPlugin',
      ),
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
    ),
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'staging_pagecache_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\PageCache\\Model\\Config',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker' => 
    array (
      'staging_store_baseurl_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\BaseUrlChecker',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction' => 
    array (
      'staging_preview_store_switch_fixing' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Controller\\Store\\SwitchAction',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Helper\\GiftRegistry\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessor' => 
    array (
      'applyCategoryPermissionsOnProductProcessor' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => '\\Magento\\CatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessorPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'gift_registry_update_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\UpdateQuoteItem',
      ),
      'remove_store_credit_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\Model\\Quote\\ResetCustomerBalanceUsage',
      ),
      'updateQuoteStoreId' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Quote\\Plugin\\UpdateQuoteStoreId',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns' => 
    array (
      'changeWeeColumnConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Ui\\Component\\Listing\\Columns',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface' => 
    array (
      'csp_aware_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Csp\\Plugin\\CspAwareControllerPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator' => 
    array (
      'allow_bearer_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Plugin\\BearerTokenValidatorPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'quoteCustomerSegmentUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\TotalsCollector',
      ),
      'quoteGiftCardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsCollector',
      ),
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
      'quoteRewardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\TotalsCollector',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
      'get_invoice_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\InvoiceGiftWrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\CreditmemoRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\CreditmemoRepository',
      ),
      'get_credit_memo_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\CreditMemoGiftWrapping',
      ),
      'deduct_source_item_quantity_on_refund' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\DeductSourceItemQuantityOnRefundPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order' => 
    array (
      'can_creditmemo_with_store_credit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\CreditMemoResolver',
      ),
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
    ),
    'Magento\\SalesSampleData\\Model\\Order\\Processor' => 
    array (
      'customer_balance' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CustomerBalanceSampleData\\Model\\Plugin\\CustomerBalanceRefund',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'customer-sample-data-disable-registration-email-send' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerSampleData\\Magento\\Framework\\Mail\\Transport\\MailPlugin',
      ),
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'targetRuleCategoryInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Category',
      ),
      'categoryChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Category',
      ),
      'catalogStagingCategoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Category',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment' => 
    array (
      'targetRuleCustomerSegmentInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\CustomerSegment',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Elasticsearch\\Model\\Adapter\\BatchDataMapper\\ProductDataMapper' => 
    array (
      'addOutOfStockDataToMapperResult' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\Model\\Adapter\\BatchDataMapper\\ProductDataMapperPlugin',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Elasticsearch\\Elasticsearch5\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => 
    array (
      'addOutOfStockMapper' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\Model\\Adapter\\FieldMapper\\AdditionalFieldMapperPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup' => 
    array (
      'synonymReaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Search\\Model\\SynonymReaderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'catalogPermissionsFilterListRemovePrice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Model\\Layer\\FilterList',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'can_show_price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Framework\\Pricing\\Render\\CanShowPricePlugin',
      ),
      'price_box_staging_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Pricing\\Render\\PriceBox',
      ),
    ),
    'Magento\\Sales\\CustomerData\\LastOrderedItems' => 
    array (
      'check_catalog_permission_after_get_section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Sales\\CustomerData\\CheckCatalogPermissionAfterLastOrderedItemsPlugin',
      ),
    ),
    'Magento\\CatalogGraphQl\\DataProvider\\Product\\SearchCriteriaBuilder' => 
    array (
      'product_search_criteria_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\ProductSearchCriteriaFilter',
      ),
    ),
    'Magento\\Email\\Model\\AbstractTemplate' => 
    array (
      'EmailTemplateLinkUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\GetUrl',
      ),
    ),
    'Magento\\Theme\\Model\\Favicon\\Favicon' => 
    array (
      'enterprise_favicon' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\Favicon',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index' => 
    array (
      'order_edit' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardAccount\\Controller\\Adminhtml\\Order\\Edit\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'isOptionExists' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Api\\Plugin\\ProductCustomOptionRepository',
      ),
      'updateProductCustomOptionsAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Option\\UpdateProductCustomOptionsAttributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface' => 
    array (
      'addRowIdToFlat' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Indexer\\Product\\Flat\\Table\\Builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState' => 
    array (
      'staging_flat_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Indexer\\AbstractFlatState',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
    array (
      'replaceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Controller\\View',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'DateRangeDesignUpdateCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Api\\DateRangeDesignUpdateCategorySavePlugin',
      ),
      'category_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\CategoryAuthorization',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager' => 
    array (
      'catalogStagingVersionManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Staging\\Model\\VersionManager',
      ),
    ),
    'Magento\\GoogleTagManager\\Helper\\Data' => 
    array (
      'tagManagerHelperplugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Plugin\\Helper\\Data',
      ),
    ),
    'Magento\\AsyncOrder\\Model\\OrderManagement' => 
    array (
      'add_reservation_after_async_initial_order_placed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAsyncOrder\\Plugin\\AppendReservationsAfterAsynchronousOrderPlacementPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Dashboard\\Orders\\Grid' => 
    array (
      'orders_grid_plugin' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Block\\Dashboard\\Orders\\Grid',
      ),
    ),
    'Magento\\Sales\\Helper\\Guest' => 
    array (
      'redirect_guest_on_received_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Helper\\GuestPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\OrderIncrementIdChecker' => 
    array (
      'after_increment_id_check' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderIncrementIdCheckerPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\OrderCustomerExtractor' => 
    array (
      'after_extract' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderCustomerExtractorPlugin',
      ),
    ),
    'Magento\\Payment\\Observer\\SalesOrderBeforeSaveObserver' => 
    array (
      'skip_order_payment_verification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\OrderPaymentVerificationPlugin',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config' => 
    array (
      'headIncludes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ThemeSampleData\\Plugin\\View\\Page\\Config',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory' => 
    array (
      'remoteMediaStorageSynchronizationFactory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\File\\Storage\\SynchronizationFactory',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed' => 
    array (
      'remoteIptcEmbed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\IptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader' => 
    array (
      'remoteExifReader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\ExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo' => 
    array (
      'remoteGetFileInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Filesystem\\GetFileInfo',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate' => 
    array (
      'remoteValidatorInfo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\ExistingValidate',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Framework\\Archive\\Zip' => 
    array (
      'remoteZipArchive' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Zip',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products' => 
    array (
      'catalog_search_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Model\\Resolver\\Products',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
      'reindex_after_add_child_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterAddChildBySkuPlugin',
      ),
      'reindex_after_remove_child' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterRemoveChildPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'bundle_product_index' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'fulltextIndexUpdater' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\FulltextIndexUpdater',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'inventory_catalog_update_parent_stock_status_on_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\UpdateCompositeProductStockStatusOnSourceItemsSave',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\DecrementSourceItemQty' => 
    array (
      'synchronize_legacy_catalog_inventory_at_source_item_decrement_quantity' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SynchronizeLegacyStockAfterDecrementStockPlugin',
      ),
      'inventory_catalog_update_parent_stock_status_on_decrement_source_item_qty' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Inventory\\UpdateCompositeProductStockStatusOnDecrementSourceItemQty',
      ),
      'reindex_after_decrement_source_item_quantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterDecrementSourceItemQty',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
      'inventory_catalog_update_parent_stock_status_on_source_items_save' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'adapt_update_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptUpdateStockStatusBySkuPlugin',
      ),
      'inventory_catalog_add_qty_to_legacy_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
      'inventory_catalog_add_qty_to_legacy_stock_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockStateProvider\\CheckQuoteItemQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Source\\Stock' => 
    array (
      'inventory_catalog_add_sort_by_stock_qty_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Source\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\GetSearchableProductsSelect' => 
    array (
      'stock_filters_by_child_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\CatalogSearch\\Model\\Indexer\\ChildProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
    array (
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemProcessorInterface' => 
    array (
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\AsyncOrder\\Model\\Order\\Email\\Sender\\RejectedOrderSender' => 
    array (
      'rollback_reservations_after_order_rejected' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAsyncOrder\\Plugin\\RollbackReservationsAfterOrderRejectedPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\AbstractItem' => 
    array (
      'skip_async_order_check_data_no_deferred_stock_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAsyncOrder\\Plugin\\SkipAsyncOrderCheckDataWithNoDeferredStockUpdatePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
      'convert_blob_to_string' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\ShippingLabelConverter',
      ),
      'adapt_store_pickup_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\ShipmentRepository\\AdaptShipmentPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Sorting\\OutStockBottom' => 
    array (
      'magentoVisualMerchandiserOutStockBottomSortingPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Sorting\\OutStockBottomSortingPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Wishlist\\Model\\Rss\\Wishlist' => 
    array (
      'aroundGetHeader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MultipleWishlist\\Model\\Plugin\\Rss\\Wishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex' => 
    array (
      'multiple_enabled_filter' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\MultipleWishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'remove_subscriber_from_queue_after_unsubscribe' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\RemoveSubscriberFromQueue',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\AbstractMethod' => 
    array (
      'paymentMethodIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\Adapter' => 
    array (
      'paymentGatewayIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection' => 
    array (
      'cleanExpiredQuotesPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PersistentHistory\\Plugin\\CleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price' => 
    array (
      'price-permission-grid-columns-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PricePermissions\\Ui\\Component\\Listing\\Columns\\Price\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator' => 
    array (
      'rest_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\RestValidationPlugin',
      ),
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler' => 
    array (
      'soap_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\SoapValidationPlugin',
      ),
    ),
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data' => 
    array (
      'serverType' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorageCommerce\\Plugin\\ServerType',
      ),
    ),
    'Magento\\CustomerImportExport\\Model\\Import\\Customer' => 
    array (
      'rewardAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\ImportCustomer',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance' => 
    array (
      'customerBalanceSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerBalance',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule' => 
    array (
      'salesRuleAroundSave' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\Plugin\\Rule',
      ),
      'salesRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'salesRuleBeforeBeforeSave' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\Rule',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History' => 
    array (
      'sales-order-history-rma-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Block\\Adminhtml\\Order\\View\\Tab\\HistoryPlugin',
      ),
    ),
    'Magento\\Rma\\Model\\RmaRepository' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Model\\Rma\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory' => 
    array (
      'sales_inventory_creditmemo_item_set_back_to_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\CreditmemoDocumentFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\Banner\\Model\\ResourceModel\\Catalogrule\\Collection' => 
    array (
      'bannerstaging_catalogrule_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerStaging\\Plugin\\CatalogRuleBannerCollection',
      ),
    ),
    'Magento\\Banner\\Block\\Ajax\\Data' => 
    array (
      'bannerstaging_disable_banner_caching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerStaging\\Plugin\\DisableBannerCache',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor' => 
    array (
      'object_constraints_resolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\ForeignKey\\ObjectRelationProcessor\\Plugin',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'catalogRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver' => 
    array (
      'previewCatalogPriceRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\FinalPricePlugin',
      ),
    ),
    'Magento\\Downloadable\\Model\\Link\\UpdateHandler' => 
    array (
      'replaceDownloadableLinksIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Link\\UpdateHandlerPlugin',
      ),
    ),
    'Magento\\Downloadable\\Model\\Sample\\UpdateHandler' => 
    array (
      'replaceDownloadableSamplesIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Sample\\UpdateHandlerPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Retriever' => 
    array (
      'update_bundle_product_properties' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleStaging\\Model\\Product\\RetrieverPlugin',
      ),
    ),
    'Magento\\Banner\\Block\\Widget\\Banner' => 
    array (
      'additional_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\Widget\\Banner',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock' => 
    array (
      'dynamic_block_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\CmsStaticBlockRenderer',
      ),
    ),
    'Magento\\VersionsCms\\Model\\Hierarchy\\Node' => 
    array (
      'versions-cms-reset-page-cache-after-nodes-save' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\VersionsCmsPageCache\\Plugin\\VersionsCms\\Hierarchy\\Node',
      ),
    ),
    'Magento\\Cms\\ViewModel\\Page\\Grid\\UrlBuilder' => 
    array (
      'versions_cms_page_grid_url_builder_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VersionsCmsUrlRewrite\\Plugin\\Cms\\ViewModel\\Page\\Grid\\UrlBuilderPlugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator' => 
    array (
      'connectbase_restrict_sales_rule' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'Ced\\ConnectBase\\Model\\SalesRule\\Validator',
      ),
    ),
    'Magento\\InventorySales\\Model\\IsProductSalableCondition\\BackOrderCondition' => 
    array (
      'connectbase_disable_qty_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\Model\\SalesOrder\\BackOrderCondition',
      ),
    ),
    'Magento\\InventorySales\\Model\\IsProductSalableCondition\\IsAnySourceItemInStockCondition' => 
    array (
      'connectbase_disable_stock_status_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\Model\\SalesOrder\\IsAnySourceItemInStockCondition',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\Handler\\SourceItemsSaveHandler' => 
    array (
      'ced_source_item_save_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\MSI\\SourceItemsSaveHandler',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Country' => 
    array (
      'tiktok_country_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Model\\Source\\Account\\Country',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\EnvironmentType' => 
    array (
      'tiktok_environment_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Model\\Source\\Account\\EnvironmentType',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Policies\\Order\\MarketplaceOrderStatusOptions' => 
    array (
      'tiktok_order_status' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Model\\Source\\Order\\MarketplaceOrderStatusOptions',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Account' => 
    array (
      'tiktok_account_service' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Service\\Account',
      ),
    ),
    'Ced\\ConnectBase\\Service\\OnBoarding' => 
    array (
      'tiktok_onboarding_service' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Service\\OnBoarding',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Order' => 
    array (
      'tiktok_order_service' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Service\\Order',
      ),
    ),
    'Ced\\ConnectBase\\Api\\MarketplaceSyncInterface' => 
    array (
      'ced_products_upload_limit' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\CheckProductsUploadLimit',
      ),
    ),
    'Magento\\Sales\\Model\\Validator' => 
    array (
      'cedShipmentDeliveryOptionValidator' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\ShipmentDeliveryOptionValidator',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'braintreeAddFlagForVirtualProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
    ),
    'Magento\\Framework\\Authorization' => 
    array (
      'customerAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerAuthorization',
      ),
      'guestAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\GuestAuthorization',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface' => 
    array (
      'aclCheck' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Observer\\PageAclPlugin',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection' => 
    array (
      'get_catalog_category_product_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\TableResolver',
      ),
      'get_catalog_product_price_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\TableResolver',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface' => 
    array (
      'reindex_after_save_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterSaveProductLinksPlugin',
      ),
      'reindex_after_delete_by_id_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterDeleteByIdProductLinksPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\GuestCart\\GuestCartManagement' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\GuestCartManagement\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\ResourceModel\\Order\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\InvoiceService' => 
    array (
      'addTransactionCommentAfterCapture' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Service\\Invoice\\AddTransactionCommentAfterCapture',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceRepository' => 
    array (
      'invoiceCustomerBalanceUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'invoiceGiftCardAccountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
    ),
    'Magento\\Captcha\\Helper\\Data' => 
    array (
      'webApiModeEnforcer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\UsageAttempt\\WebApiCaptchaPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceDocumentFactory' => 
    array (
      'set_sales_invoice_api_gift_card' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceApiGiftCard',
      ),
    ),
    'Magento\\Store\\Model\\Validation\\StoreCodeValidator' => 
    array (
      'check_if_parsed_store_code_is_valid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Store\\Model\\Validation\\StoreCodeValidator',
      ),
    ),
    'Magento\\Framework\\Filter\\Template' => 
    array (
      'convertBackgroundImages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\TemplatePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestShippingInformationManagement' => 
    array (
      'persistent_convert_customer_cart_to_guest_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestShippingInformationManagementPlugin',
      ),
    ),
    'Magento\\ReCaptchaValidationApi\\Api\\ValidatorInterface' => 
    array (
      'webapi_recaptcha_validation_override' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\ValidationOverrider',
      ),
    ),
  ),
  1 => 
  array (
    'Magento\\Framework\\Reflection\\ExtensionAttributesProcessorPermissionChecked' => NULL,
    'Magento\\Framework\\Reflection\\DataObjectProcessorPermissionChecked' => NULL,
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Laminas\\Stdlib\\MessageInterface' => NULL,
    'Laminas\\Stdlib\\Message' => NULL,
    'Stringable' => NULL,
    'Laminas\\Http\\AbstractMessage' => NULL,
    'Laminas\\Stdlib\\ResponseInterface' => NULL,
    'Laminas\\Http\\Response' => NULL,
    'Laminas\\Http\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\HttpInterface' => NULL,
    'Magento\\Framework\\App\\ResponseInterface' => NULL,
    'Magento\\Framework\\HTTP\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfoInterface' => NULL,
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'ArrayAccess' => NULL,
    'Magento\\Framework\\DataObject' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolverInterface' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Api\\CustomAttributesDataInterface' => NULL,
    'Magento\\Framework\\Api\\ExtensibleDataInterface' => NULL,
    'Magento\\Framework\\Model\\AbstractExtensibleModel' => NULL,
    'Magento\\Framework\\App\\ScopeInterface' => NULL,
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Framework\\DataObject\\IdentityInterface' => NULL,
    'Magento\\Store\\Api\\Data\\StoreInterface' => NULL,
    'Magento\\Store\\Model\\Store' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Store\\Api\\StoreResolverInterface' => NULL,
    'Magento\\Store\\Model\\StoreResolver' => 
    array (
      'staging_preview_allowed_stores_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\StoreResolver',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolverInterface' => NULL,
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\Config\\ConverterInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\TimezoneInterface' => NULL,
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone' => 
    array (
      'staging_datetime_timezone_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\DateTime\\Timezone',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ValueInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Config\\Model\\Config' => 
    array (
      'configPermissionChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\ConfigData',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\Theme\\Api\\DesignConfigRepositoryInterface' => NULL,
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Api\\Data\\WebsiteInterface' => NULL,
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Api\\Data\\GroupInterface' => NULL,
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceInterface' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceInterface' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'IteratorAggregate' => NULL,
    'Countable' => NULL,
    'Magento\\Framework\\Option\\ArrayInterface' => NULL,
    'Magento\\Framework\\Data\\CollectionDataSourceInterface' => NULL,
    'Traversable' => NULL,
    'Magento\\Framework\\Data\\OptionSourceInterface' => NULL,
    'Magento\\Framework\\View\\Element\\Block\\ArgumentInterface' => NULL,
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\AbstractResource' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\AbstractDb' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\EntityInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Attribute\\DefaultEntityAttributes\\ProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface' => NULL,
    'Magento\\Framework\\Session\\SessionManager' => NULL,
    'Magento\\Customer\\Model\\Session' => 
    array (
      'staging_preview_customer_session_id_change_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Customer\\Model\\Session',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'recollect_quote_on_customer_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Model\\Plugin\\RecollectQuoteOnCustomerGroupChange',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\Framework\\Event\\ObserverInterface' => NULL,
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'saveCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\SaveCustomerGroupExcludedWebsite',
      ),
      'deleteCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\DeleteCustomerGroupExcludedWebsite',
      ),
      'getByIdCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetByIdCustomerGroupExcludedWebsite',
      ),
      'getListCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetListCustomerGroupExcludedWebsite',
      ),
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
      'customerGroupEdit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\GroupRepository',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository' => 
    array (
      'saveCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\SaveCustomerGroupExcludedWebsite',
      ),
      'deleteCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\DeleteCustomerGroupExcludedWebsite',
      ),
      'getByIdCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetByIdCustomerGroupExcludedWebsite',
      ),
      'getListCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetListCustomerGroupExcludedWebsite',
      ),
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
      'customerGroupEdit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\GroupRepository',
      ),
      'create_delete_customer_groups_index_tables' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Customer\\Model\\ResourceModel\\GroupRepositoryPlugin',
      ),
    ),
    'Magento\\Customer\\Api\\AccountManagementInterface' => NULL,
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
      'website_restriction_model_account_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebsiteRestriction\\Plugin\\Model\\AccountManagement',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface' => 
    array (
      'saveWishlistDataAndAddReferenceKeyToBackUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\SaveWishlistDataAndAddReferenceKeyToBackUrl',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\EntityInterface' => NULL,
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEntity' => NULL,
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Framework\\Indexer\\IndexerInterface' => NULL,
    'Magento\\Indexer\\Model\\Indexer' => 
    array (
      'reindexRow' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Helper\\Indexer',
      ),
    ),
    'Magento\\Framework\\Config\\DataInterface' => NULL,
    'Magento\\Framework\\Config\\Data' => NULL,
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
      'catalogPermissionsIndexerConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext' => 
    array (
      'defer_cache_cleaning' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\DeferCacheCleaning',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\StorageInterface' => NULL,
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection' => NULL,
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection' => NULL,
    'Magento\\Framework\\Api\\Search\\SearchResultInterface' => NULL,
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsPageUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection' => NULL,
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface' => 
    array (
      'aclCheck' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Observer\\PageAclPlugin',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository' => 
    array (
      'versions_cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VersionsCmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepositoryPlugin',
      ),
      'aclCheck' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Observer\\PageAclPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProviderInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProvider' => NULL,
    'Magento\\Cms\\Ui\\Component\\DataProvider' => 
    array (
      'filterCmsPageAndBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Ui\\Component\\DataProvider\\UpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Pricing\\SaleableInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductInterface' => NULL,
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'catalogPermissionsProductChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'availabilityStaging' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Product',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
      ),
      'aclCheck' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Observer\\PageAclPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Ui\\DataProvider\\AbstractDataProvider' => NULL,
    'Magento\\Ui\\DataProvider\\ModifierPoolDataProvider' => NULL,
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'catalogCategoryDataProviderTrimData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Category\\DataProvider\\TrimData',
      ),
    ),
    'Magento\\Framework\\View\\Element\\BlockInterface' => NULL,
    'Magento\\Framework\\View\\Element\\AbstractBlock' => NULL,
    'Magento\\Framework\\View\\Element\\Template' => NULL,
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
      'catalogPermissionsCachingTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
      'catalogPermissionsIndexerSetStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'outOfStockSorting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CollectionPlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
      'invalidateTargetRuleOnStoreViewChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Store',
      ),
      'catalogPermissionsIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
      'invalidateTargetRuleOnStoreGroupChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\StoreGroup',
      ),
      'catalogPermissionsIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Eav\\Api\\Data\\AttributeSetInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
      'invalidateTargetRuleOnDeleteAttributeSet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Framework\\App\\Helper\\AbstractHelper' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer' => 
    array (
      'addRowIdToFlatDefinition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatColumnsDefinition',
      ),
      'addRowIdToIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatIndexes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\BackendInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation' => 
    array (
      'isUsingPriceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection\\ProductLimitation',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\AttributeInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadHandler' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'append_gift_card_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Plugin\\QuoteItem',
      ),
      'gift_registry_item_from_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'remove_images_from_gallery_after_removing_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\RemoveImagesFromGalleryAfterRemovingProduct',
      ),
      'product_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\ProductAuthorization',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
    ),
    'Magento\\Framework\\View\\Layout\\ProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpGetActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpHeadActionInterface' => NULL,
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver' => 
    array (
      'captcha_check_user_login_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\CheckUserLoginBackendObserverPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver' => 
    array (
      'captcha_reset_attempt_for_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ResetAttemptForBackendObserverPlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
    ),
    'Magento\\Integration\\Api\\AdminTokenServiceInterface' => NULL,
    'Magento\\Integration\\Model\\AdminTokenService' => 
    array (
      'admin_adobe_ims_admin_token_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminTokenPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
      'accessControl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\AccessChangeQuoteControl',
      ),
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Customer\\Model\\Address\\AddressModelInterface' => NULL,
    'Magento\\Customer\\Model\\Address\\AbstractAddress' => NULL,
    'Magento\\Quote\\Api\\Data\\AddressInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'convertQuoteAddressToCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToCustomerAddress',
      ),
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\AbstractDb' => NULL,
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote' => 
    array (
      'substract_product_from_quotes' => 
      array (
        'sortOrder' => 800,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Quote\\SubstractProductFromQuotes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'update_quote_items_after_giftcard_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\ResourceModel\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
      ),
      'create_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CreateSourceItemsPlugin',
      ),
      'create_source_item_configurations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CreateSourceItemConfigurationPlugin',
      ),
      'process_default_source_item_configuration_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessDefaultSourceItemConfigurationPlugin',
      ),
      'connectbase_product_validate' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'Ced\\ConnectBase\\Model\\Catalog\\Product\\Validate',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface' => 
    array (
      'update_quote_items_after_tier_prices_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuote',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'update_url_rewrites_after_websites_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Model\\Product\\UpdateProductWebsiteUrlRewrites',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'catalogPermissionsProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product\\Action',
      ),
      'stagingMassAttributesUpdate' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Model\\Product\\ActionPlugin',
      ),
    ),
    'Magento\\Payment\\Block\\Form\\Container' => 
    array (
      'PaymentMethodProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Payment\\Plugin\\PaymentMethodProcess',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\OrderInterface' => NULL,
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_reorder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_view_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\EntityAbstract' => NULL,
    'Magento\\Sales\\Model\\Spi\\ShipmentResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Spi\\CreditmemoResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo' => 
    array (
      'refundRewardPoints' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\RewardPointsRefund',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'beforeSetValidationFilter' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
      'aroundSetValidationFilter' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
    ),
    'Magento\\Rule\\Model\\Condition\\ConditionInterface' => NULL,
    'Magento\\Rule\\Model\\Condition\\AbstractCondition' => NULL,
    'Magento\\Rule\\Model\\Condition\\Product\\AbstractProduct' => NULL,
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface' => NULL,
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'rewardTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'update_bundle_quote_item_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Bundle\\Plugin\\Quote\\UpdateBundleQuoteItemOptions',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'giftCardOpenAmount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\Product\\Attribute\\Backend\\Price',
      ),
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\AbstractModel' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType' => NULL,
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'disabled' => true,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'disabled' => true,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'sequence_application' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleImportExportStaging\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeRepositoryInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataServiceInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockConfigurationInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\Configuration' => 
    array (
      'out_of_stock_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventoryStaging\\Model\\Plugin\\Configuration',
      ),
    ),
    'Magento\\Backend\\App\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Credential\\StorageInterface' => NULL,
    'Magento\\User\\Api\\Data\\UserInterface' => NULL,
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\Query\\IdListBuilder' => 
    array (
      'process_archive_entities' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ArchivedEntitiesProcessorPlugin',
      ),
    ),
    'Magento\\ImportExport\\Model\\AbstractModel' => NULL,
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
      'targetRuleImportInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Import',
      ),
      'catalogPermissionImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Import',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product' => 
    array (
      'staging-import-products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExportStaging\\Model\\Import\\ProductPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'fulltext_search_indexer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Model\\Plugin\\Category',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\UrlPersistInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\UrlFinderInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\AbstractCart' => NULL,
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'addAgreementsToMinicartConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddAgreementsToMinicartConfig',
      ),
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\AbstractAction' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Framework\\Config\\Reader\\Filesystem' => NULL,
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\CollectionFilterInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'outOfStockSorting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CollectionPlugin',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToCollection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'outOfStockSorting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CollectionPlugin',
      ),
      'can_show_price_in_layered_navigation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection',
      ),
      'loadPreview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Fulltext\\Collection',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToFulltextCollection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'convertQuoteAddressToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
      'gift_registry_quote_address_to_order_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\AbstractWidget' => NULL,
    'Magento\\Customer\\Block\\Widget\\Name' => 
    array (
      'formatPrefixSuffixOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\FormatPrefixSuffixOptions',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'updateDataCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\AddCustomAttributesToCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form' => 
    array (
      'set_customer_custom_attribute_for_company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Customer\\Block\\Form\\CustomerCustomAttributePlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerBillingAddressCustomAttributes',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'disable-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\PaymentInformationManagementPlugin',
      ),
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerShippingAddressCustomAttributes',
      ),
      'gift_registry_save_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\SaveAddress',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestShippingAddressCustomAttributes',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'giftCardAmountTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsConverter',
      ),
      'gift_wrapping_total' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\TotalsConverter',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\OrderRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\OrderRepository',
      ),
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'get_order_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderGiftWrapping',
      ),
      'get_order_item_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderItemGiftWrapping',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'rewardCreditmemoUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\OrderRepository',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'GiftCard' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Product\\CartConfiguration\\Plugin\\GiftCard',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration\\ConfigurationInterface' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolverInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\CollectorInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\ReaderInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\AbstractTotal' => NULL,
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'updateStockChangedAuto' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\UpdateStockChangedAuto',
      ),
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
      'after_update_stock_item_for_new_configurable_product' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\UpdateLegacyStockItemForNewConfigurableProduct',
      ),
      'update_source_stock_for_configurable_product' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\UpdateLegacyStockStatusForConfigurableProduct',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
      'beforeRestDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\RestPlugin',
      ),
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'staging_pagecache_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\PageCache\\Model\\Config',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker' => 
    array (
      'staging_store_baseurl_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\BaseUrlChecker',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'staging_preview_store_switch_fixing' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Controller\\Store\\SwitchAction',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Helper\\GiftRegistry\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\Catalog\\Controller\\Product\\View\\ViewInterface' => NULL,
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CollectionProcessorInterface' => NULL,
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessor' => 
    array (
      'applyCategoryPermissionsOnProductProcessor' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessorPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\CacheInterface' => NULL,
    'Magento\\Framework\\App\\Cache' => NULL,
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\CartInterface' => NULL,
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'gift_registry_update_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\UpdateQuoteItem',
      ),
      'remove_store_credit_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\Model\\Quote\\ResetCustomerBalanceUsage',
      ),
      'updateQuoteStoreId' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Quote\\Plugin\\UpdateQuoteStoreId',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesInterface' => NULL,
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponentInterface' => NULL,
    'Magento\\Ui\\Component\\AbstractComponent' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns' => 
    array (
      'changeWeeColumnConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Ui\\Component\\Listing\\Columns',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface' => 
    array (
      'csp_aware_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Csp\\Plugin\\CspAwareControllerPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator' => 
    array (
      'allow_bearer_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Plugin\\BearerTokenValidatorPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'quoteCustomerSegmentUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\TotalsCollector',
      ),
      'quoteGiftCardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsCollector',
      ),
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
      'quoteRewardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\TotalsCollector',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
      'get_invoice_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\InvoiceGiftWrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\CreditmemoRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\CreditmemoRepository',
      ),
      'get_credit_memo_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\CreditMemoGiftWrapping',
      ),
      'deduct_source_item_quantity_on_refund' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\DeductSourceItemQuantityOnRefundPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\EntityInterface' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderInterface' => NULL,
    'Magento\\Sales\\Model\\Order' => 
    array (
      'can_creditmemo_with_store_credit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\CreditMemoResolver',
      ),
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
    ),
    'Magento\\SalesSampleData\\Model\\Order\\Processor' => 
    array (
      'customer_balance' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CustomerBalanceSampleData\\Model\\Plugin\\CustomerBalanceRefund',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'customer-sample-data-disable-registration-email-send' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerSampleData\\Magento\\Framework\\Mail\\Transport\\MailPlugin',
      ),
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessorInterface' => NULL,
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Catalog\\Api\\Data\\CategoryInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\CategoryTreeInterface' => NULL,
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'targetRuleCategoryInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Category',
      ),
      'categoryChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Category',
      ),
      'catalogStagingCategoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Category',
      ),
    ),
    'Magento\\Rule\\Model\\AbstractModel' => NULL,
    'Magento\\CustomerSegment\\Model\\Segment' => 
    array (
      'targetRuleCustomerSegmentInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\CustomerSegment',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Elasticsearch\\Model\\Adapter\\BatchDataMapperInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\BatchDataMapper\\ProductDataMapper' => 
    array (
      'addOutOfStockDataToMapperResult' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\Model\\Adapter\\BatchDataMapper\\ProductDataMapperPlugin',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProviderInterface' => NULL,
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapperInterface' => NULL,
    'Magento\\Elasticsearch\\Elasticsearch5\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => 
    array (
      'addOutOfStockMapper' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\Model\\Adapter\\FieldMapper\\AdditionalFieldMapperPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup' => 
    array (
      'synonymReaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Search\\Model\\SynonymReaderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'catalogPermissionsFilterListRemovePrice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Model\\Layer\\FilterList',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBoxRenderInterface' => NULL,
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'can_show_price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Framework\\Pricing\\Render\\CanShowPricePlugin',
      ),
      'price_box_staging_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Pricing\\Render\\PriceBox',
      ),
    ),
    'Magento\\Customer\\CustomerData\\SectionSourceInterface' => NULL,
    'Magento\\Sales\\CustomerData\\LastOrderedItems' => 
    array (
      'check_catalog_permission_after_get_section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Sales\\CustomerData\\CheckCatalogPermissionAfterLastOrderedItemsPlugin',
      ),
    ),
    'Magento\\CatalogGraphQl\\DataProvider\\Product\\SearchCriteriaBuilder' => 
    array (
      'product_search_criteria_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\ProductSearchCriteriaFilter',
      ),
    ),
    'Magento\\Framework\\App\\TemplateTypesInterface' => NULL,
    'Magento\\Email\\Model\\AbstractTemplate' => 
    array (
      'EmailTemplateLinkUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\GetUrl',
      ),
    ),
    'Magento\\Framework\\View\\Page\\FaviconInterface' => NULL,
    'Magento\\Theme\\Model\\Favicon\\Favicon' => 
    array (
      'enterprise_favicon' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\Favicon',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'order_edit' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardAccount\\Controller\\Adminhtml\\Order\\Edit\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'isOptionExists' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Api\\Plugin\\ProductCustomOptionRepository',
      ),
      'updateProductCustomOptionsAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Option\\UpdateProductCustomOptionsAttributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface' => 
    array (
      'addRowIdToFlat' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Indexer\\Product\\Flat\\Table\\Builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState' => 
    array (
      'staging_flat_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Indexer\\AbstractFlatState',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'replaceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Controller\\View',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'DateRangeDesignUpdateCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Api\\DateRangeDesignUpdateCategorySavePlugin',
      ),
      'category_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\CategoryAuthorization',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager' => 
    array (
      'catalogStagingVersionManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Staging\\Model\\VersionManager',
      ),
    ),
    'Magento\\GoogleAnalytics\\Helper\\Data' => NULL,
    'Magento\\GoogleTagManager\\Helper\\Data' => 
    array (
      'tagManagerHelperplugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Plugin\\Helper\\Data',
      ),
    ),
    'Magento\\AsyncOrder\\Model\\OrderManagement' => 
    array (
      'add_reservation_after_async_initial_order_placed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAsyncOrder\\Plugin\\AppendReservationsAfterAsynchronousOrderPlacementPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Template' => NULL,
    'Magento\\Backend\\Block\\Widget' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\ExportInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Extended' => NULL,
    'Magento\\Backend\\Block\\Dashboard\\Grid' => NULL,
    'Magento\\Backend\\Block\\Dashboard\\Orders\\Grid' => 
    array (
      'orders_grid_plugin' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Block\\Dashboard\\Orders\\Grid',
      ),
    ),
    'Magento\\Sales\\Helper\\Guest' => 
    array (
      'redirect_guest_on_received_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Helper\\GuestPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\OrderIncrementIdChecker' => 
    array (
      'after_increment_id_check' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderIncrementIdCheckerPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\OrderCustomerExtractor' => 
    array (
      'after_extract' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderCustomerExtractorPlugin',
      ),
    ),
    'Magento\\Payment\\Observer\\SalesOrderBeforeSaveObserver' => 
    array (
      'skip_order_payment_verification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\OrderPaymentVerificationPlugin',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config' => 
    array (
      'headIncludes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ThemeSampleData\\Plugin\\View\\Page\\Config',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'outOfStockSorting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CollectionPlugin',
      ),
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory' => 
    array (
      'remoteMediaStorageSynchronizationFactory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\File\\Storage\\SynchronizationFactory',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed' => 
    array (
      'remoteIptcEmbed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\IptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader' => 
    array (
      'remoteExifReader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\ExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo' => 
    array (
      'remoteGetFileInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Filesystem\\GetFileInfo',
      ),
    ),
    'Laminas\\Validator\\ValidatorInterface' => NULL,
    'Laminas\\Validator\\ValidatorChain' => NULL,
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate' => 
    array (
      'remoteValidatorInfo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\ExistingValidate',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AdapterInterface' => NULL,
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Framework\\Archive\\AbstractArchive' => NULL,
    'Magento\\Framework\\Archive\\ArchiveInterface' => NULL,
    'Magento\\Framework\\Archive\\Zip' => 
    array (
      'remoteZipArchive' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Zip',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
      'catalog_search_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Model\\Resolver\\Products',
      ),
    ),
    'Magento\\InventoryApi\\Model\\IsProductAssignedToStockInterface' => NULL,
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQtyInterface' => NULL,
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\Type\\AbstractType' => NULL,
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'outOfStockSorting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\CollectionPlugin',
      ),
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
      'reindex_after_add_child_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterAddChildBySkuPlugin',
      ),
      'reindex_after_remove_child' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterRemoveChildPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
      'fulltextIndexUpdater' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\FulltextIndexUpdater',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'bundle_product_index' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'inventory_catalog_update_parent_stock_status_on_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\UpdateCompositeProductStockStatusOnSourceItemsSave',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\DecrementSourceItemQty' => 
    array (
      'reindex_after_decrement_source_item_quantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterDecrementSourceItemQty',
      ),
      'synchronize_legacy_catalog_inventory_at_source_item_decrement_quantity' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SynchronizeLegacyStockAfterDecrementStockPlugin',
      ),
      'inventory_catalog_update_parent_stock_status_on_decrement_source_item_qty' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Inventory\\UpdateCompositeProductStockStatusOnDecrementSourceItemQty',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\PriceModifierInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
        'disabled' => true,
      ),
      'inventory_catalog_update_parent_stock_status_on_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\UpdateCompositeProductStockStatusOnSourceItemsSave',
        'disabled' => true,
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'adapt_update_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptUpdateStockStatusBySkuPlugin',
      ),
      'inventory_catalog_add_qty_to_legacy_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
      'inventory_catalog_add_qty_to_legacy_stock_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockStateProvider\\CheckQuoteItemQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\SourceInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\AbstractSource' => NULL,
    'Magento\\CatalogInventory\\Model\\Source\\Stock' => 
    array (
      'inventory_catalog_add_sort_by_stock_qty_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Source\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockManagementInterface' => NULL,
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RevertProductSaleInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\GetSearchableProductsSelect' => 
    array (
      'stock_filters_by_child_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\CatalogSearch\\Model\\Indexer\\ChildProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\PlaceReservationsForSalesEventInterface' => NULL,
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemProcessorInterface' => 
    array (
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Email\\Sender' => NULL,
    'Magento\\Sales\\Model\\Order\\Email\\NotifySender' => NULL,
    'Magento\\AsyncOrder\\Model\\Order\\Email\\Sender\\RejectedOrderSender' => 
    array (
      'rollback_reservations_after_order_rejected' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAsyncOrder\\Plugin\\RollbackReservationsAfterOrderRejectedPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Configuration\\Item\\ItemInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Item\\AbstractItem' => 
    array (
      'skip_async_order_check_data_no_deferred_stock_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAsyncOrder\\Plugin\\SkipAsyncOrderCheckDataWithNoDeferredStockUpdatePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
      'convert_blob_to_string' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\ShippingLabelConverter',
      ),
      'adapt_store_pickup_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\ShipmentRepository\\AdaptShipmentPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Sorting\\SortAbstract' => NULL,
    'Magento\\VisualMerchandiser\\Model\\Sorting\\SortInterface' => NULL,
    'Magento\\VisualMerchandiser\\Model\\Sorting\\OutStockBottom' => 
    array (
      'magentoVisualMerchandiserOutStockBottomSortingPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Sorting\\OutStockBottomSortingPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\Rss\\DataProviderInterface' => NULL,
    'Magento\\Wishlist\\Model\\Rss\\Wishlist' => 
    array (
      'aroundGetHeader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MultipleWishlist\\Model\\Plugin\\Rss\\Wishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
      'multiple_enabled_filter' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\MultipleWishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\AppInterface' => NULL,
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'remove_subscriber_from_queue_after_unsubscribe' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\RemoveSubscriberFromQueue',
      ),
    ),
    'Magento\\Widget\\Block\\BlockInterface' => NULL,
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Payment\\Model\\MethodInterface' => NULL,
    'Magento\\Quote\\Api\\Data\\PaymentMethodInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\AbstractMethod' => 
    array (
      'paymentMethodIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Payment\\Model\\SaleOperationInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\Adapter' => 
    array (
      'paymentGatewayIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\SpecificationInterface' => NULL,
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ValidatorInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Payment\\Model\\InfoInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment\\Info' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection' => 
    array (
      'cleanExpiredQuotesPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PersistentHistory\\Plugin\\CleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Ui\\Component\\Listing\\Columns\\ColumnInterface' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns\\Column' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price' => 
    array (
      'price-permission-grid-columns-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PricePermissions\\Ui\\Component\\Listing\\Columns\\Price\\Plugin',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\ExtensionInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator' => 
    array (
      'rest_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\RestValidationPlugin',
      ),
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler' => 
    array (
      'soap_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\SoapValidationPlugin',
      ),
    ),
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data' => 
    array (
      'serverType' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorageCommerce\\Plugin\\ServerType',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\AbstractEntity' => NULL,
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEav' => NULL,
    'Magento\\CustomerImportExport\\Model\\Import\\AbstractCustomer' => NULL,
    'Magento\\CustomerImportExport\\Model\\Import\\Customer' => 
    array (
      'rewardAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\ImportCustomer',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance' => 
    array (
      'customerBalanceSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerBalance',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule' => 
    array (
      'salesRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'salesRuleBeforeBeforeSave' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\Rule',
      ),
      'salesRuleAroundSave' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\Plugin\\Rule',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Tab\\TabInterface' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History' => 
    array (
      'sales-order-history-rma-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Block\\Adminhtml\\Order\\View\\Tab\\HistoryPlugin',
      ),
    ),
    'Magento\\Rma\\Api\\RmaRepositoryInterface' => NULL,
    'Magento\\Rma\\Model\\RmaRepository' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Model\\Rma\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory' => 
    array (
      'sales_inventory_creditmemo_item_set_back_to_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\CreditmemoDocumentFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\Banner\\Model\\ResourceModel\\Catalogrule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
      'bannerstaging_catalogrule_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerStaging\\Plugin\\CatalogRuleBannerCollection',
      ),
    ),
    'Magento\\Banner\\Block\\Ajax\\Data' => 
    array (
      'bannerstaging_disable_banner_caching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerStaging\\Plugin\\DisableBannerCache',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor' => 
    array (
      'object_constraints_resolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\ForeignKey\\ObjectRelationProcessor\\Plugin',
      ),
    ),
    'Magento\\CatalogRule\\Api\\Data\\RuleInterface' => NULL,
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'catalogRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver' => 
    array (
      'previewCatalogPriceRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\FinalPricePlugin',
      ),
    ),
    'Magento\\Downloadable\\Model\\Link\\UpdateHandler' => 
    array (
      'replaceDownloadableLinksIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Link\\UpdateHandlerPlugin',
      ),
    ),
    'Magento\\Downloadable\\Model\\Sample\\UpdateHandler' => 
    array (
      'replaceDownloadableSamplesIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Sample\\UpdateHandlerPlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\AttributeInterface' => NULL,
    'Magento\\Eav\\Api\\Data\\AttributeInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataObjectInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\AbstractAttribute' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductAttributeInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\ScopedAttributeInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\EavAttributeInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRendererInterface' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeOptionManagementInterface' => NULL,
    'Magento\\Catalog\\Api\\ProductAttributeOptionUpdateInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Staging\\Model\\Entity\\RetrieverInterface' => NULL,
    'Magento\\CatalogStaging\\Model\\Product\\Retriever' => 
    array (
      'update_bundle_product_properties' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleStaging\\Model\\Product\\RetrieverPlugin',
      ),
    ),
    'Magento\\Banner\\Block\\Widget\\Banner' => 
    array (
      'additional_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\Widget\\Banner',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\RendererInterface' => NULL,
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock' => 
    array (
      'dynamic_block_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\CmsStaticBlockRenderer',
      ),
    ),
    'Magento\\VersionsCms\\Api\\Data\\HierarchyNodeInterface' => NULL,
    'Magento\\VersionsCms\\Model\\Hierarchy\\Node' => 
    array (
      'versions-cms-reset-page-cache-after-nodes-save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VersionsCmsPageCache\\Plugin\\VersionsCms\\Hierarchy\\Node',
      ),
    ),
    'Magento\\Cms\\ViewModel\\Page\\Grid\\UrlBuilder' => 
    array (
      'versions_cms_page_grid_url_builder_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VersionsCmsUrlRewrite\\Plugin\\Cms\\ViewModel\\Page\\Grid\\UrlBuilderPlugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Framework\\Cache\\FrontendInterface' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\Bare' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\TagScope' => NULL,
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator' => 
    array (
      'connectbase_restrict_sales_rule' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'Ced\\ConnectBase\\Model\\SalesRule\\Validator',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\IsProductSalableInterface' => NULL,
    'Magento\\InventorySales\\Model\\IsProductSalableCondition\\BackOrderCondition' => 
    array (
      'connectbase_disable_qty_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\Model\\SalesOrder\\BackOrderCondition',
      ),
    ),
    'Magento\\InventorySales\\Model\\IsProductSalableCondition\\IsAnySourceItemInStockCondition' => 
    array (
      'connectbase_disable_stock_status_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\Model\\SalesOrder\\IsAnySourceItemInStockCondition',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\Handler\\SourceItemsSaveHandler' => 
    array (
      'ced_source_item_save_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\MSI\\SourceItemsSaveHandler',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Country' => 
    array (
      'tiktok_country_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Model\\Source\\Account\\Country',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\EnvironmentType' => 
    array (
      'tiktok_environment_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Model\\Source\\Account\\EnvironmentType',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Policies\\Order\\MarketplaceOrderStatusOptions' => 
    array (
      'tiktok_order_status' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Model\\Source\\Order\\MarketplaceOrderStatusOptions',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Account' => 
    array (
      'tiktok_account_service' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Service\\Account',
      ),
    ),
    'Ced\\ConnectBase\\Service\\OnBoarding' => 
    array (
      'tiktok_onboarding_service' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Service\\OnBoarding',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Order' => 
    array (
      'tiktok_order_service' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Service\\Order',
      ),
    ),
    'Ced\\ConnectBase\\Api\\MarketplaceSyncInterface' => 
    array (
      'ced_products_upload_limit' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\CheckProductsUploadLimit',
      ),
    ),
    'Magento\\Sales\\Model\\Validator' => 
    array (
      'cedShipmentDeliveryOptionValidator' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\ShipmentDeliveryOptionValidator',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\ItemInterface' => NULL,
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'braintreeAddFlagForVirtualProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Framework\\AuthorizationInterface' => NULL,
    'Magento\\Framework\\Authorization' => 
    array (
      'customerAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerAuthorization',
      ),
      'guestAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\GuestAuthorization',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection' => 
    array (
      'get_catalog_category_product_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\TableResolver',
      ),
      'get_catalog_product_price_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\TableResolver',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface' => 
    array (
      'reindex_after_save_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterSaveProductLinksPlugin',
      ),
      'reindex_after_delete_by_id_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterDeleteByIdProductLinksPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartManagementInterface' => NULL,
    'Magento\\Quote\\Model\\GuestCart\\GuestCartManagement' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\GuestCartManagement\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\Spi\\OrderResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\ResourceModel\\Order\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceManagementInterface' => NULL,
    'Magento\\Sales\\Model\\Service\\InvoiceService' => 
    array (
      'addTransactionCommentAfterCapture' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Service\\Invoice\\AddTransactionCommentAfterCapture',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceRepository' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
      'get_invoice_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\InvoiceGiftWrapping',
      ),
      'invoiceCustomerBalanceUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'invoiceGiftCardAccountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
    ),
    'Magento\\Captcha\\Helper\\Data' => 
    array (
      'webApiModeEnforcer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\UsageAttempt\\WebApiCaptchaPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceDocumentFactory' => 
    array (
      'set_sales_invoice_api_gift_card' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceApiGiftCard',
      ),
    ),
    'Magento\\Framework\\Validator\\ValidatorInterface' => NULL,
    'Magento\\Framework\\Validator\\AbstractValidator' => NULL,
    'Magento\\Store\\Model\\Validation\\StoreCodeValidator' => 
    array (
      'check_if_parsed_store_code_is_valid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Store\\Model\\Validation\\StoreCodeValidator',
      ),
    ),
    'Laminas\\Filter\\FilterInterface' => NULL,
    'Magento\\Framework\\Filter\\Template' => 
    array (
      'convertBackgroundImages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\TemplatePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestShippingInformationManagement' => 
    array (
      'process_shipping_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestShippingAddressCustomAttributes',
      ),
      'persistent_convert_customer_cart_to_guest_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestShippingInformationManagementPlugin',
      ),
    ),
    'Magento\\ReCaptchaValidationApi\\Api\\ValidatorInterface' => 
    array (
      'webapi_recaptcha_validation_override' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\ValidationOverrider',
      ),
    ),
  ),
  2 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_commit___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_rollBack___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http_sendResponse___self' => 
    array (
      1 => 
      array (
        0 => 'genericHeaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo_isSecure___self' => 
    array (
      2 => 'storeUrlSecurityInfo',
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver_setRouteParams___self' => 
    array (
      1 => 
      array (
        0 => 'storeUrlRouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\StoreResolver_getCurrentStoreId___self' => 
    array (
      2 => 'staging_preview_allowed_stores_check_bypass',
    ),
    'Magento\\Framework\\Session\\SidResolver_getSid___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_preview_sid_resolving',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_system_config_initial_converter_plugin',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
        1 => 'configHash',
      ),
      4 => 
      array (
        0 => 'append_no_store_cache_header',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
        1 => 'storeCookieValidate',
        2 => 'install',
        3 => 'configHash',
      ),
      4 => 
      array (
        0 => 'append_no_store_cache_header',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone_isScopeDateInInterval___self' => 
    array (
      4 => 
      array (
        0 => 'staging_datetime_timezone_bypass',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Config\\Model\\Config_save___self' => 
    array (
      2 => 'configPermissionChange',
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteFile___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteDirectory___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_delete___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Store\\Model\\Website_save___self' => 
    array (
      2 => 'themeDesignConfigGridIndexerWebsite',
    ),
    'Magento\\Store\\Model\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerWebsite',
      ),
    ),
    'Magento\\Store\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Model\\Session_regenerateId___self' => 
    array (
      2 => 'staging_preview_customer_session_id_change_bypass',
    ),
    'Magento\\Customer\\Model\\Session_destroy___self' => 
    array (
      2 => 'staging_preview_customer_session_id_change_bypass',
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'recollect_quote_on_customer_group_change',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save___self' => 
    array (
      2 => 'transactionWrapper',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_transactionWrapper' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_repository_plugin',
        1 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById___self' => 
    array (
      2 => 'update_newsletter_subscription_on_customer_update',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey_execute___self' => 
    array (
      2 => 'customerFlushFormKey',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'saveCustomerGroupExcludedWebsite',
      ),
      2 => 'invalidatePriceIndexerOnCustomerGroup',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'deleteCustomerGroupExcludedWebsite',
        1 => 'invalidatePriceIndexerOnCustomerGroup',
        2 => 'customerGroupEdit',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'getByIdCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'getListCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save_invalidatePriceIndexerOnCustomerGroup' => 
    array (
      2 => 'customerGroupEdit',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'customerGroupEdit',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'saveCustomerGroupExcludedWebsite',
      ),
      2 => 'invalidatePriceIndexerOnCustomerGroup',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'deleteCustomerGroupExcludedWebsite',
        1 => 'invalidatePriceIndexerOnCustomerGroup',
        2 => 'customerGroupEdit',
        3 => 'create_delete_customer_groups_index_tables',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository_getById___self' => 
    array (
      4 => 
      array (
        0 => 'getByIdCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'getListCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository_save_invalidatePriceIndexerOnCustomerGroup' => 
    array (
      2 => 'customerGroupEdit',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository_delete___self' => 
    array (
      4 => 
      array (
        0 => 'customerGroupEdit',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\GroupRepository_save_customerGroupEdit' => 
    array (
      4 => 
      array (
        0 => 'create_delete_customer_groups_index_tables',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement_initiatePasswordReset___self' => 
    array (
      1 => 
      array (
        0 => 'security_check_customer_password_reset_attempt',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement_createAccount___self' => 
    array (
      1 => 
      array (
        0 => 'website_restriction_model_account_management',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface_newAccount___self' => 
    array (
      1 => 
      array (
        0 => 'saveWishlistDataAndAddReferenceKeyToBackUrl',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_saveAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_deleteAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\Indexer\\Model\\Indexer_isScheduled___self' => 
    array (
      4 => 
      array (
        0 => 'reindexRow',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data_get___self' => 
    array (
      4 => 
      array (
        0 => 'indexerCategoryFlatConfigGet',
        1 => 'indexerProductFlatConfigGet',
        2 => 'catalogPermissionsIndexerConfigGet',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_updateMview___self' => 
    array (
      1 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_reindexAllInvalid___self' => 
    array (
      1 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeFull___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeList___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeRow___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext_registerEntities___self' => 
    array (
      2 => 'defer_cache_cleaning',
    ),
    'Magento\\Framework\\Indexer\\CacheContext_registerTags___self' => 
    array (
      2 => 'defer_cache_cleaning',
    ),
    'Magento\\Backend\\Model\\Auth\\Session_prolong___self' => 
    array (
      2 => 'admin_adobe_ims_backend_auth_session',
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Authorization\\Model\\Role_save___self' => 
    array (
      4 => 
      array (
        0 => 'updateRoleUsersAcl',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsPageUpdate',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsBlockUpdate',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'aclCheck',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository_save___self' => 
    array (
      1 => 
      array (
        0 => 'versions_cms_url_rewrite_plugin',
        1 => 'aclCheck',
      ),
      4 => 
      array (
        0 => 'versions_cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Cms\\Ui\\Component\\DataProvider_getSearchResult___self' => 
    array (
      1 => 
      array (
        0 => 'filterCmsPageAndBlockUpdate',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_load___self' => 
    array (
      4 => 
      array (
        0 => 'catalogInventoryAfterLoad',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'product_identities_extender',
        1 => 'cms',
        2 => 'add_bundle_parent_identities',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsProductChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsProductChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getMediaAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'exclude_swatch_attribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_isAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'availabilityStaging',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_validate_url_plugin',
        1 => 'aclCheck',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor_clean___self' => 
    array (
      4 => 
      array (
        0 => 'catalogLog',
        1 => 'reportLog',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getDefaultMetaData___self' => 
    array (
      4 => 
      array (
        0 => 'set_page_layout_default_value',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'catalogCategoryDataProviderTrimData',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getIdentities___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogPermissionsCachingTopmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface_setStatus___self' => 
    array (
      4 => 
      array (
        0 => 'setStatusForMview',
        1 => 'catalogPermissionsIndexerSetStatusForMview',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_setOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_addOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'categoryProductWebsiteAfterDelete',
        2 => 'delete_website_to_stock_link',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_save___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'assign_website_to_default_stock',
      ),
      2 => 'update_sales_channel_website_code',
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeViewResourceAroundSave',
        1 => 'catalogProductFlatIndexerStore',
        2 => 'categoryStoreAroundSave',
        3 => 'productAttributesStoreViewSave',
        4 => 'catalogsearchFulltextIndexerStoreView',
        5 => 'catalogPermissionsIndexerStoreView',
      ),
      1 => 
      array (
        0 => 'invalidateTargetRuleOnStoreViewChange',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreView',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeGroupResourceAroundSave',
        1 => 'catalogProductFlatIndexerStoreGroup',
        2 => 'categoryStoreGroupAroundSave',
        3 => 'storeGroupResourceAroundBeforeSave',
        4 => 'catalogsearchFulltextIndexerStoreGroup',
        5 => 'catalogPermissionsIndexerStoreGroup',
      ),
      1 => 
      array (
        0 => 'invalidateTargetRuleOnStoreGroupChange',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreGroupAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_save___self' => 
    array (
      1 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
      4 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateTargetRuleOnDeleteAttributeSet',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer_getFlatColumnsDdlDefinition___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToFlatDefinition',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer_getFlatIndexes___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToIndex',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct___self' => 
    array (
      2 => 'downloadable_product_transition',
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct_downloadable_product_transition' => 
    array (
      2 => 'configurable_product_transition',
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
        2 => 'showOutOfStockValueChanged',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedInListing___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedForSortBy___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation_isUsingPriceIndex___self' => 
    array (
      4 => 
      array (
        0 => 'isUsingPriceIndex',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogReadSnapshot',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem_convert___self' => 
    array (
      1 => 
      array (
        0 => 'copy_quote_files_to_order',
      ),
      4 => 
      array (
        0 => 'append_bundle_data_to_order',
        1 => 'append_gift_card_data_to_order',
        2 => 'gift_registry_item_from_quote_item',
        3 => 'gift_message_quote_item_conversion',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initializeFromData___self' => 
    array (
      4 => 
      array (
        0 => 'weeeAttributeOptionsProcess',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_delete___self' => 
    array (
      2 => 'remove_images_from_gallery_after_removing_product',
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'product_authorization',
        1 => 'configurableProductSaveOptions',
      ),
      4 => 
      array (
        0 => 'configurableProductSaveOptions',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge_getDbUpdateString___self' => 
    array (
      2 => 'widget-layout-update-plugin',
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'admin_forgot_password_plugin',
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver_execute___self' => 
    array (
      2 => 'captcha_check_user_login_backend_observer_plugin',
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver_execute___self' => 
    array (
      2 => 'captcha_reset_attempt_for_backend_observer_plugin',
    ),
    'Magento\\Backend\\Model\\Auth_login___self' => 
    array (
      2 => 'disable_admin_login_auth',
    ),
    'Magento\\Backend\\Model\\Auth_logout___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_admin_logout',
      ),
    ),
    'Magento\\Integration\\Model\\AdminTokenService_createAdminAccessToken___self' => 
    array (
      2 => 'admin_adobe_ims_admin_token_plugin',
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_fake_quota_in_preview',
      ),
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_fake_quota_in_preview',
      ),
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
        1 => 'multishipping_quote_repository',
        2 => 'accessControl',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActive___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActiveForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address_exportCustomerAddress___self' => 
    array (
      4 => 
      array (
        0 => 'convertQuoteAddressToCustomerAddress',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'manage_assignment_of_pickup_location_to_quote_address',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address_load___self' => 
    array (
      4 => 
      array (
        0 => 'load_pickup_location_for_quote_address',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote_subtractProductFromQuotes___self' => 
    array (
      2 => 'substract_product_from_quotes',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'update_quote_items_after_product_save',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'clean_quote_items_after_product_delete',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_giftcard_product_save',
        1 => 'process_source_items_after_product_save',
        2 => 'process_reservations_after_product_save',
        3 => 'create_source_items',
        4 => 'create_source_item_configurations',
        5 => 'process_default_source_item_configuration_after_product_save',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items',
        1 => 'delete_reservations',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_validate___self' => 
    array (
      4 => 
      array (
        0 => 'connectbase_product_validate',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_tier_prices_update',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'quoteProductMassChange',
        1 => 'ReindexUpdatedProducts',
        2 => 'catalogsearchFulltextMassAction',
        3 => 'catalogPermissionsProductMassChange',
      ),
      1 => 
      array (
        0 => 'stagingMassAttributesUpdate',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'update_url_rewrites_after_websites_update_plugin',
        1 => 'catalogsearchFulltextMassAction',
        2 => 'catalogPermissionsProductMassChange',
      ),
    ),
    'Magento\\Payment\\Block\\Form\\Container_getMethods___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentMethodProcess',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_creditmemo',
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_invoice',
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_print',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_print_creditmemo',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_print_invoice',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_print_shipment',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_reorder',
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_shipment',
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'redirect_view_order',
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_save___self' => 
    array (
      4 => 
      array (
        0 => 'SaveSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_load___self' => 
    array (
      4 => 
      array (
        0 => 'LoadSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_delete___self' => 
    array (
      4 => 
      array (
        0 => 'DeleteSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo_save___self' => 
    array (
      1 => 
      array (
        0 => 'refundRewardPoints',
      ),
      4 => 
      array (
        0 => 'refundRewardPoints',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address_process___self' => 
    array (
      4 => 
      array (
        0 => 'addressUpdate',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_setValidationFilter___self' => 
    array (
      1 => 
      array (
        0 => 'beforeSetValidationFilter',
      ),
      2 => 'aroundSetValidationFilter',
    ),
    'Magento\\Quote\\Model\\Quote\\Config_getProductAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'append_sales_rule_keys_to_quote',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      1 => 
      array (
        0 => 'apply_rule_on_configurable_children',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_label_plugin',
        1 => 'multishipping_shipping_addresses',
        2 => 'rewardTotal',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface_place___self' => 
    array (
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_place___self' => 
    array (
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_cancel___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_uses_decrement_plugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface_placeOrder___self' => 
    array (
      2 => 'order_cancellation',
    ),
    'Magento\\Quote\\Model\\QuoteManagement_placeOrder___self' => 
    array (
      2 => 'order_cancellation',
    ),
    'Magento\\Quote\\Model\\QuoteManagement_submit___self' => 
    array (
      1 => 
      array (
        0 => 'validate_purchase_order_number',
        1 => 'update_bundle_quote_item_options',
      ),
      2 => 'coupon_uses_increment_plugin',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_ConfigurableProduct::skipValidation' => 
    array (
      1 => 
      array (
        0 => 'giftCardOpenAmount',
      ),
      2 => 'bundle',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Model\\Order\\Item_getQtyToCancel___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item_isProcessingAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type_isSalable___self' => 
    array (
      2 => 'adapt_is_product_salable',
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver_saveOptions___self' => 
    array (
      1 => 
      array (
        0 => 'sequence_application',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver_saveSelections___self' => 
    array (
      1 => 
      array (
        0 => 'sequence_application',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_getCustomAttributesMetadata___self' => 
    array (
      4 => 
      array (
        0 => 'filterCustomAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_save___self' => 
    array (
      1 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_get___self' => 
    array (
      4 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Configuration_isShowOutOfStock___self' => 
    array (
      2 => 'out_of_stock_plugin',
    ),
    'Magento\\Backend\\App\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'inventoryUpdate',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService_cleanMergedJsCss___self' => 
    array (
      4 => 
      array (
        0 => 'cleanMergedJsCss',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_create___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\User\\Model\\User_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
    ),
    'Magento\\User\\Model\\User_delete___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_delete___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\Query\\IdListBuilder_build___self' => 
    array (
      1 => 
      array (
        0 => 'process_archive_entities',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import_importSource___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductFlatIndexerImport',
        1 => 'invalidatePriceIndexerOnImport',
        2 => 'invalidateStockIndexerOnImport',
        3 => 'invalidateEavIndexerOnImport',
        4 => 'invalidateProductCategoryIndexerOnImport',
        5 => 'invalidateCategoryProductIndexerOnImport',
        6 => 'targetRuleImportInvalidate',
        7 => 'catalogPermissionImport',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product_saveProductEntity___self' => 
    array (
      1 => 
      array (
        0 => 'staging-import-products',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'update_url_path_for_different_stores',
      ),
      2 => 'catalogsearchFulltextCategory',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'category_delete_plugin',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_changeParent___self' => 
    array (
      4 => 
      array (
        0 => 'category_move_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete_category_delete_plugin' => 
    array (
      4 => 
      array (
        0 => 'fulltext_search_indexer',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findOneByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findAllByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'addAgreementsToMinicartConfig',
        1 => 'login_captcha',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextCategoryAssignment',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      2 => 'catalogsearchAttributeSearchWeightCache',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_delete___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save_catalogsearchAttributeSearchWeightCache' => 
    array (
      1 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
      4 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'catalogSearchDynamicFields',
        1 => 'productAttributesDynamicFields',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'searchQuery',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider_prepareProductIndex___self' => 
    array (
      1 => 
      array (
        0 => 'stockedProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_setOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_addOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'loadPreview',
        2 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_setOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_addOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getFacetedData___self' => 
    array (
      4 => 
      array (
        0 => 'can_show_price_in_layered_navigation_plugin',
      ),
      1 => 
      array (
        0 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress_convert___self' => 
    array (
      4 => 
      array (
        0 => 'convertQuoteAddressToOrderAddress',
        1 => 'gift_registry_quote_address_to_order_address',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Name_getPrefixOptions___self' => 
    array (
      2 => 'formatPrefixSuffixOptions',
    ),
    'Magento\\Customer\\Block\\Widget\\Name_getSuffixOptions___self' => 
    array (
      2 => 'formatPrefixSuffixOptions',
    ),
    'Magento\\Customer\\Model\\Address_updateData___self' => 
    array (
      1 => 
      array (
        0 => 'updateDataCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form_getAttributeHtml___self' => 
    array (
      1 => 
      array (
        0 => 'set_customer_custom_attribute_for_company',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_customer_attributes',
        1 => 'ProcessPaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
        1 => 'disable-place-order',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipping_custom_customer_attributes',
        1 => 'gift_registry_save_address',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_guest_attributes',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
        1 => 'disable-guest-place-order',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipping_custom_guest_attributes',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder_convert___self' => 
    array (
      1 => 
      array (
        0 => 'add_tax_to_order',
        1 => 'set_pickup_location_to_order_during_address_conversion',
      ),
      4 => 
      array (
        0 => 'add_tax_to_order',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter_process___self' => 
    array (
      4 => 
      array (
        0 => 'add_tax_details',
        1 => 'giftCardAmountTotal',
        2 => 'gift_wrapping_total',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_order_tax',
        1 => 'save_gift_message',
        2 => 'save_pickup_location_for_order',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_gift_message',
        3 => 'get_order_gift_wrapping',
        4 => 'get_order_item_gift_wrapping',
        5 => 'get_pickup_location_for_order',
        6 => 'rewardCreditmemoUpdater',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_gift_message',
        3 => 'get_order_gift_wrapping',
        4 => 'get_order_item_gift_wrapping',
        5 => 'rewardCreditmemoUpdater',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'taxSettingsProvider',
        1 => 'wishlistSettingsDataProvider',
        2 => 'weeeSettingsProvider',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option_getStockItem___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_product',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured___self' => 
    array (
      2 => 'Downloadable',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_Downloadable' => 
    array (
      2 => 'GiftCard',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_GiftCard' => 
    array (
      2 => 'isProductConfigured',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_isProductConfigured' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getSku___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getName___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getProductId___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions___self' => 
    array (
      2 => 'grouped_options',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions_grouped_options' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface_map___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Product\\Type_getOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_output',
        1 => 'grouped_output',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getOptionsMediaGalleryDataJson___self' => 
    array (
      4 => 
      array (
        0 => 'product_video_gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'add_swatch_attributes_to_configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver_isSalable___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item_save___self' => 
    array (
      1 => 
      array (
        0 => 'updateStockChangedAuto',
      ),
      2 => 'update_source_item_at_legacy_stock_item_save',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item_save_update_source_item_at_legacy_stock_item_save' => 
    array (
      4 => 
      array (
        0 => 'after_update_stock_item_for_new_configurable_product',
        1 => 'update_source_stock_for_configurable_product',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
        1 => 'beforeRestDispatch',
        2 => 'webapiContorllerRestAsync',
        3 => 'configHash',
      ),
      4 => 
      array (
        0 => 'append_no_store_cache_header',
      ),
    ),
    'Magento\\PageCache\\Model\\Config_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'staging_pagecache_bypass',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'staging_store_baseurl_check_bypass',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'staging_preview_store_switch_fixing',
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getWishlistOptions___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure_getWishlistOptions___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data_canAddToGiftRegistry___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessor_process___self' => 
    array (
      4 => 
      array (
        0 => 'applyCategoryPermissionsOnProductProcessor',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier_getValue___self' => 
    array (
      4 => 
      array (
        0 => 'core-app-area-design-exception-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_save___self' => 
    array (
      1 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_load___self' => 
    array (
      4 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_updateItem___self' => 
    array (
      4 => 
      array (
        0 => 'gift_registry_update_quote_item',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_removeItem___self' => 
    array (
      4 => 
      array (
        0 => 'remove_store_credit_after_product_delete',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_loadByIdWithoutStore___self' => 
    array (
      4 => 
      array (
        0 => 'updateQuoteStoreId',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_loadByCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'updateQuoteStoreId',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'createMediaGalleryThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_delete___self' => 
    array (
      4 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks_initializeLinks___self' => 
    array (
      1 => 
      array (
        0 => 'GroupedProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_saveProductLinks___self' => 
    array (
      4 => 
      array (
        0 => 'groupedProductLinkProcessor',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_deleteProductLink___self' => 
    array (
      2 => 'groupedProductLinkProcessor',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData_removeData___self' => 
    array (
      2 => 'removeWeeAttributesData',
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns_prepare___self' => 
    array (
      4 => 
      array (
        0 => 'changeWeeColumnConfig',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_backend_config_structure_converter_plugin',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface_match___self' => 
    array (
      4 => 
      array (
        0 => 'csp_aware_plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
        1 => 'updateAnalyticsSubscription',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator_isIntegrationAllowedAsBearerToken___self' => 
    array (
      4 => 
      array (
        0 => 'allow_bearer_token',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector_collect___self' => 
    array (
      1 => 
      array (
        0 => 'quoteCustomerSegmentUpdater',
        1 => 'quoteGiftCardAmountUpdater',
        2 => 'quoteRewardAmountUpdater',
      ),
      4 => 
      array (
        0 => 'in-store-pickup-set-shipping-description',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector_collectQuoteTotals___self' => 
    array (
      1 => 
      array (
        0 => 'quoteGiftCardAmountUpdater',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_credit_memo_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_credit_memo_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'gift_card_account',
      ),
      2 => 'deduct_source_item_quantity_on_refund',
    ),
    'Magento\\Sales\\Model\\Order_canCreditmemo___self' => 
    array (
      4 => 
      array (
        0 => 'can_creditmemo_with_store_credit',
      ),
    ),
    'Magento\\Sales\\Model\\Order_canInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\SalesSampleData\\Model\\Order\\Processor_getCreditmemoData___self' => 
    array (
      2 => 'customer_balance',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage___self' => 
    array (
      2 => 'customer-sample-data-disable-registration-email-send',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage_customer-sample-data-disable-registration-email-send' => 
    array (
      1 => 
      array (
        0 => 'WindowsSmtpConfig',
      ),
      2 => 'EmailDisable',
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isStateActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
        1 => 'checkout_cart_shipping_plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isCityActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCategoryInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCategoryInvalidate',
        1 => 'categoryChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_move___self' => 
    array (
      2 => 'categoryChange',
    ),
    'Magento\\Catalog\\Model\\Category_getCustomDesignDate___self' => 
    array (
      4 => 
      array (
        0 => 'catalogStagingCategoryPlugin',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment_delete___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCustomerSegmentInvalidate',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment_save___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCustomerSegmentInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextProductAssignment',
      ),
    ),
    'Magento\\Elasticsearch\\Model\\Adapter\\BatchDataMapper\\ProductDataMapper_map___self' => 
    array (
      4 => 
      array (
        0 => 'addOutOfStockDataToMapperResult',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunBefore___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunAfter___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Elasticsearch\\Elasticsearch5\\Model\\Adapter\\FieldMapper\\ProductFieldMapper_getAllAttributesTypes___self' => 
    array (
      4 => 
      array (
        0 => 'addOutOfStockMapper',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup_save___self' => 
    array (
      4 => 
      array (
        0 => 'synonymReaderPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup_delete___self' => 
    array (
      4 => 
      array (
        0 => 'synonymReaderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList_getFilters___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsFilterListRemovePrice',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox_getCacheKey___self' => 
    array (
      4 => 
      array (
        0 => 'can_show_price_plugin',
        1 => 'price_box_staging_plugin',
      ),
    ),
    'Magento\\Sales\\CustomerData\\LastOrderedItems_getSectionData___self' => 
    array (
      4 => 
      array (
        0 => 'check_catalog_permission_after_get_section_data',
      ),
    ),
    'Magento\\CatalogGraphQl\\DataProvider\\Product\\SearchCriteriaBuilder_build___self' => 
    array (
      4 => 
      array (
        0 => 'product_search_criteria_filter',
      ),
    ),
    'Magento\\Email\\Model\\AbstractTemplate_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'EmailTemplateLinkUrl',
      ),
    ),
    'Magento\\Theme\\Model\\Favicon\\Favicon_getDefaultFavicon___self' => 
    array (
      4 => 
      array (
        0 => 'enterprise_favicon',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle_getTitle___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_title',
        1 => 'ups_update_delivery_date_title',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup_formatDeliveryDateTime___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_value',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'order_edit',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'isOptionExists',
      ),
      4 => 
      array (
        0 => 'updateProductCustomOptionsAttributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface_getTable___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToFlat',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState_isAvailable___self' => 
    array (
      2 => 'staging_flat_bypass',
    ),
    'Magento\\Catalog\\Controller\\Category\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'replaceIndex',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'DateRangeDesignUpdateCategorySavePlugin',
        1 => 'category_authorization',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager_setCurrentVersionId___self' => 
    array (
      1 => 
      array (
        0 => 'catalogStagingVersionManager',
      ),
    ),
    'Magento\\GoogleTagManager\\Helper\\Data_isTagManagerAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'tagManagerHelperplugin',
      ),
    ),
    'Magento\\AsyncOrder\\Model\\OrderManagement_placeInitialOrder___self' => 
    array (
      4 => 
      array (
        0 => 'add_reservation_after_async_initial_order_placed',
      ),
    ),
    'Magento\\Backend\\Block\\Dashboard\\Orders\\Grid_setCollection___self' => 
    array (
      1 => 
      array (
        0 => 'orders_grid_plugin',
      ),
    ),
    'Magento\\Sales\\Helper\\Guest_loadValidOrder___self' => 
    array (
      2 => 'redirect_guest_on_received_order',
    ),
    'Magento\\Sales\\Model\\OrderIncrementIdChecker_isIncrementIdUsed___self' => 
    array (
      4 => 
      array (
        0 => 'after_increment_id_check',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\OrderCustomerExtractor_extract___self' => 
    array (
      4 => 
      array (
        0 => 'after_extract',
      ),
    ),
    'Magento\\Payment\\Observer\\SalesOrderBeforeSaveObserver_execute___self' => 
    array (
      2 => 'skip_order_payment_verification',
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_prepareForCartAdvanced___self' => 
    array (
      4 => 
      array (
        0 => 'outOfStockFilter',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_getAssociatedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_product_minimum_advertised_price',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config_getIncludes___self' => 
    array (
      4 => 
      array (
        0 => 'headIncludes',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'catalogRulePriceForConfigurableProduct',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_setOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_addOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode_set___self' => 
    array (
      4 => 
      array (
        0 => 'amqp_maintenance_mode',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory_create___self' => 
    array (
      2 => 'remoteMediaStorageSynchronizationFactory',
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed_get___self' => 
    array (
      1 => 
      array (
        0 => 'remoteIptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader_get___self' => 
    array (
      1 => 
      array (
        0 => 'remoteExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'remoteGetFileInfo',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate_isValid___self' => 
    array (
      1 => 
      array (
        0 => 'remoteValidatorInfo',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_open___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_validateUploadFile___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_watermark___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_save___self' => 
    array (
      2 => 'remoteImageFile',
    ),
    'Magento\\Framework\\Archive\\Zip_unpack___self' => 
    array (
      2 => 'remoteZipArchive',
    ),
    'Magento\\Framework\\Archive\\Zip_pack___self' => 
    array (
      2 => 'remoteZipArchive',
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
        1 => 'catalog_search_permissions',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock_execute___self' => 
    array (
      2 => 'cache_product_stock_assignment_check',
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty_execute___self' => 
    array (
      2 => 'inventory_advanced_checkout_is_in_stock',
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle_prepareAttributesWithDefaultValueForSave___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipment_type_plugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute___self' => 
    array (
      2 => 'disable_bundle_type',
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute_disable_bundle_type' => 
    array (
      2 => 'disable_grouped_type',
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_setOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addOrder___self' => 
    array (
      1 => 
      array (
        0 => 'outOfStockSorting',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addQuantityFilter___self' => 
    array (
      2 => 'adapt_add_quantity_filter',
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_addChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_add_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_add_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_saveChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_save_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_save_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_removeChild___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_source_items_after_remove_bundle_selection',
        1 => 'reindex_after_remove_child',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_addChildByProductSku___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_add_child_by_sku',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_assignStatusToProduct___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_assign_stock_status_to_bundle_product',
        1 => 'adapt_assign_status_to_product',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_in_stock_filter_to_collection',
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addStockStatusToProducts___self' => 
    array (
      2 => 'adapt_add_stock_status_to_products',
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_full',
        1 => 'configurable_product_full_index',
        2 => 'grouped_product_index_full',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_list',
        1 => 'update_product_prices_plugin',
        2 => 'configurable_product_index_list',
        3 => 'grouped_product_index_list',
      ),
      2 => 'invalidate_products_cache',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList___self' => 
    array (
      2 => 'priceIndexUpdater',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList_priceIndexUpdater' => 
    array (
      4 => 
      array (
        0 => 'grouped_product_index',
      ),
      2 => 'invalidate_products_cache',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList_invalidate_products_cache' => 
    array (
      2 => 'fulltextIndexUpdater',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeRow___self' => 
    array (
      2 => 'fulltextIndexUpdater',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList_fulltextIndexUpdater' => 
    array (
      4 => 
      array (
        0 => 'configurable_product_index',
      ),
      2 => 'bundle_product_index',
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_deleteById___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_default_stock_deleting',
        1 => 'prevent_deleting_assigned_to_sales_channels_stock',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_sales_channels_links',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_data_to_legacy_catalog_inventory_at_source_items_save',
        1 => 'inventory_catalog_update_parent_stock_status_on_source_items_save',
        2 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\DecrementSourceItemQty_execute___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_decrement_source_item_quantity',
        1 => 'synchronize_legacy_catalog_inventory_at_source_item_decrement_quantity',
        2 => 'inventory_catalog_update_parent_stock_status_on_decrement_source_item_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter_modifyPrice___self' => 
    array (
      2 => 'change_select_for_price_modifier',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_to_zero_legacy_catalog_inventory_at_source_items_delete',
      ),
      2 => 'reindex_after_source_items_delete',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute_reindex_after_source_items_delete' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_notification_source_item_delete',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface_correctItemsQty___self' => 
    array (
      2 => 'update_source_item_at_legacy_qty_counter',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockDataToCollection___self' => 
    array (
      2 => 'adapt_add_stock_data_to_collection',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockStatusToSelect___self' => 
    array (
      2 => 'adapt_add_stock_status_to_select',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addIsInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_is_in_stock_filter_to_collection',
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface_execute___self' => 
    array (
      2 => 'adapt_stock_resolver_to_admin_website',
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_delete_default_stock_links',
      ),
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_delete',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization_execute___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatus___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatusBySku___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status_by_sku',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatus___self' => 
    array (
      2 => 'adapt_get_product_stock_status',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatusBySku___self' => 
    array (
      2 => 'adapt_get_product_stock_status_by_sku',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_updateStockItemBySku___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_update_product_stock_status_by_sku',
      ),
      1 => 
      array (
        0 => 'inventory_catalog_add_qty_to_legacy_stock',
        1 => 'inventory_catalog_add_qty_to_legacy_stock_configurable',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'allow_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface_getMinQty___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_min_qty_to_backorders',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface_verifyStock___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_verify_stock_to_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface_checkQuoteItemQty___self' => 
    array (
      2 => 'check_quote_item_qty',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface_execute___self' => 
    array (
      2 => 'inventory_catalog_stock_status_filter',
    ),
    'Magento\\CatalogInventory\\Model\\Source\\Stock_addValueSortToCollection___self' => 
    array (
      2 => 'inventory_catalog_add_sort_by_stock_qty_to_collection',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_checkQuoteItemQty___self' => 
    array (
      2 => 'check_quote_item_qty',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_suggestQty___self' => 
    array (
      2 => 'suggest_qty',
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface_execute___self' => 
    array (
      2 => 'prevent_append_reservation_on_not_manage_items_in_stock',
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_backItemQty___self' => 
    array (
      2 => 'process_back_item_qty',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_revertProductsSale___self' => 
    array (
      2 => 'process_revert_products_sale',
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor_execute___self' => 
    array (
      2 => 'process_return_product_qty_on_credit_memo',
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'load_stock_item_is_in_stock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\GetSearchableProductsSelect_execute___self' => 
    array (
      4 => 
      array (
        0 => 'stock_filters_by_child_products',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface_execute___self' => 
    array (
      2 => 'get_configurable_option_sku_from_order',
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface_process___self' => 
    array (
      2 => 'adapt_parent_stock_processor',
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_beforeSave___self' => 
    array (
      2 => 'allow_negative_min_qty_in_config',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save___self' => 
    array (
      2 => 'invalidate_after_enabling_or_disabling_source',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save_invalidate_after_enabling_or_disabling_source' => 
    array (
      1 => 
      array (
        0 => 'save_in_store_pickup_links',
        1 => 'updateSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_save',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent_execute___self' => 
    array (
      4 => 
      array (
        0 => 'schedule_reservation_place',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link_saveProductRelations___self' => 
    array (
      4 => 
      array (
        0 => 'process_source_items_after_save_links',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemProcessorInterface_process___self' => 
    array (
      4 => 
      array (
        0 => 'importStockItemDataForSourceItem',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_loadWithFilter___self' => 
    array (
      2 => 'add_pickup_location_to_quote_address',
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'shipping_address_management_replace_shipping_address',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processIntegrationConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processConfigBasedIntegrations___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_products_cache',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface_execute___self' => 
    array (
      2 => 'inventory_low_quantity_bulk_transfer',
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_assign',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_unassign',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'update_legacy_stock_item_configuration_at_source_item_configuration_save',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple_execute___self' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items_configuration',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability_isSalable___self' => 
    array (
      2 => 'product_alert_adapt_salability',
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock_validate___self' => 
    array (
      2 => 'magentoRequisitionListStockPlugin',
    ),
    'Magento\\AsyncOrder\\Model\\Order\\Email\\Sender\\RejectedOrderSender_send___self' => 
    array (
      1 => 
      array (
        0 => 'rollback_reservations_after_order_rejected',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\AbstractItem_checkData___self' => 
    array (
      2 => 'skip_async_order_check_data_no_deferred_stock_update',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_isMsgVisible___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_getStockQtyLeft___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory_create___self' => 
    array (
      1 => 
      array (
        0 => 'update_custom_table_map',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'assign_source_code_to_shipment',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'GetListShipmentRepository',
        1 => 'convert_blob_to_string',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'convert_blob_to_string',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_store_pickup_shipment',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock_joinStock___self' => 
    array (
      2 => 'magentoVisualMerchandiserResolverQuantityAndStockPlugin',
    ),
    'Magento\\VisualMerchandiser\\Model\\Sorting\\OutStockBottom_sort___self' => 
    array (
      2 => 'magentoVisualMerchandiserOutStockBottomSortingPlugin',
    ),
    'Magento\\Framework\\Api\\DataObjectHelper_populateWithArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_allow_remote_shopping_assistance_to_customer',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'process_shopping_cart',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_path',
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute_remove_media_content_after_asset_is_removed_by_path' => 
    array (
      4 => 
      array (
        0 => 'delete_renditions_on_assets_delete',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_directory_path',
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume_execute___self' => 
    array (
      4 => 
      array (
        0 => 'synchronize_media_content',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor_removeImage___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent_execute___self' => 
    array (
      1 => 
      array (
        0 => 'set_rendition_path',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'addMetadataToAssetCreatedFromFile',
      ),
    ),
    'Magento\\Wishlist\\Model\\Rss\\Wishlist_getHeader___self' => 
    array (
      2 => 'aroundGetHeader',
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'multiple_enabled_filter',
      ),
    ),
    'Magento\\Framework\\App\\Http_catchException___self' => 
    array (
      1 => 
      array (
        0 => 'framework-http-newrelic',
      ),
    ),
    'Magento\\Framework\\App\\State_setAreaCode___self' => 
    array (
      4 => 
      array (
        0 => 'framework-state-newrelic',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command_run___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-commands',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_start___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_stop___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_unsubscribe___self' => 
    array (
      4 => 
      array (
        0 => 'remove_subscriber_from_queue_after_unsubscribe',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_createCollection___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\AbstractMethod_isAvailable___self' => 
    array (
      2 => 'paymentMethodIsAvailable',
    ),
    'Magento\\Payment\\Model\\Method\\Adapter_isAvailable___self' => 
    array (
      2 => 'paymentGatewayIsAvailable',
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite_isApplicable___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_specification',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice_validate___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker_check___self' => 
    array (
      4 => 
      array (
        0 => 'transparent_session_checker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_accept___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_transparent',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor_process___self' => 
    array (
      1 => 
      array (
        0 => 'persistent_remember_me_checkbox_processor',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer_getSectionData___self' => 
    array (
      2 => 'section_data',
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection_getExpiredQuotes___self' => 
    array (
      4 => 
      array (
        0 => 'cleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price_prepare___self' => 
    array (
      2 => 'price-permission-grid-columns-plugin',
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
      4 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler_execute___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_entry_reader',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_duplicate___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_createBatchBaseSelect___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator_validate___self' => 
    array (
      2 => 'rest_webapi_recaptcha_validation',
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler___call___self' => 
    array (
      1 => 
      array (
        0 => 'soap_webapi_recaptcha_validation',
      ),
    ),
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data_getServerTypesOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'serverType',
      ),
    ),
    'Magento\\CustomerImportExport\\Model\\Import\\Customer_getValidColumnNames___self' => 
    array (
      4 => 
      array (
        0 => 'rewardAttributes',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance_save___self' => 
    array (
      1 => 
      array (
        0 => 'customerBalanceSave',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_getFromDate___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleDateResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_getToDate___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleDateResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleBeforeBeforeSave',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_save___self' => 
    array (
      2 => 'salesRuleAroundSave',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History_getFullHistory___self' => 
    array (
      4 => 
      array (
        0 => 'sales-order-history-rma-plugin',
      ),
    ),
    'Magento\\Rma\\Model\\RmaRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory_createFromOrder___self' => 
    array (
      4 => 
      array (
        0 => 'sales_inventory_creditmemo_item_set_back_to_stock',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory_createFromInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'sales_inventory_creditmemo_item_set_back_to_stock',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderValidationAfter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceValidationAfter',
      ),
    ),
    'Magento\\Banner\\Model\\ResourceModel\\Catalogrule\\Collection_addWebsiteCustomerGroupFilter___self' => 
    array (
      2 => 'bannerstaging_catalogrule_preview',
    ),
    'Magento\\Banner\\Block\\Ajax\\Data_getCacheTtl___self' => 
    array (
      4 => 
      array (
        0 => 'bannerstaging_disable_banner_caching',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor_delete___self' => 
    array (
      1 => 
      array (
        0 => 'object_constraints_resolver',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor_validateDataIntegrity___self' => 
    array (
      1 => 
      array (
        0 => 'object_constraints_resolver',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getFromDate___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRuleDateResolver',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getToDate___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRuleDateResolver',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver_execute___self' => 
    array (
      2 => 'previewCatalogPriceRule',
    ),
    'Magento\\Downloadable\\Model\\Link\\UpdateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'replaceDownloadableLinksIds',
      ),
    ),
    'Magento\\Downloadable\\Model\\Sample\\UpdateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'replaceDownloadableSamplesIds',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_usesSource___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer_render___self' => 
    array (
      2 => 'swatches_layered_renderer',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_add___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_update___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Retriever_getEntity___self' => 
    array (
      4 => 
      array (
        0 => 'update_bundle_product_properties',
      ),
    ),
    'Magento\\Banner\\Block\\Widget\\Banner_getWidgetAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'additional_attributes',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock_render___self' => 
    array (
      4 => 
      array (
        0 => 'dynamic_block_filter',
      ),
    ),
    'Magento\\VersionsCms\\Model\\Hierarchy\\Node_collectTree___self' => 
    array (
      4 => 
      array (
        0 => 'versions-cms-reset-page-cache-after-nodes-save',
      ),
    ),
    'Magento\\Cms\\ViewModel\\Page\\Grid\\UrlBuilder_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'versions_cms_page_grid_url_builder_plugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata_getServicesConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiServiceMetadataAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_load___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_save___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_remove___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback_execute___self' => 
    array (
      2 => 'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback',
    ),
    'Magento\\Webapi\\Model\\Config\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurity',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator_process___self' => 
    array (
      1 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator_load___self' => 
    array (
      1 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
      4 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator_commitCallback___self' => 
    array (
      4 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator_save___self' => 
    array (
      1 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
      4 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator_delete___self' => 
    array (
      1 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
      4 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
    ),
    'Magento\\SalesRule\\Model\\Validator_deleteCommit___self' => 
    array (
      4 => 
      array (
        0 => 'connectbase_restrict_sales_rule',
      ),
    ),
    'Magento\\InventorySales\\Model\\IsProductSalableCondition\\BackOrderCondition_execute___self' => 
    array (
      4 => 
      array (
        0 => 'connectbase_disable_qty_check',
      ),
    ),
    'Magento\\InventorySales\\Model\\IsProductSalableCondition\\IsAnySourceItemInStockCondition_execute___self' => 
    array (
      4 => 
      array (
        0 => 'connectbase_disable_stock_status_check',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\Handler\\SourceItemsSaveHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'ced_source_item_save_handler',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Country_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_country_options',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\EnvironmentType_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_environment_options',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Policies\\Order\\MarketplaceOrderStatusOptions_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_order_status',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Policies\\Order\\MarketplaceOrderStatusOptions_getDeliveredStatus___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_order_status',
      ),
    ),
    'Ced\\ConnectBase\\Model\\Source\\Policies\\Order\\MarketplaceOrderStatusOptions_getCancelledStatus___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_order_status',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Account_prepareMandatoryPayload___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_account_service',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Account_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_account_service',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Account_preparePayload___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_account_service',
      ),
    ),
    'Ced\\ConnectBase\\Service\\OnBoarding_collectOnboardData___self' => 
    array (
      1 => 
      array (
        0 => 'tiktok_onboarding_service',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Order_prepareAcceptOrRejectData___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_order_service',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Order_getShipOrderRequestData___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_order_service',
      ),
    ),
    'Ced\\ConnectBase\\Service\\Order_checkIfFulfilledByMarketplace___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_order_service',
      ),
    ),
    'Ced\\ConnectBase\\Api\\MarketplaceSyncInterface_uploadProductsOnMarketplace___self' => 
    array (
      2 => 'ced_products_upload_limit',
    ),
    'Magento\\Sales\\Model\\Validator_validate___self' => 
    array (
      1 => 
      array (
        0 => 'cedShipmentDeliveryOptionValidator',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification_getExcludes___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeExcludeFromMinification',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem_getItemData___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeAddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Framework\\Authorization_isAllowed___self' => 
    array (
      2 => 'customerAuthorization',
    ),
    'Magento\\Framework\\Authorization_isAllowed_customerAuthorization' => 
    array (
      2 => 'guestAuthorization',
    ),
    'Magento\\Framework\\App\\ResourceConnection_getTableName___self' => 
    array (
      4 => 
      array (
        0 => 'get_catalog_category_product_index_table_name',
        1 => 'get_catalog_product_price_index_table_name',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_save_product_links',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_delete_by_id_product_links',
      ),
    ),
    'Magento\\Quote\\Model\\GuestCart\\GuestCartManagement_assignCustomer___self' => 
    array (
      1 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order_load___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\InvoiceService_setCapture___self' => 
    array (
      4 => 
      array (
        0 => 'addTransactionCommentAfterCapture',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
        3 => 'invoiceCustomerBalanceUpdater',
        4 => 'invoiceGiftCardAccountUpdater',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
        3 => 'invoiceCustomerBalanceUpdater',
        4 => 'invoiceGiftCardAccountUpdater',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceRepository_save___self' => 
    array (
      1 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'invoiceCustomerBalanceUpdater',
        3 => 'invoiceGiftCardAccountUpdater',
      ),
    ),
    'Magento\\Captcha\\Helper\\Data_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webApiModeEnforcer',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceDocumentFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'set_sales_invoice_api_gift_card',
      ),
    ),
    'Magento\\Store\\Model\\Validation\\StoreCodeValidator_isValid___self' => 
    array (
      4 => 
      array (
        0 => 'check_if_parsed_store_code_is_valid',
      ),
    ),
    'Magento\\Framework\\Filter\\Template_filter___self' => 
    array (
      4 => 
      array (
        0 => 'convertBackgroundImages',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_guest_attributes',
        1 => 'inject_guest_address_for_nologin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
        1 => 'disable-guest-place-order',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestShippingInformationManagement_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipping_custom_guest_attributes',
      ),
      4 => 
      array (
        0 => 'persistent_convert_customer_cart_to_guest_cart',
      ),
    ),
    'Magento\\ReCaptchaValidationApi\\Api\\ValidatorInterface_isValid___self' => 
    array (
      2 => 'webapi_recaptcha_validation_override',
    ),
  ),
);