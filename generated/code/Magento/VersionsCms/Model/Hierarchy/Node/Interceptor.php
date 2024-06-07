<?php
namespace Magento\VersionsCms\Model\Hierarchy\Node;

/**
 * Interceptor class for @see \Magento\VersionsCms\Model\Hierarchy\Node
 */
class Interceptor extends \Magento\VersionsCms\Model\Hierarchy\Node implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\VersionsCms\Helper\Hierarchy $cmsHierarchy, \Magento\VersionsCms\Model\Hierarchy\ConfigInterface $hierarchyConfig, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\VersionsCms\Model\ResourceModel\Hierarchy\Node $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Store\Model\System\Store $systemStore, \Magento\VersionsCms\Model\Hierarchy\NodeFactory $nodeFactory, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Backend\Model\Validator\UrlKey\CompositeUrlKey $compositeUrlValidator = null, ?\Magento\Framework\App\Cache\TypeListInterface $appCache = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $cmsHierarchy, $hierarchyConfig, $scopeConfig, $resource, $storeManager, $systemStore, $nodeFactory, $resourceCollection, $data, $compositeUrlValidator, $appCache);
    }

    /**
     * {@inheritdoc}
     */
    public function collectTree($data, $remove)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectTree');
        return $pluginInfo ? $this->___callPlugins('collectTree', func_get_args(), $pluginInfo) : parent::collectTree($data, $remove);
    }
}
