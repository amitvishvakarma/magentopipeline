<?php
namespace Ced\ConnectBase\Block\Adminhtml\Policies;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Policies
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Policies implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Ced\ConnectBase\Model\Source\Policies\Options $policiesOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $policiesOptions, $data);
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
