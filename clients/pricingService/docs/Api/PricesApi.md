# OpenAPI\Client\PricesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFinalPrice()**](PricesApi.md#getFinalPrice) | **GET** /api/v2/PricingService/Prices/{itemId}/FinalPrice | Gets the final price for an item |
| [**getPrice()**](PricesApi.md#getPrice) | **GET** /api/v2/PricingService/Prices/{itemId}/Price | Gets the calculated price for an item |
| [**getTotalSavingsInUsd()**](PricesApi.md#getTotalSavingsInUsd) | **GET** /api/v2/PricingService/Prices/{itemId}/TotalSavings | Gets total savings for an item |
| [**getTotalTaxesInUsd()**](PricesApi.md#getTotalTaxesInUsd) | **GET** /api/v2/PricingService/Prices/{itemId}/TotalTaxes | Gets total taxes for an item |


## `getFinalPrice()`

```php
getFinalPrice($item_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MoneyEnvelope
```

Gets the final price for an item

Gets the final price for an item after all discounts and taxes in the specified currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFinalPrice($item_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getFinalPrice: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrice()`

```php
getPrice($item_id, $price_list_id, $discounts_list_id, $quantity, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemPriceCalculationEnvelope
```

Gets the calculated price for an item

Calculates the price for an item considering price list, discount list, quantity, and currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$discounts_list_id = 'discounts_list_id_example'; // string
$quantity = 1; // float
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPrice($item_id, $price_list_id, $discounts_list_id, $quantity, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **price_list_id** | **string**|  | [optional] |
| **discounts_list_id** | **string**|  | [optional] |
| **quantity** | **float**|  | [optional] [default to 1] |
| **currency_id** | **string**|  | [optional] [default to &#39;USD.USA&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPriceCalculationEnvelope**](../Model/ItemPriceCalculationEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTotalSavingsInUsd()`

```php
getTotalSavingsInUsd($item_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MoneyEnvelope
```

Gets total savings for an item

Gets the total savings amount for an item in the specified currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTotalSavingsInUsd($item_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getTotalSavingsInUsd: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTotalTaxesInUsd()`

```php
getTotalTaxesInUsd($item_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MoneyEnvelope
```

Gets total taxes for an item

Gets the total tax amount for an item in the specified currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTotalTaxesInUsd($item_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getTotalTaxesInUsd: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
