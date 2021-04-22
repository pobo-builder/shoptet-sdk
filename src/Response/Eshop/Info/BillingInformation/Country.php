<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\BillingInformation;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Country
 */
class Country
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $countryCode;

    /** @var string */
    protected $countryName;

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

}
