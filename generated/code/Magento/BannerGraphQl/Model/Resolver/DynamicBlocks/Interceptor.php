<?php
namespace Magento\BannerGraphQl\Model\Resolver\DynamicBlocks;

/**
 * Interceptor class for @see \Magento\BannerGraphQl\Model\Resolver\DynamicBlocks
 */
class Interceptor extends \Magento\BannerGraphQl\Model\Resolver\DynamicBlocks implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\BannerGraphQl\Model\DynamicBlocks $dynamicBlocks, \Magento\BannerGraphQl\Model\DynamicBlockFormatter $formatter)
    {
        $this->___init();
        parent::__construct($dynamicBlocks, $formatter);
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
