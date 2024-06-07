<?php
namespace Magento\CatalogStaging\Model\Product\Retriever;

/**
 * Interceptor class for @see \Magento\CatalogStaging\Model\Product\Retriever
 */
class Interceptor extends \Magento\CatalogStaging\Model\Product\Retriever implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
    {
        $this->___init();
        parent::__construct($productRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntity');
        return $pluginInfo ? $this->___callPlugins('getEntity', func_get_args(), $pluginInfo) : parent::getEntity($entityId);
    }
}
