# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The identifier of the order. | 
**pickup_point** | **bool** | Indicates whether this order is shipped to a Pick Up Point. | 
**order_placed_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when the order was placed. | [optional] 
**shipment_details** | [**\Bol\Retailer\Model\ShipmentDetails**](ShipmentDetails.md) |  | 
**billing_details** | [**\Bol\Retailer\Model\BillingDetails**](BillingDetails.md) |  | [optional] 
**order_items** | [**\Bol\Retailer\Model\OrderOrderItem[]**](OrderOrderItem.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

