# OpenAPI\Client\CourseAssignmentTypesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseAssignmentTypeAsync()**](CourseAssignmentTypesApi.md#createCourseAssignmentTypeAsync) | **POST** /api/v2/LearningService/CourseAssignmentTypes | Create a course assignment type |
| [**deleteCourseAssignmentTypeAsync()**](CourseAssignmentTypesApi.md#deleteCourseAssignmentTypeAsync) | **DELETE** /api/v2/LearningService/CourseAssignmentTypes/{assignmentTypeId} | Delete a course assignment type |
| [**getCourseAssignmentTypeByIdAsync()**](CourseAssignmentTypesApi.md#getCourseAssignmentTypeByIdAsync) | **GET** /api/v2/LearningService/CourseAssignmentTypes/{assignmentTypeId} | Get course assignment type by ID |
| [**getCourseAssignmentTypesAsync()**](CourseAssignmentTypesApi.md#getCourseAssignmentTypesAsync) | **GET** /api/v2/LearningService/CourseAssignmentTypes | Get all course assignment types |
| [**getCourseAssignmentTypesCountAsync()**](CourseAssignmentTypesApi.md#getCourseAssignmentTypesCountAsync) | **GET** /api/v2/LearningService/CourseAssignmentTypes/Count | Get course assignment types count |
| [**updateCourseAssignmentTypeAsync()**](CourseAssignmentTypesApi.md#updateCourseAssignmentTypeAsync) | **PUT** /api/v2/LearningService/CourseAssignmentTypes/{assignmentTypeId} | Update a course assignment type |


## `createCourseAssignmentTypeAsync()`

```php
createCourseAssignmentTypeAsync($tenant_id, $api_version, $x_api_version, $course_assignment_type_create_dto)
```

Create a course assignment type

Creates a new course assignment type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_assignment_type_create_dto = new \OpenAPI\Client\Model\CourseAssignmentTypeCreateDto(); // \OpenAPI\Client\Model\CourseAssignmentTypeCreateDto

try {
    $apiInstance->createCourseAssignmentTypeAsync($tenant_id, $api_version, $x_api_version, $course_assignment_type_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentTypesApi->createCourseAssignmentTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_assignment_type_create_dto** | [**\OpenAPI\Client\Model\CourseAssignmentTypeCreateDto**](../Model/CourseAssignmentTypeCreateDto.md)|  | [optional] |

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

## `deleteCourseAssignmentTypeAsync()`

```php
deleteCourseAssignmentTypeAsync($tenant_id, $assignment_type_id, $api_version, $x_api_version)
```

Delete a course assignment type

Deletes a course assignment type by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$assignment_type_id = 'assignment_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseAssignmentTypeAsync($tenant_id, $assignment_type_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentTypesApi->deleteCourseAssignmentTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **assignment_type_id** | **string**|  | |
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

## `getCourseAssignmentTypeByIdAsync()`

```php
getCourseAssignmentTypeByIdAsync($assignment_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseAssignmentTypeDto
```

Get course assignment type by ID

Retrieves a specific course assignment type by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assignment_type_id = 'assignment_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentTypeByIdAsync($assignment_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentTypesApi->getCourseAssignmentTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assignment_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseAssignmentTypeDto**](../Model/CourseAssignmentTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseAssignmentTypesAsync()`

```php
getCourseAssignmentTypesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseAssignmentTypeDto[]
```

Get all course assignment types

Retrieves all course assignment types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentTypesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentTypesApi->getCourseAssignmentTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseAssignmentTypeDto[]**](../Model/CourseAssignmentTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseAssignmentTypesCountAsync()`

```php
getCourseAssignmentTypesCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course assignment types count

Returns the count of course assignment types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentTypesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentTypesApi->getCourseAssignmentTypesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseAssignmentTypeAsync()`

```php
updateCourseAssignmentTypeAsync($tenant_id, $assignment_type_id, $api_version, $x_api_version, $course_assignment_type_update_dto)
```

Update a course assignment type

Updates an existing course assignment type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$assignment_type_id = 'assignment_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_assignment_type_update_dto = new \OpenAPI\Client\Model\CourseAssignmentTypeUpdateDto(); // \OpenAPI\Client\Model\CourseAssignmentTypeUpdateDto

try {
    $apiInstance->updateCourseAssignmentTypeAsync($tenant_id, $assignment_type_id, $api_version, $x_api_version, $course_assignment_type_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentTypesApi->updateCourseAssignmentTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **assignment_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_assignment_type_update_dto** | [**\OpenAPI\Client\Model\CourseAssignmentTypeUpdateDto**](../Model/CourseAssignmentTypeUpdateDto.md)|  | [optional] |

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
