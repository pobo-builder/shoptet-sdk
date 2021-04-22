<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Design\Background\Color;
use Pobo\ShoptetSdk\Response\Eshop\Design\Background\Image;

/**
 * Class Background
 */
class Background
{
    use PropertyPopulateTrait;

    /** @var bool */
    protected $enabled;

    /** @var Color */
    protected $color;

    /** @var Image */
    protected $image;

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * @return Image
     */
    public function getImage(): Image
    {
        return $this->image;
    }
}
