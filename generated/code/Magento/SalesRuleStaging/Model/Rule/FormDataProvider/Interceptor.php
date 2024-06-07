<?php
namespace Magento\SalesRuleStaging\Model\Rule\FormDataProvider;

/**
 * Interceptor class for @see \Magento\SalesRuleStaging\Model\Rule\FormDataProvider
 */
class Interceptor extends \Magento\SalesRuleStaging\Model\Rule\FormDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\SalesRule\Model\ResourceModel\Rule\CollectionFactory $collectionFactory, \Magento\Framework\Registry $registry, \Magento\SalesRule\Model\Rule\Metadata\ValueProvider $metadataValueProvider, \Magento\Staging\Model\Entity\DataProvider\MetadataProvider $metaDataProvider, \Magento\SalesRule\Model\RuleFactory $salesRuleFactory, \Magento\Framework\App\RequestInterface $request, array $meta = [], array $data = [], array $ignoredFields = [], ?\Magento\Staging\Model\VersionManager $versionManager = null, ?\Magento\Staging\Api\UpdateRepositoryInterface $updateRepository = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $registry, $metadataValueProvider, $metaDataProvider, $salesRuleFactory, $request, $meta, $data, $ignoredFields, $versionManager, $updateRepository);
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
