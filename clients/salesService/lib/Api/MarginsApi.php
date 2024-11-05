<?php
/**
 * MarginsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SalesService
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.1.4089
 * Contact: support@fenix-alliance.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * MarginsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MarginsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'apiV2SalesServiceMarginsMarginIdDetailsGet' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiV2SalesServiceMarginsMarginIdDetailsGet
     *
     * @param  string $margin_id margin_id (required)
     * @param  string $api_version api_version (optional)
     * @param  string $x_api_version x_api_version (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV2SalesServiceMarginsMarginIdDetailsGet($margin_id, $api_version = null, $x_api_version = null, string $contentType = self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'][0])
    {
        $this->apiV2SalesServiceMarginsMarginIdDetailsGetWithHttpInfo($margin_id, $api_version, $x_api_version, $contentType);
    }

    /**
     * Operation apiV2SalesServiceMarginsMarginIdDetailsGetWithHttpInfo
     *
     * @param  string $margin_id (required)
     * @param  string $api_version (optional)
     * @param  string $x_api_version (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2SalesServiceMarginsMarginIdDetailsGetWithHttpInfo($margin_id, $api_version = null, $x_api_version = null, string $contentType = self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'][0])
    {
        $request = $this->apiV2SalesServiceMarginsMarginIdDetailsGetRequest($margin_id, $api_version, $x_api_version, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2SalesServiceMarginsMarginIdDetailsGetAsync
     *
     * @param  string $margin_id (required)
     * @param  string $api_version (optional)
     * @param  string $x_api_version (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2SalesServiceMarginsMarginIdDetailsGetAsync($margin_id, $api_version = null, $x_api_version = null, string $contentType = self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'][0])
    {
        return $this->apiV2SalesServiceMarginsMarginIdDetailsGetAsyncWithHttpInfo($margin_id, $api_version, $x_api_version, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2SalesServiceMarginsMarginIdDetailsGetAsyncWithHttpInfo
     *
     * @param  string $margin_id (required)
     * @param  string $api_version (optional)
     * @param  string $x_api_version (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2SalesServiceMarginsMarginIdDetailsGetAsyncWithHttpInfo($margin_id, $api_version = null, $x_api_version = null, string $contentType = self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'][0])
    {
        $returnType = '';
        $request = $this->apiV2SalesServiceMarginsMarginIdDetailsGetRequest($margin_id, $api_version, $x_api_version, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV2SalesServiceMarginsMarginIdDetailsGet'
     *
     * @param  string $margin_id (required)
     * @param  string $api_version (optional)
     * @param  string $x_api_version (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV2SalesServiceMarginsMarginIdDetailsGetRequest($margin_id, $api_version = null, $x_api_version = null, string $contentType = self::contentTypes['apiV2SalesServiceMarginsMarginIdDetailsGet'][0])
    {

        // verify the required parameter 'margin_id' is set
        if ($margin_id === null || (is_array($margin_id) && count($margin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $margin_id when calling apiV2SalesServiceMarginsMarginIdDetailsGet'
            );
        }




        $resourcePath = '/api/v2/SalesService/Margins/{marginId}/Details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $api_version,
            'api-version', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($x_api_version !== null) {
            $headerParams['x-api-version'] = ObjectSerializer::toHeaderValue($x_api_version);
        }

        // path params
        if ($margin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'marginId' . '}',
                ObjectSerializer::toPathValue($margin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}