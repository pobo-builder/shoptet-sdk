<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\DTO;

/**
 * Class Options
 */
final class Options
{

    /** @var IncludesInterface */
    private $includes;

    /**
     * Options constructor.
     *
     * @param IncludesInterface $includes
     */
    public function __construct(IncludesInterface $includes)
    {
        $this->includes = $includes;
    }

    /**
     * @return IncludesInterface
     */
    public function getIncludes(): IncludesInterface
    {
        return $this->includes;
    }
}
