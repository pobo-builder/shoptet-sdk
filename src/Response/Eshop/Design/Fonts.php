<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Fonts
 */
class Fonts
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $heading;

    /** @var string */
    protected $text;

    /**
     * @return string
     */
    public function getHeading(): string
    {
        return $this->heading;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
