<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail\FilteringParameter;

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
    protected $name;

    /** @var int */
    protected $priority;

    /** @var string */
    protected $color;

    /** @var string */
    protected $image;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

}
