<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail\Variant;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Availability
 */
class Availability
{
    use PropertyPopulateTrait;

    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
