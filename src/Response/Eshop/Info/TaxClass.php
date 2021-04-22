<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\TaxClass\Rate;

/**
 * Class TaxClass
 */
class TaxClass
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $title;

    /** @var Rate[] */
    protected $rates;

    /** @var bool */
    protected $isDefault;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return Rate[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->isDefault;
    }

}
