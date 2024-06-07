<?php
namespace Magento\Banner\Block\Adminhtml\Banner\Edit\Tab\Properties;

/**
 * Interceptor class for @see \Magento\Banner\Block\Adminhtml\Banner\Edit\Tab\Properties
 */
class Interceptor extends \Magento\Banner\Block\Adminhtml\Banner\Edit\Tab\Properties implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Banner\Model\Config $bannerConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $bannerConfig, $data);
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
