<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\OrderStatus;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Status
 */
class Status
{
    use PropertyPopulateTrait;

    /** @var int */
    protected $id;

    /** @var int */
    protected $order;

    /** @var string */
    protected $name;

    /** @var bool */
    protected $markAsPaid;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
    public function isMarkAsPaid(): bool
    {
        return $this->markAsPaid;
    }

}
