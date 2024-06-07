<?php
namespace Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\ShippingAddress;

/**
 * Interceptor class for @see \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\ShippingAddress
 */
class Interceptor extends \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\ShippingAddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Model\Order\Address\Renderer $addressRenderer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $addressRenderer, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
