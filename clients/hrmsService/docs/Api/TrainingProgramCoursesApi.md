# OpenAPI\Client\TrainingProgramCoursesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTrainingProgramCourseAsync()**](TrainingProgramCoursesApi.md#createTrainingProgramCourseAsync) | **POST** /api/v2/HrmsService/TrainingProgramCourses | Create a training program course |
| [**deleteTrainingProgramCourseAsync()**](TrainingProgramCoursesApi.md#deleteTrainingProgramCourseAsync) | **DELETE** /api/v2/HrmsService/TrainingProgramCourses/{courseId} | Delete a training program course |
| [**getTrainingProgramCourseByIdAsync()**](TrainingProgramCoursesApi.md#getTrainingProgramCourseByIdAsync) | **GET** /api/v2/HrmsService/TrainingProgramCourses/{courseId} | Get training program course by ID |
| [**getTrainingProgramCoursesAsync()**](TrainingProgramCoursesApi.md#getTrainingProgramCoursesAsync) | **GET** /api/v2/HrmsService/TrainingProgramCourses | Get training program courses |
| [**getTrainingProgramCoursesCountAsync()**](TrainingProgramCoursesApi.md#getTrainingProgramCoursesCountAsync) | **GET** /api/v2/HrmsService/TrainingProgramCourses/Count | Count training program courses |
| [**patchTrainingProgramCourseAsync()**](TrainingProgramCoursesApi.md#patchTrainingProgramCourseAsync) | **PATCH** /api/v2/HrmsService/TrainingProgramCourses/{courseId} | Patch a training program course |
| [**updateTrainingProgramCourseAsync()**](TrainingProgramCoursesApi.md#updateTrainingProgramCourseAsync) | **PUT** /api/v2/HrmsService/TrainingProgramCourses/{courseId} | Update a training program course |


## `createTrainingProgramCourseAsync()`

```php
createTrainingProgramCourseAsync($tenant_id, $api_version, $x_api_version, $training_program_course_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a training program course

Creates a new training program course for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramCoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$training_program_course_create_dto = new \OpenAPI\Client\Model\TrainingProgramCourseCreateDto(); // \OpenAPI\Client\Model\TrainingProgramCourseCreateDto

try {
    $result = $apiInstance->createTrainingProgramCourseAsync($tenant_id, $api_version, $x_api_version, $training_program_course_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramCoursesApi->createTrainingProgramCourseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **training_program_course_create_dto** | [**\OpenAPI\Client\Model\TrainingProgramCourseCreateDto**](../Model/TrainingProgramCourseCreateDto.md)|  | [optional] |

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

## `deleteTrainingProgramCourseAsync()`

```php
deleteTrainingProgramCourseAsync($tenant_id, $course_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a training program course

Deletes a training program course for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramCoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_id = 'course_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTrainingProgramCourseAsync($tenant_id, $course_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramCoursesApi->deleteTrainingProgramCourseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_id** | **string**|  | |
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

## `getTrainingProgramCourseByIdAsync()`

```php
getTrainingProgramCourseByIdAsync($tenant_id, $course_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TrainingProgramCourseDtoEnvelope
```

Get training program course by ID

Retrieves a specific training program course by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramCoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_id = 'course_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTrainingProgramCourseByIdAsync($tenant_id, $course_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramCoursesApi->getTrainingProgramCourseByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrainingProgramCourseDtoEnvelope**](../Model/TrainingProgramCourseDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrainingProgramCoursesAsync()`

```php
getTrainingProgramCoursesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TrainingProgramCourseDtoListEnvelope
```

Get training program courses

Retrieves training program courses for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramCoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTrainingProgramCoursesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramCoursesApi->getTrainingProgramCoursesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrainingProgramCourseDtoListEnvelope**](../Model/TrainingProgramCourseDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrainingProgramCoursesCountAsync()`

```php
getTrainingProgramCoursesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count training program courses

Counts training program courses for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramCoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTrainingProgramCoursesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramCoursesApi->getTrainingProgramCoursesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `patchTrainingProgramCourseAsync()`

```php
patchTrainingProgramCourseAsync($tenant_id, $course_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a training program course

Partially updates an existing training program course for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramCoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_id = 'course_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchTrainingProgramCourseAsync($tenant_id, $course_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramCoursesApi->patchTrainingProgramCourseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `updateTrainingProgramCourseAsync()`

```php
updateTrainingProgramCourseAsync($tenant_id, $course_id, $api_version, $x_api_version, $training_program_course_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a training program course

Updates an existing training program course for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrainingProgramCoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_id = 'course_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$training_program_course_update_dto = new \OpenAPI\Client\Model\TrainingProgramCourseUpdateDto(); // \OpenAPI\Client\Model\TrainingProgramCourseUpdateDto

try {
    $result = $apiInstance->updateTrainingProgramCourseAsync($tenant_id, $course_id, $api_version, $x_api_version, $training_program_course_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingProgramCoursesApi->updateTrainingProgramCourseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **training_program_course_update_dto** | [**\OpenAPI\Client\Model\TrainingProgramCourseUpdateDto**](../Model/TrainingProgramCourseUpdateDto.md)|  | [optional] |

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
