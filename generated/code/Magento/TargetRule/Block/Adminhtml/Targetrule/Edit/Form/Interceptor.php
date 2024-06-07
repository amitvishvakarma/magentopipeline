<?php
namespace Magento\TargetRule\Block\Adminhtml\Targetrule\Edit\Form;

/**
 * Interceptor class for @see \Magento\TargetRule\Block\Adminhtml\Targetrule\Edit\Form
 */
class Interceptor extends \Magento\TargetRule\Block\Adminhtml\Targetrule\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Backend\Helper\Data $backendData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $formFactory, $backendData, $data);
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
