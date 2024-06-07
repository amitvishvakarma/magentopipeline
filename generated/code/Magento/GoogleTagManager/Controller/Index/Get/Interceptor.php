<?php
namespace Magento\GoogleTagManager\Controller\Index\Get;

/**
 * Interceptor class for @see \Magento\GoogleTagManager\Controller\Index\Get
 */
class Interceptor extends \Magento\GoogleTagManager\Controller\Index\Get implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\GoogleTagManager\Helper\CookieData $cookieData, \Magento\GoogleTagManager\Model\Config\TagManagerConfig $tagManagerConfig, \Magento\Framework\Session\SessionManagerInterface $sessionManager, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($request, $resultFactory, $cookieData, $tagManagerConfig, $sessionManager, $cookieManager, $jsonFactory);
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
