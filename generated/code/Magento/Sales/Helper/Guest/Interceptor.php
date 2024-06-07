<?php
namespace Magento\Sales\Helper\Guest;

/**
 * Interceptor class for @see \Magento\Sales\Helper\Guest
 */
class Interceptor extends \Magento\Sales\Helper\Guest implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $coreRegistry, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory, ?\Magento\Sales\Api\OrderRepositoryInterface $orderRepository = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteria = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $coreRegistry, $customerSession, $cookieManager, $cookieMetadataFactory, $messageManager, $orderFactory, $resultRedirectFactory, $orderRepository, $searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function loadValidOrder(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadValidOrder');
        return $pluginInfo ? $this->___callPlugins('loadValidOrder', func_get_args(), $pluginInfo) : parent::loadValidOrder($request);
    }
}
