<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class ImageCut
 */
class ImageCut
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $name;

    /** @var int */
    protected $width;

    /** @var int */
    protected $height;

    /** @var string */
    protected $urlPath;

    /** @var string */
    protected $cdnPath;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getUrlPath(): string
    {
        return $this->urlPath;
    }

    /**
     * @return string
     */
    public function getCdnPath(): string
    {
        return $this->cdnPath;
    }

}
