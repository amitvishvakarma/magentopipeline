<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\RemoveGiftRegistryRegistrants;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\RemoveGiftRegistryRegistrants
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\RemoveGiftRegistryRegistrants implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftRegistry\Model\EntityFactory $entityFactory, \Magento\GiftRegistry\Model\ResourceModel\Entity $entityResourceModel, \Magento\GiftRegistryGraphQl\Mapper\GiftRegistryOutputDataMapper $giftRegistryOutputDataMapper, \Magento\GiftRegistry\Model\GiftRegistry\RemoveRegistrantsFromGiftRegistry $removeRegistrantsFromGiftRegistry, \Magento\GiftRegistry\Helper\Data $giftRegistryHelper, \Magento\Framework\GraphQl\Query\Uid $idEncoder)
    {
        $this->___init();
        parent::__construct($entityFactory, $entityResourceModel, $giftRegistryOutputDataMapper, $removeRegistrantsFromGiftRegistry, $giftRegistryHelper, $idEncoder);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
