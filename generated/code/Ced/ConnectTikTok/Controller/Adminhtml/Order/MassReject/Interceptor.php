<?php
namespace Ced\ConnectTikTok\Controller\Adminhtml\Order\MassReject;

/**
 * Interceptor class for @see \Ced\ConnectTikTok\Controller\Adminhtml\Order\MassReject
 */
class Interceptor extends \Ced\ConnectTikTok\Controller\Adminhtml\Order\MassReject implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Model\ResourceModel\Order\CollectionFactory $orderCollFactory, \Ced\ConnectBase\Service\CreditMemo $creditMemoService)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $orderCollFactory, $creditMemoService);
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
