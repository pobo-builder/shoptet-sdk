<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class ColorScheme
 */
class ColorScheme
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $conversionColor;

    /** @var string */
    protected $conversionColorHover;

    /** @var string */
    protected $color1;

    /** @var string */
    protected $color2;

    /** @var string */
    protected $color3;

    /** @var string */
    protected $color4;

    /**
     * @return string
     */
    public function getConversionColor(): string
    {
        return $this->conversionColor;
    }

    /**
     * @return string
     */
    public function getConversionColorHover(): string
    {
        return $this->conversionColorHover;
    }

    /**
     * @return string
     */
    public function getColor1(): string
    {
        return $this->color1;
    }

    /**
     * @return string
     */
    public function getColor2(): string
    {
        return $this->color2;
    }

    /**
     * @return string
     */
    public function getColor3(): string
    {
        return $this->color3;
    }

    /**
     * @return string
     */
    public function getColor4(): string
    {
        return $this->color4;
    }
}
