<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Enums;

use Kuria\Enum\Enum;

/**
 * Class SystemWebhook
 */
abstract class SystemWebhook extends Enum
{
    public const ADDON_APPROVE = 'addon:approve';
    public const ADDON_SUSPEND = 'addon:suspend';
    public const ADDON_UNINSTALL = 'addon:uninstall';
}
