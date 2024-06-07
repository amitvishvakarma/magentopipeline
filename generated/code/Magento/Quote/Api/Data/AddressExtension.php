<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\AddressInterface
 */
class AddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements AddressExtensionInterface
{
    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts()
    {
        return $this->_get('discounts');
    }

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->setData('discounts', $discounts);
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGiftRegistryId()
    {
        return $this->_get('gift_registry_id');
    }

    /**
     * @param int $giftRegistryId
     * @return $this
     */
    public function setGiftRegistryId($giftRegistryId)
    {
        $this->setData('gift_registry_id', $giftRegistryId);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupLocationCode()
    {
        return $this->_get('pickup_location_code');
    }

    /**
     * @param string $pickupLocationCode
     * @return $this
     */
    public function setPickupLocationCode($pickupLocationCode)
    {
        $this->setData('pickup_location_code', $pickupLocationCode);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBoltId()
    {
        return $this->_get('bolt_id');
    }

    /**
     * @param string $boltId
     * @return $this
     */
    public function setBoltId($boltId)
    {
        $this->setData('bolt_id', $boltId);
        return $this;
    }
}
