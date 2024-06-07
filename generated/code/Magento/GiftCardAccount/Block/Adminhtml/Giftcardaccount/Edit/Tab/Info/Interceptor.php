<?php
namespace Magento\GiftCardAccount\Block\Adminhtml\Giftcardaccount\Edit\Tab\Info;

/**
 * Interceptor class for @see \Magento\GiftCardAccount\Block\Adminhtml\Giftcardaccount\Edit\Tab\Info
 */
class Interceptor extends \Magento\GiftCardAccount\Block\Adminhtml\Giftcardaccount\Edit\Tab\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Store\Model\System\Store $systemStore, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $jsonEncoder, $systemStore, $data);
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
