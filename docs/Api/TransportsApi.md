# Bol\Retailer\TransportsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTransportInformationByTransportId**](TransportsApi.md#addtransportinformationbytransportid) | **PUT** /retailer/transports/{transport-id} | Add transport information by transport id

# **addTransportInformationByTransportId**
> \Bol\Retailer\Model\ProcessStatus addTransportInformationByTransportId($body, $transport_id)

Add transport information by transport id

Add information to an existing transport. The transport id is part of the shipment. You can retrieve the transport id through the GET shipment list request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\TransportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\ChangeTransportRequest(); // \Bol\Retailer\Model\ChangeTransportRequest | 
$transport_id = "transport_id_example"; // string | The transport id.

try {
    $result = $apiInstance->addTransportInformationByTransportId($body, $transport_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportsApi->addTransportInformationByTransportId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\ChangeTransportRequest**](../Model/ChangeTransportRequest.md)|  |
 **transport_id** | **string**| The transport id. |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v10+json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

