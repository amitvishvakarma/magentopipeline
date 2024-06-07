<?php
namespace Ced\ConnectBase\Model\SalesRule\Validator;

/**
 * Interceptor class for @see \Ced\ConnectBase\Model\SalesRule\Validator
 */
class Interceptor extends \Ced\ConnectBase\Model\SalesRule\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\SalesRule\Model\ResourceModel\Rule\CollectionFactory $collectionFactory, \Magento\Catalog\Helper\Data $catalogData, \Magento\SalesRule\Model\Utility $utility, \Magento\SalesRule\Model\RulesApplier $rulesApplier, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\SalesRule\Model\Validator\Pool $validators, \Magento\Framework\Message\ManagerInterface $messageManager, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\SalesRule\Helper\CartFixedDiscount $cartFixedDiscount = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $collectionFactory, $catalogData, $utility, $rulesApplier, $priceCurrency, $validators, $messageManager, $resource, $resourceCollection, $data, $cartFixedDiscount);
    }

    /**
     * {@inheritdoc}
     */
    public function process(\Magento\Quote\Model\Quote\Item\AbstractItem $item, \Magento\SalesRule\Model\Rule $rule)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($item, $rule);
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($modelId, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }
}
