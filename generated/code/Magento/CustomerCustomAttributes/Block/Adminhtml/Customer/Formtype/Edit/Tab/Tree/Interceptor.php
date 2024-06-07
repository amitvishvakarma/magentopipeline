<?php
namespace Magento\CustomerCustomAttributes\Block\Adminhtml\Customer\Formtype\Edit\Tab\Tree;

/**
 * Interceptor class for @see \Magento\CustomerCustomAttributes\Block\Adminhtml\Customer\Formtype\Edit\Tab\Tree
 */
class Interceptor extends \Magento\CustomerCustomAttributes\Block\Adminhtml\Customer\Formtype\Edit\Tab\Tree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\Registry $registry, \Magento\Eav\Model\ResourceModel\Form\Fieldset\CollectionFactory $fieldsetFactory, \Magento\Eav\Model\ResourceModel\Form\Element\CollectionFactory $elementsFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $registry, $fieldsetFactory, $elementsFactory, $data);
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
