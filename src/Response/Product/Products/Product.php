<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Products;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Product
 */
class Product
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $guid;

    /** @var string */
    protected $name;

    /** @var string */
    protected $creationTime;

    /** @var string */
    protected $changeTime;

    /** @var string */
    protected $type;

    /** @var string */
    protected $url;

    /** @var string */
    protected $visibility;

    /** @var Brand */
    protected $brand;

    /** @var Supplier */
    protected $supplier;

    /** @var DefaultCategory */
    protected $defaultCategory;

    /** @var MainImage[] */
    protected $mainImage;

    /**
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
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
    public function getCreationTime(): string
    {
        return $this->creationTime;
    }

    /**
     * @return string
     */
    public function getChangeTime(): string
    {
        return $this->changeTime;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
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
    public function getVisibility(): string
    {
        return $this->visibility;
    }

    /**
     * @return Brand
     */
    public function getBrand(): Brand
    {
        return $this->brand;
    }

    /**
     * @return Supplier
     */
    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }

    /**
     * @return DefaultCategory
     */
    public function getDefaultCategory(): DefaultCategory
    {
        return $this->defaultCategory;
    }

    /**
     * @return array
     */
    public function getMainImage(): array
    {
        return $this->mainImage;
    }

}
