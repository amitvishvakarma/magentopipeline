<?php
namespace Magento\Sales\Observer\GridSyncInsertObserver;

/**
 * Interceptor class for @see \Magento\Sales\Observer\GridSyncInsertObserver
 */
class Interceptor extends \Magento\Sales\Observer\GridSyncInsertObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\GridInterface $entityGrid, \Magento\Framework\App\Config\ScopeConfigInterface $globalConfig)
    {
        $this->___init();
        parent::__construct($entityGrid, $globalConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}
