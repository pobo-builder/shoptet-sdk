<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api;

use Pobo\ShoptetSdk\Api\Traits\HttpStatusCodeTrait;

/**
 * Class ApiResponse
 */
abstract class ApiResponse
{
    use HttpStatusCodeTrait;
}
