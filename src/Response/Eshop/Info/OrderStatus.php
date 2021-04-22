<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\OrderStatus\Status;

/**
 * Class OrderStatus
 */
class OrderStatus
{
    use PropertyPopulateTrait;

    /** @var Status[] */
    protected $statuses;

    /** @var int */
    protected $defaultStatus;

    /**
     * @return array
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    /**
     * @return int
     */
    public function getDefaultStatus(): int
    {
        return $this->defaultStatus;
    }

}
