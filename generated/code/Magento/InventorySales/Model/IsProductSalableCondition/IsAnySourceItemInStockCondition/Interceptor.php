<?php
namespace Magento\InventorySales\Model\IsProductSalableCondition\IsAnySourceItemInStockCondition;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\IsProductSalableCondition\IsAnySourceItemInStockCondition
 */
class Interceptor extends \Magento\InventorySales\Model\IsProductSalableCondition\IsAnySourceItemInStockCondition implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryConfigurationApi\Model\IsSourceItemManagementAllowedForSkuInterface $isSourceItemManagementAllowedForSku, \Magento\InventorySales\Model\IsProductSalableCondition\ManageStockCondition $manageStockCondition, \Magento\InventorySales\Model\ResourceModel\GetIsAnySourceItemInStock $getIsAnySourceItemInStock)
    {
        $this->___init();
        parent::__construct($isSourceItemManagementAllowedForSku, $manageStockCondition, $getIsAnySourceItemInStock);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, int $stockId) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku, $stockId);
    }
}
