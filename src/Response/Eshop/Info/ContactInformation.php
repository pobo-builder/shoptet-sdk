<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class ContactInformation
 */
class ContactInformation
{
    use PropertyPopulateTrait;

    /** @var int */
    protected $eshopId;

    /** @var string */
    protected $eshopName;

    /** @var string */
    protected $eshopTitle;

    /** @var string */
    protected $eshopSubtitle;

    /** @var string */
    protected $url;

    /** @var string */
    protected $contactPerson;

    /** @var string */
    protected $email;

    /** @var string */
    protected $phone;

    /** @var string */
    protected $mobilePhone;

    /** @var string */
    protected $skypeAccount;

    /** @var string */
    protected $contactPhotoUrl;

    /**
     * @return int
     */
    public function getEshopId(): int
    {
        return $this->eshopId;
    }

    /**
     * @return string
     */
    public function getEshopName(): string
    {
        return $this->eshopName;
    }

    /**
     * @return string
     */
    public function getEshopTitle(): string
    {
        return $this->eshopTitle;
    }

    /**
     * @return string
     */
    public function getEshopSubtitle(): string
    {
        return $this->eshopSubtitle;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getContactPerson(): string
    {
        return $this->contactPerson;
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
    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }

    /**
     * @return string
     */
    public function getSkypeAccount(): string
    {
        return $this->skypeAccount;
    }

    /**
     * @return string
     */
    public function getContactPhotoUrl(): string
    {
        return $this->contactPhotoUrl;
    }

}
