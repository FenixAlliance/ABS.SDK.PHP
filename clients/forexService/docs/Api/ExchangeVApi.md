# OpenAPI\Client\ExchangeVApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV3ForexServiceExchangeHistoryGet()**](ExchangeVApi.md#apiV3ForexServiceExchangeHistoryGet) | **GET** /api/v3/ForexService/Exchange/History |  |
| [**apiV3ForexServiceExchangeLatestGet()**](ExchangeVApi.md#apiV3ForexServiceExchangeLatestGet) | **GET** /api/v3/ForexService/Exchange/Latest |  |


## `apiV3ForexServiceExchangeHistoryGet()`

```php
apiV3ForexServiceExchangeHistoryGet($amount, $source_currency_id, $target_currency_id, $date): \OpenAPI\Client\Model\ExchangeRateEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExchangeVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amount = 3.4; // float
$source_currency_id = 'source_currency_id_example'; // string
$target_currency_id = 'target_currency_id_example'; // string
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV3ForexServiceExchangeHistoryGet($amount, $source_currency_id, $target_currency_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeVApi->apiV3ForexServiceExchangeHistoryGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3ForexServiceExchangeLatestGet()`

```php
apiV3ForexServiceExchangeLatestGet($amount, $source_currency_id, $target_currency_id): \OpenAPI\Client\Model\ExchangeRateEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExchangeVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amount = 3.4; // float
$source_currency_id = 'source_currency_id_example'; // string
$target_currency_id = 'target_currency_id_example'; // string

try {
    $result = $apiInstance->apiV3ForexServiceExchangeLatestGet($amount, $source_currency_id, $target_currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeVApi->apiV3ForexServiceExchangeLatestGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
