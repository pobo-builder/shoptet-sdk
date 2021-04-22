<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Response\Eshop;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Traits\PropertyPopulateTrait;
use Pobo\ShoptetSdk\Response\Eshop\Info\ActiveModule;
use Pobo\ShoptetSdk\Response\Eshop\Info\BillingInformation;
use Pobo\ShoptetSdk\Response\Eshop\Info\ContactInformation;
use Pobo\ShoptetSdk\Response\Eshop\Info\Currency;
use Pobo\ShoptetSdk\Response\Eshop\Info\ImageCut;
use Pobo\ShoptetSdk\Response\Eshop\Info\OrderAdditionalField;
use Pobo\ShoptetSdk\Response\Eshop\Info\OrderStatus;
use Pobo\ShoptetSdk\Response\Eshop\Info\PaymentMethod;
use Pobo\ShoptetSdk\Response\Eshop\Info\Settings;
use Pobo\ShoptetSdk\Response\Eshop\Info\ShippingMethod;
use Pobo\ShoptetSdk\Response\Eshop\Info\SocialNetworks;
use Pobo\ShoptetSdk\Response\Eshop\Info\TaxClass;
use Pobo\ShoptetSdk\Response\Eshop\Info\Url;

/**
 * Class Info
 */
class Info extends ApiResponse
{

    use PropertyPopulateTrait;

    /** @var ContactInformation */
    protected $contactInformation;

    /** @var BillingInformation */
    protected $billingInformation;

    /** @var Settings */
    protected $settings;

    /** @var Currency[] */
    protected $currencies;

    /** @var TaxClass[] */
    protected $taxClasses;

    /** @var ActiveModule[] */
    protected $activeModules;

    /** @var Url[] */
    protected $urls = [];

    /** @var SocialNetworks */
    protected $socialNetworks;

    /** @var OrderAdditionalField[] */
    protected $orderAdditionalFields;

    /** @var OrderStatus */
    protected $orderStatuses;

    /** @var ShippingMethod */
    protected $shippingMethods;

    /** @var PaymentMethod */
    protected $paymentMethods;

    /** @var ImageCut[] */
    protected $imageCuts;

    /**
     * @param string $ident
     * @return Url|null
     */
    public function getUrlByIdent(string $ident): ?Url
    {
        foreach ($this->urls as $url) {
            if ($url->getUrl() === $ident) {
                return $url;
            }
        }
        return null;
    }

    /**
     * @return ContactInformation
     */
    public function getContactInformation(): ContactInformation
    {
        return $this->contactInformation;
    }
}
