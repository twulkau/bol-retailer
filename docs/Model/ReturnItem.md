# ReturnItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rma_id** | **string** | The RMA (Return Merchandise Authorization) identifier of the return. | 
**order_id** | **string** | The id of the customer order this return item is in. | 
**ean** | **string** | The EAN number associated with this product. | 
**title** | **string** | The product title. | 
**expected_quantity** | **int** | The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order. | 
**return_reason** | [**\Bol\Retailer\Model\ReturnReason**](ReturnReason.md) |  | 
**track_and_trace** | **string** | The track and trace code that is associated with this transport. | [optional] 
**transporter_name** | **string** | The name of the transporter. | [optional] 
**handled** | **bool** | Indicates if this return item has been handled (by the retailer). | 
**processing_results** | [**\Bol\Retailer\Model\ReturnProcessingResult[]**](ReturnProcessingResult.md) |  | 
**customer_details** | [**\Bol\Retailer\Model\CustomerDetails**](CustomerDetails.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

