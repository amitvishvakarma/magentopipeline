<?php
namespace Devchannel\CustomAttribute\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Customer\Api\AddressMetadataInterface;
use Magento\Eav\Model\Config as EavConfig;
use Magento\Customer\Setup\CustomerSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class WebsiteAttribute implements DataPatchInterface
{
    /**
     * GSTIN Attribute Code
     */
    public const WEBSITE_CODE = 'website';

    /**
     * EAV Config data.
     *
     * @var EavConfig
     */
    private $eavConfig;

    /**
     * @var CustomerSetupFactory
     */
    protected $customerSetupFactory;

    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @param EavConfig $eavConfig
     * @param CustomerSetupFactory $customerSetupFactory
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        EavConfig $eavConfig,
        CustomerSetupFactory $customerSetupFactory,
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->eavConfig = $eavConfig;
        $this->customerSetupFactory = $customerSetupFactory;
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {

        $customerSetup = $this->customerSetupFactory->create(['setup' => $this->moduleDataSetup]);

        $customerSetup->addAttribute('customer_address', self::WEBSITE_CODE, [
            'label' => 'Website',
            'input' => 'text',
            'visible' => true,
            'required' => false,
            'position' => 150,
            'sort_order' => 150,
            'system' => false,
            'user_defined' => true
        ]);


        $customAttribute = $this->eavConfig->getAttribute(
            AddressMetadataInterface::ENTITY_TYPE_ADDRESS,
            self::WEBSITE_CODE
        );

        $customAttribute->setData(
            'used_in_forms',
            ['adminhtml_customer_address', 'customer_address_edit', 'customer_register_address']
        );

        $customAttribute->save();
    }
    /**
     * Get aliases
     *
     * @return void
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Get dependencies
     *
     * @return void
     */
    public static function getDependencies()
    {
        return [];
    }
}
