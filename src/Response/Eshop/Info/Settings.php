<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\Settings\DefaultPricelist;

/**
 * Class Settings
 */
class Settings
{
    use PropertyPopulateTrait;

    /** @var bool */
    protected $vatPayer;

    /** @var bool */
    protected $cashDeskOnly;

    /** @var bool */
    protected $trackStockClaims;

    /** @var int */
    protected $maxProductAmount;

    /** @var int */
    protected $maxEmailAmount;

    /** @var DefaultPricelist */
    protected $defaultPricelist;

    /** @var string */
    protected $eshopLanguage;

    /** @var string */
    protected $timezone;

    /** @var string */
    protected $dateFormat;

    /** @var string */
    protected $timeFormat;

    /** @var string */
    protected $internals;

    /** @var bool */
    protected $exchangeRateFlip;

    /** @var string */
    protected $negativeStockAmount;

    /**
     * @return bool
     */
    public function isVatPayer(): bool
    {
        return $this->vatPayer;
    }

    /**
     * @return bool
     */
    public function isCashDeskOnly(): bool
    {
        return $this->cashDeskOnly;
    }

    /**
     * @return bool
     */
    public function isTrackStockClaims(): bool
    {
        return $this->trackStockClaims;
    }

    /**
     * @return int
     */
    public function getMaxProductAmount(): int
    {
        return $this->maxProductAmount;
    }

    /**
     * @return int
     */
    public function getMaxEmailAmount(): int
    {
        return $this->maxEmailAmount;
    }

    /**
     * @return DefaultPricelist
     */
    public function getDefaultPricelist(): DefaultPricelist
    {
        return $this->defaultPricelist;
    }

    /**
     * @return string
     */
    public function getEshopLanguage(): string
    {
        return $this->eshopLanguage;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    /**
     * @return string
     */
    public function getTimeFormat(): string
    {
        return $this->timeFormat;
    }

    /**
     * @return string
     */
    public function getInternals(): string
    {
        return $this->internals;
    }

    /**
     * @return bool
     */
    public function isExchangeRateFlip(): bool
    {
        return $this->exchangeRateFlip;
    }

    /**
     * @return string
     */
    public function getNegativeStockAmount(): string
    {
        return $this->negativeStockAmount;
    }

}
