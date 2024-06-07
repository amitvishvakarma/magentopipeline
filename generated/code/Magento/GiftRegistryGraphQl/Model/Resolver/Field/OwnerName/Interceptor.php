<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\Field\OwnerName;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\Field\OwnerName
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\Field\OwnerName implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\CustomerNameGenerationInterface $customerNameGeneration)
    {
        $this->___init();
        parent::__construct($customerRepository, $customerNameGeneration);
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
