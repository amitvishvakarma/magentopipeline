<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\Field\TypeDynamicAttributesMetadata;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\Field\TypeDynamicAttributesMetadata
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\Field\TypeDynamicAttributesMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\EnumLookup $enumLookup, \Magento\GiftRegistry\Model\TypeFactory $typeFactory, \Magento\GiftRegistry\Model\ResourceModel\Type $registryTypeResourceModel)
    {
        $this->___init();
        parent::__construct($enumLookup, $typeFactory, $registryTypeResourceModel);
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
