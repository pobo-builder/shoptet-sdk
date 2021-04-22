<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\OAuthServer\EshopInfo;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class User
 */
final class User
{
    use PropertyPopulateTrait;

    /** @var string */
    private $email;

    /** @var string */
    private $name;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
