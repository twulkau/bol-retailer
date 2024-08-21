# Offer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Unique identifier for an offer. | 
**retailer_id** | **string** | The ID of the retailer which the offer belongs to. | 
**country_code** | **string** | The country code. | 
**best_offer** | **bool** | Indicator if the offer is the best offer within the country for the requested EAN. | 
**price** | **float** | The selling price to the customer of a single unit including VAT unless there is a discount. The price should always have two decimals precision. | 
**fulfilment_method** | **string** | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | 
**condition** | **string** | The condition of the offered product. | [optional] 
**ultimate_order_time** | **string** | The time in ISO 8601 format when the ultimate order time on the day in order to comply to the maxDeliveryDate as a promise. | [optional] 
**min_delivery_date** | [**\DateTime**](\DateTime.md) | The date at which package can be delivered to customer earliest. | [optional] 
**max_delivery_date** | [**\DateTime**](\DateTime.md) | The date at which package can be delivered to customer latest. In case of pre-orders where a specific delivery date is not available, this field will not be present. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

