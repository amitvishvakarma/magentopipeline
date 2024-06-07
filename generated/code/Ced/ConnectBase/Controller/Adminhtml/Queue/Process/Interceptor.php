<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Queue\Process;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Queue\Process
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Queue\Process implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Model\QueueFactory $queueModel, \Ced\ConnectBase\Model\ResourceModel\Queue $queueResource, \Ced\ConnectBase\Cron\QueueProcess $queueProcess, \Magento\Framework\Message\ManagerInterface $messageManager, \Ced\ConnectBase\Api\MarketplaceSyncInterface $marketplaceSync)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $queueModel, $queueResource, $queueProcess, $messageManager, $marketplaceSync);
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