<?php
namespace Magento\VisualMerchandiser\Model\Sorting\OutStockBottom;

/**
 * Interceptor class for @see \Magento\VisualMerchandiser\Model\Sorting\OutStockBottom
 */
class Interceptor extends \Magento\VisualMerchandiser\Model\Sorting\OutStockBottom implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, ?\Magento\Catalog\Model\Indexer\Product\Price\DimensionCollectionFactory $dimensionCollectionFactory = null, ?\Magento\Framework\Indexer\ScopeResolver\IndexScopeResolver $indexScopeResolver = null, ?\Magento\Framework\Indexer\DimensionFactory $dimensionFactory = null, ?\Magento\Store\Api\WebsiteRepositoryInterface $websiteRepository = null, ?\Magento\Catalog\Model\Indexer\Product\Price\PriceTableResolver $priceTableResolver = null)
    {
        $this->___init();
        parent::__construct($moduleManager, $scopeConfig, $dimensionCollectionFactory, $indexScopeResolver, $dimensionFactory, $websiteRepository, $priceTableResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function sort(\Magento\Catalog\Model\ResourceModel\Product\Collection $collection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sort');
        return $pluginInfo ? $this->___callPlugins('sort', func_get_args(), $pluginInfo) : parent::sort($collection);
    }
}
