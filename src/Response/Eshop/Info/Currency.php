<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\Currency\BankAccount;
use Pobo\ShoptetSdk\Response\Eshop\Info\Currency\Display;

/**
 * Class Currency
 */
class Currency
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $code;

    /** @var string */
    protected $title;

    /** @var bool */
    protected $isDefault;

    /** @var bool */
    protected $isDefaultAdmin;

    /** @var bool */
    protected $isVisible;

    /** @var string */
    protected $exchangeRate;

    /** @var int */
    protected $priority;

    /** @var Display */
    protected $display;

    /** @var int */
    protected $priceDecimalPlaces;

    /** @var string */
    protected $rounding;

    /** @var string */
    protected $minimalOrderValue;

    /** @var BankAccount */
    protected $bankAccount;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @return bool
     */
    public function isDefaultAdmin(): bool
    {
        return $this->isDefaultAdmin;
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->isVisible;
    }

    /**
     * @return string
     */
    public function getExchangeRate(): string
    {
        return $this->exchangeRate;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return Display
     */
    public function getDisplay(): Display
    {
        return $this->display;
    }

    /**
     * @return int
     */
    public function getPriceDecimalPlaces(): int
    {
        return $this->priceDecimalPlaces;
    }

    /**
     * @return string
     */
    public function getRounding(): string
    {
        return $this->rounding;
    }

    /**
     * @return string
     */
    public function getMinimalOrderValue(): string
    {
        return $this->minimalOrderValue;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

}
