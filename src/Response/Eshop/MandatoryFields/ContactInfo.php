<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\MandatoryFields;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class ContactInfo
 */
class ContactInfo
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $phone;

    /** @var string */
    protected $email;

    /** @var string */
    protected $birthday;

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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

}
