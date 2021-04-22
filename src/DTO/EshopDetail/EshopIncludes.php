<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\DTO\EshopDetail;

use Pobo\ShoptetSdk\DTO\IncludesInterface;

/**
 * Class EshopIncludes
 */
final class EshopIncludes implements IncludesInterface
{

    /** @var bool */
    private $orderAdditionalFields;

    /** @var bool */
    private $orderStatuses;

    /** @var bool */
    private $paymentMethods;

    /** @var bool */
    private $shippingMethods;

    /** @var bool */
    private $imageCuts;


    /**
     * ProductsIncludes constructor.
     *
     * @param bool $orderAdditionalFields
     * @param bool $orderStatuses
     * @param bool $paymentMethods
     * @param bool $shippingMethods
     * @param bool $imageCuts
     */
    public function __construct(
        bool $orderAdditionalFields = false,
        bool $orderStatuses = false,
        bool $paymentMethods = false,
        bool $shippingMethods = false,
        bool $imageCuts = false
    ) {
        $this->orderAdditionalFields = $orderAdditionalFields;
        $this->orderStatuses = $orderStatuses;
        $this->paymentMethods = $paymentMethods;
        $this->shippingMethods = $shippingMethods;
        $this->imageCuts = $imageCuts;
    }

    /**
     * @return string|null
     */
    public function getQuery(): ?string
    {
        $includes = [];

        if ($this->orderAdditionalFields()) {
            $includes[] = 'orderAdditionalFields';
        }

        if ($this->orderStatuses()) {
            $includes[] = 'orderStatuses';
        }

        if ($this->paymentMethods()) {
            $includes[] = 'paymentMethods';
        }

        if ($this->shippingMethods()) {
            $includes[] = 'shippingMethods';
        }

        if ($this->imageCuts()) {
            $includes[] = 'imageCuts';
        }

        if (count($includes) === 0) {
            return null;
        }

        return implode(',', $includes);
    }

    /**
     * @return bool
     */
    public function orderAdditionalFields(): bool
    {
        return $this->orderAdditionalFields;
    }

    /**
     * @return bool
     */
    public function orderStatuses(): bool
    {
        return $this->orderStatuses;
    }

    /**
     * @return bool
     */
    public function paymentMethods(): bool
    {
        return $this->paymentMethods;
    }

    /**
     * @return bool
     */
    public function shippingMethods(): bool
    {
        return $this->shippingMethods;
    }

    /**
     * @return bool
     */
    public function imageCuts(): bool
    {
        return $this->imageCuts;
    }
}
