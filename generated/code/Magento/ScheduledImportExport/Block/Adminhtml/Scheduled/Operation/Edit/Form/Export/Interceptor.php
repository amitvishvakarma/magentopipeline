<?php
namespace Magento\ScheduledImportExport\Block\Adminhtml\Scheduled\Operation\Edit\Form\Export;

/**
 * Interceptor class for @see \Magento\ScheduledImportExport\Block\Adminhtml\Scheduled\Operation\Edit\Form\Export
 */
class Interceptor extends \Magento\ScheduledImportExport\Block\Adminhtml\Scheduled\Operation\Edit\Form\Export implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Option\ArrayPool $optionArrayPool, \Magento\Config\Model\Config\Source\Email\Method $emailMethod, \Magento\Config\Model\Config\Source\Email\Identity $emailIdentity, \Magento\ScheduledImportExport\Model\Scheduled\Operation\Data $operationData, \Magento\Config\Model\Config\Source\Yesno $sourceYesno, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Config\Model\Config\Source\Email\TemplateFactory $templateFactory, \Magento\ImportExport\Model\Source\Export\Format $sourceExportFormat, \Magento\ImportExport\Model\Export\ConfigInterface $exportConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $optionArrayPool, $emailMethod, $emailIdentity, $operationData, $sourceYesno, $string, $templateFactory, $sourceExportFormat, $exportConfig, $data);
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
