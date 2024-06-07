<?php
namespace Magento\AdobeIoEventsClient\Console\SynchronizeEventMetadata;

/**
 * Interceptor class for @see \Magento\AdobeIoEventsClient\Console\SynchronizeEventMetadata
 */
class Interceptor extends \Magento\AdobeIoEventsClient\Console\SynchronizeEventMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeIoEventsClient\Api\EventMetadataRegistryInterface $eventRegistry, \Magento\AdobeIoEventsClient\Model\AdobeIOConfigurationProvider $configurationProvider, \Magento\AdobeIoEventsClient\Model\EventMetadataClient $eventMetadataClient)
    {
        $this->___init();
        parent::__construct($eventRegistry, $configurationProvider, $eventMetadataClient);
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
