<?php
namespace Magento\Sales\Model\ResourceModel\Provider\Query\IdListBuilder;

/**
 * Interceptor class for @see \Magento\Sales\Model\ResourceModel\Provider\Query\IdListBuilder
 */
class Interceptor extends \Magento\Sales\Model\ResourceModel\Provider\Query\IdListBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection)
    {
        $this->___init();
        parent::__construct($resourceConnection);
    }

    /**
     * {@inheritdoc}
     */
    public function build(string $mainTableName, string $gridTableName) : \Magento\Framework\DB\Select
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'build');
        return $pluginInfo ? $this->___callPlugins('build', func_get_args(), $pluginInfo) : parent::build($mainTableName, $gridTableName);
    }
}
