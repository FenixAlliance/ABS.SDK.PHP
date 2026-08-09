# OpenAPI\Client\AccountingSummaryApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCreditsSumAsync()**](AccountingSummaryApi.md#getCreditsSumAsync) | **GET** /api/v2/AccountingService/Summary/Credits/Sum | Sum tenant accounting-entry credits |
| [**getDebitsSumAsync()**](AccountingSummaryApi.md#getDebitsSumAsync) | **GET** /api/v2/AccountingService/Summary/Debits/Sum | Sum tenant accounting-entry debits |
| [**getExpensesSumAsync()**](AccountingSummaryApi.md#getExpensesSumAsync) | **GET** /api/v2/AccountingService/Summary/Expenses/Sum | Sum tenant expenses |
| [**getIncomesSumAsync()**](AccountingSummaryApi.md#getIncomesSumAsync) | **GET** /api/v2/AccountingService/Summary/Incomes/Sum | Sum tenant incomes |


## `getCreditsSumAsync()`

```php
getCreditsSumAsync($tenant_id, $api_version, $x_api_version, $accounting_entry_dto_collection_query_parameters): \OpenAPI\Client\Model\DecimalEnvelope
```

Sum tenant accounting-entry credits

Returns SUM(AccountingEntry.Credit) for the tenant, filtered by the supplied OData date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountingSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$accounting_entry_dto_collection_query_parameters = new \OpenAPI\Client\Model\AccountingEntryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AccountingEntryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCreditsSumAsync($tenant_id, $api_version, $x_api_version, $accounting_entry_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingSummaryApi->getCreditsSumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **accounting_entry_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AccountingEntryDtoCollectionQueryParameters**](../Model/AccountingEntryDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DecimalEnvelope**](../Model/DecimalEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDebitsSumAsync()`

```php
getDebitsSumAsync($tenant_id, $api_version, $x_api_version, $accounting_entry_dto_collection_query_parameters): \OpenAPI\Client\Model\DecimalEnvelope
```

Sum tenant accounting-entry debits

Returns SUM(AccountingEntry.Debit) for the tenant, filtered by the supplied OData date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountingSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$accounting_entry_dto_collection_query_parameters = new \OpenAPI\Client\Model\AccountingEntryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AccountingEntryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getDebitsSumAsync($tenant_id, $api_version, $x_api_version, $accounting_entry_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingSummaryApi->getDebitsSumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **accounting_entry_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AccountingEntryDtoCollectionQueryParameters**](../Model/AccountingEntryDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DecimalEnvelope**](../Model/DecimalEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpensesSumAsync()`

```php
getExpensesSumAsync($tenant_id, $api_version, $x_api_version, $journal_entry_dto_collection_query_parameters): \OpenAPI\Client\Model\MoneyEnvelope
```

Sum tenant expenses

Returns SUM(JournalEntry.Debit) for Debit-direction journal entries in the tenant, filtered by the supplied OData date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountingSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$journal_entry_dto_collection_query_parameters = new \OpenAPI\Client\Model\JournalEntryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JournalEntryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getExpensesSumAsync($tenant_id, $api_version, $x_api_version, $journal_entry_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingSummaryApi->getExpensesSumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **journal_entry_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JournalEntryDtoCollectionQueryParameters**](../Model/JournalEntryDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomesSumAsync()`

```php
getIncomesSumAsync($tenant_id, $api_version, $x_api_version, $journal_entry_dto_collection_query_parameters): \OpenAPI\Client\Model\MoneyEnvelope
```

Sum tenant incomes

Returns SUM(JournalEntry.Credit) for Credit-direction journal entries in the tenant, filtered by the supplied OData date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountingSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$journal_entry_dto_collection_query_parameters = new \OpenAPI\Client\Model\JournalEntryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\JournalEntryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getIncomesSumAsync($tenant_id, $api_version, $x_api_version, $journal_entry_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingSummaryApi->getIncomesSumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **journal_entry_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\JournalEntryDtoCollectionQueryParameters**](../Model/JournalEntryDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
