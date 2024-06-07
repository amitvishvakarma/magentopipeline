<?php
namespace Magento\Downloadable\Model\Link\UpdateHandler;

/**
 * Interceptor class for @see \Magento\Downloadable\Model\Link\UpdateHandler
 */
class Interceptor extends \Magento\Downloadable\Model\Link\UpdateHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Downloadable\Api\LinkRepositoryInterface $linkRepository)
    {
        $this->___init();
        parent::__construct($linkRepository);
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
