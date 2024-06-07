<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Dashboard\TopSellingProducts;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Dashboard\TopSellingProducts
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Dashboard\TopSellingProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Magento\Framework\App\ResourceConnection $resourceConnection, \Ced\ConnectBase\Service\Marketplace $marketplace, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $resourceConnection, $marketplace, $jsonSerializer);
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
