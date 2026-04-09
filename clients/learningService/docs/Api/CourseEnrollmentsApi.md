# OpenAPI\Client\CourseEnrollmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseEnrollmentAsync()**](CourseEnrollmentsApi.md#createCourseEnrollmentAsync) | **POST** /api/v2/LearningService/CourseEnrollments | Create a new course enrollment |
| [**deleteCourseEnrollmentAsync()**](CourseEnrollmentsApi.md#deleteCourseEnrollmentAsync) | **DELETE** /api/v2/LearningService/CourseEnrollments/{courseEnrollmentId} | Delete a course enrollment |
| [**getCourseEnrollmentAsync()**](CourseEnrollmentsApi.md#getCourseEnrollmentAsync) | **GET** /api/v2/LearningService/CourseEnrollments/{courseEnrollmentId} | Get course enrollment by ID |
| [**getEnrollmentsAsync()**](CourseEnrollmentsApi.md#getEnrollmentsAsync) | **GET** /api/v2/LearningService/CourseEnrollments | Get all course enrollments |
| [**getEnrollmentsCountAsync()**](CourseEnrollmentsApi.md#getEnrollmentsCountAsync) | **GET** /api/v2/LearningService/CourseEnrollments/Count | Get course enrollments count |
| [**getStudentCourseEnrollmentsAsync()**](CourseEnrollmentsApi.md#getStudentCourseEnrollmentsAsync) | **GET** /api/v2/LearningService/CourseEnrollments/Student/{studentProfileId} | Get enrollments by student |
| [**updateCourseEnrollmentAsync()**](CourseEnrollmentsApi.md#updateCourseEnrollmentAsync) | **PUT** /api/v2/LearningService/CourseEnrollments/{courseEnrollmentId} | Update a course enrollment |


## `createCourseEnrollmentAsync()`

```php
createCourseEnrollmentAsync($tenant_id, $api_version, $x_api_version, $course_enrollment_create_dto)
```

Create a new course enrollment

Creates a new course enrollment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_enrollment_create_dto = new \OpenAPI\Client\Model\CourseEnrollmentCreateDto(); // \OpenAPI\Client\Model\CourseEnrollmentCreateDto

try {
    $apiInstance->createCourseEnrollmentAsync($tenant_id, $api_version, $x_api_version, $course_enrollment_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentsApi->createCourseEnrollmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_enrollment_create_dto** | [**\OpenAPI\Client\Model\CourseEnrollmentCreateDto**](../Model/CourseEnrollmentCreateDto.md)|  | [optional] |

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

## `deleteCourseEnrollmentAsync()`

```php
deleteCourseEnrollmentAsync($tenant_id, $course_enrollment_id, $api_version, $x_api_version)
```

Delete a course enrollment

Deletes a course enrollment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_enrollment_id = 'course_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseEnrollmentAsync($tenant_id, $course_enrollment_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentsApi->deleteCourseEnrollmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_enrollment_id** | **string**|  | |
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

## `getCourseEnrollmentAsync()`

```php
getCourseEnrollmentAsync($tenant_id, $course_enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseEnrollmentDto
```

Get course enrollment by ID

Retrieves a specific course enrollment by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_enrollment_id = 'course_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseEnrollmentAsync($tenant_id, $course_enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentsApi->getCourseEnrollmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseEnrollmentDto**](../Model/CourseEnrollmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollmentsAsync()`

```php
getEnrollmentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseEnrollmentDto[]
```

Get all course enrollments

Retrieves all course enrollments for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getEnrollmentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentsApi->getEnrollmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseEnrollmentDto[]**](../Model/CourseEnrollmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollmentsCountAsync()`

```php
getEnrollmentsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course enrollments count

Returns the count of course enrollments for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getEnrollmentsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentsApi->getEnrollmentsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getStudentCourseEnrollmentsAsync()`

```php
getStudentCourseEnrollmentsAsync($tenant_id, $student_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseEnrollmentDto[]
```

Get enrollments by student

Retrieves all enrollments for a specific student.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$student_profile_id = 'student_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getStudentCourseEnrollmentsAsync($tenant_id, $student_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentsApi->getStudentCourseEnrollmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **student_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseEnrollmentDto[]**](../Model/CourseEnrollmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCourseEnrollmentAsync()`

```php
updateCourseEnrollmentAsync($tenant_id, $course_enrollment_id, $api_version, $x_api_version, $course_enrollment_update_dto)
```

Update a course enrollment

Updates an existing course enrollment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_enrollment_id = 'course_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_enrollment_update_dto = new \OpenAPI\Client\Model\CourseEnrollmentUpdateDto(); // \OpenAPI\Client\Model\CourseEnrollmentUpdateDto

try {
    $apiInstance->updateCourseEnrollmentAsync($tenant_id, $course_enrollment_id, $api_version, $x_api_version, $course_enrollment_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentsApi->updateCourseEnrollmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_enrollment_update_dto** | [**\OpenAPI\Client\Model\CourseEnrollmentUpdateDto**](../Model/CourseEnrollmentUpdateDto.md)|  | [optional] |

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
