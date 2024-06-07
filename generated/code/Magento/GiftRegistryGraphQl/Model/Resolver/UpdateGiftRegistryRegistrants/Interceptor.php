<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\UpdateGiftRegistryRegistrants;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\UpdateGiftRegistryRegistrants
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\UpdateGiftRegistryRegistrants implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftRegistry\Model\EntityFactory $entityFactory, \Magento\GiftRegistry\Model\ResourceModel\Entity $entityResourceModel, \Magento\GiftRegistryGraphQl\Mapper\GiftRegistryOutputDataMapper $giftRegistryOutputDataMapper, \Magento\GiftRegistry\Model\GiftRegistry\GiftRegistryRegistrantsUpdater $giftRegistryRegistrantsUpdater, \Magento\GiftRegistry\Helper\Data $giftRegistryHelper, \Magento\GiftRegistryGraphQl\Model\Resolver\Validator\GiftRegistryValidator $giftRegistryValidator, \Magento\Framework\GraphQl\Query\Uid $idEncoder)
    {
        $this->___init();
        parent::__construct($entityFactory, $entityResourceModel, $giftRegistryOutputDataMapper, $giftRegistryRegistrantsUpdater, $giftRegistryHelper, $giftRegistryValidator, $idEncoder);
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
