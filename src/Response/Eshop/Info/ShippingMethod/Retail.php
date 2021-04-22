<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\ShippingMethod;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\ShippingMethod\Retail\Method;

/**
 * Class Retail
 */
class Retail
{
    use PropertyPopulateTrait;

    /** @var Method[] */
    protected $methods;

    /** @var string */
    protected $defaultShipping;

    /**
     * @return array
     */
    public function getMethods(): array
    {
        return $this->methods;
    }

    /**
     * @return string
     */
    public function getDefaultShipping(): string
    {
        return $this->defaultShipping;
    }

}
