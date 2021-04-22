<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\Currency;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class BankAccount
 */
class BankAccount
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $accountNumber;

    /** @var string */
    protected $iban;

    /** @var string */
    protected $bic;

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @return string
     */
    public function getBic(): string
    {
        return $this->bic;
    }

}
