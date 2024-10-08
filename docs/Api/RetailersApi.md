# Bol\Retailer\RetailersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRetailerInformation**](RetailersApi.md#getretailerinformation) | **GET** /retailer/retailers/{retailer-id} | Get retailer information by retailer id

# **getRetailerInformation**
> \Bol\Retailer\Model\RetailerInformationResponse getRetailerInformation($retailer_id)

Get retailer information by retailer id

Gets retailer information of a single retailer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\RetailersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = "retailer_id_example"; // string | The Id of the retailer which information belongs to.

try {
    $result = $apiInstance->getRetailerInformation($retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetailersApi->getRetailerInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retailer_id** | **string**| The Id of the retailer which information belongs to. |

### Return type

[**\Bol\Retailer\Model\RetailerInformationResponse**](../Model/RetailerInformationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

