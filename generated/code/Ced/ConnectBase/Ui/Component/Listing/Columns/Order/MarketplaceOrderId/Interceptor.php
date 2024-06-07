<?php
namespace Ced\ConnectBase\Ui\Component\Listing\Columns\Order\MarketplaceOrderId;

/**
 * Interceptor class for @see \Ced\ConnectBase\Ui\Component\Listing\Columns\Order\MarketplaceOrderId
 */
class Interceptor extends \Ced\ConnectBase\Ui\Component\Listing\Columns\Order\MarketplaceOrderId implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMarketplaceOrderViewUrl($rowData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMarketplaceOrderViewUrl');
        return $pluginInfo ? $this->___callPlugins('getMarketplaceOrderViewUrl', func_get_args(), $pluginInfo) : parent::getMarketplaceOrderViewUrl($rowData);
    }
}
