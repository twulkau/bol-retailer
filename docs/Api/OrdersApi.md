# Bol\Retailer\OrdersApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderItem**](OrdersApi.md#cancelOrderItem) | **PUT** /retailer/orders/cancellation | Cancel an order item by an order item id
[**getOrder**](OrdersApi.md#getOrder) | **GET** /retailer/orders/{order-id} | Get an order by order id
[**getOrders**](OrdersApi.md#getOrders) | **GET** /retailer/orders | Get a list of orders
[**shipOrderItem**](OrdersApi.md#shipOrderItem) | **PUT** /retailer/orders/shipment | Ship order item


# **cancelOrderItem**
> \Bol\Retailer\Model\ProcessStatus cancelOrderItem($body)

Cancel an order item by an order item id

This endpoint can be used to either confirm a cancellation request by the customer or to cancel an order item you yourself are unable to fulfil.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\ContainerForTheOrderItemsThatHaveToBeCancelled_(); // \Bol\Retailer\Model\ContainerForTheOrderItemsThatHaveToBeCancelled_ | 

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
 **body** | [**\Bol\Retailer\Model\ContainerForTheOrderItemsThatHaveToBeCancelled_**](../Model/ContainerForTheOrderItemsThatHaveToBeCancelled_.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Bol\Retailer\Model\Order getOrder($order_id)

Get an order by order id

Gets an order by order id. The order can be partially shipped or cancelled, and the message contains the quantity shipped or cancelled items. The unitPrice takes account of volume discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \Bol\Retailer\Model\ReducedOrders getOrders($page, $fulfilment_method, $status, $change_interval_minute, $latest_change_date)

Get a list of orders

Gets a paginated list of all orders for a retailer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The requested page number with a page size of 50 items.
$fulfilment_method = "FBR"; // string | Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). In order to retrieve both FBR and FBB orders, ALL can be used as a parameter.
$status = "OPEN"; // string | To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders.
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
 **status** | **string**| To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders. | [optional] [default to OPEN]
 **change_interval_minute** | **int**| To filter on the period in minutes during which the latest change was performed on an order item. | [optional]
 **latest_change_date** | **string**| To filter on the date on which the latest change was performed on an order item. Up to 3 months of history is supported. | [optional]

### Return type

[**\Bol\Retailer\Model\ReducedOrders**](../Model/ReducedOrders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipOrderItem**
> \Bol\Retailer\Model\ProcessStatus shipOrderItem($body)

Ship order item

Ship a single order item within a customer order by providing shipping information. If you purchased a shipping label you should add the shippingLabelId to this message and leave the transport element empty. If you will ship the item using your own transporter method you must omit the shippingLabelId entirely and fill in the transport element with the fields from GET shipping labels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\ShipmentRequest(); // \Bol\Retailer\Model\ShipmentRequest | 

try {
    $result = $apiInstance->shipOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->shipOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\ShipmentRequest**](../Model/ShipmentRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

