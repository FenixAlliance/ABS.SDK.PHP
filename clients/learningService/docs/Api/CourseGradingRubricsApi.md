# OpenAPI\Client\CourseGradingRubricsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseGradingRubricAsync()**](CourseGradingRubricsApi.md#createCourseGradingRubricAsync) | **POST** /api/v2/LearningService/CourseGradingRubrics | Create a course grading rubric |
| [**deleteCourseGradingRubricAsync()**](CourseGradingRubricsApi.md#deleteCourseGradingRubricAsync) | **DELETE** /api/v2/LearningService/CourseGradingRubrics/{rubricId} | Delete a course grading rubric |
| [**getCourseGradingRubricByIdAsync()**](CourseGradingRubricsApi.md#getCourseGradingRubricByIdAsync) | **GET** /api/v2/LearningService/CourseGradingRubrics/{rubricId} | Get course grading rubric by ID |
| [**getCourseGradingRubricsAsync()**](CourseGradingRubricsApi.md#getCourseGradingRubricsAsync) | **GET** /api/v2/LearningService/CourseGradingRubrics | Get all course grading rubrics |
| [**getCourseGradingRubricsCountAsync()**](CourseGradingRubricsApi.md#getCourseGradingRubricsCountAsync) | **GET** /api/v2/LearningService/CourseGradingRubrics/Count | Get course grading rubrics count |
| [**patchCourseGradingRubricAsync()**](CourseGradingRubricsApi.md#patchCourseGradingRubricAsync) | **PATCH** /api/v2/LearningService/CourseGradingRubrics/{rubricId} | Patch a course grading rubric |
| [**updateCourseGradingRubricAsync()**](CourseGradingRubricsApi.md#updateCourseGradingRubricAsync) | **PUT** /api/v2/LearningService/CourseGradingRubrics/{rubricId} | Update a course grading rubric |


## `createCourseGradingRubricAsync()`

```php
createCourseGradingRubricAsync($tenant_id, $api_version, $x_api_version, $course_grading_rubric_create_dto)
```

Create a course grading rubric

Creates a new course grading rubric for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseGradingRubricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_grading_rubric_create_dto = new \OpenAPI\Client\Model\CourseGradingRubricCreateDto(); // \OpenAPI\Client\Model\CourseGradingRubricCreateDto

try {
    $apiInstance->createCourseGradingRubricAsync($tenant_id, $api_version, $x_api_version, $course_grading_rubric_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradingRubricsApi->createCourseGradingRubricAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_grading_rubric_create_dto** | [**\OpenAPI\Client\Model\CourseGradingRubricCreateDto**](../Model/CourseGradingRubricCreateDto.md)|  | [optional] |

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

## `deleteCourseGradingRubricAsync()`

```php
deleteCourseGradingRubricAsync($tenant_id, $rubric_id, $api_version, $x_api_version)
```

Delete a course grading rubric

Deletes a course grading rubric by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseGradingRubricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$rubric_id = 'rubric_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseGradingRubricAsync($tenant_id, $rubric_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradingRubricsApi->deleteCourseGradingRubricAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **rubric_id** | **string**|  | |
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

## `getCourseGradingRubricByIdAsync()`

```php
getCourseGradingRubricByIdAsync($rubric_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseGradingRubricDto
```

Get course grading rubric by ID

Retrieves a specific course grading rubric by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseGradingRubricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rubric_id = 'rubric_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseGradingRubricByIdAsync($rubric_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradingRubricsApi->getCourseGradingRubricByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rubric_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseGradingRubricDto**](../Model/CourseGradingRubricDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseGradingRubricsAsync()`

```php
getCourseGradingRubricsAsync($tenant_id, $api_version, $x_api_version, $course_grading_rubric_dto_collection_query_parameters): \OpenAPI\Client\Model\CourseGradingRubricDto[]
```

Get all course grading rubrics

Retrieves all course grading rubrics for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseGradingRubricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_grading_rubric_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseGradingRubricDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseGradingRubricDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseGradingRubricsAsync($tenant_id, $api_version, $x_api_version, $course_grading_rubric_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradingRubricsApi->getCourseGradingRubricsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_grading_rubric_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseGradingRubricDtoCollectionQueryParameters**](../Model/CourseGradingRubricDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseGradingRubricDto[]**](../Model/CourseGradingRubricDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseGradingRubricsCountAsync()`

```php
getCourseGradingRubricsCountAsync($tenant_id, $api_version, $x_api_version, $course_grading_rubric_dto_collection_query_parameters): int
```

Get course grading rubrics count

Returns the count of course grading rubrics for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseGradingRubricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_grading_rubric_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseGradingRubricDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseGradingRubricDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseGradingRubricsCountAsync($tenant_id, $api_version, $x_api_version, $course_grading_rubric_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradingRubricsApi->getCourseGradingRubricsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_grading_rubric_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseGradingRubricDtoCollectionQueryParameters**](../Model/CourseGradingRubricDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCourseGradingRubricAsync()`

```php
patchCourseGradingRubricAsync($tenant_id, $rubric_id, $api_version, $x_api_version, $patch_operation)
```

Patch a course grading rubric

Partially updates an existing course grading rubric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseGradingRubricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$rubric_id = 'rubric_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $apiInstance->patchCourseGradingRubricAsync($tenant_id, $rubric_id, $api_version, $x_api_version, $patch_operation);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradingRubricsApi->patchCourseGradingRubricAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **rubric_id** | **string**|  | |
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

## `updateCourseGradingRubricAsync()`

```php
updateCourseGradingRubricAsync($tenant_id, $rubric_id, $api_version, $x_api_version, $course_grading_rubric_update_dto)
```

Update a course grading rubric

Updates an existing course grading rubric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseGradingRubricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$rubric_id = 'rubric_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_grading_rubric_update_dto = new \OpenAPI\Client\Model\CourseGradingRubricUpdateDto(); // \OpenAPI\Client\Model\CourseGradingRubricUpdateDto

try {
    $apiInstance->updateCourseGradingRubricAsync($tenant_id, $rubric_id, $api_version, $x_api_version, $course_grading_rubric_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradingRubricsApi->updateCourseGradingRubricAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **rubric_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_grading_rubric_update_dto** | [**\OpenAPI\Client\Model\CourseGradingRubricUpdateDto**](../Model/CourseGradingRubricUpdateDto.md)|  | [optional] |

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
