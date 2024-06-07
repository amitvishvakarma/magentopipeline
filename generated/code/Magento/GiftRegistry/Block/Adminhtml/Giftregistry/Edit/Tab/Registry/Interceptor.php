<?php
namespace Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Tab\Registry;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Tab\Registry
 */
class Interceptor extends \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Tab\Registry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Config\Model\Config\Source\Yesno $sourceYesNo, \Magento\GiftRegistry\Model\Type $defaultTypeInstance, \Magento\GiftRegistry\Model\Attribute\Config $attributeConfig, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $sourceYesNo, $defaultTypeInstance, $attributeConfig, $data, $jsonHelper);
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
