<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\MandatoryFields;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class BillingInfo
 */
class BillingInfo
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $companyId;

    /** @var string */
    protected $taxId;

    /**
     * @return string
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }

    /**
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }

}
