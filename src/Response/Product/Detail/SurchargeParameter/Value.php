<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail\SurchargeParameter;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Value
 */
class Value
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $valueIndex;

    /** @var string */
    protected $description;

    /** @var string */
    protected $price;

    /** @var int */
    protected $priority;

    /** @var bool */
    protected $visible;

    /**
     * @return string
     */
    public function getValueIndex(): string
    {
        return $this->valueIndex;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

}
