<?php
namespace Magento\GiftRegistry\Block\Adminhtml\Customer\Edit\Form;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Block\Adminhtml\Customer\Edit\Form
 */
class Interceptor extends \Magento\GiftRegistry\Block\Adminhtml\Customer\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\GiftRegistry\Model\TypeFactory $giftRegistryTypeFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $customerFactory, $giftRegistryTypeFactory, $data);
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
