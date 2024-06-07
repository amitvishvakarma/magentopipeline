<?php
namespace Ced\ConnectBase\Console\Command\Order\Create;

/**
 * Interceptor class for @see \Ced\ConnectBase\Console\Command\Order\Create
 */
class Interceptor extends \Ced\ConnectBase\Console\Command\Order\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Console\Command\Context $baseContext, \Magento\Framework\App\State $state, \Ced\ConnectBase\Service\Order $orderService, \Ced\ConnectBase\Service\Quote $quoteService)
    {
        $this->___init();
        parent::__construct($baseContext, $state, $orderService, $quoteService);
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
