<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk;

use Pobo\ShoptetSdk\Api\ApiResponse;
use Pobo\ShoptetSdk\Api\Exception\ApiException;
use Pobo\ShoptetSdk\Api\Exception\ErrorResponseException;
use Pobo\ShoptetSdk\Api\HttpClient;
use Pobo\ShoptetSdk\DTO\Options;
use Pobo\ShoptetSdk\Response\ApiOAuthServer\ApiAccessToken;
use Pobo\ShoptetSdk\Response\ApiOAuthServer\OAuthAccessToken;
use Pobo\ShoptetSdk\Response\Eshop;
use Pobo\ShoptetSdk\Response\Product;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;


class ShoptetClient
{
    private const AUTH_TOKEN_HEADER = 'Shoptet-Access-Token';

    /** @var string */
    private $addonUri;

    /** @var string */
    private $apiUri;

    /** @var string */
    private $clientId;

    /** @var string */
    private $clientSecret;

    /** @var HttpClient */
    private $httpClient;

    /**
     * ShoptetClient constructor.
     *
     * @param string     $addonUri
     * @param string     $apiUri
     * @param string     $clientId
     * @param string     $clientSecret
     * @param HttpClient $httpClient
     */
    public function __construct(
        string $addonUri,
        string $apiUri,
        string $clientId,
        string $clientSecret,
        HttpClient $httpClient
    ) {
        $this->addonUri = $addonUri;
        $this->apiUri = $apiUri;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->httpClient = $httpClient;
    }

    /**
     * @param string $code
     * @param string $redirectUri
     * @return OAuthAccessToken|ApiResponse
     * @throws ApiException
     * @throws \JsonException
     * @throws \JsonException
     */
    public function getOAuthAccessToken(string $code, string $redirectUri): OAuthAccessToken
    {
        $response = $this->httpClient->post(
            $this->addonUri . '/action/ApiOAuthServer/token',
            [
                RequestOptions::JSON => [
                    'code' => $code,
                    'grant_type' => 'authorization_code',
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'redirect_uri' => $redirectUri,
                    'scope' => 'api',
                ],
            ]
        );

        return $this->createResponse($response, OAuthAccessToken::class);
    }

    /**
     * @param ResponseInterface $response
     * @param                   $responseClass
     * @return ApiResponse
     * @throws \JsonException
     */
    protected function createResponse(ResponseInterface $response, $responseClass): ApiResponse
    {
        $json = json_decode((string)$response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        if (array_key_exists('data', $json) && !is_null($json['data'])) {
            $json = $json['data'];
        }
        $cls = new $responseClass();
        $cls->populate($json);
        return $cls;
    }

    /* =============== ESHOP =============== */

    /**
     * @param string $oAuthAccessToken
     * @return ApiAccessToken|ApiResponse
     * @throws ApiException
     * @throws \JsonException
     */
    public function getApiAccessToken(string $oAuthAccessToken): ApiAccessToken
    {
        $response = $this->httpClient->get(
            $this->addonUri . '/action/ApiOAuthServer/getAccessToken',
            [
                RequestOptions::HEADERS => [
                    'Authorization' => 'Bearer ' . $oAuthAccessToken,
                ],
            ]
        );

        return $this->createResponse($response, ApiAccessToken::class);
    }

    /**
     * @param string       $apiAccessToken
     * @param Options|null $options
     * @return Eshop\Info|ApiResponse
     * @throws ApiException
     * @throws \JsonException
     */
    public function getEshopInfo(string $apiAccessToken, ?Options $options = null): Eshop\Info
    {
        $query = '';
        if ($options !== null) {
            $query .= '?include=' . $options->getIncludes()->getQuery();
        }

        $response = $this->httpClient->get(
            $this->apiUri . '/api/eshop' . $query,
            [
                RequestOptions::HEADERS => [
                    self::AUTH_TOKEN_HEADER => $apiAccessToken,
                    'Content-Type' => 'application/vnd.shoptet.v1.0',
                ],
            ]
        );

        return $this->createResponse($response, Eshop\Info::class);
    }

    /**
     * @param string $apiAccessToken
     * @return Eshop\Design|ApiResponse
     * @throws ApiException
     * @throws \JsonException
     */
    public function getEshopDesign(string $apiAccessToken): Eshop\Design
    {
        $response = $this->httpClient->get(
            $this->apiUri . '/api/eshop/design',
            [
                RequestOptions::HEADERS => [
                    self::AUTH_TOKEN_HEADER => $apiAccessToken,
                    'Content-Type' => 'application/vnd.shoptet.v1.0',
                ],
            ]
        );

        return $this->createResponse($response, Eshop\Design::class);
    }

    /* =============== /ESHOP =============== */

    /* =============== PRODUCT =============== */

    /**
     * @param string $apiAccessToken
     * @return Eshop\Design|ApiResponse
     * @throws ApiException
     * @throws \JsonException
     */
    public function getEshopMandatoryFields(string $apiAccessToken): Eshop\Design
    {
        $response = $this->httpClient->get(
            $this->apiUri . '/api/eshop/customer-fields',
            [
                RequestOptions::HEADERS => [
                    self::AUTH_TOKEN_HEADER => $apiAccessToken,
                    'Content-Type' => 'application/vnd.shoptet.v1.0',
                ],
            ]
        );

        return $this->createResponse($response, Eshop\Design::class);
    }

    /**
     * @param string       $apiAccessToken
     * @param Options|null $options
     * @return Product\Products|ApiResponse
     * @throws ApiException
     * @throws \JsonException
     */
    public function getProductList(string $apiAccessToken, ?Options $options = null): Product\Products
    {
        $query = '';
        if ($options !== null) {
            $query .= '?' . $options->getIncludes()->getQuery();
        }

        $response = $this->httpClient->get(
            $this->apiUri . '/api/products' . $query,
            [
                RequestOptions::HEADERS => [
                    self::AUTH_TOKEN_HEADER => $apiAccessToken,
                    'Content-Type' => 'application/vnd.shoptet.v1.0',
                ],
            ]
        );


        return $this->createResponse($response, Product\Products::class);
    }

    /**
     * @param string $apiAccessToken
     * @param string $guid
     * @return Product\Detail|ApiResponse
     * @throws ApiException
     * @throws \JsonException
     * @throws \JsonException
     */
    public function getProductDetail(string $apiAccessToken, string $guid): Product\Detail
    {
        $response = $this->httpClient->get(
            $this->apiUri . '/api/products/' . $guid,
            [
                RequestOptions::HEADERS => [
                    self::AUTH_TOKEN_HEADER => $apiAccessToken,
                    'Content-Type' => 'application/vnd.shoptet.v1.0',
                ],
            ]
        );

        return $this->createResponse($response, Product\Detail::class);
    }

    /* =============== /PRODUCT =============== */

}
