# RetailerOffer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Unique identifier for an offer. | 
**ean** | **string** | The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN. | 
**reference** | **string** | A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 100 characters. | [optional] 
**on_hold_by_retailer** | **bool** | This field specifies whether the retailer has temporarily suspended the listing of this offer on the bol.com website. When set to true, the offer becomes invisible to customers and is not available for purchase. The default setting, false, indicates that the offer is active and visible on the website. This feature is useful for managing inventory or making updates to the offer without permanently removing it from the site. | 
**unknown_product_title** | **string** | In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored. | [optional] 
**pricing** | [**\Bol\Retailer\Model\Pricing**](Pricing.md) |  | 
**stock** | [**\Bol\Retailer\Model\Stock**](Stock.md) |  | 
**fulfilment** | [**\Bol\Retailer\Model\Fulfilment**](Fulfilment.md) |  | 
**store** | [**\Bol\Retailer\Model\Store**](Store.md) |  | 
**condition** | [**\Bol\Retailer\Model\Condition**](Condition.md) |  | 
**not_publishable_reasons** | [**\Bol\Retailer\Model\NotPublishableReason[]**](NotPublishableReason.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

