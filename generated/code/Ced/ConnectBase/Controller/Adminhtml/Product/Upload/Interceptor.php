<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Product\Upload;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Product\Upload
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Product\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Magento\Ui\Component\MassAction\Filter $filter, \Ced\ConnectBase\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Ced\ConnectBase\Api\MarketplaceSyncInterface $marketplaceSync, \Ced\ConnectBase\Api\ListingTemplateRepositoryInterface $listingTemplateRepository, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, \Ced\ConnectBase\Helper\Template $templateHelper, \Ced\ConnectBase\Helper\Queue $queueHelper, \Ced\ConnectBase\Helper\Products $productsHelper, \Magento\Eav\Api\AttributeRepositoryInterface $attributeRepository)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $filter, $collectionFactory, $marketplaceSync, $listingTemplateRepository, $jsonSerializer, $templateHelper, $queueHelper, $productsHelper, $attributeRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
