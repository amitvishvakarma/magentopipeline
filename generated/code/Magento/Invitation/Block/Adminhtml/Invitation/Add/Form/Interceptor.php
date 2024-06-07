<?php
namespace Magento\Invitation\Block\Adminhtml\Invitation\Add\Form;

/**
 * Interceptor class for @see \Magento\Invitation\Block\Adminhtml\Invitation\Add\Form
 */
class Interceptor extends \Magento\Invitation\Block\Adminhtml\Invitation\Add\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $store, \Magento\Customer\Api\GroupManagementInterface $customerGroupManagement, \Magento\Framework\Convert\DataObject $objectConverter, array $data = [], ?\Magento\Customer\Model\Customer\Attribute\Source\GroupSourceLoggedInOnlyInterface $groupSourceForLoggedInCustomers = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $store, $customerGroupManagement, $objectConverter, $data, $groupSourceForLoggedInCustomers);
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
