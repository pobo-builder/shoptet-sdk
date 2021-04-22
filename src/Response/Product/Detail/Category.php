<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Category
 */
class Category
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $guid;

    /** @var string */
    protected $name;

    /** @var string */
    protected $parentGuid;

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

    /**
     * @return string
     */
    public function getParentGuid(): string
    {
        return $this->parentGuid;
    }

}
