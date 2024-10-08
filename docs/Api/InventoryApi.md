# Bol\Retailer\InventoryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventory**](InventoryApi.md#getinventory) | **GET** /retailer/inventory | Get LVB/FBB inventory

# **getInventory**
> \Bol\Retailer\Model\InventoryResponse getInventory($page, $quantity, $stock, $state, $query)

Get LVB/FBB inventory

The inventory endpoint is a specific LVB/FBB endpoint. It provides a paginated list containing your fulfilment by bol.com inventory. This endpoint does not provide information about your own stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The requested page number with a page size of 50 items.
$quantity = array("quantity_example"); // string[] | Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default.
$stock = "stock_example"; // string | Filter inventory by stock level.
$state = "state_example"; // string | Filter inventory by stock type.
$query = "query_example"; // string | Filter inventory by EAN or product title.

try {
    $result = $apiInstance->getInventory($page, $quantity, $stock, $state, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]
 **quantity** | [**string[]**](../Model/string.md)| Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. | [optional]
 **stock** | **string**| Filter inventory by stock level. | [optional]
 **state** | **string**| Filter inventory by stock type. | [optional]
 **query** | **string**| Filter inventory by EAN or product title. | [optional]

### Return type

[**\Bol\Retailer\Model\InventoryResponse**](../Model/InventoryResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

