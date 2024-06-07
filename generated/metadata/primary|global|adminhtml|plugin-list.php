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
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Config',
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
      'reindex_customer_grid_after_website_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerGridIndexAfterWebsiteDelete',
      ),
      'deleteCustomerGroupExcludedWebsiteAfterWebsiteDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\Website\\DeleteCustomerGroupExcludedWebsite',
      ),
      'reindex_after_delete_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Website',
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
      'security_admin_sessions_prolong' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AuthSession',
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
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'catalog_permissions_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
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
      'store_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\View',
      ),
      'update_cms_url_rewrites_after_store_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\Store\\View',
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
      'group_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\Group',
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
      'Price' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Model\\Entity\\Attribute\\Backend\\Plugin\\AbstractBackend',
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
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Bundle',
      ),
      'product_save_rewrites_history_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper',
      ),
      'update_multiselect_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Catalog\\UpdateMultiselectAttributes',
      ),
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Configurable',
      ),
      'updateConfigurations' => 
      array (
        'sortOrder' => 60,
        'disabled' => true,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\UpdateConfigurations',
      ),
      'cleanConfigurationTmpImages' => 
      array (
        'sortOrder' => 999,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Product\\Initialization\\CleanConfigurationTmpImages',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Downloadable\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Downloadable',
      ),
      'GiftCardInitialize' => 
      array (
        'sortOrder' => 110,
        'instance' => 'Magento\\GiftCard\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\GiftCard',
      ),
      'admin_gws_gallery_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\GalleryUpdater',
      ),
      'PricePermissions' => 
      array (
        'sortOrder' => 80,
        'instance' => 'Magento\\PricePermissions\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\PricePermissions',
      ),
      'updateConfigurationsStaging' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\ConfigurableProductStaging\\Plugin\\Catalog\\UpdateConfigurationsStaging',
      ),
      'Rma' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Rma\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\HelperPlugin',
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
      'security_admin_sessions_login' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\Auth',
      ),
      'pagebuilder_clear_editor_config_cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageBuilder\\Plugin\\ClearEditorConfigCache',
      ),
    ),
    'Magento\\Integration\\Model\\AdminTokenService' => 
    array (
      'admin_adobe_ims_admin_token_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminTokenPlugin',
      ),
      'revoke_admin_access_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RevokeAdminAccessTokenPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
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
      'apply_catalog_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
      ),
      'reload_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'cleanups_wishlist_item_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Model\\ResourceModel\\Product',
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
      'invalidate_pagecache_after_update_product_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Action\\UpdateAttributesFlushCache',
      ),
      'price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Model\\Product\\Action',
      ),
      'admingws_product_action_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\ProductAction',
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
      'aroundVerifyIdentity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ReplaceVerifyIdentityWithImsPlugin',
      ),
      'user_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\UserSavePlugin',
      ),
      'change_perform_identity_check_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\PerformIdentityCheckMessagePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
      'reward_notification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerPlugin',
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
      'reindex_after_import' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\ImportExport',
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
      'catalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category',
      ),
      'admingws_category_resource_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryResource',
      ),
      'admin_gws_check_category_can_be_saved' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Model\\ResourceModel\\Category\\CheckCategoryCanBeSaved',
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
      'invalidate_pagecache_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Attribute\\Save',
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
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
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
      'creditmemoAfterSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Creditmemo',
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
      'admin-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\AdminAddCommentOnOrderPlacementPlugin',
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
      'apply_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Category',
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
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Plugin\\Collection',
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
      'add_notice_for_unassigned_sales_channels' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryApi\\StockRepository\\AddNoticeForUnassignedSalesChannels',
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
      'salesRuleConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
      ),
      'salesRuleActionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ActionFieldsetIdResolver',
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
      'addVariationsToProductRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\ConfigurableProductHandler',
      ),
      'configurableChildValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\Validation',
      ),
      'catalogConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
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
      'change_product_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Attribute',
      ),
      'invalidate_caches_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Catalog\\CacheInvalidate',
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
    'Magento\\ConfigurableProduct\\Block\\DataProviders\\PermissionsData' => 
    array (
      'admin_gws_configurable_product_permissions_data_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsConfigurableProduct\\Plugin\\PermissionsDataChecker',
      ),
    ),
    'Magento\\Staging\\Model\\Preview\\UrlBuilder' => 
    array (
      'admin_gws_staging_preview_url_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsStaging\\Plugin\\PreviewUrlBuilder',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype' => 
    array (
      'process_page_builder_input_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Adminhtml\\System\\Config\\Source\\InputtypePlugin',
      ),
      'append_compatible_input_types' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\System\\Config\\Source\\InputtypePlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider' => 
    array (
      'orderGridExportFilterColumnPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Export\\OrderGridExportFilterColumn',
      ),
      'setAllocatedSourceData' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\SetAllocatedSourceValueInExportCsv',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login' => 
    array (
      'security_login_form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\LoginController',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules' => 
    array (
      'user_expiration_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\UserValidationRules',
      ),
      'remove_user_validation_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemoveUserValidationRulesPlugin',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main' => 
    array (
      'user_expiration_user_form_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AdminUserForm',
      ),
      'admin_adobe_ims_reauth_button_user_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Copier' => 
    array (
      'copy_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\Catalog\\CopySourceItemsPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full' => 
    array (
      'invalidate_pagecache_after_full_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Indexer\\Category\\Product\\Execute',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\ProductDataProvider' => 
    array (
      'add_show_total_records_to_catalog_product_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Ui\\DataProvider\\Product\\ProductDataProvider',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface' => 
    array (
      'remove_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\AttributeSetRepository\\RemoveProducts',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search' => 
    array (
      'processOutOfStockProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductSearch',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'add_adobe_ims_layout_handle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AddAdobeImsLayoutHandlePlugin',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig' => 
    array (
      'disable_password_reset' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisablePasswordResetPlugin',
      ),
      'disable_forced_password_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableForcedPasswordChangePlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\Security\\Model\\AdminSessionsManager' => 
    array (
      'keep_other_user_sessions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\OtherUserSessionPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form' => 
    array (
      'admin_adobe_ims_reauth_button_account_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\System\\Account\\Edit\\AddReAuthVerification',
      ),
    ),
    'Magento\\User\\Block\\Role\\Tab\\Info' => 
    array (
      'admin_adobe_ims_reauth_button_role_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Role\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\AdobeIms\\Block\\Adminhtml\\SignIn' => 
    array (
      'authentication_component_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\SignInPlugin',
      ),
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info' => 
    array (
      'admin_adobe_ims_reauth_button_integration_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\Integration\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Customer\\Model\\Group' => 
    array (
      'reindex_after_delete_customer_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\CustomerGroup',
      ),
    ),
    'Magento\\Quote\\Observer\\SubmitObserver' => 
    array (
      'beforeSendOrderNotification' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Magento\\Quote\\Plugin\\SendOrderNotification',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult' => 
    array (
      'orderGridCollectionFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\ResourceModel\\Order\\OrderGridCollectionFilter',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\Bundle\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'configurable' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'GroupedProduct' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
    ),
    'Magento\\Framework\\Data\\Form\\Element\\Fieldset' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Framework\\Data\\Form\\Element\\FieldsetPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Invoices' => 
    array (
      'invoices_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\InvoicesSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Creditmemos' => 
    array (
      'creditmemos_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\CreditmemosSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Shipments' => 
    array (
      'shipments_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ShipmentsSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Observer\\GridSyncInsertObserver' => 
    array (
      'archived_entity_grid_sync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\GridSyncInsertObserverPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front' => 
    array (
      'search_weigh' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Block\\Plugin\\FrontTabPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Attribute' => 
    array (
      'validateCustomerAddressAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ValidateCustomerAddressAttribute',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'bundle_msrp_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Msrp\\Plugin\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Builder\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Validator\\Plugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'update_configurable_product_total_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Order\\Invoice\\UpdateConfigurableProductTotalQty',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit' => 
    array (
      'versionscms_cms_page_inline_edit_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\VersionsCms\\Controller\\Adminhtml\\Cms\\Page\\InlineEdit\\Plugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer' => 
    array (
      'sales_adminorder_quote_initializer_plugin' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Model\\Sales\\AdminOrder\\Product\\Quote\\Plugin\\Initializer',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher' => 
    array (
      'entrprise_store_switcher_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\StoreSwitcher',
      ),
      'paypal_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Block\\Adminhtml\\Store\\SwitcherPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit' => 
    array (
      'adminhtmlCategoryEditPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\EditPlugin',
      ),
      'admin_gws_category_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CategoryStoreSwitcherUpdater',
      ),
      'admin_gws_category_store_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CategoryStoreUpdater',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add' => 
    array (
      'adminhtmlCategoryAddPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\AddPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save' => 
    array (
      'adminhtmlCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\SavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CategoryLink' => 
    array (
      'adminhtmlRankCategoryProductPositionsPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\RankCategoryProductPositions',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\DataProvider' => 
    array (
      'catalogStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Identifier\\DataProvider' => 
    array (
      'catalogStagingIdentifierDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider' => 
    array (
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\Identifier\\DataProvider' => 
    array (
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\AggregateCount' => 
    array (
      'aggregateCountForCatalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category\\AggregateCount',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav' => 
    array (
      'pagebuilder_product_form_eav' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\EavPlugin',
      ),
      'PricePermissions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Ui\\DataProvider\\Product\\Form\\Modifier\\Plugin\\Eav',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Edit\\Action\\Attribute' => 
    array (
      'catalogHelperProductAttributePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider' => 
    array (
      'google_optimizer_product_new_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Product\\Category\\DataProvider',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer' => 
    array (
      'productRuleReindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Indexer\\ProductRuleReindex',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor' => 
    array (
      'flushAssociatedProductCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProductStaging\\Model\\Product\\Operation\\Update\\FlushAssociatedProductCache',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetIsQtySalableInterface' => 
    array (
      'inventory_bundle_product_is_any_child_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventorySales\\Model\\IsProductSalableCondition\\GetIsQtySalableForBundleProduct',
      ),
      'inventory_configurable_product_is_any_child_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\InventorySales\\Model\\IsProductSalableCondition\\GetIsQtySalableForConfigurableProduct',
      ),
    ),
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider' => 
    array (
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Messages' => 
    array (
      'process_error_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\Block\\Order\\Create\\Messages\\ProcessMessagesPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Model\\Stock\\StockSourceLinkProcessor' => 
    array (
      'prevent_process_for_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\Stock\\StockSaveProcessor\\PreventProcessDefaultStockLinksPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider' => 
    array (
      'prevent_disabling_default_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventDisablingDefaultSourcePlugin',
      ),
      'convert_is_pickup_location_active_boolean_to_string' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\Ui\\DataProvider\\ConvertBooleanToStringPlugin',
      ),
      'prevent_using_default_source_as_pickup_location_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventUsingDefaultSourceAsPickupLocationPlugin',
      ),
    ),
    'Magento\\Ui\\Component\\Bookmark' => 
    array (
      'initialize_quantity_per_source_bookmark_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\Ui\\Component\\InitializeQuantityPerSourceBookmarkConfiguration',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider' => 
    array (
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View' => 
    array (
      'shipment_tracking' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Controller\\Order\\Shipment\\View\\ShipmentTrackingPlugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View' => 
    array (
      'shipment_tracking_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Block\\Adminhtml\\View\\ShipmentTrackingButtonPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\StockDataProvider' => 
    array (
      'sales_channel_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryAdminUi\\Ui\\StockDataProvider\\SalesChannels',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Items\\Renderer\\DefaultRenderer' => 
    array (
      'can_return_item_to_stock_child_manage_stock_is_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\Sales\\Block\\Items\\Renderer\\DefaultRenderer\\ChildManageStockIsOn',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSalableQtyInterface' => 
    array (
      'inventory_sales_admin_ui_adjust_product_qty_in_stock_for_edit_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventorySalesApi\\Api\\AdjustProductQtyInStockForEditOrder',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\Form' => 
    array (
      'disallow_create_shipment_in_multi_source_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Order\\Invoice\\Create\\DisallowCreateShipmentPlugin',
      ),
      'create_shipment_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\ProcessCreateShipment',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create' => 
    array (
      'back_button_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Shipment\\BackButtonUrlOnNewShipmentPagePlugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface' => 
    array (
      'login_as_customer_button_toolbar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses' => 
    array (
      'login_as_customer_customer_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\DataProviderWithDefaultAddressesPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'login_as_customer_customer_data_validate_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerDataValidatePlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => 
    array (
      'login_as_customer_button_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\LoginAsCustomerButtonDataProviderPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\ConfirmationPopup\\Options' => 
    array (
      'login_as_customer_store_options_restricted_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerWebsiteRestriction\\Plugin\\StoreOptionsRestrictedPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader' => 
    array (
      'save_category_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalogIntegration\\Plugin\\SaveBaseCategoryImageInformation',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl' => 
    array (
      'new_media_gallery_open_dialog_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\NewMediaGalleryOpenDialogUrl',
      ),
    ),
    'Magento\\Framework\\File\\Uploader' => 
    array (
      'save_asset_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\SaveImageInformation',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content' => 
    array (
      'add_search_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddSearchButton',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId' => 
    array (
      'add_adobe_stock_image_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockImageDetailsPlugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options' => 
    array (
      'add_adobe_stock_source_option_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockSourceOptionPlugin',
      ),
    ),
    'Magento\\Banner\\Model\\Banner\\Validator' => 
    array (
      'prepare-save-data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerCustomerSegment\\Plugin\\Model\\Banner\\ValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\DesignLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation' => 
    array (
      'process_page_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Attribute\\PresentationPlugin',
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
    'Magento\\Backend\\Block\\Widget\\ContainerInterface' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Store\\Api\\WebsiteRepositoryInterface' => 
    array (
      'admin_gws_website_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\WebsiteRepository',
      ),
    ),
    'Magento\\CatalogEvent\\Block\\Adminhtml\\Catalog\\Category\\Edit\\AddEventButton' => 
    array (
      'admin_gws_category_event_buttons_limitation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryEventButton',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole' => 
    array (
      'admin_gws_save_role' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\SaveRole',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Product\\MassAction' => 
    array (
      'admin_gws_massaction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Ui\\Component\\Plugin\\Catalog\\Product\\MassAction',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\AddAttribute' => 
    array (
      'admin_gws_add_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\AdminGws\\Block\\Adminhtml\\Plugin\\Catalog\\Product\\Edit\\Button\\AddAttribute',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\ProductActions' => 
    array (
      'admin_gws_product_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductLinkUpdater',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit' => 
    array (
      'admin_gws_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductStoreSwitcherUpdater',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Categories' => 
    array (
      'admin_gws_product_categories_role_restrictions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\CategoriesRoleRestrictions',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface' => 
    array (
      'store_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\StoreFilter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit' => 
    array (
      'admin_gws_store_switcher_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\StoreSwitcherUpdater',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute' => 
    array (
      'admin_gws_attributes_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection' => 
    array (
      'quote_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'catalog_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'customer_segment_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection' => 
    array (
      'reminder_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection' => 
    array (
      'user_role_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\UserRoleCollectionSizeLimiter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection' => 
    array (
      'rating_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Review\\RatingCollectionSizeLimiter',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser' => 
    array (
      'admin_gws_category_products_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid' => 
    array (
      'admin_gws_category_products_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid',
      ),
    ),
    'Magento\\VisualMerchandiser\\ViewModel\\MerchandiserViewModel' => 
    array (
      'admin_gws_category_products_merchandiser' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\ViewModel\\MerchandiserViewModel',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection' => 
    array (
      'admin_user_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\UserCollection',
      ),
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating' => 
    array (
      'rating_remove_add_button' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\AdminGws\\Plugin\\Review\\RatingRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Main' => 
    array (
      'product_attribute_set_remove_edit_buttons_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveEditButtonsPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Toolbar\\Main' => 
    array (
      'product_attribute_set_remove_add_button_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit' => 
    array (
      'customer_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit' => 
    array (
      'customer_address_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAddressAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit' => 
    array (
      'returns_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Rma\\ReturnsAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\Authorization' => 
    array (
      'isCategoryAuthorizedForDifferentStoreUserRole' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\IsCategoryAuthorizedForDifferentStoreUserRole',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export\\Export' => 
    array (
      'import_export_export_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ImportExport\\Controller\\Adminhtml\\Export\\ExportPlugin',
      ),
    ),
    'Magento\\Store\\Model\\StoreSwitcher\\ManageStoreCookie' => 
    array (
      'store_switcher_manage_store_cookie_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\Store\\StoreSwitcher\\ManageStoreCookie',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure' => 
    array (
      'paypal_system_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\StructurePlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field' => 
    array (
      'paypal_system_configuration_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\Structure\\Element\\FieldPlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config' => 
    array (
      'Config' => 
      array (
        'sortOrder' => 82,
        'instance' => 'Magento\\PricePermissions\\Block\\Adminhtml\\ConfigurableProduct\\Product\\Edit\\Tab\\Variations\\Plugin\\Config',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
      'disable_apply_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Edit\\Plugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Bulk' => 
    array (
      'adapt_configurable_wizard_bulk_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\BulkStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Summary' => 
    array (
      'adapt_configurable_wizard_summary_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\SummaryStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config\\Matrix' => 
    array (
      'add_quantity_per_source_to_variations_matrix' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\AddQuantityPerSourceToVariationsMatrix',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index' => 
    array (
      'adminAuthentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rss\\App\\Action\\Plugin\\BackendAuthentication',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\FormDataProvider' => 
    array (
      'salesRuleStagingFormDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'salesRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Info' => 
    array (
      'hide-edit-link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Order\\View\\ShippingAddress\\HideEditLink',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save' => 
    array (
      'set-order-pickup-location' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Controller\\AdminOrder\\Create\\SetPickupLocationFromPost',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View' => 
    array (
      'process_ship_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\ProcessShipButtonPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Create' => 
    array (
      'adapt_set_shipping_address_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Model\\AdminOrder\\Create\\AdaptSetShippingAddressPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address' => 
    array (
      'process_shipping_address_form_fro_store_pickup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address\\AdaptFormPlugin',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\DataProvider' => 
    array (
      'catalogRuleStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'catalogRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save' => 
    array (
      'save_swatches_frontend_input' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Controller\\Adminhtml\\Product\\Attribute\\Plugin\\Save',
      ),
    ),
    'Magento\\TwoFactorAuth\\Observer\\ControllerActionPredispatch' => 
    array (
      'verify_admin_adobe_ims_is_enable' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\AdminAdobeImsTwoFactorAuth\\Plugin\\VerifyAdminAdobeImsIsEnable',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized' => 
    array (
      'afterToArray' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized\\Plugin',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider' => 
    array (
      'afterGetMeta' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Ui\\Component\\AdminNotification\\Plugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging' => 
    array (
      'usps' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Usps\\Block\\Adminhtml\\Order\\Packaging\\Plugin\\DisplayGirth',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider' => 
    array (
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Block\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\Identifier\\DataProvider' => 
    array (
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Block\\Identifier\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save' => 
    array (
      'cmsstaging_page_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Save\\Plugin',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save' => 
    array (
      'cmsstaging_page_update_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save\\Plugin',
      ),
    ),
    'Ced\\ConnectBase\\Controller\\Adminhtml\\Core\\Base' => 
    array (
      'add_support_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\AddSupportButtons',
      ),
    ),
    'Ced\\ConnectBase\\Ui\\Component\\Listing\\MassAction\\Order\\Options' => 
    array (
      'tiktok_cancel_reason' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Ui\\Component\\Listing\\MassAction\\Order\\Options',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Config' => 
    array (
      'tiktok_modify_menu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\Menu\\Magento\\Backend\\Model\\Menu\\Config',
      ),
    ),
    'Ced\\ConnectBase\\Ui\\Component\\Listing\\Columns\\Order\\MarketplaceOrderId' => 
    array (
      'tiktok_marketplace_order_id' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Ui\\Component\\Listing\\Columns\\Order\\MarketplaceOrderId',
      ),
    ),
    'Ced\\ConnectBase\\Block\\Adminhtml\\Listing\\Template\\CategoryTree' => 
    array (
      'ced_category_notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\Listing\\Template\\CategoryTree\\UpdateCategoryNoticeHtml',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection' => 
    array (
      'braintreeSalesOrderGrid' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\PayPal\\Braintree\\Plugin\\SalesOrderGridPlugin',
      ),
    ),
  ),
  1 => 
  array (
    'CustomerGirdFilterPool' => NULL,
    'CustomerGridCollectionReporting' => NULL,
    'Magento\\Cms\\Ui\\Component\\Form\\Field\\PageLayout' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\ProductCollectionFactory' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Pool' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\Modifier\\Pool' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Form\\Field\\Category\\PageLayout' => NULL,
    'Magento\\SalesArchive\\Ui\\CreditmemoDataProvider' => NULL,
    'Magento\\SalesArchive\\Ui\\InvoiceDataProvider' => NULL,
    'Magento\\SalesArchive\\Ui\\ShipmentDataProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\Session\\Storage' => NULL,
    'Magento\\CatalogSearch\\Model\\Session' => NULL,
    'Magento\\Catalog\\Ui\\BaseAllowedProductTypes' => NULL,
    'Magento\\Wishlist\\Model\\Session\\Storage' => NULL,
    'Magento\\Wishlist\\Model\\Session' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\SortingProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\PaginationProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\JoinProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\Config\\Model\\Config\\Source\\Email\\Template\\Header' => NULL,
    'Magento\\Config\\Model\\Config\\Source\\Email\\Template\\Footer' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Pool' => NULL,
    'Magento\\GiftMessageStaging\\Ui\\DataProvider\\Product\\Modifier\\GiftMessage' => NULL,
    'Magento\\CatalogStaging\\Block\\Adminhtml\\Update\\Upcoming' => NULL,
    'catalogStagingUpcomingGridActions' => NULL,
    'catalogStagingUpdateMetadataProvider' => NULL,
    'stagingCatalogUpdateCancelButton' => NULL,
    'stagingCatalogUpdatePreviewButton' => NULL,
    'stagingCatalogProductUpdateRemoveButton' => NULL,
    'catalogStagingBlockRemoveUpdateCancelButton' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\System' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\CustomOptions' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Related' => NULL,
    'stagingCatalogCategoryUpdateMetadataProvider' => NULL,
    'stagingCatalogCategoryUpdateCancelButton' => NULL,
    'stagingCatalogCategoryRemoveUpdateCancelButton' => NULL,
    'stagingCatalogCategoryUpdatePreviewButton' => NULL,
    'stagingCatalogCategoryUpcomingGridActions' => NULL,
    'stagingCatalogCategoryUpdateRemoveButton' => NULL,
    'Magento\\CatalogStaging\\Block\\Adminhtml\\Category\\Update\\Upcoming' => NULL,
    'stagingCatalogCategoryUpcomingResult' => NULL,
    'stagingCatalogCategoryUpdateSelectResult' => NULL,
    'catalogProductAdvancedPricingModifier' => NULL,
    'categoryUpdateSaveSaveAction' => NULL,
    'categoryUpdateSaveAssignAction' => NULL,
    'categoryUpdateDeleteSaveAction' => NULL,
    'categoryUpdateDeleteAssignAction' => NULL,
    'categoryUpdateDeleteRemoveAction' => NULL,
    'categoryUpdateSave' => NULL,
    'categoryUpdateDelete' => NULL,
    'productUpdateSaveSaveAction' => NULL,
    'productUpdateSaveAssignAction' => NULL,
    'productUpdateDeleteSaveAction' => NULL,
    'productUpdateDeleteAssignAction' => NULL,
    'productUpdateDeleteRemoveAction' => NULL,
    'productUpdateSave' => NULL,
    'productUpdateDelete' => NULL,
    'Magento\\GiftWrappingStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\GiftWrapping' => NULL,
    'Magento\\GoogleOptimizer\\Block\\Adminhtml\\Form\\CmsPage' => NULL,
    'Magento\\GoogleOptimizerStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\GoogleOptimizer' => NULL,
    'Magento\\GroupedProductStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Grouped' => NULL,
    'Magento\\InventoryAdminUi\\Ui\\Component\\Control\\Source\\SaveSplitButton' => NULL,
    'Magento\\InventoryAdminUi\\Ui\\Component\\Control\\Stock\\SaveSplitButton' => NULL,
    'Magento\\InventoryAdminUi\\Ui\\Component\\Control\\Stock\\DeleteButton' => NULL,
    'Magento\\MediaGalleryCatalogUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Product' => NULL,
    'Magento\\MediaGalleryCatalogUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Category' => NULL,
    'Magento\\MediaGalleryCmsUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Page' => NULL,
    'Magento\\MediaGalleryCmsUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Block' => NULL,
    'Magento\\MsrpStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Msrp' => NULL,
    'Magento\\PageBuilder\\Block\\Adminhtml\\ContentType\\Edit\\ModalCloseButton' => NULL,
    'AlignmentSource' => NULL,
    'Magento\\PageBuilder\\Model\\Source\\VideoAlignmentSource' => NULL,
    'TabAlignmentSource' => NULL,
    'Magento\\PageBuilder\\Model\\Source\\VerticalAlignment' => NULL,
    'AppearanceSourceBanner' => NULL,
    'AppearanceSourceBlock' => NULL,
    'AppearanceSourceButtons' => NULL,
    'AppearanceSourceButtonItem' => NULL,
    'AppearanceSourceColumn' => NULL,
    'AppearanceSourceColumnGroup' => NULL,
    'AppearanceSourceDivider' => NULL,
    'AppearanceSourceHeading' => NULL,
    'AppearanceSourceHtml' => NULL,
    'AppearanceSourceImage' => NULL,
    'AppearanceSourceMap' => NULL,
    'AppearanceSourceProducts' => NULL,
    'AppearanceSourceRow' => NULL,
    'AppearanceSourceSlide' => NULL,
    'AppearanceSourceSlider' => NULL,
    'AppearanceSourceTabItem' => NULL,
    'AppearanceSourceTabs' => NULL,
    'AppearanceSourceText' => NULL,
    'AppearanceSourceVideo' => NULL,
    'BackgroundSizeSource' => NULL,
    'BackgroundTypeSource' => NULL,
    'CarouselModeSource' => NULL,
    'Magento\\PageBuilder\\Model\\Config\\ContentType\\AdditionalData\\Provider\\Wysiwyg\\BannerConfig' => NULL,
    'ImageMaxFileSizeDesktop' => NULL,
    'Magento\\PageBuilder\\Component\\Form\\Element\\CategoryWysiwyg' => NULL,
    'Magento\\Paypal\\Model\\Session\\Storage' => NULL,
    'Magento\\Paypal\\Model\\Session' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession\\Storage' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession' => NULL,
    'Magento\\ConfigurableProductStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\ConfigurablePanel' => NULL,
    'Magento\\ConfigurableProductStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Composite' => NULL,
    'QuickCheckoutConfigGuard' => NULL,
    'Magento\\RmaStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Rma' => NULL,
    'salesRuleStagingUpdateMetadataProvider' => NULL,
    'Magento\\SalesRuleStaging\\Block\\Adminhtml\\Update\\Upcoming' => NULL,
    'salesRuleStagingBlockRemoveUpdateCancelButton' => NULL,
    'stagingSalesRuleUpdateCancelButton' => NULL,
    'stagingSalesRuleUpdatePreviewButton' => NULL,
    'stagingSalesRuleUpdateRemoveButton' => NULL,
    'salesRuleStagingUpcomingGridActions' => NULL,
    'stagingUpdateSalesRuleGridActions' => NULL,
    'salesRuleStagingUpdateGridActionProvider' => NULL,
    'salesRuleUpdateGridEditAction' => NULL,
    'salesRuleUpdateGridDeleteAction' => NULL,
    'ruleHydrator' => NULL,
    'ruleUpdateSaveSaveAction' => NULL,
    'ruleUpdateSaveAssignAction' => NULL,
    'ruleUpdateDeleteSaveAction' => NULL,
    'ruleUpdateDeleteAssignAction' => NULL,
    'ruleUpdateDeleteRemoveAction' => NULL,
    'ruleUpdateSave' => NULL,
    'ruleUpdateDelete' => NULL,
    'Magento\\CatalogRuleStaging\\Block\\Adminhtml\\Update\\Upcoming' => NULL,
    'catalogRuleStagingBlockRemoveUpdateCancelButton' => NULL,
    'stagingCatalogRuleUpdateCancelButton' => NULL,
    'stagingCatalogRuleUpdatePreviewButton' => NULL,
    'stagingCatalogRuleUpdateRemoveButton' => NULL,
    'catalogRuleStagingUpdateMetadataProvider' => NULL,
    'catalogRuleStagingUpcomingGridActions' => NULL,
    'stagingUpdateCatalogRuleGridActions' => NULL,
    'catalogRuleStagingUpdateGridActionProvider' => NULL,
    'catalogRuleUpdateGridEditAction' => NULL,
    'catalogRuleUpdateGridDeleteAction' => NULL,
    'Magento\\Swatches\\Block\\Adminhtml\\Product\\Attribute\\Edit\\FormFactory' => NULL,
    'stagingCmsPageUpdateMetadataProvider' => NULL,
    'stagingCmsBlockUpdateMetadataProvider' => NULL,
    'stagingCmsPageUpcomingGridActions' => NULL,
    'stagingCmsBlockUpcomingGridActions' => NULL,
    'stagingCmsPageDashboardGridActions' => NULL,
    'cmsPageStagingUpdateGridActionProvider' => NULL,
    'cmsPageUpdateGridEditAction' => NULL,
    'cmsPageUpdateGridDeleteAction' => NULL,
    'stagingCmsBlockDashboardGridActions' => NULL,
    'cmsBlockStagingUpdateGridActionProvider' => NULL,
    'cmsBlockEditUpdateGridAction' => NULL,
    'cmsBlockUpdateGridDeleteAction' => NULL,
    'stagingCmsPageUpdateCancelButton' => NULL,
    'stagingCmsPageRemoveUpdateCancelButton' => NULL,
    'stagingCmsPageUpdatePreviewButton' => NULL,
    'stagingCmsPageUpdateRemoveButton' => NULL,
    'stagingCmsBlockUpdateCancelButton' => NULL,
    'stagingCmsBlockRemoveUpdateCancelButton' => NULL,
    'stagingCmsBlockUpdatePreviewButton' => NULL,
    'stagingCmsBlockUpdateRemoveButton' => NULL,
    'Magento\\CmsStaging\\Block\\Adminhtml\\Page\\Update\\Upcoming' => NULL,
    'Magento\\CmsStaging\\Block\\Adminhtml\\Block\\Update\\Upcoming' => NULL,
    'cmsPageHydrator' => NULL,
    'cmsPageUpdateSaveSaveAction' => NULL,
    'cmsPageUpdateSaveAssignAction' => NULL,
    'cmsPageUpdateDeleteSaveAction' => NULL,
    'cmsPageUpdateDeleteAssignAction' => NULL,
    'cmsPageUpdateDeleteRemoveAction' => NULL,
    'cmsPageUpdateSave' => NULL,
    'cmsPageUpdateDelete' => NULL,
    'cmsBlockHydrator' => NULL,
    'cmsBlockUpdateSaveSaveAction' => NULL,
    'cmsBlockUpdateSaveAssignAction' => NULL,
    'cmsBlockUpdateDeleteSaveAction' => NULL,
    'cmsBlockUpdateDeleteAssignAction' => NULL,
    'cmsBlockUpdateDeleteRemoveAction' => NULL,
    'cmsBlockUpdateSave' => NULL,
    'cmsBlockUpdateDelete' => NULL,
    'Magento\\CatalogUrlRewriteStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\ProductUrlRewrite' => NULL,
    'Magento\\WeeeStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Weee' => NULL,
    'Ced\\ConnectBase\\Ui\\DataProvider\\InventoryPolicy\\Form\\Modifier\\Pool' => NULL,
    'Ced\\ConnectBase\\Ui\\DataProvider\\OrderPolicy\\Form\\Modifier\\Pool' => NULL,
    'Ced\\ConnectBase\\Ui\\DataProvider\\Account\\Form\\Modifier\\Pool' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderInterface' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderComposite' => NULL,
    'BraintreeAuthorizeRequest' => NULL,
    'BraintreeVaultAuthorizeRequest' => NULL,
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
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
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
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
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
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Config',
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
      'reindex_customer_grid_after_website_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerGridIndexAfterWebsiteDelete',
      ),
      'deleteCustomerGroupExcludedWebsiteAfterWebsiteDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\Website\\DeleteCustomerGroupExcludedWebsite',
      ),
      'reindex_after_delete_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Website',
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
      'security_admin_sessions_prolong' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AuthSession',
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
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResultInterface' => NULL,
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'setStagingFlagCmsPageUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'setStagingFlagCmsBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface' => NULL,
    'Magento\\Cms\\Model\\PageRepository' => 
    array (
      'versions_cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VersionsCmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepositoryPlugin',
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
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'catalog_permissions_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
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
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
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
      'store_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\View',
      ),
      'update_cms_url_rewrites_after_store_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\Store\\View',
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
      'group_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\Group',
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
      'Price' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Model\\Entity\\Attribute\\Backend\\Plugin\\AbstractBackend',
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
      'product_save_rewrites_history_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper',
      ),
      'update_multiselect_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Catalog\\UpdateMultiselectAttributes',
      ),
      'admin_gws_gallery_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\GalleryUpdater',
      ),
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Configurable',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Bundle',
      ),
      'updateConfigurations' => 
      array (
        'sortOrder' => 60,
        'disabled' => true,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\UpdateConfigurations',
      ),
      'updateConfigurationsStaging' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\ConfigurableProductStaging\\Plugin\\Catalog\\UpdateConfigurationsStaging',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Downloadable\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Downloadable',
      ),
      'Rma' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Rma\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\HelperPlugin',
      ),
      'PricePermissions' => 
      array (
        'sortOrder' => 80,
        'instance' => 'Magento\\PricePermissions\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\PricePermissions',
      ),
      'GiftCardInitialize' => 
      array (
        'sortOrder' => 110,
        'instance' => 'Magento\\GiftCard\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\GiftCard',
      ),
      'cleanConfigurationTmpImages' => 
      array (
        'sortOrder' => 999,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Product\\Initialization\\CleanConfigurationTmpImages',
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpGetActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpHeadActionInterface' => NULL,
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
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
      'security_admin_sessions_login' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\Auth',
      ),
      'pagebuilder_clear_editor_config_cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageBuilder\\Plugin\\ClearEditorConfigCache',
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
      'revoke_admin_access_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RevokeAdminAccessTokenPlugin',
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
      'apply_catalog_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
      ),
      'reload_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'cleanups_wishlist_item_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Model\\ResourceModel\\Product',
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
      'invalidate_pagecache_after_update_product_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Action\\UpdateAttributesFlushCache',
      ),
      'price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Model\\Product\\Action',
      ),
      'admingws_product_action_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\ProductAction',
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
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\OrderInterface' => NULL,
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
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
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
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
      'Price' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Model\\Entity\\Attribute\\Backend\\Plugin\\AbstractBackend',
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
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
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
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
      'aroundVerifyIdentity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ReplaceVerifyIdentityWithImsPlugin',
      ),
      'user_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\UserSavePlugin',
      ),
      'change_perform_identity_check_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\PerformIdentityCheckMessagePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
      'reward_notification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerPlugin',
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
      'reindex_after_import' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\ImportExport',
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
      'catalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category',
      ),
      'admingws_category_resource_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryResource',
      ),
      'admin_gws_check_category_can_be_saved' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Model\\ResourceModel\\Category\\CheckCategoryCanBeSaved',
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
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
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
      'invalidate_pagecache_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Attribute\\Save',
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
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
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
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
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
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
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
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
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
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
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
      'creditmemoAfterSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Creditmemo',
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
      'admin-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\AdminAddCommentOnOrderPlacementPlugin',
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
      'apply_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Category',
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'order_edit' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardAccount\\Controller\\Adminhtml\\Order\\Edit\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'isOptionExists' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Api\\Plugin\\ProductCustomOptionRepository',
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
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'DateRangeDesignUpdateCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Api\\DateRangeDesignUpdateCategorySavePlugin',
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
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
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
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
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
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Plugin\\Collection',
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
      'add_notice_for_unassigned_sales_channels' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryApi\\StockRepository\\AddNoticeForUnassignedSalesChannels',
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
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
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
        'disabled' => true,
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
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
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
      'salesRuleConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
      ),
      'salesRuleActionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ActionFieldsetIdResolver',
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
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
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
      'addVariationsToProductRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\ConfigurableProductHandler',
      ),
      'configurableChildValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\Validation',
      ),
      'catalogConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
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
      'change_product_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Attribute',
      ),
      'invalidate_caches_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Catalog\\CacheInvalidate',
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
    'Magento\\ConfigurableProduct\\Block\\DataProviders\\PermissionsData' => 
    array (
      'admin_gws_configurable_product_permissions_data_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsConfigurableProduct\\Plugin\\PermissionsDataChecker',
      ),
    ),
    'Magento\\Staging\\Model\\Preview\\UrlBuilder' => 
    array (
      'admin_gws_staging_preview_url_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsStaging\\Plugin\\PreviewUrlBuilder',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype' => 
    array (
      'process_page_builder_input_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Adminhtml\\System\\Config\\Source\\InputtypePlugin',
      ),
      'append_compatible_input_types' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\System\\Config\\Source\\InputtypePlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider' => 
    array (
      'orderGridExportFilterColumnPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Export\\OrderGridExportFilterColumn',
      ),
      'setAllocatedSourceData' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\SetAllocatedSourceValueInExportCsv',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'security_login_form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\LoginController',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules' => 
    array (
      'user_expiration_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\UserValidationRules',
      ),
      'remove_user_validation_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemoveUserValidationRulesPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Generic' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'user_expiration_user_form_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AdminUserForm',
      ),
      'admin_adobe_ims_reauth_button_user_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Copier' => 
    array (
      'copy_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\Catalog\\CopySourceItemsPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full' => 
    array (
      'invalidate_pagecache_after_full_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Indexer\\Category\\Product\\Execute',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\ProductDataProvider' => 
    array (
      'add_show_total_records_to_catalog_product_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Ui\\DataProvider\\Product\\ProductDataProvider',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface' => 
    array (
      'remove_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\AttributeSetRepository\\RemoveProducts',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search' => 
    array (
      'processOutOfStockProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductSearch',
      ),
    ),
    'Magento\\Framework\\Controller\\ResultInterface' => NULL,
    'Magento\\Framework\\Controller\\AbstractResult' => NULL,
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'add_adobe_ims_layout_handle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AddAdobeImsLayoutHandlePlugin',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig' => 
    array (
      'disable_password_reset' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisablePasswordResetPlugin',
      ),
      'disable_forced_password_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableForcedPasswordChangePlugin',
      ),
    ),
    'Magento\\Security\\Model\\AdminSessionsManager' => 
    array (
      'keep_other_user_sessions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\OtherUserSessionPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'admin_adobe_ims_reauth_button_account_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\System\\Account\\Edit\\AddReAuthVerification',
      ),
    ),
    'Magento\\User\\Block\\Role\\Tab\\Info' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'admin_adobe_ims_reauth_button_role_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Role\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\AdobeIms\\Block\\Adminhtml\\SignIn' => 
    array (
      'authentication_component_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\SignInPlugin',
      ),
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'admin_adobe_ims_reauth_button_integration_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\Integration\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Customer\\Model\\Group' => 
    array (
      'reindex_after_delete_customer_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\CustomerGroup',
      ),
    ),
    'Magento\\Quote\\Observer\\SubmitObserver' => 
    array (
      'beforeSendOrderNotification' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Magento\\Quote\\Plugin\\SendOrderNotification',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'orderGridCollectionFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\ResourceModel\\Order\\OrderGridCollectionFilter',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\AbstractCreate' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\Bundle\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'configurable' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
    ),
    'Magento\\Framework\\Data\\Form\\AbstractForm' => NULL,
    'Magento\\Framework\\Data\\Form\\Element\\AbstractElement' => NULL,
    'Magento\\Framework\\Data\\Form\\Element\\Fieldset' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Framework\\Data\\Form\\Element\\FieldsetPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Element\\Text' => NULL,
    'Magento\\Framework\\View\\Element\\Text\\ListText' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Invoices' => 
    array (
      'invoices_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\InvoicesSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Creditmemos' => 
    array (
      'creditmemos_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\CreditmemosSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Shipments' => 
    array (
      'shipments_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ShipmentsSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Observer\\GridSyncInsertObserver' => 
    array (
      'archived_entity_grid_sync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\GridSyncInsertObserverPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'search_weigh' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Block\\Plugin\\FrontTabPlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Attribute' => NULL,
    'Magento\\Customer\\Model\\Attribute' => 
    array (
      'validateCustomerAddressAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ValidateCustomerAddressAttribute',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
      'bundle_msrp_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Msrp\\Plugin\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Builder\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Validator\\Plugin',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\InvoiceInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'update_configurable_product_total_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Order\\Invoice\\UpdateConfigurableProductTotalQty',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'versionscms_cms_page_inline_edit_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\VersionsCms\\Controller\\Adminhtml\\Cms\\Page\\InlineEdit\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer' => 
    array (
      'sales_adminorder_quote_initializer_plugin' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Model\\Sales\\AdminOrder\\Product\\Quote\\Plugin\\Initializer',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher' => 
    array (
      'entrprise_store_switcher_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\StoreSwitcher',
      ),
      'paypal_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Block\\Adminhtml\\Store\\SwitcherPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminhtmlCategoryEditPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\EditPlugin',
      ),
      'admin_gws_category_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CategoryStoreSwitcherUpdater',
      ),
      'admin_gws_category_store_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CategoryStoreUpdater',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminhtmlCategoryAddPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\AddPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminhtmlCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\SavePlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CategoryLink' => 
    array (
      'adminhtmlRankCategoryProductPositionsPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\RankCategoryProductPositions',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\ProductDataProvider' => NULL,
    'Magento\\CatalogStaging\\Model\\Product\\DataProvider' => 
    array (
      'catalogStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Identifier\\DataProvider' => 
    array (
      'catalogStagingIdentifierDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider' => 
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
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'catalog_permissions_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\Identifier\\DataProvider' => 
    array (
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\AggregateCount' => 
    array (
      'aggregateCountForCatalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category\\AggregateCount',
      ),
    ),
    'Magento\\Ui\\DataProvider\\Modifier\\ModifierInterface' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\AbstractModifier' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav' => 
    array (
      'PricePermissions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Ui\\DataProvider\\Product\\Form\\Modifier\\Plugin\\Eav',
      ),
      'pagebuilder_product_form_eav' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\EavPlugin',
      ),
    ),
    'Magento\\Backend\\Helper\\Data' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Edit\\Action\\Attribute' => 
    array (
      'catalogHelperProductAttributePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider' => 
    array (
      'google_optimizer_product_new_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Product\\Category\\DataProvider',
      ),
    ),
    'Magento\\Framework\\Mview\\ActionInterface' => NULL,
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
      'productRuleReindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Indexer\\ProductRuleReindex',
      ),
    ),
    'Magento\\Staging\\Model\\Operation\\Update\\UpdateProcessorInterface' => NULL,
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor' => 
    array (
      'flushAssociatedProductCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProductStaging\\Model\\Product\\Operation\\Update\\FlushAssociatedProductCache',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetIsQtySalableInterface' => 
    array (
      'inventory_bundle_product_is_any_child_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventorySales\\Model\\IsProductSalableCondition\\GetIsQtySalableForBundleProduct',
      ),
      'inventory_configurable_product_is_any_child_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\InventorySales\\Model\\IsProductSalableCondition\\GetIsQtySalableForConfigurableProduct',
      ),
    ),
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider' => 
    array (
      'add_show_total_records_to_catalog_product_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Ui\\DataProvider\\Product\\ProductDataProvider',
      ),
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Framework\\View\\Element\\Messages' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Messages' => 
    array (
      'process_error_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\Block\\Order\\Create\\Messages\\ProcessMessagesPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Model\\Stock\\StockSourceLinkProcessor' => 
    array (
      'prevent_process_for_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\Stock\\StockSaveProcessor\\PreventProcessDefaultStockLinksPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider' => 
    array (
      'prevent_disabling_default_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventDisablingDefaultSourcePlugin',
      ),
      'convert_is_pickup_location_active_boolean_to_string' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\Ui\\DataProvider\\ConvertBooleanToStringPlugin',
      ),
      'prevent_using_default_source_as_pickup_location_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventUsingDefaultSourceAsPickupLocationPlugin',
      ),
    ),
    'Magento\\Ui\\Component\\Bookmark' => 
    array (
      'initialize_quantity_per_source_bookmark_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\Ui\\Component\\InitializeQuantityPerSourceBookmarkConfiguration',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider' => 
    array (
      'add_show_total_records_to_catalog_product_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Ui\\DataProvider\\Product\\ProductDataProvider',
      ),
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'shipment_tracking' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Controller\\Order\\Shipment\\View\\ShipmentTrackingPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\ContainerInterface' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ContextInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Container' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Container' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'shipment_tracking_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Block\\Adminhtml\\View\\ShipmentTrackingButtonPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\StockDataProvider' => 
    array (
      'sales_channel_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryAdminUi\\Ui\\StockDataProvider\\SalesChannels',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Items\\AbstractItems' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Items\\Renderer\\DefaultRenderer' => 
    array (
      'can_return_item_to_stock_child_manage_stock_is_on' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\Sales\\Block\\Items\\Renderer\\DefaultRenderer\\ChildManageStockIsOn',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSalableQtyInterface' => 
    array (
      'inventory_sales_admin_ui_adjust_product_qty_in_stock_for_edit_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventorySalesApi\\Api\\AdjustProductQtyInStockForEditOrder',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\AbstractOrder' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\Form' => 
    array (
      'disallow_create_shipment_in_multi_source_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Order\\Invoice\\Create\\DisallowCreateShipmentPlugin',
      ),
      'create_shipment_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\ProcessCreateShipment',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'back_button_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Shipment\\BackButtonUrlOnNewShipmentPagePlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface' => 
    array (
      'login_as_customer_button_toolbar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses' => 
    array (
      'login_as_customer_customer_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\DataProviderWithDefaultAddressesPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'login_as_customer_customer_data_validate_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerDataValidatePlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => 
    array (
      'login_as_customer_button_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\LoginAsCustomerButtonDataProviderPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\ConfirmationPopup\\Options' => 
    array (
      'login_as_customer_store_options_restricted_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerWebsiteRestriction\\Plugin\\StoreOptionsRestrictedPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader' => 
    array (
      'save_category_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalogIntegration\\Plugin\\SaveBaseCategoryImageInformation',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl' => 
    array (
      'new_media_gallery_open_dialog_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\NewMediaGalleryOpenDialogUrl',
      ),
    ),
    'Magento\\Framework\\File\\Uploader' => 
    array (
      'save_asset_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\SaveImageInformation',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'add_search_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddSearchButton',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId' => 
    array (
      'add_adobe_stock_image_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockImageDetailsPlugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options' => 
    array (
      'add_adobe_stock_source_option_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockSourceOptionPlugin',
      ),
    ),
    'Magento\\Banner\\Model\\Banner\\Validator' => 
    array (
      'prepare-save-data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerCustomerSegment\\Plugin\\Model\\Banner\\ValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\DesignLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation' => 
    array (
      'process_page_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Attribute\\PresentationPlugin',
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
    'Magento\\Store\\Api\\WebsiteRepositoryInterface' => 
    array (
      'admin_gws_website_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\WebsiteRepository',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\AbstractCategory' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Control\\ButtonProviderInterface' => NULL,
    'Magento\\CatalogEvent\\Block\\Adminhtml\\Catalog\\Category\\Edit\\AddEventButton' => 
    array (
      'admin_gws_category_event_buttons_limitation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryEventButton',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_gws_save_role' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\SaveRole',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Product\\MassAction' => 
    array (
      'admin_gws_massaction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Ui\\Component\\Plugin\\Catalog\\Product\\MassAction',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\Generic' => NULL,
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\AddAttribute' => 
    array (
      'admin_gws_add_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Block\\Adminhtml\\Plugin\\Catalog\\Product\\Edit\\Button\\AddAttribute',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\ProductActions' => 
    array (
      'admin_gws_product_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductLinkUpdater',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_gws_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductStoreSwitcherUpdater',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Categories' => 
    array (
      'admin_gws_product_categories_role_restrictions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\CategoriesRoleRestrictions',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface' => 
    array (
      'store_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\StoreFilter',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_gws_store_switcher_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\StoreSwitcherUpdater',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute' => 
    array (
      'admin_gws_attributes_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'quote_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
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
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'catalog_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'customer_segment_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'reminder_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'user_role_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\UserRoleCollectionSizeLimiter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'rating_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Review\\RatingCollectionSizeLimiter',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser' => 
    array (
      'admin_gws_category_products_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Product' => NULL,
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid' => 
    array (
      'admin_gws_category_products_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid',
      ),
    ),
    'Magento\\VisualMerchandiser\\ViewModel\\MerchandiserViewModel' => 
    array (
      'admin_gws_category_products_merchandiser' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\ViewModel\\MerchandiserViewModel',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'admin_user_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\UserCollection',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Container' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'rating_remove_add_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Review\\RatingRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Main' => 
    array (
      'product_attribute_set_remove_edit_buttons_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveEditButtonsPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Toolbar\\Main' => 
    array (
      'product_attribute_set_remove_add_button_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'customer_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'customer_address_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAddressAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'returns_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Rma\\ReturnsAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\Authorization' => 
    array (
      'isCategoryAuthorizedForDifferentStoreUserRole' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\IsCategoryAuthorizedForDifferentStoreUserRole',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export\\Export' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'import_export_export_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ImportExport\\Controller\\Adminhtml\\Export\\ExportPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Store\\Model\\StoreSwitcherInterface' => NULL,
    'Magento\\Store\\Model\\StoreSwitcher\\ManageStoreCookie' => 
    array (
      'store_switcher_manage_store_cookie_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\Store\\StoreSwitcher\\ManageStoreCookie',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\SearchInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure' => 
    array (
      'paypal_system_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\StructurePlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\StructureElementInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\ElementInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\AbstractElement' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field' => 
    array (
      'paypal_system_configuration_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\Structure\\Element\\FieldPlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config' => 
    array (
      'Config' => 
      array (
        'sortOrder' => 82,
        'instance' => 'Magento\\PricePermissions\\Block\\Adminhtml\\ConfigurableProduct\\Product\\Edit\\Tab\\Variations\\Plugin\\Config',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
      'disable_apply_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Edit\\Plugin',
      ),
    ),
    'Magento\\Ui\\Block\\Component\\StepsWizard\\StepInterface' => NULL,
    'Magento\\Ui\\Block\\Component\\StepsWizard\\StepAbstract' => NULL,
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Bulk' => 
    array (
      'adapt_configurable_wizard_bulk_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\BulkStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Summary' => 
    array (
      'adapt_configurable_wizard_summary_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\SummaryStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config\\Matrix' => 
    array (
      'add_quantity_per_source_to_variations_matrix' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\AddQuantityPerSourceToVariationsMatrix',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rss\\App\\Action\\Plugin\\BackendAuthentication',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\DataProvider' => NULL,
    'Magento\\SalesRuleStaging\\Model\\Rule\\FormDataProvider' => 
    array (
      'salesRuleStagingFormDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'salesRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Info' => 
    array (
      'hide-edit-link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Order\\View\\ShippingAddress\\HideEditLink',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'set-order-pickup-location' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Controller\\AdminOrder\\Create\\SetPickupLocationFromPost',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'process_ship_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\ProcessShipButtonPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart\\CartInterface' => NULL,
    'Magento\\Sales\\Model\\AdminOrder\\Create' => 
    array (
      'adapt_set_shipping_address_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Model\\AdminOrder\\Create\\AdaptSetShippingAddressPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Form\\AbstractForm' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Form\\Address' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address' => 
    array (
      'process_shipping_address_form_fro_store_pickup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address\\AdaptFormPlugin',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule\\DataProvider' => NULL,
    'Magento\\CatalogRuleStaging\\Model\\Rule\\DataProvider' => 
    array (
      'catalogRuleStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'catalogRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'save_swatches_frontend_input' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Controller\\Adminhtml\\Product\\Attribute\\Plugin\\Save',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\TwoFactorAuth\\Observer\\ControllerActionPredispatch' => 
    array (
      'verify_admin_adobe_ims_is_enable' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\AdminAdobeImsTwoFactorAuth\\Plugin\\VerifyAdminAdobeImsIsEnable',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'afterToArray' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized\\Plugin',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider' => 
    array (
      'afterGetMeta' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Ui\\Component\\AdminNotification\\Plugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging' => 
    array (
      'usps' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Usps\\Block\\Adminhtml\\Order\\Packaging\\Plugin\\DisplayGirth',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\Cms\\Model\\Block\\DataProvider' => NULL,
    'Magento\\CmsStaging\\Model\\Block\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\Identifier\\DataProvider' => 
    array (
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Block\\Identifier\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'cmsstaging_page_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Save\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'cmsstaging_page_update_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Ced\\ConnectBase\\Controller\\Adminhtml\\Core\\Base' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'add_support_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectBase\\Plugin\\AddSupportButtons',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'JsonSerializable' => NULL,
    'Ced\\ConnectBase\\Ui\\Component\\Listing\\MassAction\\Order\\Options' => 
    array (
      'tiktok_cancel_reason' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Ui\\Component\\Listing\\MassAction\\Order\\Options',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Config' => 
    array (
      'tiktok_modify_menu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\Menu\\Magento\\Backend\\Model\\Menu\\Config',
      ),
    ),
    'Ced\\ConnectBase\\Ui\\Component\\Listing\\Columns\\Order\\MarketplaceOrderId' => 
    array (
      'tiktok_marketplace_order_id' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ced\\ConnectTikTok\\Ui\\Component\\Listing\\Columns\\Order\\MarketplaceOrderId',
      ),
    ),
    'Ced\\ConnectBase\\Block\\Adminhtml\\Listing\\Template\\CategoryTree' => 
    array (
      'ced_category_notice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Ced\\ConnectTikTok\\Plugin\\Listing\\Template\\CategoryTree\\UpdateCategoryNoticeHtml',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'orderGridCollectionFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\ResourceModel\\Order\\OrderGridCollectionFilter',
      ),
      'braintreeSalesOrderGrid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\SalesOrderGridPlugin',
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
        1 => 'default_store_setter',
        2 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
        1 => 'default_store_setter',
        2 => 'storeCookieValidate',
        3 => 'install',
        4 => 'configHash',
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
      4 => 
      array (
        0 => 'configPermissionChange',
      ),
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
      2 => 'reindex_customer_grid_after_website_remove',
    ),
    'Magento\\Store\\Model\\Website_delete_reindex_customer_grid_after_website_remove' => 
    array (
      4 => 
      array (
        0 => 'deleteCustomerGroupExcludedWebsiteAfterWebsiteDelete',
        1 => 'reindex_after_delete_website',
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
    'Magento\\Framework\\Data\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
    'Magento\\Backend\\Model\\Auth\\Session_prolong_admin_adobe_ims_backend_auth_session' => 
    array (
      2 => 'security_admin_sessions_prolong',
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
    'Magento\\Framework\\Data\\Collection\\AbstractDb_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsPageUpdate',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsBlockUpdate',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository_save___self' => 
    array (
      1 => 
      array (
        0 => 'versions_cms_url_rewrite_plugin',
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
    'Magento\\Catalog\\Model\\Category\\DataProvider_getAttributesMeta___self' => 
    array (
      4 => 
      array (
        0 => 'category_ui_form_url_key_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'catalog_permissions_category_data_provider',
        1 => 'google_optimizer_category_data_provider',
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
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
        6 => 'store_plugin',
        7 => 'update_cms_url_rewrites_after_store_save',
      ),
      1 => 
      array (
        0 => 'invalidateTargetRuleOnStoreViewChange',
        1 => 'store_plugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreView',
        2 => 'store_plugin',
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
        6 => 'group_plugin',
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
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate_ConfigurableProduct::skipValidation' => 
    array (
      1 => 
      array (
        0 => 'Price',
      ),
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
        1 => 'update_multiselect_attributes',
        2 => 'admin_gws_gallery_updater',
        3 => 'Rma',
      ),
      1 => 
      array (
        0 => 'Rma',
        1 => 'GiftCardInitialize',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initialize___self' => 
    array (
      4 => 
      array (
        0 => 'product_save_rewrites_history_plugin',
        1 => 'configurable',
        2 => 'Bundle',
        3 => 'updateConfigurationsStaging',
        4 => 'Downloadable',
        5 => 'PricePermissions',
        6 => 'GiftCardInitialize',
        7 => 'cleanConfigurationTmpImages',
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
        0 => 'configurableProductSaveOptions',
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
    'Magento\\Framework\\App\\Action\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      2 => 'admin_forgot_password_plugin',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
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
        1 => 'security_admin_sessions_login',
      ),
    ),
    'Magento\\Backend\\Model\\Auth_login_disable_admin_login_auth' => 
    array (
      4 => 
      array (
        0 => 'security_admin_sessions_login',
        1 => 'pagebuilder_clear_editor_config_cache',
      ),
    ),
    'Magento\\Integration\\Model\\AdminTokenService_createAdminAccessToken___self' => 
    array (
      2 => 'admin_adobe_ims_admin_token_plugin',
    ),
    'Magento\\Integration\\Model\\AdminTokenService_revokeAdminAccessToken___self' => 
    array (
      4 => 
      array (
        0 => 'revoke_admin_access_token',
      ),
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
        3 => 'apply_catalog_rules_after_product_save',
      ),
      1 => 
      array (
        0 => 'reload_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items',
        1 => 'delete_reservations',
      ),
      2 => 'reload_attributes',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_reload_attributes' => 
    array (
      1 => 
      array (
        0 => 'cleanups_wishlist_item_after_product_delete',
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
        4 => 'invalidate_pagecache_after_update_product_attributes',
        5 => 'price_plugin',
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
        3 => 'invalidate_pagecache_after_update_product_attributes',
      ),
      1 => 
      array (
        0 => 'admingws_product_action_plugin',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_creditmemo',
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_invoice',
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_print',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_print_creditmemo',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_print_invoice',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_print_shipment',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_reorder',
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_shipment',
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_view_order',
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
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
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
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
        1 => 'Price',
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
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\App\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\App\\Action_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'inventoryUpdate',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
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
    'Magento\\User\\Model\\User_verifyIdentity___self' => 
    array (
      2 => 'aroundVerifyIdentity',
    ),
    'Magento\\User\\Model\\User_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'user_save',
      ),
    ),
    'Magento\\User\\Model\\User_performIdentityCheck___self' => 
    array (
      2 => 'change_perform_identity_check_message',
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
    'Magento\\Customer\\Model\\Customer_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'reward_notification',
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
        8 => 'reindex_after_import',
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
      1 => 
      array (
        0 => 'admingws_category_resource_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete_category_delete_plugin' => 
    array (
      4 => 
      array (
        0 => 'fulltext_search_indexer',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_isForbiddenToDelete___self' => 
    array (
      4 => 
      array (
        0 => 'catalogStaging',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_deleteChildren___self' => 
    array (
      2 => 'catalogStaging',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save_catalogsearchFulltextCategory' => 
    array (
      1 => 
      array (
        0 => 'admin_gws_check_category_can_be_saved',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
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
        1 => 'invalidate_pagecache_after_attribute_save',
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
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
        1 => 'default_store_setter',
        2 => 'beforeRestDispatch',
        3 => 'webapiContorllerRestAsync',
        4 => 'configHash',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'staging_preview_store_switch_fixing',
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
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
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_save_deduct_source_item_quantity_on_refund' => 
    array (
      4 => 
      array (
        0 => 'creditmemoAfterSave',
      ),
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
    'Magento\\Sales\\Model\\Order_place___self' => 
    array (
      4 => 
      array (
        0 => 'admin-order-placement-comment',
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
        1 => 'apply_after_products_assign',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCategoryInvalidate',
        1 => 'categoryChange',
        2 => 'apply_after_products_assign',
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
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'order_edit',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'isOptionExists',
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
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'replaceIndex',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'DateRangeDesignUpdateCategorySavePlugin',
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
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
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
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addStoreFilter___self' => 
    array (
      2 => 'Bundle',
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
        0 => 'add_notice_for_unassigned_sales_channels',
        1 => 'save_sales_channels_links',
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
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
      2 => 'add_pickup_location_to_quote_address',
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'multiple_enabled_filter',
        2 => 'log',
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
    'Magento\\SalesRule\\Model\\Rule_getConditionsFieldSetId___self' => 
    array (
      2 => 'salesRuleConditionFieldsetIdResolver',
    ),
    'Magento\\SalesRule\\Model\\Rule_getActionsFieldSetId___self' => 
    array (
      2 => 'salesRuleActionFieldsetIdResolver',
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
    'Magento\\Banner\\Model\\ResourceModel\\Catalogrule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Banner\\Model\\ResourceModel\\Catalogrule\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Banner\\Model\\ResourceModel\\Catalogrule\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
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
    'Magento\\CatalogRule\\Model\\Rule_getMatchingProductIds___self' => 
    array (
      2 => 'addVariationsToProductRule',
    ),
    'Magento\\CatalogRule\\Model\\Rule_validate___self' => 
    array (
      4 => 
      array (
        0 => 'configurableChildValidation',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getConditionsFieldSetId___self' => 
    array (
      2 => 'catalogConditionFieldsetIdResolver',
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
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_save___self' => 
    array (
      4 => 
      array (
        0 => 'change_product_attribute',
        1 => 'invalidate_caches_after_attribute_save',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_delete___self' => 
    array (
      4 => 
      array (
        0 => 'change_product_attribute',
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
    'Magento\\ConfigurableProduct\\Block\\DataProviders\\PermissionsData_isAllowedToManageAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_configurable_product_permissions_data_checker',
      ),
    ),
    'Magento\\Staging\\Model\\Preview\\UrlBuilder_getPreviewUrl___self' => 
    array (
      1 => 
      array (
        0 => 'admin_gws_staging_preview_url_builder',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder_input_type',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype_getVolatileInputTypes___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder_input_type',
        1 => 'append_compatible_input_types',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider_getHeaders___self' => 
    array (
      4 => 
      array (
        0 => 'orderGridExportFilterColumnPlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider_getFields___self' => 
    array (
      4 => 
      array (
        0 => 'orderGridExportFilterColumnPlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider_getRowData___self' => 
    array (
      4 => 
      array (
        0 => 'setAllocatedSourceData',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'security_login_form',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules_addUserInfoRules___self' => 
    array (
      4 => 
      array (
        0 => 'user_expiration_validator',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules_addPasswordRules___self' => 
    array (
      2 => 'remove_user_validation_rules',
    ),
    'Magento\\User\\Model\\UserValidationRules_addPasswordConfirmationRule___self' => 
    array (
      2 => 'remove_user_validation_rules',
    ),
    'Magento\\Backend\\Block\\Widget\\Form_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Generic_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main_getFormHtml___self' => 
    array (
      2 => 'user_expiration_user_form_field',
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main_getFormHtml_user_expiration_user_form_field' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_user_edit',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Copier_copy___self' => 
    array (
      4 => 
      array (
        0 => 'copy_source_items',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_pagecache_after_full_reindex',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\ProductDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'add_show_total_records_to_catalog_product_data',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'remove_products',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search_prepareCollection___self' => 
    array (
      4 => 
      array (
        0 => 'processOutOfStockProducts',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout_addDefaultHandle___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_ims_layout_handle',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig_getAdminPasswordLifetime___self' => 
    array (
      4 => 
      array (
        0 => 'disable_password_reset',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig_isPasswordChangeForced___self' => 
    array (
      4 => 
      array (
        0 => 'disable_forced_password_change',
      ),
    ),
    'Magento\\Security\\Model\\AdminSessionsManager_logoutOtherUserSessions___self' => 
    array (
      2 => 'keep_other_user_sessions',
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form_getFormHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_account_edit',
      ),
    ),
    'Magento\\User\\Block\\Role\\Tab\\Info_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\User\\Block\\Role\\Tab\\Info_getFormHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_role_edit',
      ),
    ),
    'Magento\\AdobeIms\\Block\\Adminhtml\\SignIn_getComponentJsonConfig___self' => 
    array (
      2 => 'authentication_component_config',
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info_getFormHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_integration_edit',
      ),
    ),
    'Magento\\Customer\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_delete_customer_group',
      ),
    ),
    'Magento\\Quote\\Observer\\SubmitObserver_execute___self' => 
    array (
      1 => 
      array (
        0 => 'beforeSendOrderNotification',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_addFieldToFilter___self' => 
    array (
      2 => 'orderGridCollectionFilterPlugin',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Framework\\Data\\Form\\Element\\Fieldset_addField___self' => 
    array (
      4 => 
      array (
        0 => 'Bundle',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Invoices_canShowTab___self' => 
    array (
      4 => 
      array (
        0 => 'invoices_show_tab',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Creditmemos_canShowTab___self' => 
    array (
      4 => 
      array (
        0 => 'creditmemos_show_tab',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Shipments_canShowTab___self' => 
    array (
      4 => 
      array (
        0 => 'shipments_show_tab',
      ),
    ),
    'Magento\\Sales\\Observer\\GridSyncInsertObserver_execute___self' => 
    array (
      2 => 'archived_entity_grid_sync',
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Form_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes_setForm___self' => 
    array (
      4 => 
      array (
        0 => 'product_form_url_key_plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front_setForm___self' => 
    array (
      1 => 
      array (
        0 => 'search_weigh',
      ),
    ),
    'Magento\\Customer\\Model\\Attribute_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'validateCustomerAddressAttribute',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes_setForm___self' => 
    array (
      4 => 
      array (
        0 => 'product_form_url_key_plugin',
        1 => 'bundle_msrp_plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder_build___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator_validate___self' => 
    array (
      1 => 
      array (
        0 => 'configurable',
      ),
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice_setTotalQty___self' => 
    array (
      1 => 
      array (
        0 => 'update_configurable_product_total_qty',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_setCmsPageData___self' => 
    array (
      1 => 
      array (
        0 => 'versionscms_cms_page_inline_edit_plugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer_init___self' => 
    array (
      4 => 
      array (
        0 => 'sales_adminorder_quote_initializer_plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'debug_hints',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher_getHintUrl___self' => 
    array (
      4 => 
      array (
        0 => 'entrprise_store_switcher_plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'paypal_store_switcher',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'adminhtmlCategoryEditPlugin',
        4 => 'admin_gws_category_store_updater',
      ),
      4 => 
      array (
        0 => 'admin_gws_category_store_switcher',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'adminhtmlCategoryAddPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'adminhtmlCategorySavePlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CategoryLink_updateCategoryLinks___self' => 
    array (
      2 => 'adminhtmlRankCategoryProductPositionsPlugin',
    ),
    'Magento\\CatalogStaging\\Model\\Product\\DataProvider_getData___self' => 
    array (
      2 => 'catalogStagingDataProvider',
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'catalogStagingIdentifierDataProvider',
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_getDefaultMetaData___self' => 
    array (
      4 => 
      array (
        0 => 'set_page_layout_default_value',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'catalogCategoryDataProviderTrimData',
      ),
      2 => 'catalogStagingCategoryDataProvider',
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_getAttributesMeta___self' => 
    array (
      4 => 
      array (
        0 => 'category_ui_form_url_key_plugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'catalog_permissions_category_data_provider',
        1 => 'google_optimizer_category_data_provider',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'catalogStagingCategoryDataProvider',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\AggregateCount_processDelete___self' => 
    array (
      2 => 'aggregateCountForCatalogStaging',
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeMeta___self' => 
    array (
      4 => 
      array (
        0 => 'PricePermissions',
        1 => 'pagebuilder_product_form_eav',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeContainerMeta___self' => 
    array (
      4 => 
      array (
        0 => 'PricePermissions',
        1 => 'pagebuilder_product_form_eav',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeData___self' => 
    array (
      4 => 
      array (
        0 => 'PricePermissions',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Edit\\Action\\Attribute_getExcludedAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'catalogHelperProductAttributePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_cms_page_data_provider',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_product_new_category_data_provider',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeFull___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeList___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeRow___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeFull___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeList___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
        1 => 'productRuleReindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeRow___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      2 => 'productRuleReindex',
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor_loadEntity___self' => 
    array (
      1 => 
      array (
        0 => 'flushAssociatedProductCache',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor_buildEntity___self' => 
    array (
      1 => 
      array (
        0 => 'flushAssociatedProductCache',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetIsQtySalableInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_bundle_product_is_any_child_salable',
        1 => 'inventory_configurable_product_is_any_child_salable',
      ),
    ),
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'add_show_total_records_to_catalog_product_data',
        1 => 'append_quantity_per_source',
      ),
    ),
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'append_column_quantity_per_source',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Messages_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'process_error_messages',
      ),
    ),
    'Magento\\InventoryAdminUi\\Model\\Stock\\StockSourceLinkProcessor_process___self' => 
    array (
      2 => 'prevent_process_for_default_stock',
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'prevent_disabling_default_source',
        1 => 'prevent_using_default_source_as_pickup_location_plugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'convert_is_pickup_location_active_boolean_to_string',
      ),
    ),
    'Magento\\Ui\\Component\\Bookmark_getConfiguration___self' => 
    array (
      4 => 
      array (
        0 => 'initialize_quantity_per_source_bookmark_configuration',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'add_show_total_records_to_catalog_product_data',
        1 => 'append_quantity_per_source',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'append_column_quantity_per_source',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'shipment_tracking',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\ContainerInterface_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Backend\\Block\\Widget\\Container_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Container_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View_setLayout___self' => 
    array (
      1 => 
      array (
        0 => 'shipment_tracking_button',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\StockDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'sales_channel_data',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Items\\Renderer\\DefaultRenderer_canReturnItemToStock___self' => 
    array (
      4 => 
      array (
        0 => 'can_return_item_to_stock_child_manage_stock_is_on',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSalableQtyInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_sales_admin_ui_adjust_product_qty_in_stock_for_edit_order',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\Form_canCreateShipment___self' => 
    array (
      4 => 
      array (
        0 => 'disallow_create_shipment_in_multi_source_mode',
        1 => 'create_shipment_checkbox_processor',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create_getBackUrl___self' => 
    array (
      4 => 
      array (
        0 => 'back_button_url',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface_pushButtons___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_button_toolbar',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses_getData___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_data_provider_plugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_data_provider_plugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form_extractData___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_customer_data_validate_plugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_button_data_provider_plugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\ConfirmationPopup\\Options_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_store_options_restricted_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader_moveFileFromTmp___self' => 
    array (
      4 => 
      array (
        0 => 'save_category_image',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl_get___self' => 
    array (
      4 => 
      array (
        0 => 'new_media_gallery_open_dialog_url',
      ),
    ),
    'Magento\\Framework\\File\\Uploader_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_asset_image',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content_setLayout___self' => 
    array (
      1 => 
      array (
        0 => 'add_search_button',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId_execute___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_stock_image_details_plugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_stock_source_option_plugin',
      ),
    ),
    'Magento\\Banner\\Model\\Banner\\Validator_prepareSaveData___self' => 
    array (
      4 => 
      array (
        0 => 'prepare-save-data',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory_create___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation_getPresentationInputType___self' => 
    array (
      1 => 
      array (
        0 => 'process_page_builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation_convertPresentationDataToInputType___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder',
      ),
    ),
    'Magento\\Framework\\Filter\\Template_filter___self' => 
    array (
      4 => 
      array (
        0 => 'convertBackgroundImages',
      ),
    ),
    'Magento\\Store\\Api\\WebsiteRepositoryInterface_getDefault___self' => 
    array (
      2 => 'admin_gws_website_repository_plugin',
    ),
    'Magento\\CatalogEvent\\Block\\Adminhtml\\Catalog\\Category\\Edit\\AddEventButton_getButtonData___self' => 
    array (
      2 => 'admin_gws_category_event_buttons_limitation_plugin',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'admin_gws_save_role',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Product\\MassAction_isActionAllowed___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_massaction',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\AddAttribute_getButtonData___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_add_attribute',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\ProductActions_prepareDataSource___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_product_link',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'admin_gws_store_switcher',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Categories_modifyMeta___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_product_categories_role_restrictions',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getStores___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getGroups___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getDefaultStoreView___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'admin_gws_store_switcher_updater',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute_getSaveUrl___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_attributes_block',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'quote_rule_collection_size_limiter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_setValidationFilter___self' => 
    array (
      1 => 
      array (
        0 => 'beforeSetValidationFilter',
      ),
      2 => 'aroundSetValidationFilter',
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'catalog_rule_collection_size_limiter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'customer_segment_collection_size_limiter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'reminder_collection_size_limiter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'user_role_collection_size_limiter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'rating_collection_size_limiter',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_gws_category_products_block',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid_addColumn___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_category_products_grid',
      ),
    ),
    'Magento\\VisualMerchandiser\\ViewModel\\MerchandiserViewModel_getSortable___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_category_products_merchandiser',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'admin_user_collection_size_limiter',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Container_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'rating_remove_add_button',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Main_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'product_attribute_set_remove_edit_buttons_plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Toolbar\\Main_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'product_attribute_set_remove_add_button_plugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'customer_attribute_edit_remove_buttons',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'customer_address_attribute_edit_remove_buttons',
      ),
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'returns_attribute_edit_remove_buttons',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\Authorization_authorizeSavingOf___self' => 
    array (
      1 => 
      array (
        0 => 'isCategoryAuthorizedForDifferentStoreUserRole',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export\\Export_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export\\Export_getRequestParameters___self' => 
    array (
      4 => 
      array (
        0 => 'import_export_export_plugin',
      ),
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export\\Export_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\ImportExport\\Controller\\Adminhtml\\Export\\Export_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Store\\Model\\StoreSwitcher\\ManageStoreCookie_switch___self' => 
    array (
      2 => 'store_switcher_manage_store_cookie_plugin',
    ),
    'Magento\\Config\\Model\\Config\\Structure_getElementByPathParts___self' => 
    array (
      2 => 'paypal_system_configuration',
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field_getConfigPath___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_system_configuration_field',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'Config',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
      1 => 
      array (
        0 => 'disable_apply_rules',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Edit\\GenericButton_canRender___self' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton_canRender___self' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Bulk_setTemplate___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_configurable_wizard_bulk_block_to_msi',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Summary_setTemplate___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_configurable_wizard_summary_block_to_msi',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config\\Matrix_getProductMatrix___self' => 
    array (
      4 => 
      array (
        0 => 'add_quantity_per_source_to_variations_matrix',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch___self' => 
    array (
      2 => 'adminAuthentication',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
        2 => 'adminLoadDesign',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\FormDataProvider_getData___self' => 
    array (
      2 => 'salesRuleStagingFormDataProvider',
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'salesRuleStagingPageDataProvider',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Info_getAddressEditLink___self' => 
    array (
      4 => 
      array (
        0 => 'hide-edit-link',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'set-order-pickup-location',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View_addButton___self' => 
    array (
      2 => 'process_ship_button',
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Create_setShippingAddress___self' => 
    array (
      2 => 'adapt_set_shipping_address_to_quote',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'process_shipping_address_form_fro_store_pickup',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\DataProvider_getData___self' => 
    array (
      2 => 'catalogRuleStagingDataProvider',
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'catalogRuleStagingPageDataProvider',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_frontend_input',
        1 => 'adminMassactionKey',
        2 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\TwoFactorAuth\\Observer\\ControllerActionPredispatch_execute___self' => 
    array (
      2 => 'verify_admin_adobe_ims_is_enable',
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_toArray___self' => 
    array (
      4 => 
      array (
        0 => 'afterToArray',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'afterGetMeta',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging_isDisplayGirthValue___self' => 
    array (
      2 => 'usps',
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_cms_page_data_provider',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingPageDataProvider',
    ),
    'Magento\\CmsStaging\\Model\\Block\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingBlockDataProvider',
    ),
    'Magento\\CmsStaging\\Model\\Page\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingPageDataProvider',
    ),
    'Magento\\CmsStaging\\Model\\Block\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingBlockDataProvider',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'cmsstaging_page_save',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'cmsstaging_page_update_save',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Ced\\ConnectBase\\Controller\\Adminhtml\\Core\\Base_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'add_support_buttons',
      ),
    ),
    'Ced\\ConnectBase\\Controller\\Adminhtml\\Core\\Base_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Ced\\ConnectBase\\Controller\\Adminhtml\\Core\\Base_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Ced\\ConnectBase\\Ui\\Component\\Listing\\MassAction\\Order\\Options_prepareSubMassAction___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_cancel_reason',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Config_getMenu___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_modify_menu',
      ),
    ),
    'Ced\\ConnectBase\\Ui\\Component\\Listing\\Columns\\Order\\MarketplaceOrderId_getMarketplaceOrderViewUrl___self' => 
    array (
      4 => 
      array (
        0 => 'tiktok_marketplace_order_id',
      ),
    ),
    'Ced\\ConnectBase\\Block\\Adminhtml\\Listing\\Template\\CategoryTree_getCategoryNoticeHtml___self' => 
    array (
      4 => 
      array (
        0 => 'ced_category_notice',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_addFieldToFilter___self' => 
    array (
      2 => 'orderGridCollectionFilterPlugin',
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'braintreeSalesOrderGrid',
      ),
    ),
  ),
);