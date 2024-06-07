<?php
namespace Ced\ConnectBase\Service\Account;

/**
 * Interceptor class for @see \Ced\ConnectBase\Service\Account
 */
class Interceptor extends \Ced\ConnectBase\Service\Account implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Model\AccountFactory $accountModelFactory, \Ced\ConnectBase\Model\ResourceModel\AccountFactory $accountResourceModelFactory, \Ced\ConnectBase\Model\ResourceModel\Account\CollectionFactory $accountCollFactory, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Ced\ConnectBase\Service\Config $configService, \Ced\ConnectBase\Service\Api $apiService, \Magento\Framework\Event\Manager $eventManager)
    {
        $this->___init();
        parent::__construct($accountModelFactory, $accountResourceModelFactory, $accountCollFactory, $marketplaceService, $configService, $apiService, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function preparePayload(string $callName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'preparePayload');
        return $pluginInfo ? $this->___callPlugins('preparePayload', func_get_args(), $pluginInfo) : parent::preparePayload($callName);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareMandatoryPayload()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareMandatoryPayload');
        return $pluginInfo ? $this->___callPlugins('prepareMandatoryPayload', func_get_args(), $pluginInfo) : parent::prepareMandatoryPayload();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        return $pluginInfo ? $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo) : parent::getBaseUrl();
    }
}
