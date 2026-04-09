# OpenAPI\Client\ReceiptsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReceiptAsync()**](ReceiptsApi.md#createReceiptAsync) | **POST** /api/v2/AccountingService/Receipts | Creates a new receipt |
| [**deleteReceiptAsync()**](ReceiptsApi.md#deleteReceiptAsync) | **DELETE** /api/v2/AccountingService/Receipts/{receiptId} | Deletes a receipt |
| [**getReceiptDetailsAsync()**](ReceiptsApi.md#getReceiptDetailsAsync) | **GET** /api/v2/AccountingService/Receipts/{receiptId} | Gets details of a receipt |
| [**getReceiptsAsync()**](ReceiptsApi.md#getReceiptsAsync) | **GET** /api/v2/AccountingService/Receipts | Retrieves tenant receipts |
| [**getReceiptsCountAsync()**](ReceiptsApi.md#getReceiptsCountAsync) | **GET** /api/v2/AccountingService/Receipts/Count | Gets count of tenant receipts |
| [**updateReceiptAsync()**](ReceiptsApi.md#updateReceiptAsync) | **PUT** /api/v2/AccountingService/Receipts/{receiptId} | Updates a receipt |


## `createReceiptAsync()`

```php
createReceiptAsync($tenant_id, $receipt_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new receipt

Adds a new receipt record under the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$receipt_create_dto = new \OpenAPI\Client\Model\ReceiptCreateDto(); // \OpenAPI\Client\Model\ReceiptCreateDto

try {
    $result = $apiInstance->createReceiptAsync($tenant_id, $receipt_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->createReceiptAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **receipt_create_dto** | [**\OpenAPI\Client\Model\ReceiptCreateDto**](../Model/ReceiptCreateDto.md)|  | |

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

## `deleteReceiptAsync()`

```php
deleteReceiptAsync($tenant_id, $receipt_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a receipt

Removes an existing receipt from the tenant’s records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$receipt_id = 'receipt_id_example'; // string

try {
    $result = $apiInstance->deleteReceiptAsync($tenant_id, $receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->deleteReceiptAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **receipt_id** | **string**|  | |

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

## `getReceiptDetailsAsync()`

```php
getReceiptDetailsAsync($tenant_id, $receipt_id): \OpenAPI\Client\Model\ReceiptDtoEnvelope
```

Gets details of a receipt

Retrieves a specific receipt by its ID for the given tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$receipt_id = 'receipt_id_example'; // string

try {
    $result = $apiInstance->getReceiptDetailsAsync($tenant_id, $receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **receipt_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ReceiptDtoEnvelope**](../Model/ReceiptDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceiptsAsync()`

```php
getReceiptsAsync($tenant_id): \OpenAPI\Client\Model\ReceiptDtoIReadOnlyListEnvelope
```

Retrieves tenant receipts

Fetches all receipts for a given tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getReceiptsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ReceiptDtoIReadOnlyListEnvelope**](../Model/ReceiptDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceiptsCountAsync()`

```php
getReceiptsCountAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets count of tenant receipts

Returns total number of receipts for the tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getReceiptsCountAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

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

## `updateReceiptAsync()`

```php
updateReceiptAsync($tenant_id, $receipt_id, $receipt_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a receipt

Modifies the data of an existing receipt for the given tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$receipt_id = 'receipt_id_example'; // string
$receipt_update_dto = new \OpenAPI\Client\Model\ReceiptUpdateDto(); // \OpenAPI\Client\Model\ReceiptUpdateDto

try {
    $result = $apiInstance->updateReceiptAsync($tenant_id, $receipt_id, $receipt_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->updateReceiptAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **receipt_id** | **string**|  | |
| **receipt_update_dto** | [**\OpenAPI\Client\Model\ReceiptUpdateDto**](../Model/ReceiptUpdateDto.md)|  | |

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
