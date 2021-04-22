<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Product\Detail\Brand;
use Pobo\ShoptetSdk\Response\Product\Detail\Category;
use Pobo\ShoptetSdk\Response\Product\Detail\DefaultCategory;
use Pobo\ShoptetSdk\Response\Product\Detail\DescriptiveParameter;
use Pobo\ShoptetSdk\Response\Product\Detail\FilteringParameter;
use Pobo\ShoptetSdk\Response\Product\Detail\Flag;
use Pobo\ShoptetSdk\Response\Product\Detail\Image;
use Pobo\ShoptetSdk\Response\Product\Detail\SetItem;
use Pobo\ShoptetSdk\Response\Product\Detail\Supplier;
use Pobo\ShoptetSdk\Response\Product\Detail\SurchargeParameter;
use Pobo\ShoptetSdk\Response\Product\Detail\Variant;

/**
 * Class Detail
 */
class Detail extends ApiResponse
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $guid;

    /** @var string */
    protected $type;

    /** @var Brand */
    protected $brand;

    /** @var string */
    protected $visibility;

    /** @var string */
    protected $creationTime;

    /** @var string */
    protected $changeTime;

    /** @var string */
    protected $shortDescription;

    /** @var string */
    protected $description;

    /** @var string */
    protected $metaDescription;

    /** @var string */
    protected $name;

    /** @var Supplier */
    protected $supplier;

    /** @var DefaultCategory */
    protected $defaultCategory;

    /** @var string */
    protected $url;

    /** @var Variant[] */
    protected $variants;

    /** @var Image[] */
    protected $images;

    /** @var Category[] */
    protected $categories;

    /** @var Flag[] */
    protected $flags;

    /** @var DescriptiveParameter[] */
    protected $descriptiveParameters;

    /** @var SurchargeParameter[] */
    protected $surchargeParameters;

    /** @var SetItem[] */
    protected $setItems;

    /** @var FilteringParameter[] */
    protected $filteringParameters;

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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Brand
     */
    public function getBrand(): Brand
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
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
    public function getShortDescription(): string
    {
        return $this->shortDescription;
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
    public function getMetaDescription(): string
    {
        return $this->metaDescription;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function getVariants(): array
    {
        return $this->variants;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @return array
     */
    public function getFlags(): array
    {
        return $this->flags;
    }

    /**
     * @return array
     */
    public function getDescriptiveParameters(): array
    {
        return $this->descriptiveParameters;
    }

    /**
     * @return array
     */
    public function getSurchargeParameters(): array
    {
        return $this->surchargeParameters;
    }

    /**
     * @return array
     */
    public function getSetItems(): array
    {
        return $this->setItems;
    }

    /**
     * @return array
     */
    public function getFilteringParameters(): array
    {
        return $this->filteringParameters;
    }

}
