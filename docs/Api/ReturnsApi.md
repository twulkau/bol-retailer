# Bol\Retailer\ReturnsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReturn**](ReturnsApi.md#createReturn) | **POST** /retailer/returns | Create a return
[**getReturn**](ReturnsApi.md#getReturn) | **GET** /retailer/returns/{return-id} | Get a return by return id
[**getReturns**](ReturnsApi.md#getReturns) | **GET** /retailer/returns | Get returns
[**handleReturn**](ReturnsApi.md#handleReturn) | **PUT** /retailer/returns/{rma-id} | Handle a return by rma id


# **createReturn**
> \Bol\Retailer\Model\ProcessStatus createReturn($body)

Create a return

Create a return, and automatically handle it with the provided handling result. When successfully created, the resulting return id is provided in the process status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\CreateReturnRequest(); // \Bol\Retailer\Model\CreateReturnRequest | 

try {
    $result = $apiInstance->createReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->createReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\CreateReturnRequest**](../Model/CreateReturnRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturn**
> \Bol\Retailer\Model\ModelReturn getReturn($return_id)

Get a return by return id

Retrieve a return based on the return id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = "return_id_example"; // string | Unique identifier for a return.

try {
    $result = $apiInstance->getReturn($return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| Unique identifier for a return. |

### Return type

[**\Bol\Retailer\Model\ModelReturn**](../Model/ModelReturn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturns**
> \Bol\Retailer\Model\ReturnsResponse getReturns($page, $handled, $fulfilment_method)

Get returns

Get a paginated list of multi-item returns. Handled returns are sorted by date in descending order, while unhandled returns are sorted by date in ascending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The page to get with a page size of 50.
$handled = true; // bool | The status of the returns you wish to see, shows either handled or unhandled returns.
$fulfilment_method = "FBR"; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).

try {
    $result = $apiInstance->getReturns($page, $handled, $fulfilment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1]
 **handled** | **bool**| The status of the returns you wish to see, shows either handled or unhandled returns. | [optional]
 **fulfilment_method** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] [default to FBR]

### Return type

[**\Bol\Retailer\Model\ReturnsResponse**](../Model/ReturnsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleReturn**
> \Bol\Retailer\Model\ProcessStatus handleReturn($rma_id, $body)

Handle a return by rma id

Allows the user to handle a return. This can be to either handle an open return, or change the handlingResult of an already handled return. Please refer to the Returns documentation for further details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rma_id = 789; // int | The RMA (Return Merchandise Authorization) identifier of the return.
$body = new \Bol\Retailer\Model\ReturnRequest(); // \Bol\Retailer\Model\ReturnRequest | The handling result requested by the retailer.

try {
    $result = $apiInstance->handleReturn($rma_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->handleReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rma_id** | **int**| The RMA (Return Merchandise Authorization) identifier of the return. |
 **body** | [**\Bol\Retailer\Model\ReturnRequest**](../Model/ReturnRequest.md)| The handling result requested by the retailer. | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

