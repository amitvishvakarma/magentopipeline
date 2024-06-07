<?php
namespace Ced\ConnectBase\Service\Quote;

/**
 * Proxy class for @see \Ced\ConnectBase\Service\Quote
 */
class Proxy extends \Ced\ConnectBase\Service\Quote implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Ced\ConnectBase\Service\Quote
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Ced\\ConnectBase\\Service\\Quote', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Ced\ConnectBase\Service\Quote
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function createOrder(string $orderId = '')
    {
        return $this->_getSubject()->createOrder($orderId);
    }

    /**
     * {@inheritdoc}
     */
    public function initializeQuote(array $orderData)
    {
        return $this->_getSubject()->initializeQuote($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function addProductsToQuote(array $orderData)
    {
        return $this->_getSubject()->addProductsToQuote($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreForOrder()
    {
        return $this->_getSubject()->getStoreForOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerForOrder()
    {
        return $this->_getSubject()->getCustomerForOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function addBillingInfoToQuote(array $orderData, array $modifiedOrderData = [])
    {
        return $this->_getSubject()->addBillingInfoToQuote($orderData, $modifiedOrderData);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareBillingAddress(array $orderData, array $modifiedOrderData = [])
    {
        return $this->_getSubject()->prepareBillingAddress($orderData, $modifiedOrderData);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareShippingAddress(array $orderData, array $modifiedOrderData = [])
    {
        return $this->_getSubject()->prepareShippingAddress($orderData, $modifiedOrderData);
    }

    /**
     * {@inheritdoc}
     */
    public function assignShippingPaymentInfo(array $orderData, array $modifiedOrderData = [])
    {
        return $this->_getSubject()->assignShippingPaymentInfo($orderData, $modifiedOrderData);
    }

    /**
     * {@inheritdoc}
     */
    public function implementAdditionalConfig(array $orderData)
    {
        return $this->_getSubject()->implementAdditionalConfig($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function placeOrder(array $orderData)
    {
        return $this->_getSubject()->placeOrder($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function registerShippingAmount(array $orderData)
    {
        return $this->_getSubject()->registerShippingAmount($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function registerShippingTaxPercentage(array $orderData)
    {
        return $this->_getSubject()->registerShippingTaxPercentage($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function registerShippingMethod(array $orderData)
    {
        return $this->_getSubject()->registerShippingMethod($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function getSalesOrderData(string $magentoOrderId)
    {
        return $this->_getSubject()->getSalesOrderData($magentoOrderId);
    }

    /**
     * {@inheritdoc}
     */
    public function uploadSourceOrderData(\Ced\ConnectBase\Model\Order $order, $salesOrder)
    {
        return $this->_getSubject()->uploadSourceOrderData($order, $salesOrder);
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxRateForCurrentOrder(array $orderData)
    {
        return $this->_getSubject()->getTaxRateForCurrentOrder($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderCountryForCurrentOrder(array $orderData)
    {
        return $this->_getSubject()->getOrderCountryForCurrentOrder($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function configureTaxForOrder(array $orderData)
    {
        return $this->_getSubject()->configureTaxForOrder($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCodeForOrder(array $orderData)
    {
        return $this->_getSubject()->getCurrencyCodeForOrder($orderData);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountForItem($quoteItem, $orderItem)
    {
        return $this->_getSubject()->setDiscountForItem($quoteItem, $orderItem);
    }

    /**
     * {@inheritdoc}
     */
    public function processFulfilledOrder(\Ced\ConnectBase\Model\Order $order, $salesOrder)
    {
        return $this->_getSubject()->processFulfilledOrder($order, $salesOrder);
    }
}
