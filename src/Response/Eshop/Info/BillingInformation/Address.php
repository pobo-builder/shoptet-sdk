<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\BillingInformation;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Address
 */
class Address
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $streetAddress;

    /** @var string */
    protected $city;

    /** @var string */
    protected $zip;

    /**
     * @return string
     */
    public function getStreetAddress(): string
    {
        return $this->streetAddress;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

}
