<?php
namespace Ced\ConnectBase\Block\Adminhtml\Order\View;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Order\View
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Order\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Service\Order $orderService, \Magento\Backend\Block\Widget\Context $context, \Ced\ConnectBase\Service\CustomRegistry $registry, \Magento\Directory\Block\Data $directoryBlock, \Magento\Framework\Serialize\Serializer\Json $jsonHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($orderService, $context, $registry, $directoryBlock, $jsonHelper, $data);
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