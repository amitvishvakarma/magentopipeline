<?php
namespace Magento\Sales\CustomerData\LastOrderedItems;

/**
 * Interceptor class for @see \Magento\Sales\CustomerData\LastOrderedItems
 */
class Interceptor extends \Magento\Sales\CustomerData\LastOrderedItems implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Order\CollectionFactoryInterface $orderCollectionFactory, \Magento\Sales\Model\Order\Config $orderConfig, \Magento\Customer\Model\Session $customerSession, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($orderCollectionFactory, $orderConfig, $customerSession, $stockRegistry, $storeManager, $productRepository, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionData() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSectionData');
        return $pluginInfo ? $this->___callPlugins('getSectionData', func_get_args(), $pluginInfo) : parent::getSectionData();
    }
}
