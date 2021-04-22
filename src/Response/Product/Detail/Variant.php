<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Product\Detail\Variant\ActionPrice;
use Pobo\ShoptetSdk\Response\Product\Detail\Variant\Availability;
use Pobo\ShoptetSdk\Response\Product\Detail\Variant\AvailabilityWhenSoldOut;
use Pobo\ShoptetSdk\Response\Product\Detail\Variant\MeasureUnit;
use Pobo\ShoptetSdk\Response\Product\Detail\Variant\Parameter;

/**
 * Class Variant
 */
class Variant
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $code;

    /** @var string */
    protected $ean;

    /** @var string */
    protected $stock;

    /** @var string */
    protected $minStockSupply;

    /** @var string */
    protected $unit;

    /** @var string */
    protected $weight;

    /** @var bool */
    protected $visible;

    /** @var string */
    protected $price;

    /** @var string */
    protected $commonPrice;

    /** @var bool */
    protected $includingVat;

    /** @var string */
    protected $vatRate;

    /** @var string */
    protected $currencyCode;

    /** @var ActionPrice */
    protected $actionPrice;

    /** @var string */
    protected $image;

    /** @var Parameter[] */
    protected $parameters;

    /** @var string */
    protected $name;

    /** @var string */
    protected $manufacturerCode;

    /** @var string */
    protected $pluCode;

    /** @var string */
    protected $isbn;

    /** @var string */
    protected $serialNo;

    /** @var string */
    protected $mpn;

    /** @var MeasureUnit */
    protected $measureUnit;

    /** @var Availability */
    protected $availability;

    /** @var AvailabilityWhenSoldOut */
    protected $availabilityWhenSoldOut;

    /** @var string */
    protected $negativeStockAllowed;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @return string
     */
    public function getStock(): string
    {
        return $this->stock;
    }

    /**
     * @return string
     */
    public function getMinStockSupply(): string
    {
        return $this->minStockSupply;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

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
    public function getCommonPrice(): string
    {
        return $this->commonPrice;
    }

    /**
     * @return bool
     */
    public function isIncludingVat(): bool
    {
        return $this->includingVat;
    }

    /**
     * @return string
     */
    public function getVatRate(): string
    {
        return $this->vatRate;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return ActionPrice
     */
    public function getActionPrice(): ActionPrice
    {
        return $this->actionPrice;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getManufacturerCode(): string
    {
        return $this->manufacturerCode;
    }

    /**
     * @return string
     */
    public function getPluCode(): string
    {
        return $this->pluCode;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @return string
     */
    public function getSerialNo(): string
    {
        return $this->serialNo;
    }

    /**
     * @return string
     */
    public function getMpn(): string
    {
        return $this->mpn;
    }

    /**
     * @return MeasureUnit
     */
    public function getMeasureUnit(): MeasureUnit
    {
        return $this->measureUnit;
    }

    /**
     * @return Availability
     */
    public function getAvailability(): Availability
    {
        return $this->availability;
    }

    /**
     * @return AvailabilityWhenSoldOut
     */
    public function getAvailabilityWhenSoldOut(): AvailabilityWhenSoldOut
    {
        return $this->availabilityWhenSoldOut;
    }

    /**
     * @return string
     */
    public function getNegativeStockAllowed(): string
    {
        return $this->negativeStockAllowed;
    }

}
