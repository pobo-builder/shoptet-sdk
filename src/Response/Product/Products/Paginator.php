<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Products;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Paginator
 */
class Paginator
{
    use PropertyPopulateTrait;

    /** @var int */
    protected $totalCount;

    /** @var int */
    protected $page;

    /** @var int */
    protected $pageCount;

    /** @var int */
    protected $itemsOnPage;

    /** @var int */
    protected $itemsPerPage;

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    /**
     * @return int
     */
    public function getItemsOnPage(): int
    {
        return $this->itemsOnPage;
    }

    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

}
