# OpenAPI\Client\LedgerTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLedgerTypeAsync()**](LedgerTypesApi.md#createLedgerTypeAsync) | **POST** /api/v2/AccountingService/LedgerTypes | Creates a new ledger type |
| [**deleteLedgerTypeAsync()**](LedgerTypesApi.md#deleteLedgerTypeAsync) | **DELETE** /api/v2/AccountingService/LedgerTypes/{ledgerTypeId} | Deletes a ledger type |
| [**getLedgerTypeDetailsAsync()**](LedgerTypesApi.md#getLedgerTypeDetailsAsync) | **GET** /api/v2/AccountingService/LedgerTypes/{ledgerTypeId} | Gets a ledger type by ID |
| [**getLedgerTypesAsync()**](LedgerTypesApi.md#getLedgerTypesAsync) | **GET** /api/v2/AccountingService/LedgerTypes | Retrieves all ledger types |
| [**getLedgerTypesCountAsync()**](LedgerTypesApi.md#getLedgerTypesCountAsync) | **GET** /api/v2/AccountingService/LedgerTypes/Count | Counts ledger types |
| [**updateLedgerTypeAsync()**](LedgerTypesApi.md#updateLedgerTypeAsync) | **PUT** /api/v2/AccountingService/LedgerTypes/{ledgerTypeId} | Updates a ledger type |


## `createLedgerTypeAsync()`

```php
createLedgerTypeAsync($tenant_id, $api_version, $x_api_version, $ledger_type_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new ledger type

Creates a new ledger type for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$ledger_type_create_dto = new \OpenAPI\Client\Model\LedgerTypeCreateDto(); // \OpenAPI\Client\Model\LedgerTypeCreateDto

try {
    $result = $apiInstance->createLedgerTypeAsync($tenant_id, $api_version, $x_api_version, $ledger_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerTypesApi->createLedgerTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **ledger_type_create_dto** | [**\OpenAPI\Client\Model\LedgerTypeCreateDto**](../Model/LedgerTypeCreateDto.md)|  | [optional] |

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

## `deleteLedgerTypeAsync()`

```php
deleteLedgerTypeAsync($tenant_id, $ledger_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a ledger type

Deletes the specified ledger type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$ledger_type_id = 'ledger_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteLedgerTypeAsync($tenant_id, $ledger_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerTypesApi->deleteLedgerTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **ledger_type_id** | **string**|  | |
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

## `getLedgerTypeDetailsAsync()`

```php
getLedgerTypeDetailsAsync($tenant_id, $ledger_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\LedgerTypeDtoEnvelope
```

Gets a ledger type by ID

Retrieves the details of a ledger type using its unique ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$ledger_type_id = 'ledger_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLedgerTypeDetailsAsync($tenant_id, $ledger_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerTypesApi->getLedgerTypeDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **ledger_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LedgerTypeDtoEnvelope**](../Model/LedgerTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerTypesAsync()`

```php
getLedgerTypesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\LedgerTypeDtoIReadOnlyListEnvelope
```

Retrieves all ledger types

Gets all ledger types for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLedgerTypesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerTypesApi->getLedgerTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LedgerTypeDtoIReadOnlyListEnvelope**](../Model/LedgerTypeDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerTypesCountAsync()`

```php
getLedgerTypesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Counts ledger types

Gets the count of ledger types for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLedgerTypesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerTypesApi->getLedgerTypesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateLedgerTypeAsync()`

```php
updateLedgerTypeAsync($tenant_id, $ledger_type_id, $api_version, $x_api_version, $ledger_type_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a ledger type

Updates the specified ledger type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LedgerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$ledger_type_id = 'ledger_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$ledger_type_update_dto = new \OpenAPI\Client\Model\LedgerTypeUpdateDto(); // \OpenAPI\Client\Model\LedgerTypeUpdateDto

try {
    $result = $apiInstance->updateLedgerTypeAsync($tenant_id, $ledger_type_id, $api_version, $x_api_version, $ledger_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerTypesApi->updateLedgerTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **ledger_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **ledger_type_update_dto** | [**\OpenAPI\Client\Model\LedgerTypeUpdateDto**](../Model/LedgerTypeUpdateDto.md)|  | [optional] |

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
