<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\MandatoryFields\BillingAddress;
use Pobo\ShoptetSdk\Response\Eshop\MandatoryFields\BillingInfo;
use Pobo\ShoptetSdk\Response\Eshop\MandatoryFields\ContactInfo;
use Pobo\ShoptetSdk\Response\Eshop\MandatoryFields\DeliveryAddress;

/**
 * Class MandatoryFields
 */
class MandatoryFields extends ApiResponse
{
    use PropertyPopulateTrait;

    /** @var BillingAddress */
    protected $billingAddress;

    /** @var DeliveryAddress */
    protected $deliveryAddress;

    /** @var BillingInfo */
    protected $billingInfo;

    /** @var ContactInfo */
    protected $contactInfo;

    /**
     * @return BillingAddress
     */
    public function getBillingAddress(): BillingAddress
    {
        return $this->billingAddress;
    }

    /**
     * @return DeliveryAddress
     */
    public function getDeliveryAddress(): DeliveryAddress
    {
        return $this->deliveryAddress;
    }

    /**
     * @return BillingInfo
     */
    public function getBillingInfo(): BillingInfo
    {
        return $this->billingInfo;
    }

    /**
     * @return ContactInfo
     */
    public function getContactInfo(): ContactInfo
    {
        return $this->contactInfo;
    }

}
