# OpenAPI\Client\ProjectsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectAsync()**](ProjectsApi.md#createProjectAsync) | **POST** /api/v2/ProjectsService/Projects | Creates a new project |
| [**createProjectPeriodAsync()**](ProjectsApi.md#createProjectPeriodAsync) | **POST** /api/v2/ProjectsService/Projects/{projectId}/Periods | Creates a project period |
| [**createProjectTaskAsync()**](ProjectsApi.md#createProjectTaskAsync) | **POST** /api/v2/ProjectsService/Projects/{projectId}/Tasks | Creates a project task |
| [**deleteProjectAsync()**](ProjectsApi.md#deleteProjectAsync) | **DELETE** /api/v2/ProjectsService/Projects/{projectId} | Deletes a project |
| [**deleteProjectPeriodAsync()**](ProjectsApi.md#deleteProjectPeriodAsync) | **DELETE** /api/v2/ProjectsService/Projects/{projectId}/Periods/{projectPeriodId} | Deletes a project period |
| [**deleteProjectTaskAsync()**](ProjectsApi.md#deleteProjectTaskAsync) | **DELETE** /api/v2/ProjectsService/Projects/{projectId}/Tasks/{projectTaskId} | Deletes a project task |
| [**getProjectByIdAsync()**](ProjectsApi.md#getProjectByIdAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId} | Gets a project by ID |
| [**getProjectPeriodsAsync()**](ProjectsApi.md#getProjectPeriodsAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/Periods | Retrieves project periods |
| [**getProjectTaskCategoriesAsync()**](ProjectsApi.md#getProjectTaskCategoriesAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TaskCategories | Retrieves project task categories |
| [**getProjectTaskCategoriesCountAsync()**](ProjectsApi.md#getProjectTaskCategoriesCountAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TaskCategories/Count | Counts project task categories |
| [**getProjectTasksAsync()**](ProjectsApi.md#getProjectTasksAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/Tasks | Retrieves project tasks |
| [**getProjectTasksCountAsync()**](ProjectsApi.md#getProjectTasksCountAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/Tasks/Count | Counts project tasks |
| [**getProjectTimeLogsAsync()**](ProjectsApi.md#getProjectTimeLogsAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TimeLogs | Retrieves project time logs |
| [**getProjectTimeLogsCountAsync()**](ProjectsApi.md#getProjectTimeLogsCountAsync) | **GET** /api/v2/ProjectsService/Projects/{projectId}/TimeLogs/Count | Counts project time logs |
| [**getProjectsByTenantIdAsync()**](ProjectsApi.md#getProjectsByTenantIdAsync) | **GET** /api/v2/ProjectsService/Projects | Retrieves all projects |
| [**getProjectsCountByTenantIdAsync()**](ProjectsApi.md#getProjectsCountByTenantIdAsync) | **GET** /api/v2/ProjectsService/Projects/Count | Counts projects |
| [**updateProjectAsync()**](ProjectsApi.md#updateProjectAsync) | **PUT** /api/v2/ProjectsService/Projects/{projectId} | Updates a project |
| [**updateProjectPeriodAsync()**](ProjectsApi.md#updateProjectPeriodAsync) | **PUT** /api/v2/ProjectsService/Projects/{projectId}/Periods/{projectPeriodId} | Updates a project period |
| [**updateProjectTaskAsync()**](ProjectsApi.md#updateProjectTaskAsync) | **PUT** /api/v2/ProjectsService/Projects/{projectId}/Tasks/{projectTaskId} | Updates a project task |


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

## `createProjectTaskAsync()`

```php
createProjectTaskAsync($project_id, $tenant_id, $project_task_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
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
    $result = $apiInstance->createProjectTaskAsync($project_id, $tenant_id, $project_task_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProjectTaskAsync: ', $e->getMessage(), PHP_EOL;
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

## `deleteProjectTaskAsync()`

```php
deleteProjectTaskAsync($tenant_id, $project_id, $project_task_id): \OpenAPI\Client\Model\EmptyEnvelope
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
    $result = $apiInstance->deleteProjectTaskAsync($tenant_id, $project_id, $project_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProjectTaskAsync: ', $e->getMessage(), PHP_EOL;
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
getProjectTaskCategoriesAsync($project_id, $tenant_id): \OpenAPI\Client\Model\TaskCategoryDtoListEnvelope
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

try {
    $result = $apiInstance->getProjectTaskCategoriesAsync($project_id, $tenant_id);
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

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDtoListEnvelope**](../Model/TaskCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTaskCategoriesCountAsync()`

```php
getProjectTaskCategoriesCountAsync($project_id, $tenant_id): \OpenAPI\Client\Model\Int32Envelope
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

try {
    $result = $apiInstance->getProjectTaskCategoriesCountAsync($project_id, $tenant_id);
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

## `getProjectTasksAsync()`

```php
getProjectTasksAsync($project_id, $tenant_id): \OpenAPI\Client\Model\ProjectTaskDtoListEnvelope
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

try {
    $result = $apiInstance->getProjectTasksAsync($project_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectTasksAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectTaskDtoListEnvelope**](../Model/ProjectTaskDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTasksCountAsync()`

```php
getProjectTasksCountAsync($project_id, $tenant_id): \OpenAPI\Client\Model\Int32Envelope
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

try {
    $result = $apiInstance->getProjectTasksCountAsync($project_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectTasksCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |

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

## `getProjectTimeLogsAsync()`

```php
getProjectTimeLogsAsync($project_id, $tenant_id): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
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

try {
    $result = $apiInstance->getProjectTimeLogsAsync($project_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectTimeLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope**](../Model/ProjectTimeLogDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectTimeLogsCountAsync()`

```php
getProjectTimeLogsCountAsync($project_id, $tenant_id): \OpenAPI\Client\Model\Int32Envelope
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

try {
    $result = $apiInstance->getProjectTimeLogsCountAsync($project_id, $tenant_id);
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

## `getProjectsByTenantIdAsync()`

```php
getProjectsByTenantIdAsync($tenant_id): \OpenAPI\Client\Model\ProjectDtoListEnvelope
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

try {
    $result = $apiInstance->getProjectsByTenantIdAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectsByTenantIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectDtoListEnvelope**](../Model/ProjectDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectsCountByTenantIdAsync()`

```php
getProjectsCountByTenantIdAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
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

try {
    $result = $apiInstance->getProjectsCountByTenantIdAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectsCountByTenantIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

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

## `updateProjectTaskAsync()`

```php
updateProjectTaskAsync($project_id, $project_task_id, $tenant_id, $project_task_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
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
    $result = $apiInstance->updateProjectTaskAsync($project_id, $project_task_id, $tenant_id, $project_task_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProjectTaskAsync: ', $e->getMessage(), PHP_EOL;
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
