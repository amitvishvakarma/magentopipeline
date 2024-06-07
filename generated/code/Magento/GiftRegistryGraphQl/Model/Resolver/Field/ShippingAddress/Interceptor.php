<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\Field\ShippingAddress;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\Field\ShippingAddress
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\Field\ShippingAddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\Address\ExtractCustomerAddressData $extractCustomerAddressData, \Magento\Directory\Model\RegionFactory $regionFactory, \Magento\Directory\Model\ResourceModel\Region $regionResourceModel)
    {
        $this->___init();
        parent::__construct($extractCustomerAddressData, $regionFactory, $regionResourceModel);
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
