<?php
namespace Magento\Staging\Block\Adminhtml\Update\Preview;

/**
 * Interceptor class for @see \Magento\Staging\Block\Adminhtml\Update\Preview
 */
class Interceptor extends \Magento\Staging\Block\Adminhtml\Update\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Staging\Model\VersionManager $versionManager, \Magento\Framework\Url $frontendUrl, \Magento\Framework\Session\SessionManagerInterface $sessionManager, array $data = [], ?\Magento\Staging\Model\Preview\RequestSigner $requestSigner = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $versionManager, $frontendUrl, $sessionManager, $data, $requestSigner);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
