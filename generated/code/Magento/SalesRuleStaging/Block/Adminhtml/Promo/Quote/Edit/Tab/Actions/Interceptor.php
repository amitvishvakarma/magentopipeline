<?php
namespace Magento\SalesRuleStaging\Block\Adminhtml\Promo\Quote\Edit\Tab\Actions;

/**
 * Interceptor class for @see \Magento\SalesRuleStaging\Block\Adminhtml\Promo\Quote\Edit\Tab\Actions
 */
class Interceptor extends \Magento\SalesRuleStaging\Block\Adminhtml\Promo\Quote\Edit\Tab\Actions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Source\Yesno $sourceYesno, \Magento\Rule\Block\Actions $ruleActions, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $rendererFieldset, \Magento\SalesRule\Model\RuleFactory $ruleFactory, \Magento\Staging\Api\UpdateRepositoryInterface $updateRepository, \Magento\Staging\Model\VersionManager $versionManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $sourceYesno, $ruleActions, $rendererFieldset, $ruleFactory, $updateRepository, $versionManager, $data);
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
