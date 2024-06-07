<?php
namespace Magento\AdobeCommerceEventsClient\Console\Command\EventListCommand;

/**
 * Interceptor class for @see \Magento\AdobeCommerceEventsClient\Console\Command\EventListCommand
 */
class Interceptor extends \Magento\AdobeCommerceEventsClient\Console\Command\EventListCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeCommerceEventsClient\Event\EventList $eventList, ?string $name = null)
    {
        $this->___init();
        parent::__construct($eventList, $name);
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
