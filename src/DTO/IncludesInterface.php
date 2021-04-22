<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\DTO;

/**
 * Interface IncludesInterface
 */
interface IncludesInterface
{
    /**
     * @return string|null
     */
    public function getQuery(): ?string;
}
