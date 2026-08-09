# OpenAPI\Client\ShiftsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShiftAsync()**](ShiftsApi.md#createShiftAsync) | **POST** /api/v2/HrmsService/Shifts | Create a shift |
| [**deleteShiftAsync()**](ShiftsApi.md#deleteShiftAsync) | **DELETE** /api/v2/HrmsService/Shifts/{shiftId} | Delete a shift |
| [**getShiftByIdAsync()**](ShiftsApi.md#getShiftByIdAsync) | **GET** /api/v2/HrmsService/Shifts/{shiftId} | Get shift by ID |
| [**getShiftsAsync()**](ShiftsApi.md#getShiftsAsync) | **GET** /api/v2/HrmsService/Shifts | Get shifts |
| [**getShiftsCountAsync()**](ShiftsApi.md#getShiftsCountAsync) | **GET** /api/v2/HrmsService/Shifts/Count | Count shifts |
| [**patchShiftAsync()**](ShiftsApi.md#patchShiftAsync) | **PATCH** /api/v2/HrmsService/Shifts/{shiftId} | Patch a shift |
| [**updateShiftAsync()**](ShiftsApi.md#updateShiftAsync) | **PUT** /api/v2/HrmsService/Shifts/{shiftId} | Update a shift |


## `createShiftAsync()`

```php
createShiftAsync($tenant_id, $api_version, $x_api_version, $shift_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a shift

Creates a new shift for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shift_create_dto = new \OpenAPI\Client\Model\ShiftCreateDto(); // \OpenAPI\Client\Model\ShiftCreateDto

try {
    $result = $apiInstance->createShiftAsync($tenant_id, $api_version, $x_api_version, $shift_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->createShiftAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shift_create_dto** | [**\OpenAPI\Client\Model\ShiftCreateDto**](../Model/ShiftCreateDto.md)|  | [optional] |

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

## `deleteShiftAsync()`

```php
deleteShiftAsync($tenant_id, $shift_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a shift

Deletes a shift for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$shift_id = 'shift_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteShiftAsync($tenant_id, $shift_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->deleteShiftAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **shift_id** | **string**|  | |
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

## `getShiftByIdAsync()`

```php
getShiftByIdAsync($tenant_id, $shift_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShiftDtoEnvelope
```

Get shift by ID

Retrieves a specific shift by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$shift_id = 'shift_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShiftByIdAsync($tenant_id, $shift_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->getShiftByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **shift_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShiftDtoEnvelope**](../Model/ShiftDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShiftsAsync()`

```php
getShiftsAsync($tenant_id, $api_version, $x_api_version, $shift_dto_collection_query_parameters): \OpenAPI\Client\Model\ShiftDtoListEnvelope
```

Get shifts

Retrieves shifts for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shift_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShiftDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShiftDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShiftsAsync($tenant_id, $api_version, $x_api_version, $shift_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->getShiftsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shift_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShiftDtoCollectionQueryParameters**](../Model/ShiftDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShiftDtoListEnvelope**](../Model/ShiftDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShiftsCountAsync()`

```php
getShiftsCountAsync($tenant_id, $api_version, $x_api_version, $shift_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count shifts

Counts shifts for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shift_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShiftDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShiftDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShiftsCountAsync($tenant_id, $api_version, $x_api_version, $shift_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->getShiftsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shift_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShiftDtoCollectionQueryParameters**](../Model/ShiftDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchShiftAsync()`

```php
patchShiftAsync($tenant_id, $shift_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a shift

Partially updates an existing shift for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$shift_id = 'shift_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchShiftAsync($tenant_id, $shift_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->patchShiftAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **shift_id** | **string**|  | |
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

## `updateShiftAsync()`

```php
updateShiftAsync($tenant_id, $shift_id, $api_version, $x_api_version, $shift_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a shift

Updates an existing shift for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$shift_id = 'shift_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shift_update_dto = new \OpenAPI\Client\Model\ShiftUpdateDto(); // \OpenAPI\Client\Model\ShiftUpdateDto

try {
    $result = $apiInstance->updateShiftAsync($tenant_id, $shift_id, $api_version, $x_api_version, $shift_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->updateShiftAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **shift_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shift_update_dto** | [**\OpenAPI\Client\Model\ShiftUpdateDto**](../Model/ShiftUpdateDto.md)|  | [optional] |

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
