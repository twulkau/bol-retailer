# Bol\Retailer\OrdersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderItem**](OrdersApi.md#cancelorderitem) | **PUT** /retailer/orders/cancellation | Cancel an order item by an order item id
[**getOrder**](OrdersApi.md#getorder) | **GET** /retailer/orders/{order-id} | Get an order by order id
[**getOrders**](OrdersApi.md#getorders) | **GET** /retailer/orders | Get a list of orders

# **cancelOrderItem**
> \Bol\Retailer\Model\ProcessStatus cancelOrderItem($body)

Cancel an order item by an order item id

This endpoint can be used to either confirm a cancellation request by the customer or to cancel an order item you yourself are unable to fulfil.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\CancellationRequest(); // \Bol\Retailer\Model\CancellationRequest | 

try {
    $result = $apiInstance->cancelOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\CancellationRequest**](../Model/CancellationRequest.md)|  |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v10+json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Bol\Retailer\Model\Order getOrder($order_id)

Get an order by order id

Gets an order by order id. The order can be partially shipped or cancelled, and the message contains the quantity shipped or cancelled items. The unitPrice takes account of volume discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | The id of the order to get.

try {
    $result = $apiInstance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The id of the order to get. |

### Return type

[**\Bol\Retailer\Model\Order**](../Model/Order.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \Bol\Retailer\Model\ReducedOrders getOrders($page, $fulfilment_method, $status, $change_interval_minute, $latest_change_date)

Get a list of orders

Gets a paginated list of all orders for a retailer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The requested page number with a page size of 50 items.
$fulfilment_method = "FBR"; // string | Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). In order to retrieve both FBR and FBB orders, ALL can be used as a parameter.
$status = "OPEN"; // string | You can filter orders based on their status with the following options: all orders, which include every order regardless of its current status; open orders, which show only the active orders excluding those that have been shipped or cancelled; and shipped orders, which display only the orders that have been shipped.
$change_interval_minute = 56; // int | To filter on the period in minutes during which the latest change was performed on an order item.
$latest_change_date = "latest_change_date_example"; // string | To filter on the date on which the latest change was performed on an order item. Up to 3 months of history is supported.

try {
    $result = $apiInstance->getOrders($page, $fulfilment_method, $status, $change_interval_minute, $latest_change_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]
 **fulfilment_method** | **string**| Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). In order to retrieve both FBR and FBB orders, ALL can be used as a parameter. | [optional] [default to FBR]
 **status** | **string**| You can filter orders based on their status with the following options: all orders, which include every order regardless of its current status; open orders, which show only the active orders excluding those that have been shipped or cancelled; and shipped orders, which display only the orders that have been shipped. | [optional] [default to OPEN]
 **change_interval_minute** | **int**| To filter on the period in minutes during which the latest change was performed on an order item. | [optional]
 **latest_change_date** | **string**| To filter on the date on which the latest change was performed on an order item. Up to 3 months of history is supported. | [optional]

### Return type

[**\Bol\Retailer\Model\ReducedOrders**](../Model/ReducedOrders.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

