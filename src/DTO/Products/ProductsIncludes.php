<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\DTO\Products;

use Pobo\ShoptetSdk\DTO\IncludesInterface;
use Pobo\ShoptetSdk\Enums\ProductType;
use Pobo\ShoptetSdk\Enums\ProductVisibility;

/**
 * Class ProductsIncludes
 */
class ProductsIncludes implements IncludesInterface
{

    /** @var string|null */
    private $creationTimeFrom;

    /** @var string|null */
    private $creationTimeTo;

    /** @var string|null */
    private $visibility;

    /** @var string|null */
    private $type;

    /** @var string|null */
    private $brandName;

    /** @var string|null */
    private $brandCode;

    /** @var string|null */
    private $defaultCategoryGuid;

    /** @var string|null */
    private $categoryGuid;

    /** @var string|null */
    private $flag;

    /** @var string|null */
    private $include;

    /** @var string|null */
    private $supplierGuid;


    /**
     * ProductsIncludes constructor.
     *
     * @param string|null            $creationTimeFrom
     * @param string|null            $creationTimeTo
     * @param ProductVisibility|null $visibility
     * @param ProductType|null       $type
     * @param string|null            $brandName
     * @param string|null            $brandCode
     * @param string|null            $defaultCategoryGuid
     * @param string|null            $categoryGuid
     * @param string|null            $flag
     * @param string|null            $include
     * @param string|null            $supplierGuid
     */
    public function __construct(
        ?string $creationTimeFrom = null,
        ?string $creationTimeTo = null,
        ?ProductVisibility $visibility = null,
        ?ProductType $type = null,
        ?string $brandName = null,
        ?string $brandCode = null,
        ?string $defaultCategoryGuid = null,
        ?string $categoryGuid = null,
        ?string $flag = null,
        ?string $include = null,
        ?string $supplierGuid = null
    ) {
        $this->creationTimeFrom = date('c', strtotime($creationTimeFrom));
        $this->creationTimeTo = date('c', strtotime($creationTimeTo));
        $this->visibility = $visibility;
        $this->type = $type;
        $this->brandName = $brandName;
        $this->brandCode = $brandCode;
        $this->defaultCategoryGuid = $defaultCategoryGuid;
        $this->categoryGuid = $categoryGuid;
        $this->flag = $flag;
        $this->include = $include;
        $this->supplierGuid = $supplierGuid;
    }

    /**
     * @return string|null
     */
    public function getCreationTimeFrom(): ?string
    {
        return $this->creationTimeFrom;
    }

    /**
     * @return string|null
     */
    public function getCreationTimeTo(): ?string
    {
        return $this->creationTimeTo;
    }

    /**
     * @return string|null
     */
    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @return string|null
     */
    public function getBrandCode(): ?string
    {
        return $this->brandCode;
    }

    /**
     * @return string|null
     */
    public function getDefaultCategoryGuid(): ?string
    {
        return $this->defaultCategoryGuid;
    }

    /**
     * @return string|null
     */
    public function getCategoryGuid(): ?string
    {
        return $this->categoryGuid;
    }

    /**
     * @return string|null
     */
    public function getFlag(): ?string
    {
        return $this->flag;
    }

    /**
     * @return string|null
     */
    public function getInclude(): ?string
    {
        return $this->include;
    }

    /**
     * @return string|null
     */
    public function getSupplierGuid(): ?string
    {
        return $this->supplierGuid;
    }

    /**
     * @return string|null
     */
    public function getQuery(): ?string
    {
        $includes = [];

        if ($this->getCreationTimeFrom() !== null) {
            $includes['creationTimeFrom'] = $this->getCreationTimeFrom();
        }

        if ($this->getCreationTimeTo() !== null) {
            $includes['creationTimeTo'] = $this->getCreationTimeTo();
        }

        if ($this->getVisibility() !== null) {
            $includes['visibility'] = $this->getVisibility();
        }

        if ($this->getType() !== null) {
            $includes['type'] = $this->getType();
        }

        if ($this->getBrandName() !== null) {
            $includes['brandName'] = $this->getBrandName();
        }

        if ($this->getBrandCode() !== null) {
            $includes['brandCode'] = $this->getBrandCode();
        }

        if ($this->getDefaultCategoryGuid() !== null) {
            $includes['defaultCategoryGuid'] = $this->getDefaultCategoryGuid();
        }

        if ($this->getCategoryGuid() !== null) {
            $includes['categoryGuid'] = $this->getCategoryGuid();
        }

        if ($this->getFlag() !== null) {
            $includes['flag'] = $this->getFlag();
        }

        if ($this->getInclude() !== null) {
            $includes['include'] = $this->getInclude();
        }

        if ($this->getSupplierGuid() !== null) {
            $includes['supplierGuid'] = $this->getSupplierGuid();
        }

        if (count($includes) === 0) {
            return null;
        }

        return http_build_query($includes);
    }
}
