<?php
namespace Magento\GoogleTagManager\Helper\CookieData;

/**
 * Interceptor class for @see \Magento\GoogleTagManager\Helper\CookieData
 */
class Interceptor extends \Magento\GoogleTagManager\Helper\CookieData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context)
    {
        $this->___init();
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    public function isTagManagerAvailable($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isTagManagerAvailable');
        return $pluginInfo ? $this->___callPlugins('isTagManagerAvailable', func_get_args(), $pluginInfo) : parent::isTagManagerAvailable($store);
    }
}
