# RetailerInformationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retailer_id** | **string** | The Id of the retailer which information belongs to. | 
**display_name** | **string** | The name of the retailer visible on bol.com | 
**registration_date** | **string** | A date representing the registration date for the retailer within bol.com | 
**top_retailer** | **bool** | Indication of retailer&#39;s being the top seller. | [optional] 
**rating_method** | **string** | An identifier that identifies if the rating is calculated over the past three months or on all reviews for the retailer. | [optional] 
**retailer_rating** | [**\Bol\Retailer\Model\RetailerRating**](RetailerRating.md) | Rating on different aspects all being one decimal precision. | [optional] 
**retailer_review** | [**\Bol\Retailer\Model\RetailerReview**](RetailerReview.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


