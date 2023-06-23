# OrderOrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_item_id** | **string** | The id for the order item. One order can have multiple order items, but the list can only take one item. | [optional] 
**cancellation_request** | **bool** | Indicates whether the order was cancelled on request of the customer before the retailer has shipped it. | [optional] 
**fulfilment** | [**\Bol\Retailer\Model\OrderFulfilment**](OrderFulfilment.md) |  | [optional] 
**offer** | [**\Bol\Retailer\Model\OrderOffer**](OrderOffer.md) |  | [optional] 
**product** | [**\Bol\Retailer\Model\OrderProduct**](OrderProduct.md) |  | [optional] 
**quantity** | **int** | Amount of ordered products for this order item id. | [optional] 
**quantity_shipped** | **int** | Amount of shipped products for this order item id. | [optional] 
**quantity_cancelled** | **int** | Amount of cancelled products for this order item id. | [optional] 
**unit_price** | **float** | The selling price to the customer of a single unit including VAT. | [optional] 
**commission** | **float** | The commission for all quantities of this order item. | [optional] 
**additional_services** | [**\Bol\Retailer\Model\AdditionalService[]**](AdditionalService.md) |  | [optional] 
**latest_changed_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when the orderItem was last changed. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


