<?php
namespace Magento\AdobeCommerceEventsClient\Console\Command\EventListAllCommand;

/**
 * Interceptor class for @see \Magento\AdobeCommerceEventsClient\Console\Command\EventListAllCommand
 */
class Interceptor extends \Magento\AdobeCommerceEventsClient\Console\Command\EventListAllCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeCommerceOutOfProcessExtensibility\Model\Collector\CollectorInterface $eventCollector, \Magento\Framework\Module\Dir $dir, ?string $name = null)
    {
        $this->___init();
        parent::__construct($eventCollector, $dir, $name);
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
