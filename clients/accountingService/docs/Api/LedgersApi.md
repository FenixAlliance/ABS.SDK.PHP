# OpenAPI\Client\LedgersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLedgerAsync()**](LedgersApi.md#createLedgerAsync) | **POST** /api/v2/AccountingService/Ledgers | Creates a new ledger |
| [**deleteLedgerAsync()**](LedgersApi.md#deleteLedgerAsync) | **DELETE** /api/v2/AccountingService/Ledgers/{ledgerId} | Deletes a ledger |
| [**getLedgerDetailsAsync()**](LedgersApi.md#getLedgerDetailsAsync) | **GET** /api/v2/AccountingService/Ledgers/{ledgerId} | Gets a ledger by ID |
| [**getLedgersAsync()**](LedgersApi.md#getLedgersAsync) | **GET** /api/v2/AccountingService/Ledgers | Retrieves all ledgers |
| [**getLedgersCountAsync()**](LedgersApi.md#getLedgersCountAsync) | **GET** /api/v2/AccountingService/Ledgers/Count | Counts ledgers |
| [**updateLedgerAsync()**](LedgersApi.md#updateLedgerAsync) | **PUT** /api/v2/AccountingService/Ledgers/{ledgerId} | Updates a ledger |


## `createLedgerAsync()`

```php
createLedgerAsync($tenant_id, $api_version, $x_api_version, $create_ledger_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new ledger

Creates a new ledger for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$create_ledger_dto = new \OpenAPI\Client\Model\CreateLedgerDto(); // \OpenAPI\Client\Model\CreateLedgerDto

try {
    $result = $apiInstance->createLedgerAsync($tenant_id, $api_version, $x_api_version, $create_ledger_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgersApi->createLedgerAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **create_ledger_dto** | [**\OpenAPI\Client\Model\CreateLedgerDto**](../Model/CreateLedgerDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLedgerAsync()`

```php
deleteLedgerAsync($tenant_id, $ledger_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a ledger

Deletes the specified ledger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$ledger_id = 'ledger_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteLedgerAsync($tenant_id, $ledger_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgersApi->deleteLedgerAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **ledger_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerDetailsAsync()`

```php
getLedgerDetailsAsync($tenant_id, $ledger_id, $api_version, $x_api_version): \OpenAPI\Client\Model\LedgerDtoEnvelope
```

Gets a ledger by ID

Retrieves the details of a ledger using its unique ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$ledger_id = 'ledger_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLedgerDetailsAsync($tenant_id, $ledger_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgersApi->getLedgerDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **ledger_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LedgerDtoEnvelope**](../Model/LedgerDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgersAsync()`

```php
getLedgersAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\LedgerDtoIReadOnlyListEnvelope
```

Retrieves all ledgers

Gets all ledgers for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLedgersAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgersApi->getLedgersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LedgerDtoIReadOnlyListEnvelope**](../Model/LedgerDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgersCountAsync()`

```php
getLedgersCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Counts ledgers

Gets the count of ledgers for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLedgersCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgersApi->getLedgersCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLedgerAsync()`

```php
updateLedgerAsync($tenant_id, $ledger_id, $api_version, $x_api_version, $update_ledger_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a ledger

Updates the specified ledger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$ledger_id = 'ledger_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$update_ledger_dto = new \OpenAPI\Client\Model\UpdateLedgerDto(); // \OpenAPI\Client\Model\UpdateLedgerDto

try {
    $result = $apiInstance->updateLedgerAsync($tenant_id, $ledger_id, $api_version, $x_api_version, $update_ledger_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgersApi->updateLedgerAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **ledger_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **update_ledger_dto** | [**\OpenAPI\Client\Model\UpdateLedgerDto**](../Model/UpdateLedgerDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
