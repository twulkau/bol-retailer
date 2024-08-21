# Problem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type URI for this problem. Fixed value: https://api.bol.com/problems. | 
**title** | **string** | Title describing the nature of the problem. | 
**status** | **int** | HTTP status returned from the endpoint causing the problem. | 
**detail** | **string** | Detailed error message describing in additional detail what caused the service to return this problem. | 
**host** | **string** | Host identifier describing the server instance that reported the problem. | [optional] 
**instance** | **string** | Full URI path of the resource that reported the problem. | [optional] 
**violations** | [**\Bol\Retailer\Model\Violation[]**](Violation.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

