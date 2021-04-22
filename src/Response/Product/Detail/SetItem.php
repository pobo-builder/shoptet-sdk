<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class SetItem
 */
class SetItem
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $guid;

    /** @var string */
    protected $code;

    /** @var string */
    protected $amount;

    /**
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

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
    public function getAmount(): string
    {
        return $this->amount;
    }

}
