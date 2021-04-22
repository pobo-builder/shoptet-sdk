<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Design;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Layout
 */
class Layout
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $homepage;

    /** @var string */
    protected $subPage;

    /** @var string */
    protected $productDetail;

    /**
     * @return string
     */
    public function getHomepage(): string
    {
        return $this->homepage;
    }

    /**
     * @return string
     */
    public function getSubPage(): string
    {
        return $this->subPage;
    }

    /**
     * @return string
     */
    public function getProductDetail(): string
    {
        return $this->productDetail;
    }
}
