# OpenAPI\Client\TaskTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTaskTypeAsync()**](TaskTypesApi.md#createTaskTypeAsync) | **POST** /api/v2/ProjectsService/TaskTypes | Creates a new task type |
| [**deleteTaskTypeAsync()**](TaskTypesApi.md#deleteTaskTypeAsync) | **DELETE** /api/v2/ProjectsService/TaskTypes/{taskTypeId} | Deletes a task type |
| [**getTaskTypeByIdAsync()**](TaskTypesApi.md#getTaskTypeByIdAsync) | **GET** /api/v2/ProjectsService/TaskTypes/{taskTypeId} | Gets a task type by ID |
| [**updateTaskTypeAsync()**](TaskTypesApi.md#updateTaskTypeAsync) | **PUT** /api/v2/ProjectsService/TaskTypes/{taskTypeId} | Updates a task type |


## `createTaskTypeAsync()`

```php
createTaskTypeAsync($tenant_id, $task_type_create_dto): \OpenAPI\Client\Model\TaskTypeDto
```

Creates a new task type

Creates a new task type for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$task_type_create_dto = new \OpenAPI\Client\Model\TaskTypeCreateDto(); // \OpenAPI\Client\Model\TaskTypeCreateDto

try {
    $result = $apiInstance->createTaskTypeAsync($tenant_id, $task_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->createTaskTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **task_type_create_dto** | [**\OpenAPI\Client\Model\TaskTypeCreateDto**](../Model/TaskTypeCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTaskTypeAsync()`

```php
deleteTaskTypeAsync($task_type_id, $tenant_id): \OpenAPI\Client\Model\TaskTypeDto
```

Deletes a task type

Deletes the specified task type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_type_id = 'task_type_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->deleteTaskTypeAsync($task_type_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->deleteTaskTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_type_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskTypeByIdAsync()`

```php
getTaskTypeByIdAsync($task_type_id, $tenant_id): \OpenAPI\Client\Model\TaskTypeDto
```

Gets a task type by ID

Retrieves the details of a task type using its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_type_id = 'task_type_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getTaskTypeByIdAsync($task_type_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->getTaskTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_type_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaskTypeAsync()`

```php
updateTaskTypeAsync($task_type_id, $tenant_id, $task_type_update_dto): \OpenAPI\Client\Model\TaskTypeDto
```

Updates a task type

Updates the specified task type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_type_id = 'task_type_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$task_type_update_dto = new \OpenAPI\Client\Model\TaskTypeUpdateDto(); // \OpenAPI\Client\Model\TaskTypeUpdateDto

try {
    $result = $apiInstance->updateTaskTypeAsync($task_type_id, $tenant_id, $task_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->updateTaskTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_type_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **task_type_update_dto** | [**\OpenAPI\Client\Model\TaskTypeUpdateDto**](../Model/TaskTypeUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
