<?php
namespace Magento\Catalog\Model\Category\Authorization;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Category\Authorization
 */
class Interceptor extends \Magento\Catalog\Model\Category\Authorization implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\AuthorizationInterface $authorization, \Magento\Catalog\Model\CategoryFactory $factory)
    {
        $this->___init();
        parent::__construct($authorization, $factory);
    }

    /**
     * {@inheritdoc}
     */
    public function authorizeSavingOf(\Magento\Catalog\Api\Data\CategoryInterface $category) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authorizeSavingOf');
        $pluginInfo ? $this->___callPlugins('authorizeSavingOf', func_get_args(), $pluginInfo) : parent::authorizeSavingOf($category);
    }
}
