<?php
namespace Magento\AdobeIoEventsClient\Console\EventProviderInfo;

/**
 * Interceptor class for @see \Magento\AdobeIoEventsClient\Console\EventProviderInfo
 */
class Interceptor extends \Magento\AdobeIoEventsClient\Console\EventProviderInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeIoEventsClient\Model\AdobeIOConfigurationProvider $configurationProvider, \Magento\AdobeIoEventsClient\Model\EventProviderClient $eventProviderClient)
    {
        $this->___init();
        parent::__construct($configurationProvider, $eventProviderClient);
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
