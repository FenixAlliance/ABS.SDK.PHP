# OpenAPI\Client\DeliveryNotesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeliveryNoteAsync()**](DeliveryNotesApi.md#createDeliveryNoteAsync) | **POST** /api/v2/LogisticsService/DeliveryNotes | Create a delivery note |
| [**deleteDeliveryNoteAsync()**](DeliveryNotesApi.md#deleteDeliveryNoteAsync) | **DELETE** /api/v2/LogisticsService/DeliveryNotes/{deliveryNoteId} | Delete a delivery note |
| [**getDeliveryNoteByIdAsync()**](DeliveryNotesApi.md#getDeliveryNoteByIdAsync) | **GET** /api/v2/LogisticsService/DeliveryNotes/{deliveryNoteId} | Get delivery note by ID |
| [**getDeliveryNotesAsync()**](DeliveryNotesApi.md#getDeliveryNotesAsync) | **GET** /api/v2/LogisticsService/DeliveryNotes | Get all delivery notes |
| [**getDeliveryNotesCountAsync()**](DeliveryNotesApi.md#getDeliveryNotesCountAsync) | **GET** /api/v2/LogisticsService/DeliveryNotes/Count | Get delivery notes count |
| [**updateDeliveryNoteAsync()**](DeliveryNotesApi.md#updateDeliveryNoteAsync) | **PUT** /api/v2/LogisticsService/DeliveryNotes/{deliveryNoteId} | Update a delivery note |


## `createDeliveryNoteAsync()`

```php
createDeliveryNoteAsync($tenant_id, $api_version, $x_api_version, $delivery_note_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a delivery note

Creates a new delivery note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$delivery_note_create_dto = new \OpenAPI\Client\Model\DeliveryNoteCreateDto(); // \OpenAPI\Client\Model\DeliveryNoteCreateDto

try {
    $result = $apiInstance->createDeliveryNoteAsync($tenant_id, $api_version, $x_api_version, $delivery_note_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->createDeliveryNoteAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **delivery_note_create_dto** | [**\OpenAPI\Client\Model\DeliveryNoteCreateDto**](../Model/DeliveryNoteCreateDto.md)|  | [optional] |

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

## `deleteDeliveryNoteAsync()`

```php
deleteDeliveryNoteAsync($tenant_id, $delivery_note_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a delivery note

Deletes a delivery note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$delivery_note_id = 'delivery_note_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteDeliveryNoteAsync($tenant_id, $delivery_note_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->deleteDeliveryNoteAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **delivery_note_id** | **string**|  | |
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

## `getDeliveryNoteByIdAsync()`

```php
getDeliveryNoteByIdAsync($tenant_id, $delivery_note_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DeliveryNoteDtoEnvelope
```

Get delivery note by ID

Retrieves a specific delivery note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$delivery_note_id = 'delivery_note_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getDeliveryNoteByIdAsync($tenant_id, $delivery_note_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->getDeliveryNoteByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **delivery_note_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeliveryNoteDtoEnvelope**](../Model/DeliveryNoteDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryNotesAsync()`

```php
getDeliveryNotesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\DeliveryNoteDtoListEnvelope
```

Get all delivery notes

Retrieves all delivery notes for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getDeliveryNotesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->getDeliveryNotesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeliveryNoteDtoListEnvelope**](../Model/DeliveryNoteDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryNotesCountAsync()`

```php
getDeliveryNotesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get delivery notes count

Returns the count of delivery notes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getDeliveryNotesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->getDeliveryNotesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateDeliveryNoteAsync()`

```php
updateDeliveryNoteAsync($tenant_id, $delivery_note_id, $api_version, $x_api_version, $delivery_note_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a delivery note

Updates an existing delivery note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$delivery_note_id = 'delivery_note_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$delivery_note_update_dto = new \OpenAPI\Client\Model\DeliveryNoteUpdateDto(); // \OpenAPI\Client\Model\DeliveryNoteUpdateDto

try {
    $result = $apiInstance->updateDeliveryNoteAsync($tenant_id, $delivery_note_id, $api_version, $x_api_version, $delivery_note_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->updateDeliveryNoteAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **delivery_note_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **delivery_note_update_dto** | [**\OpenAPI\Client\Model\DeliveryNoteUpdateDto**](../Model/DeliveryNoteUpdateDto.md)|  | [optional] |

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
