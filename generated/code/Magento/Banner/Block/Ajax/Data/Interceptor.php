<?php
namespace Magento\Banner\Block\Ajax\Data;

/**
 * Interceptor class for @see \Magento\Banner\Block\Ajax\Data
 */
class Interceptor extends \Magento\Banner\Block\Ajax\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTtl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTtl');
        return $pluginInfo ? $this->___callPlugins('getCacheTtl', func_get_args(), $pluginInfo) : parent::getCacheTtl();
    }
}
