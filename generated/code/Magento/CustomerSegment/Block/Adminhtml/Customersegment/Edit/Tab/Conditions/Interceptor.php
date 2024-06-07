<?php
namespace Magento\CustomerSegment\Block\Adminhtml\Customersegment\Edit\Tab\Conditions;

/**
 * Interceptor class for @see \Magento\CustomerSegment\Block\Adminhtml\Customersegment\Edit\Tab\Conditions
 */
class Interceptor extends \Magento\CustomerSegment\Block\Adminhtml\Customersegment\Edit\Tab\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $fieldset, \Magento\Rule\Block\Conditions $conditions, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $fieldset, $conditions, $data);
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
