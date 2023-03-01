# Aurigma\AssetProcessor\FontProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fontProcessorImportFont()**](FontProcessorApi.md#fontProcessorImportFont) | **POST** /api/processor/v1/fonts/import | Imports font from source file and saves it to storage.
[**fontProcessorPreparePreview()**](FontProcessorApi.md#fontProcessorPreparePreview) | **GET** /api/processor/v1/fonts/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for font taken from storage.
[**fontProcessorPreparePreviewUrl()**](FontProcessorApi.md#fontProcessorPreparePreviewUrl) | **GET** /api/processor/v1/fonts/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for font taken from storage.
[**fontProcessorUpdate()**](FontProcessorApi.md#fontProcessorUpdate) | **POST** /api/processor/v1/fonts/{id}/update | Updates font file and metadata in storage


## `fontProcessorImportFont()`

```php
fontProcessorImportFont($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_text, $preview_settings_format, $preview_settings_max_width, $preview_settings_font_size, $preview_settings_horizontal_alignment, $preview_settings_vertical_alignment, $preview_settings_background, $preview_settings_text_color): \Aurigma\AssetProcessor\Model\FontDto
```

Imports font from source file and saves it to storage.

Additionally makes font preview if requested.

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


$apiInstance = new Aurigma\AssetProcessor\Api\FontProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Font source file
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Font name
$path = 'path_example'; // string | Font location (folder path)
$custom_fields = NULL; // mixed
$preview_settings_make_preview = True; // bool | Force make preview
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name
$preview_settings_width = 56; // int | Preview image width
$preview_settings_height = 56; // int | Preview image heigth
$preview_settings_text = 'preview_settings_text_example'; // string | Text, that will be visualized with selected font in preview image, e.g. 'Abg'
$preview_settings_format = new \Aurigma\AssetProcessor\Model\FontPreviewFormat(); // \Aurigma\AssetProcessor\Model\FontPreviewFormat
$preview_settings_max_width = 56; // int | Max width of preview image  If parameter is set then normal widht and height and font size are ignored
$preview_settings_font_size = 3.4; // float | Font size for text visualization in preview image
$preview_settings_horizontal_alignment = new \Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment(); // \Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment
$preview_settings_vertical_alignment = new \Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment(); // \Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment
$preview_settings_background = 'preview_settings_background_example'; // string | Background color for preview image
$preview_settings_text_color = 'preview_settings_text_color_example'; // string | Text color for preview image

try {
    $result = $apiInstance->fontProcessorImportFont($source_file, $tenant_id, $name, $path, $custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_text, $preview_settings_format, $preview_settings_max_width, $preview_settings_font_size, $preview_settings_horizontal_alignment, $preview_settings_vertical_alignment, $preview_settings_background, $preview_settings_text_color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontProcessorApi->fontProcessorImportFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Font source file |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Font name | [optional]
 **path** | **string**| Font location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **preview_settings_make_preview** | **bool**| Force make preview | [optional]
 **preview_settings_namespace** | **string**| Preview namespace | [optional]
 **preview_settings_name** | **string**| Preview name | [optional]
 **preview_settings_width** | **int**| Preview image width | [optional]
 **preview_settings_height** | **int**| Preview image heigth | [optional]
 **preview_settings_text** | **string**| Text, that will be visualized with selected font in preview image, e.g. &#39;Abg&#39; | [optional]
 **preview_settings_format** | [**\Aurigma\AssetProcessor\Model\FontPreviewFormat**](../Model/FontPreviewFormat.md)|  | [optional]
 **preview_settings_max_width** | **int**| Max width of preview image  If parameter is set then normal widht and height and font size are ignored | [optional]
 **preview_settings_font_size** | **float**| Font size for text visualization in preview image | [optional]
 **preview_settings_horizontal_alignment** | [**\Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment**](../Model/FontPreviewHorizontalAlignment.md)|  | [optional]
 **preview_settings_vertical_alignment** | [**\Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment**](../Model/FontPreviewVerticalAlignment.md)|  | [optional]
 **preview_settings_background** | **string**| Background color for preview image | [optional]
 **preview_settings_text_color** | **string**| Text color for preview image | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\FontDto**](../Model/FontDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontProcessorPreparePreview()`

```php
fontProcessorPreparePreview($id, $namespace, $name, $width, $height, $text, $format, $max_width, $font_size, $horizontal_alignment, $vertical_alignment, $background, $text_color, $force, $tenant_id): \SplFileObject
```

Creates preview image for font taken from storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\FontProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source font entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$text = 'text_example'; // string | Text, that will be visualized with selected font in preview image, e.g. 'Abg'
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\FontPreviewFormat(); // \Aurigma\AssetProcessor\Model\FontPreviewFormat | Preview image format
$max_width = 56; // int | Max width of preview image  If parameter is set then normal widht and height and font size are ignored
$font_size = 3.4; // float | Max width of preview image  If parameter is set then normal widht and height and font size are ignored
$horizontal_alignment = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment(); // \Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment | Horizontal alignment of text visualization in preview image
$vertical_alignment = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment(); // \Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment | Vertical alignment of text visualization in preview image
$background = 'background_example'; // string | Background color for preview image
$text_color = 'text_color_example'; // string | Text color for preview image
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->fontProcessorPreparePreview($id, $namespace, $name, $width, $height, $text, $format, $max_width, $font_size, $horizontal_alignment, $vertical_alignment, $background, $text_color, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontProcessorApi->fontProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source font entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **text** | **string**| Text, that will be visualized with selected font in preview image, e.g. &#39;Abg&#39; | [optional]
 **format** | [**\Aurigma\AssetProcessor\Model\FontPreviewFormat**](../Model/.md)| Preview image format | [optional]
 **max_width** | **int**| Max width of preview image  If parameter is set then normal widht and height and font size are ignored | [optional]
 **font_size** | **float**| Max width of preview image  If parameter is set then normal widht and height and font size are ignored | [optional]
 **horizontal_alignment** | [**\Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment**](../Model/.md)| Horizontal alignment of text visualization in preview image | [optional]
 **vertical_alignment** | [**\Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment**](../Model/.md)| Vertical alignment of text visualization in preview image | [optional]
 **background** | **string**| Background color for preview image | [optional]
 **text_color** | **string**| Text color for preview image | [optional]
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

## `fontProcessorPreparePreviewUrl()`

```php
fontProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $text, $format, $max_width, $font_size, $horizontal_alignment, $vertical_alignment, $background, $text_color, $force, $tenant_id): string
```

Creates preview image for font taken from storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\FontProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source font entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$text = 'text_example'; // string | Text, that will be visualized with selected font in preview image, e.g. 'Abg'
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\FontPreviewFormat(); // \Aurigma\AssetProcessor\Model\FontPreviewFormat | Preview image format
$max_width = 56; // int | Max width of preview image  If parameter is set then normal widht and height and font size are ignored
$font_size = 3.4; // float | Max width of preview image  If parameter is set then normal widht and height and font size are ignored
$horizontal_alignment = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment(); // \Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment | Horizontal alignment of text visualization in preview image
$vertical_alignment = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment(); // \Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment | Vertical alignment of text visualization in preview image
$background = 'background_example'; // string | Background color for preview image
$text_color = 'text_color_example'; // string | Text color for preview image
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->fontProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $text, $format, $max_width, $font_size, $horizontal_alignment, $vertical_alignment, $background, $text_color, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontProcessorApi->fontProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source font entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **text** | **string**| Text, that will be visualized with selected font in preview image, e.g. &#39;Abg&#39; | [optional]
 **format** | [**\Aurigma\AssetProcessor\Model\FontPreviewFormat**](../Model/.md)| Preview image format | [optional]
 **max_width** | **int**| Max width of preview image  If parameter is set then normal widht and height and font size are ignored | [optional]
 **font_size** | **float**| Max width of preview image  If parameter is set then normal widht and height and font size are ignored | [optional]
 **horizontal_alignment** | [**\Aurigma\AssetProcessor\Model\FontPreviewHorizontalAlignment**](../Model/.md)| Horizontal alignment of text visualization in preview image | [optional]
 **vertical_alignment** | [**\Aurigma\AssetProcessor\Model\FontPreviewVerticalAlignment**](../Model/.md)| Vertical alignment of text visualization in preview image | [optional]
 **background** | **string**| Background color for preview image | [optional]
 **text_color** | **string**| Text color for preview image | [optional]
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

## `fontProcessorUpdate()`

```php
fontProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file): \Aurigma\AssetProcessor\Model\FontDto
```

Updates font file and metadata in storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\FontProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Font entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$name = 'name_example'; // string | Font name
$path = 'path_example'; // string | Font location (folder path)
$custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Font source file

try {
    $result = $apiInstance->fontProcessorUpdate($id, $tenant_id, $name, $path, $custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontProcessorApi->fontProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Font entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **name** | **string**| Font name | [optional]
 **path** | **string**| Font location (folder path) | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| Font source file | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\FontDto**](../Model/FontDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
