# Aurigma\AssetProcessor\MockupProcessorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mockupProcessorImportMockup()**](MockupProcessorApi.md#mockupProcessorImportMockup) | **POST** /api/processor/v1/mockups/import | Imports a mockup from the source file and saves it to the storage. |
| [**mockupProcessorPreparePreview()**](MockupProcessorApi.md#mockupProcessorPreparePreview) | **GET** /api/processor/v1/mockups/{id}/preview/{namespace}/{name}/{width}x{height} | Creates a preview for the mockup taken from the storage. |
| [**mockupProcessorPreparePreviewUrl()**](MockupProcessorApi.md#mockupProcessorPreparePreviewUrl) | **GET** /api/processor/v1/mockups/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates a preview for the mockup taken from the storage. |
| [**mockupProcessorUpdate()**](MockupProcessorApi.md#mockupProcessorUpdate) | **POST** /api/processor/v1/mockups/{id}/update | Updates the mockup file and metadata in the storage. |


## `mockupProcessorImportMockup()`

```php
mockupProcessorImportMockup($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $type): \Aurigma\AssetProcessor\Model\MockupDto
```

Imports a mockup from the source file and saves it to the storage.

Additionally makes the preview of mockup, if required.

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


$apiInstance = new Aurigma\AssetProcessor\Api\MockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Mockup source file.
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Mockup name.
$path = 'path_example'; // string | Mockup location (folder path).
$custom_fields = NULL; // array<string,mixed> | Mockup custom attributes.
$preview_settings_make_preview = True; // bool | Indicates if a preview is needed.
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace.
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name.
$preview_settings_width = 56; // int | Preview width.
$preview_settings_height = 56; // int | Preview height.
$preview_settings_jpeg_quality = 56; // int | Jpeg preview quality.
$preview_settings_fit_mode = new \Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode | Preview fit mode.
$preview_settings_interpolation_mode = new \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode | Preview interpolation mode.
$preview_settings_background = 'preview_settings_background_example'; // string | Color to replace transparent background (e.g. 'white').
$type = new \Aurigma\AssetProcessor\Model\ImportMockupType(); // \Aurigma\AssetProcessor\Model\ImportMockupType | Mockup type.

try {
    $result = $apiInstance->mockupProcessorImportMockup($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockupProcessorApi->mockupProcessorImportMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_file** | **\SplFileObject****\SplFileObject**| Mockup source file. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **name** | **string**| Mockup name. | [optional] |
| **path** | **string**| Mockup location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Mockup custom attributes. | [optional] |
| **preview_settings_make_preview** | **bool**| Indicates if a preview is needed. | [optional] |
| **preview_settings_namespace** | **string**| Preview namespace. | [optional] |
| **preview_settings_name** | **string**| Preview name. | [optional] |
| **preview_settings_width** | **int**| Preview width. | [optional] |
| **preview_settings_height** | **int**| Preview height. | [optional] |
| **preview_settings_jpeg_quality** | **int**| Jpeg preview quality. | [optional] |
| **preview_settings_fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/MockupPreviewFitMode.md)| Preview fit mode. | [optional] |
| **preview_settings_interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/MockupPreviewInterpolationMode.md)| Preview interpolation mode. | [optional] |
| **preview_settings_background** | **string**| Color to replace transparent background (e.g. &#39;white&#39;). | [optional] |
| **type** | [**\Aurigma\AssetProcessor\Model\ImportMockupType**](../Model/ImportMockupType.md)| Mockup type. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mockupProcessorPreparePreview()`

```php
mockupProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id): \SplFileObject
```

Creates a preview for the mockup taken from the storage.

In the case when the preview already exists, returns the existing preview.

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


$apiInstance = new Aurigma\AssetProcessor\Api\MockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source mockup entity ID.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview mockup width.
$height = 56; // int | Preview mockup height.
$jpeg_quality = 56; // int | Jpeg preview quality.
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode | Preview fit mode.
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode | Preview interpolation mode.
$background = 'background_example'; // string | Color to replace transparent background (e.g. 'White').
$force = false; // bool | If set to 'true', a new preview will be prepared, even if the preview already existed.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->mockupProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockupProcessorApi->mockupProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source mockup entity ID. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview mockup width. | |
| **height** | **int**| Preview mockup height. | |
| **jpeg_quality** | **int**| Jpeg preview quality. | [optional] |
| **fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/.md)| Preview fit mode. | [optional] |
| **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/.md)| Preview interpolation mode. | [optional] |
| **background** | **string**| Color to replace transparent background (e.g. &#39;White&#39;). | [optional] |
| **force** | **bool**| If set to &#39;true&#39;, a new preview will be prepared, even if the preview already existed. | [optional] [default to false] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mockupProcessorPreparePreviewUrl()`

```php
mockupProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id): string
```

Creates a preview for the mockup taken from the storage.

In the case when the preview already exists, returns the existing preview.

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


$apiInstance = new Aurigma\AssetProcessor\Api\MockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source mockup entity ID.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview mockup width.
$height = 56; // int | Preview mockup height.
$jpeg_quality = 56; // int | Jpeg preview quality.
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode | Preview fit mode.
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode | Preview interpolation mode.
$background = 'background_example'; // string | Color to replace transparent background (e.g. 'White').
$force = false; // bool | If set to 'true', a new preview will be prepared, even if the preview already existed.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->mockupProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockupProcessorApi->mockupProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source mockup entity ID. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview mockup width. | |
| **height** | **int**| Preview mockup height. | |
| **jpeg_quality** | **int**| Jpeg preview quality. | [optional] |
| **fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/.md)| Preview fit mode. | [optional] |
| **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/.md)| Preview interpolation mode. | [optional] |
| **background** | **string**| Color to replace transparent background (e.g. &#39;White&#39;). | [optional] |
| **force** | **bool**| If set to &#39;true&#39;, a new preview will be prepared, even if the preview already existed. | [optional] [default to false] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mockupProcessorUpdate()`

```php
mockupProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\MockupDto
```

Updates the mockup file and metadata in the storage.

If the mockup file is not provided, the metadata will be updated using the file from the repository.

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


$apiInstance = new Aurigma\AssetProcessor\Api\MockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup entity ID.
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Mockup name.
$path = 'path_example'; // string | Mockup location (folder path).
$custom_fields = NULL; // array<string,mixed> | Mockup custom attributes.
$file = "/path/to/file.txt"; // \SplFileObject | Mockup source file.

try {
    $result = $apiInstance->mockupProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockupProcessorApi->mockupProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Mockup entity ID. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **name** | **string**| Mockup name. | [optional] |
| **path** | **string**| Mockup location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Mockup custom attributes. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Mockup source file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
