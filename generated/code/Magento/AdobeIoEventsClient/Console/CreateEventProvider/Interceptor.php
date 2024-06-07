<?php
namespace Magento\AdobeIoEventsClient\Console\CreateEventProvider;

/**
 * Interceptor class for @see \Magento\AdobeIoEventsClient\Console\CreateEventProvider
 */
class Interceptor extends \Magento\AdobeIoEventsClient\Console\CreateEventProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeIoEventsClient\Model\AdobeIOConfigurationProvider $configurationProvider, \Magento\AdobeIoEventsClient\Model\EventMetadataRegistry $eventMetadataRegistry, \Magento\AdobeIoEventsClient\Model\EventProviderClient $eventProviderClient, \Magento\AdobeIoEventsClient\Model\Data\EventProviderFactory $eventProviderFactory)
    {
        $this->___init();
        parent::__construct($configurationProvider, $eventMetadataRegistry, $eventProviderClient, $eventProviderFactory);
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
