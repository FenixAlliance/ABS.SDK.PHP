# OpenAPI\Client\RatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHistoricalCurrencyRateAsync()**](RatesApi.md#getHistoricalCurrencyRateAsync) | **GET** /api/v2/ForexService/Rates/History/{currencyId} | Get historical rate for a currency |
| [**getHistoricalCurrencyRatesAsync()**](RatesApi.md#getHistoricalCurrencyRatesAsync) | **GET** /api/v2/ForexService/Rates/History | Get historical currency rates |
| [**getLatestCurrencyRateAsync()**](RatesApi.md#getLatestCurrencyRateAsync) | **GET** /api/v2/ForexService/Rates/Latest/{currencyId} | Get latest rate for a currency |
| [**getLatestCurrencyRatesModelAsync()**](RatesApi.md#getLatestCurrencyRatesModelAsync) | **GET** /api/v2/ForexService/Rates/Latest | Get latest currency rates |


## `getHistoricalCurrencyRateAsync()`

```php
getHistoricalCurrencyRateAsync($currency_id, $date, $api_version, $x_api_version): \OpenAPI\Client\Model\ExchangeRateEnvelope
```

Get historical rate for a currency

Retrieves the exchange rate for a specific currency as of a specific historical date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getHistoricalCurrencyRateAsync($currency_id, $date, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getHistoricalCurrencyRateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**|  | |
| **date** | **\DateTime**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `getHistoricalCurrencyRatesAsync()`

```php
getHistoricalCurrencyRatesAsync($date, $api_version, $x_api_version): \OpenAPI\Client\Model\ForexRatesDtoEnvelope
```

Get historical currency rates

Retrieves exchange rates for all supported currencies as of a specific historical date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getHistoricalCurrencyRatesAsync($date, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getHistoricalCurrencyRatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **\DateTime**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ForexRatesDtoEnvelope**](../Model/ForexRatesDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLatestCurrencyRateAsync()`

```php
getLatestCurrencyRateAsync($currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ExchangeRateEnvelope
```

Get latest rate for a currency

Retrieves the latest exchange rate for a specific currency by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLatestCurrencyRateAsync($currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getLatestCurrencyRateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `getLatestCurrencyRatesModelAsync()`

```php
getLatestCurrencyRatesModelAsync($api_version, $x_api_version): \OpenAPI\Client\Model\ForexRatesDtoEnvelope
```

Get latest currency rates

Retrieves the latest exchange rates for all supported currencies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLatestCurrencyRatesModelAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getLatestCurrencyRatesModelAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ForexRatesDtoEnvelope**](../Model/ForexRatesDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
