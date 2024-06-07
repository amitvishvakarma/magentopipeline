<?php
namespace Magento\CatalogStaging\Ui\DataProvider\ProductDataProvider;

/**
 * Interceptor class for @see \Magento\CatalogStaging\Ui\DataProvider\ProductDataProvider
 */
class Interceptor extends \Magento\CatalogStaging\Ui\DataProvider\ProductDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, $addFieldStrategies, $addFilterStrategies, \Magento\Framework\App\RequestInterface $request, \Magento\Staging\Model\VersionManager $versionManager, array $meta = [], array $data = [])
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $addFieldStrategies, $addFilterStrategies, $request, $versionManager, $meta, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }
}
