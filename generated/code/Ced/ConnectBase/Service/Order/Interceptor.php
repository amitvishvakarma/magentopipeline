<?php
namespace Ced\ConnectBase\Service\Order;

/**
 * Interceptor class for @see \Ced\ConnectBase\Service\Order
 */
class Interceptor extends \Ced\ConnectBase\Service\Order implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Model\OrderFactory $orderModelFactory, \Ced\ConnectBase\Model\ResourceModel\OrderFactory $orderResourceModelFactory, \Ced\ConnectBase\Model\ResourceModel\Order\CollectionFactory $orderCollFactory, \Ced\ConnectBase\Model\Source\Policies\Order\MarketplaceOrderStatusOptions $marketplaceOrderStatusOptions, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Ced\ConnectBase\Service\Account $accountService, \Ced\ConnectBase\Service\Api $apiService, \Ced\ConnectBase\Service\Policy $policyService, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer)
    {
        $this->___init();
        parent::__construct($orderModelFactory, $orderResourceModelFactory, $orderCollFactory, $marketplaceOrderStatusOptions, $marketplaceService, $accountService, $apiService, $policyService, $jsonSerializer);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAcceptOrRejectData(\Ced\ConnectBase\Model\Order $order, bool $orderToCancel = false, array $requestParams = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareAcceptOrRejectData');
        return $pluginInfo ? $this->___callPlugins('prepareAcceptOrRejectData', func_get_args(), $pluginInfo) : parent::prepareAcceptOrRejectData($order, $orderToCancel, $requestParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getShipOrderRequestData(array $requestData = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShipOrderRequestData');
        return $pluginInfo ? $this->___callPlugins('getShipOrderRequestData', func_get_args(), $pluginInfo) : parent::getShipOrderRequestData($requestData);
    }

    /**
     * {@inheritdoc}
     */
    public function checkIfFulfilledByMarketplace($order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkIfFulfilledByMarketplace');
        return $pluginInfo ? $this->___callPlugins('checkIfFulfilledByMarketplace', func_get_args(), $pluginInfo) : parent::checkIfFulfilledByMarketplace($order);
    }
}
