<?php
namespace Ced\ConnectBase\Service\OnBoarding;

/**
 * Interceptor class for @see \Ced\ConnectBase\Service\OnBoarding
 */
class Interceptor extends \Ced\ConnectBase\Service\OnBoarding implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Model\OnboardingFactory $onboardingModelFactory, \Ced\ConnectBase\Model\ResourceModel\OnboardingFactory $onboardingResourceModelFactory, \Ced\ConnectBase\Model\ResourceModel\Onboarding\CollectionFactory $onboardingCollFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Backend\Model\Auth $auth, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Ced\ConnectBase\Service\Account $accountService, \Ced\ConnectBase\Service\Config $configService, \Ced\ConnectBase\Service\Api $apiService)
    {
        $this->___init();
        parent::__construct($onboardingModelFactory, $onboardingResourceModelFactory, $onboardingCollFactory, $storeManager, $auth, $marketplaceService, $accountService, $configService, $apiService);
    }

    /**
     * {@inheritdoc}
     */
    public function collectOnboardData(bool $refreshAll = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectOnboardData');
        return $pluginInfo ? $this->___callPlugins('collectOnboardData', func_get_args(), $pluginInfo) : parent::collectOnboardData($refreshAll);
    }
}
