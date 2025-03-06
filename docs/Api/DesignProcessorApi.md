# Aurigma\AssetProcessor\DesignProcessorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designProcessorCalculateCountPerSheet()**](DesignProcessorApi.md#designProcessorCalculateCountPerSheet) | **POST** /api/processor/v1/designs/{id}/calculate-count-per-sheet | Calculates the design count per sheet of the specified size. |
| [**designProcessorCheck()**](DesignProcessorApi.md#designProcessorCheck) | **POST** /api/processor/v1/designs/{id}/check | Checks if design taken from storage has any problems. |
| [**designProcessorCreateBlankDesign()**](DesignProcessorApi.md#designProcessorCreateBlankDesign) | **POST** /api/processor/v1/designs/blank | Creates design using basic settings and saves it to storage. |
| [**designProcessorCreateDesignFromMockup()**](DesignProcessorApi.md#designProcessorCreateDesignFromMockup) | **POST** /api/processor/v1/designs/from-mockup | Creates design compatible to specified mockup and saves it to storage. |
| [**designProcessorEmbedDataSchema()**](DesignProcessorApi.md#designProcessorEmbedDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/embed | Embeds linked data schema to the design file. |
| [**designProcessorEmbedPalettes()**](DesignProcessorApi.md#designProcessorEmbedPalettes) | **POST** /api/processor/v1/designs/{id}/palettes/embed | Embeds linked palettes to the design file. |
| [**designProcessorEmbedToggleSet()**](DesignProcessorApi.md#designProcessorEmbedToggleSet) | **POST** /api/processor/v1/designs/{id}/toggle-set/embed | Embeds linked toggle set to the design file. |
| [**designProcessorExportDesign()**](DesignProcessorApi.md#designProcessorExportDesign) | **GET** /api/processor/v1/designs/{id}/export | Exports design file. |
| [**designProcessorExtractDataSchema()**](DesignProcessorApi.md#designProcessorExtractDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/extract | Extracts data schema from design file and saves it to the specified folder. |
| [**designProcessorExtractPalettes()**](DesignProcessorApi.md#designProcessorExtractPalettes) | **POST** /api/processor/v1/designs/{id}/palettes/extract | Extracts palettes from design file and saves it to the specified folder.   Due to possibility of having linked and embedded palettes for same design, all linked palettes will be embedded before extraction. |
| [**designProcessorExtractToggleSet()**](DesignProcessorApi.md#designProcessorExtractToggleSet) | **POST** /api/processor/v1/designs/{id}/toggle-set/extract | Extracts toggle set from design file and saves it to the specified folder. |
| [**designProcessorGetDepositPhotos()**](DesignProcessorApi.md#designProcessorGetDepositPhotos) | **POST** /api/processor/v1/designs/{id}/depositphotos | Returns information about inserted images from DepositPhotos. |
| [**designProcessorImportDesign()**](DesignProcessorApi.md#designProcessorImportDesign) | **POST** /api/processor/v1/designs/import | Imports design from source file and saves it to storage. |
| [**designProcessorLinkDataSchema()**](DesignProcessorApi.md#designProcessorLinkDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/link | Links data schema to the design file. |
| [**designProcessorLinkPalettes()**](DesignProcessorApi.md#designProcessorLinkPalettes) | **POST** /api/processor/v1/designs/{id}/palettes/link | Links palettes to the design file. |
| [**designProcessorLinkToggleSet()**](DesignProcessorApi.md#designProcessorLinkToggleSet) | **POST** /api/processor/v1/designs/{id}/toggle-set/link | Links toggle set to the design file. |
| [**designProcessorPreparePreview()**](DesignProcessorApi.md#designProcessorPreparePreview) | **GET** /api/processor/v1/designs/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for design taken from storage. |
| [**designProcessorPreparePreviewUrl()**](DesignProcessorApi.md#designProcessorPreparePreviewUrl) | **GET** /api/processor/v1/designs/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for design taken from storage. |
| [**designProcessorReimportDesign()**](DesignProcessorApi.md#designProcessorReimportDesign) | **POST** /api/processor/v1/designs/{id}/re-import | Re-imports design from source file and updates design file and metadata in storage. |
| [**designProcessorRemoveDataSchema()**](DesignProcessorApi.md#designProcessorRemoveDataSchema) | **POST** /api/processor/v1/designs/{id}/schema/remove | Removes data schema from the design file. |
| [**designProcessorRemovePalettes()**](DesignProcessorApi.md#designProcessorRemovePalettes) | **POST** /api/processor/v1/designs/{id}/palettes/remove | Removes palettes from the design file. |
| [**designProcessorRemoveToggleSet()**](DesignProcessorApi.md#designProcessorRemoveToggleSet) | **POST** /api/processor/v1/designs/{id}/toggle-set/remove | Removes toggle set from the design file. |
| [**designProcessorUpdate()**](DesignProcessorApi.md#designProcessorUpdate) | **POST** /api/processor/v1/designs/{id}/update | Updates design file and metadata in storage. |
| [**designProcessorValidateDesignImportSettings()**](DesignProcessorApi.md#designProcessorValidateDesignImportSettings) | **POST** /api/processor/v1/designs/validate-import-settings | Validates the design import settings. |


## `designProcessorCalculateCountPerSheet()`

```php
designProcessorCalculateCountPerSheet($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_count_per_sheet_calculation_model): \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignDesignCountPerSheetCalculationResultDto
```

Calculates the design count per sheet of the specified size.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_design_count_per_sheet_calculation_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignCountPerSheetCalculationModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignCountPerSheetCalculationModel | Model to calculate the design count per sheet of the specified size.

try {
    $result = $apiInstance->designProcessorCalculateCountPerSheet($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_count_per_sheet_calculation_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorCalculateCountPerSheet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_design_count_per_sheet_calculation_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignCountPerSheetCalculationModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignDesignCountPerSheetCalculationModel.md)| Model to calculate the design count per sheet of the specified size. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignDesignCountPerSheetCalculationResultDto**](../Model/AurigmaAssetProcessorWebApiDtosDesignDesignCountPerSheetCalculationResultDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorCheck()`

```php
designProcessorCheck($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignDesignProblemDto
```

Checks if design taken from storage has any problems.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorCheck($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignDesignProblemDto**](../Model/AurigmaAssetProcessorWebApiDtosDesignDesignProblemDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorCreateBlankDesign()`

```php
designProcessorCreateBlankDesign($tenant_id, $aurigma_asset_processor_web_api_models_design_create_blank_design_model): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Creates design using basic settings and saves it to storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_create_blank_design_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignCreateBlankDesignModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignCreateBlankDesignModel | Operation parameters.

try {
    $result = $apiInstance->designProcessorCreateBlankDesign($tenant_id, $aurigma_asset_processor_web_api_models_design_create_blank_design_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorCreateBlankDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_create_blank_design_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignCreateBlankDesignModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignCreateBlankDesignModel.md)| Operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorCreateDesignFromMockup()`

```php
designProcessorCreateDesignFromMockup($tenant_id, $aurigma_asset_processor_web_api_models_design_create_design_from_mockup_model): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Creates design compatible to specified mockup and saves it to storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_create_design_from_mockup_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignCreateDesignFromMockupModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignCreateDesignFromMockupModel | Operation parameters.

try {
    $result = $apiInstance->designProcessorCreateDesignFromMockup($tenant_id, $aurigma_asset_processor_web_api_models_design_create_design_from_mockup_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorCreateDesignFromMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_create_design_from_mockup_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignCreateDesignFromMockupModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignCreateDesignFromMockupModel.md)| Operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorEmbedDataSchema()`

```php
designProcessorEmbedDataSchema($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Embeds linked data schema to the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorEmbedDataSchema($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorEmbedDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorEmbedPalettes()`

```php
designProcessorEmbedPalettes($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Embeds linked palettes to the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorEmbedPalettes($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorEmbedPalettes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorEmbedToggleSet()`

```php
designProcessorEmbedToggleSet($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Embeds linked toggle set to the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorEmbedToggleSet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorEmbedToggleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

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

Exports design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorExportDesign($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorExportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
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

## `designProcessorExtractDataSchema()`

```php
designProcessorExtractDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_extract_data_schema_model)
```

Extracts data schema from design file and saves it to the specified folder.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_design_extract_data_schema_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractDataSchemaModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractDataSchemaModel | Extract data schema operation parameters.

try {
    $apiInstance->designProcessorExtractDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_extract_data_schema_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorExtractDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_design_extract_data_schema_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractDataSchemaModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignDesignExtractDataSchemaModel.md)| Extract data schema operation parameters. | [optional] |

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

## `designProcessorExtractPalettes()`

```php
designProcessorExtractPalettes($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_extract_palettes_model)
```

Extracts palettes from design file and saves it to the specified folder.   Due to possibility of having linked and embedded palettes for same design, all linked palettes will be embedded before extraction.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_design_extract_palettes_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractPalettesModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractPalettesModel | Extract palettes operation parameters.

try {
    $apiInstance->designProcessorExtractPalettes($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_extract_palettes_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorExtractPalettes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_design_extract_palettes_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractPalettesModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignDesignExtractPalettesModel.md)| Extract palettes operation parameters. | [optional] |

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

## `designProcessorExtractToggleSet()`

```php
designProcessorExtractToggleSet($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_extract_toggle_set_model)
```

Extracts toggle set from design file and saves it to the specified folder.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_design_extract_toggle_set_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractToggleSetModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractToggleSetModel | Extract toggle set operation parameters.

try {
    $apiInstance->designProcessorExtractToggleSet($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_extract_toggle_set_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorExtractToggleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_design_extract_toggle_set_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignExtractToggleSetModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignDesignExtractToggleSetModel.md)| Extract toggle set operation parameters. | [optional] |

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

## `designProcessorGetDepositPhotos()`

```php
designProcessorGetDepositPhotos($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignImageDepositPhoto[]
```

Returns information about inserted images from DepositPhotos.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorGetDepositPhotos($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorGetDepositPhotos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignImageDepositPhoto[]**](../Model/AurigmaAssetProcessorWebApiDtosDesignImageDepositPhoto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorImportDesign()`

```php
designProcessorImportDesign($source_file, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_stub, $preview_settings_format, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Imports design from source file and saves it to storage.

Design source file should be a state file or a graphic file.<br />  The marker shortcuts file used only for graphic sources that support markers (PSD or IDML).<br />  Additionally makes design preview if requested.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Design source file.
$tenant_id = 56; // int | Tenant identifier
$design_params_name = 'design_params_name_example'; // string | Design name.
$design_params_path = 'design_params_path_example'; // string | Design location (folder path).
$design_params_custom_fields = NULL; // array<string,mixed> | Design custom attributes.
$preview_settings_make_preview = True; // bool | Force make preview.
$preview_settings_namespace = 'preview_settings_namespace_example'; // string | Preview namespace.
$preview_settings_name = 'preview_settings_name_example'; // string | Preview name.
$preview_settings_width = 56; // int | Preview image width.
$preview_settings_height = 56; // int | Preview image height.
$preview_settings_stub = True; // bool | Preview stub content switcher.  Indicates whether to show stub content in preview.
$preview_settings_format = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat | Preview image format.
$marker_shortcuts_file = "/path/to/file.txt"; // \SplFileObject | Marker shortcuts config file.

try {
    $result = $apiInstance->designProcessorImportDesign($source_file, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $preview_settings_make_preview, $preview_settings_namespace, $preview_settings_name, $preview_settings_width, $preview_settings_height, $preview_settings_stub, $preview_settings_format, $marker_shortcuts_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorImportDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_file** | **\SplFileObject****\SplFileObject**| Design source file. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **design_params_name** | **string**| Design name. | [optional] |
| **design_params_path** | **string**| Design location (folder path). | [optional] |
| **design_params_custom_fields** | [**array<string,mixed>**](../Model/array.md)| Design custom attributes. | [optional] |
| **preview_settings_make_preview** | **bool**| Force make preview. | [optional] |
| **preview_settings_namespace** | **string**| Preview namespace. | [optional] |
| **preview_settings_name** | **string**| Preview name. | [optional] |
| **preview_settings_width** | **int**| Preview image width. | [optional] |
| **preview_settings_height** | **int**| Preview image height. | [optional] |
| **preview_settings_stub** | **bool**| Preview stub content switcher.  Indicates whether to show stub content in preview. | [optional] |
| **preview_settings_format** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat**](../Model/AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat.md)| Preview image format. | [optional] |
| **marker_shortcuts_file** | **\SplFileObject****\SplFileObject**| Marker shortcuts config file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorLinkDataSchema()`

```php
designProcessorLinkDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_link_data_schema_model): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Links data schema to the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_design_link_data_schema_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkDataSchemaModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkDataSchemaModel | Link schema operation parameters.

try {
    $result = $apiInstance->designProcessorLinkDataSchema($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_link_data_schema_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorLinkDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_design_link_data_schema_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkDataSchemaModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignDesignLinkDataSchemaModel.md)| Link schema operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorLinkPalettes()`

```php
designProcessorLinkPalettes($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_link_palettes_model): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Links palettes to the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_design_link_palettes_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkPalettesModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkPalettesModel | Link palettes operation parameters.

try {
    $result = $apiInstance->designProcessorLinkPalettes($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_link_palettes_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorLinkPalettes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_design_link_palettes_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkPalettesModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignDesignLinkPalettesModel.md)| Link palettes operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorLinkToggleSet()`

```php
designProcessorLinkToggleSet($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_link_toggle_set_model): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Links toggle set to the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$aurigma_asset_processor_web_api_models_design_design_link_toggle_set_model = new \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkToggleSetModel(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkToggleSetModel | Link toggle set operation parameters.

try {
    $result = $apiInstance->designProcessorLinkToggleSet($id, $tenant_id, $aurigma_asset_processor_web_api_models_design_design_link_toggle_set_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorLinkToggleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **aurigma_asset_processor_web_api_models_design_design_link_toggle_set_model** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiModelsDesignDesignLinkToggleSetModel**](../Model/AurigmaAssetProcessorWebApiModelsDesignDesignLinkToggleSetModel.md)| Link toggle set operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source design entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$surface_index = 56; // int | Design surface index.  Indicates which design surface should be used as a source for preview.
$stub = True; // bool | Design Preview stub contnent switcher.  Indicates whether to show stub content in preview.
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat | Design preview image format.
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorPreparePreview($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorPreparePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source design entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **surface_index** | **int**| Design surface index.  Indicates which design surface should be used as a source for preview. | [optional] |
| **stub** | **bool**| Design Preview stub contnent switcher.  Indicates whether to show stub content in preview. | [optional] |
| **format** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat**](../Model/.md)| Design preview image format. | [optional] |
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

## `designProcessorPreparePreviewUrl()`

```php
designProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id): string
```

Creates preview image for design taken from storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source design entity identifier.
$namespace = 'namespace_example'; // string | Preview namespace.
$name = 'name_example'; // string | Preview name.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$surface_index = 56; // int | Design surface index.  Indicates which design surface should be used as a source for preview.
$stub = True; // bool | Design Preview stub contnent switcher.  Indicates whether to show stub content in preview.
$format = new \Aurigma\AssetProcessor\Model\\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat(); // \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat | Design preview image format.
$force = false; // bool | If set to 'true', new preview prepared, even if preview already existed.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorPreparePreviewUrl($id, $namespace, $name, $width, $height, $surface_index, $stub, $format, $force, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorPreparePreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source design entity identifier. | |
| **namespace** | **string**| Preview namespace. | |
| **name** | **string**| Preview name. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **surface_index** | **int**| Design surface index.  Indicates which design surface should be used as a source for preview. | [optional] |
| **stub** | **bool**| Design Preview stub contnent switcher.  Indicates whether to show stub content in preview. | [optional] |
| **format** | [**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiEnumsDesignPreviewFormat**](../Model/.md)| Design preview image format. | [optional] |
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

## `designProcessorReimportDesign()`

```php
designProcessorReimportDesign($id, $source_file, $tenant_id, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Re-imports design from source file and updates design file and metadata in storage.

Design source file should be a state file or a graphic file.<br />  The marker shortcuts file used only for graphic sources that support markers (PSD or IDML).<br />

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **source_file** | **\SplFileObject****\SplFileObject**| Design source file. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **marker_shortcuts_file** | **\SplFileObject****\SplFileObject**| Marker shortcuts config file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorRemoveDataSchema()`

```php
designProcessorRemoveDataSchema($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Removes data schema from the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorRemoveDataSchema($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorRemoveDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorRemovePalettes()`

```php
designProcessorRemovePalettes($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Removes palettes from the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorRemovePalettes($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorRemovePalettes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorRemoveToggleSet()`

```php
designProcessorRemoveToggleSet($id, $tenant_id): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Removes toggle set from the design file.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designProcessorRemoveToggleSet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorRemoveToggleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorUpdate()`

```php
designProcessorUpdate($id, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $file): \Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto
```

Updates design file and metadata in storage.

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


$apiInstance = new Aurigma\AssetProcessor\Api\DesignProcessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design entity unique identifier.
$tenant_id = 56; // int | Tenant identifier
$design_params_name = 'design_params_name_example'; // string | Design name.
$design_params_path = 'design_params_path_example'; // string | Design location (folder path).
$design_params_custom_fields = NULL; // array<string,mixed> | Design custom attributes.
$file = "/path/to/file.txt"; // \SplFileObject | Design source file.

try {
    $result = $apiInstance->designProcessorUpdate($id, $tenant_id, $design_params_name, $design_params_path, $design_params_custom_fields, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignProcessorApi->designProcessorUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design entity unique identifier. | |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **design_params_name** | **string**| Design name. | [optional] |
| **design_params_path** | **string**| Design location (folder path). | [optional] |
| **design_params_custom_fields** | [**array<string,mixed>**](../Model/array.md)| Design custom attributes. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Design source file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetStorageDesignDto**](../Model/AurigmaAssetStorageDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designProcessorValidateDesignImportSettings()`

```php
designProcessorValidateDesignImportSettings($tenant_id, $marker_shortcuts_file): \Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignValidationResultDto
```

Validates the design import settings.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **marker_shortcuts_file** | **\SplFileObject****\SplFileObject**| Marker shortcuts config file. | [optional] |

### Return type

[**\Aurigma\AssetProcessor\Model\AurigmaAssetProcessorWebApiDtosDesignValidationResultDto**](../Model/AurigmaAssetProcessorWebApiDtosDesignValidationResultDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
