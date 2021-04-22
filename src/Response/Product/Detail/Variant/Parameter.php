<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail\Variant;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Parameter
 */
class Parameter
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $paramName;

    /** @var string */
    protected $paramIndex;

    /** @var string */
    protected $paramValue;

    /** @var string */
    protected $rawValue;

    /** @var string */
    protected $color;

    /** @var string */
    protected $image;

    /** @var int */
    protected $valuePriority;

    /**
     * @return string
     */
    public function getParamName(): string
    {
        return $this->paramName;
    }

    /**
     * @return string
     */
    public function getParamIndex(): string
    {
        return $this->paramIndex;
    }

    /**
     * @return string
     */
    public function getParamValue(): string
    {
        return $this->paramValue;
    }

    /**
     * @return string
     */
    public function getRawValue(): string
    {
        return $this->rawValue;
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

    /**
     * @return int
     */
    public function getValuePriority(): int
    {
        return $this->valuePriority;
    }

}
