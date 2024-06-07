<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Core\MuiRender;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Core\MuiRender
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Core\MuiRender implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Element\UiComponentFactory $factory, \Magento\Ui\Model\UiComponentTypeResolver $contentTypeResolver, \Ced\ConnectBase\Controller\Adminhtml\Core\Base $baseController, ?\Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory = null, ?\Magento\Framework\Escaper $escaper = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($context, $factory, $contentTypeResolver, $baseController, $resultJsonFactory, $escaper, $logger);
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
