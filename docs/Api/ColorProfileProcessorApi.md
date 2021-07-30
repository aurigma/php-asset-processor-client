# Aurigma\AssetProcessor\ColorProfileProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**colorProfileProcessorImportColorProfile()**](ColorProfileProcessorApi.md#colorProfileProcessorImportColorProfile) | **POST** /api/processor/v1/colorProfiles/import | Imports color profile and saves it to storage.
[**colorProfileProcessorUpdate()**](ColorProfileProcessorApi.md#colorProfileProcessorUpdate) | **POST** /api/processor/v1/colorProfiles/{id}/update | Updates color profile file and metadata in storage


## `colorProfileProcessorImportColorProfile()`

```php
colorProfileProcessorImportColorProfile($source_file, $tenant_id, $name, $path, $custom_fields): \Aurigma\AssetProcessor\Model\ColorProfileDto
```

Imports color profile and saves it to storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\ColorProfileProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Color profile source file
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Color profile name
$path = 'path_example'; // string | Color profile location (folder path)
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->colorProfileProcessorImportColorProfile($source_file, $tenant_id, $name, $path, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColorProfileProcessorApi->colorProfileProcessorImportColorProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Color profile source file |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Color profile name | [optional]
 **path** | **string**| Color profile location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\ColorProfileDto**](../Model/ColorProfileDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `colorProfileProcessorUpdate()`

```php
colorProfileProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\ColorProfileDto
```

Updates color profile file and metadata in storage

If file is not provided metadata will be updated using file taken from storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\ColorProfileProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Color profile entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Color profile name
$path = 'path_example'; // string | Color profile location (folder path)
$custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Color profile source file

try {
    $result = $apiInstance->colorProfileProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColorProfileProcessorApi->colorProfileProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Color profile entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Color profile name | [optional]
 **path** | **string**| Color profile location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| Color profile source file | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\ColorProfileDto**](../Model/ColorProfileDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
