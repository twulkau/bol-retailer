# Bol\Retailer\InsightsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferInsights**](InsightsApi.md#getofferinsights) | **GET** /retailer/insights/offer | Get offer insights
[**getPerformanceIndicators**](InsightsApi.md#getperformanceindicators) | **GET** /retailer/insights/performance/indicator | Get performance indicators
[**getProductRanks**](InsightsApi.md#getproductranks) | **GET** /retailer/insights/product-ranks | Get product ranks
[**getSalesForecast**](InsightsApi.md#getsalesforecast) | **GET** /retailer/insights/sales-forecast | Get sales forecast
[**getSearchTerms**](InsightsApi.md#getsearchterms) | **GET** /retailer/insights/search-terms | Get search terms

# **getOfferInsights**
> \Bol\Retailer\Model\OfferInsights getOfferInsights($offer_id, $period, $number_of_periods, $name)

Get offer insights

Get the product visits and the buy box percentage for an offer during a given period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.
$period = "period_example"; // string | The time unit in which the offer insights are grouped.
$number_of_periods = 56; // int | The number of periods for which the offer insights are requested back in time. The maximum available periods are 24 for MONTH, 104 for WEEK, and 730 for DAY.
$name = "name_example"; // string | The name of the requested offer insight.

try {
    $result = $apiInstance->getOfferInsights($offer_id, $period, $number_of_periods, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getOfferInsights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **period** | **string**| The time unit in which the offer insights are grouped. |
 **number_of_periods** | **int**| The number of periods for which the offer insights are requested back in time. The maximum available periods are 24 for MONTH, 104 for WEEK, and 730 for DAY. |
 **name** | **string**| The name of the requested offer insight. |

### Return type

[**\Bol\Retailer\Model\OfferInsights**](../Model/OfferInsights.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerformanceIndicators**
> \Bol\Retailer\Model\PerformanceIndicators getPerformanceIndicators($name, $year, $week)

Get performance indicators

Gets the measurements for your performance indicators per week.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The type of the performance indicator
$year = "year_example"; // string | Year number in the ISO-8601 standard.
$week = "week_example"; // string | Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week.

try {
    $result = $apiInstance->getPerformanceIndicators($name, $year, $week);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getPerformanceIndicators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The type of the performance indicator |
 **year** | **string**| Year number in the ISO-8601 standard. |
 **week** | **string**| Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week. |

### Return type

[**\Bol\Retailer\Model\PerformanceIndicators**](../Model/PerformanceIndicators.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductRanks**
> \Bol\Retailer\Model\ProductRanks getProductRanks($ean, $date, $type, $page, $accept_language)

Get product ranks

Gets a list of product ranks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = "ean_example"; // string | The EAN number associated with this product.
$date = "date_example"; // string | Filters search results to a specific date. The date must be in the past, no more than three months back, and up to yesterday.
$type = "type_example"; // string | Determines the search type, either 'SEARCH' for specific queries or 'BROWSE' for broader category searches. In order to retrieve all results, it can be sent as \"null\".
$page = 1; // int | The requested page number with a page size of 50 items.
$accept_language = "accept_language_example"; // string | The language to search for.

try {
    $result = $apiInstance->getProductRanks($ean, $date, $type, $page, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getProductRanks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |
 **date** | **string**| Filters search results to a specific date. The date must be in the past, no more than three months back, and up to yesterday. |
 **type** | **string**| Determines the search type, either &#x27;SEARCH&#x27; for specific queries or &#x27;BROWSE&#x27; for broader category searches. In order to retrieve all results, it can be sent as \&quot;null\&quot;. | [optional]
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]
 **accept_language** | **string**| The language to search for. | [optional]

### Return type

[**\Bol\Retailer\Model\ProductRanks**](../Model/ProductRanks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesForecast**
> \Bol\Retailer\Model\SalesForecastResponse getSalesForecast($offer_id, $weeks_ahead)

Get sales forecast

Get sales forecast to estimate the sales expectations on the total bol.com platform for the requested number of weeks ahead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.
$weeks_ahead = 56; // int | The number of weeks into the future, starting from today.

try {
    $result = $apiInstance->getSalesForecast($offer_id, $weeks_ahead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getSalesForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **weeks_ahead** | **int**| The number of weeks into the future, starting from today. |

### Return type

[**\Bol\Retailer\Model\SalesForecastResponse**](../Model/SalesForecastResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearchTerms**
> \Bol\Retailer\Model\SearchTerms getSearchTerms($search_term, $period, $number_of_periods, $related_search_terms)

Get search terms

Retrieves the search volume for a specified search term and period. The search volume allows you to see what bol.com customers are searching for. Based on the search volume per search term you can optimize your product content, or spot opportunities to extend your assortment, or analyzing trends for inventory management.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: OAuth2
    $config = Bol\Retailer\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = "search_term_example"; // string | The search term for which you want to request the search volume.
$period = "period_example"; // string | The time unit in which the offer insights are grouped.
$number_of_periods = 56; // int | The number of periods for which the offer insights are requested back in time.
$related_search_terms = false; // bool | Indicates whether or not you want to retrieve the related search terms.

try {
    $result = $apiInstance->getSearchTerms($search_term, $period, $number_of_periods, $related_search_terms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getSearchTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| The search term for which you want to request the search volume. |
 **period** | **string**| The time unit in which the offer insights are grouped. |
 **number_of_periods** | **int**| The number of periods for which the offer insights are requested back in time. |
 **related_search_terms** | **bool**| Indicates whether or not you want to retrieve the related search terms. | [optional] [default to false]

### Return type

[**\Bol\Retailer\Model\SearchTerms**](../Model/SearchTerms.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v10+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

