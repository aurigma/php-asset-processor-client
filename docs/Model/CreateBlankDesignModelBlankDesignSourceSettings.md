# # CreateBlankDesignModelBlankDesignSourceSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**design_id** | **string** | Source design identifier. | [optional]
**design_surface_index** | **int** | Index (zero-based) of a surface in a source design that should be used as a template for a new blank design.  If not set, first surface of the source design will be used. | [optional]
**preserve_print_areas** | **bool** | Flag that indicates whether original surface print areas should be used.  If value is &#x60;false&#x60;, a new print area will be created with size and margins specified in Aurigma.AssetProcessor.WebApi.Models.Design.BlankDesignSettingsModel. | [optional]
**preserve_surface_items** | **bool** | Flag that indicates whether original surface items should be preserved.  If value is &#x60;false&#x60;, target design surfaces will be blank. | [optional]
**match_surfaces** | **bool** | Flag that indicates whether original design surfaces should be places in new design in original order.  If value is &#x60;true&#x60;, &#x60;DesignSurfaceIndex&#x60; parameter will be ignored.  If target blank design has more surfaces than the original one, last original surface will be repeated to the end. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
