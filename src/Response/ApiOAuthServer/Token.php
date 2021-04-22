<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\ApiOAuthServer;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

final class Token extends ApiResponse
{
    use PropertyPopulateTrait;

    /** @var string */
    private $access_token;

    /** @var string */
    private $token_type;

    /** @var string */
    private $scope;

    /** @var int */
    private $eshopId;

    /** @var string */
    private $eshopUrl;

    /** @var string */
    private $contactEmail;

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
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

    /**
     * @return int
     */
    public function getEshopId(): int
    {
        return $this->eshopId;
    }

    /**
     * @return string
     */
    public function getEshopUrl(): string
    {
        return $this->eshopUrl;
    }

    /**
     * @return string
     */
    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }
}
