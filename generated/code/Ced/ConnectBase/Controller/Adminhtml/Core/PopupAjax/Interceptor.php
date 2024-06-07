<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Core\PopupAjax;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Core\PopupAjax
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Core\PopupAjax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Model\SynchronizationFeedFactory $feedModel, \Ced\ConnectBase\Model\ResourceModel\SynchronizationFeed $feedResource, \Ced\ConnectBase\Model\ActivityLogFactory $logModel, \Ced\ConnectBase\Model\ResourceModel\ActivityLog $logResource, \Ced\ConnectBase\Model\OrderFactory $orderModel, \Ced\ConnectBase\Model\ResourceModel\Order $orderResource)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $feedModel, $feedResource, $logModel, $logResource, $orderModel, $orderResource);
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
