<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Enums;

use Kuria\Enum\Enum;

/**
 * Class OrderItemType
 */
abstract class OrderItemType extends Enum
{
    public const BILLING = 'billing';
    public const DISCOUNT_COUPON = 'discount-coupon';
    public const GENERIC_ITEM = 'generic-item';
    public const GIFT = 'gift';
    public const GIFT_CERTIFICATE = 'gift-certificate';
    public const PRODUCT = 'product';
    public const PRODUCT_SET = 'product-set';
    public const SECOND_HAND = 'second-hand';
    public const SERVICE = 'service';
    public const SHIPPING = 'shipping';
    public const VOLUME_DISCOUNT = 'volume-discount';
}
