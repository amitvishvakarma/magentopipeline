<?php
namespace Ced\ConnectTikTok\Controller\Adminhtml\Activities\GetAllNotifications;

/**
 * Interceptor class for @see \Ced\ConnectTikTok\Controller\Adminhtml\Activities\GetAllNotifications
 */
class Interceptor extends \Ced\ConnectTikTok\Controller\Adminhtml\Activities\GetAllNotifications implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Service\Api $apiService, \Ced\ConnectBase\Service\Account $accountService, \Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext)
    {
        $this->___init();
        parent::__construct($apiService, $accountService, $context, $baseContext);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
