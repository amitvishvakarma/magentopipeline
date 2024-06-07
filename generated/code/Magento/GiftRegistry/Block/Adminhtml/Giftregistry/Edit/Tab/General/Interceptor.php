<?php
namespace Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Tab\General;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Tab\General
 */
class Interceptor extends \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Tab\General implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Source\Yesno $sourceYesNo, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $sourceYesNo, $data);
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
