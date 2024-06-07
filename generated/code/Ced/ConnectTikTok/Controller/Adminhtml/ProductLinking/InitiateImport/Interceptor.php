<?php
namespace Ced\ConnectTikTok\Controller\Adminhtml\ProductLinking\InitiateImport;

/**
 * Interceptor class for @see \Ced\ConnectTikTok\Controller\Adminhtml\ProductLinking\InitiateImport
 */
class Interceptor extends \Ced\ConnectTikTok\Controller\Adminhtml\ProductLinking\InitiateImport implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Service\ProductLinking $productLinkingService)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $productLinkingService);
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
