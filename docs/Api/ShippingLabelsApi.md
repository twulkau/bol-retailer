# Bol\Retailer\ShippingLabelsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryOptions**](ShippingLabelsApi.md#getDeliveryOptions) | **POST** /retailer/shipping-labels/delivery-options | Get delivery options
[**getShippingLabel**](ShippingLabelsApi.md#getShippingLabel) | **GET** /retailer/shipping-labels/{shipping-label-id} | Get a shipping label
[**postShippingLabel**](ShippingLabelsApi.md#postShippingLabel) | **POST** /retailer/shipping-labels | Create a shipping label


# **getDeliveryOptions**
> \Bol\Retailer\Model\DeliveryOptionsResponse getDeliveryOptions($body)

Get delivery options

Retrieves all available delivery options based on the supplied configuration of order items that has to be shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\DeliveryOptionsRequest(); // \Bol\Retailer\Model\DeliveryOptionsRequest | 

try {
    $result = $apiInstance->getDeliveryOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->getDeliveryOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\DeliveryOptionsRequest**](../Model/DeliveryOptionsRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\DeliveryOptionsResponse**](../Model/DeliveryOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingLabel**
> string[] getShippingLabel($shipping_label_id)

Get a shipping label

Retrieves a shipping label by shipping label id. Metadata for the shipping label is added as headers in the response. If you are only interested in the metadata, you can do a HEAD request to retrieve only the headers without the label data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_label_id = "shipping_label_id_example"; // string | The shipping label id.

try {
    $result = $apiInstance->getShippingLabel($shipping_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->getShippingLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_label_id** | **string**| The shipping label id. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postShippingLabel**
> \Bol\Retailer\Model\ProcessStatus postShippingLabel($body)

Create a shipping label

Create a shipping label with a shipping label offer id retrieved from get delivery options.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\ShippingLabelRequest(); // \Bol\Retailer\Model\ShippingLabelRequest | 

try {
    $result = $apiInstance->postShippingLabel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->postShippingLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\ShippingLabelRequest**](../Model/ShippingLabelRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

