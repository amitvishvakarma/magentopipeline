<?php
namespace Ced\ConnectBase\Block\Adminhtml\Listing\Template\CategoryTree;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Listing\Template\CategoryTree
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Listing\Template\CategoryTree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Model\ListingTemplateFactory $templateModel, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate $templateResource, \Ced\ConnectBase\Service\Api $apiService, \Ced\ConnectBase\Service\Account $accountService, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($templateModel, $templateResource, $apiService, $accountService, $marketplaceService, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryNoticeHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryNoticeHtml');
        return $pluginInfo ? $this->___callPlugins('getCategoryNoticeHtml', func_get_args(), $pluginInfo) : parent::getCategoryNoticeHtml();
    }
}
