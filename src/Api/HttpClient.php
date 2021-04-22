<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api;

use Pobo\ShoptetSdk\Api\Enums\RequestMethod;
use Pobo\ShoptetSdk\Api\Exception\ApiException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class HttpClient
 */
class HttpClient
{
    /** @var ClientInterface */
    private $client;

    /**
     * HttpClient constructor
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $uri
     * @param array  $options
     * @return mixed
     * @throws ApiException
     */
    public function post(string $uri, array $options = []): ResponseInterface
    {
        return $this->sendRequest(
            function ($uri, $options) {
                return $this->client->request(RequestMethod::POST, $uri, $options);
            },
            $uri,
            $options
        );
    }

    /**
     * @param callable $callFunction
     * @param string   $uri
     * @param array    $options
     * @return mixed
     * @throws ApiException
     */
    private function sendRequest(callable $callFunction, string $uri, array $options)
    {
        try {
            return $callFunction($uri, $options);
        } catch (RequestException $e) {
            if ($e->getResponse() !== null) {
                throw new ApiException('Api error: ' . $e->getResponse()->getBody()->getContents(), $e->getCode(), $e);
            }
            throw $e;
        }
    }

    /**
     * @param string $uri
     * @param array  $options
     * @return ResponseInterface
     * @throws ApiException
     */
    public function get(string $uri, array $options = []): ResponseInterface
    {
        return $this->sendRequest(
            function ($uri, $options) {
                return $this->client->request(RequestMethod::GET, $uri, $options);
            },
            $uri,
            $options
        );
    }

    /**
     * @param string $uri
     * @param array  $options
     * @return ResponseInterface
     * @throws ApiException
     */
    public function patch(string $uri, array $options = []): ResponseInterface
    {
        return $this->sendRequest(
            function ($uri, $options) {
                return $this->client->request(RequestMethod::PATCH, $uri, $options);
            },
            $uri,
            $options
        );
    }

    /**
     * @param string $uri
     * @param array  $options
     * @return ResponseInterface
     * @throws ApiException
     */
    public function put(string $uri, array $options = []): ResponseInterface
    {
        return $this->sendRequest(
            function ($uri, $options) {
                return $this->client->request(RequestMethod::PUT, $uri, $options);
            },
            $uri,
            $options
        );
    }

    /**
     * @param string $uri
     * @param array  $options
     * @return ResponseInterface
     * @throws ApiException
     */
    public function delete(string $uri, array $options = []): ResponseInterface
    {
        return $this->sendRequest(
            function ($uri, $options) {
                return $this->client->request(RequestMethod::DELETE, $uri, $options);
            },
            $uri,
            $options
        );
    }
}
