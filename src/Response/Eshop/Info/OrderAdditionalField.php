<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class OrderAdditionalField
 */
class OrderAdditionalField
{
    use PropertyPopulateTrait;

    /** @var int */
    protected $index;

    /** @var string */
    protected $label;

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

}
