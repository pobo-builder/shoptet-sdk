<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Webhooks;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Webhook
 */
class Webhook
{
    use PropertyPopulateTrait;

    /** @var int */
    protected $id;

    /** @var string */
    protected $event;

    /** @var string */
    protected $url;

}
