<?php
namespace Magento\AsyncOrder\Model\OrderManagement;

/**
 * Interceptor class for @see \Magento\AsyncOrder\Model\OrderManagement
 */
class Interceptor extends \Magento\AsyncOrder\Model\OrderManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AsyncOrder\Api\Data\OrderInterfaceFactory $orderFactory, \Magento\AsyncOrder\Model\ResourceModel\Order $orderResourceModel, \Magento\Checkout\Model\Session $checkoutSession, \Psr\Log\LoggerInterface $logger, \Magento\SalesSequence\Model\Manager $sequenceManager, \Magento\AsyncOrder\Model\Quote\Address\Validator $addressValidator, \Magento\Quote\Model\Quote\Address\ToOrderAddress $quoteAddressToOrderAddress, array $paymentMethods)
    {
        $this->___init();
        parent::__construct($orderFactory, $orderResourceModel, $checkoutSession, $logger, $sequenceManager, $addressValidator, $quoteAddressToOrderAddress, $paymentMethods);
    }

    /**
     * {@inheritdoc}
     */
    public function placeInitialOrder(\Magento\AsyncOrder\Model\Quote $quote, ?string $email = null) : \Magento\AsyncOrder\Api\Data\OrderInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'placeInitialOrder');
        return $pluginInfo ? $this->___callPlugins('placeInitialOrder', func_get_args(), $pluginInfo) : parent::placeInitialOrder($quote, $email);
    }
}
