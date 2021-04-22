<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Image
 */
class Image
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $name;

    /** @var string */
    protected $seoName;

    /** @var string */
    protected $cdnName;

    /** @var int */
    protected $priority;

    /** @var string */
    protected $description;

    /** @var string */
    protected $changeTime;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSeoName(): string
    {
        return $this->seoName;
    }

    /**
     * @return string
     */
    public function getCdnName(): string
    {
        return $this->cdnName;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getChangeTime(): string
    {
        return $this->changeTime;
    }

}
