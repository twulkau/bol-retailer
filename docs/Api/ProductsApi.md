# Bol\Retailer\ProductsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompetingOffers**](ProductsApi.md#getcompetingoffers) | **GET** /retailer/products/{ean}/offers | Get a list of competing offers by EAN
[**getPriceStarBoundaries**](ProductsApi.md#getpricestarboundaries) | **GET** /retailer/products/{ean}/price-star-boundaries | Get price star boundaries by EAN
[**getProductAssets**](ProductsApi.md#getproductassets) | **GET** /retailer/products/{ean}/assets | Get product assets
[**getProductCategories**](ProductsApi.md#getproductcategories) | **GET** /retailer/products/categories | Get product categories
[**getProductIds**](ProductsApi.md#getproductids) | **GET** /retailer/products/{ean}/product-ids | Get product ids by EAN
[**getProductList**](ProductsApi.md#getproductlist) | **POST** /retailer/products/list | Get product list
[**getProductListFilters**](ProductsApi.md#getproductlistfilters) | **GET** /retailer/products/list-filters | Get product list filters
[**getProductPlacement**](ProductsApi.md#getproductplacement) | **GET** /retailer/products/{ean}/placement | Get product placement
[**getProductRatings**](ProductsApi.md#getproductratings) | **GET** /retailer/products/{ean}/ratings | Get product ratings

# **getCompetingOffers**
> \Bol\Retailer\Model\CompetingOffersResponse getCompetingOffers($ean, $page, $country_code, $best_offer_only, $condition)

Get a list of competing offers by EAN

Use this endpoint to get a list of offers available in the webshop. The list includes offers for all retailers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$page = 1; // int | The requested page number with a page size of 50 items.
$country_code = "country_code_example"; // string | Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
$best_offer_only = false; // bool | Indicator to request the best offer within the country for the requested EAN.
$condition = "condition_example"; // string | The condition of the offered product.

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
 **country_code** | **string**| Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format. | [optional]
 **best_offer_only** | **bool**| Indicator to request the best offer within the country for the requested EAN. | [optional] [default to false]
 **condition** | **string**| The condition of the offered product. | [optional]

### Return type

[**\Bol\Retailer\Model\CompetingOffersResponse**](../Model/CompetingOffersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceStarBoundaries**
> \Bol\Retailer\Model\PriceStarBoundaries getPriceStarBoundaries($ean)

Get price star boundaries by EAN

Gets a list of all price star boundaries for a specific EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = "ean_example"; // string | The EAN number associated with this product.

try {
    $result = $apiInstance->getPriceStarBoundaries($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPriceStarBoundaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |

### Return type

[**\Bol\Retailer\Model\PriceStarBoundaries**](../Model/PriceStarBoundaries.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductAssets**
> \Bol\Retailer\Model\ProductAssetsResponse getProductAssets($ean, $usage)

Get product assets

Gets the list of asset available for the product by EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$usage = "usage_example"; // string | Type of the asset being used for.

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
 **usage** | **string**| Type of the asset being used for. | [optional]

### Return type

[**\Bol\Retailer\Model\ProductAssetsResponse**](../Model/ProductAssetsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCategories**
> \Bol\Retailer\Model\ProductCategoriesResponse getProductCategories($accept_language)

Get product categories

Get a list of available categories and its subcategories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "nl"; // string | The language in which the product categories will be retrieved.

try {
    $result = $apiInstance->getProductCategories($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The language in which the product categories will be retrieved. | [optional] [default to nl]

### Return type

[**\Bol\Retailer\Model\ProductCategoriesResponse**](../Model/ProductCategoriesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductIds**
> \Bol\Retailer\Model\ProductIdsResponse getProductIds($ean)

Get product ids by EAN

Get the bol.com specific product identifier and the related EANs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductList**
> \Bol\Retailer\Model\ProductListResponse getProductList($body, $accept_language)

Get product list

Gets the list of products based on category, search term or filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bol\Retailer\Model\ProductListRequest(); // \Bol\Retailer\Model\ProductListRequest | 
$accept_language = "accept_language_example"; // string | The language in which the product list will be retrieved.

try {
    $result = $apiInstance->getProductList($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bol\Retailer\Model\ProductListRequest**](../Model/ProductListRequest.md)|  |
 **accept_language** | **string**| The language in which the product list will be retrieved. | [optional]

### Return type

[**\Bol\Retailer\Model\ProductListResponse**](../Model/ProductListResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductListFilters**
> \Bol\Retailer\Model\ProductListFiltersResponse getProductListFilters($product_list_filters_request, $country_code, $search_term, $category_id, $accept_language)

Get product list filters

Gets the list of possible filters for products based on category or search term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_list_filters_request = new \Bol\Retailer\Model\ProductListFiltersRequest(); // \Bol\Retailer\Model\ProductListFiltersRequest | 
$country_code = "country_code_example"; // string | The country for which the filters will be retrieved.
$search_term = "search_term_example"; // string | The search-term to get the associated categories and filters for.
$category_id = "category_id_example"; // string | The category to get the associated filters for.
$accept_language = "accept_language_example"; // string | The language in which the product list filters will be retrieved.

try {
    $result = $apiInstance->getProductListFilters($product_list_filters_request, $country_code, $search_term, $category_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductListFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_list_filters_request** | [**\Bol\Retailer\Model\ProductListFiltersRequest**](../Model/.md)|  |
 **country_code** | **string**| The country for which the filters will be retrieved. | [optional]
 **search_term** | **string**| The search-term to get the associated categories and filters for. | [optional]
 **category_id** | **string**| The category to get the associated filters for. | [optional]
 **accept_language** | **string**| The language in which the product list filters will be retrieved. | [optional]

### Return type

[**\Bol\Retailer\Model\ProductListFiltersResponse**](../Model/ProductListFiltersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductPlacement**
> \Bol\Retailer\Model\ProductPlacementResponse getProductPlacement($ean, $country_code, $accept_language)

Get product placement

Gets the list of categories and the URL where the product is placed in the webshop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$country_code = "country_code_example"; // string | The country of the product placed on the webshop.
$accept_language = "accept_language_example"; // string | The language in which the product categories and URL will be retrieved.

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
 **country_code** | **string**| The country of the product placed on the webshop. | [optional]
 **accept_language** | **string**| The language in which the product categories and URL will be retrieved. | [optional]

### Return type

[**\Bol\Retailer\Model\ProductPlacementResponse**](../Model/ProductPlacementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductRatings**
> \Bol\Retailer\Model\ProductRatingsResponse getProductRatings($ean)

Get product ratings

Gets a list of ratings for the products associated with the provided EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

