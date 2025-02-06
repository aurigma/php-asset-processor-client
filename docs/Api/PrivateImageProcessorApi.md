# Aurigma\AssetProcessor\PrivateImageProcessorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**privateImageProcessorImportImage()**](PrivateImageProcessorApi.md#privateImageProcessorImportImage) | **POST** /api/processor/v1/private-images/import | Imports image from source file and saves it to private storage. |
| [**privateImageProcessorPreparePreview()**](PrivateImageProcessorApi.md#privateImageProcessorPreparePreview) | **GET** /api/processor/v1/private-images/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for image taken from private storage. |
| [**privateImageProcessorPreparePreviewUrl()**](PrivateImageProcessorApi.md#privateImageProcessorPreparePreviewUrl) | **GET** /api/processor/v1/private-images/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for image taken from private storage. |
| [**privateImageProcessorUpdate()**](PrivateImageProcessorApi.md#privateImageProcessorUpdate) | **POST** /api/processor/v1/private-images/{id}/update | Updates image file and metadata in private storage. |


## `privateImageProcessorImportImage()`

```php
privateImageProcessorImportImage($source_file, $tenant_id, $owner_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $preview_settings_apply_auto_crop): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageImageDto
```

Imports image from source file and saves it to private storage.

Additionally makes image preview if requested.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Image source file.
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$name = 'name_example'; // string | Image name.
$path = 'path_example'; // string | Image location (folder path).
$custom_fields = NULL; // array<string,mixed> | Image custom attributes.
$preview_settings_make_preview = True; // bool | Force make preview.
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace.
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name.
$preview_settings_width = 56; // int | Preview image width.
$preview_settings_height = 56; // int | Preview image heigth.
$preview_settings_jpeg_quality = 56; // int | Quality of Jpeg previews.
$preview_settings_fit_mode = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode
$preview_settings_interpolation_mode = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode
$preview_settings_background = 'preview_settings_background_example'; // string | Background color for transparent images.
$preview_settings_apply_auto_crop = True; // bool | Indicates if the image should be automatically cropped.

try {
    $result = $apiInstance->privateImageProcessorImportImage($source_file, $tenant_id, $owner_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $preview_settings_apply_auto_crop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateImageProcessorApi->privateImageProcessorImportImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_file** | **\SplFileObject****\SplFileObject**| Image source file. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **name** | **string**| Image name. | [optional] |
| **path** | **string**| Image location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Image custom attributes. | [optional] |
| **preview_settings_make_preview** | **bool**| Force make preview. | [optional] |
| **preview_settings_namespace** | **string**| Preview namespace. | [optional] |
| **preview_settings_name** | **string**| Preview name. | [optional] |
| **preview_settings_width** | **int**| Preview image width. | [optional] |
| **preview_settings_height** | **int**| Preview image heigth. | [optional] |
| **preview_settings_jpeg_quality** | **int**| Quality of Jpeg previews. | [optional] |
| **preview_settings_fit_mode** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode**](../Model/AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode.md)|  | [optional] |
| **preview_settings_interpolation_mode** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode**](../Model/AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode.md)|  | [optional] |
| **preview_settings_background** | **string**| Background color for transparent images. | [optional] |
| **preview_settings_apply_auto_crop** | **bool**| Indicates if the image should be automatically cropped. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageImageDto**](../Model/AurigmaAssetStorageImageDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateImageProcessorPreparePreview()`

```php
privateImageProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $apply_auto_crop, $force, $tenant_id, $owner_id): \SplFileObject
```

Creates preview image for image taken from private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source image entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$jpeg_quality = 56; // int | Quality of Jpeg previews
$fit_mode = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode(); // AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode | Image preview fit mode
$interpolation_mode = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode(); // AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode | Image preview interpolation mode
$background = 'background_example'; // string | Background color for transparent images
$apply_auto_crop = false; // bool | Indicates if the image should be automatically cropped.
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateImageProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $apply_auto_crop, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateImageProcessorApi->privateImageProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source image entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **jpeg_quality** | **int**| Quality of Jpeg previews | [optional] |
| **fit_mode** | [**AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode**](../Model/.md)| Image preview fit mode | [optional] |
| **interpolation_mode** | [**AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode**](../Model/.md)| Image preview interpolation mode | [optional] |
| **background** | **string**| Background color for transparent images | [optional] |
| **apply_auto_crop** | **bool**| Indicates if the image should be automatically cropped. | [optional] [default to false] |
| **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed. | [optional] [default to false] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

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

## `privateImageProcessorPreparePreviewUrl()`

```php
privateImageProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $apply_auto_crop, $force, $tenant_id, $owner_id): string
```

Creates preview image for image taken from private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source image entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$jpeg_quality = 56; // int | Quality of Jpeg previews
$fit_mode = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode(); // AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode | Image preview fit mode
$interpolation_mode = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode(); // AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode | Image preview interpolation mode
$background = 'background_example'; // string | Background color for transparent images
$apply_auto_crop = false; // bool | Indicates if the image should be automatically cropped.
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateImageProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $apply_auto_crop, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateImageProcessorApi->privateImageProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source image entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **jpeg_quality** | **int**| Quality of Jpeg previews | [optional] |
| **fit_mode** | [**AurigmaAssetProcessorWebApiEnumsImagePreviewFitMode**](../Model/.md)| Image preview fit mode | [optional] |
| **interpolation_mode** | [**AurigmaAssetProcessorWebApiEnumsImagePreviewInterpolationMode**](../Model/.md)| Image preview interpolation mode | [optional] |
| **background** | **string**| Background color for transparent images | [optional] |
| **apply_auto_crop** | **bool**| Indicates if the image should be automatically cropped. | [optional] [default to false] |
| **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed. | [optional] [default to false] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

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

## `privateImageProcessorUpdate()`

```php
privateImageProcessorUpdate($id, $tenant_id, $owner_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageImageDto
```

Updates image file and metadata in private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Image entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$name = 'name_example'; // string | Image name.
$path = 'path_example'; // string | Image location (folder path).
$custom_fields = NULL; // array<string,mixed> | Image custom attributes.
$file = "/path/to/file.txt"; // \SplFileObject | Image source file.

try {
    $result = $apiInstance->privateImageProcessorUpdate($id, $tenant_id, $owner_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateImageProcessorApi->privateImageProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Image entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **name** | **string**| Image name. | [optional] |
| **path** | **string**| Image location (folder path). | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Image custom attributes. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Image source file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageImageDto**](../Model/AurigmaAssetStorageImageDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
