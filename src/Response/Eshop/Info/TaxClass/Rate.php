<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\TaxClass;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Rate
 */
class Rate
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $zone;

    /** @var string */
    protected $vatRate;

    /**
     * @return string
     */
    public function getZone(): string
    {
        return $this->zone;
    }

    /**
     * @return string
     */
    public function getVatRate(): string
    {
        return $this->vatRate;
    }

}
