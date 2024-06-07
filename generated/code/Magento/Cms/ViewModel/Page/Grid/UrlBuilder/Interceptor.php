<?php
namespace Magento\Cms\ViewModel\Page\Grid\UrlBuilder;

/**
 * Interceptor class for @see \Magento\Cms\ViewModel\Page\Grid\UrlBuilder
 */
class Interceptor extends \Magento\Cms\ViewModel\Page\Grid\UrlBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\UrlInterface $frontendUrlBuilder, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($frontendUrlBuilder, $urlEncoder, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($routePath, $scope, $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($routePath, $scope, $store);
    }
}
