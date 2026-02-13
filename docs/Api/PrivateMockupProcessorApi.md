# Aurigma\AssetProcessor\PrivateMockupProcessorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**privateMockupProcessorBatchCreateMockupLinks()**](PrivateMockupProcessorApi.md#privateMockupProcessorBatchCreateMockupLinks) | **POST** /api/processor/v1/private-mockups/{id}/batch-create-mockup-links | Creates multiple mockup link files for specified layer groups of an existing 2D-mockup. |
| [**privateMockupProcessorCheck()**](PrivateMockupProcessorApi.md#privateMockupProcessorCheck) | **POST** /api/processor/v1/private-mockups/{id}/check | Checks if an existing mockup has any problems. |
| [**privateMockupProcessorCreateMockupLink()**](PrivateMockupProcessorApi.md#privateMockupProcessorCreateMockupLink) | **POST** /api/processor/v1/private-mockups/{id}/create-mockup-link | Creates single mockup link file for specified layers of an existing 2D-mockup. |
| [**privateMockupProcessorGetArtworkLayers()**](PrivateMockupProcessorApi.md#privateMockupProcessorGetArtworkLayers) | **GET** /api/processor/v1/private-mockups/{id}/artwork-layers | Returns a list of artwork layers descriptions for an existing mockup. |
| [**privateMockupProcessorGetLayersGroups()**](PrivateMockupProcessorApi.md#privateMockupProcessorGetLayersGroups) | **GET** /api/processor/v1/private-mockups/{id}/groups | Returns a list of layers groups for an existing mockup. |
| [**privateMockupProcessorImportMockup()**](PrivateMockupProcessorApi.md#privateMockupProcessorImportMockup) | **POST** /api/processor/v1/private-mockups/import | Imports mockup from source file and saves it to private storage. |
| [**privateMockupProcessorPreparePreview()**](PrivateMockupProcessorApi.md#privateMockupProcessorPreparePreview) | **GET** /api/processor/v1/private-mockups/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for mockup taken from private storage. |
| [**privateMockupProcessorPreparePreviewUrl()**](PrivateMockupProcessorApi.md#privateMockupProcessorPreparePreviewUrl) | **GET** /api/processor/v1/private-mockups/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for mockup taken from private storage. |
| [**privateMockupProcessorUpdate()**](PrivateMockupProcessorApi.md#privateMockupProcessorUpdate) | **POST** /api/processor/v1/private-mockups/{id}/update | Updates mockup file and metadata in private storage |


## `privateMockupProcessorBatchCreateMockupLinks()`

```php
privateMockupProcessorBatchCreateMockupLinks($id, $tenant_id, $mockup_links_batch_creation_model)
```

Creates multiple mockup link files for specified layer groups of an existing 2D-mockup.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup unique identifier.
$tenant_id = 56; // int | Tenant ID.
$mockup_links_batch_creation_model = new \Aurigma\AssetProcessor\Model\MockupLinksBatchCreationModel(); // \Aurigma\AssetProcessor\Model\MockupLinksBatchCreationModel | Mockup links batch creation parameters.

try {
    $apiInstance->privateMockupProcessorBatchCreateMockupLinks($id, $tenant_id, $mockup_links_batch_creation_model);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorBatchCreateMockupLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Mockup unique identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **mockup_links_batch_creation_model** | [**\Aurigma\AssetProcessor\Model\MockupLinksBatchCreationModel**](../Model/MockupLinksBatchCreationModel.md)| Mockup links batch creation parameters. | [optional] |

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

## `privateMockupProcessorCheck()`

```php
privateMockupProcessorCheck($id, $tenant_id): \Aurigma\AssetProcessor\Model\MockupProblemDto
```

Checks if an existing mockup has any problems.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup unique identifier.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->privateMockupProcessorCheck($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Mockup unique identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\MockupProblemDto**](../Model/MockupProblemDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupProcessorCreateMockupLink()`

```php
privateMockupProcessorCreateMockupLink($id, $tenant_id, $mockup_link_creation_model): \Aurigma\AssetProcessor\Model\MockupDto
```

Creates single mockup link file for specified layers of an existing 2D-mockup.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup unique identifier.
$tenant_id = 56; // int | Tenant ID.
$mockup_link_creation_model = new \Aurigma\AssetProcessor\Model\MockupLinkCreationModel(); // \Aurigma\AssetProcessor\Model\MockupLinkCreationModel | Mockup link creation parameters.

try {
    $result = $apiInstance->privateMockupProcessorCreateMockupLink($id, $tenant_id, $mockup_link_creation_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorCreateMockupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Mockup unique identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **mockup_link_creation_model** | [**\Aurigma\AssetProcessor\Model\MockupLinkCreationModel**](../Model/MockupLinkCreationModel.md)| Mockup link creation parameters. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupProcessorGetArtworkLayers()`

```php
privateMockupProcessorGetArtworkLayers($id, $tenant_id): \Aurigma\AssetProcessor\Model\MockupArtworkLayerDto[]
```

Returns a list of artwork layers descriptions for an existing mockup.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup unique identifier.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->privateMockupProcessorGetArtworkLayers($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorGetArtworkLayers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Mockup unique identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\MockupArtworkLayerDto[]**](../Model/MockupArtworkLayerDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupProcessorGetLayersGroups()`

```php
privateMockupProcessorGetLayersGroups($id, $tenant_id): \Aurigma\AssetProcessor\Model\MockupLayersGroupDto[]
```

Returns a list of layers groups for an existing mockup.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup unique identifier.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->privateMockupProcessorGetLayersGroups($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorGetLayersGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Mockup unique identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\MockupLayersGroupDto[]**](../Model/MockupLayersGroupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupProcessorImportMockup()`

```php
privateMockupProcessorImportMockup($source_file, $tenant_id, $owner_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $type): \Aurigma\AssetProcessor\Model\MockupDto
```

Imports mockup from source file and saves it to private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Mockup source file.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
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
    $result = $apiInstance->privateMockupProcessorImportMockup($source_file, $tenant_id, $owner_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorImportMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_file** | **\SplFileObject****\SplFileObject**| Mockup source file. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
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

## `privateMockupProcessorPreparePreview()`

```php
privateMockupProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id, $owner_id): \SplFileObject
```

Creates preview image for mockup taken from private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source mockup entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$jpeg_quality = 56; // int | Jpeg preview quality.
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode | Preview fit mode.
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode | Preview interpolation mode.
$background = 'background_example'; // string | Color to replace transparent background (e.g. 'White').
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source mockup entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **jpeg_quality** | **int**| Jpeg preview quality. | [optional] |
| **fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/.md)| Preview fit mode. | [optional] |
| **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/.md)| Preview interpolation mode. | [optional] |
| **background** | **string**| Color to replace transparent background (e.g. &#39;White&#39;). | [optional] |
| **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed. | [optional] [default to false] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

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

## `privateMockupProcessorPreparePreviewUrl()`

```php
privateMockupProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id, $owner_id): string
```

Creates preview image for mockup taken from private storage.

In case when preview is already existed returns existed preview

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source mockup entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$jpeg_quality = 56; // int | Jpeg preview quality.
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode | Preview fit mode.
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode | Preview interpolation mode.
$background = 'background_example'; // string | Color to replace transparent background (e.g. 'White').
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source mockup entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **jpeg_quality** | **int**| Jpeg preview quality. | [optional] |
| **fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/.md)| Preview fit mode. | [optional] |
| **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/.md)| Preview interpolation mode. | [optional] |
| **background** | **string**| Color to replace transparent background (e.g. &#39;White&#39;). | [optional] |
| **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed. | [optional] [default to false] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

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

## `privateMockupProcessorUpdate()`

```php
privateMockupProcessorUpdate($id, $tenant_id, $owner_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\MockupDto
```

Updates mockup file and metadata in private storage

If file is not provided metadata will be updated using file taken from storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup entity unique identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$name = 'name_example'; // string | Mockup name.
$path = 'path_example'; // string | Mockup location (folder path).
$custom_fields = NULL; // array<string,mixed> | Mockup custom attributes.
$file = "/path/to/file.txt"; // \SplFileObject | Mockup source file.

try {
    $result = $apiInstance->privateMockupProcessorUpdate($id, $tenant_id, $owner_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Mockup entity unique identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
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
