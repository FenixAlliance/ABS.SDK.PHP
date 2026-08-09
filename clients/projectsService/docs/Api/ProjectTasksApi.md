# OpenAPI\Client\ProjectTasksApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectTaskAsync()**](ProjectTasksApi.md#createProjectTaskAsync) | **POST** /api/v2/ProjectsService/ProjectTasks | Create a project task |
| [**deleteProjectTaskAsync()**](ProjectTasksApi.md#deleteProjectTaskAsync) | **DELETE** /api/v2/ProjectsService/ProjectTasks/{projectTaskId} | Delete a project task |
| [**getProjectTaskByIdAsync()**](ProjectTasksApi.md#getProjectTaskByIdAsync) | **GET** /api/v2/ProjectsService/ProjectTasks/{projectTaskId} | Get project task by ID |
| [**getProjectTasksAsync()**](ProjectTasksApi.md#getProjectTasksAsync) | **GET** /api/v2/ProjectsService/ProjectTasks | Get all project tasks |
| [**getProjectTasksCountAsync()**](ProjectTasksApi.md#getProjectTasksCountAsync) | **GET** /api/v2/ProjectsService/ProjectTasks/Count | Get project tasks count |
| [**patchProjectTaskAsync()**](ProjectTasksApi.md#patchProjectTaskAsync) | **PATCH** /api/v2/ProjectsService/ProjectTasks/{projectTaskId} | Patch a project task |
| [**updateProjectTaskAsync()**](ProjectTasksApi.md#updateProjectTaskAsync) | **PUT** /api/v2/ProjectsService/ProjectTasks/{projectTaskId} | Update a project task |


## `createProjectTaskAsync()`

```php
createProjectTaskAsync($tenant_id, $api_version, $x_api_version, $project_task_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a project task

Creates a new project task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_task_create_dto = new \OpenAPI\Client\Model\ProjectTaskCreateDto(); // \OpenAPI\Client\Model\ProjectTaskCreateDto

try {
    $result = $apiInstance->createProjectTaskAsync($tenant_id, $api_version, $x_api_version, $project_task_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->createProjectTaskAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_task_create_dto** | [**\OpenAPI\Client\Model\ProjectTaskCreateDto**](../Model/ProjectTaskCreateDto.md)|  | [optional] |

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

## `deleteProjectTaskAsync()`

```php
deleteProjectTaskAsync($tenant_id, $project_task_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a project task

Deletes a project task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_task_id = 'project_task_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteProjectTaskAsync($tenant_id, $project_task_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->deleteProjectTaskAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_task_id** | **string**|  | |
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

## `getProjectTaskByIdAsync()`

```php
getProjectTaskByIdAsync($tenant_id, $project_task_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTaskDtoEnvelope
```

Get project task by ID

Retrieves a specific project task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_task_id = 'project_task_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProjectTaskByIdAsync($tenant_id, $project_task_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->getProjectTaskByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_task_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTaskDtoEnvelope**](../Model/ProjectTaskDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTasksAsync()`

```php
getProjectTasksAsync($tenant_id, $api_version, $x_api_version, $project_task_dto_collection_query_parameters): \OpenAPI\Client\Model\ProjectTaskDtoListEnvelope
```

Get all project tasks

Retrieves all project tasks for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_task_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectTasksAsync($tenant_id, $api_version, $x_api_version, $project_task_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->getProjectTasksAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_task_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters**](../Model/ProjectTaskDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTaskDtoListEnvelope**](../Model/ProjectTaskDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTasksCountAsync()`

```php
getProjectTasksCountAsync($tenant_id, $api_version, $x_api_version, $project_task_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get project tasks count

Returns the count of project tasks for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_task_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectTasksCountAsync($tenant_id, $api_version, $x_api_version, $project_task_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->getProjectTasksCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_task_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters**](../Model/ProjectTaskDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchProjectTaskAsync()`

```php
patchProjectTaskAsync($tenant_id, $project_task_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a project task

Partially updates an existing project task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_task_id = 'project_task_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchProjectTaskAsync($tenant_id, $project_task_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->patchProjectTaskAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_task_id** | **string**|  | |
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

## `updateProjectTaskAsync()`

```php
updateProjectTaskAsync($tenant_id, $project_task_id, $api_version, $x_api_version, $project_task_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a project task

Updates an existing project task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_task_id = 'project_task_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_task_update_dto = new \OpenAPI\Client\Model\ProjectTaskUpdateDto(); // \OpenAPI\Client\Model\ProjectTaskUpdateDto

try {
    $result = $apiInstance->updateProjectTaskAsync($tenant_id, $project_task_id, $api_version, $x_api_version, $project_task_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->updateProjectTaskAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_task_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_task_update_dto** | [**\OpenAPI\Client\Model\ProjectTaskUpdateDto**](../Model/ProjectTaskUpdateDto.md)|  | [optional] |

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
