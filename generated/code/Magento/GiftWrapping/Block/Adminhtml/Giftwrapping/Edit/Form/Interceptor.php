<?php
namespace Magento\GiftWrapping\Block\Adminhtml\Giftwrapping\Edit\Form;

/**
 * Interceptor class for @see \Magento\GiftWrapping\Block\Adminhtml\Giftwrapping\Edit\Form
 */
class Interceptor extends \Magento\GiftWrapping\Block\Adminhtml\Giftwrapping\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Locale\CurrencyInterface $currency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $systemStore, $directoryHelper, $currency, $data);
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
