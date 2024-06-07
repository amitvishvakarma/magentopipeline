<?php
namespace Magento\Payment\Observer\SalesOrderBeforeSaveObserver;

/**
 * Interceptor class for @see \Magento\Payment\Observer\SalesOrderBeforeSaveObserver
 */
class Interceptor extends \Magento\Payment\Observer\SalesOrderBeforeSaveObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
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
