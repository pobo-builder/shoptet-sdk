<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\BillingInformation\Address;
use Pobo\ShoptetSdk\Response\Eshop\Info\BillingInformation\Country;

/**
 * Class BillingInformation
 */
class BillingInformation
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $companyId;

    /** @var string */
    protected $taxId;

    /** @var string */
    protected $vatId;

    /** @var string */
    protected $billingName;

    /** @var Address */
    protected $address;

    /** @var Country */
    protected $country;

    /** @var string */
    protected $registration;

    /** @var string */
    protected $email;

    /** @var string */
    protected $phone;

    /** @var string */
    protected $billingEmail;

    /**
     * @return string
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }

    /**
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }

    /**
     * @return string
     */
    public function getVatId(): string
    {
        return $this->vatId;
    }

    /**
     * @return string
     */
    public function getBillingName(): string
    {
        return $this->billingName;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getRegistration(): string
    {
        return $this->registration;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getBillingEmail(): string
    {
        return $this->billingEmail;
    }

}
