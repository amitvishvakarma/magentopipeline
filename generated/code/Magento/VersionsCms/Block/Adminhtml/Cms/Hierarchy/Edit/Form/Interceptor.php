<?php
namespace Magento\VersionsCms\Block\Adminhtml\Cms\Hierarchy\Edit\Form;

/**
 * Interceptor class for @see \Magento\VersionsCms\Block\Adminhtml\Cms\Hierarchy\Edit\Form
 */
class Interceptor extends \Magento\VersionsCms\Block\Adminhtml\Cms\Hierarchy\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\VersionsCms\Helper\Hierarchy $cmsHierarchy, \Magento\Config\Model\Config\Source\Yesno $sourceYesno, \Magento\VersionsCms\Model\Source\Hierarchy\Menu\Listmode $menuListmode, \Magento\VersionsCms\Model\Source\Hierarchy\Menu\Listtype $menuListtype, \Magento\VersionsCms\Model\Source\Hierarchy\Menu\Chapter $menuChapter, \Magento\VersionsCms\Model\Source\Hierarchy\Visibility $hierarchyVisibility, \Magento\VersionsCms\Model\Source\Hierarchy\Menu\Layout $menuLayout, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $jsonEncoder, $cmsHierarchy, $sourceYesno, $menuListmode, $menuListtype, $menuChapter, $hierarchyVisibility, $menuLayout, $data);
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
