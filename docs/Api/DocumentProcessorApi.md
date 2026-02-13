# Aurigma\AssetProcessor\DocumentProcessorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentProcessorCreateBlankToggleSet()**](DocumentProcessorApi.md#documentProcessorCreateBlankToggleSet) | **POST** /api/processor/v1/documents/blank-toggle-set | Creates a new blank toggle set and saves it to the storage. |
| [**documentProcessorImportDocument()**](DocumentProcessorApi.md#documentProcessorImportDocument) | **POST** /api/processor/v1/documents/import | Imports a document from the source file and saves it to the storage. |
| [**documentProcessorUpdate()**](DocumentProcessorApi.md#documentProcessorUpdate) | **POST** /api/processor/v1/documents/{id}/update | Updates the document file and metadata in the storage. |


## `documentProcessorCreateBlankToggleSet()`

```php
documentProcessorCreateBlankToggleSet($tenant_id, $create_blank_toggle_set_model): \Aurigma\AssetProcessor\Model\DocumentDto
```

Creates a new blank toggle set and saves it to the storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DocumentProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$create_blank_toggle_set_model = new \Aurigma\AssetProcessor\Model\CreateBlankToggleSetModel(); // \Aurigma\AssetProcessor\Model\CreateBlankToggleSetModel | Operation paramsHolder:.

try {
    $result = $apiInstance->documentProcessorCreateBlankToggleSet($tenant_id, $create_blank_toggle_set_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentProcessorApi->documentProcessorCreateBlankToggleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **create_blank_toggle_set_model** | [**\Aurigma\AssetProcessor\Model\CreateBlankToggleSetModel**](../Model/CreateBlankToggleSetModel.md)| Operation paramsHolder:. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\DocumentDto**](../Model/DocumentDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentProcessorImportDocument()`

```php
documentProcessorImportDocument($source_file, $tenant_id, $name, $path, $custom_fields, $type, $format): \Aurigma\AssetProcessor\Model\DocumentDto
```

Imports a document from the source file and saves it to the storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DocumentProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Document source file.
$tenant_id = 56; // int | Tenant ID.
$name = 'name_example'; // string | Document name.
$path = 'path_example'; // string | Document location (folder path).
$custom_fields = NULL; // array<string,mixed> | Document custom attributes.
$type = new \Aurigma\AssetProcessor\Model\ImportDocumentType(); // \Aurigma\AssetProcessor\Model\ImportDocumentType | Document type.
$format = new \Aurigma\AssetProcessor\Model\ImportDocumentFormatType(); // \Aurigma\AssetProcessor\Model\ImportDocumentFormatType | Document format.

try {
    $result = $apiInstance->documentProcessorImportDocument($source_file, $tenant_id, $name, $path, $custom_fields, $type, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentProcessorApi->documentProcessorImportDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_file** | **\SplFileObject****\SplFileObject**| Document source file. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **name** | **string**| Document name. | [optional] |
| **path** | **string**| Document location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Document custom attributes. | [optional] |
| **type** | [**\Aurigma\AssetProcessor\Model\ImportDocumentType**](../Model/ImportDocumentType.md)| Document type. | [optional] |
| **format** | [**\Aurigma\AssetProcessor\Model\ImportDocumentFormatType**](../Model/ImportDocumentFormatType.md)| Document format. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\DocumentDto**](../Model/DocumentDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentProcessorUpdate()`

```php
documentProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file, $type, $format): \Aurigma\AssetProcessor\Model\DocumentDto
```

Updates the document file and metadata in the storage.

If the document file is not provided, the metadata will be updated using the file from the repository.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DocumentProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Document entity ID.
$tenant_id = 56; // int | Tenant ID.
$name = 'name_example'; // string | Document name.
$path = 'path_example'; // string | Document location (folder path).
$custom_fields = NULL; // array<string,mixed> | Document custom attributes.
$file = "/path/to/file.txt"; // \SplFileObject | Document source file.
$type = new \Aurigma\AssetProcessor\Model\ImportDocumentType(); // \Aurigma\AssetProcessor\Model\ImportDocumentType | Document type.
$format = new \Aurigma\AssetProcessor\Model\ImportDocumentFormatType(); // \Aurigma\AssetProcessor\Model\ImportDocumentFormatType | Document format.

try {
    $result = $apiInstance->documentProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file, $type, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentProcessorApi->documentProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Document entity ID. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **name** | **string**| Document name. | [optional] |
| **path** | **string**| Document location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Document custom attributes. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Document source file. | [optional] |
| **type** | [**\Aurigma\AssetProcessor\Model\ImportDocumentType**](../Model/ImportDocumentType.md)| Document type. | [optional] |
| **format** | [**\Aurigma\AssetProcessor\Model\ImportDocumentFormatType**](../Model/ImportDocumentFormatType.md)| Document format. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\DocumentDto**](../Model/DocumentDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
