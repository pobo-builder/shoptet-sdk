<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail\Variant;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class ActionPrice
 */
class ActionPrice
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $price;

    /** @var string */
    protected $fromDate;

    /** @var string */
    protected $toDate;

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getFromDate(): string
    {
        return $this->fromDate;
    }

    /**
     * @return string
     */
    public function getToDate(): string
    {
        return $this->toDate;
    }

}
