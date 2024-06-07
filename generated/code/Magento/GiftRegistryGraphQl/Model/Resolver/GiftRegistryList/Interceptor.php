<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\GiftRegistryList;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\GiftRegistryList
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\GiftRegistryList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftRegistry\Helper\Data $giftRegistryHelper, \Magento\GiftRegistry\Model\ResourceModel\Entity\CollectionFactory $giftRegistryCollectionFactory, \Magento\GiftRegistryGraphQl\Mapper\GiftRegistryOutputDataMapper $giftRegistryDataMapper)
    {
        $this->___init();
        parent::__construct($giftRegistryHelper, $giftRegistryCollectionFactory, $giftRegistryDataMapper);
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
