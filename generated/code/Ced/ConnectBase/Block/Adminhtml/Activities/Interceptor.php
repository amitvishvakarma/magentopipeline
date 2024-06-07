<?php
namespace Ced\ConnectBase\Block\Adminhtml\Activities;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Activities
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Activities implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Service\Api $apiService, \Ced\ConnectBase\Service\Account $accountService, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($apiService, $accountService, $marketplaceService, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
