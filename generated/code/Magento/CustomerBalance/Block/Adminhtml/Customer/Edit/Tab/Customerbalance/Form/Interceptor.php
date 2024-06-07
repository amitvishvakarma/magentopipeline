<?php
namespace Magento\CustomerBalance\Block\Adminhtml\Customer\Edit\Tab\Customerbalance\Form;

/**
 * Interceptor class for @see \Magento\CustomerBalance\Block\Adminhtml\Customer\Edit\Tab\Customerbalance\Form
 */
class Interceptor extends \Magento\CustomerBalance\Block\Adminhtml\Customer\Edit\Tab\Customerbalance\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Store\Model\System\Store $systemStore, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $customerFactory, $systemStore, $data);
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
