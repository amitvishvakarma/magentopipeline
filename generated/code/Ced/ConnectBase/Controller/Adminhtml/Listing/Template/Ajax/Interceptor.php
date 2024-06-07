<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Listing\Template\Ajax;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Listing\Template\Ajax
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Listing\Template\Ajax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Helper\Template $templateHelper, \Ced\ConnectBase\Api\ListingTemplateRepositoryInterface $listingTemplateRepository, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate $listingTemplateResource, \Ced\ConnectBase\Service\Account $accountService)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $templateHelper, $listingTemplateRepository, $listingTemplateResource, $accountService);
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
