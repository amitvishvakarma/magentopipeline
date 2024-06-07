<?php
namespace Ced\ConnectBase\Block\Adminhtml\Dashboard\Index;

/**
 * Interceptor class for @see \Ced\ConnectBase\Block\Adminhtml\Dashboard\Index
 */
class Interceptor extends \Ced\ConnectBase\Block\Adminhtml\Dashboard\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Auth\Session $authSession, \Ced\ConnectBase\Service\Marketplace $marketplace, \Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($authSession, $marketplace, $context, $data);
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
