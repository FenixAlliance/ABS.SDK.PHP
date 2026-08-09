# OpenAPI\Client\LeaveApplicationsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeaveApplicationAsync()**](LeaveApplicationsApi.md#createLeaveApplicationAsync) | **POST** /api/v2/HrmsService/LeaveApplications | Create a leave application |
| [**deleteLeaveApplicationAsync()**](LeaveApplicationsApi.md#deleteLeaveApplicationAsync) | **DELETE** /api/v2/HrmsService/LeaveApplications/{leaveApplicationId} | Delete a leave application |
| [**getLeaveApplicationByIdAsync()**](LeaveApplicationsApi.md#getLeaveApplicationByIdAsync) | **GET** /api/v2/HrmsService/LeaveApplications/{leaveApplicationId} | Get leave application by ID |
| [**getLeaveApplicationsAsync()**](LeaveApplicationsApi.md#getLeaveApplicationsAsync) | **GET** /api/v2/HrmsService/LeaveApplications | Get leave applications |
| [**getLeaveApplicationsCountAsync()**](LeaveApplicationsApi.md#getLeaveApplicationsCountAsync) | **GET** /api/v2/HrmsService/LeaveApplications/Count | Count leave applications |
| [**patchLeaveApplicationAsync()**](LeaveApplicationsApi.md#patchLeaveApplicationAsync) | **PATCH** /api/v2/HrmsService/LeaveApplications/{leaveApplicationId} | Patch a leave application |
| [**updateLeaveApplicationAsync()**](LeaveApplicationsApi.md#updateLeaveApplicationAsync) | **PUT** /api/v2/HrmsService/LeaveApplications/{leaveApplicationId} | Update a leave application |


## `createLeaveApplicationAsync()`

```php
createLeaveApplicationAsync($tenant_id, $api_version, $x_api_version, $leave_application_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a leave application

Creates a new leave application for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_application_create_dto = new \OpenAPI\Client\Model\LeaveApplicationCreateDto(); // \OpenAPI\Client\Model\LeaveApplicationCreateDto

try {
    $result = $apiInstance->createLeaveApplicationAsync($tenant_id, $api_version, $x_api_version, $leave_application_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApplicationsApi->createLeaveApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_application_create_dto** | [**\OpenAPI\Client\Model\LeaveApplicationCreateDto**](../Model/LeaveApplicationCreateDto.md)|  | [optional] |

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

## `deleteLeaveApplicationAsync()`

```php
deleteLeaveApplicationAsync($tenant_id, $leave_application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a leave application

Deletes a leave application for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$leave_application_id = 'leave_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteLeaveApplicationAsync($tenant_id, $leave_application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApplicationsApi->deleteLeaveApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **leave_application_id** | **string**|  | |
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

## `getLeaveApplicationByIdAsync()`

```php
getLeaveApplicationByIdAsync($tenant_id, $leave_application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\LeaveApplicationDtoEnvelope
```

Get leave application by ID

Retrieves a specific leave application by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$leave_application_id = 'leave_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLeaveApplicationByIdAsync($tenant_id, $leave_application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApplicationsApi->getLeaveApplicationByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **leave_application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LeaveApplicationDtoEnvelope**](../Model/LeaveApplicationDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaveApplicationsAsync()`

```php
getLeaveApplicationsAsync($tenant_id, $api_version, $x_api_version, $leave_application_dto_collection_query_parameters): \OpenAPI\Client\Model\LeaveApplicationDtoListEnvelope
```

Get leave applications

Retrieves leave applications for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_application_dto_collection_query_parameters = new \OpenAPI\Client\Model\LeaveApplicationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LeaveApplicationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLeaveApplicationsAsync($tenant_id, $api_version, $x_api_version, $leave_application_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApplicationsApi->getLeaveApplicationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_application_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LeaveApplicationDtoCollectionQueryParameters**](../Model/LeaveApplicationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LeaveApplicationDtoListEnvelope**](../Model/LeaveApplicationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaveApplicationsCountAsync()`

```php
getLeaveApplicationsCountAsync($tenant_id, $api_version, $x_api_version, $leave_application_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count leave applications

Counts leave applications for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_application_dto_collection_query_parameters = new \OpenAPI\Client\Model\LeaveApplicationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LeaveApplicationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLeaveApplicationsCountAsync($tenant_id, $api_version, $x_api_version, $leave_application_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApplicationsApi->getLeaveApplicationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_application_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LeaveApplicationDtoCollectionQueryParameters**](../Model/LeaveApplicationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchLeaveApplicationAsync()`

```php
patchLeaveApplicationAsync($tenant_id, $leave_application_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a leave application

Partially updates an existing leave application for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$leave_application_id = 'leave_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchLeaveApplicationAsync($tenant_id, $leave_application_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApplicationsApi->patchLeaveApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **leave_application_id** | **string**|  | |
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

## `updateLeaveApplicationAsync()`

```php
updateLeaveApplicationAsync($tenant_id, $leave_application_id, $api_version, $x_api_version, $leave_application_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a leave application

Updates an existing leave application for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LeaveApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$leave_application_id = 'leave_application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$leave_application_update_dto = new \OpenAPI\Client\Model\LeaveApplicationUpdateDto(); // \OpenAPI\Client\Model\LeaveApplicationUpdateDto

try {
    $result = $apiInstance->updateLeaveApplicationAsync($tenant_id, $leave_application_id, $api_version, $x_api_version, $leave_application_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApplicationsApi->updateLeaveApplicationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **leave_application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **leave_application_update_dto** | [**\OpenAPI\Client\Model\LeaveApplicationUpdateDto**](../Model/LeaveApplicationUpdateDto.md)|  | [optional] |

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
