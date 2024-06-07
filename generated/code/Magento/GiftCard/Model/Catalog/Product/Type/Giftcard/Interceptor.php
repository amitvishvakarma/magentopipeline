<?php
namespace Magento\GiftCard\Model\Catalog\Product\Type\Giftcard;

/**
 * Interceptor class for @see \Magento\GiftCard\Model\Catalog\Product\Type\Giftcard
 */
class Interceptor extends \Magento\GiftCard\Model\Catalog\Product\Type\Giftcard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\File\UploaderFactory $uploaderFactory = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $storeManager, $localeFormat, $scopeConfig, $priceCurrency, $serializer, $uploaderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPossibleBuyFromList');
        return $pluginInfo ? $this->___callPlugins('isPossibleBuyFromList', func_get_args(), $pluginInfo) : parent::isPossibleBuyFromList($product);
    }
}
