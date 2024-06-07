<?php
namespace Magento\Rma\Block\Adminhtml\Rma\NewRma\Tab\Items;

/**
 * Interceptor class for @see \Magento\Rma\Block\Adminhtml\Rma\NewRma\Tab\Items
 */
class Interceptor extends \Magento\Rma\Block\Adminhtml\Rma\NewRma\Tab\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Rma\Helper\Eav $rmaEav, \Magento\Rma\Model\Item\FormFactory $itemFormFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $rmaEav, $itemFormFactory, $data);
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
