<?php
namespace Ced\ConnectBase\Console\Command\Core\Base;

/**
 * Interceptor class for @see \Ced\ConnectBase\Console\Command\Core\Base
 */
class Interceptor extends \Ced\ConnectBase\Console\Command\Core\Base implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Console\Command\Context $baseContext)
    {
        $this->___init();
        parent::__construct($baseContext);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
