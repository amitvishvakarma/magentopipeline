<?php
namespace Magento\VersionsCms\Block\Adminhtml\Cms\Hierarchy\Manage;

/**
 * Interceptor class for @see \Magento\VersionsCms\Block\Adminhtml\Cms\Hierarchy\Manage
 */
class Interceptor extends \Magento\VersionsCms\Block\Adminhtml\Cms\Hierarchy\Manage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, array $data = [], ?\Magento\VersionsCms\Helper\Data $versionsCmsHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $systemStore, $data, $versionsCmsHelper);
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
