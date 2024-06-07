<?php
namespace Magento\Sales\Model\Order\OrderCustomerExtractor;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\OrderCustomerExtractor
 */
class Interceptor extends \Magento\Sales\Model\Order\OrderCustomerExtractor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressFactory, \Magento\Customer\Api\Data\RegionInterfaceFactory $regionFactory, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerFactory, \Magento\Quote\Api\Data\AddressInterfaceFactory $quoteAddressFactory)
    {
        $this->___init();
        parent::__construct($orderRepository, $customerRepository, $objectCopyService, $addressFactory, $regionFactory, $customerFactory, $quoteAddressFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function extract(int $orderId) : \Magento\Customer\Api\Data\CustomerInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'extract');
        return $pluginInfo ? $this->___callPlugins('extract', func_get_args(), $pluginInfo) : parent::extract($orderId);
    }
}
