<?php
namespace Magento\BundleStaging\Ui\DataProvider\Product\BundleDataProvider;

/**
 * Interceptor class for @see \Magento\BundleStaging\Ui\DataProvider\Product\BundleDataProvider
 */
class Interceptor extends \Magento\BundleStaging\Ui\DataProvider\Product\BundleDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, $addFieldStrategies, $addFilterStrategies, \Magento\Framework\App\RequestInterface $request, \Magento\Staging\Model\VersionManager $versionManager, \Magento\Bundle\Helper\Data $dataHelper, array $meta = [], array $data = [])
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $addFieldStrategies, $addFilterStrategies, $request, $versionManager, $dataHelper, $meta, $data);
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
