# Aurigma Customer's Canvas SDK - Asset Processor Client
======================================================

This module is a PHP API client for Asset Processor service which is a part of [**Customer's Canvas**](https://customerscanvas.com) web-to-print system. It is supposed that you are familiar with its services and understand how to use its APIs. To learn more about Customer's Canvas and its services, refer the [Getting Started section of its documentation](https://customerscanvas.com/dev/getting-started/intro.html).

## Pre-requisites

To be able to use this package, you need to meet the following requirements: 

* You must have an account at Customer's Canvas.

For other platforms, see the [Backend services](https://customerscanvas.com/dev/getting-started/about-backend-services.html) article in Customer's Canvas documentation. 

## Installation

```
composer require aurigma/php-asset-processor-client
```

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/aurigma/php-asset-processor-client.git"
    }
  ],
  "require": {
    "aurigma/php-asset-processor-client": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation).

Receive an access token through your backend as explained in the [documentation](https://customerscanvas.com/dev/getting-started/about-backend-services.html#authorization) and deliver it to your app. 

Then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\BuildInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->buildInfoGetInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildInfoApi->buildInfoGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Aurigma Inc <info@aurigma.com> (https://customerscanvas.com)

## API Endpoints

All URIs are relative to *https://dm-assetprocessor.azurewebsites.net/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BuildInfoApi* | [**buildInfoGetInfo**](docs/Api/BuildInfoApi.md#buildinfogetinfo) | **GET** /api/processor/v1/info | Gets assembly build info
*BuildInfoApi* | [**buildInfoHeadInfo**](docs/Api/BuildInfoApi.md#buildinfoheadinfo) | **HEAD** /api/processor/v1/info | Gets assembly build info
*ColorProfileProcessorApi* | [**colorProfileProcessorImportColorProfile**](docs/Api/ColorProfileProcessorApi.md#colorprofileprocessorimportcolorprofile) | **POST** /api/processor/v1/colorProfiles/import | Imports color profile and saves it to storage.
*ColorProfileProcessorApi* | [**colorProfileProcessorUpdate**](docs/Api/ColorProfileProcessorApi.md#colorprofileprocessorupdate) | **POST** /api/processor/v1/colorProfiles/{id}/update | Updates color profile file and metadata in storage
*DataSchemaProcessorApi* | [**dataSchemaProcessorGetLinks**](docs/Api/DataSchemaProcessorApi.md#dataschemaprocessorgetlinks) | **GET** /api/processor/v1/dataSchemas/{id}/links | Gets all links associated with this data schema.
*DataSchemaProcessorApi* | [**dataSchemaProcessorImportDataSchema**](docs/Api/DataSchemaProcessorApi.md#dataschemaprocessorimportdataschema) | **POST** /api/processor/v1/dataSchemas/import | Imports data schema and saves it to storage.
*DataSchemaProcessorApi* | [**dataSchemaProcessorUpdate**](docs/Api/DataSchemaProcessorApi.md#dataschemaprocessorupdate) | **POST** /api/processor/v1/dataSchemas/{id}/update | Updates data schema file and metadata in storage
*DataSetProcessorApi* | [**dataSetProcessorCheck**](docs/Api/DataSetProcessorApi.md#datasetprocessorcheck) | **POST** /api/processor/v1/dataSets/{id}/check | Checks if data set taken from storage has any problems
*DataSetProcessorApi* | [**dataSetProcessorEmbedDataSchema**](docs/Api/DataSetProcessorApi.md#datasetprocessorembeddataschema) | **POST** /api/processor/v1/dataSets/{id}/schema/embed | Embeds linked data schema to the data set
*DataSetProcessorApi* | [**dataSetProcessorExportDataSet**](docs/Api/DataSetProcessorApi.md#datasetprocessorexportdataset) | **GET** /api/processor/v1/dataSets/{id}/export | Exports data set
*DataSetProcessorApi* | [**dataSetProcessorExtractDataSchema**](docs/Api/DataSetProcessorApi.md#datasetprocessorextractdataschema) | **POST** /api/processor/v1/dataSets/{id}/schema/extract | Extracts data schema from data set and saves it to the specified folder
*DataSetProcessorApi* | [**dataSetProcessorImportDataSet**](docs/Api/DataSetProcessorApi.md#datasetprocessorimportdataset) | **POST** /api/processor/v1/dataSets/import | Imports data set and saves it to storage.
*DataSetProcessorApi* | [**dataSetProcessorLinkDataSchema**](docs/Api/DataSetProcessorApi.md#datasetprocessorlinkdataschema) | **POST** /api/processor/v1/dataSets/{id}/schema/link | Links data schema to the data set
*DataSetProcessorApi* | [**dataSetProcessorUpdate**](docs/Api/DataSetProcessorApi.md#datasetprocessorupdate) | **POST** /api/processor/v1/dataSets/{id}/update | Updates data set file and metadata in storage
*DesignProcessorApi* | [**designProcessorCheck**](docs/Api/DesignProcessorApi.md#designprocessorcheck) | **POST** /api/processor/v1/designs/{id}/check | Checks if design taken from storage has any problems
*DesignProcessorApi* | [**designProcessorCreateBlankDesign**](docs/Api/DesignProcessorApi.md#designprocessorcreateblankdesign) | **POST** /api/processor/v1/designs/blank | Creates design by product model and saves it to storage
*DesignProcessorApi* | [**designProcessorEmbedDataSchema**](docs/Api/DesignProcessorApi.md#designprocessorembeddataschema) | **POST** /api/processor/v1/designs/{id}/schema/embed | Embeds linked data schema to the design file
*DesignProcessorApi* | [**designProcessorExportDesign**](docs/Api/DesignProcessorApi.md#designprocessorexportdesign) | **GET** /api/processor/v1/designs/{id}/export | Exports design file
*DesignProcessorApi* | [**designProcessorExtractDataSchema**](docs/Api/DesignProcessorApi.md#designprocessorextractdataschema) | **POST** /api/processor/v1/designs/{id}/schema/extract | Extracts data schema from design file and saves it to the specified folder
*DesignProcessorApi* | [**designProcessorGetDepositPhotos**](docs/Api/DesignProcessorApi.md#designprocessorgetdepositphotos) | **POST** /api/processor/v1/designs/{id}/depositphotos | Return information about inserted images from DepositPhotos
*DesignProcessorApi* | [**designProcessorImportDesign**](docs/Api/DesignProcessorApi.md#designprocessorimportdesign) | **POST** /api/processor/v1/designs/import | Imports design from source file and saves it to storage.
*DesignProcessorApi* | [**designProcessorLinkDataSchema**](docs/Api/DesignProcessorApi.md#designprocessorlinkdataschema) | **POST** /api/processor/v1/designs/{id}/schema/link | Links data schema to the design file
*DesignProcessorApi* | [**designProcessorPreparePreview**](docs/Api/DesignProcessorApi.md#designprocessorpreparepreview) | **GET** /api/processor/v1/designs/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for design taken from storage.
*DesignProcessorApi* | [**designProcessorPreparePreviewUrl**](docs/Api/DesignProcessorApi.md#designprocessorpreparepreviewurl) | **GET** /api/processor/v1/designs/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for design taken from storage.
*DesignProcessorApi* | [**designProcessorRemoveDataSchema**](docs/Api/DesignProcessorApi.md#designprocessorremovedataschema) | **POST** /api/processor/v1/designs/{id}/schema/remove | Removes data schema from the design file
*DesignProcessorApi* | [**designProcessorUpdate**](docs/Api/DesignProcessorApi.md#designprocessorupdate) | **POST** /api/processor/v1/designs/{id}/update | Updates design file and metadata in storage
*FontProcessorApi* | [**fontProcessorImportFont**](docs/Api/FontProcessorApi.md#fontprocessorimportfont) | **POST** /api/processor/v1/fonts/import | Imports font from source file and saves it to storage.
*FontProcessorApi* | [**fontProcessorPreparePreview**](docs/Api/FontProcessorApi.md#fontprocessorpreparepreview) | **GET** /api/processor/v1/fonts/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for font taken from storage.
*FontProcessorApi* | [**fontProcessorPreparePreviewUrl**](docs/Api/FontProcessorApi.md#fontprocessorpreparepreviewurl) | **GET** /api/processor/v1/fonts/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for font taken from storage.
*FontProcessorApi* | [**fontProcessorUpdate**](docs/Api/FontProcessorApi.md#fontprocessorupdate) | **POST** /api/processor/v1/fonts/{id}/update | Updates font file and metadata in storage
*ImageProcessorApi* | [**imageProcessorImportImage**](docs/Api/ImageProcessorApi.md#imageprocessorimportimage) | **POST** /api/processor/v1/images/import | Imports image from source file and saves it to storage.
*ImageProcessorApi* | [**imageProcessorPreparePreview**](docs/Api/ImageProcessorApi.md#imageprocessorpreparepreview) | **GET** /api/processor/v1/images/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for image taken from storage.
*ImageProcessorApi* | [**imageProcessorPreparePreviewUrl**](docs/Api/ImageProcessorApi.md#imageprocessorpreparepreviewurl) | **GET** /api/processor/v1/images/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for image taken from storage.
*ImageProcessorApi* | [**imageProcessorUpdate**](docs/Api/ImageProcessorApi.md#imageprocessorupdate) | **POST** /api/processor/v1/images/{id}/update | Updates image file and metadata in storage
*IntegrationProcessorApi* | [**integrationProcessorPull**](docs/Api/IntegrationProcessorApi.md#integrationprocessorpull) | **GET** /api/processor/v1/integration/pull/{tenantId}/{userId}/{designId} | Loads design from storage (private or public)
*IntegrationProcessorApi* | [**integrationProcessorPush**](docs/Api/IntegrationProcessorApi.md#integrationprocessorpush) | **POST** /api/processor/v1/integration/push/{tenantId}/{userId}/{designId} | Saves design to private storage
*PrivateDesignProcessorApi* | [**privateDesignProcessorCheck**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorcheck) | **POST** /api/processor/v1/private-designs/{id}/check | Checks if design taken from private storage has any problems
*PrivateDesignProcessorApi* | [**privateDesignProcessorCreateBlankDesign**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorcreateblankdesign) | **POST** /api/processor/v1/private-designs/blank | Creates design by product model and saves it to private storage
*PrivateDesignProcessorApi* | [**privateDesignProcessorEmbedDataSchema**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorembeddataschema) | **POST** /api/processor/v1/private-designs/{id}/schema/embed | Embeds linked data schema to the design file
*PrivateDesignProcessorApi* | [**privateDesignProcessorExportDesign**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorexportdesign) | **GET** /api/processor/v1/private-designs/{id}/export | Exports design file
*PrivateDesignProcessorApi* | [**privateDesignProcessorExtractDataSchema**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorextractdataschema) | **POST** /api/processor/v1/private-designs/{id}/schema/extract | Extracts data schema from design file and saves it to the specified folder
*PrivateDesignProcessorApi* | [**privateDesignProcessorGetDepositPhotos**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorgetdepositphotos) | **POST** /api/processor/v1/private-designs/{id}/depositphotos | Return information about inserted images from DepositPhotos
*PrivateDesignProcessorApi* | [**privateDesignProcessorImportDesign**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorimportdesign) | **POST** /api/processor/v1/private-designs/import | Imports design from source file and saves it to private storage.
*PrivateDesignProcessorApi* | [**privateDesignProcessorLinkDataSchema**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorlinkdataschema) | **POST** /api/processor/v1/private-designs/{id}/schema/link | Links data schema to the design file
*PrivateDesignProcessorApi* | [**privateDesignProcessorPreparePreview**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorpreparepreview) | **GET** /api/processor/v1/private-designs/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for design taken from private storage.
*PrivateDesignProcessorApi* | [**privateDesignProcessorPreparePreviewUrl**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorpreparepreviewurl) | **GET** /api/processor/v1/private-designs/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for design taken from private storage.
*PrivateDesignProcessorApi* | [**privateDesignProcessorRemoveDataSchema**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorremovedataschema) | **POST** /api/processor/v1/private-designs/{id}/schema/remove | Removes data schema from the design file
*PrivateDesignProcessorApi* | [**privateDesignProcessorUpdate**](docs/Api/PrivateDesignProcessorApi.md#privatedesignprocessorupdate) | **POST** /api/processor/v1/private-designs/{id}/update | Updates design file and metadata in private storage
*PrivateImageProcessorApi* | [**privateImageProcessorImportImage**](docs/Api/PrivateImageProcessorApi.md#privateimageprocessorimportimage) | **POST** /api/processor/v1/private-images/import | Imports image from source file and saves it to private storage.
*PrivateImageProcessorApi* | [**privateImageProcessorPreparePreview**](docs/Api/PrivateImageProcessorApi.md#privateimageprocessorpreparepreview) | **GET** /api/processor/v1/private-images/{id}/preview/{namespace}/{name}/{width}x{height} | Creates preview image for image taken from private storage.
*PrivateImageProcessorApi* | [**privateImageProcessorPreparePreviewUrl**](docs/Api/PrivateImageProcessorApi.md#privateimageprocessorpreparepreviewurl) | **GET** /api/processor/v1/private-images/{id}/preview/{namespace}/{name}/{width}x{height}/url | Creates preview image for image taken from private storage.
*PrivateImageProcessorApi* | [**privateImageProcessorUpdate**](docs/Api/PrivateImageProcessorApi.md#privateimageprocessorupdate) | **POST** /api/processor/v1/private-images/{id}/update | Updates image file and metadata in private storage

## Models

- [BlankDesignSettingsModel](docs/Model/BlankDesignSettingsModel.md)
- [BuildInfoModel](docs/Model/BuildInfoModel.md)
- [ColorProfileClass](docs/Model/ColorProfileClass.md)
- [ColorProfileDto](docs/Model/ColorProfileDto.md)
- [ColorProfileMetadata](docs/Model/ColorProfileMetadata.md)
- [ColorSpace](docs/Model/ColorSpace.md)
- [ConflictType](docs/Model/ConflictType.md)
- [CreateBlankDesignModel](docs/Model/CreateBlankDesignModel.md)
- [DataSchemaDto](docs/Model/DataSchemaDto.md)
- [DataSchemaLink](docs/Model/DataSchemaLink.md)
- [DataSchemaLinksInfo](docs/Model/DataSchemaLinksInfo.md)
- [DataSchemaMetadata](docs/Model/DataSchemaMetadata.md)
- [DataSchemaValidationRule](docs/Model/DataSchemaValidationRule.md)
- [DataSetDto](docs/Model/DataSetDto.md)
- [DataSetExtractDataSchemaModel](docs/Model/DataSetExtractDataSchemaModel.md)
- [DataSetLinkDataSchemaModel](docs/Model/DataSetLinkDataSchemaModel.md)
- [DataSetMetadata](docs/Model/DataSetMetadata.md)
- [DataSetProblemInfo](docs/Model/DataSetProblemInfo.md)
- [DataSetSchemaMissingProblemDescription](docs/Model/DataSetSchemaMissingProblemDescription.md)
- [DataSetValidationProblemDescription](docs/Model/DataSetValidationProblemDescription.md)
- [DepositPhotoInfo](docs/Model/DepositPhotoInfo.md)
- [DesignDataSchemaMissingProblemDescription](docs/Model/DesignDataSchemaMissingProblemDescription.md)
- [DesignDataValidationProblemDescription](docs/Model/DesignDataValidationProblemDescription.md)
- [DesignDto](docs/Model/DesignDto.md)
- [DesignExtractDataSchemaModel](docs/Model/DesignExtractDataSchemaModel.md)
- [DesignFontMetadata](docs/Model/DesignFontMetadata.md)
- [DesignFontMissingProblemDescription](docs/Model/DesignFontMissingProblemDescription.md)
- [DesignImportConflictDto](docs/Model/DesignImportConflictDto.md)
- [DesignLinkDataSchemaModel](docs/Model/DesignLinkDataSchemaModel.md)
- [DesignMetadata](docs/Model/DesignMetadata.md)
- [DesignParamsModel](docs/Model/DesignParamsModel.md)
- [DesignPreviewFormat](docs/Model/DesignPreviewFormat.md)
- [DesignPreviewSettingsModel](docs/Model/DesignPreviewSettingsModel.md)
- [DesignProblemInfo](docs/Model/DesignProblemInfo.md)
- [DesignSurfaceMetadata](docs/Model/DesignSurfaceMetadata.md)
- [FontDto](docs/Model/FontDto.md)
- [FontMetadata](docs/Model/FontMetadata.md)
- [FontPreviewFormat](docs/Model/FontPreviewFormat.md)
- [FontPreviewHorizontalAlignment](docs/Model/FontPreviewHorizontalAlignment.md)
- [FontPreviewVerticalAlignment](docs/Model/FontPreviewVerticalAlignment.md)
- [ImageDepositPhoto](docs/Model/ImageDepositPhoto.md)
- [ImageDto](docs/Model/ImageDto.md)
- [ImageMetadata](docs/Model/ImageMetadata.md)
- [ImagePageMetadata](docs/Model/ImagePageMetadata.md)
- [ImagePreviewFitMode](docs/Model/ImagePreviewFitMode.md)
- [ImagePreviewInterpolationMode](docs/Model/ImagePreviewInterpolationMode.md)
- [MissingFontInfo](docs/Model/MissingFontInfo.md)
- [MissingFontsConflictDto](docs/Model/MissingFontsConflictDto.md)
- [MissingImageInfo](docs/Model/MissingImageInfo.md)
- [MissingImagesConflictDto](docs/Model/MissingImagesConflictDto.md)
- [NameConflictDto](docs/Model/NameConflictDto.md)
- [PreviewMetadata](docs/Model/PreviewMetadata.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)