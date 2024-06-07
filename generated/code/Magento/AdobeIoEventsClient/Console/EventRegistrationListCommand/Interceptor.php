<?php
namespace Magento\AdobeIoEventsClient\Console\EventRegistrationListCommand;

/**
 * Interceptor class for @see \Magento\AdobeIoEventsClient\Console\EventRegistrationListCommand
 */
class Interceptor extends \Magento\AdobeIoEventsClient\Console\EventRegistrationListCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeIoEventsClient\Model\EventRegistrationClient $eventRegistrationClient, ?string $name = null)
    {
        $this->___init();
        parent::__construct($eventRegistrationClient, $name);
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
