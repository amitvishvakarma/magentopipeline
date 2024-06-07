<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Attribute\Index;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Attribute\Index
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Attribute\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Magento\Framework\Message\ManagerInterface $messageManager, \Ced\ConnectBase\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $messageManager, $helperData);
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
