<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class AbstractSupplier
 */
abstract class AbstractSupplier
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $guid;

    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
