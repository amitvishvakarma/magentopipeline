<?php
namespace Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\Shippingmethod;

/**
 * Interceptor class for @see \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\Shippingmethod
 */
class Interceptor extends \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\Shippingmethod implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Tax\Helper\Data $taxData, \Magento\Rma\Helper\Data $rmaData, \Magento\Rma\Model\ShippingFactory $shippingFactory, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $json = null, ?\Magento\Shipping\Helper\Carrier $carrierHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $taxData, $rmaData, $shippingFactory, $priceCurrency, $data, $json, $carrierHelper);
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
