<?php
namespace Magento\VisualMerchandiser\ViewModel\MerchandiserViewModel;

/**
 * Interceptor class for @see \Magento\VisualMerchandiser\ViewModel\MerchandiserViewModel
 */
class Interceptor extends \Magento\VisualMerchandiser\ViewModel\MerchandiserViewModel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getSortable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSortable');
        return $pluginInfo ? $this->___callPlugins('getSortable', func_get_args(), $pluginInfo) : parent::getSortable();
    }
}
