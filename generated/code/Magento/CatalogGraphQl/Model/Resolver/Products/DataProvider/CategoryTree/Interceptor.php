<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $collectionFactory, \Magento\CatalogGraphQl\Model\AttributesJoiner $attributesJoiner, \Magento\CatalogGraphQl\Model\Category\DepthCalculator $depthCalculator, \Magento\Framework\EntityManager\MetadataPool $metadata, \Magento\CatalogGraphQl\Model\Resolver\Categories\DataProvider\Category\CollectionProcessorInterface $collectionProcessor)
    {
        $this->___init();
        parent::__construct($collectionFactory, $attributesJoiner, $depthCalculator, $metadata, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getTreeCollection(\Magento\Framework\GraphQl\Schema\Type\ResolveInfo $resolveInfo, int $rootCategoryId, int $storeId) : \Magento\Catalog\Model\ResourceModel\Category\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTreeCollection');
        return $pluginInfo ? $this->___callPlugins('getTreeCollection', func_get_args(), $pluginInfo) : parent::getTreeCollection($resolveInfo, $rootCategoryId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatCategoriesByRootIds(\Magento\Framework\GraphQl\Schema\Type\ResolveInfo $resolveInfo, array $topLevelCategoryIds, \Magento\Framework\Api\Search\SearchCriteria $searchCriteria, array $attributeNames, \Magento\GraphQl\Model\Query\ContextInterface $context) : \Magento\Catalog\Model\ResourceModel\Category\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatCategoriesByRootIds');
        return $pluginInfo ? $this->___callPlugins('getFlatCategoriesByRootIds', func_get_args(), $pluginInfo) : parent::getFlatCategoriesByRootIds($resolveInfo, $topLevelCategoryIds, $searchCriteria, $attributeNames, $context);
    }
}
