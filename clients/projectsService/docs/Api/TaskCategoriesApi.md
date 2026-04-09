# OpenAPI\Client\TaskCategoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countTenantTaskCategoriesAsync()**](TaskCategoriesApi.md#countTenantTaskCategoriesAsync) | **GET** /api/v2/ProjectsService/TaskCategories/Count | Counts task categories |
| [**createTaskCategoryAsync()**](TaskCategoriesApi.md#createTaskCategoryAsync) | **POST** /api/v2/ProjectsService/TaskCategories | Creates a new task category |
| [**deleteTaskCategoryAsync()**](TaskCategoriesApi.md#deleteTaskCategoryAsync) | **DELETE** /api/v2/ProjectsService/TaskCategories/{taskCategoryId} | Deletes a task category |
| [**getTaskCategoryByIdAsync()**](TaskCategoriesApi.md#getTaskCategoryByIdAsync) | **GET** /api/v2/ProjectsService/TaskCategories/{taskCategoryId} | Gets a task category by ID |
| [**getTaskCategoryTaskTypesAsync()**](TaskCategoriesApi.md#getTaskCategoryTaskTypesAsync) | **GET** /api/v2/ProjectsService/TaskCategories/{taskCategoryId}/Types | Retrieves task types for a category |
| [**getTenantTaskCategoriesAsync()**](TaskCategoriesApi.md#getTenantTaskCategoriesAsync) | **GET** /api/v2/ProjectsService/TaskCategories | Retrieves all task categories |
| [**updateTaskCategoryAsync()**](TaskCategoriesApi.md#updateTaskCategoryAsync) | **PUT** /api/v2/ProjectsService/TaskCategories/{taskCategoryId} | Updates a task category |


## `countTenantTaskCategoriesAsync()`

```php
countTenantTaskCategoriesAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Counts task categories

Gets the count of task categories for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->countTenantTaskCategoriesAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->countTenantTaskCategoriesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createTaskCategoryAsync()`

```php
createTaskCategoryAsync($tenant_id, $task_category_create_dto): \OpenAPI\Client\Model\TaskCategoryDto
```

Creates a new task category

Creates a new task category for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$task_category_create_dto = new \OpenAPI\Client\Model\TaskCategoryCreateDto(); // \OpenAPI\Client\Model\TaskCategoryCreateDto

try {
    $result = $apiInstance->createTaskCategoryAsync($tenant_id, $task_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->createTaskCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **task_category_create_dto** | [**\OpenAPI\Client\Model\TaskCategoryCreateDto**](../Model/TaskCategoryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTaskCategoryAsync()`

```php
deleteTaskCategoryAsync($task_category_id, $tenant_id): \OpenAPI\Client\Model\TaskCategoryDto
```

Deletes a task category

Deletes the specified task category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->deleteTaskCategoryAsync($task_category_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->deleteTaskCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskCategoryByIdAsync()`

```php
getTaskCategoryByIdAsync($task_category_id, $tenant_id): \OpenAPI\Client\Model\TaskCategoryDto
```

Gets a task category by ID

Retrieves the details of a task category using its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getTaskCategoryByIdAsync($task_category_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->getTaskCategoryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskCategoryTaskTypesAsync()`

```php
getTaskCategoryTaskTypesAsync($task_category_id, $tenant_id): \OpenAPI\Client\Model\TaskCategoryDto
```

Retrieves task types for a category

Gets all task types belonging to the specified task category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getTaskCategoryTaskTypesAsync($task_category_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->getTaskCategoryTaskTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantTaskCategoriesAsync()`

```php
getTenantTaskCategoriesAsync($tenant_id): \OpenAPI\Client\Model\TaskCategoryDtoListEnvelope
```

Retrieves all task categories

Gets all task categories for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getTenantTaskCategoriesAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->getTenantTaskCategoriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `updateTaskCategoryAsync()`

```php
updateTaskCategoryAsync($task_category_id, $tenant_id, $task_category_update_dto): \OpenAPI\Client\Model\TaskCategoryDto
```

Updates a task category

Updates the specified task category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$task_category_update_dto = new \OpenAPI\Client\Model\TaskCategoryUpdateDto(); // \OpenAPI\Client\Model\TaskCategoryUpdateDto

try {
    $result = $apiInstance->updateTaskCategoryAsync($task_category_id, $tenant_id, $task_category_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->updateTaskCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **task_category_update_dto** | [**\OpenAPI\Client\Model\TaskCategoryUpdateDto**](../Model/TaskCategoryUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
