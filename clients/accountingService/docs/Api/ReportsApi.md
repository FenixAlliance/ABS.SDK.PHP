# OpenAPI\Client\ReportsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTrialBalanceAsync()**](ReportsApi.md#getTrialBalanceAsync) | **GET** /api/v2/AccountingService/Reports/TrialBalance | Trial balance for a fiscal period |


## `getTrialBalanceAsync()`

```php
getTrialBalanceAsync($tenant_id, $fiscal_period_id, $financial_book_id, $currency_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TrialBalanceDtoEnvelope
```

Trial balance for a fiscal period

Returns the per-account posted debit/credit totals for the given fiscal period (optionally scoped to a single financial book), plus grand totals and the Σdebits == Σcredits balanced flag. Amounts are normalized to the target currency (default USD) from the stored USD reporting amounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$fiscal_period_id = 'fiscal_period_id_example'; // string
$financial_book_id = 'financial_book_id_example'; // string
$currency_id = 'USD.USA'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTrialBalanceAsync($tenant_id, $fiscal_period_id, $financial_book_id, $currency_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getTrialBalanceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **fiscal_period_id** | **string**|  | |
| **financial_book_id** | **string**|  | [optional] |
| **currency_id** | **string**|  | [optional] [default to &#39;USD.USA&#39;] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrialBalanceDtoEnvelope**](../Model/TrialBalanceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
