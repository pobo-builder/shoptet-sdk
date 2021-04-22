<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design\Background;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Image
 */
class Image
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $url;

    /** @var string */
    protected $attachment;

    /** @var string */
    protected $position;

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
    public function getAttachment(): string
    {
        return $this->attachment;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
}
