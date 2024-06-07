<?php
namespace Ced\ConnectBase\Block\Adminhtml\ProductLinking\AssignProducts;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\ProductLinking\AssignProducts
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\ProductLinking\AssignProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Service\Marketplace $marketplaceService, \Ced\ConnectBase\Model\ResourceModel\ProductLinking\CollectionFactory $collectionFactory, \Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($marketplaceService, $collectionFactory, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
