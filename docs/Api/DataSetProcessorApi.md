# Aurigma\AssetProcessor\DataSetProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSetProcessorCheck()**](DataSetProcessorApi.md#dataSetProcessorCheck) | **POST** /api/processor/v1/dataSets/{id}/check | Checks if data set taken from storage has any problems
[**dataSetProcessorEmbedDataSchema()**](DataSetProcessorApi.md#dataSetProcessorEmbedDataSchema) | **POST** /api/processor/v1/dataSets/{id}/schema/embed | Embeds linked data schema to the data set
[**dataSetProcessorExportDataSet()**](DataSetProcessorApi.md#dataSetProcessorExportDataSet) | **GET** /api/processor/v1/dataSets/{id}/export | Exports data set
[**dataSetProcessorExtractDataSchema()**](DataSetProcessorApi.md#dataSetProcessorExtractDataSchema) | **POST** /api/processor/v1/dataSets/{id}/schema/extract | Extracts data schema from data set and saves it to the specified folder
[**dataSetProcessorImportDataSet()**](DataSetProcessorApi.md#dataSetProcessorImportDataSet) | **POST** /api/processor/v1/dataSets/import | Imports data set and saves it to storage.
[**dataSetProcessorLinkDataSchema()**](DataSetProcessorApi.md#dataSetProcessorLinkDataSchema) | **POST** /api/processor/v1/dataSets/{id}/schema/link | Links data schema to the data set
[**dataSetProcessorUpdate()**](DataSetProcessorApi.md#dataSetProcessorUpdate) | **POST** /api/processor/v1/dataSets/{id}/update | Updates data set file and metadata in storage


## `dataSetProcessorCheck()`

```php
dataSetProcessorCheck($id, $tenant_id): \Aurigma\AssetProcessor\Model\DataSetProblemInfo
```

Checks if data set taken from storage has any problems

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


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSetProcessorCheck($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data set entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSetProblemInfo**](../Model/DataSetProblemInfo.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorEmbedDataSchema()`

```php
dataSetProcessorEmbedDataSchema($id, $tenant_id): \Aurigma\AssetProcessor\Model\DataSetDto
```

Embeds linked data schema to the data set

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


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSetProcessorEmbedDataSchema($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorEmbedDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data set entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSetDto**](../Model/DataSetDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorExportDataSet()`

```php
dataSetProcessorExportDataSet($id, $tenant_id): \SplFileObject
```

Exports data set

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


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSetProcessorExportDataSet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorExportDataSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data set entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

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

## `dataSetProcessorExtractDataSchema()`

```php
dataSetProcessorExtractDataSchema($id, $tenant_id, $data_set_extract_data_schema_model)
```

Extracts data schema from data set and saves it to the specified folder

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


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$data_set_extract_data_schema_model = new \Aurigma\AssetProcessor\Model\DataSetExtractDataSchemaModel(); // \Aurigma\AssetProcessor\Model\DataSetExtractDataSchemaModel | Extract data schema operation parameters

try {
    $apiInstance->dataSetProcessorExtractDataSchema($id, $tenant_id, $data_set_extract_data_schema_model);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorExtractDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data set entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **data_set_extract_data_schema_model** | [**\Aurigma\AssetProcessor\Model\DataSetExtractDataSchemaModel**](../Model/DataSetExtractDataSchemaModel.md)| Extract data schema operation parameters | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorImportDataSet()`

```php
dataSetProcessorImportDataSet($source_file, $tenant_id, $name, $path, $custom_fields): \Aurigma\AssetProcessor\Model\DataSetDto
```

Imports data set and saves it to storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Data set source file
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Data set name
$path = 'path_example'; // string | Data set location (folder path)
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->dataSetProcessorImportDataSet($source_file, $tenant_id, $name, $path, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorImportDataSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Data set source file |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Data set name | [optional]
 **path** | **string**| Data set location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSetDto**](../Model/DataSetDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorLinkDataSchema()`

```php
dataSetProcessorLinkDataSchema($id, $tenant_id, $data_set_link_data_schema_model): \Aurigma\AssetProcessor\Model\DataSetDto
```

Links data schema to the data set

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


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$data_set_link_data_schema_model = new \Aurigma\AssetProcessor\Model\DataSetLinkDataSchemaModel(); // \Aurigma\AssetProcessor\Model\DataSetLinkDataSchemaModel | Link schema operation parameters

try {
    $result = $apiInstance->dataSetProcessorLinkDataSchema($id, $tenant_id, $data_set_link_data_schema_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorLinkDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data set entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **data_set_link_data_schema_model** | [**\Aurigma\AssetProcessor\Model\DataSetLinkDataSchemaModel**](../Model/DataSetLinkDataSchemaModel.md)| Link schema operation parameters | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSetDto**](../Model/DataSetDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorUpdate()`

```php
dataSetProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\DataSetDto
```

Updates data set file and metadata in storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Data set name
$path = 'path_example'; // string | Data set location (folder path)
$custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Data set source file

try {
    $result = $apiInstance->dataSetProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data set entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Data set name | [optional]
 **path** | **string**| Data set location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| Data set source file | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DataSetDto**](../Model/DataSetDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
