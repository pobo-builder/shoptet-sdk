<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\OAuthServer\EshopInfo;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

final class Project
{
    use PropertyPopulateTrait;

    /** @var int */
    private $id;

    /** @var string */
    private $url;

    /** @var string */
    private $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
