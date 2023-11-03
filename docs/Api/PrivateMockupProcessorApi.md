# Aurigma\AssetProcessor\PrivateMockupProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**privateMockupProcessorImportMockup()**](PrivateMockupProcessorApi.md#privateMockupProcessorImportMockup) | **POST** /api/processor/v1/private-mockups/import | Imports mockup from source file and saves it to private storage.
[**privateMockupProcessorPreparePreview()**](PrivateMockupProcessorApi.md#privateMockupProcessorPreparePreview) | **GET** /api/processor/v1/private-mockups/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for mockup taken from private storage.
[**privateMockupProcessorPreparePreviewUrl()**](PrivateMockupProcessorApi.md#privateMockupProcessorPreparePreviewUrl) | **GET** /api/processor/v1/private-mockups/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for mockup taken from private storage.
[**privateMockupProcessorUpdate()**](PrivateMockupProcessorApi.md#privateMockupProcessorUpdate) | **POST** /api/processor/v1/private-mockups/{id}/update | Updates mockup file and metadata in private storage


## `privateMockupProcessorImportMockup()`

```php
privateMockupProcessorImportMockup($source_file, $tenant_id, $owner_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $type): \Aurigma\AssetProcessor\Model\MockupDto
```

Imports mockup from source file and saves it to private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Mockup source file.
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$name = 'name_example'; // string | Mockup name.
$path = 'path_example'; // string | Mockup location (folder path).
$custom_fields = NULL; // mixed
$preview_settings_make_preview = True; // bool | Indicates if a preview is needed.
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace.
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name.
$preview_settings_width = 56; // int | Preview width.
$preview_settings_height = 56; // int | Preview height.
$preview_settings_jpeg_quality = 56; // int | Jpeg preview quality.
$preview_settings_fit_mode = new \Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode
$preview_settings_interpolation_mode = new \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode
$preview_settings_background = 'preview_settings_background_example'; // string | Color to replace transparent background (e.g. 'white').
$type = new \Aurigma\AssetProcessor\Model\ImportMockupType(); // \Aurigma\AssetProcessor\Model\ImportMockupType

try {
    $result = $apiInstance->privateMockupProcessorImportMockup($source_file, $tenant_id, $owner_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_jpeg_quality, $preview_settings_fit_mode, $preview_settings_interpolation_mode, $preview_settings_background, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorImportMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Mockup source file. |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier. | [optional]
 **name** | **string**| Mockup name. | [optional]
 **path** | **string**| Mockup location (folder path). | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **preview_settings_make_preview** | **bool**| Indicates if a preview is needed. | [optional]
 **preview_settings_namespace** | **string**| Preview namespace. | [optional]
 **preview_settings_name** | **string**| Preview name. | [optional]
 **preview_settings_width** | **int**| Preview width. | [optional]
 **preview_settings_height** | **int**| Preview height. | [optional]
 **preview_settings_jpeg_quality** | **int**| Jpeg preview quality. | [optional]
 **preview_settings_fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/MockupPreviewFitMode.md)|  | [optional]
 **preview_settings_interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/MockupPreviewInterpolationMode.md)|  | [optional]
 **preview_settings_background** | **string**| Color to replace transparent background (e.g. &#39;white&#39;). | [optional]
 **type** | [**\Aurigma\AssetProcessor\Model\ImportMockupType**](../Model/ImportMockupType.md)|  | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source mockup entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$jpeg_quality = 56; // int | Jpeg preview quality.
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode | Preview fit mode.
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode | Preview interpolation mode.
$background = 'background_example'; // string | Color to replace transparent background (e.g. 'White').
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateMockupProcessorPreparePreview($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source mockup entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **jpeg_quality** | **int**| Jpeg preview quality. | [optional]
 **fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/.md)| Preview fit mode. | [optional]
 **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/.md)| Preview interpolation mode. | [optional]
 **background** | **string**| Color to replace transparent background (e.g. &#39;White&#39;). | [optional]
 **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed | [optional] [default to false]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source mockup entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$jpeg_quality = 56; // int | Jpeg preview quality.
$fit_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewFitMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewFitMode | Preview fit mode.
$interpolation_mode = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode(); // \Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode | Preview interpolation mode.
$background = 'background_example'; // string | Color to replace transparent background (e.g. 'White').
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateMockupProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $jpeg_quality, $fit_mode, $interpolation_mode, $background, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source mockup entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **jpeg_quality** | **int**| Jpeg preview quality. | [optional]
 **fit_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewFitMode**](../Model/.md)| Preview fit mode. | [optional]
 **interpolation_mode** | [**\Aurigma\AssetProcessor\Model\MockupPreviewInterpolationMode**](../Model/.md)| Preview interpolation mode. | [optional]
 **background** | **string**| Color to replace transparent background (e.g. &#39;White&#39;). | [optional]
 **force** | **bool**| If set to &#39;true&#39;, new preview prepared, even if preview already existed | [optional] [default to false]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateMockupProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Mockup entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$name = 'name_example'; // string | Mockup name.
$path = 'path_example'; // string | Mockup location (folder path).
$custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Mockup source file.

try {
    $result = $apiInstance->privateMockupProcessorUpdate($id, $tenant_id, $owner_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupProcessorApi->privateMockupProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Mockup entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
 **name** | **string**| Mockup name. | [optional]
 **path** | **string**| Mockup location (folder path). | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| Mockup source file. | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)