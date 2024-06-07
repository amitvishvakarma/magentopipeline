<?php
namespace Magento\AdobeCommerceEventsGenerator\Console\Command\GenerateModuleCommand;

/**
 * Interceptor class for @see \Magento\AdobeCommerceEventsGenerator\Console\Command\GenerateModuleCommand
 */
class Interceptor extends \Magento\AdobeCommerceEventsGenerator\Console\Command\GenerateModuleCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeCommerceEventsGenerator\Console\Command\GenerateModule\Generator $generator, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, ?string $name = null)
    {
        $this->___init();
        parent::__construct($generator, $directoryList, $name);
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
