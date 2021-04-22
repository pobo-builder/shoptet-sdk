<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\MandatoryFields;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class DeliveryAddress
 */
class DeliveryAddress
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $company;

    /** @var string */
    protected $fullName;

    /** @var string */
    protected $street;

    /** @var string */
    protected $houseNumber;

    /** @var string */
    protected $city;

    /** @var string */
    protected $district;

    /** @var string */
    protected $zip;

    /** @var string */
    protected $countryCode;

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
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
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

}
