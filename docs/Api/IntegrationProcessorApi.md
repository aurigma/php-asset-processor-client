# Aurigma\AssetProcessor\IntegrationProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationProcessorPull()**](IntegrationProcessorApi.md#integrationProcessorPull) | **GET** /api/processor/v1/integration/pull/{tenantId}/{userId}/{designId} | Loads design from storage (private or public)
[**integrationProcessorPush()**](IntegrationProcessorApi.md#integrationProcessorPush) | **POST** /api/processor/v1/integration/push/{tenantId}/{userId}/{designId} | Saves design to private storage


## `integrationProcessorPull()`

```php
integrationProcessorPull($tenant_id, $user_id, $design_id): \SplFileObject
```

Loads design from storage (private or public)

At first it tries to find design in public storage,  and if it is not found, checks private storage for specified design owner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetProcessor\Api\IntegrationProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Design owner identifier
$design_id = 'design_id_example'; // string | Design identifier

try {
    $result = $apiInstance->integrationProcessorPull($tenant_id, $user_id, $design_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationProcessorApi->integrationProcessorPull: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier |
 **user_id** | **string**| Design owner identifier |
 **design_id** | **string**| Design identifier |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationProcessorPush()`

```php
integrationProcessorPush($tenant_id, $user_id, $design_id, $uploaded_file): \Aurigma\AssetProcessor\Model\DesignDto
```

Saves design to private storage

If design with specified identifier is not found then new design will be created using provided identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetProcessor\Api\IntegrationProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Design owner identifier
$design_id = 'design_id_example'; // string | Design identifier
$uploaded_file = "/path/to/file.txt"; // \SplFileObject | Design source file

try {
    $result = $apiInstance->integrationProcessorPush($tenant_id, $user_id, $design_id, $uploaded_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationProcessorApi->integrationProcessorPush: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier |
 **user_id** | **string**| Design owner identifier |
 **design_id** | **string**| Design identifier |
 **uploaded_file** | **\SplFileObject****\SplFileObject**| Design source file |

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
