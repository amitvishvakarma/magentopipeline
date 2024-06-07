<?php
namespace Magento\GoogleTagManager\Block\Adminhtml\Banner\Edit\Tab\Ga;

/**
 * Interceptor class for @see \Magento\GoogleTagManager\Block\Adminhtml\Banner\Edit\Tab\Ga
 */
class Interceptor extends \Magento\GoogleTagManager\Block\Adminhtml\Banner\Edit\Tab\Ga implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\GoogleTagManager\Helper\Data $helper, array $data = [], ?\Magento\GoogleTagManager\Model\Config\TagManagerConfig $tagManagerConfig = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $helper, $data, $tagManagerConfig);
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
