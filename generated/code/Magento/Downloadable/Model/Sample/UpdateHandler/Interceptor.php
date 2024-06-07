<?php
namespace Magento\Downloadable\Model\Sample\UpdateHandler;

/**
 * Interceptor class for @see \Magento\Downloadable\Model\Sample\UpdateHandler
 */
class Interceptor extends \Magento\Downloadable\Model\Sample\UpdateHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Downloadable\Api\SampleRepositoryInterface $sampleRepository)
    {
        $this->___init();
        parent::__construct($sampleRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($entity, $arguments = []) : \Magento\Catalog\Api\Data\ProductInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($entity, $arguments);
    }
}
