<?php
namespace Ced\ConnectBase\Block\Adminhtml\Product\Validate;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Product\Validate
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Product\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Ui\Component\MassAction\Filter $filter, \Ced\ConnectBase\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Ced\ConnectBase\Service\Marketplace $marketplaceService, \Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($filter, $collectionFactory, $marketplaceService, $context, $data);
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
