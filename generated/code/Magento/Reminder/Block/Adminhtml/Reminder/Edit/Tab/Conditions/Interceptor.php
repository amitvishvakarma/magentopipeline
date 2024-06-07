<?php
namespace Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\Conditions;

/**
 * Interceptor class for @see \Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\Conditions
 */
class Interceptor extends \Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $fieldsetBlock, \Magento\Rule\Block\Conditions $conditionsBlock, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $fieldsetBlock, $conditionsBlock, $data);
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
