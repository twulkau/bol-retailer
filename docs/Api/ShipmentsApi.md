# Bol\Retailer\ShipmentsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShipment**](ShipmentsApi.md#createshipment) | **POST** /retailer/shipments | Create a shipment
[**getInvoiceRequests**](ShipmentsApi.md#getinvoicerequests) | **GET** /retailer/shipments/invoices/requests | Get a list of invoice requests
[**getShipment**](ShipmentsApi.md#getshipment) | **GET** /retailer/shipments/{shipment-id} | Get a shipment by shipment id
[**getShipments**](ShipmentsApi.md#getshipments) | **GET** /retailer/shipments | Get shipment list
[**uploadInvoice**](ShipmentsApi.md#uploadinvoice) | **POST** /retailer/shipments/invoices/{shipment-id} | Upload an invoice for shipment id

# **createShipment**
> \Bol\Retailer\Model\ProcessStatus createShipment($body)

Create a shipment

Ship multiple single order items within a customer order by providing shipping information. If you purchased a shipping label you should add the shippingLabelId to this message and leave the transport element empty. If you will ship the item using your own transporter method you must omit the shippingLabelId entirely and fill in the transport element with the fields from GET shipping labels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\ShipmentRequest(); // \Bol\Retailer\Model\ShipmentRequest | 

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\ShipmentRequest**](../Model/ShipmentRequest.md)|  |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v10+json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceRequests**
> \Bol\Retailer\Model\InvoiceRequestsResponse getInvoiceRequests($shipment_id, $page, $state)

Get a list of invoice requests

Gets a list of paginated invoice requests initiated by customers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = "shipment_id_example"; // string | The id of the shipment.
$page = 1; // int | The requested page number with a page size of 50 items.
$state = "state_example"; // string | To filter on invoice request state. You can filter on all invoice requests regardless their statuses, open invoice requests requiring your action and invoice requests uploaded with possible errors.

try {
    $result = $apiInstance->getInvoiceRequests($shipment_id, $page, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getInvoiceRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The id of the shipment. | [optional]
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]
 **state** | **string**| To filter on invoice request state. You can filter on all invoice requests regardless their statuses, open invoice requests requiring your action and invoice requests uploaded with possible errors. | [optional]

### Return type

[**\Bol\Retailer\Model\InvoiceRequestsResponse**](../Model/InvoiceRequestsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipment**
> \Bol\Retailer\Model\Shipment getShipment($shipment_id)

Get a shipment by shipment id

Retrieve a single shipment by its corresponding id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = "shipment_id_example"; // string | The id of the shipment.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The id of the shipment. |

### Return type

[**\Bol\Retailer\Model\Shipment**](../Model/Shipment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipments**
> \Bol\Retailer\Model\ShipmentsResponse getShipments($page, $fulfilment_method, $order_id)

Get shipment list

A paginated list to retrieve all your shipments up to 3 months old. The shipments will be sorted by date in descending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page to get with a page size of 50.
$fulfilment_method = "fulfilment_method_example"; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
$order_id = "order_id_example"; // string | The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored.

try {
    $result = $apiInstance->getShipments($page, $fulfilment_method, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1]
 **fulfilment_method** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional]
 **order_id** | **string**| The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. | [optional]

### Return type

[**\Bol\Retailer\Model\ShipmentsResponse**](../Model/ShipmentsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadInvoice**
> \Bol\Retailer\Model\ProcessStatus uploadInvoice($body, $shipment_id)

Upload an invoice for shipment id

Uploads an invoice associated with shipment id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\InvoicesShipmentidBody(); // \Bol\Retailer\Model\InvoicesShipmentidBody | 
$shipment_id = "shipment_id_example"; // string | The id of the shipment associated with the invoice.

try {
    $result = $apiInstance->uploadInvoice($body, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->uploadInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\InvoicesShipmentidBody**](../Model/InvoicesShipmentidBody.md)|  |
 **shipment_id** | **string**| The id of the shipment associated with the invoice. |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

