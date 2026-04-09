# OpenAPI\Client\CourseAssignmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseAssignmentAsync()**](CourseAssignmentsApi.md#createCourseAssignmentAsync) | **POST** /api/v2/LearningService/CourseAssignments | Create a new course assignment |
| [**deleteCourseAssignmentAsync()**](CourseAssignmentsApi.md#deleteCourseAssignmentAsync) | **DELETE** /api/v2/LearningService/CourseAssignments/{assignmentId} | Delete a course assignment |
| [**getCourseAssignmentByIdAsync()**](CourseAssignmentsApi.md#getCourseAssignmentByIdAsync) | **GET** /api/v2/LearningService/CourseAssignments/{assignmentId} | Get course assignment by ID |
| [**getCourseAssignmentsAsync()**](CourseAssignmentsApi.md#getCourseAssignmentsAsync) | **GET** /api/v2/LearningService/CourseAssignments | Get all course assignments |
| [**getCourseAssignmentsCountAsync()**](CourseAssignmentsApi.md#getCourseAssignmentsCountAsync) | **GET** /api/v2/LearningService/CourseAssignments/Count | Get course assignments count |
| [**updateCourseAssignmentAsync()**](CourseAssignmentsApi.md#updateCourseAssignmentAsync) | **PUT** /api/v2/LearningService/CourseAssignments/{assignmentId} | Update a course assignment |


## `createCourseAssignmentAsync()`

```php
createCourseAssignmentAsync($tenant_id, $api_version, $x_api_version, $course_assignment_create_dto)
```

Create a new course assignment

Creates a new course assignment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_assignment_create_dto = new \OpenAPI\Client\Model\CourseAssignmentCreateDto(); // \OpenAPI\Client\Model\CourseAssignmentCreateDto

try {
    $apiInstance->createCourseAssignmentAsync($tenant_id, $api_version, $x_api_version, $course_assignment_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentsApi->createCourseAssignmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_assignment_create_dto** | [**\OpenAPI\Client\Model\CourseAssignmentCreateDto**](../Model/CourseAssignmentCreateDto.md)|  | [optional] |

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

## `deleteCourseAssignmentAsync()`

```php
deleteCourseAssignmentAsync($tenant_id, $assignment_id, $api_version, $x_api_version)
```

Delete a course assignment

Deletes a course assignment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$assignment_id = 'assignment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseAssignmentAsync($tenant_id, $assignment_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentsApi->deleteCourseAssignmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **assignment_id** | **string**|  | |
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

## `getCourseAssignmentByIdAsync()`

```php
getCourseAssignmentByIdAsync($assignment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseAssignmentDto
```

Get course assignment by ID

Retrieves a specific course assignment by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assignment_id = 'assignment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentByIdAsync($assignment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentsApi->getCourseAssignmentByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assignment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseAssignmentDto**](../Model/CourseAssignmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseAssignmentsAsync()`

```php
getCourseAssignmentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseAssignmentDto[]
```

Get all course assignments

Retrieves all course assignments for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentsApi->getCourseAssignmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseAssignmentDto[]**](../Model/CourseAssignmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseAssignmentsCountAsync()`

```php
getCourseAssignmentsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course assignments count

Returns the count of course assignments for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentsApi->getCourseAssignmentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCourseAssignmentAsync()`

```php
updateCourseAssignmentAsync($tenant_id, $assignment_id, $api_version, $x_api_version, $course_assignment_update_dto)
```

Update a course assignment

Updates an existing course assignment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$assignment_id = 'assignment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_assignment_update_dto = new \OpenAPI\Client\Model\CourseAssignmentUpdateDto(); // \OpenAPI\Client\Model\CourseAssignmentUpdateDto

try {
    $apiInstance->updateCourseAssignmentAsync($tenant_id, $assignment_id, $api_version, $x_api_version, $course_assignment_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentsApi->updateCourseAssignmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **assignment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_assignment_update_dto** | [**\OpenAPI\Client\Model\CourseAssignmentUpdateDto**](../Model/CourseAssignmentUpdateDto.md)|  | [optional] |

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
