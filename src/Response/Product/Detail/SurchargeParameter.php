<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Product\Detail\SurchargeParameter\Value;

/**
 * Class SurchargeParameter
 */
class SurchargeParameter
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

    /** @var bool */
    protected $required;

    /** @var string */
    protected $currency;

    /** @var bool */
    protected $includingVat;

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
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return bool
     */
    public function isIncludingVat(): bool
    {
        return $this->includingVat;
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }

}
