<?php
namespace Magento\Reward\Controller\Cart\Change;

/**
 * Interceptor class for @see \Magento\Reward\Controller\Cart\Change
 */
class Interceptor extends \Magento\Reward\Controller\Cart\Change implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\App\Response\RedirectInterface $redirect, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Reward\Helper\Data $rewardHelper, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Reward\Model\PaymentDataImporter $paymentDataImporter)
    {
        $this->___init();
        parent::__construct($request, $redirect, $resultFactory, $rewardHelper, $quoteRepository, $checkoutSession, $customerSession, $paymentDataImporter);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
