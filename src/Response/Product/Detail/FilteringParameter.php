<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Product\Detail\FilteringParameter\GoogleMapping;
use Pobo\ShoptetSdk\Response\Product\Detail\FilteringParameter\Value;

/**
 * Class FilteringParameter
 */
class FilteringParameter
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $code;

    /** @var string */
    protected $name;

    /** @var string */
    protected $displayName;

    /** @var string */
    protected $description;

    /** @var int */
    protected $priority;

    /** @var GoogleMapping */
    protected $googleMapping;

    /** @var Value[] */
    protected $values;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

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
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return GoogleMapping
     */
    public function getGoogleMapping(): GoogleMapping
    {
        return $this->googleMapping;
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }

}
