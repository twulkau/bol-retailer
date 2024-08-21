# Bol\Retailer\SubscriptionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePushNotificationSubscription**](SubscriptionsApi.md#deletepushnotificationsubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | Remove Event Notification Subscription
[**getPushNotificationSubscription**](SubscriptionsApi.md#getpushnotificationsubscription) | **GET** /retailer/subscriptions/{subscription-id} | Retrieve Specific Event Notification Subscription (BETA)
[**getPushNotificationSubscriptions**](SubscriptionsApi.md#getpushnotificationsubscriptions) | **GET** /retailer/subscriptions | Retrieve Event Notification Subscriptions (BETA)
[**getSubscriptionKeys**](SubscriptionsApi.md#getsubscriptionkeys) | **GET** /retailer/subscriptions/signature-keys | Retrieve public keys for push notification signature validation.
[**postPushNotificationSubscription**](SubscriptionsApi.md#postpushnotificationsubscription) | **POST** /retailer/subscriptions | Create Event Notification Subscription (BETA)
[**postTestPushNotification**](SubscriptionsApi.md#posttestpushnotification) | **POST** /retailer/subscriptions/test/{subscription-id} | Send test push notification for subscriptions
[**putPushNotificationSubscription**](SubscriptionsApi.md#putpushnotificationsubscription) | **PUT** /retailer/subscriptions/{subscription-id} | Update Event Notification Subscription (BETA)

# **deletePushNotificationSubscription**
> \Bol\Retailer\Model\ProcessStatus deletePushNotificationSubscription($subscription_id)

Remove Event Notification Subscription

Deletes a specific event notification subscription associated with a retailer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "subscription_id_example"; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.

try {
    $result = $apiInstance->deletePushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deletePushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushNotificationSubscription**
> \Bol\Retailer\Model\SubscriptionResponse getPushNotificationSubscription($subscription_id)

Retrieve Specific Event Notification Subscription (BETA)

Fetches the details of a specific event notification subscription for a retailer. The details include the types of events and the destination, which can either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "subscription_id_example"; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.

try {
    $result = $apiInstance->getPushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. |

### Return type

[**\Bol\Retailer\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushNotificationSubscriptions**
> \Bol\Retailer\Model\SubscriptionsResponse getPushNotificationSubscriptions()

Retrieve Event Notification Subscriptions (BETA)

Retrieves all event notification subscriptions for a given retailer. Each subscription may have different types of events and a destination, which could either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPushNotificationSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bol\Retailer\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionKeys**
> \Bol\Retailer\Model\KeySetResponse getSubscriptionKeys()

Retrieve public keys for push notification signature validation.

Retrieve a list of public keys that should be used to validate the signature header for push notifications received from bol.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSubscriptionKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bol\Retailer\Model\KeySetResponse**](../Model/KeySetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPushNotificationSubscription**
> \Bol\Retailer\Model\ProcessStatus postPushNotificationSubscription($body)

Create Event Notification Subscription (BETA)

Creates a new event notification subscription for a retailer. The subscription can be set up for one or more types of events and the destination can either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\SubscriptionRequest(); // \Bol\Retailer\Model\SubscriptionRequest | 

try {
    $result = $apiInstance->postPushNotificationSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v10+json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTestPushNotification**
> \Bol\Retailer\Model\ProcessStatus postTestPushNotification($subscription_id)

Send test push notification for subscriptions

Send a test push notification to all subscriptions for the provided event.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "subscription_id_example"; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.

try {
    $result = $apiInstance->postTestPushNotification($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postTestPushNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushNotificationSubscription**
> \Bol\Retailer\Model\ProcessStatus putPushNotificationSubscription($body, $subscription_id)

Update Event Notification Subscription (BETA)

Updates the details of a specific event notification subscription for a retailer. The updates can be made to the types of events and/or the destination, which can either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\SubscriptionRequest(); // \Bol\Retailer\Model\SubscriptionRequest | 
$subscription_id = "subscription_id_example"; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.

try {
    $result = $apiInstance->putPushNotificationSubscription($body, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->putPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  |
 **subscription_id** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v10+json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

