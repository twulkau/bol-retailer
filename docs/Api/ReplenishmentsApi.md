# Bol\Retailer\ReplenishmentsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryDates**](ReplenishmentsApi.md#getDeliveryDates) | **GET** /retailer/replenishments/delivery-dates | Get delivery dates
[**getLoadCarrierLabels**](ReplenishmentsApi.md#getLoadCarrierLabels) | **GET** /retailer/replenishments/{replenishment-id}/load-carrier-labels | Get load carrier labels
[**getPickList**](ReplenishmentsApi.md#getPickList) | **GET** /retailer/replenishments/{replenishment-id}/pick-list | Get pick list
[**getProductDestinations**](ReplenishmentsApi.md#getProductDestinations) | **GET** /retailer/replenishments/product-destinations/{product-destinations-id} | Get product destinations by product destinations id
[**getReplenishment**](ReplenishmentsApi.md#getReplenishment) | **GET** /retailer/replenishments/{replenishment-id} | Get a replenishment by replenishment id
[**getReplenishments**](ReplenishmentsApi.md#getReplenishments) | **GET** /retailer/replenishments | Get replenishments
[**postPickupTimeSlots**](ReplenishmentsApi.md#postPickupTimeSlots) | **POST** /retailer/replenishments/pickup-time-slots | Post pickup time slots
[**postProductLabels**](ReplenishmentsApi.md#postProductLabels) | **POST** /retailer/replenishments/product-labels | Post product labels
[**postReplenishment**](ReplenishmentsApi.md#postReplenishment) | **POST** /retailer/replenishments | Create a replenishment
[**postRequestProductDestinations**](ReplenishmentsApi.md#postRequestProductDestinations) | **POST** /retailer/replenishments/product-destinations | Request product destinations
[**putReplenishment**](ReplenishmentsApi.md#putReplenishment) | **PUT** /retailer/replenishments/{replenishment-id} | Update a replenishment by replenishment id


# **getDeliveryDates**
> \Bol\Retailer\Model\DeliveryDatesResponse getDeliveryDates()

Get delivery dates

Retrieve a list of available delivery dates for a replenishment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDeliveryDates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getDeliveryDates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bol\Retailer\Model\DeliveryDatesResponse**](../Model/DeliveryDatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoadCarrierLabels**
> string[] getLoadCarrierLabels($replenishment_id, $label_type)

Get load carrier labels

Retrieve the load carrier labels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = "replenishment_id_example"; // string | The unique identifier of the replenishment.
$label_type = "WAREHOUSE"; // string | The type of label which you want to print.

try {
    $result = $apiInstance->getLoadCarrierLabels($replenishment_id, $label_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getLoadCarrierLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |
 **label_type** | **string**| The type of label which you want to print. | [optional] [default to WAREHOUSE]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPickList**
> string[] getPickList($replenishment_id)

Get pick list

Retrieve the pick list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = "replenishment_id_example"; // string | The unique identifier of the replenishment.

try {
    $result = $apiInstance->getPickList($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getPickList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductDestinations**
> \Bol\Retailer\Model\ProductDestinationsResponse getProductDestinations($product_destinations_id)

Get product destinations by product destinations id

Gets the product destinations for one or more products by product destinations id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_destinations_id = "product_destinations_id_example"; // string | The identifier of the product destinations requested.

try {
    $result = $apiInstance->getProductDestinations($product_destinations_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getProductDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_destinations_id** | **string**| The identifier of the product destinations requested. |

### Return type

[**\Bol\Retailer\Model\ProductDestinationsResponse**](../Model/ProductDestinationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishment**
> \Bol\Retailer\Model\ReplenishmentResponse getReplenishment($replenishment_id)

Get a replenishment by replenishment id

Gets a replenishment by replenishment id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = "replenishment_id_example"; // string | The unique identifier of the replenishment.

try {
    $result = $apiInstance->getReplenishment($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getReplenishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |

### Return type

[**\Bol\Retailer\Model\ReplenishmentResponse**](../Model/ReplenishmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishments**
> \Bol\Retailer\Model\ReplenishmentsResponse getReplenishments($reference, $ean, $start_date, $end_date, $state, $page)

Get replenishments

Gets a list of replenishments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = "reference_example"; // string | Custom user defined reference to identify the replenishment.
$ean = "ean_example"; // string | The EAN number associated with this product.
$start_date = "start_date_example"; // string | The creation start date to find the replenishment. In ISO 8601 format.
$end_date = "end_date_example"; // string | The end date of the range to find the replenishment. In ISO 8601 format.
$state = array("state_example"); // string[] | The current state(s) of the replenishment.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getReplenishments($reference, $ean, $start_date, $end_date, $state, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getReplenishments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Custom user defined reference to identify the replenishment. | [optional]
 **ean** | **string**| The EAN number associated with this product. | [optional]
 **start_date** | **string**| The creation start date to find the replenishment. In ISO 8601 format. | [optional]
 **end_date** | **string**| The end date of the range to find the replenishment. In ISO 8601 format. | [optional]
 **state** | [**string[]**](../Model/string.md)| The current state(s) of the replenishment. | [optional]
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]

### Return type

[**\Bol\Retailer\Model\ReplenishmentsResponse**](../Model/ReplenishmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPickupTimeSlots**
> \Bol\Retailer\Model\PickupTimeSlotsResponse postPickupTimeSlots($body)

Post pickup time slots

Retrieve pickup time slots.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\PickupTimeSlotsRequest(); // \Bol\Retailer\Model\PickupTimeSlotsRequest | 

try {
    $result = $apiInstance->postPickupTimeSlots($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postPickupTimeSlots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\PickupTimeSlotsRequest**](../Model/PickupTimeSlotsRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\PickupTimeSlotsResponse**](../Model/PickupTimeSlotsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductLabels**
> string[] postProductLabels($body)

Post product labels

Retrieve product labels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\ProductLabelsRequest(); // \Bol\Retailer\Model\ProductLabelsRequest | 

try {
    $result = $apiInstance->postProductLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postProductLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\ProductLabelsRequest**](../Model/ProductLabelsRequest.md)|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReplenishment**
> \Bol\Retailer\Model\ProcessStatus postReplenishment($body)

Create a replenishment

Creates a replenishment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\CreateReplenishmentRequest(); // \Bol\Retailer\Model\CreateReplenishmentRequest | 

try {
    $result = $apiInstance->postReplenishment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postReplenishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\CreateReplenishmentRequest**](../Model/CreateReplenishmentRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRequestProductDestinations**
> \Bol\Retailer\Model\ProcessStatus postRequestProductDestinations($body)

Request product destinations

Requests a list of product destinations by EANs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\RequestProductDestinationsRequest(); // \Bol\Retailer\Model\RequestProductDestinationsRequest | 

try {
    $result = $apiInstance->postRequestProductDestinations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postRequestProductDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\RequestProductDestinationsRequest**](../Model/RequestProductDestinationsRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putReplenishment**
> \Bol\Retailer\Model\ProcessStatus putReplenishment($replenishment_id, $body)

Update a replenishment by replenishment id

Updates a replenishment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = "replenishment_id_example"; // string | The unique identifier of the replenishment.
$body = new \Bol\Retailer\Model\UpdateReplenishmentRequest(); // \Bol\Retailer\Model\UpdateReplenishmentRequest | 

try {
    $result = $apiInstance->putReplenishment($replenishment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->putReplenishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |
 **body** | [**\Bol\Retailer\Model\UpdateReplenishmentRequest**](../Model/UpdateReplenishmentRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

