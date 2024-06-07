<?php
namespace Ced\ConnectBase\Model\Source\Policies\Order\MarketplaceOrderStatusOptions;

/**
 * Interceptor class for @see \Ced\ConnectBase\Model\Source\Policies\Order\MarketplaceOrderStatusOptions
 */
class Interceptor extends \Ced\ConnectBase\Model\Source\Policies\Order\MarketplaceOrderStatusOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }

    /**
     * {@inheritdoc}
     */
    public function getDeliveredStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDeliveredStatus');
        return $pluginInfo ? $this->___callPlugins('getDeliveredStatus', func_get_args(), $pluginInfo) : parent::getDeliveredStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getCancelledStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCancelledStatus');
        return $pluginInfo ? $this->___callPlugins('getCancelledStatus', func_get_args(), $pluginInfo) : parent::getCancelledStatus();
    }
}
