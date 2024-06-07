<?php
namespace Magento\CatalogGraphQl\DataProvider\Product\SearchCriteriaBuilder;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\DataProvider\Product\SearchCriteriaBuilder
 */
class Interceptor extends \Magento\CatalogGraphQl\DataProvider\Product\SearchCriteriaBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\Argument\SearchCriteria\Builder $builder, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\Search\FilterGroupBuilder $filterGroupBuilder, \Magento\Catalog\Model\Product\Visibility $visibility, ?\Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder = null, ?\Magento\Eav\Model\Config $eavConfig = null)
    {
        $this->___init();
        parent::__construct($builder, $scopeConfig, $filterBuilder, $filterGroupBuilder, $visibility, $sortOrderBuilder, $eavConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function build(array $args, bool $includeAggregation) : \Magento\Framework\Api\Search\SearchCriteriaInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'build');
        return $pluginInfo ? $this->___callPlugins('build', func_get_args(), $pluginInfo) : parent::build($args, $includeAggregation);
    }
}
