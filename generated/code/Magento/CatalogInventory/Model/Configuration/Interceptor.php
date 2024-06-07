<?php
namespace Magento\CatalogInventory\Model\Configuration;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Configuration
 */
class Interceptor extends \Magento\CatalogInventory\Model\Configuration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ProductTypes\ConfigInterface $config, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\CatalogInventory\Helper\Minsaleqty $minsaleqtyHelper, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($config, $scopeConfig, $minsaleqtyHelper, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function isShowOutOfStock($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShowOutOfStock');
        return $pluginInfo ? $this->___callPlugins('isShowOutOfStock', func_get_args(), $pluginInfo) : parent::isShowOutOfStock($store);
    }
}
