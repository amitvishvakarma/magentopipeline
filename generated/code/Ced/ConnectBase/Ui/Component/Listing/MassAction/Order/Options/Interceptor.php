<?php
namespace Ced\ConnectBase\Ui\Component\Listing\MassAction\Order\Options;

/**
 * Interceptor class for @see \Ced\ConnectBase\Ui\Component\Listing\MassAction\Order\Options
 */
class Interceptor extends \Ced\ConnectBase\Ui\Component\Listing\MassAction\Order\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\UrlInterface $urlBuilder, array $data = [])
    {
        $this->___init();
        parent::__construct($urlBuilder, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareSubMassAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareSubMassAction');
        return $pluginInfo ? $this->___callPlugins('prepareSubMassAction', func_get_args(), $pluginInfo) : parent::prepareSubMassAction();
    }
}
