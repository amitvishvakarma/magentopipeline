<?php
namespace Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Attribute\Type\Country;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Attribute\Type\Country
 */
class Interceptor extends \Magento\GiftRegistry\Block\Adminhtml\Giftregistry\Edit\Attribute\Type\Country implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Config\Model\Config\Source\Yesno $sourceYesNo, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $sourceYesNo, $data);
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
