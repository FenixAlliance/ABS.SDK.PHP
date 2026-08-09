# OpenAPI\Client\ProjectsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectAsync()**](ProjectsApi.md#createProjectAsync) | **POST** /api/v2/ProjectsService/Projects | Creates a new project |
| [**createProjectPeriodAsync()**](ProjectsApi.md#createProjectPeriodAsync) | **POST** /api/v2/ProjectsService/Projects/{projectId}/Periods | Creates a project period |
| [**createTaskForProjectAsync()**](ProjectsApi.md#createTaskForProjectAsync) | **POST** /api/v2/ProjectsService/Projects/{projectId}/Tasks | Creates a project task |
| [**deleteProjectAsync()**](ProjectsApi.md#deleteProjectAsync) | **DELETE** /api/v2/ProjectsService/Projects/{projectId} | Deletes a project |
| [**deleteProjectPeriodAsync()**](ProjectsApi.md#deleteProjectPeriodAsync) | **DELETE** /api/v2/ProjectsService/Projects/{projectId}/Periods/{projectPeriodId} | Deletes a project period |
| [**deleteTaskForProjectAsync()**](ProjectsApi.md#deleteTaskForProjectAsync) | **DELETE** /api/v2/ProjectsService/Projects/{projectId}/Tasks/{projectTaskId} | Deletes a project task |
| [**getProjectByIdAsync()**](ProjectsApi.md#getProjectByIdAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId} | Gets a project by ID |
| [**getProjectPeriodsAsync()**](ProjectsApi.md#getProjectPeriodsAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/Periods | Retrieves project periods |
| [**getProjectTaskCategoriesAsync()**](ProjectsApi.md#getProjectTaskCategoriesAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TaskCategories | Retrieves project task categories |
| [**getProjectTaskCategoriesCountAsync()**](ProjectsApi.md#getProjectTaskCategoriesCountAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TaskCategories/Count | Counts project task categories |
| [**getProjectTimeLogsCountAsync()**](ProjectsApi.md#getProjectTimeLogsCountAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TimeLogs/Count | Counts project time logs |
| [**getProjectsByTenantIdAsync()**](ProjectsApi.md#getProjectsByTenantIdAsync) | **GET** /api/v2/ProjectsService/Projects | Retrieves all projects |
| [**getProjectsCountByTenantIdAsync()**](ProjectsApi.md#getProjectsCountByTenantIdAsync) | **GET** /api/v2/ProjectsService/Projects/Count | Counts projects |
| [**getTasksForProjectAsync()**](ProjectsApi.md#getTasksForProjectAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/Tasks | Retrieves project tasks |
| [**getTasksForProjectCountAsync()**](ProjectsApi.md#getTasksForProjectCountAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/Tasks/Count | Counts project tasks |
| [**getTimeLogsForProjectAsync()**](ProjectsApi.md#getTimeLogsForProjectAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TimeLogs | Retrieves project time logs |
| [**patchProjectAsync()**](ProjectsApi.md#patchProjectAsync) | **PATCH** /api/v2/ProjectsService/Projects/{projectId} | Patches a project |
| [**patchProjectPeriodAsync()**](ProjectsApi.md#patchProjectPeriodAsync) | **PATCH** /api/v2/ProjectsService/Projects/{projectId}/Periods/{projectPeriodId} | Patches a project period |
| [**patchTaskForProjectAsync()**](ProjectsApi.md#patchTaskForProjectAsync) | **PATCH** /api/v2/ProjectsService/Projects/{projectId}/Tasks/{projectTaskId} | Patches a project task |
| [**updateProjectAsync()**](ProjectsApi.md#updateProjectAsync) | **PUT** /api/v2/ProjectsService/Projects/{projectId} | Updates a project |
| [**updateProjectPeriodAsync()**](ProjectsApi.md#updateProjectPeriodAsync) | **PUT** /api/v2/ProjectsService/Projects/{projectId}/Periods/{projectPeriodId} | Updates a project period |
| [**updateTaskForProjectAsync()**](ProjectsApi.md#updateTaskForProjectAsync) | **PUT** /api/v2/ProjectsService/Projects/{projectId}/Tasks/{projectTaskId} | Updates a project task |


## `createProjectAsync()`

```php
createProjectAsync($tenant_id, $project_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new project

Creates a new project for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_create_dto = new \OpenAPI\Client\Model\ProjectCreateDto(); // \OpenAPI\Client\Model\ProjectCreateDto

try {
    $result = $apiInstance->createProjectAsync($tenant_id, $project_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_create_dto** | [**\OpenAPI\Client\Model\ProjectCreateDto**](../Model/ProjectCreateDto.md)|  | [optional] |

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

## `createProjectPeriodAsync()`

```php
createProjectPeriodAsync($project_id, $tenant_id, $project_period_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a project period

Creates a new period for the specified project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_period_create_dto = new \OpenAPI\Client\Model\ProjectPeriodCreateDto(); // \OpenAPI\Client\Model\ProjectPeriodCreateDto

try {
    $result = $apiInstance->createProjectPeriodAsync($project_id, $tenant_id, $project_period_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProjectPeriodAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **project_period_create_dto** | [**\OpenAPI\Client\Model\ProjectPeriodCreateDto**](../Model/ProjectPeriodCreateDto.md)|  | [optional] |

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

## `createTaskForProjectAsync()`

```php
createTaskForProjectAsync($project_id, $tenant_id, $project_task_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a project task

Creates a new task for the specified project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_task_create_dto = new \OpenAPI\Client\Model\ProjectTaskCreateDto(); // \OpenAPI\Client\Model\ProjectTaskCreateDto

try {
    $result = $apiInstance->createTaskForProjectAsync($project_id, $tenant_id, $project_task_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createTaskForProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
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

## `deleteProjectAsync()`

```php
deleteProjectAsync($project_id, $tenant_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a project

Deletes the specified project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->deleteProjectAsync($project_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |

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

## `deleteProjectPeriodAsync()`

```php
deleteProjectPeriodAsync($project_id, $project_period_id, $tenant_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a project period

Deletes the specified period from a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->deleteProjectPeriodAsync($project_id, $project_period_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProjectPeriodAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **project_period_id** | **string**|  | |
| **tenant_id** | **string**|  | |

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

## `deleteTaskForProjectAsync()`

```php
deleteTaskForProjectAsync($tenant_id, $project_id, $project_task_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a project task

Deletes the specified task from a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_id = 'project_id_example'; // string
$project_task_id = 'project_task_id_example'; // string

try {
    $result = $apiInstance->deleteTaskForProjectAsync($tenant_id, $project_id, $project_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteTaskForProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_id** | **string**|  | |
| **project_task_id** | **string**|  | |

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

## `getProjectByIdAsync()`

```php
getProjectByIdAsync($project_id, $tenant_id): \OpenAPI\Client\Model\ProjectDtoEnvelope
```

Gets a project by ID

Retrieves the details of a project using its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getProjectByIdAsync($project_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectDtoEnvelope**](../Model/ProjectDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectPeriodsAsync()`

```php
getProjectPeriodsAsync($project_id, $tenant_id): \OpenAPI\Client\Model\ProjectPeriodDtoListEnvelope
```

Retrieves project periods

Gets all periods for a specific project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getProjectPeriodsAsync($project_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectPeriodsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectPeriodDtoListEnvelope**](../Model/ProjectPeriodDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTaskCategoriesAsync()`

```php
getProjectTaskCategoriesAsync($project_id, $tenant_id, $task_category_dto_collection_query_parameters): \OpenAPI\Client\Model\TaskCategoryDtoListEnvelope
```

Retrieves project task categories

Gets all task categories for a specific project with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$task_category_dto_collection_query_parameters = new \OpenAPI\Client\Model\TaskCategoryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\TaskCategoryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectTaskCategoriesAsync($project_id, $tenant_id, $task_category_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectTaskCategoriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **task_category_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\TaskCategoryDtoCollectionQueryParameters**](../Model/TaskCategoryDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDtoListEnvelope**](../Model/TaskCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTaskCategoriesCountAsync()`

```php
getProjectTaskCategoriesCountAsync($project_id, $tenant_id, $task_category_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Counts project task categories

Gets the count of task categories for a specific project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$task_category_dto_collection_query_parameters = new \OpenAPI\Client\Model\TaskCategoryDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\TaskCategoryDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectTaskCategoriesCountAsync($project_id, $tenant_id, $task_category_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectTaskCategoriesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **task_category_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\TaskCategoryDtoCollectionQueryParameters**](../Model/TaskCategoryDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getProjectTimeLogsCountAsync()`

```php
getProjectTimeLogsCountAsync($project_id, $tenant_id, $project_time_log_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Counts project time logs

Gets the count of time log entries for a specific project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_time_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectTimeLogsCountAsync($project_id, $tenant_id, $project_time_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectTimeLogsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **project_time_log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters**](../Model/ProjectTimeLogDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getProjectsByTenantIdAsync()`

```php
getProjectsByTenantIdAsync($tenant_id, $project_dto_collection_query_parameters): \OpenAPI\Client\Model\ProjectDtoListEnvelope
```

Retrieves all projects

Gets all projects for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectsByTenantIdAsync($tenant_id, $project_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectsByTenantIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProjectDtoCollectionQueryParameters**](../Model/ProjectDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectDtoListEnvelope**](../Model/ProjectDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectsCountByTenantIdAsync()`

```php
getProjectsCountByTenantIdAsync($tenant_id, $project_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Counts projects

Gets the count of projects for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectsCountByTenantIdAsync($tenant_id, $project_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectsCountByTenantIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProjectDtoCollectionQueryParameters**](../Model/ProjectDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getTasksForProjectAsync()`

```php
getTasksForProjectAsync($project_id, $tenant_id, $project_task_dto_collection_query_parameters): \OpenAPI\Client\Model\ProjectTaskDtoListEnvelope
```

Retrieves project tasks

Gets all tasks for a specific project with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_task_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters

try {
    $result = $apiInstance->getTasksForProjectAsync($project_id, $tenant_id, $project_task_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getTasksForProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
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

## `getTasksForProjectCountAsync()`

```php
getTasksForProjectCountAsync($project_id, $tenant_id, $project_task_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Counts project tasks

Gets the count of tasks for a specific project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_task_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTaskDtoCollectionQueryParameters

try {
    $result = $apiInstance->getTasksForProjectCountAsync($project_id, $tenant_id, $project_task_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getTasksForProjectCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
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

## `getTimeLogsForProjectAsync()`

```php
getTimeLogsForProjectAsync($project_id, $tenant_id, $project_time_log_dto_collection_query_parameters): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```

Retrieves project time logs

Gets all time log entries for a specific project with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_time_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getTimeLogsForProjectAsync($project_id, $tenant_id, $project_time_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getTimeLogsForProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **project_time_log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters**](../Model/ProjectTimeLogDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope**](../Model/ProjectTimeLogDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProjectAsync()`

```php
patchProjectAsync($project_id, $tenant_id, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patches a project

Partially updates the specified project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchProjectAsync($project_id, $tenant_id, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->patchProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
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

## `patchProjectPeriodAsync()`

```php
patchProjectPeriodAsync($project_id, $project_period_id, $tenant_id, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patches a project period

Partially updates the specified period for a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchProjectPeriodAsync($project_id, $project_period_id, $tenant_id, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->patchProjectPeriodAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **project_period_id** | **string**|  | |
| **tenant_id** | **string**|  | |
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

## `patchTaskForProjectAsync()`

```php
patchTaskForProjectAsync($project_id, $project_task_id, $tenant_id, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patches a project task

Partially updates the specified task in a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$project_task_id = 'project_task_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchTaskForProjectAsync($project_id, $project_task_id, $tenant_id, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->patchTaskForProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **project_task_id** | **string**|  | |
| **tenant_id** | **string**|  | |
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

## `updateProjectAsync()`

```php
updateProjectAsync($project_id, $tenant_id, $project_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a project

Updates the specified project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_update_dto = new \OpenAPI\Client\Model\ProjectUpdateDto(); // \OpenAPI\Client\Model\ProjectUpdateDto

try {
    $result = $apiInstance->updateProjectAsync($project_id, $tenant_id, $project_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **project_update_dto** | [**\OpenAPI\Client\Model\ProjectUpdateDto**](../Model/ProjectUpdateDto.md)|  | [optional] |

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

## `updateProjectPeriodAsync()`

```php
updateProjectPeriodAsync($project_id, $project_period_id, $tenant_id, $project_period_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a project period

Updates the specified period for a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_period_update_dto = new \OpenAPI\Client\Model\ProjectPeriodUpdateDto(); // \OpenAPI\Client\Model\ProjectPeriodUpdateDto

try {
    $result = $apiInstance->updateProjectPeriodAsync($project_id, $project_period_id, $tenant_id, $project_period_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProjectPeriodAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **project_period_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **project_period_update_dto** | [**\OpenAPI\Client\Model\ProjectPeriodUpdateDto**](../Model/ProjectPeriodUpdateDto.md)|  | [optional] |

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

## `updateTaskForProjectAsync()`

```php
updateTaskForProjectAsync($project_id, $project_task_id, $tenant_id, $project_task_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a project task

Updates the specified task in a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$project_task_id = 'project_task_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$project_task_update_dto = new \OpenAPI\Client\Model\ProjectTaskUpdateDto(); // \OpenAPI\Client\Model\ProjectTaskUpdateDto

try {
    $result = $apiInstance->updateTaskForProjectAsync($project_id, $project_task_id, $tenant_id, $project_task_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateTaskForProjectAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **project_task_id** | **string**|  | |
| **tenant_id** | **string**|  | |
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
