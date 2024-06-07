<?php
namespace Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\History;

/**
 * Interceptor class for @see \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\History
 */
class Interceptor extends \Magento\Rma\Block\Adminhtml\Rma\Edit\Tab\General\History implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Rma\Model\Config $rmaConfig, \Magento\Rma\Model\ResourceModel\Rma\Status\History\CollectionFactory $collectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $rmaConfig, $collectionFactory, $data);
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
