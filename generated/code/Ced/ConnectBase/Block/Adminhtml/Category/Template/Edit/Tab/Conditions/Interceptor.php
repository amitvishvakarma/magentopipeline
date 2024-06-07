<?php
namespace Ced\ConnectBase\Block\Adminhtml\Category\Template\Edit\Tab\Conditions;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Category\Template\Edit\Tab\Conditions
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Category\Template\Edit\Tab\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Model\ListingTemplateFactory $listingTemplateModel, \Ced\ConnectBase\Model\ResourceModel\ListingTemplate $listingTemplateResource, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Rule\Block\Conditions $conditions, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $rendererFieldset, array $data = [])
    {
        $this->___init();
        parent::__construct($listingTemplateModel, $listingTemplateResource, $dataPersistor, $context, $registry, $formFactory, $conditions, $rendererFieldset, $data);
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
