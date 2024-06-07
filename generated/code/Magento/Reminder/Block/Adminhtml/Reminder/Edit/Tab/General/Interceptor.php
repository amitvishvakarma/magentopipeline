<?php
namespace Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\General;

/**
 * Interceptor class for @see \Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\General
 */
class Interceptor extends \Magento\Reminder\Block\Adminhtml\Reminder\Edit\Tab\General implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $store, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $store, $data);
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
