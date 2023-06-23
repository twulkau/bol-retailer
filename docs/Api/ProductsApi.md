# Bol\Retailer\ProductsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompetingOffers**](ProductsApi.md#getCompetingOffers) | **GET** /retailer/products/{ean}/offers | Get a list of competing offers by EAN
[**getProductAssets**](ProductsApi.md#getProductAssets) | **GET** /retailer/products/{ean}/assets | Get product assets
[**getProductIds**](ProductsApi.md#getProductIds) | **GET** /retailer/products/{ean}/product-ids | Get product ids by EAN
[**getProductList**](ProductsApi.md#getProductList) | **POST** /retailer/products/list | Get product list
[**getProductListFilters**](ProductsApi.md#getProductListFilters) | **GET** /retailer/products/list-filters | Get product list filters
[**getProductPlacement**](ProductsApi.md#getProductPlacement) | **GET** /retailer/products/{ean}/placement | Get product placement
[**getProductRatings**](ProductsApi.md#getProductRatings) | **GET** /retailer/products/{ean}/ratings | Get product ratings


# **getCompetingOffers**
> \Bol\Retailer\Model\CompetingOffersResponse getCompetingOffers($ean, $page, $country_code, $best_offer_only, $condition)

Get a list of competing offers by EAN

Use this endpoint to get a list of offers available in the webshop. The list includes offers for all retailers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$page = 1; // int | The requested page number with a page size of 50 items.
$country_code = "NL"; // string | Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
$best_offer_only = false; // bool | Indicator to request the best offer within the country for the requested EAN.
$condition = "NEW"; // string | The condition of the offered product.

try {
    $result = $apiInstance->getCompetingOffers($ean, $page, $country_code, $best_offer_only, $condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCompetingOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]
 **country_code** | **string**| Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format. | [optional] [default to NL]
 **best_offer_only** | **bool**| Indicator to request the best offer within the country for the requested EAN. | [optional] [default to false]
 **condition** | **string**| The condition of the offered product. | [optional] [default to NEW]

### Return type

[**\Bol\Retailer\Model\CompetingOffersResponse**](../Model/CompetingOffersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductAssets**
> \Bol\Retailer\Model\ProductAssetsResponse getProductAssets($ean, $usage)

Get product assets

Gets the list of asset available for the product by EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$usage = "PRIMARY"; // string | Type of the asset being used for.

try {
    $result = $apiInstance->getProductAssets($ean, $usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |
 **usage** | **string**| Type of the asset being used for. | [optional] [default to PRIMARY]

### Return type

[**\Bol\Retailer\Model\ProductAssetsResponse**](../Model/ProductAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductIds**
> \Bol\Retailer\Model\ProductIdsResponse getProductIds($ean)

Get product ids by EAN

Get the bol.com specific product identifier and the related EANs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | The EAN number associated with this product.

try {
    $result = $apiInstance->getProductIds($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |

### Return type

[**\Bol\Retailer\Model\ProductIdsResponse**](../Model/ProductIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductList**
> \Bol\Retailer\Model\ProductListResponse getProductList($accept_language, $body)

Get product list

Gets the list of products based on category, search term or filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "nl"; // string | The language in which the product list will be retrieved.
$body = new \Bol\Retailer\Model\ProductListRequest(); // \Bol\Retailer\Model\ProductListRequest | 

try {
    $result = $apiInstance->getProductList($accept_language, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The language in which the product list will be retrieved. | [optional] [default to nl]
 **body** | [**\Bol\Retailer\Model\ProductListRequest**](../Model/ProductListRequest.md)|  | [optional]

### Return type

[**\Bol\Retailer\Model\ProductListResponse**](../Model/ProductListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductListFilters**
> \Bol\Retailer\Model\ProductListFiltersResponse getProductListFilters($country_code, $search_term, $category_id, $accept_language)

Get product list filters

Gets the list of possible filters for products based on category or search term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "NL"; // string | The country for which the filters will be retrieved.
$search_term = "search_term_example"; // string | The search-term to get the associated categories and filters for.
$category_id = "category_id_example"; // string | The category to get the associated filters for.
$accept_language = "nl"; // string | The language in which the product list filters will be retrieved.

try {
    $result = $apiInstance->getProductListFilters($country_code, $search_term, $category_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductListFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country for which the filters will be retrieved. | [optional] [default to NL]
 **search_term** | **string**| The search-term to get the associated categories and filters for. | [optional]
 **category_id** | **string**| The category to get the associated filters for. | [optional]
 **accept_language** | **string**| The language in which the product list filters will be retrieved. | [optional] [default to nl]

### Return type

[**\Bol\Retailer\Model\ProductListFiltersResponse**](../Model/ProductListFiltersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductPlacement**
> \Bol\Retailer\Model\ProductPlacementResponse getProductPlacement($ean, $country_code, $accept_language)

Get product placement

Gets the list of categories and the URL where the product is placed in the webshop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$country_code = "NL"; // string | The country of the product placed on the webshop.
$accept_language = "nl"; // string | The language in which the product categories and URL will be retrieved.

try {
    $result = $apiInstance->getProductPlacement($ean, $country_code, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductPlacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |
 **country_code** | **string**| The country of the product placed on the webshop. | [optional] [default to NL]
 **accept_language** | **string**| The language in which the product categories and URL will be retrieved. | [optional] [default to nl]

### Return type

[**\Bol\Retailer\Model\ProductPlacementResponse**](../Model/ProductPlacementResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductRatings**
> \Bol\Retailer\Model\ProductRatingsResponse getProductRatings($ean)

Get product ratings

Gets a list of ratings for the products associated with the provided EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | The EAN number associated with this rating.

try {
    $result = $apiInstance->getProductRatings($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductRatings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this rating. |

### Return type

[**\Bol\Retailer\Model\ProductRatingsResponse**](../Model/ProductRatingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v9+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

