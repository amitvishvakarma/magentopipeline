<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Category\Template\SelectProducts;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Category\Template\SelectProducts
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Category\Template\SelectProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Ced\ConnectBase\Model\ListingTemplateFactory $listingTemplate, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Ced\ConnectBase\Model\ResourceModel\Product\ConditionsToCollectionApplier $conditionsToCollectionApplier, \Ced\ConnectBase\Api\ListingTemplateRepositoryInterface $listingTemplateRepository, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, \Ced\ConnectBase\Service\Account $accountService, \Ced\ConnectBase\Model\ResourceModel\Product\CollectionFactory $listingProducts, \Ced\ConnectBase\Helper\Data $helperData, \Ced\ConnectBase\Service\Policy $policyService, \Ced\ConnectBase\Service\Marketplace $marketplaceService)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $collectionFactory, $listingTemplate, $dataPersistor, $conditionsToCollectionApplier, $listingTemplateRepository, $jsonSerializer, $accountService, $listingProducts, $helperData, $policyService, $marketplaceService);
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
