<?php
namespace Ced\ConnectTikTok\Controller\Adminhtml\Product\Validate;

/**
 * Interceptor class for @see \Ced\ConnectTikTok\Controller\Adminhtml\Product\Validate
 */
class Interceptor extends \Ced\ConnectTikTok\Controller\Adminhtml\Product\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Magento\Ui\Component\MassAction\Filter $filter, \Ced\ConnectBase\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Ced\ConnectBase\Helper\Template $templateHelper)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $filter, $collectionFactory, $templateHelper);
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
