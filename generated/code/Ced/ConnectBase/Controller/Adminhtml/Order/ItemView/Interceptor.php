<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Order\ItemView;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Order\ItemView
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Order\ItemView implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Model\OrderFactory $orderFactory, \Ced\ConnectBase\Model\ResourceModel\Order $orderResourceModel, \Ced\ConnectBase\ViewModel\PriceFormatter $priceFormatter)
    {
        $this->___init();
        parent::__construct($resultRawFactory, $layoutFactory, $context, $baseContext, $orderFactory, $orderResourceModel, $priceFormatter);
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
