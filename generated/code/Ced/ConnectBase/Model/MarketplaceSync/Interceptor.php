<?php
namespace Ced\ConnectBase\Model\MarketplaceSync;

/**
 * Interceptor class for @see \Ced\ConnectBase\Model\MarketplaceSync
 */
class Interceptor extends \Ced\ConnectBase\Model\MarketplaceSync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Serialize\Serializer\Json $json, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\ConfigurableProduct\Api\LinkManagementInterface $linkManagement, \Magento\Store\Model\StoreManagerInterface $storeManager, \Ced\ConnectBase\Model\ProductFactory $listingProductsModel, \Ced\ConnectBase\Model\ResourceModel\Product $listingProductsResource, \Ced\ConnectBase\Model\PoliciesFactory $policiesModel, \Ced\ConnectBase\Model\ResourceModel\Policies $policiesResource, \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Catalog\Api\ProductAttributeMediaGalleryManagementInterface $mediaGalleryManagement, \Ced\ConnectBase\Service\Config $config, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Ced\ConnectBase\Service\Api $apiService, \Ced\ConnectBase\Helper\Data $marketplaceHelper, \Ced\ConnectBase\Helper\Products $productsHelper, \Ced\ConnectBase\Service\Account $accountService, \Magento\Framework\Filesystem\Driver\File $fileDriver, \Magento\Framework\Filesystem $filesystem, \Ced\ConnectBase\Model\ProductLinkingFactory $productLinkingModel, \Ced\ConnectBase\Model\ResourceModel\ProductLinking $productLinkingResource, \Magento\Cms\Model\Template\FilterProvider $filterProvider)
    {
        $this->___init();
        parent::__construct($json, $productRepository, $linkManagement, $storeManager, $listingProductsModel, $listingProductsResource, $policiesModel, $policiesResource, $stockItemRepository, $mediaGalleryManagement, $config, $marketplaceService, $apiService, $marketplaceHelper, $productsHelper, $accountService, $fileDriver, $filesystem, $productLinkingModel, $productLinkingResource, $filterProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function uploadProductsOnMarketplace(array $products)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'uploadProductsOnMarketplace');
        return $pluginInfo ? $this->___callPlugins('uploadProductsOnMarketplace', func_get_args(), $pluginInfo) : parent::uploadProductsOnMarketplace($products);
    }
}
