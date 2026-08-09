# OpenAPI\Client\SeawayBillsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSeawayBillLineAsync()**](SeawayBillsApi.md#addSeawayBillLineAsync) | **POST** /api/v2/LogisticsService/SeawayBills/{billId}/Lines | Add a line to seaway bill |
| [**cancelSeawayBillAsync()**](SeawayBillsApi.md#cancelSeawayBillAsync) | **POST** /api/v2/LogisticsService/SeawayBills/{billId}/Cancel | Cancel a seaway bill |
| [**createSeawayBillAsync()**](SeawayBillsApi.md#createSeawayBillAsync) | **POST** /api/v2/LogisticsService/SeawayBills | Create a seaway bill |
| [**deleteSeawayBillAsync()**](SeawayBillsApi.md#deleteSeawayBillAsync) | **DELETE** /api/v2/LogisticsService/SeawayBills/{billId} | Delete a seaway bill |
| [**getSeawayBillByIdAsync()**](SeawayBillsApi.md#getSeawayBillByIdAsync) | **GET** /api/v2/LogisticsService/SeawayBills/{billId} | Get seaway bill by ID |
| [**getSeawayBillLinesAsync()**](SeawayBillsApi.md#getSeawayBillLinesAsync) | **GET** /api/v2/LogisticsService/SeawayBills/{billId}/Lines | Get seaway bill lines |
| [**getSeawayBillLinesCountAsync()**](SeawayBillsApi.md#getSeawayBillLinesCountAsync) | **GET** /api/v2/LogisticsService/SeawayBills/{billId}/Lines/Count | Get seaway bill lines count |
| [**getSeawayBillsAsync()**](SeawayBillsApi.md#getSeawayBillsAsync) | **GET** /api/v2/LogisticsService/SeawayBills | Get all seaway bills |
| [**getSeawayBillsCountAsync()**](SeawayBillsApi.md#getSeawayBillsCountAsync) | **GET** /api/v2/LogisticsService/SeawayBills/Count | Get seaway bills count |
| [**issueSeawayBillAsync()**](SeawayBillsApi.md#issueSeawayBillAsync) | **POST** /api/v2/LogisticsService/SeawayBills/{billId}/Issue | Issue a seaway bill |
| [**markSeawayBillArrivedAsync()**](SeawayBillsApi.md#markSeawayBillArrivedAsync) | **POST** /api/v2/LogisticsService/SeawayBills/{billId}/MarkArrived | Mark seaway bill arrived |
| [**markSeawayBillInTransitAsync()**](SeawayBillsApi.md#markSeawayBillInTransitAsync) | **POST** /api/v2/LogisticsService/SeawayBills/{billId}/MarkInTransit | Mark seaway bill in transit |
| [**patchSeawayBillAsync()**](SeawayBillsApi.md#patchSeawayBillAsync) | **PATCH** /api/v2/LogisticsService/SeawayBills/{billId} | Patch a seaway bill |
| [**patchSeawayBillLineAsync()**](SeawayBillsApi.md#patchSeawayBillLineAsync) | **PATCH** /api/v2/LogisticsService/SeawayBills/{billId}/Lines/{lineId} | Patch a seaway bill line |
| [**releaseSeawayBillAsync()**](SeawayBillsApi.md#releaseSeawayBillAsync) | **POST** /api/v2/LogisticsService/SeawayBills/{billId}/Release | Release a seaway bill |
| [**removeSeawayBillLineAsync()**](SeawayBillsApi.md#removeSeawayBillLineAsync) | **DELETE** /api/v2/LogisticsService/SeawayBills/{billId}/Lines/{lineId} | Remove a seaway bill line |
| [**updateSeawayBillAsync()**](SeawayBillsApi.md#updateSeawayBillAsync) | **PUT** /api/v2/LogisticsService/SeawayBills/{billId} | Update a seaway bill |
| [**updateSeawayBillLineAsync()**](SeawayBillsApi.md#updateSeawayBillLineAsync) | **PUT** /api/v2/LogisticsService/SeawayBills/{billId}/Lines/{lineId} | Update a seaway bill line |


## `addSeawayBillLineAsync()`

```php
addSeawayBillLineAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Add a line to seaway bill

Adds a new line to a seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$waybill_line_create_dto = new \OpenAPI\Client\Model\WaybillLineCreateDto(); // \OpenAPI\Client\Model\WaybillLineCreateDto

try {
    $result = $apiInstance->addSeawayBillLineAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->addSeawayBillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **waybill_line_create_dto** | [**\OpenAPI\Client\Model\WaybillLineCreateDto**](../Model/WaybillLineCreateDto.md)|  | [optional] |

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

## `cancelSeawayBillAsync()`

```php
cancelSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Cancel a seaway bill

Cancels a seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->cancelSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->cancelSeawayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
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

## `createSeawayBillAsync()`

```php
createSeawayBillAsync($tenant_id, $api_version, $x_api_version, $seaway_bill_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a seaway bill

Creates a new seaway bill for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$seaway_bill_create_dto = new \OpenAPI\Client\Model\SeawayBillCreateDto(); // \OpenAPI\Client\Model\SeawayBillCreateDto

try {
    $result = $apiInstance->createSeawayBillAsync($tenant_id, $api_version, $x_api_version, $seaway_bill_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->createSeawayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **seaway_bill_create_dto** | [**\OpenAPI\Client\Model\SeawayBillCreateDto**](../Model/SeawayBillCreateDto.md)|  | [optional] |

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

## `deleteSeawayBillAsync()`

```php
deleteSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a seaway bill

Deletes a seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->deleteSeawayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
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

## `getSeawayBillByIdAsync()`

```php
getSeawayBillByIdAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SeawayBillDtoEnvelope
```

Get seaway bill by ID

Retrieves a specific seaway bill by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSeawayBillByIdAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->getSeawayBillByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SeawayBillDtoEnvelope**](../Model/SeawayBillDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeawayBillLinesAsync()`

```php
getSeawayBillLinesAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters): \OpenAPI\Client\Model\WaybillLineDtoListEnvelope
```

Get seaway bill lines

Retrieves all lines for a specific seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$waybill_line_dto_collection_query_parameters = new \OpenAPI\Client\Model\WaybillLineDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WaybillLineDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSeawayBillLinesAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->getSeawayBillLinesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **waybill_line_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WaybillLineDtoCollectionQueryParameters**](../Model/WaybillLineDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WaybillLineDtoListEnvelope**](../Model/WaybillLineDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeawayBillLinesCountAsync()`

```php
getSeawayBillLinesCountAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get seaway bill lines count

Returns the count of lines for a specific seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$waybill_line_dto_collection_query_parameters = new \OpenAPI\Client\Model\WaybillLineDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WaybillLineDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSeawayBillLinesCountAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->getSeawayBillLinesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **waybill_line_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WaybillLineDtoCollectionQueryParameters**](../Model/WaybillLineDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeawayBillsAsync()`

```php
getSeawayBillsAsync($tenant_id, $api_version, $x_api_version, $seaway_bill_dto_collection_query_parameters): \OpenAPI\Client\Model\SeawayBillDtoListEnvelope
```

Get all seaway bills

Retrieves all seaway bills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$seaway_bill_dto_collection_query_parameters = new \OpenAPI\Client\Model\SeawayBillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SeawayBillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSeawayBillsAsync($tenant_id, $api_version, $x_api_version, $seaway_bill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->getSeawayBillsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **seaway_bill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SeawayBillDtoCollectionQueryParameters**](../Model/SeawayBillDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SeawayBillDtoListEnvelope**](../Model/SeawayBillDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeawayBillsCountAsync()`

```php
getSeawayBillsCountAsync($tenant_id, $api_version, $x_api_version, $seaway_bill_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get seaway bills count

Returns the count of seaway bills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$seaway_bill_dto_collection_query_parameters = new \OpenAPI\Client\Model\SeawayBillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SeawayBillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSeawayBillsCountAsync($tenant_id, $api_version, $x_api_version, $seaway_bill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->getSeawayBillsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **seaway_bill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SeawayBillDtoCollectionQueryParameters**](../Model/SeawayBillDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueSeawayBillAsync()`

```php
issueSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Issue a seaway bill

Issues a seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->issueSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->issueSeawayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
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

## `markSeawayBillArrivedAsync()`

```php
markSeawayBillArrivedAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Mark seaway bill arrived

Marks a seaway bill as arrived.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->markSeawayBillArrivedAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->markSeawayBillArrivedAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
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

## `markSeawayBillInTransitAsync()`

```php
markSeawayBillInTransitAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Mark seaway bill in transit

Marks a seaway bill as in transit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->markSeawayBillInTransitAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->markSeawayBillInTransitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
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

## `patchSeawayBillAsync()`

```php
patchSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a seaway bill

Partially updates an existing seaway bill using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->patchSeawayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `patchSeawayBillLineAsync()`

```php
patchSeawayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a seaway bill line

Partially updates a line on a seaway bill using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSeawayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->patchSeawayBillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `releaseSeawayBillAsync()`

```php
releaseSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Release a seaway bill

Releases a seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->releaseSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->releaseSeawayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
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

## `removeSeawayBillLineAsync()`

```php
removeSeawayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove a seaway bill line

Removes a line from a seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->removeSeawayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->removeSeawayBillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **line_id** | **string**|  | |
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

## `updateSeawayBillAsync()`

```php
updateSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $seaway_bill_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a seaway bill

Updates an existing seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$seaway_bill_update_dto = new \OpenAPI\Client\Model\SeawayBillUpdateDto(); // \OpenAPI\Client\Model\SeawayBillUpdateDto

try {
    $result = $apiInstance->updateSeawayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $seaway_bill_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->updateSeawayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **seaway_bill_update_dto** | [**\OpenAPI\Client\Model\SeawayBillUpdateDto**](../Model/SeawayBillUpdateDto.md)|  | [optional] |

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

## `updateSeawayBillLineAsync()`

```php
updateSeawayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $waybill_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a seaway bill line

Updates an existing line on a seaway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SeawayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$waybill_line_update_dto = new \OpenAPI\Client\Model\WaybillLineUpdateDto(); // \OpenAPI\Client\Model\WaybillLineUpdateDto

try {
    $result = $apiInstance->updateSeawayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $waybill_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeawayBillsApi->updateSeawayBillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **waybill_line_update_dto** | [**\OpenAPI\Client\Model\WaybillLineUpdateDto**](../Model/WaybillLineUpdateDto.md)|  | [optional] |

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
