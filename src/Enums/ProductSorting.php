<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Enums;

use Kuria\Enum\Enum;

/**
 * Class ProductSorting
 */
abstract class ProductSorting extends Enum
{
    public const ALPHABETICALLY = 'alphabetically';
    public const ALPHABETICALLY_DESC = 'alphabetically-desc';
    public const CATEGORY_PRIORITY = 'category-priority';
    public const CATEGORY_PRIORITY_DESC = 'category-priority-desc';
    public const CHEAPEST = 'cheapest';
    public const DEFAULT = 'default';
    public const MOST_EXPENSIVE = 'most-expensive';
    public const MOST_SELLING = 'most-selling';
    public const NEWEST = 'newest';
    public const OLDEST = 'oldest';
    public const PRODUCT_CODE = 'product-code';
    public const PRODUCT_CODE_DESC = 'product-code-desc';
}
