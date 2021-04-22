<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail\FilteringParameter;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class GoogleMapping
 */
class GoogleMapping
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $value;

    /** @var string */
    protected $description;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

}
