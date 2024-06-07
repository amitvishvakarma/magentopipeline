<?php
namespace Ced\ConnectBase\Console\Command\Onboarding\RefreshToken;

/**
 * Interceptor class for @see \Ced\ConnectBase\Console\Command\Onboarding\RefreshToken
 */
class Interceptor extends \Ced\ConnectBase\Console\Command\Onboarding\RefreshToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ced\ConnectBase\Console\Command\Context $baseContext, \Ced\ConnectBase\Service\OnBoarding $onboardingService, \Ced\ConnectBase\Service\Marketplace $marketplaceService)
    {
        $this->___init();
        parent::__construct($baseContext, $onboardingService, $marketplaceService);
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
