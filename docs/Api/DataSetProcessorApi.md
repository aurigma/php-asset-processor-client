# Aurigma\AssetProcessor\DataSetProcessorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dataSetProcessorCheck()**](DataSetProcessorApi.md#dataSetProcessorCheck) | **POST** /api/processor/v1/data-sets/{id}/check | Checks if data set taken from storage has any problems. |
| [**dataSetProcessorEmbedDataSchema()**](DataSetProcessorApi.md#dataSetProcessorEmbedDataSchema) | **POST** /api/processor/v1/data-sets/{id}/schema/embed | Embeds linked data schema to the data set. |
| [**dataSetProcessorExportDataSet()**](DataSetProcessorApi.md#dataSetProcessorExportDataSet) | **GET** /api/processor/v1/data-sets/{id}/export | Exports data set. |
| [**dataSetProcessorExtractDataSchema()**](DataSetProcessorApi.md#dataSetProcessorExtractDataSchema) | **POST** /api/processor/v1/data-sets/{id}/schema/extract | Extracts data schema from data set and saves it to the specified folder. |
| [**dataSetProcessorImportDataSet()**](DataSetProcessorApi.md#dataSetProcessorImportDataSet) | **POST** /api/processor/v1/data-sets/import | Imports data set and saves it to storage. |
| [**dataSetProcessorLinkDataSchema()**](DataSetProcessorApi.md#dataSetProcessorLinkDataSchema) | **POST** /api/processor/v1/data-sets/{id}/schema/link | Links data schema to the data set. |
| [**dataSetProcessorUpdate()**](DataSetProcessorApi.md#dataSetProcessorUpdate) | **POST** /api/processor/v1/data-sets/{id}/update | Updates data set file and metadata in storage. |


## `dataSetProcessorCheck()`

```php
dataSetProcessorCheck($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorAppServicesModelsDataSetDataSetProblemInfo
```

Checks if data set taken from storage has any problems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSetProcessorCheck($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data set entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorAppServicesModelsDataSetDataSetProblemInfo**](../Model/AurigmaAssetProcessorAppServicesModelsDataSetDataSetProblemInfo.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorEmbedDataSchema()`

```php
dataSetProcessorEmbedDataSchema($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto
```

Embeds linked data schema to the data set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSetProcessorEmbedDataSchema($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorEmbedDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data set entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto**](../Model/AurigmaAssetStorageDataSetDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

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

Exports data set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSetProcessorExportDataSet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorExportDataSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data set entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorExtractDataSchema()`

```php
dataSetProcessorExtractDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_data_set_data_set_extract_data_schema_model)
```

Extracts data schema from data set and saves it to the specified folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_data_set_data_set_extract_data_schema_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDataSetDataSetExtractDataSchemaModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDataSetDataSetExtractDataSchemaModel | Extract data schema operation parameters.

try {
    $apiInstance->dataSetProcessorExtractDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_data_set_data_set_extract_data_schema_model);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorExtractDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data set entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_data_set_data_set_extract_data_schema_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDataSetDataSetExtractDataSchemaModel**](../Model/AurigmaAssetProcessorWebApiModelsDataSetDataSetExtractDataSchemaModel.md)| Extract data schema operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorImportDataSet()`

```php
dataSetProcessorImportDataSet($source_file, $tenant_id, $name, $path, $custom_fields): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto
```

Imports data set and saves it to storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Data set source file.
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Data set name.
$path = 'path_example'; // string | Data set location (folder path).
$custom_fields = NULL; // array<string,mixed> | Data set custom attributes.

try {
    $result = $apiInstance->dataSetProcessorImportDataSet($source_file, $tenant_id, $name, $path, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorImportDataSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_file** | **\SplFileObject****\SplFileObject**| Data set source file. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **name** | **string**| Data set name. | [optional] |
| **path** | **string**| Data set location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Data set custom attributes. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto**](../Model/AurigmaAssetStorageDataSetDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorLinkDataSchema()`

```php
dataSetProcessorLinkDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_data_set_data_set_link_data_schema_model): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto
```

Links data schema to the data set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_data_set_data_set_link_data_schema_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDataSetDataSetLinkDataSchemaModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDataSetDataSetLinkDataSchemaModel | Link schema operation parameters.

try {
    $result = $apiInstance->dataSetProcessorLinkDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_data_set_data_set_link_data_schema_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorLinkDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data set entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_data_set_data_set_link_data_schema_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDataSetDataSetLinkDataSchemaModel**](../Model/AurigmaAssetProcessorWebApiModelsDataSetDataSetLinkDataSchemaModel.md)| Link schema operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto**](../Model/AurigmaAssetStorageDataSetDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSetProcessorUpdate()`

```php
dataSetProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto
```

Updates data set file and metadata in storage.

If file is not provided metadata will be updated using file taken from storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetProcessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetProcessor\Api\DataSetProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data set entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Data set name.
$path = 'path_example'; // string | Data set location (folder path).
$custom_fields = NULL; // array<string,mixed> | Data set custom attributes.
$file = "/path/to/file.txt"; // \SplFileObject | Data set source file.

try {
    $result = $apiInstance->dataSetProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetProcessorApi->dataSetProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data set entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **name** | **string**| Data set name. | [optional] |
| **path** | **string**| Data set location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Data set custom attributes. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Data set source file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDataSetDto**](../Model/AurigmaAssetStorageDataSetDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
