# Aurigma\AssetProcessor\PrivateDesignProcessorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**privateDesignProcessorCheck()**](PrivateDesignProcessorApi.md#privateDesignProcessorCheck) | **POST** /api/processor/v1/private-designs/{id}/check | Checks if design taken from private storage has any problems
[**privateDesignProcessorCopyDesignFromPublicDesign()**](PrivateDesignProcessorApi.md#privateDesignProcessorCopyDesignFromPublicDesign) | **POST** /api/processor/v1/private-designs/from-design | Copies design file from specified public design and saves it to private storage.
[**privateDesignProcessorCopyDesignFromPublicResource()**](PrivateDesignProcessorApi.md#privateDesignProcessorCopyDesignFromPublicResource) | **POST** /api/processor/v1/private-designs/from-resource | Copies design file from specified public resource and saves it to storage.
[**privateDesignProcessorCreateBlankDesign()**](PrivateDesignProcessorApi.md#privateDesignProcessorCreateBlankDesign) | **POST** /api/processor/v1/private-designs/blank | Creates design by product model and saves it to private storage
[**privateDesignProcessorEmbedDataSchema()**](PrivateDesignProcessorApi.md#privateDesignProcessorEmbedDataSchema) | **POST** /api/processor/v1/private-designs/{id}/schema/embed | Embeds linked data schema to the design file
[**privateDesignProcessorExportDesign()**](PrivateDesignProcessorApi.md#privateDesignProcessorExportDesign) | **GET** /api/processor/v1/private-designs/{id}/export | Exports design file
[**privateDesignProcessorExtractDataSchema()**](PrivateDesignProcessorApi.md#privateDesignProcessorExtractDataSchema) | **POST** /api/processor/v1/private-designs/{id}/schema/extract | Extracts data schema from design file and saves it to the specified folder
[**privateDesignProcessorGetDepositPhotos()**](PrivateDesignProcessorApi.md#privateDesignProcessorGetDepositPhotos) | **POST** /api/processor/v1/private-designs/{id}/depositphotos | Return information about inserted images from DepositPhotos
[**privateDesignProcessorImportDesign()**](PrivateDesignProcessorApi.md#privateDesignProcessorImportDesign) | **POST** /api/processor/v1/private-designs/import | Imports design from source file and saves it to private storage.
[**privateDesignProcessorLinkDataSchema()**](PrivateDesignProcessorApi.md#privateDesignProcessorLinkDataSchema) | **POST** /api/processor/v1/private-designs/{id}/schema/link | Links data schema to the design file
[**privateDesignProcessorPreparePreview()**](PrivateDesignProcessorApi.md#privateDesignProcessorPreparePreview) | **GET** /api/processor/v1/private-designs/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for design taken from private storage.
[**privateDesignProcessorPreparePreviewUrl()**](PrivateDesignProcessorApi.md#privateDesignProcessorPreparePreviewUrl) | **GET** /api/processor/v1/private-designs/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for design taken from private storage.
[**privateDesignProcessorReimportDesign()**](PrivateDesignProcessorApi.md#privateDesignProcessorReimportDesign) | **POST** /api/processor/v1/private-designs/{id}/re-import | Re-imports design from source file and updates design file and metadata in private storage.
[**privateDesignProcessorRemoveDataSchema()**](PrivateDesignProcessorApi.md#privateDesignProcessorRemoveDataSchema) | **POST** /api/processor/v1/private-designs/{id}/schema/remove | Removes data schema from the design file
[**privateDesignProcessorUpdate()**](PrivateDesignProcessorApi.md#privateDesignProcessorUpdate) | **POST** /api/processor/v1/private-designs/{id}/update | Updates design file and metadata in private storage
[**privateDesignProcessorValidateDesignImportSettings()**](PrivateDesignProcessorApi.md#privateDesignProcessorValidateDesignImportSettings) | **POST** /api/processor/v1/private-designs/validate-import-settings | Validates the design import settings.


## `privateDesignProcessorCheck()`

```php
privateDesignProcessorCheck($id, $tenant_id, $owner_id): \Aurigma\AssetProcessor\Model\DesignProblemInfo
```

Checks if design taken from private storage has any problems

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignProcessorCheck($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignProcessorCopyDesignFromPublicDesign()`

```php
privateDesignProcessorCopyDesignFromPublicDesign($tenant_id, $owner_id, $copy_design_from_public_design_model): \Aurigma\AssetProcessor\Model\DesignDto
```

Copies design file from specified public design and saves it to private storage.

Design source file should be a state file.<br />

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$copy_design_from_public_design_model = new \Aurigma\AssetProcessor\Model\CopyDesignFromPublicDesignModel(); // \Aurigma\AssetProcessor\Model\CopyDesignFromPublicDesignModel | Operation parameters.

try {
    $result = $apiInstance->privateDesignProcessorCopyDesignFromPublicDesign($tenant_id, $owner_id, $copy_design_from_public_design_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorCopyDesignFromPublicDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
 **copy_design_from_public_design_model** | [**\Aurigma\AssetProcessor\Model\CopyDesignFromPublicDesignModel**](../Model/CopyDesignFromPublicDesignModel.md)| Operation parameters. | [optional]

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

## `privateDesignProcessorCopyDesignFromPublicResource()`

```php
privateDesignProcessorCopyDesignFromPublicResource($tenant_id, $owner_id, $copy_design_from_public_resource_model): \Aurigma\AssetProcessor\Model\DesignDto
```

Copies design file from specified public resource and saves it to storage.

Design source file should be a state file.<br />

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$copy_design_from_public_resource_model = new \Aurigma\AssetProcessor\Model\CopyDesignFromPublicResourceModel(); // \Aurigma\AssetProcessor\Model\CopyDesignFromPublicResourceModel | Operation parameters.

try {
    $result = $apiInstance->privateDesignProcessorCopyDesignFromPublicResource($tenant_id, $owner_id, $copy_design_from_public_resource_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorCopyDesignFromPublicResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
 **copy_design_from_public_resource_model** | [**\Aurigma\AssetProcessor\Model\CopyDesignFromPublicResourceModel**](../Model/CopyDesignFromPublicResourceModel.md)| Operation parameters. | [optional]

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

## `privateDesignProcessorCreateBlankDesign()`

```php
privateDesignProcessorCreateBlankDesign($tenant_id, $owner_id, $create_blank_design_model): \Aurigma\AssetProcessor\Model\DesignDto
```

Creates design by product model and saves it to private storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$create_blank_design_model = new \Aurigma\AssetProcessor\Model\CreateBlankDesignModel(); // \Aurigma\AssetProcessor\Model\CreateBlankDesignModel | Operation parameters

try {
    $result = $apiInstance->privateDesignProcessorCreateBlankDesign($tenant_id, $owner_id, $create_blank_design_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorCreateBlankDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignProcessorEmbedDataSchema()`

```php
privateDesignProcessorEmbedDataSchema($id, $tenant_id, $owner_id): \Aurigma\AssetProcessor\Model\DesignDto
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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignProcessorEmbedDataSchema($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorEmbedDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignProcessorExportDesign()`

```php
privateDesignProcessorExportDesign($id, $tenant_id, $owner_id)
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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $apiInstance->privateDesignProcessorExportDesign($id, $tenant_id, $owner_id);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorExportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignProcessorExtractDataSchema()`

```php
privateDesignProcessorExtractDataSchema($id, $tenant_id, $owner_id, $design_extract_data_schema_model)
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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$design_extract_data_schema_model = new \Aurigma\AssetProcessor\Model\DesignExtractDataSchemaModel(); // \Aurigma\AssetProcessor\Model\DesignExtractDataSchemaModel | Extract data schema operation parameters

try {
    $apiInstance->privateDesignProcessorExtractDataSchema($id, $tenant_id, $owner_id, $design_extract_data_schema_model);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorExtractDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignProcessorGetDepositPhotos()`

```php
privateDesignProcessorGetDepositPhotos($id, $tenant_id, $owner_id): \Aurigma\AssetProcessor\Model\ImageDepositPhoto[]
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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignProcessorGetDepositPhotos($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorGetDepositPhotos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignProcessorImportDesign()`

```php
privateDesignProcessorImportDesign($source_file, $tenant_id, $owner_id, $design_params_name, $design_params_path, $design_params_custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_stub, $preview_settings_format, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\DesignDto
```

Imports design from source file and saves it to private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Design source file.
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
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
    $result = $apiInstance->privateDesignProcessorImportDesign($source_file, $tenant_id, $owner_id, $design_params_name, $design_params_path, $design_params_custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_stub, $preview_settings_format, $marker_shortcuts_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorImportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject****\SplFileObject**| Design source file. |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier. | [optional]
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

## `privateDesignProcessorLinkDataSchema()`

```php
privateDesignProcessorLinkDataSchema($id, $tenant_id, $owner_id, $design_link_data_schema_model): \Aurigma\AssetProcessor\Model\DesignDto
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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$design_link_data_schema_model = new \Aurigma\AssetProcessor\Model\DesignLinkDataSchemaModel(); // \Aurigma\AssetProcessor\Model\DesignLinkDataSchemaModel | Link schema operation parameters

try {
    $result = $apiInstance->privateDesignProcessorLinkDataSchema($id, $tenant_id, $owner_id, $design_link_data_schema_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorLinkDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignProcessorPreparePreview()`

```php
privateDesignProcessorPreparePreview($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id, $owner_id): \SplFileObject
```

Creates preview image for design taken from private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
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
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignProcessorPreparePreview($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
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

## `privateDesignProcessorPreparePreviewUrl()`

```php
privateDesignProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id, $owner_id): string
```

Creates preview image for design taken from private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
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
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
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

## `privateDesignProcessorReimportDesign()`

```php
privateDesignProcessorReimportDesign($id, $source_file, $tenant_id, $owner_id, $marker_shortcuts_file)
```

Re-imports design from source file and updates design file and metadata in private storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$source_file = "/path/to/file.txt"; // \SplFileObject | Design source file.
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$marker_shortcuts_file = "/path/to/file.txt"; // \SplFileObject | Marker shortcuts config file.

try {
    $apiInstance->privateDesignProcessorReimportDesign($id, $source_file, $tenant_id, $owner_id, $marker_shortcuts_file);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorReimportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier. |
 **source_file** | **\SplFileObject****\SplFileObject**| Design source file. |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier. | [optional]
 **marker_shortcuts_file** | **\SplFileObject****\SplFileObject**| Marker shortcuts config file. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignProcessorRemoveDataSchema()`

```php
privateDesignProcessorRemoveDataSchema($id, $tenant_id, $owner_id): \Aurigma\AssetProcessor\Model\DesignDto
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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignProcessorRemoveDataSchema($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorRemoveDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignProcessorUpdate()`

```php
privateDesignProcessorUpdate($id, $tenant_id, $owner_id, $design_params_name, $design_params_path, $design_params_custom_fields, $file): \Aurigma\AssetProcessor\Model\DesignDto
```

Updates design file and metadata in private storage

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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$design_params_name = 'design_params_name_example'; // string | Design name
$design_params_path = 'design_params_path_example'; // string | Design location (folder path)
$design_params_custom_fields = NULL; // mixed
$file = "/path/to/file.txt"; // \SplFileObject | Design source file

try {
    $result = $apiInstance->privateDesignProcessorUpdate($id, $tenant_id, $owner_id, $design_params_name, $design_params_path, $design_params_custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignProcessorValidateDesignImportSettings()`

```php
privateDesignProcessorValidateDesignImportSettings($tenant_id, $owner_id, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\ValidationResultDto
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


$apiInstance = new Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$owner_id = 'owner_id_example'; // string | Private storage owner identifier
$marker_shortcuts_file = "/path/to/file.txt"; // \SplFileObject | Marker shortcuts config file.

try {
    $result = $apiInstance->privateDesignProcessorValidateDesignImportSettings($tenant_id, $owner_id, $marker_shortcuts_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignProcessorApi->privateDesignProcessorValidateDesignImportSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **owner_id** | **string**| Private storage owner identifier | [optional]
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
