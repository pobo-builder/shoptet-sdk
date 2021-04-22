<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Enums;

use Kuria\Enum\Enum;

/**
 * Class ImageCut
 */
abstract class ImageCut extends Enum
{
    public const BIG = 'big';
    public const DETAIL = 'detail';
    public const CATEGORY = 'category';
    public const ORIG = 'orig';
}
