<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Enums;

use Kuria\Enum\Enum;

/**
 * Class ProductVisibility
 */
abstract class ProductVisibility extends Enum
{
    public const BLOCKED = 'blocked';
    public const BLOCK_UNREGISTERED = 'block-unregistered';
    public const CASH_DESK_ONLY = 'cash-desk-only';
    public const DETAIL_ONLY = 'detail-only';
    public const HIDDEN = 'hidden';
    public const SHOW_REGISTERED = 'show-registered';
    public const VISIBLE = 'visible';
}
