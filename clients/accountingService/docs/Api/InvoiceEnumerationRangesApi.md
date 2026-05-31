# OpenAPI\Client\InvoiceEnumerationRangesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoiceEnumerationRangeAsync()**](InvoiceEnumerationRangesApi.md#createInvoiceEnumerationRangeAsync) | **POST** /api/v2/AccountingService/InvoiceEnumerationRanges | Create a new invoice enumeration range |
| [**deleteInvoiceEnumerationRangeAsync()**](InvoiceEnumerationRangesApi.md#deleteInvoiceEnumerationRangeAsync) | **DELETE** /api/v2/AccountingService/InvoiceEnumerationRanges/{rangeId} | Delete an invoice enumeration range |
| [**getInvoiceEnumerationRangeDetailsAsync()**](InvoiceEnumerationRangesApi.md#getInvoiceEnumerationRangeDetailsAsync) | **GET** /api/v2/AccountingService/InvoiceEnumerationRanges/{rangeId} | Get invoice enumeration range by ID |
| [**getInvoiceEnumerationRangesAsync()**](InvoiceEnumerationRangesApi.md#getInvoiceEnumerationRangesAsync) | **GET** /api/v2/AccountingService/InvoiceEnumerationRanges | Get all invoice enumeration ranges |
| [**updateInvoiceEnumerationRangeAsync()**](InvoiceEnumerationRangesApi.md#updateInvoiceEnumerationRangeAsync) | **PUT** /api/v2/AccountingService/InvoiceEnumerationRanges/{rangeId} | Update an invoice enumeration range |


## `createInvoiceEnumerationRangeAsync()`

```php
createInvoiceEnumerationRangeAsync($tenant_id, $api_version, $x_api_version, $invoice_enumeration_range_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new invoice enumeration range

Creates a new invoice enumeration range for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoiceEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_enumeration_range_create_dto = new \OpenAPI\Client\Model\InvoiceEnumerationRangeCreateDto(); // \OpenAPI\Client\Model\InvoiceEnumerationRangeCreateDto

try {
    $result = $apiInstance->createInvoiceEnumerationRangeAsync($tenant_id, $api_version, $x_api_version, $invoice_enumeration_range_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceEnumerationRangesApi->createInvoiceEnumerationRangeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_enumeration_range_create_dto** | [**\OpenAPI\Client\Model\InvoiceEnumerationRangeCreateDto**](../Model/InvoiceEnumerationRangeCreateDto.md)|  | [optional] |

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

## `deleteInvoiceEnumerationRangeAsync()`

```php
deleteInvoiceEnumerationRangeAsync($tenant_id, $range_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an invoice enumeration range

Deletes an invoice enumeration range by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoiceEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$range_id = 'range_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteInvoiceEnumerationRangeAsync($tenant_id, $range_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceEnumerationRangesApi->deleteInvoiceEnumerationRangeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **range_id** | **string**|  | |
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

## `getInvoiceEnumerationRangeDetailsAsync()`

```php
getInvoiceEnumerationRangeDetailsAsync($tenant_id, $range_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InvoiceEnumerationRangeDtoEnvelope
```

Get invoice enumeration range by ID

Retrieves the details of a specific invoice enumeration range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoiceEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$range_id = 'range_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInvoiceEnumerationRangeDetailsAsync($tenant_id, $range_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceEnumerationRangesApi->getInvoiceEnumerationRangeDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **range_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceEnumerationRangeDtoEnvelope**](../Model/InvoiceEnumerationRangeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceEnumerationRangesAsync()`

```php
getInvoiceEnumerationRangesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InvoiceEnumerationRangeDtoListEnvelope
```

Get all invoice enumeration ranges

Retrieves all invoice enumeration ranges for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoiceEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInvoiceEnumerationRangesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceEnumerationRangesApi->getInvoiceEnumerationRangesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceEnumerationRangeDtoListEnvelope**](../Model/InvoiceEnumerationRangeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoiceEnumerationRangeAsync()`

```php
updateInvoiceEnumerationRangeAsync($tenant_id, $range_id, $api_version, $x_api_version, $invoice_enumeration_range_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an invoice enumeration range

Updates an existing invoice enumeration range with the provided data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoiceEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$range_id = 'range_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_enumeration_range_update_dto = new \OpenAPI\Client\Model\InvoiceEnumerationRangeUpdateDto(); // \OpenAPI\Client\Model\InvoiceEnumerationRangeUpdateDto

try {
    $result = $apiInstance->updateInvoiceEnumerationRangeAsync($tenant_id, $range_id, $api_version, $x_api_version, $invoice_enumeration_range_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceEnumerationRangesApi->updateInvoiceEnumerationRangeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **range_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_enumeration_range_update_dto** | [**\OpenAPI\Client\Model\InvoiceEnumerationRangeUpdateDto**](../Model/InvoiceEnumerationRangeUpdateDto.md)|  | [optional] |

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
