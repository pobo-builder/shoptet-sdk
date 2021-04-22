<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop\Info;

use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;

/**
 * Class Url
 */
class Url
{
    use PropertyPopulateTrait;

    /** @var string */
    protected $ident;

    /** @var string */
    protected $url;

    /**
     * @return string
     */
    public function getIdent(): string
    {
        return $this->ident;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

}
