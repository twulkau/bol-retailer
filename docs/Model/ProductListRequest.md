# ProductListRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | The country for which the products will be retrieved. Default value: NL | [optional] 
**search_term** | **string** | The search term to get the associated products for. | [optional] 
**category_id** | **string** | The category to get the associated products for. | [optional] 
**filter_ranges** | [**\Bol\Retailer\Model\ProductListFilterRange[]**](ProductListFilterRange.md) | The list of range filters to get associated products for. | [optional] 
**filter_values** | [**\Bol\Retailer\Model\ProductListFilterValue[]**](ProductListFilterValue.md) | The list of filter values in this filter. | [optional] 
**sort** | **string** | Determines the order of the products. | [optional] 
**page** | **int** | The requested page number with a page size of 50 items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


