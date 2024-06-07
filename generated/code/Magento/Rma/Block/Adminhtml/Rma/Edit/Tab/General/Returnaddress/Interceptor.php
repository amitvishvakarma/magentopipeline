<?php
namespace Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\Returnaddress;

/**
 * Interceptor class for @see \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\Returnaddress
 */
class Interceptor extends \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\Returnaddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Rma\Helper\Data $rmaData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $rmaData, $data);
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
