<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class AbstractBrand
 */
abstract class AbstractBrand
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $code;

    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
