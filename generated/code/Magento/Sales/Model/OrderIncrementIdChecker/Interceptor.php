<?php
namespace Magento\Sales\Model\OrderIncrementIdChecker;

/**
 * Interceptor class for @see \Magento\Sales\Model\OrderIncrementIdChecker
 */
class Interceptor extends \Magento\Sales\Model\OrderIncrementIdChecker implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Order $resourceModel)
    {
        $this->___init();
        parent::__construct($resourceModel);
    }

    /**
     * {@inheritdoc}
     */
    public function isIncrementIdUsed($orderIncrementId) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isIncrementIdUsed');
        return $pluginInfo ? $this->___callPlugins('isIncrementIdUsed', func_get_args(), $pluginInfo) : parent::isIncrementIdUsed($orderIncrementId);
    }
}
