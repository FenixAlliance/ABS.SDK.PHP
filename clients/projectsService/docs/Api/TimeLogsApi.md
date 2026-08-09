# OpenAPI\Client\TimeLogsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countProjectPeriodTimeLogsAsync()**](TimeLogsApi.md#countProjectPeriodTimeLogsAsync) | **GET** /api/v2/ProjectsService/TimeLogs/Count | Get the count of project period time logs |
| [**createProjectTimeLogAsync()**](TimeLogsApi.md#createProjectTimeLogAsync) | **POST** /api/v2/ProjectsService/TimeLogs | Create a new project time log |
| [**deleteProjectTimeLogAsync()**](TimeLogsApi.md#deleteProjectTimeLogAsync) | **DELETE** /api/v2/ProjectsService/TimeLogs/{timeLogId} | Delete a project time log |
| [**getProjectPeriodTimeLogsAsync()**](TimeLogsApi.md#getProjectPeriodTimeLogsAsync) | **GET** /api/v2/ProjectsService/TimeLogs | Retrieve project period time logs |
| [**getProjectTimeLogByIdAsync()**](TimeLogsApi.md#getProjectTimeLogByIdAsync) | **GET** /api/v2/ProjectsService/TimeLogs/{timeLogId} | Retrieve a project time log by ID |
| [**getProjectTimeLogsAsync()**](TimeLogsApi.md#getProjectTimeLogsAsync) | **GET** /api/v2/ProjectsService/TimeLogs/ForProject/{projectId} | Retrieve time logs for a project |
| [**getProjectTimeLogsByResponsibleContactAsync()**](TimeLogsApi.md#getProjectTimeLogsByResponsibleContactAsync) | **GET** /api/v2/ProjectsService/TimeLogs/ByResponsibleContact | Retrieve time logs by responsible contact |
| [**getProjectTimeLogsCreatedByContactAsync()**](TimeLogsApi.md#getProjectTimeLogsCreatedByContactAsync) | **GET** /api/v2/ProjectsService/TimeLogs/CreatedByContact | Retrieve time logs created by a contact |
| [**patchProjectTimeLogAsync()**](TimeLogsApi.md#patchProjectTimeLogAsync) | **PATCH** /api/v2/ProjectsService/TimeLogs/{timeLogId} | Patch a project time log |
| [**updateProjectTimeLogAsync()**](TimeLogsApi.md#updateProjectTimeLogAsync) | **PUT** /api/v2/ProjectsService/TimeLogs/{timeLogId} | Update a project time log |


## `countProjectPeriodTimeLogsAsync()`

```php
countProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version, $project_time_log_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of project period time logs

Returns the total count of time logs for a specific project period with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_time_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->countProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version, $project_time_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->countProjectPeriodTimeLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_period_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
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

## `createProjectTimeLogAsync()`

```php
createProjectTimeLogAsync($tenant_id, $api_version, $x_api_version, $project_time_log_create_dto)
```

Create a new project time log

Creates a new project time log entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_time_log_create_dto = new \OpenAPI\Client\Model\ProjectTimeLogCreateDto(); // \OpenAPI\Client\Model\ProjectTimeLogCreateDto

try {
    $apiInstance->createProjectTimeLogAsync($tenant_id, $api_version, $x_api_version, $project_time_log_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->createProjectTimeLogAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_time_log_create_dto** | [**\OpenAPI\Client\Model\ProjectTimeLogCreateDto**](../Model/ProjectTimeLogCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectTimeLogAsync()`

```php
deleteProjectTimeLogAsync($tenant_id, $time_log_id, $api_version, $x_api_version)
```

Delete a project time log

Deletes a project time log entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$time_log_id = 'time_log_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteProjectTimeLogAsync($tenant_id, $time_log_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->deleteProjectTimeLogAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **time_log_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectPeriodTimeLogsAsync()`

```php
getProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version, $project_time_log_dto_collection_query_parameters): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```

Retrieve project period time logs

Retrieves a list of time logs for a specific project period with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_time_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProjectTimeLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version, $project_time_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->getProjectPeriodTimeLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_period_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
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

## `getProjectTimeLogByIdAsync()`

```php
getProjectTimeLogByIdAsync($time_log_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoEnvelope
```

Retrieve a project time log by ID

Retrieves a single project time log by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$time_log_id = 'time_log_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProjectTimeLogByIdAsync($time_log_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->getProjectTimeLogByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_log_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoEnvelope**](../Model/ProjectTimeLogDtoEnvelope.md)

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
getProjectTimeLogsAsync($project_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```

Retrieve time logs for a project

Retrieves all time logs associated with the specified project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProjectTimeLogsAsync($project_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->getProjectTimeLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `getProjectTimeLogsByResponsibleContactAsync()`

```php
getProjectTimeLogsByResponsibleContactAsync($contact_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```

Retrieve time logs by responsible contact

Retrieves time logs where the specified contact is the responsible party.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProjectTimeLogsByResponsibleContactAsync($contact_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->getProjectTimeLogsByResponsibleContactAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `getProjectTimeLogsCreatedByContactAsync()`

```php
getProjectTimeLogsCreatedByContactAsync($contact_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```

Retrieve time logs created by a contact

Retrieves time logs that were created by the specified contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProjectTimeLogsCreatedByContactAsync($contact_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->getProjectTimeLogsCreatedByContactAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `patchProjectTimeLogAsync()`

```php
patchProjectTimeLogAsync($time_log_id, $tenant_id, $api_version, $x_api_version, $patch_operation)
```

Patch a project time log

Partially updates an existing project time log entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$time_log_id = 'time_log_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $apiInstance->patchProjectTimeLogAsync($time_log_id, $tenant_id, $api_version, $x_api_version, $patch_operation);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->patchProjectTimeLogAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_log_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectTimeLogAsync()`

```php
updateProjectTimeLogAsync($time_log_id, $tenant_id, $api_version, $x_api_version, $project_time_log_update_dto)
```

Update a project time log

Updates an existing project time log entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$time_log_id = 'time_log_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_time_log_update_dto = new \OpenAPI\Client\Model\ProjectTimeLogUpdateDto(); // \OpenAPI\Client\Model\ProjectTimeLogUpdateDto

try {
    $apiInstance->updateProjectTimeLogAsync($time_log_id, $tenant_id, $api_version, $x_api_version, $project_time_log_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling TimeLogsApi->updateProjectTimeLogAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_log_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_time_log_update_dto** | [**\OpenAPI\Client\Model\ProjectTimeLogUpdateDto**](../Model/ProjectTimeLogUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
