<?php
namespace Ced\ConnectTikTok\Controller\Adminhtml\Listing\Template\Save;

/**
 * Interceptor class for @see \Ced\ConnectTikTok\Controller\Adminhtml\Listing\Template\Save
 */
class Interceptor extends \Ced\ConnectTikTok\Controller\Adminhtml\Listing\Template\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, \Ced\ConnectBase\Model\Source\Categories $categoriesSource, \Ced\ConnectBase\Model\ListingTemplateFactory $listingTemplateModel, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate $listingTemplateResource, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $jsonSerializer, $categoriesSource, $listingTemplateModel, $listingTemplateResource, $eventManager);
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
