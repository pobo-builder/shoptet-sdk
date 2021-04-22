<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Flag
 */
class Flag
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $code;

    /** @var string */
    protected $title;

    /** @var string */
    protected $dateFrom;

    /** @var string */
    protected $dateTo;

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
     * @return string
     */
    public function getDateFrom(): string
    {
        return $this->dateFrom;
    }

    /**
     * @return string
     */
    public function getDateTo(): string
    {
        return $this->dateTo;
    }

}
