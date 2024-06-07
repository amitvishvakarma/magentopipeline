<?php
namespace Ced\ConnectBase\Block\Adminhtml\Attribute\Fetch;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Attribute\Fetch
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Attribute\Fetch implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Ced\ConnectBase\Service\CustomRegistry $customRegistry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $customRegistry, $data);
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
