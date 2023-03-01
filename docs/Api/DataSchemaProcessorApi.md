# Aurigma\AssetProcessor\DataSchemaProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSchemaProcessorGetLinks()**](DataSchemaProcessorApi.md#dataSchemaProcessorGetLinks) | **GET** /api/processor/v1/dataSchemas/{id}/links | Gets all links associated with this data schema.
[**dataSchemaProcessorImportDataSchema()**](DataSchemaProcessorApi.md#dataSchemaProcessorImportDataSchema) | **POST** /api/processor/v1/dataSchemas/import | Imports data schema and saves it to storage.
[**dataSchemaProcessorUpdate()**](DataSchemaProcessorApi.md#dataSchemaProcessorUpdate) | **POST** /api/processor/v1/dataSchemas/{id}/update | Updates data schema file and metadata in storage


## `dataSchemaProcessorGetLinks()`

```php
dataSchemaProcessorGetLinks($id, $tenant_id): \Aurigma\AssetProcessor\Model\DataSchemaLinksInfo
```

Gets all links associated with this data schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSchemaProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data schema entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemaProcessorGetLinks($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemaProcessorApi->dataSchemaProcessorGetLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data schema entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSchemaLinksInfo**](../Model/DataSchemaLinksInfo.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemaProcessorImportDataSchema()`

```php
dataSchemaProcessorImportDataSchema($source_file, $tenant_id, $name, $path, $custom_fields): \Aurigma\AssetProcessor\Model\DataSchemaDto
```

Imports data schema and saves it to storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSchemaProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Data schema source file
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Data schema name
$path = 'path_example'; // string | Data schema location (folder path)
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->dataSchemaProcessorImportDataSchema($source_file, $tenant_id, $name, $path, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemaProcessorApi->dataSchemaProcessorImportDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Data schema source file |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Data schema name | [optional]
 **path** | **string**| Data schema location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSchemaDto**](../Model/DataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemaProcessorUpdate()`

```php
dataSchemaProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\DataSchemaDto
```

Updates data schema file and metadata in storage

If file is not provided metadata will be updated using file taken from storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSchemaProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data schema entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Data schema name
$path = 'path_example'; // string | Data schema location (folder path)
$custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Data schema source file

try {
    $result = $apiInstance->dataSchemaProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemaProcessorApi->dataSchemaProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data schema entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Data schema name | [optional]
 **path** | **string**| Data schema location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| Data schema source file | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSchemaDto**](../Model/DataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
