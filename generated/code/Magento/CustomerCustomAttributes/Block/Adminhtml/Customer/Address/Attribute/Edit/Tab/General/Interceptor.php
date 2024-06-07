<?php
namespace Magento\CustomerCustomAttributes\Block\Adminhtml\Customer\Address\Attribute\Edit\Tab\General;

/**
 * Interceptor class for @see \Magento\CustomerCustomAttributes\Block\Adminhtml\Customer\Address\Attribute\Edit\Tab\General
 */
class Interceptor extends \Magento\CustomerCustomAttributes\Block\Adminhtml\Customer\Address\Attribute\Edit\Tab\General implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Eav\Helper\Data $eavData, \Magento\Config\Model\Config\Source\YesnoFactory $yesnoFactory, \Magento\Eav\Model\Adminhtml\System\Config\Source\InputtypeFactory $inputTypeFactory, \Magento\Eav\Block\Adminhtml\Attribute\PropertyLocker $propertyLocker, \Magento\CustomerCustomAttributes\Helper\Data $customerData, array $data = [], ?\Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $extensionValidator = null, ?\Magento\Customer\Model\Config\Source\FilterConditionType $filterConditionType = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $eavData, $yesnoFactory, $inputTypeFactory, $propertyLocker, $customerData, $data, $extensionValidator, $filterConditionType);
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
