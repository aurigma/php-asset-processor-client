# Aurigma\AssetProcessor\DesignProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**designProcessorCheck()**](DesignProcessorApi.md#designProcessorCheck) | **POST** /api/processor/v1/designs/{id}/check | Checks if design taken from storage has any problems
[**designProcessorCreateBlankDesign()**](DesignProcessorApi.md#designProcessorCreateBlankDesign) | **POST** /api/processor/v1/designs/blank | Creates design using basic settings and saves it to storage
[**designProcessorCreateDesignFromMockup()**](DesignProcessorApi.md#designProcessorCreateDesignFromMockup) | **POST** /api/processor/v1/designs/from-mockup | Creates design compatible to specified mockup and saves it to storage
[**designProcessorEmbedDataSchema()**](DesignProcessorApi.md#designProcessorEmbedDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/embed | Embeds linked data schema to the design file
[**designProcessorExportDesign()**](DesignProcessorApi.md#designProcessorExportDesign) | **GET** /api/processor/v1/designs/{id}/export | Exports design file
[**designProcessorExtractDataSchema()**](DesignProcessorApi.md#designProcessorExtractDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/extract | Extracts data schema from design file and saves it to the specified folder
[**designProcessorGetDepositPhotos()**](DesignProcessorApi.md#designProcessorGetDepositPhotos) | **POST** /api/processor/v1/designs/{id}/depositphotos | Return information about inserted images from DepositPhotos
[**designProcessorImportDesign()**](DesignProcessorApi.md#designProcessorImportDesign) | **POST** /api/processor/v1/designs/import | Imports design from source file and saves it to storage.
[**designProcessorLinkDataSchema()**](DesignProcessorApi.md#designProcessorLinkDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/link | Links data schema to the design file
[**designProcessorPreparePreview()**](DesignProcessorApi.md#designProcessorPreparePreview) | **GET** /api/processor/v1/designs/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for design taken from storage.
[**designProcessorPreparePreviewUrl()**](DesignProcessorApi.md#designProcessorPreparePreviewUrl) | **GET** /api/processor/v1/designs/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for design taken from storage.
[**designProcessorReimportDesign()**](DesignProcessorApi.md#designProcessorReimportDesign) | **POST** /api/processor/v1/designs/{id}/re-import | Re-imports design from source file and updates design file and metadata in storage.
[**designProcessorRemoveDataSchema()**](DesignProcessorApi.md#designProcessorRemoveDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/remove | Removes data schema from the design file
[**designProcessorUpdate()**](DesignProcessorApi.md#designProcessorUpdate) | **POST** /api/processor/v1/designs/{id}/update | Updates design file and metadata in storage
[**designProcessorValidateDesignImportSettings()**](DesignProcessorApi.md#designProcessorValidateDesignImportSettings) | **POST** /api/processor/v1/designs/validate-import-settings | Validates the design import settings.


## `designProcessorCheck()`

```php
designProcessorCheck($id, $tenant_id): \Aurigma\AssetProcessor\Model\DesignProblemInfo
```

Checks if design taken from storage has any problems

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorCheck($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignProblemInfo**](../Model/DesignProblemInfo.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorCreateBlankDesign()`

```php
designProcessorCreateBlankDesign($tenant_id, $create_blank_design_model): \Aurigma\AssetProcessor\Model\DesignDto
```

Creates design using basic settings and saves it to storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$create_blank_design_model = new \Aurigma\AssetProcessor\Model\CreateBlankDesignModel(); // \Aurigma\AssetProcessor\Model\CreateBlankDesignModel | Operation parameters

try {
    $result = $apiInstance->designProcessorCreateBlankDesign($tenant_id, $create_blank_design_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorCreateBlankDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **create_blank_design_model** | [**\Aurigma\AssetProcessor\Model\CreateBlankDesignModel**](../Model/CreateBlankDesignModel.md)| Operation parameters | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorCreateDesignFromMockup()`

```php
designProcessorCreateDesignFromMockup($tenant_id, $create_design_from_mockup_model): \Aurigma\AssetProcessor\Model\DesignDto
```

Creates design compatible to specified mockup and saves it to storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$create_design_from_mockup_model = new \Aurigma\AssetProcessor\Model\CreateDesignFromMockupModel(); // \Aurigma\AssetProcessor\Model\CreateDesignFromMockupModel | Operation parameters

try {
    $result = $apiInstance->designProcessorCreateDesignFromMockup($tenant_id, $create_design_from_mockup_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorCreateDesignFromMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **create_design_from_mockup_model** | [**\Aurigma\AssetProcessor\Model\CreateDesignFromMockupModel**](../Model/CreateDesignFromMockupModel.md)| Operation parameters | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorEmbedDataSchema()`

```php
designProcessorEmbedDataSchema($id, $tenant_id): \Aurigma\AssetProcessor\Model\DesignDto
```

Embeds linked data schema to the design file

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorEmbedDataSchema($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorEmbedDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorExportDesign()`

```php
designProcessorExportDesign($id, $tenant_id): \SplFileObject
```

Exports design file

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorExportDesign($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorExportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
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

## `designProcessorExtractDataSchema()`

```php
designProcessorExtractDataSchema($id, $tenant_id, $design_extract_data_schema_model)
```

Extracts data schema from design file and saves it to the specified folder

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$design_extract_data_schema_model = new \Aurigma\AssetProcessor\Model\DesignExtractDataSchemaModel(); // \Aurigma\AssetProcessor\Model\DesignExtractDataSchemaModel | Extract data schema operation parameters

try {
    $apiInstance->designProcessorExtractDataSchema($id, $tenant_id, $design_extract_data_schema_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorExtractDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **design_extract_data_schema_model** | [**\Aurigma\AssetProcessor\Model\DesignExtractDataSchemaModel**](../Model/DesignExtractDataSchemaModel.md)| Extract data schema operation parameters | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorGetDepositPhotos()`

```php
designProcessorGetDepositPhotos($id, $tenant_id): \Aurigma\AssetProcessor\Model\ImageDepositPhoto[]
```

Return information about inserted images from DepositPhotos

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorGetDepositPhotos($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorGetDepositPhotos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\ImageDepositPhoto[]**](../Model/ImageDepositPhoto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorImportDesign()`

```php
designProcessorImportDesign($source_file, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_stub, $preview_settings_format, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\DesignDto
```

Imports design from source file and saves it to storage.

Design source file should be a state file or a graphic file.<br />  The marker shortcuts file used only for graphic sources that support markers (PSD or IDML).<br />  Additionally makes design preview if requested.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Design source file.
$tenant_id = 56; // int | Tenant identifier
$design_params_name = 'design_params_name_example'; // string | Design name
$design_params_path = 'design_params_path_example'; // string | Design location (folder path)
$design_params_custom_fields = NULL; // mixed
$preview_settings_make_preview = True; // bool | Force make preview
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name
$preview_settings_width = 56; // int | Preview image width
$preview_settings_height = 56; // int | Preview image heigth
$preview_settings_stub = True; // bool | Preview stub contnent switcher  Indicates whether to show stub content in preview
$preview_settings_format = new \Aurigma\AssetProcessor\Model\DesignPreviewFormat(); // \Aurigma\AssetProcessor\Model\DesignPreviewFormat
$marker_shortcuts_file = "/path/to/file.txt"; // \SplFileObject | Marker shortcuts config file.

try {
    $result = $apiInstance->designProcessorImportDesign($source_file, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_stub, $preview_settings_format, $marker_shortcuts_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorImportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Design source file. |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **design_params_name** | **string**| Design name | [optional]
 **design_params_path** | **string**| Design location (folder path) | [optional]
 **design_params_custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **preview_settings_make_preview** | **bool**| Force make preview | [optional]
 **preview_settings_namespace** | **string**| Preview namespace | [optional]
 **preview_settings_name** | **string**| Preview name | [optional]
 **preview_settings_width** | **int**| Preview image width | [optional]
 **preview_settings_height** | **int**| Preview image heigth | [optional]
 **preview_settings_stub** | **bool**| Preview stub contnent switcher  Indicates whether to show stub content in preview | [optional]
 **preview_settings_format** | [**\Aurigma\AssetProcessor\Model\DesignPreviewFormat**](../Model/DesignPreviewFormat.md)|  | [optional]
 **marker_shortcuts_file** | **\SplFileObject****\SplFileObject**| Marker shortcuts config file. | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorLinkDataSchema()`

```php
designProcessorLinkDataSchema($id, $tenant_id, $design_link_data_schema_model): \Aurigma\AssetProcessor\Model\DesignDto
```

Links data schema to the design file

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$design_link_data_schema_model = new \Aurigma\AssetProcessor\Model\DesignLinkDataSchemaModel(); // \Aurigma\AssetProcessor\Model\DesignLinkDataSchemaModel | Link schema operation parameters

try {
    $result = $apiInstance->designProcessorLinkDataSchema($id, $tenant_id, $design_link_data_schema_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorLinkDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **design_link_data_schema_model** | [**\Aurigma\AssetProcessor\Model\DesignLinkDataSchemaModel**](../Model/DesignLinkDataSchemaModel.md)| Link schema operation parameters | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorPreparePreview()`

```php
designProcessorPreparePreview($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id): \SplFileObject
```

Creates preview image for design taken from storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source design entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$surface_index = 56; // int | Design surface index  Indicates which design surface should be used as a source for preview
$stub = True; // bool | Design Preview stub contnent switcher  Indicates whether to show stub content in preview
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\DesignPreviewFormat(); // \Aurigma\AssetProcessor\Model\DesignPreviewFormat | Design preview image format
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorPreparePreview($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source design entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **surface_index** | **int**| Design surface index  Indicates which design surface should be used as a source for preview | [optional]
 **stub** | **bool**| Design Preview stub contnent switcher  Indicates whether to show stub content in preview | [optional]
 **format** | [**\Aurigma\AssetProcessor\Model\DesignPreviewFormat**](../Model/.md)| Design preview image format | [optional]
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

## `designProcessorPreparePreviewUrl()`

```php
designProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id): string
```

Creates preview image for design taken from storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source design entity identifier
$namespace = 'namespace_example'; // string | Preview namespace
$name = 'name_example'; // string | Preview name
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$surface_index = 56; // int | Design surface index  Indicates which design surface should be used as a source for preview
$stub = True; // bool | Design Preview stub contnent switcher  Indicates whether to show stub content in preview
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\DesignPreviewFormat(); // \Aurigma\AssetProcessor\Model\DesignPreviewFormat | Design preview image format
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source design entity identifier |
 **namespace** | **string**| Preview namespace |
 **name** | **string**| Preview name |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **surface_index** | **int**| Design surface index  Indicates which design surface should be used as a source for preview | [optional]
 **stub** | **bool**| Design Preview stub contnent switcher  Indicates whether to show stub content in preview | [optional]
 **format** | [**\Aurigma\AssetProcessor\Model\DesignPreviewFormat**](../Model/.md)| Design preview image format | [optional]
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

## `designProcessorReimportDesign()`

```php
designProcessorReimportDesign($id, $source_file, $tenant_id, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\DesignDto
```

Re-imports design from source file and updates design file and metadata in storage.

Design source file should be a state file or a graphic file.<br />  The marker shortcuts file used only for graphic sources that support markers (PSD or IDML).<br />

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$source_file = "/path/to/file.txt"; // \SplFileObject | Design source file.
$tenant_id = 56; // int | Tenant identifier
$marker_shortcuts_file = "/path/to/file.txt"; // \SplFileObject | Marker shortcuts config file.

try {
    $result = $apiInstance->designProcessorReimportDesign($id, $source_file, $tenant_id, $marker_shortcuts_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorReimportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier. |
 **source_file** | **\SplFileObject****\SplFileObject**| Design source file. |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **marker_shortcuts_file** | **\SplFileObject****\SplFileObject**| Marker shortcuts config file. | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorRemoveDataSchema()`

```php
designProcessorRemoveDataSchema($id, $tenant_id): \Aurigma\AssetProcessor\Model\DesignDto
```

Removes data schema from the design file

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorRemoveDataSchema($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorRemoveDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorUpdate()`

```php
designProcessorUpdate($id, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $file): \Aurigma\AssetProcessor\Model\DesignDto
```

Updates design file and metadata in storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$design_params_name = 'design_params_name_example'; // string | Design name
$design_params_path = 'design_params_path_example'; // string | Design location (folder path)
$design_params_custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Design source file

try {
    $result = $apiInstance->designProcessorUpdate($id, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **design_params_name** | **string**| Design name | [optional]
 **design_params_path** | **string**| Design location (folder path) | [optional]
 **design_params_custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| Design source file | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorValidateDesignImportSettings()`

```php
designProcessorValidateDesignImportSettings($tenant_id, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\ValidationResultDto
```

Validates the design import settings.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$marker_shortcuts_file = "/path/to/file.txt"; // \SplFileObject | Marker shortcuts config file.

try {
    $result = $apiInstance->designProcessorValidateDesignImportSettings($tenant_id, $marker_shortcuts_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorValidateDesignImportSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **marker_shortcuts_file** | **\SplFileObject****\SplFileObject**| Marker shortcuts config file. | [optional]

### Return type

[**\Aurigma\AssetProcessor\Model\ValidationResultDto**](../Model/ValidationResultDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
