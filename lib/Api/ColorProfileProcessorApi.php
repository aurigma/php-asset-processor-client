<?php
/**
 * ColorProfileProcessorApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AssetProcessor API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\AssetProcessor\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aurigma\AssetProcessor\ApiException;
use Aurigma\AssetProcessor\Configuration;
use Aurigma\AssetProcessor\HeaderSelector;
use Aurigma\AssetProcessor\ObjectSerializer;

/**
 * ColorProfileProcessorApi Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ColorProfileProcessorApi
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
        $this->config = $config ?: new Configuration();
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
     * Operation colorProfileProcessorImportColorProfile
     *
     * Imports color profile and saves it to storage.
     *
     * @param  \SplFileObject $source_file Color profile source file (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields custom_fields (optional)
     *
     * @throws \Aurigma\AssetProcessor\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aurigma\AssetProcessor\Model\ColorProfileDto|\Aurigma\AssetProcessor\Model\NameConflictDto
     */
    public function colorProfileProcessorImportColorProfile($source_file, $tenant_id = null, $name = null, $path = null, $custom_fields = null)
    {
        list($response) = $this->colorProfileProcessorImportColorProfileWithHttpInfo($source_file, $tenant_id, $name, $path, $custom_fields);
        return $response;
    }

    /**
     * Operation colorProfileProcessorImportColorProfileWithHttpInfo
     *
     * Imports color profile and saves it to storage.
     *
     * @param  \SplFileObject $source_file Color profile source file (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     *
     * @throws \Aurigma\AssetProcessor\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aurigma\AssetProcessor\Model\ColorProfileDto|\Aurigma\AssetProcessor\Model\NameConflictDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function colorProfileProcessorImportColorProfileWithHttpInfo($source_file, $tenant_id = null, $name = null, $path = null, $custom_fields = null)
    {
        $request = $this->colorProfileProcessorImportColorProfileRequest($source_file, $tenant_id, $name, $path, $custom_fields);

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
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\Aurigma\AssetProcessor\Model\ColorProfileDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetProcessor\Model\ColorProfileDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\Aurigma\AssetProcessor\Model\NameConflictDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetProcessor\Model\NameConflictDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aurigma\AssetProcessor\Model\ColorProfileDto';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetProcessor\Model\ColorProfileDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetProcessor\Model\NameConflictDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation colorProfileProcessorImportColorProfileAsync
     *
     * Imports color profile and saves it to storage.
     *
     * @param  \SplFileObject $source_file Color profile source file (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function colorProfileProcessorImportColorProfileAsync($source_file, $tenant_id = null, $name = null, $path = null, $custom_fields = null)
    {
        return $this->colorProfileProcessorImportColorProfileAsyncWithHttpInfo($source_file, $tenant_id, $name, $path, $custom_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation colorProfileProcessorImportColorProfileAsyncWithHttpInfo
     *
     * Imports color profile and saves it to storage.
     *
     * @param  \SplFileObject $source_file Color profile source file (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function colorProfileProcessorImportColorProfileAsyncWithHttpInfo($source_file, $tenant_id = null, $name = null, $path = null, $custom_fields = null)
    {
        $returnType = '\Aurigma\AssetProcessor\Model\ColorProfileDto';
        $request = $this->colorProfileProcessorImportColorProfileRequest($source_file, $tenant_id, $name, $path, $custom_fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'colorProfileProcessorImportColorProfile'
     *
     * @param  \SplFileObject $source_file Color profile source file (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function colorProfileProcessorImportColorProfileRequest($source_file, $tenant_id = null, $name = null, $path = null, $custom_fields = null)
    {
        // verify the required parameter 'source_file' is set
        if ($source_file === null || (is_array($source_file) && count($source_file) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $source_file when calling colorProfileProcessorImportColorProfile'
            );
        }
        if ($name !== null && !preg_match("/[^\/:*?\"<>|]*/", $name)) {
            throw new \InvalidArgumentException("invalid value for \"name\" when calling ColorProfileProcessorApi.colorProfileProcessorImportColorProfile, must conform to the pattern /[^\/:*?\"<>|]*/.");
        }


        $resourcePath = '/api/processor/v1/colorProfiles/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tenant_id !== null) {
            if('form' === 'form' && is_array($tenant_id)) {
                foreach($tenant_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tenantId'] = $tenant_id;
            }
        }



        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($path !== null) {
            $formParams['path'] = ObjectSerializer::toFormValue($path);
        }
        // form params
        if ($custom_fields !== null) {
            $formParams['customFields'] = ObjectSerializer::toFormValue($custom_fields);
        }
        // aurigmafix 5
        $multipart = true;
        // form params
        if ($source_file !== null) {
            $multipart = true;
            $formParams['sourceFile'] = [];
            $paramFiles = is_array($source_file) ? $source_file : [$source_file];
            foreach ($paramFiles as $paramFile) {
                $formParams['sourceFile'][] = \GuzzleHttp\Psr7\try_fopen(
                    ObjectSerializer::toFormValue($paramFile),
                    'rb'
                );
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        // aurigmafix 6
                        if (gettype($formParamValueItem) === 'object') {
                            if (!($formParamValueItem instanceof StreamInterface 
                            || $formParamValueItem instanceof \Iterator 
                            || method_exists($formParamValueItem, '__toString'))) {
                                $formParamValueItem = json_encode($formParamValueItem);
                            }
                        } 
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation colorProfileProcessorUpdate
     *
     * Updates color profile file and metadata in storage
     *
     * @param  string $id Color profile entity unique identifier (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields custom_fields (optional)
     * @param  \SplFileObject $file Color profile source file (optional)
     *
     * @throws \Aurigma\AssetProcessor\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aurigma\AssetProcessor\Model\ColorProfileDto|\Aurigma\AssetProcessor\Model\ProblemDetails
     */
    public function colorProfileProcessorUpdate($id, $tenant_id = null, $name = null, $path = null, $custom_fields = null, $file = null)
    {
        list($response) = $this->colorProfileProcessorUpdateWithHttpInfo($id, $tenant_id, $name, $path, $custom_fields, $file);
        return $response;
    }

    /**
     * Operation colorProfileProcessorUpdateWithHttpInfo
     *
     * Updates color profile file and metadata in storage
     *
     * @param  string $id Color profile entity unique identifier (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     * @param  \SplFileObject $file Color profile source file (optional)
     *
     * @throws \Aurigma\AssetProcessor\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aurigma\AssetProcessor\Model\ColorProfileDto|\Aurigma\AssetProcessor\Model\ProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function colorProfileProcessorUpdateWithHttpInfo($id, $tenant_id = null, $name = null, $path = null, $custom_fields = null, $file = null)
    {
        $request = $this->colorProfileProcessorUpdateRequest($id, $tenant_id, $name, $path, $custom_fields, $file);

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
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Aurigma\AssetProcessor\Model\ColorProfileDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetProcessor\Model\ColorProfileDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Aurigma\AssetProcessor\Model\ProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetProcessor\Model\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aurigma\AssetProcessor\Model\ColorProfileDto';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetProcessor\Model\ColorProfileDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetProcessor\Model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation colorProfileProcessorUpdateAsync
     *
     * Updates color profile file and metadata in storage
     *
     * @param  string $id Color profile entity unique identifier (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     * @param  \SplFileObject $file Color profile source file (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function colorProfileProcessorUpdateAsync($id, $tenant_id = null, $name = null, $path = null, $custom_fields = null, $file = null)
    {
        return $this->colorProfileProcessorUpdateAsyncWithHttpInfo($id, $tenant_id, $name, $path, $custom_fields, $file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation colorProfileProcessorUpdateAsyncWithHttpInfo
     *
     * Updates color profile file and metadata in storage
     *
     * @param  string $id Color profile entity unique identifier (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     * @param  \SplFileObject $file Color profile source file (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function colorProfileProcessorUpdateAsyncWithHttpInfo($id, $tenant_id = null, $name = null, $path = null, $custom_fields = null, $file = null)
    {
        $returnType = '\Aurigma\AssetProcessor\Model\ColorProfileDto';
        $request = $this->colorProfileProcessorUpdateRequest($id, $tenant_id, $name, $path, $custom_fields, $file);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'colorProfileProcessorUpdate'
     *
     * @param  string $id Color profile entity unique identifier (required)
     * @param  int $tenant_id Tenant identifier (optional)
     * @param  string $name Color profile name (optional)
     * @param  string $path Color profile location (folder path) (optional)
     * @param  mixed $custom_fields (optional)
     * @param  \SplFileObject $file Color profile source file (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function colorProfileProcessorUpdateRequest($id, $tenant_id = null, $name = null, $path = null, $custom_fields = null, $file = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling colorProfileProcessorUpdate'
            );
        }
        if ($name !== null && !preg_match("/[^\/:*?\"<>|]*/", $name)) {
            throw new \InvalidArgumentException("invalid value for \"name\" when calling ColorProfileProcessorApi.colorProfileProcessorUpdate, must conform to the pattern /[^\/:*?\"<>|]*/.");
        }


        $resourcePath = '/api/processor/v1/colorProfiles/{id}/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tenant_id !== null) {
            if('form' === 'form' && is_array($tenant_id)) {
                foreach($tenant_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tenantId'] = $tenant_id;
            }
        }


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($path !== null) {
            $formParams['path'] = ObjectSerializer::toFormValue($path);
        }
        // form params
        if ($custom_fields !== null) {
            $formParams['customFields'] = ObjectSerializer::toFormValue($custom_fields);
        }
        // aurigmafix 5
        $multipart = true;
        // form params
        if ($file !== null) {
            $multipart = true;
            $formParams['file'] = [];
            $paramFiles = is_array($file) ? $file : [$file];
            foreach ($paramFiles as $paramFile) {
                $formParams['file'][] = \GuzzleHttp\Psr7\try_fopen(
                    ObjectSerializer::toFormValue($paramFile),
                    'rb'
                );
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        // aurigmafix 6
                        if (gettype($formParamValueItem) === 'object') {
                            if (!($formParamValueItem instanceof StreamInterface 
                            || $formParamValueItem instanceof \Iterator 
                            || method_exists($formParamValueItem, '__toString'))) {
                                $formParamValueItem = json_encode($formParamValueItem);
                            }
                        } 
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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