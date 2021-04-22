<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Product\Detail;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class DescriptiveParameter
 */
class DescriptiveParameter
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $name;

    /** @var string */
    protected $value;

    /** @var string */
    protected $description;

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
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

}
