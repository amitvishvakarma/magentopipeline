<?php
namespace Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\Templates;

/**
 * Interceptor class for @see \Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\Templates
 */
class Interceptor extends \Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\Templates implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Source\Email\TemplateFactory $templateFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $templateFactory, $data);
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
