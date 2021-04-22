<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\ApiOAuthServer;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

final class OAuthAccessToken extends ApiResponse
{
    use PropertyPopulateTrait;

    /** @var string */
    private $access_token;

    /** @var int */
    private $expires_in;

    /** @var string */
    private $token_type;

    /** @var string */
    private $scope;

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expires_in;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->token_type;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

}
