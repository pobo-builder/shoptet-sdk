<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail\Variant;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class MeasureUnit
 */
class MeasureUnit
{
    use PropertyPopulateTrait;

    /** @var int */
    protected $packagingUnitId;

    /** @var string */
    protected $packagingUnitName;

    /** @var string */
    protected $packagingAmount;

    /** @var int */
    protected $measureUnitId;

    /** @var string */
    protected $measureUnitName;

    /** @var string */
    protected $measureAmount;

    /** @var string */
    protected $measurePrice;

    /**
     * @return int
     */
    public function getPackagingUnitId(): int
    {
        return $this->packagingUnitId;
    }

    /**
     * @return string
     */
    public function getPackagingUnitName(): string
    {
        return $this->packagingUnitName;
    }

    /**
     * @return string
     */
    public function getPackagingAmount(): string
    {
        return $this->packagingAmount;
    }

    /**
     * @return int
     */
    public function getMeasureUnitId(): int
    {
        return $this->measureUnitId;
    }

    /**
     * @return string
     */
    public function getMeasureUnitName(): string
    {
        return $this->measureUnitName;
    }

    /**
     * @return string
     */
    public function getMeasureAmount(): string
    {
        return $this->measureAmount;
    }

    /**
     * @return string
     */
    public function getMeasurePrice(): string
    {
        return $this->measurePrice;
    }

}
