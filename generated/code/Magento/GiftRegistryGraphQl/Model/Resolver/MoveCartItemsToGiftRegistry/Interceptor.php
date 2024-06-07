<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\MoveCartItemsToGiftRegistry;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\MoveCartItemsToGiftRegistry
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\MoveCartItemsToGiftRegistry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftRegistry\Model\EntityFactory $entityFactory, \Magento\GiftRegistry\Model\ResourceModel\Entity $entityResourceModel, \Magento\GiftRegistryGraphQl\Mapper\GiftRegistryOutputDataMapper $giftRegistryOutputDataMapper, \Magento\GiftRegistryGraphQl\Mapper\GiftRegistryOutputErrorMapper $giftRegistryOutputErrorMapper, \Magento\GiftRegistry\Helper\Data $giftRegistryHelper, \Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\GiftRegistry\Model\GiftRegistry\MoveCartItemsToGiftRegistry $moveCartItemsToGiftRegistry)
    {
        $this->___init();
        parent::__construct($entityFactory, $entityResourceModel, $giftRegistryOutputDataMapper, $giftRegistryOutputErrorMapper, $giftRegistryHelper, $getCartForUser, $moveCartItemsToGiftRegistry);
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
