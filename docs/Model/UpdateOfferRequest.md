# UpdateOfferRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters. | [optional] 
**on_hold_by_retailer** | **bool** | Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false. | [optional] 
**unknown_product_title** | **string** | In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored. | [optional] 
**fulfilment** | [**\Bol\Retailer\Model\Fulfilment**](Fulfilment.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


