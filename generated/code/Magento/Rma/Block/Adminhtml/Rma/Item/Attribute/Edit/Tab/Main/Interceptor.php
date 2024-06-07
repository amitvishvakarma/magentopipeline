<?php
namespace Magento\Rma\Block\Adminhtml\Rma\Item\Attribute\Edit\Tab\Main;

/**
 * Interceptor class for @see \Magento\Rma\Block\Adminhtml\Rma\Item\Attribute\Edit\Tab\Main
 */
class Interceptor extends \Magento\Rma\Block\Adminhtml\Rma\Item\Attribute\Edit\Tab\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Eav\Helper\Data $eavData, \Magento\Config\Model\Config\Source\YesnoFactory $yesnoFactory, \Magento\Eav\Model\Adminhtml\System\Config\Source\InputtypeFactory $inputTypeFactory, \Magento\Eav\Block\Adminhtml\Attribute\PropertyLocker $propertyLocker, \Magento\CustomAttributeManagement\Helper\Data $attributeHelper, \Magento\Rma\Helper\Eav $rmaEav, array $data = [], ?\Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $extensionValidator = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $eavData, $yesnoFactory, $inputTypeFactory, $propertyLocker, $attributeHelper, $rmaEav, $data, $extensionValidator);
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
