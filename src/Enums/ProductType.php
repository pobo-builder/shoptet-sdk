<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Enums;

use Kuria\Enum\Enum;

/**
 * Class ProductType
 */
abstract class ProductType extends Enum
{
    public const GIFT_CERTIFICATE = 'gift';
    public const PRODUCT = 'product';
    public const PRODUCT_SET = 'product-set';
    public const SECOND_HAND = 'second-hand';
    public const SERVICE = 'service';
}
