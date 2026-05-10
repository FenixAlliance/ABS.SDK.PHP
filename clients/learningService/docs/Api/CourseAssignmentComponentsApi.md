# OpenAPI\Client\CourseAssignmentComponentsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseAssignmentComponentAsync()**](CourseAssignmentComponentsApi.md#createCourseAssignmentComponentAsync) | **POST** /api/v2/LearningService/CourseAssignmentComponents | Create a course assignment component |
| [**deleteCourseAssignmentComponentAsync()**](CourseAssignmentComponentsApi.md#deleteCourseAssignmentComponentAsync) | **DELETE** /api/v2/LearningService/CourseAssignmentComponents/{componentId} | Delete a course assignment component |
| [**getCourseAssignmentComponentByIdAsync()**](CourseAssignmentComponentsApi.md#getCourseAssignmentComponentByIdAsync) | **GET** /api/v2/LearningService/CourseAssignmentComponents/{componentId} | Get course assignment component by ID |
| [**getCourseAssignmentComponentsAsync()**](CourseAssignmentComponentsApi.md#getCourseAssignmentComponentsAsync) | **GET** /api/v2/LearningService/CourseAssignmentComponents | Get all course assignment components |
| [**getCourseAssignmentComponentsCountAsync()**](CourseAssignmentComponentsApi.md#getCourseAssignmentComponentsCountAsync) | **GET** /api/v2/LearningService/CourseAssignmentComponents/Count | Get course assignment components count |
| [**updateCourseAssignmentComponentAsync()**](CourseAssignmentComponentsApi.md#updateCourseAssignmentComponentAsync) | **PUT** /api/v2/LearningService/CourseAssignmentComponents/{componentId} | Update a course assignment component |


## `createCourseAssignmentComponentAsync()`

```php
createCourseAssignmentComponentAsync($tenant_id, $api_version, $x_api_version, $course_assignment_component_create_dto)
```

Create a course assignment component

Creates a new course assignment component for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_assignment_component_create_dto = new \OpenAPI\Client\Model\CourseAssignmentComponentCreateDto(); // \OpenAPI\Client\Model\CourseAssignmentComponentCreateDto

try {
    $apiInstance->createCourseAssignmentComponentAsync($tenant_id, $api_version, $x_api_version, $course_assignment_component_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentComponentsApi->createCourseAssignmentComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_assignment_component_create_dto** | [**\OpenAPI\Client\Model\CourseAssignmentComponentCreateDto**](../Model/CourseAssignmentComponentCreateDto.md)|  | [optional] |

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

## `deleteCourseAssignmentComponentAsync()`

```php
deleteCourseAssignmentComponentAsync($tenant_id, $component_id, $api_version, $x_api_version)
```

Delete a course assignment component

Deletes a course assignment component by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$component_id = 'component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseAssignmentComponentAsync($tenant_id, $component_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentComponentsApi->deleteCourseAssignmentComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **component_id** | **string**|  | |
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

## `getCourseAssignmentComponentByIdAsync()`

```php
getCourseAssignmentComponentByIdAsync($component_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseAssignmentComponentDto
```

Get course assignment component by ID

Retrieves a specific course assignment component by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$component_id = 'component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentComponentByIdAsync($component_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentComponentsApi->getCourseAssignmentComponentByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **component_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseAssignmentComponentDto**](../Model/CourseAssignmentComponentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseAssignmentComponentsAsync()`

```php
getCourseAssignmentComponentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseAssignmentComponentDto[]
```

Get all course assignment components

Retrieves all course assignment components for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentComponentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentComponentsApi->getCourseAssignmentComponentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseAssignmentComponentDto[]**](../Model/CourseAssignmentComponentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseAssignmentComponentsCountAsync()`

```php
getCourseAssignmentComponentsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course assignment components count

Returns the count of course assignment components for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseAssignmentComponentsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentComponentsApi->getCourseAssignmentComponentsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseAssignmentComponentAsync()`

```php
updateCourseAssignmentComponentAsync($tenant_id, $component_id, $api_version, $x_api_version, $course_assignment_component_update_dto)
```

Update a course assignment component

Updates an existing course assignment component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseAssignmentComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$component_id = 'component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_assignment_component_update_dto = new \OpenAPI\Client\Model\CourseAssignmentComponentUpdateDto(); // \OpenAPI\Client\Model\CourseAssignmentComponentUpdateDto

try {
    $apiInstance->updateCourseAssignmentComponentAsync($tenant_id, $component_id, $api_version, $x_api_version, $course_assignment_component_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseAssignmentComponentsApi->updateCourseAssignmentComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **component_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_assignment_component_update_dto** | [**\OpenAPI\Client\Model\CourseAssignmentComponentUpdateDto**](../Model/CourseAssignmentComponentUpdateDto.md)|  | [optional] |

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
