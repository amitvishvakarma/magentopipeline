<?php
namespace Ced\ConnectBase\Controller\Adminhtml\ProductLinking\UploadFile;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\ProductLinking\UploadFile
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\ProductLinking\UploadFile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Model\ResourceModel\ProductLinking\File\Uploader $fileUploader)
    {
        $this->___init();
        parent::__construct($context, $fileUploader);
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
