# Aurigma\AssetProcessor\PaletteProcessorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paletteProcessorImportPalette()**](PaletteProcessorApi.md#paletteProcessorImportPalette) | **POST** /api/processor/v1/palettes/import | Imports palette from source file and saves it to storage. |
| [**paletteProcessorPreparePreview()**](PaletteProcessorApi.md#paletteProcessorPreparePreview) | **GET** /api/processor/v1/palettes/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for palette taken from storage. |
| [**paletteProcessorPreparePreviewUrl()**](PaletteProcessorApi.md#paletteProcessorPreparePreviewUrl) | **GET** /api/processor/v1/palettes/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for palette taken from storage. |
| [**paletteProcessorReimportPalette()**](PaletteProcessorApi.md#paletteProcessorReimportPalette) | **POST** /api/processor/v1/palettes/{id}/re-import | Re-imports palette from source file and updates palette file and metadata in storage. |
| [**paletteProcessorUpdate()**](PaletteProcessorApi.md#paletteProcessorUpdate) | **POST** /api/processor/v1/palettes/{id}/update | Updates palette file and metadata in storage. |


## `paletteProcessorImportPalette()`

```php
paletteProcessorImportPalette($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_format): \Aurigma\AssetProcessor\Model\AurigmaAssetStoragePaletteDto
```

Imports palette from source file and saves it to storage.

Additionally makes palette preview if requested.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PaletteProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Palette source file.
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Palette name.
$path = 'path_example'; // string | Palette location (folder path).
$custom_fields = NULL; // array<string,mixed> | Palette custom attributes.
$preview_settings_make_preview = True; // bool | Force make preview.
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace.
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name.
$preview_settings_width = 56; // int | Preview image width.
$preview_settings_height = 56; // int | Preview image heigth.
$preview_settings_format = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsPalettePreviewFormat(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsPalettePreviewFormat | Preview image format.

try {
    $result = $apiInstance->paletteProcessorImportPalette($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaletteProcessorApi->paletteProcessorImportPalette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_file** | **\SplFileObject****\SplFileObject**| Palette source file. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **name** | **string**| Palette name. | [optional] |
| **path** | **string**| Palette location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Palette custom attributes. | [optional] |
| **preview_settings_make_preview** | **bool**| Force make preview. | [optional] |
| **preview_settings_namespace** | **string**| Preview namespace. | [optional] |
| **preview_settings_name** | **string**| Preview name. | [optional] |
| **preview_settings_width** | **int**| Preview image width. | [optional] |
| **preview_settings_height** | **int**| Preview image heigth. | [optional] |
| **preview_settings_format** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsPalettePreviewFormat**](../Model/AurigmaAssetProcessorWebApiEnumsPalettePreviewFormat.md)| Preview image format. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStoragePaletteDto**](../Model/AurigmaAssetStoragePaletteDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paletteProcessorPreparePreview()`

```php
paletteProcessorPreparePreview($id, $namespace, $name, $width, $height, $format, $force, $tenant_id): \SplFileObject
```

Creates preview image for palette taken from storage.

In case when preview is already existed returns existed preview.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PaletteProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source palette entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorDomainServicesEnumsPalettePalettePreviewFormat(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorDomainServicesEnumsPalettePalettePreviewFormat
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->paletteProcessorPreparePreview($id, $namespace, $name, $width, $height, $format, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaletteProcessorApi->paletteProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source palette entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **format** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorDomainServicesEnumsPalettePalettePreviewFormat**](../Model/.md)|  | [optional] |
| **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed. | [optional] [default to false] |
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

## `paletteProcessorPreparePreviewUrl()`

```php
paletteProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $format, $force, $tenant_id): string
```

Creates preview image for palette taken from storage.

In case when preview is already existed returns existed preview.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PaletteProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source palette entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorDomainServicesEnumsPalettePalettePreviewFormat(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorDomainServicesEnumsPalettePalettePreviewFormat
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->paletteProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $format, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaletteProcessorApi->paletteProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source palette entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **format** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorDomainServicesEnumsPalettePalettePreviewFormat**](../Model/.md)|  | [optional] |
| **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed. | [optional] [default to false] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paletteProcessorReimportPalette()`

```php
paletteProcessorReimportPalette($id, $source_file, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStoragePaletteDto
```

Re-imports palette from source file and updates palette file and metadata in storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PaletteProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Palette entity unique identifier.
$source_file = "/path/to/file.txt"; // \SplFileObject | Palette source file.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->paletteProcessorReimportPalette($id, $source_file, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaletteProcessorApi->paletteProcessorReimportPalette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Palette entity unique identifier. | |
| **source_file** | **\SplFileObject****\SplFileObject**| Palette source file. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStoragePaletteDto**](../Model/AurigmaAssetStoragePaletteDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paletteProcessorUpdate()`

```php
paletteProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\AurigmaAssetStoragePaletteDto
```

Updates palette file and metadata in storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PaletteProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Palette entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Palette name.
$path = 'path_example'; // string | Palette location (folder path).
$custom_fields = NULL; // array<string,mixed> | Palette custom attributes.
$file = "/path/to/file.txt"; // \SplFileObject | Palette source file.

try {
    $result = $apiInstance->paletteProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaletteProcessorApi->paletteProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Palette entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **name** | **string**| Palette name. | [optional] |
| **path** | **string**| Palette location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Palette custom attributes. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Palette source file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStoragePaletteDto**](../Model/AurigmaAssetStoragePaletteDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
