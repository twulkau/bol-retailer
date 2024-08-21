# SubscriptionResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. | 
**resources** | **string[]** |  | 
**url** | **string** | The destination for event notifications. For WEBHOOK subscription types, this is the URL where messages are posted to. For GCP_PUBSUB, this is the topic name. | 
**subscription_type** | **string** | The type of subscription. It indicates the platform where the events will be subscribed to. Be aware that certain event types are only available for specific types. | 
**enabled** | **bool** | Whether the subscription is enabled and will receive notifications or not. Defaults to true. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

