<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class SocialNetworks
 */
class SocialNetworks
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $facebookUrl;

    /** @var string */
    protected $facebookText;

    /** @var string */
    protected $twitterAccount;

    /** @var string */
    protected $instagramAccount;

    /**
     * @return string
     */
    public function getFacebookUrl(): string
    {
        return $this->facebookUrl;
    }

    /**
     * @return string
     */
    public function getFacebookText(): string
    {
        return $this->facebookText;
    }

    /**
     * @return string
     */
    public function getTwitterAccount(): string
    {
        return $this->twitterAccount;
    }

    /**
     * @return string
     */
    public function getInstagramAccount(): string
    {
        return $this->instagramAccount;
    }

}
