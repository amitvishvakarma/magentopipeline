<?php

require __DIR__ . '/app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();
$connection = $objectManager->get(\Magento\Framework\App\ResourceConnection::class);

echo "Script execution started.";

try {
    if (isset($argv[1])) {
        $marketplaceID = getMarketplaceId($connection, $argv[1]);
    } else {
        $marketplaceID = 0;
    }
    truncateActivityLogTable($connection);
    truncateAttributeMappingTable($connection);
    truncateConnectorLogsTable($connection);
    truncateListingProductsTable($connection);
    truncateListingTemplateTable($connection);
    truncateMarketplaceAccountTable($connection);
    truncateMarketplaceOrdersTable($connection);
    truncateMarketplacePoliciesTable($connection);
    truncateOnboardingDataTable($connection);
    truncateProductChangeTable($connection);
    truncateQueueTable($connection);
    truncateSynchronizationFeedsTable($connection);
    truncateMarketplacesTable($connection);
    truncateFlagTable($connection);
    removePatch($connection);
    truncateProductLinkingTable($connection);
} catch (\Exception $exception) {
    echo "\n{$exception->getMessage()}}";
}

echo "\nScript execution completed.\n";

/**
 * Truncate ActivityLog Table
 *
 * @return void
 */
function truncateActivityLogTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_activities_log'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_activities_log'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nActivity Log table truncated.";
    } else {
        echo "\nActivity log table not exist.";
    }
}

/**
 * Truncate AttributeMapping Table
 *
 * @return void
 */
function truncateAttributeMappingTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_attribute_mapping'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_attribute_mapping'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nAttribute mapping table truncated.";
    } else {
        echo "\nAttribute mapping table not exist.";
    }
}

/**
 * Truncate ConnectorLogs Table
 *
 * @return void
 */
function truncateConnectorLogsTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_connector_logs'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_connector_logs'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nConnector logs table truncated.";
    } else {
        echo "\nConnector logs table not exist.";
    }
}

/**
 * Truncate ListingProducts Table
 *
 * @return void
 */
function truncateListingProductsTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_listing_products'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_listing_products'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nListing products table truncated.";
    } else {
        echo "\nListing products table not exist.";
    }
}

/**
 * Truncate ListingTemplate Table
 *
 * @return void
 */
function truncateListingTemplateTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_listing_template'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_listing_template'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nListing template table truncated.";
    } else {
        echo "\nListing template table not exist.";
    }
}

/**
 * Truncate MarketplaceAccount Table
 *
 * @return void
 */
function truncateMarketplaceAccountTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_marketplace_account'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_marketplace_account'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nMarketplace accounts table truncated.";
    } else {
        echo "\nMarketplace accounts table not exist.";
    }
}

/**
 * Truncate MarketplaceOrders Table
 *
 * @return void
 */
function truncateMarketplaceOrdersTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_marketplace_orders'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_marketplace_orders'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nMarketplace orders table truncated.";
    } else {
        echo "\nMarketplace orders table not exist.";
    }
}

/**
 * Truncate MarketplacePolicies Table
 *
 * @return void
 */
function truncateMarketplacePoliciesTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_marketplace_policies'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_marketplace_policies'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nMarketplace policies table truncated.";
    } else {
        echo "\nMarketplace policies table not exist.";
    }
}

/**
 * Truncate OnboardingData Table
 *
 * @return void
 */
function truncateOnboardingDataTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_onboarding_data'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_onboarding_data'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nOnboarding data table truncated.";
    } else {
        echo "\nOnboarding data table not exist.";
    }
}

/**
 * Truncate ProductChange Table
 *
 * @return void
 */
function truncateProductChangeTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_product_change'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_product_change'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nProduct change log table truncated.";
    } else {
        echo "\nProduct change log table not exist.";
    }
}

/**
 * Truncate Queue Table
 *
 * @return void
 */
function truncateQueueTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_queue'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_queue'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nQueue table truncated.";
    } else {
        echo "\nQueue table not exist.";
    }
}

/**
 * Truncate SynchronizationFeeds Table
 *
 * @return void
 */
function truncateSynchronizationFeedsTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_synchronization_feeds'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_synchronization_feeds'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nSynchronization feeds table truncated.";
    } else {
        echo "\nSynchronization feeds table not exist.";
    }
}

/**
 * Truncate Marketplaces Table
 *
 * @return void
 */
function truncateMarketplacesTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_marketplaces'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('ced_marketplaces'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nMarketplaces table truncated.";
    } else {
        echo "\nMarketplaces table not exist.";
    }

}

/**
 * Truncate Flag Table
 *
 * @param $connection
 * @return void
 */
function truncateFlagTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('flag'))) {
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
        $connection->getConnection()->truncateTable($connection->getTableName('flag'));
        $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
        echo "\nFlag table truncated.";
    } else {
        echo "\nFlag table not exist.";
    }
}

/**
 * Remove patch
 *
 * @param $connection
 * @return void
 */
function removePatch($connection)
{
    $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 0');
    $connection->getConnection()->delete(
        $connection->getTableName('patch_list'),
        ["`patch_name` LIKE '%AddDefaultPolicies%'"]
    );
    echo "\nAddDefaultPolicies patch removed successfully.";

    $connection->getConnection()->delete(
        $connection->getTableName('patch_list'),
        ["`patch_name` LIKE '%AddMarketplaceData%'"]
    );
    echo "\nAddMarketplaceData patch removed successfully.";
    $connection->getConnection()->query('SET FOREIGN_KEY_CHECKS = 1');
}

/**
 * Get Marketplace ID
 *
 * @return false
 */
function getMarketplaceId($connection, $marketplaceCode)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_marketplaces'))) {
        $sql = $connection->getConnection()->select()->from('ced_marketplaces')->where('marketplace_code =?', $marketplaceCode);
        $result = $connection->getConnection()->fetchRow($sql);
        return $result['id'] ?? false;
    } else {
        echo "\nMarketplaces table not exist.";
    }
    return false;
}

/**
 * Truncate product linking table
 *
 * @param $connection
 * @return void
 */
function truncateProductLinkingTable($connection)
{
    if ($connection->getConnection()->isTableExists($connection->getTableName('ced_product_linking'))) {
        $connection->getConnection()->truncateTable($connection->getTableName('ced_product_linking'));
        echo "\nProduct Linking table truncated.";
    } else {
        echo "\nProduct Linking table not exist.";
    }
}
