# OpenAPI\Client\MeApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMyAverageScoreAsync()**](MeApi.md#getMyAverageScoreAsync) | **GET** /api/v2/LearningService/Me/AverageScore | Get current user&#39;s average score |
| [**getMyCertificatesAsync()**](MeApi.md#getMyCertificatesAsync) | **GET** /api/v2/LearningService/Me/Certificates | Get current user&#39;s completion certificates |
| [**getMyCertificatesCountAsync()**](MeApi.md#getMyCertificatesCountAsync) | **GET** /api/v2/LearningService/Me/Certificates/Count | Get current user&#39;s certificates count |
| [**getMyEnrollmentsAsync()**](MeApi.md#getMyEnrollmentsAsync) | **GET** /api/v2/LearningService/Me/Enrollments | Get current user&#39;s course enrollments |
| [**getMyEnrollmentsCountAsync()**](MeApi.md#getMyEnrollmentsCountAsync) | **GET** /api/v2/LearningService/Me/Enrollments/Count | Get current user&#39;s enrollment count |
| [**getMyHoursCompletedAsync()**](MeApi.md#getMyHoursCompletedAsync) | **GET** /api/v2/LearningService/Me/HoursCompleted | Get current user&#39;s completed hours |
| [**getMyInstructorCoursesAsync()**](MeApi.md#getMyInstructorCoursesAsync) | **GET** /api/v2/LearningService/Me/InstructorCourses | Get current user&#39;s instructor courses |
| [**getMyInstructorCoursesCountAsync()**](MeApi.md#getMyInstructorCoursesCountAsync) | **GET** /api/v2/LearningService/Me/InstructorCourses/Count | Get current user&#39;s instructor courses count |
| [**getMyInstructorProfilesAsync()**](MeApi.md#getMyInstructorProfilesAsync) | **GET** /api/v2/LearningService/Me/InstructorProfiles | Get current user&#39;s instructor profiles |
| [**getMyInstructorProfilesCountAsync()**](MeApi.md#getMyInstructorProfilesCountAsync) | **GET** /api/v2/LearningService/Me/InstructorProfiles/Count | Get current user&#39;s instructor profiles count |
| [**getMyPendingTaskCountAsync()**](MeApi.md#getMyPendingTaskCountAsync) | **GET** /api/v2/LearningService/Me/PendingTasks | Get current user&#39;s pending task count |
| [**getMyStudentCoursesAsync()**](MeApi.md#getMyStudentCoursesAsync) | **GET** /api/v2/LearningService/Me/Courses | Get current user&#39;s enrolled courses |
| [**getMyStudentCoursesCountAsync()**](MeApi.md#getMyStudentCoursesCountAsync) | **GET** /api/v2/LearningService/Me/Courses/Count | Get current user&#39;s enrolled courses count |
| [**getMyStudentProfilesAsync()**](MeApi.md#getMyStudentProfilesAsync) | **GET** /api/v2/LearningService/Me/StudentProfiles | Get current user&#39;s student profiles |
| [**getMyStudentProfilesCountAsync()**](MeApi.md#getMyStudentProfilesCountAsync) | **GET** /api/v2/LearningService/Me/StudentProfiles/Count | Get current user&#39;s student profiles count |


## `getMyAverageScoreAsync()`

```php
getMyAverageScoreAsync($api_version, $x_api_version): \OpenAPI\Client\Model\AverageDtoEnvelope
```

Get current user's average score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyAverageScoreAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyAverageScoreAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AverageDtoEnvelope**](../Model/AverageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyCertificatesAsync()`

```php
getMyCertificatesAsync($api_version, $x_api_version): \OpenAPI\Client\Model\CourseCompletionCertificateDtoIReadOnlyListEnvelope
```

Get current user's completion certificates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyCertificatesAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyCertificatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseCompletionCertificateDtoIReadOnlyListEnvelope**](../Model/CourseCompletionCertificateDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyCertificatesCountAsync()`

```php
getMyCertificatesCountAsync($api_version, $x_api_version): int
```

Get current user's certificates count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyCertificatesCountAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyCertificatesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getMyEnrollmentsAsync()`

```php
getMyEnrollmentsAsync($api_version, $x_api_version): \OpenAPI\Client\Model\CourseEnrollmentDtoIReadOnlyListEnvelope
```

Get current user's course enrollments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyEnrollmentsAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyEnrollmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseEnrollmentDtoIReadOnlyListEnvelope**](../Model/CourseEnrollmentDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyEnrollmentsCountAsync()`

```php
getMyEnrollmentsCountAsync($api_version, $x_api_version): int
```

Get current user's enrollment count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyEnrollmentsCountAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyEnrollmentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getMyHoursCompletedAsync()`

```php
getMyHoursCompletedAsync($api_version, $x_api_version): \OpenAPI\Client\Model\CountDtoEnvelope
```

Get current user's completed hours

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyHoursCompletedAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyHoursCompletedAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CountDtoEnvelope**](../Model/CountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyInstructorCoursesAsync()`

```php
getMyInstructorCoursesAsync($api_version, $x_api_version): \OpenAPI\Client\Model\CourseDtoIReadOnlyListEnvelope
```

Get current user's instructor courses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyInstructorCoursesAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyInstructorCoursesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseDtoIReadOnlyListEnvelope**](../Model/CourseDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyInstructorCoursesCountAsync()`

```php
getMyInstructorCoursesCountAsync($api_version, $x_api_version): int
```

Get current user's instructor courses count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyInstructorCoursesCountAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyInstructorCoursesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getMyInstructorProfilesAsync()`

```php
getMyInstructorProfilesAsync($api_version, $x_api_version): \OpenAPI\Client\Model\InstructorProfileDtoIReadOnlyListEnvelope
```

Get current user's instructor profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyInstructorProfilesAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyInstructorProfilesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InstructorProfileDtoIReadOnlyListEnvelope**](../Model/InstructorProfileDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyInstructorProfilesCountAsync()`

```php
getMyInstructorProfilesCountAsync($api_version, $x_api_version): int
```

Get current user's instructor profiles count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyInstructorProfilesCountAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyInstructorProfilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getMyPendingTaskCountAsync()`

```php
getMyPendingTaskCountAsync($api_version, $x_api_version): \OpenAPI\Client\Model\CountDtoEnvelope
```

Get current user's pending task count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyPendingTaskCountAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyPendingTaskCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CountDtoEnvelope**](../Model/CountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyStudentCoursesAsync()`

```php
getMyStudentCoursesAsync($api_version, $x_api_version): \OpenAPI\Client\Model\CourseDtoIReadOnlyListEnvelope
```

Get current user's enrolled courses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyStudentCoursesAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyStudentCoursesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseDtoIReadOnlyListEnvelope**](../Model/CourseDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyStudentCoursesCountAsync()`

```php
getMyStudentCoursesCountAsync($api_version, $x_api_version): int
```

Get current user's enrolled courses count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyStudentCoursesCountAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyStudentCoursesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getMyStudentProfilesAsync()`

```php
getMyStudentProfilesAsync($api_version, $x_api_version): \OpenAPI\Client\Model\StudentProfileDtoIReadOnlyListEnvelope
```

Get current user's student profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyStudentProfilesAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyStudentProfilesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StudentProfileDtoIReadOnlyListEnvelope**](../Model/StudentProfileDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyStudentProfilesCountAsync()`

```php
getMyStudentProfilesCountAsync($api_version, $x_api_version): int
```

Get current user's student profiles count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMyStudentProfilesCountAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getMyStudentProfilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
