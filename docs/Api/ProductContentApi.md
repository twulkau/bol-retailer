# Bol\Retailer\ProductContentApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogProduct**](ProductContentApi.md#getcatalogproduct) | **GET** /retailer/content/catalog-products/{ean} | Get catalog product details by EAN
[**getChunkRecommendations**](ProductContentApi.md#getchunkrecommendations) | **POST** /retailer/content/chunk-recommendations | Get chunk recommendations
[**getUploadReport**](ProductContentApi.md#getuploadreport) | **GET** /retailer/content/upload-report/{upload-id} | Get an upload report by upload id
[**postProductContent**](ProductContentApi.md#postproductcontent) | **POST** /retailer/content/products | Create content for a product

# **getCatalogProduct**
> \Bol\Retailer\Model\CatalogProduct getCatalogProduct($ean, $accept_language)

Get catalog product details by EAN

Gets the details of a catalog product by means of its EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$accept_language = "accept_language_example"; // string | The language in which the catalog product details will be retrieved.

try {
    $result = $apiInstance->getCatalogProduct($ean, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |
 **accept_language** | **string**| The language in which the catalog product details will be retrieved. | [optional]

### Return type

[**\Bol\Retailer\Model\CatalogProduct**](../Model/CatalogProduct.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChunkRecommendations**
> \Bol\Retailer\Model\ChunkRecommendationsResponse getChunkRecommendations($body)

Get chunk recommendations

Gets a selected number of recommendations for a product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\ChunkRecommendationsRequest(); // \Bol\Retailer\Model\ChunkRecommendationsRequest | 

try {
    $result = $apiInstance->getChunkRecommendations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getChunkRecommendations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\ChunkRecommendationsRequest**](../Model/ChunkRecommendationsRequest.md)|  |

### Return type

[**\Bol\Retailer\Model\ChunkRecommendationsResponse**](../Model/ChunkRecommendationsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v10+json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadReport**
> \Bol\Retailer\Model\UploadReportResponse getUploadReport($upload_id)

Get an upload report by upload id

Gets the upload report of the product content submitted by upload id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = "upload_id_example"; // string | The identifier of the upload report.

try {
    $result = $apiInstance->getUploadReport($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getUploadReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| The identifier of the upload report. |

### Return type

[**\Bol\Retailer\Model\UploadReportResponse**](../Model/UploadReportResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductContent**
> \Bol\Retailer\Model\ProcessStatus postProductContent($body)

Create content for a product

Create content for an existing product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\CreateProductContentSingleRequest(); // \Bol\Retailer\Model\CreateProductContentSingleRequest | 

try {
    $result = $apiInstance->postProductContent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->postProductContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\CreateProductContentSingleRequest**](../Model/CreateProductContentSingleRequest.md)|  |

### Return type

[**\Bol\Retailer\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v10+json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

