<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Listing\Template\MassStatus;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Listing\Template\MassStatus
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Listing\Template\MassStatus implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Magento\Ui\Component\MassAction\Filter $filter, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate\CollectionFactory $collectionFactory, \Ced\ConnectBase\Model\ListingTemplateFactory $listingTemplateModel, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate $listingTemplateResource)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $filter, $collectionFactory, $listingTemplateModel, $listingTemplateResource);
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
