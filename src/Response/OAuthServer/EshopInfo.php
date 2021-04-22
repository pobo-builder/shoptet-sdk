<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\OAuthServer;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\OAuthServer\EshopInfo\Project;
use Pobo\ShoptetSdk\Response\OAuthServer\EshopInfo\User;

/**
 * Class EshopInfo
 */
final class EshopInfo extends ApiResponse
{
    use PropertyPopulateTrait;

    /** @var User */
    private $user;

    /** @var Project */
    private $project;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

}
