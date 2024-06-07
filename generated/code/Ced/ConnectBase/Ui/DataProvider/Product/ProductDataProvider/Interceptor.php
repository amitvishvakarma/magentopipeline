<?php
namespace Ced\ConnectBase\Ui\DataProvider\Product\ProductDataProvider;

/**
 * Interceptor class for @see \Ced\ConnectBase\Ui\DataProvider\Product\ProductDataProvider
 */
class Interceptor extends \Ced\ConnectBase\Ui\DataProvider\Product\ProductDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Framework\App\RequestInterface $request, \Magento\Rule\Model\Condition\Sql\Builder $sqlBuilder, \Ced\ConnectBase\Model\ListingTemplateFactory $listingTemplate, \Ced\ConnectBase\Model\ResourceModel\Product\ConditionsToCollectionApplier $conditionsToCollectionApplier, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Ced\ConnectBase\Helper\Data $helperData, \Ced\ConnectBase\Service\Account $accountService, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Ced\ConnectBase\Service\Policy $policyService, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, array $addFieldStrategies = [], array $addFilterStrategies = [], array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $modifiersPool = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $request, $sqlBuilder, $listingTemplate, $conditionsToCollectionApplier, $dataPersistor, $helperData, $accountService, $marketplaceService, $policyService, $jsonSerializer, $addFieldStrategies, $addFilterStrategies, $meta, $data, $modifiersPool);
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
