<?php
namespace Magento\Reward\Block\Adminhtml\Customer\Edit\Tab\Reward\Management\Update;

/**
 * Interceptor class for @see \Magento\Reward\Block\Adminhtml\Customer\Edit\Tab\Reward\Management\Update
 */
class Interceptor extends \Magento\Reward\Block\Adminhtml\Customer\Edit\Tab\Reward\Management\Update implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\StoreFactory $storeFactory, \Magento\Customer\Model\CustomerRegistry $customerRegistry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $storeFactory, $customerRegistry, $data);
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
