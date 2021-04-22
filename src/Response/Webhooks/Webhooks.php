<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Webhooks;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PaginatorTrait;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Webhooks
 */
class Webhooks extends ApiResponse
{
    use PropertyPopulateTrait;
    use PaginatorTrait;

    /** @var Webhook[] */
    protected $webhooks = [];

}
