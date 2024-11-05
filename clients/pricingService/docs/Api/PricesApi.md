# OpenAPI\Client\PricesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2PricingServicePricesItemIdFinalPriceGet()**](PricesApi.md#apiV2PricingServicePricesItemIdFinalPriceGet) | **GET** /api/v2/PricingService/Prices/{itemId}/FinalPrice |  |
| [**apiV2PricingServicePricesItemIdPriceGet()**](PricesApi.md#apiV2PricingServicePricesItemIdPriceGet) | **GET** /api/v2/PricingService/Prices/{itemId}/Price |  |
| [**apiV2PricingServicePricesItemIdTotalSavingsGet()**](PricesApi.md#apiV2PricingServicePricesItemIdTotalSavingsGet) | **GET** /api/v2/PricingService/Prices/{itemId}/TotalSavings |  |
| [**apiV2PricingServicePricesItemIdTotalTaxesGet()**](PricesApi.md#apiV2PricingServicePricesItemIdTotalTaxesGet) | **GET** /api/v2/PricingService/Prices/{itemId}/TotalTaxes |  |


## `apiV2PricingServicePricesItemIdFinalPriceGet()`

```php
apiV2PricingServicePricesItemIdFinalPriceGet($item_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePricesItemIdFinalPriceGet($item_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV2PricingServicePricesItemIdFinalPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **currency_id** | **string**|  | [optional] [default to &#39;USD.USA&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServicePricesItemIdPriceGet()`

```php
apiV2PricingServicePricesItemIdPriceGet($item_id, $price_list_id, $discounts_list_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PriceCalculationDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$discounts_list_id = 'discounts_list_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePricesItemIdPriceGet($item_id, $price_list_id, $discounts_list_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV2PricingServicePricesItemIdPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **price_list_id** | **string**|  | [optional] |
| **discounts_list_id** | **string**|  | [optional] |
| **currency_id** | **string**|  | [optional] [default to &#39;USD.USA&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PriceCalculationDtoEnvelope**](../Model/PriceCalculationDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServicePricesItemIdTotalSavingsGet()`

```php
apiV2PricingServicePricesItemIdTotalSavingsGet($item_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePricesItemIdTotalSavingsGet($item_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV2PricingServicePricesItemIdTotalSavingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **currency_id** | **string**|  | [optional] [default to &#39;USD.USA&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PricingServicePricesItemIdTotalTaxesGet()`

```php
apiV2PricingServicePricesItemIdTotalTaxesGet($item_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2PricingServicePricesItemIdTotalTaxesGet($item_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV2PricingServicePricesItemIdTotalTaxesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **currency_id** | **string**|  | [optional] [default to &#39;USD.USA&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
