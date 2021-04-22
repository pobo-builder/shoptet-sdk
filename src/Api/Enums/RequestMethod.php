<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api\Enums;

use Kuria\Enum\Enum;

/**
 * Class RequestMethod
 */
final class RequestMethod extends Enum
{
    public const CONNECT = 'CONNECT';
    public const DELETE = 'DELETE';
    public const GET = 'GET';
    public const HEAD = 'HEAD';
    public const OPTIONS = 'OPTIONS';
    public const PATCH = 'PATCH';
    public const POST = 'POST';
    public const PUT = 'PUT';
    public const TRACE = 'TRACE';
}
