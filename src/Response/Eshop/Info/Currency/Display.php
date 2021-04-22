<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\Currency;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Display
 */
class Display
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $text;

    /** @var string */
    protected $location;

    /** @var string */
    protected $decimalsSeparator;

    /** @var string */
    protected $thousandsSeparator;

}
