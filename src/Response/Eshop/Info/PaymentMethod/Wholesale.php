<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info\PaymentMethod;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\PaymentMethod\Wholesale\Method;

/**
 * Class Wholesale
 */
class Wholesale
{
    use PropertyPopulateTrait;

    /** @var Method[] */
    protected $methods;

    /** @var string */
    protected $defaultPayment;

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
    public function getDefaultPayment(): string
    {
        return $this->defaultPayment;
    }
}
