<?php
namespace Magento\AdobeCommerceEventsClient\Console\Command\EventUnsubscribeCommand;

/**
 * Interceptor class for @see \Magento\AdobeCommerceEventsClient\Console\Command\EventUnsubscribeCommand
 */
class Interceptor extends \Magento\AdobeCommerceEventsClient\Console\Command\EventUnsubscribeCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeIoEventsClient\Model\AdobeIOConfigurationProvider $configurationProvider, \Magento\AdobeCommerceEventsClient\Event\EventSubscriberInterface $eventSubscriber, \Magento\AdobeCommerceEventsClient\Event\EventFactory $eventFactory)
    {
        $this->___init();
        parent::__construct($configurationProvider, $eventSubscriber, $eventFactory);
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
