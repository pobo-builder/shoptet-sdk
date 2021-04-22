<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api\Traits;

/**
 * Trait PaginatorTrait
 */
trait PaginatorTrait
{
    /** @var array */
    public $paginator = [
        'totalCount' => 0,
        'page' => 1,
        'pageCount' => 0,
        'itemsOnPage' => 0,
        'itemsPerPage' => 0
    ];

}
