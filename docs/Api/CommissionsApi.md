# Bol\Retailer\CommissionsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommission**](CommissionsApi.md#getCommission) | **GET** /retailer/commission/{ean} | Get all commissions and reductions by EAN per single EAN
[**getCommissions**](CommissionsApi.md#getCommissions) | **POST** /retailer/commission | Get all commissions and reductions by EAN in bulk


# **getCommission**
> \Bol\Retailer\Model\Commission getCommission($ean, $unit_price, $condition)

Get all commissions and reductions by EAN per single EAN

Commissions can be filtered by condition, which defaults to NEW. We will calculate the commission amount from the EAN and price.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$unit_price = 8.14; // float | The price of the product with a period as a decimal separator. The price should always have two decimals precision.
$condition = "NEW"; // string | The condition of the offer.

try {
    $result = $apiInstance->getCommission($ean, $unit_price, $condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |
 **unit_price** | **float**| The price of the product with a period as a decimal separator. The price should always have two decimals precision. |
 **condition** | **string**| The condition of the offer. | [optional] [default to NEW]

### Return type

[**\Bol\Retailer\Model\Commission**](../Model/Commission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommissions**
> \Bol\Retailer\Model\BulkCommissionResponse getCommissions($body)

Get all commissions and reductions by EAN in bulk

Gets all commissions and possible reductions by EAN, price, and optionally condition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Bol\Retailer\Model\BulkCommissionRequest(); // \Bol\Retailer\Model\BulkCommissionRequest | 

try {
    $result = $apiInstance->getCommissions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\BulkCommissionRequest**](../Model/BulkCommissionRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\BulkCommissionResponse**](../Model/BulkCommissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v9+json
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

