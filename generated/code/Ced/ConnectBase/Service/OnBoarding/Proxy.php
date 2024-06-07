<?php
namespace Ced\ConnectBase\Service\OnBoarding;

/**
 * Proxy class for @see \Ced\ConnectBase\Service\OnBoarding
 */
class Proxy extends \Ced\ConnectBase\Service\OnBoarding implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Ced\ConnectBase\Service\OnBoarding
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Ced\\ConnectBase\\Service\\OnBoarding', $shared = true)
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
     * @return \Ced\ConnectBase\Service\OnBoarding
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
    public function createAccountsFromUserTargetDetails()
    {
        return $this->_getSubject()->createAccountsFromUserTargetDetails();
    }

    /**
     * {@inheritdoc}
     */
    public function collectOnboardData(bool $refreshAll = true)
    {
        return $this->_getSubject()->collectOnboardData($refreshAll);
    }

    /**
     * {@inheritdoc}
     */
    public function importUserDetails(?\Ced\ConnectBase\Model\Account $account = null)
    {
        return $this->_getSubject()->importUserDetails($account);
    }

    /**
     * {@inheritdoc}
     */
    public function createMultiAccounts($onboardingDataId)
    {
        return $this->_getSubject()->createMultiAccounts($onboardingDataId);
    }

    /**
     * {@inheritdoc}
     */
    public function generateAccountTitle($userAccountTitle, $marketplaceName, $marketplaceId, $marketplaceTargetId, $shopData = [])
    {
        return $this->_getSubject()->generateAccountTitle($userAccountTitle, $marketplaceName, $marketplaceId, $marketplaceTargetId, $shopData);
    }

    /**
     * {@inheritdoc}
     */
    public function importCategories(\Ced\ConnectBase\Model\Account $account)
    {
        return $this->_getSubject()->importCategories($account);
    }

    /**
     * {@inheritdoc}
     */
    public function importCarriers(\Ced\ConnectBase\Model\Account $account)
    {
        return $this->_getSubject()->importCarriers($account);
    }

    /**
     * {@inheritdoc}
     */
    public function importOrderStatus(\Ced\ConnectBase\Model\Account $account)
    {
        return $this->_getSubject()->importOrderStatus($account);
    }

    /**
     * {@inheritdoc}
     */
    public function uploadConfigOnMarketplace(\Ced\ConnectBase\Model\Account $account)
    {
        return $this->_getSubject()->uploadConfigOnMarketplace($account);
    }

    /**
     * {@inheritdoc}
     */
    public function insertUpdateOnboardingData(string $callName, array $onboardingData)
    {
        return $this->_getSubject()->insertUpdateOnboardingData($callName, $onboardingData);
    }

    /**
     * {@inheritdoc}
     */
    public function loadOnboardingData(string $onboardingFilterValue = '', string $filterColumn = 'id')
    {
        return $this->_getSubject()->loadOnboardingData($onboardingFilterValue, $filterColumn);
    }

    /**
     * {@inheritdoc}
     */
    public function addShopOnMarketplace(array $requestParams = [])
    {
        return $this->_getSubject()->addShopOnMarketplace($requestParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddShopRequestBody(array $requestParams = [])
    {
        return $this->_getSubject()->getAddShopRequestBody($requestParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getRefreshTokenRequestBody()
    {
        return $this->_getSubject()->getRefreshTokenRequestBody();
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryDataRequestParams(array $requestParams = [])
    {
        return $this->_getSubject()->getCategoryDataRequestParams($requestParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getCarriersListRequestParams()
    {
        return $this->_getSubject()->getCarriersListRequestParams();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderStatusRequestParams()
    {
        return $this->_getSubject()->getOrderStatusRequestParams();
    }

    /**
     * {@inheritdoc}
     */
    public function getUploadConfigRequestParams()
    {
        return $this->_getSubject()->getUploadConfigRequestParams();
    }

    /**
     * {@inheritdoc}
     */
    public function updateShopDetails(array $userDetails)
    {
        return $this->_getSubject()->updateShopDetails($userDetails);
    }

    /**
     * {@inheritdoc}
     */
    public function refreshTokenForMarketplace()
    {
        return $this->_getSubject()->refreshTokenForMarketplace();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribePlanRequestBody(array $queryParams = [])
    {
        return $this->_getSubject()->getSubscribePlanRequestBody($queryParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedPlanRequestBody(array $queryParams = [])
    {
        return $this->_getSubject()->getSubscribedPlanRequestBody($queryParams);
    }

    /**
     * {@inheritdoc}
     */
    public function subscribePricingPlan(array $requestParams = [])
    {
        return $this->_getSubject()->subscribePricingPlan($requestParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedPlan(array $requestParams = [])
    {
        return $this->_getSubject()->getSubscribedPlan($requestParams);
    }
}
