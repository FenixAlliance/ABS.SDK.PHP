# OpenAPI\Client\AirwayBillsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAirwayBillLineAsync()**](AirwayBillsApi.md#addAirwayBillLineAsync) | **POST** /api/v2/LogisticsService/AirwayBills/{billId}/Lines | Add a line to airway bill |
| [**cancelAirwayBillAsync()**](AirwayBillsApi.md#cancelAirwayBillAsync) | **POST** /api/v2/LogisticsService/AirwayBills/{billId}/Cancel | Cancel an airway bill |
| [**createAirwayBillAsync()**](AirwayBillsApi.md#createAirwayBillAsync) | **POST** /api/v2/LogisticsService/AirwayBills | Create an airway bill |
| [**deleteAirwayBillAsync()**](AirwayBillsApi.md#deleteAirwayBillAsync) | **DELETE** /api/v2/LogisticsService/AirwayBills/{billId} | Delete an airway bill |
| [**getAirwayBillByIdAsync()**](AirwayBillsApi.md#getAirwayBillByIdAsync) | **GET** /api/v2/LogisticsService/AirwayBills/{billId} | Get airway bill by ID |
| [**getAirwayBillLinesAsync()**](AirwayBillsApi.md#getAirwayBillLinesAsync) | **GET** /api/v2/LogisticsService/AirwayBills/{billId}/Lines | Get airway bill lines |
| [**getAirwayBillLinesCountAsync()**](AirwayBillsApi.md#getAirwayBillLinesCountAsync) | **GET** /api/v2/LogisticsService/AirwayBills/{billId}/Lines/Count | Get airway bill lines count |
| [**getAirwayBillsAsync()**](AirwayBillsApi.md#getAirwayBillsAsync) | **GET** /api/v2/LogisticsService/AirwayBills | Get all airway bills |
| [**getAirwayBillsCountAsync()**](AirwayBillsApi.md#getAirwayBillsCountAsync) | **GET** /api/v2/LogisticsService/AirwayBills/Count | Get airway bills count |
| [**issueAirwayBillAsync()**](AirwayBillsApi.md#issueAirwayBillAsync) | **POST** /api/v2/LogisticsService/AirwayBills/{billId}/Issue | Issue an airway bill |
| [**markAirwayBillArrivedAsync()**](AirwayBillsApi.md#markAirwayBillArrivedAsync) | **POST** /api/v2/LogisticsService/AirwayBills/{billId}/MarkArrived | Mark airway bill arrived |
| [**markAirwayBillDeliveredAsync()**](AirwayBillsApi.md#markAirwayBillDeliveredAsync) | **POST** /api/v2/LogisticsService/AirwayBills/{billId}/MarkDelivered | Mark airway bill delivered |
| [**markAirwayBillInTransitAsync()**](AirwayBillsApi.md#markAirwayBillInTransitAsync) | **POST** /api/v2/LogisticsService/AirwayBills/{billId}/MarkInTransit | Mark airway bill in transit |
| [**patchAirwayBillAsync()**](AirwayBillsApi.md#patchAirwayBillAsync) | **PATCH** /api/v2/LogisticsService/AirwayBills/{billId} | Patch an airway bill |
| [**patchAirwayBillLineAsync()**](AirwayBillsApi.md#patchAirwayBillLineAsync) | **PATCH** /api/v2/LogisticsService/AirwayBills/{billId}/Lines/{lineId} | Patch an airway bill line |
| [**removeAirwayBillLineAsync()**](AirwayBillsApi.md#removeAirwayBillLineAsync) | **DELETE** /api/v2/LogisticsService/AirwayBills/{billId}/Lines/{lineId} | Remove an airway bill line |
| [**updateAirwayBillAsync()**](AirwayBillsApi.md#updateAirwayBillAsync) | **PUT** /api/v2/LogisticsService/AirwayBills/{billId} | Update an airway bill |
| [**updateAirwayBillLineAsync()**](AirwayBillsApi.md#updateAirwayBillLineAsync) | **PUT** /api/v2/LogisticsService/AirwayBills/{billId}/Lines/{lineId} | Update an airway bill line |


## `addAirwayBillLineAsync()`

```php
addAirwayBillLineAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Add a line to airway bill

Adds a new line to an airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
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
    $result = $apiInstance->addAirwayBillLineAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->addAirwayBillLineAsync: ', $e->getMessage(), PHP_EOL;
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

## `cancelAirwayBillAsync()`

```php
cancelAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Cancel an airway bill

Cancels an airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->cancelAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->cancelAirwayBillAsync: ', $e->getMessage(), PHP_EOL;
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

## `createAirwayBillAsync()`

```php
createAirwayBillAsync($tenant_id, $api_version, $x_api_version, $airway_bill_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an airway bill

Creates a new airway bill for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$airway_bill_create_dto = new \OpenAPI\Client\Model\AirwayBillCreateDto(); // \OpenAPI\Client\Model\AirwayBillCreateDto

try {
    $result = $apiInstance->createAirwayBillAsync($tenant_id, $api_version, $x_api_version, $airway_bill_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->createAirwayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **airway_bill_create_dto** | [**\OpenAPI\Client\Model\AirwayBillCreateDto**](../Model/AirwayBillCreateDto.md)|  | [optional] |

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

## `deleteAirwayBillAsync()`

```php
deleteAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an airway bill

Deletes an airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->deleteAirwayBillAsync: ', $e->getMessage(), PHP_EOL;
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

## `getAirwayBillByIdAsync()`

```php
getAirwayBillByIdAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AirwayBillDtoEnvelope
```

Get airway bill by ID

Retrieves a specific airway bill by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAirwayBillByIdAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->getAirwayBillByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\AirwayBillDtoEnvelope**](../Model/AirwayBillDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirwayBillLinesAsync()`

```php
getAirwayBillLinesAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters): \OpenAPI\Client\Model\WaybillLineDtoListEnvelope
```

Get airway bill lines

Retrieves all lines for a specific airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
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
    $result = $apiInstance->getAirwayBillLinesAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->getAirwayBillLinesAsync: ', $e->getMessage(), PHP_EOL;
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

## `getAirwayBillLinesCountAsync()`

```php
getAirwayBillLinesCountAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get airway bill lines count

Returns the count of lines for a specific airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
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
    $result = $apiInstance->getAirwayBillLinesCountAsync($tenant_id, $bill_id, $api_version, $x_api_version, $waybill_line_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->getAirwayBillLinesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getAirwayBillsAsync()`

```php
getAirwayBillsAsync($tenant_id, $api_version, $x_api_version, $airway_bill_dto_collection_query_parameters): \OpenAPI\Client\Model\AirwayBillDtoListEnvelope
```

Get all airway bills

Retrieves all airway bills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$airway_bill_dto_collection_query_parameters = new \OpenAPI\Client\Model\AirwayBillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AirwayBillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getAirwayBillsAsync($tenant_id, $api_version, $x_api_version, $airway_bill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->getAirwayBillsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **airway_bill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AirwayBillDtoCollectionQueryParameters**](../Model/AirwayBillDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AirwayBillDtoListEnvelope**](../Model/AirwayBillDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirwayBillsCountAsync()`

```php
getAirwayBillsCountAsync($tenant_id, $api_version, $x_api_version, $airway_bill_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get airway bills count

Returns the count of airway bills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$airway_bill_dto_collection_query_parameters = new \OpenAPI\Client\Model\AirwayBillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\AirwayBillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getAirwayBillsCountAsync($tenant_id, $api_version, $x_api_version, $airway_bill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->getAirwayBillsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **airway_bill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\AirwayBillDtoCollectionQueryParameters**](../Model/AirwayBillDtoCollectionQueryParameters.md)|  | [optional] |

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

## `issueAirwayBillAsync()`

```php
issueAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Issue an airway bill

Issues an airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->issueAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->issueAirwayBillAsync: ', $e->getMessage(), PHP_EOL;
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

## `markAirwayBillArrivedAsync()`

```php
markAirwayBillArrivedAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Mark airway bill arrived

Marks an airway bill as arrived.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->markAirwayBillArrivedAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->markAirwayBillArrivedAsync: ', $e->getMessage(), PHP_EOL;
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

## `markAirwayBillDeliveredAsync()`

```php
markAirwayBillDeliveredAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Mark airway bill delivered

Marks an airway bill as delivered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->markAirwayBillDeliveredAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->markAirwayBillDeliveredAsync: ', $e->getMessage(), PHP_EOL;
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

## `markAirwayBillInTransitAsync()`

```php
markAirwayBillInTransitAsync($tenant_id, $bill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Mark airway bill in transit

Marks an airway bill as in transit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->markAirwayBillInTransitAsync($tenant_id, $bill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->markAirwayBillInTransitAsync: ', $e->getMessage(), PHP_EOL;
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

## `patchAirwayBillAsync()`

```php
patchAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch an airway bill

Partially updates an existing airway bill using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
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
    $result = $apiInstance->patchAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->patchAirwayBillAsync: ', $e->getMessage(), PHP_EOL;
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

## `patchAirwayBillLineAsync()`

```php
patchAirwayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch an airway bill line

Partially updates a line on an airway bill using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
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
    $result = $apiInstance->patchAirwayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->patchAirwayBillLineAsync: ', $e->getMessage(), PHP_EOL;
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

## `removeAirwayBillLineAsync()`

```php
removeAirwayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove an airway bill line

Removes a line from an airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
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
    $result = $apiInstance->removeAirwayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->removeAirwayBillLineAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateAirwayBillAsync()`

```php
updateAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $airway_bill_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an airway bill

Updates an existing airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_id = 'bill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$airway_bill_update_dto = new \OpenAPI\Client\Model\AirwayBillUpdateDto(); // \OpenAPI\Client\Model\AirwayBillUpdateDto

try {
    $result = $apiInstance->updateAirwayBillAsync($tenant_id, $bill_id, $api_version, $x_api_version, $airway_bill_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->updateAirwayBillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **airway_bill_update_dto** | [**\OpenAPI\Client\Model\AirwayBillUpdateDto**](../Model/AirwayBillUpdateDto.md)|  | [optional] |

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

## `updateAirwayBillLineAsync()`

```php
updateAirwayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $waybill_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an airway bill line

Updates an existing line on an airway bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AirwayBillsApi(
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
    $result = $apiInstance->updateAirwayBillLineAsync($tenant_id, $bill_id, $line_id, $api_version, $x_api_version, $waybill_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirwayBillsApi->updateAirwayBillLineAsync: ', $e->getMessage(), PHP_EOL;
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
