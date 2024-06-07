<?php
namespace Ced\ConnectTikTok\Controller\Adminhtml\ProductLinking\Ajax;

/**
 * Interceptor class for @see \Ced\ConnectTikTok\Controller\Adminhtml\ProductLinking\Ajax
 */
class Interceptor extends \Ced\ConnectTikTok\Controller\Adminhtml\ProductLinking\Ajax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Helper\Template $templateHelper, \Ced\ConnectBase\Model\ListingTemplateFactory $templateModel, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate $templateResource, \Ced\ConnectBase\Model\ResourceModel\ProductLinking\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $templateHelper, $templateModel, $templateResource, $collectionFactory);
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
