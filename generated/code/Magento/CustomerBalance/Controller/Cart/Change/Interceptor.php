<?php
namespace Magento\CustomerBalance\Controller\Cart\Change;

/**
 * Interceptor class for @see \Magento\CustomerBalance\Controller\Cart\Change
 */
class Interceptor extends \Magento\CustomerBalance\Controller\Cart\Change implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\App\Response\RedirectInterface $redirect, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\CustomerBalance\Helper\Data $customerBalanceHelper, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($request, $redirect, $resultFactory, $customerBalanceHelper, $quoteRepository, $checkoutSession, $customerSession);
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
