<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Api\Traits;

/**
 * Trait HttpStatusCodeTrait
 */
trait HttpStatusCodeTrait
{
    /** @var array */
    protected static $responseCodes = [
        // Informational 1xx
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        103 => 'Early Hints',

        // Success 2xx
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Already Reported',
        226 => 'IM Used',

        // Redirection 3xx
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'Switch Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',

        // Client Error 4xx
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        421 => 'Misdirected Request',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Too Early',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        451 => 'Unavailable For Legal Reasons',

        // Server Error 5xx
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        509 => 'Bandwidth Limit Exceeded',
        510 => 'Not Extended',
        511 => 'Network Authentication Required',
    ];

    /** @var int */
    protected $httpStatusCode = 200;

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        $codes = array_flip([204, 205, 304]);
        return array_key_exists($this->getStatusCode(), $codes);
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->getStatusCode() === 200;
    }

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return $this->getStatusCode() >= 200 && $this->getStatusCode() < 300;
    }

    /**
     * @return bool
     */
    public function isRedirect(): bool
    {
        $codes = array_flip([301, 302, 303, 307, 308]);
        return array_key_exists($this->getStatusCode(), $codes);
    }

    /**
     * @return bool
     */
    public function isForbidden(): bool
    {
        return $this->getStatusCode() === 403;
    }

    /**
     * @return bool
     */
    public function isNotFound(): bool
    {
        return $this->getStatusCode() === 404;
    }

    /**
     * @return bool
     */
    public function isClientError(): bool
    {
        return $this->getStatusCode() >= 400 && $this->getStatusCode() < 500;
    }

    /**
     * @return bool
     */
    public function isServerError(): bool
    {
        return $this->getStatusCode() >= 500 && $this->getStatusCode() < 600;
    }

    /**
     * @param int $code
     * @return string
     */
    public function getMessageFromHttpStatusCode(int $code): string
    {
        if (!array_key_exists($code, self::$responseCodes)) {
            throw new \InvalidArgumentException(
                sprintf("Provided HTTP status code %d is not valid.", $code)
            );
        }
        return self::$responseCodes[$code];
    }

    /**
     * @param int $code
     */
    protected function setStatusCode(int $code): void
    {
        if ($this->validateStatusCode($code)) {
            $this->httpStatusCode = $code;
        } else {
            throw new \InvalidArgumentException(
                sprintf("Provided HTTP status code %d is not within the range of 100 to 599.", $code)
            );
        }
    }

    /**
     * @param int $code
     * @return bool
     */
    private function validateStatusCode(int $code): bool
    {
        return (filter_var(
                $code,
                FILTER_VALIDATE_INT,
                [
                    "options" => [
                        "min_range" => 100,
                        "max_range" => 599
                    ]
                ]
            ) !== false);
    }
}
