# ReducedOrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_item_id** | **string** | The id for the order item. One order can have multiple order items, but the list can only take one item. | 
**ean** | **string** | The EAN number associated with this product. | 
**fulfilment_method** | **string** | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | 
**fulfilment_status** | **string** | This field indicates the processing state of an order. It can have two values: \&quot;OPEN,\&quot; which corresponds to active order items excluding those that have been shipped or cancelled, and \&quot;HANDLED,\&quot; which means the order item has either been shipped or cancelled. | 
**quantity** | **int** | Amount of ordered products for this order item id. | 
**quantity_shipped** | **int** | Amount of shipped products for this order item id. | 
**quantity_cancelled** | **int** | Amount of cancelled products for this order item id. | 
**cancellation_request** | **bool** | Indicates whether the order was cancelled on request of the customer before the retailer has shipped it. | 
**latest_changed_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when the orderItem was last changed. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

