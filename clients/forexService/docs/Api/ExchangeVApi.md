# OpenAPI\Client\ExchangeVApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangeAmountHistoricalV3Async()**](ExchangeVApi.md#exchangeAmountHistoricalV3Async) | **GET** /api/v3/ForexService/Exchange/History | Exchange currency at historical rates (v3) |
| [**exchangeAmountV3Async()**](ExchangeVApi.md#exchangeAmountV3Async) | **GET** /api/v3/ForexService/Exchange/Latest | Exchange currency at latest rates (v3) |


## `exchangeAmountHistoricalV3Async()`

```php
exchangeAmountHistoricalV3Async($amount, $source_currency_id, $target_currency_id, $date): \OpenAPI\Client\Model\ExchangeRateEnvelope
```

Exchange currency at historical rates (v3)

Exchange an amount of money from one currency to another using exchange rates from a specific historical date. Returns the full ExchangeRate details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExchangeVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amount = 3.4; // float
$source_currency_id = 'source_currency_id_example'; // string
$target_currency_id = 'target_currency_id_example'; // string
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->exchangeAmountHistoricalV3Async($amount, $source_currency_id, $target_currency_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeVApi->exchangeAmountHistoricalV3Async: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amount** | **float**|  | |
| **source_currency_id** | **string**|  | |
| **target_currency_id** | **string**|  | |
| **date** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\ExchangeRateEnvelope**](../Model/ExchangeRateEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exchangeAmountV3Async()`

```php
exchangeAmountV3Async($amount, $source_currency_id, $target_currency_id): \OpenAPI\Client\Model\ExchangeRateEnvelope
```

Exchange currency at latest rates (v3)

Exchange an amount of money from one currency to another using the latest available exchange rates. Returns the full ExchangeRate details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExchangeVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amount = 3.4; // float
$source_currency_id = 'source_currency_id_example'; // string
$target_currency_id = 'target_currency_id_example'; // string

try {
    $result = $apiInstance->exchangeAmountV3Async($amount, $source_currency_id, $target_currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeVApi->exchangeAmountV3Async: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amount** | **float**|  | |
| **source_currency_id** | **string**|  | |
| **target_currency_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExchangeRateEnvelope**](../Model/ExchangeRateEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
