<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Design\Background;
use Pobo\ShoptetSdk\Response\Eshop\Design\ColorScheme;
use Pobo\ShoptetSdk\Response\Eshop\Design\Fonts;
use Pobo\ShoptetSdk\Response\Eshop\Design\Header;
use Pobo\ShoptetSdk\Response\Eshop\Design\Layout;
use Pobo\ShoptetSdk\Response\Eshop\Design\Template;

/**
 * Class Design
 */
class Design extends ApiResponse
{
    use PropertyPopulateTrait;

    /** @var Template */
    protected $template;

    /** @var Layout */
    protected $layout;

    /** @var ColorScheme */
    protected $colorScheme;

    /** @var Fonts */
    protected $fonts;

    /** @var Header */
    protected $header;

    /** @var Background */
    protected $background;


}
