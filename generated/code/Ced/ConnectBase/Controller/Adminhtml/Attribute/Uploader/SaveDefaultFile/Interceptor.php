<?php
namespace Ced\ConnectBase\Controller\Adminhtml\Attribute\Uploader\SaveDefaultFile;

/**
 * Interceptor class for @see \Ced\ConnectBase\Controller\Adminhtml\Attribute\Uploader\SaveDefaultFile
 */
class Interceptor extends \Ced\ConnectBase\Controller\Adminhtml\Attribute\Uploader\SaveDefaultFile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ced\ConnectBase\Controller\Adminhtml\Context $baseContext, \Ced\ConnectBase\Service\Attribute $attributeService, \Ced\ConnectBase\Model\AttributeFactory $marketplaceAttributeFactory, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer)
    {
        $this->___init();
        parent::__construct($context, $baseContext, $attributeService, $marketplaceAttributeFactory, $jsonSerializer);
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