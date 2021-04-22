<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Template
 */
class Template
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $name;

    /** @var string */
    protected $colorVariant;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColorVariant(): string
    {
        return $this->colorVariant;
    }
}
