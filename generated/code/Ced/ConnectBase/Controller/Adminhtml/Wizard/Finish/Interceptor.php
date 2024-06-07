<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Wizard\Finish;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Wizard\Finish
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Wizard\Finish implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Service\OnBoarding $onboardingService, \Ced\ConnectBase\Service\ProductLinking $productLinkingService, \Ced\ConnectBase\Service\Policy $policyService, \Magento\Config\Model\ResourceModel\Config $resourceConfig, \Ced\ConnectBase\Service\Account $accountService, \Ced\ConnectBase\Model\ListingTemplateFactory $listingTemplateModel, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate $listingTemplateResource, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate\CollectionFactory $listingTemplateCollFactory, \Magento\Framework\App\CacheInterface $appCache)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $onboardingService, $productLinkingService, $policyService, $resourceConfig, $accountService, $listingTemplateModel, $listingTemplateResource, $listingTemplateCollFactory, $appCache);
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
