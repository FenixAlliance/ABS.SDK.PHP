# OpenAPI\Client\ProjectTimeLogsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countProjectPeriodTimeLogsAsync()**](ProjectTimeLogsApi.md#countProjectPeriodTimeLogsAsync) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/Count | Get the count of project period time logs |
| [**createProjectTimeLogAsync()**](ProjectTimeLogsApi.md#createProjectTimeLogAsync) | **POST** /api/v2/TimeTrackerService/ProjectTimeLogs | Create a new project time log |
| [**deleteProjectTimeLogAsync()**](ProjectTimeLogsApi.md#deleteProjectTimeLogAsync) | **DELETE** /api/v2/TimeTrackerService/ProjectTimeLogs/{timeLogId} | Delete a project time log |
| [**getProjectPeriodTimeLogsAsync()**](ProjectTimeLogsApi.md#getProjectPeriodTimeLogsAsync) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs | Retrieve project period time logs |
| [**getProjectTimeLogByIdAsync()**](ProjectTimeLogsApi.md#getProjectTimeLogByIdAsync) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/{timeLogId} | Retrieve a project time log by ID |
| [**getProjectTimeLogsAsync()**](ProjectTimeLogsApi.md#getProjectTimeLogsAsync) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/ForProject/{projectId} | Retrieve time logs for a project |
| [**getProjectTimeLogsByResponsibleContactAsync()**](ProjectTimeLogsApi.md#getProjectTimeLogsByResponsibleContactAsync) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/ByResponsibleContact | Retrieve time logs by responsible contact |
| [**getProjectTimeLogsCreatedByContactAsync()**](ProjectTimeLogsApi.md#getProjectTimeLogsCreatedByContactAsync) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/CreatedByContact | Retrieve time logs created by a contact |
| [**updateProjectTimeLogAsync()**](ProjectTimeLogsApi.md#updateProjectTimeLogAsync) | **PUT** /api/v2/TimeTrackerService/ProjectTimeLogs/{timeLogId} | Update a project time log |


## `countProjectPeriodTimeLogsAsync()`

```php
countProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of project period time logs

Returns the total count of time logs for a specific project period with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->countProjectPeriodTimeLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_period_id** | **string**|  | |
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



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
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
    echo 'Exception when calling ProjectTimeLogsApi->createProjectTimeLogAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
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
    echo 'Exception when calling ProjectTimeLogsApi->deleteProjectTimeLogAsync: ', $e->getMessage(), PHP_EOL;
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
getProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```

Retrieve project period time logs

Retrieves a list of time logs for a specific project period with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProjectPeriodTimeLogsAsync($tenant_id, $project_period_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->getProjectPeriodTimeLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_period_id** | **string**|  | |
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



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
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
    echo 'Exception when calling ProjectTimeLogsApi->getProjectTimeLogByIdAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
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
    echo 'Exception when calling ProjectTimeLogsApi->getProjectTimeLogsAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
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
    echo 'Exception when calling ProjectTimeLogsApi->getProjectTimeLogsByResponsibleContactAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
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
    echo 'Exception when calling ProjectTimeLogsApi->getProjectTimeLogsCreatedByContactAsync: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
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
    echo 'Exception when calling ProjectTimeLogsApi->updateProjectTimeLogAsync: ', $e->getMessage(), PHP_EOL;
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
