<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Product\Products\Paginator;
use Pobo\ShoptetSdk\Response\Product\Products\Product;

/**
 * Class Products
 */
class Products extends ApiResponse
{
    use PropertyPopulateTrait;

    /** @var Product[] */
    protected $products;

    /** @var Paginator */
    protected $paginator;

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return Paginator
     */
    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

}
