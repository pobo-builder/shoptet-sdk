<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Webhooks;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class SignatureKey
 */
class SignatureKey extends ApiResponse
{

    use PropertyPopulateTrait;

    /** @var string */
    protected $signatureKey;

}
