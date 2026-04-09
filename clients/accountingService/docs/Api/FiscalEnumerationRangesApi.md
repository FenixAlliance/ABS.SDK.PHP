# OpenAPI\Client\FiscalEnumerationRangesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoiceEnumerationRange()**](FiscalEnumerationRangesApi.md#createInvoiceEnumerationRange) | **POST** /api/v2/AccountingService/Fiscals/Authorities/EnumerationRanges | Create an invoice enumeration range |
| [**deleteInvoiceEnumerationRange()**](FiscalEnumerationRangesApi.md#deleteInvoiceEnumerationRange) | **DELETE** /api/v2/AccountingService/Fiscals/Authorities/EnumerationRanges/{enumerationRangeId} | Delete an invoice enumeration range |
| [**getInvoiceEnumerationRange()**](FiscalEnumerationRangesApi.md#getInvoiceEnumerationRange) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/EnumerationRanges/{enumerationRangeId} | Get invoice enumeration range by ID |
| [**getInvoiceEnumerationRanges()**](FiscalEnumerationRangesApi.md#getInvoiceEnumerationRanges) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{authorityId}/EnumerationRanges | Get invoice enumeration ranges for an authority |
| [**getInvoiceEnumerationRangesCount()**](FiscalEnumerationRangesApi.md#getInvoiceEnumerationRangesCount) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/EnumerationRanges/Count | Get invoice enumeration ranges count |
| [**updateInvoiceEnumerationRange()**](FiscalEnumerationRangesApi.md#updateInvoiceEnumerationRange) | **PUT** /api/v2/AccountingService/Fiscals/Authorities/EnumerationRanges/{enumerationRangeId} | Update an invoice enumeration range |


## `createInvoiceEnumerationRange()`

```php
createInvoiceEnumerationRange($tenant_id, $api_version, $x_api_version, $invoice_enumeration_range_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an invoice enumeration range

Creates a new invoice enumeration range for a fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_enumeration_range_create_dto = new \OpenAPI\Client\Model\InvoiceEnumerationRangeCreateDto(); // \OpenAPI\Client\Model\InvoiceEnumerationRangeCreateDto

try {
    $result = $apiInstance->createInvoiceEnumerationRange($tenant_id, $api_version, $x_api_version, $invoice_enumeration_range_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalEnumerationRangesApi->createInvoiceEnumerationRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
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

## `deleteInvoiceEnumerationRange()`

```php
deleteInvoiceEnumerationRange($tenant_id, $enumeration_range_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an invoice enumeration range

Deletes an invoice enumeration range identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$enumeration_range_id = 'enumeration_range_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteInvoiceEnumerationRange($tenant_id, $enumeration_range_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalEnumerationRangesApi->deleteInvoiceEnumerationRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **enumeration_range_id** | **string**|  | |
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

## `getInvoiceEnumerationRange()`

```php
getInvoiceEnumerationRange($tenant_id, $fiscal_authority_id, $enumeration_range_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InvoiceEnumerationRangeDtoEnvelope
```

Get invoice enumeration range by ID

Retrieves a specific invoice enumeration range by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$enumeration_range_id = 'enumeration_range_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInvoiceEnumerationRange($tenant_id, $fiscal_authority_id, $enumeration_range_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalEnumerationRangesApi->getInvoiceEnumerationRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **enumeration_range_id** | **string**|  | |
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

## `getInvoiceEnumerationRanges()`

```php
getInvoiceEnumerationRanges($fiscal_authority_id, $authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InvoiceEnumerationRangeDtoListEnvelope
```

Get invoice enumeration ranges for an authority

Retrieves all invoice enumeration ranges for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInvoiceEnumerationRanges($fiscal_authority_id, $authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalEnumerationRangesApi->getInvoiceEnumerationRanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fiscal_authority_id** | **string**|  | |
| **authority_id** | **string**|  | |
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

## `getInvoiceEnumerationRangesCount()`

```php
getInvoiceEnumerationRangesCount($fiscal_authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get invoice enumeration ranges count

Returns the total count of invoice enumeration ranges for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInvoiceEnumerationRangesCount($fiscal_authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalEnumerationRangesApi->getInvoiceEnumerationRangesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fiscal_authority_id** | **string**|  | |
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

## `updateInvoiceEnumerationRange()`

```php
updateInvoiceEnumerationRange($tenant_id, $enumeration_range_id, $api_version, $x_api_version, $invoice_enumeration_range_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an invoice enumeration range

Updates an existing invoice enumeration range identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalEnumerationRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$enumeration_range_id = 'enumeration_range_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_enumeration_range_update_dto = new \OpenAPI\Client\Model\InvoiceEnumerationRangeUpdateDto(); // \OpenAPI\Client\Model\InvoiceEnumerationRangeUpdateDto

try {
    $result = $apiInstance->updateInvoiceEnumerationRange($tenant_id, $enumeration_range_id, $api_version, $x_api_version, $invoice_enumeration_range_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalEnumerationRangesApi->updateInvoiceEnumerationRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **enumeration_range_id** | **string**|  | |
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
