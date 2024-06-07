<?php
namespace Ced\ConnectBase\Model\Source\Country;

/**
 * Interceptor class for @see \Ced\ConnectBase\Model\Source\Country
 */
class Interceptor extends \Ced\ConnectBase\Model\Source\Country implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
