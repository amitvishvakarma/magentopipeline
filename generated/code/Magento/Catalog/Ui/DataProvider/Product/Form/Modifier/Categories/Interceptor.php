<?php
namespace Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Categories;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Categories
 */
class Interceptor extends \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Categories implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Locator\LocatorInterface $locator, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Framework\DB\Helper $dbHelper, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Framework\Stdlib\ArrayManager $arrayManager, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null, ?\Magento\Framework\AuthorizationInterface $authorization = null, ?\Magento\Backend\Model\Auth\Session $session = null)
    {
        $this->___init();
        parent::__construct($locator, $categoryCollectionFactory, $dbHelper, $urlBuilder, $arrayManager, $serializer, $authorization, $session);
    }

    /**
     * {@inheritdoc}
     */
    public function modifyMeta(array $meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyMeta');
        return $pluginInfo ? $this->___callPlugins('modifyMeta', func_get_args(), $pluginInfo) : parent::modifyMeta($meta);
    }
}
