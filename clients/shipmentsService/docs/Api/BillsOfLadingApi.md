# OpenAPI\Client\BillsOfLadingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBillOfLadingAsync()**](BillsOfLadingApi.md#createBillOfLadingAsync) | **POST** /api/v2/ShipmentsService/BillsOfLading | Create a bill of lading |
| [**createBillOfLadingLineAsync()**](BillsOfLadingApi.md#createBillOfLadingLineAsync) | **POST** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId}/Lines | Create a bill of lading line |
| [**deleteBillOfLadingAsync()**](BillsOfLadingApi.md#deleteBillOfLadingAsync) | **DELETE** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId} | Delete a bill of lading |
| [**deleteBillOfLadingLineAsync()**](BillsOfLadingApi.md#deleteBillOfLadingLineAsync) | **DELETE** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId}/Lines/{lineId} | Delete a bill of lading line |
| [**getBillOfLadingByIdAsync()**](BillsOfLadingApi.md#getBillOfLadingByIdAsync) | **GET** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId} | Get bill of lading by ID |
| [**getBillOfLadingLineByIdAsync()**](BillsOfLadingApi.md#getBillOfLadingLineByIdAsync) | **GET** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId}/Lines/{lineId} | Get bill of lading line by ID |
| [**getBillOfLadingLinesAsync()**](BillsOfLadingApi.md#getBillOfLadingLinesAsync) | **GET** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId}/Lines | Get bill of lading lines |
| [**getBillOfLadingLinesCountAsync()**](BillsOfLadingApi.md#getBillOfLadingLinesCountAsync) | **GET** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId}/Lines/Count | Get bill of lading lines count |
| [**getBillsOfLadingAsync()**](BillsOfLadingApi.md#getBillsOfLadingAsync) | **GET** /api/v2/ShipmentsService/BillsOfLading | Get all bills of lading |
| [**getBillsOfLadingCountAsync()**](BillsOfLadingApi.md#getBillsOfLadingCountAsync) | **GET** /api/v2/ShipmentsService/BillsOfLading/Count | Get bills of lading count |
| [**patchBillOfLadingAsync()**](BillsOfLadingApi.md#patchBillOfLadingAsync) | **PATCH** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId} | Patch a bill of lading |
| [**patchBillOfLadingLineAsync()**](BillsOfLadingApi.md#patchBillOfLadingLineAsync) | **PATCH** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId}/Lines/{lineId} | Patch a bill of lading line |
| [**updateBillOfLadingAsync()**](BillsOfLadingApi.md#updateBillOfLadingAsync) | **PUT** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId} | Update a bill of lading |
| [**updateBillOfLadingLineAsync()**](BillsOfLadingApi.md#updateBillOfLadingLineAsync) | **PUT** /api/v2/ShipmentsService/BillsOfLading/{billOfLadingId}/Lines/{lineId} | Update a bill of lading line |


## `createBillOfLadingAsync()`

```php
createBillOfLadingAsync($tenant_id, $api_version, $x_api_version, $bill_of_lading_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a bill of lading

Creates a new bill of lading for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bill_of_lading_create_dto = new \OpenAPI\Client\Model\BillOfLadingCreateDto(); // \OpenAPI\Client\Model\BillOfLadingCreateDto

try {
    $result = $apiInstance->createBillOfLadingAsync($tenant_id, $api_version, $x_api_version, $bill_of_lading_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->createBillOfLadingAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bill_of_lading_create_dto** | [**\OpenAPI\Client\Model\BillOfLadingCreateDto**](../Model/BillOfLadingCreateDto.md)|  | [optional] |

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

## `createBillOfLadingLineAsync()`

```php
createBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version, $bill_of_lading_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a bill of lading line

Creates a new line for a bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bill_of_lading_line_create_dto = new \OpenAPI\Client\Model\BillOfLadingLineCreateDto(); // \OpenAPI\Client\Model\BillOfLadingLineCreateDto

try {
    $result = $apiInstance->createBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version, $bill_of_lading_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->createBillOfLadingLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bill_of_lading_line_create_dto** | [**\OpenAPI\Client\Model\BillOfLadingLineCreateDto**](../Model/BillOfLadingLineCreateDto.md)|  | [optional] |

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

## `deleteBillOfLadingAsync()`

```php
deleteBillOfLadingAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a bill of lading

Deletes a bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteBillOfLadingAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->deleteBillOfLadingAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
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

## `deleteBillOfLadingLineAsync()`

```php
deleteBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a bill of lading line

Deletes a line from a bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->deleteBillOfLadingLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
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

## `getBillOfLadingByIdAsync()`

```php
getBillOfLadingByIdAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BillOfLadingDtoEnvelope
```

Get bill of lading by ID

Retrieves a specific bill of lading by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillOfLadingByIdAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->getBillOfLadingByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillOfLadingDtoEnvelope**](../Model/BillOfLadingDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillOfLadingLineByIdAsync()`

```php
getBillOfLadingLineByIdAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BillOfLadingLineDtoEnvelope
```

Get bill of lading line by ID

Retrieves a specific line from a bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillOfLadingLineByIdAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->getBillOfLadingLineByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillOfLadingLineDtoEnvelope**](../Model/BillOfLadingLineDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillOfLadingLinesAsync()`

```php
getBillOfLadingLinesAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BillOfLadingLineDtoListEnvelope
```

Get bill of lading lines

Retrieves all lines for a specific bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillOfLadingLinesAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->getBillOfLadingLinesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillOfLadingLineDtoListEnvelope**](../Model/BillOfLadingLineDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillOfLadingLinesCountAsync()`

```php
getBillOfLadingLinesCountAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get bill of lading lines count

Returns the count of lines for a specific bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillOfLadingLinesCountAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->getBillOfLadingLinesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
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

## `getBillsOfLadingAsync()`

```php
getBillsOfLadingAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BillOfLadingDtoListEnvelope
```

Get all bills of lading

Retrieves all bills of lading for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillsOfLadingAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->getBillsOfLadingAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillOfLadingDtoListEnvelope**](../Model/BillOfLadingDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillsOfLadingCountAsync()`

```php
getBillsOfLadingCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get bills of lading count

Returns the count of bills of lading for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillsOfLadingCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->getBillsOfLadingCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `patchBillOfLadingAsync()`

```php
patchBillOfLadingAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a bill of lading

Partially updates an existing bill of lading using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchBillOfLadingAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->patchBillOfLadingAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `patchBillOfLadingLineAsync()`

```php
patchBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a bill of lading line

Partially updates an existing line on a bill of lading using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->patchBillOfLadingLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `updateBillOfLadingAsync()`

```php
updateBillOfLadingAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version, $bill_of_lading_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a bill of lading

Updates an existing bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bill_of_lading_update_dto = new \OpenAPI\Client\Model\BillOfLadingUpdateDto(); // \OpenAPI\Client\Model\BillOfLadingUpdateDto

try {
    $result = $apiInstance->updateBillOfLadingAsync($tenant_id, $bill_of_lading_id, $api_version, $x_api_version, $bill_of_lading_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->updateBillOfLadingAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bill_of_lading_update_dto** | [**\OpenAPI\Client\Model\BillOfLadingUpdateDto**](../Model/BillOfLadingUpdateDto.md)|  | [optional] |

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

## `updateBillOfLadingLineAsync()`

```php
updateBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version, $bill_of_lading_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a bill of lading line

Updates an existing line on a bill of lading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillsOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bill_of_lading_id = 'bill_of_lading_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bill_of_lading_line_update_dto = new \OpenAPI\Client\Model\BillOfLadingLineUpdateDto(); // \OpenAPI\Client\Model\BillOfLadingLineUpdateDto

try {
    $result = $apiInstance->updateBillOfLadingLineAsync($tenant_id, $bill_of_lading_id, $line_id, $api_version, $x_api_version, $bill_of_lading_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsOfLadingApi->updateBillOfLadingLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bill_of_lading_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bill_of_lading_line_update_dto** | [**\OpenAPI\Client\Model\BillOfLadingLineUpdateDto**](../Model/BillOfLadingLineUpdateDto.md)|  | [optional] |

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
