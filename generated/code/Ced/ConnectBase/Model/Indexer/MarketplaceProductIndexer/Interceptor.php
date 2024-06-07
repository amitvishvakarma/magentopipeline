<?php
namespace Ced\ConnectBase\Model\Indexer\MarketplaceProductIndexer;

/**
 * Interceptor class for @see \Ced\ConnectBase\Model\Indexer\MarketplaceProductIndexer
 */
class Interceptor extends \Ced\ConnectBase\Model\Indexer\MarketplaceProductIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $catalogCollection, \Ced\ConnectBase\Model\ResourceModel\Product\CollectionFactory $marketplaceProductCollection, \Magento\Framework\App\ResourceConnection $resourceConnection, \Ced\ConnectBase\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($indexerRegistry, $catalogCollection, $marketplaceProductCollection, $resourceConnection, $helperData);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        return $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($id);
    }
}
