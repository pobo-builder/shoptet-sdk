<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Header
 */
class Header
{

    use PropertyPopulateTrait;

    /** @var string */
    protected $backgroundImage;

    /** @var string */
    protected $image;

    /** @var string */
    protected $logo;

    /**
     * @return string
     */
    public function getBackgroundImage(): string
    {
        return $this->backgroundImage;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }
}
