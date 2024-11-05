# OpenAPI\Client\ExchangeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ForexServiceExchangeHistoryGet()**](ExchangeApi.md#apiV2ForexServiceExchangeHistoryGet) | **GET** /api/v2/ForexService/Exchange/History |  |
| [**apiV2ForexServiceExchangeLatestGet()**](ExchangeApi.md#apiV2ForexServiceExchangeLatestGet) | **GET** /api/v2/ForexService/Exchange/Latest |  |


## `apiV2ForexServiceExchangeHistoryGet()`

```php
apiV2ForexServiceExchangeHistoryGet($amount, $source_currency_id, $target_currency_id, $date): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExchangeApi(
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
    $result = $apiInstance->apiV2ForexServiceExchangeHistoryGet($amount, $source_currency_id, $target_currency_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->apiV2ForexServiceExchangeHistoryGet: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ForexServiceExchangeLatestGet()`

```php
apiV2ForexServiceExchangeLatestGet($amount, $source_currency_id, $target_currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amount = 3.4; // float
$source_currency_id = 'source_currency_id_example'; // string
$target_currency_id = 'target_currency_id_example'; // string

try {
    $result = $apiInstance->apiV2ForexServiceExchangeLatestGet($amount, $source_currency_id, $target_currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->apiV2ForexServiceExchangeLatestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amount** | **float**|  | |
| **source_currency_id** | **string**|  | |
| **target_currency_id** | **string**|  | |

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
