# OpenAPI\Client\LeaveTypesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeaveTypeAsync()**](LeaveTypesApi.md#createLeaveTypeAsync) | **POST** /api/v2/HrmsService/LeaveTypes | Create a leave type |
| [**deleteLeaveTypeAsync()**](LeaveTypesApi.md#deleteLeaveTypeAsync) | **DELETE** /api/v2/HrmsService/LeaveTypes/{leaveTypeId} | Delete a leave type |
| [**getLeaveTypeByIdAsync()**](LeaveTypesApi.md#getLeaveTypeByIdAsync) | **GET** /api/v2/HrmsService/LeaveTypes/{leaveTypeId} | Get leave type by ID |
| [**getLeaveTypesAsync()**](LeaveTypesApi.md#getLeaveTypesAsync) | **GET** /api/v2/HrmsService/LeaveTypes | Get leave types |
| [**getLeaveTypesCountAsync()**](LeaveTypesApi.md#getLeaveTypesCountAsync) | **GET** /api/v2/HrmsService/LeaveTypes/Count | Count leave types |
| [**updateLeaveTypeAsync()**](LeaveTypesApi.md#updateLeaveTypeAsync) | **PUT** /api/v2/HrmsService/LeaveTypes/{leaveTypeId} | Update a leave type |


## `createLeaveTypeAsync()`

```php
createLeaveTypeAsync($tenant_id, $api_version, $x_api_version, $leave_type_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a leave type

Creates a new leave type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_type_create_dto = new \OpenAPI\Client\Model\LeaveTypeCreateDto(); // \OpenAPI\Client\Model\LeaveTypeCreateDto

try {
    $result = $apiInstance->createLeaveTypeAsync($tenant_id, $api_version, $x_api_version, $leave_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->createLeaveTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_type_create_dto** | [**\OpenAPI\Client\Model\LeaveTypeCreateDto**](../Model/LeaveTypeCreateDto.md)|  | [optional] |

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

## `deleteLeaveTypeAsync()`

```php
deleteLeaveTypeAsync($tenant_id, $leave_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a leave type

Deletes a leave type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$leave_type_id = 'leave_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteLeaveTypeAsync($tenant_id, $leave_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->deleteLeaveTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **leave_type_id** | **string**|  | |
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

## `getLeaveTypeByIdAsync()`

```php
getLeaveTypeByIdAsync($tenant_id, $leave_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\LeaveTypeDtoEnvelope
```

Get leave type by ID

Retrieves a specific leave type by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$leave_type_id = 'leave_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLeaveTypeByIdAsync($tenant_id, $leave_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->getLeaveTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **leave_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LeaveTypeDtoEnvelope**](../Model/LeaveTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaveTypesAsync()`

```php
getLeaveTypesAsync($tenant_id, $api_version, $x_api_version, $leave_type_dto_collection_query_parameters): \OpenAPI\Client\Model\LeaveTypeDtoListEnvelope
```

Get leave types

Retrieves leave types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\LeaveTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LeaveTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLeaveTypesAsync($tenant_id, $api_version, $x_api_version, $leave_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->getLeaveTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LeaveTypeDtoCollectionQueryParameters**](../Model/LeaveTypeDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LeaveTypeDtoListEnvelope**](../Model/LeaveTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaveTypesCountAsync()`

```php
getLeaveTypesCountAsync($tenant_id, $api_version, $x_api_version, $leave_type_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count leave types

Counts leave types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\LeaveTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LeaveTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLeaveTypesCountAsync($tenant_id, $api_version, $x_api_version, $leave_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->getLeaveTypesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LeaveTypeDtoCollectionQueryParameters**](../Model/LeaveTypeDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateLeaveTypeAsync()`

```php
updateLeaveTypeAsync($tenant_id, $leave_type_id, $api_version, $x_api_version, $leave_type_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a leave type

Updates an existing leave type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$leave_type_id = 'leave_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_type_update_dto = new \OpenAPI\Client\Model\LeaveTypeUpdateDto(); // \OpenAPI\Client\Model\LeaveTypeUpdateDto

try {
    $result = $apiInstance->updateLeaveTypeAsync($tenant_id, $leave_type_id, $api_version, $x_api_version, $leave_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->updateLeaveTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **leave_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_type_update_dto** | [**\OpenAPI\Client\Model\LeaveTypeUpdateDto**](../Model/LeaveTypeUpdateDto.md)|  | [optional] |

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
