<?php
namespace Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Attribute\Type\Select;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Attribute\Type\Select
 */
class Interceptor extends \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Attribute\Type\Select implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Backend\Block\Widget\Form\Element\ElementCreator $creator = null)
    {
        $this->___init();
        parent::__construct($context, $data, $creator);
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
