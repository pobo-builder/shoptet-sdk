<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

abstract class AbstractMethod
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $guid;

    /** @var int */
    protected $order;

    /** @var string */
    protected $name;

    /** @var bool */
    protected $visible;

    /**
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

}
