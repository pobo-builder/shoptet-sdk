<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\ShippingMethod\Retail;
use Pobo\ShoptetSdk\Response\Eshop\Info\ShippingMethod\Wholesale;

/**
 * Class ShippingMethod
 */
class ShippingMethod
{
    use PropertyPopulateTrait;

    /** @var Retail */
    protected $retail;

    /** @var Wholesale */
    protected $wholesale;

    /** @var bool */
    protected $wholesaleActive;

    /**
     * @return Retail
     */
    public function getRetail(): Retail
    {
        return $this->retail;
    }

    /**
     * @return Wholesale
     */
    public function getWholesale(): Wholesale
    {
        return $this->wholesale;
    }

    /**
     * @return bool
     */
    public function isWholesaleActive(): bool
    {
        return $this->wholesaleActive;
    }

}
