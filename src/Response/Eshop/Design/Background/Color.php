<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design\Background;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Color
 */
class Color
{

    use PropertyPopulateTrait;

    /** @var bool */
    protected $enabled;

    /** @var string */
    protected $color;


    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}
