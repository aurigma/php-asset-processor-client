# Aurigma\AssetProcessor\ImageProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**imageProcessorImportImage()**](ImageProcessorApi.md#imageProcessorImportImage) | **POST** /api/processor/v1/images/import | Imports image from source file and saves it to storage.
[**imageProcessorPreparePreview()**](ImageProcessorApi.md#imageProcessorPreparePreview) | **GET** /api/processor/v1/images/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for image taken from storage.
[**imageProcessorPreparePreviewUrl()**](ImageProcessorApi.md#imageProcessorPreparePreviewUrl) | **GET** /api/processor/v1/images/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for image taken from storage.
[**imageProcessorUpdate()**](ImageProcessorApi.md#imageProcessorUpdate) | **POST** /api/processor/v1/images/{id}/update | Updates image file and metadata in storage


## `imageProcessorImportImage()`

```php
imageProcessorImportImage($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background): \Aurigma\AssetProcessor\Model\ImageDto
```

Imports image from source file and saves it to storage.

Additionally makes image preview if requested.

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


$apiInstance = new Aurigma\AssetProcessor\Api\ImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Image source file
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Image name
$path = 'path_example'; // string | Image location (folder path)
$custom_fields = NULL; // mixed
$preview_settings_make_preview = True; // bool | Force make preview
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name
$preview_settings_width = 56; // int | Preview image width
$preview_settings_height = 56; // int | Preview image heigth
$preview_settings_jpeg_quality = 56; // int | Quality of Jpeg previews
$preview_settings_fit_mode = new \Aurigma\AssetProcessor\Model\ImagePreviewFitMode(); // \Aurigma\AssetProcessor\Model\ImagePreviewFitMode
$preview_settings_interpolation_mode = new \Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode
$preview_settings_background = 'preview_settings_background_example'; // string | Background color for transparent images

try {
    $result = $apiInstance->imageProcessorImportImage($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageProcessorApi->imageProcessorImportImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Image source file |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Image name | [optional]
 **path** | **string**| Image location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **preview_settings_make_preview** | **bool**| Force make preview | [optional]
 **preview_settings_namespace** | **string**| Preview namespace | [optional]
 **preview_settings_name** | **string**| Preview name | [optional]
 **preview_settings_width** | **int**| Preview image width | [optional]
 **preview_settings_height** | **int**| Preview image heigth | [optional]
 **preview_settings_jpeg_quality** | **int**| Quality of Jpeg previews | [optional]
 **preview_settings_fit_mode** | [**\Aurigma\AssetProcessor\Model\ImagePreviewFitMode**](../Model/ImagePreviewFitMode.md)|  | [optional]
 **preview_settings_interpolation_mode** | [**\Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode**](../Model/ImagePreviewInterpolationMode.md)|  | [optional]
 **preview_settings_background** | **string**| Background color for transparent images | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\ImageDto**](../Model/ImageDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imageProcessorPreparePreview()`

```php
imageProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id): \SplFileObject
```

Creates preview image for image taken from storage.

In case when preview is already existed returns existed preview

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


$apiInstance = new Aurigma\AssetProcessor\Api\ImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source image entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$jpeg_quality = 56; // int | Quality of Jpeg previews
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\ImagePreviewFitMode(); // \Aurigma\AssetProcessor\Model\ImagePreviewFitMode | Image preview fit mode
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode | Image preview interpolation mode
$background = 'background_example'; // string | Background color for transparent images
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->imageProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageProcessorApi->imageProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source image entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **jpeg_quality** | **int**| Quality of Jpeg previews | [optional]
 **fit_mode** | [**\Aurigma\AssetProcessor\Model\ImagePreviewFitMode**](../Model/.md)| Image preview fit mode | [optional]
 **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode**](../Model/.md)| Image preview interpolation mode | [optional]
 **background** | **string**| Background color for transparent images | [optional]
 **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed | [optional] [default to false]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imageProcessorPreparePreviewUrl()`

```php
imageProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id): string
```

Creates preview image for image taken from storage.

In case when preview is already existed returns existed preview

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


$apiInstance = new Aurigma\AssetProcessor\Api\ImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source image entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$jpeg_quality = 56; // int | Quality of Jpeg previews
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\ImagePreviewFitMode(); // \Aurigma\AssetProcessor\Model\ImagePreviewFitMode | Image preview fit mode
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode | Image preview interpolation mode
$background = 'background_example'; // string | Background color for transparent images
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->imageProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageProcessorApi->imageProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source image entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **jpeg_quality** | **int**| Quality of Jpeg previews | [optional]
 **fit_mode** | [**\Aurigma\AssetProcessor\Model\ImagePreviewFitMode**](../Model/.md)| Image preview fit mode | [optional]
 **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\ImagePreviewInterpolationMode**](../Model/.md)| Image preview interpolation mode | [optional]
 **background** | **string**| Background color for transparent images | [optional]
 **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed | [optional] [default to false]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imageProcessorUpdate()`

```php
imageProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\ImageDto
```

Updates image file and metadata in storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\ImageProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Image entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Image name
$path = 'path_example'; // string | Image location (folder path)
$custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Image source file

try {
    $result = $apiInstance->imageProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageProcessorApi->imageProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Image entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Image name | [optional]
 **path** | **string**| Image location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| Image source file | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\ImageDto**](../Model/ImageDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
