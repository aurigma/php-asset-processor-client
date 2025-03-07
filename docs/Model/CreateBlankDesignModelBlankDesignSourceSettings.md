# # CreateBlankDesignModelBlankDesignSourceSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**design_id** | **string** | Source design identifier. | [optional]
**design_surface_index** | **int** | Index (zero-based) of a surface in a source design that should be used as a template for a new blank design.  If not set, first surface of the source design will be used. | [optional]
**preserve_print_areas** | **bool** | Flag that indicates whether original surface print areas should be used.  If value is &#x60;false&#x60;, a new print area will be created with size and margins specified in Aurigma.AssetProcessor.WebApi.Models.Design.BlankDesignSettingsModel. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
