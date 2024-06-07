<?php
namespace Magento\AdobeCommerceEventsClient\Console\Command\EventMetadataPopulate;

/**
 * Interceptor class for @see \Magento\AdobeCommerceEventsClient\Console\Command\EventMetadataPopulate
 */
class Interceptor extends \Magento\AdobeCommerceEventsClient\Console\Command\EventMetadataPopulate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeCommerceEventsClient\Event\Synchronizer\AdobeIoEventMetadataSynchronizer $eventMetadataSynchronizer, ?string $name = null)
    {
        $this->___init();
        parent::__construct($eventMetadataSynchronizer, $name);
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
