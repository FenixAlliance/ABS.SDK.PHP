# OpenAPI\Client\CourseUnitComponentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseUnitComponentAsync()**](CourseUnitComponentsApi.md#createCourseUnitComponentAsync) | **POST** /api/v2/LearningService/CourseUnitComponents | Create a new course unit component |
| [**deleteCourseUnitComponentAsync()**](CourseUnitComponentsApi.md#deleteCourseUnitComponentAsync) | **DELETE** /api/v2/LearningService/CourseUnitComponents/{componentId} | Delete a course unit component |
| [**getCourseUnitComponentByIdAsync()**](CourseUnitComponentsApi.md#getCourseUnitComponentByIdAsync) | **GET** /api/v2/LearningService/CourseUnitComponents/{componentId} | Get course unit component by ID |
| [**getCourseUnitComponentsAsync()**](CourseUnitComponentsApi.md#getCourseUnitComponentsAsync) | **GET** /api/v2/LearningService/CourseUnitComponents | Get all course unit components |
| [**getCourseUnitComponentsCountAsync()**](CourseUnitComponentsApi.md#getCourseUnitComponentsCountAsync) | **GET** /api/v2/LearningService/CourseUnitComponents/Count | Get course unit components count |
| [**updateCourseUnitComponentAsync()**](CourseUnitComponentsApi.md#updateCourseUnitComponentAsync) | **PUT** /api/v2/LearningService/CourseUnitComponents/{componentId} | Update a course unit component |


## `createCourseUnitComponentAsync()`

```php
createCourseUnitComponentAsync($tenant_id, $api_version, $x_api_version, $course_unit_component_create_dto)
```

Create a new course unit component

Creates a new course unit component for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_unit_component_create_dto = new \OpenAPI\Client\Model\CourseUnitComponentCreateDto(); // \OpenAPI\Client\Model\CourseUnitComponentCreateDto

try {
    $apiInstance->createCourseUnitComponentAsync($tenant_id, $api_version, $x_api_version, $course_unit_component_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitComponentsApi->createCourseUnitComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_unit_component_create_dto** | [**\OpenAPI\Client\Model\CourseUnitComponentCreateDto**](../Model/CourseUnitComponentCreateDto.md)|  | [optional] |

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

## `deleteCourseUnitComponentAsync()`

```php
deleteCourseUnitComponentAsync($tenant_id, $component_id, $api_version, $x_api_version)
```

Delete a course unit component

Deletes a course unit component for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$component_id = 'component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseUnitComponentAsync($tenant_id, $component_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitComponentsApi->deleteCourseUnitComponentAsync: ', $e->getMessage(), PHP_EOL;
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

## `getCourseUnitComponentByIdAsync()`

```php
getCourseUnitComponentByIdAsync($component_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseUnitComponentDto
```

Get course unit component by ID

Retrieves a specific course unit component by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$component_id = 'component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUnitComponentByIdAsync($component_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitComponentsApi->getCourseUnitComponentByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **component_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseUnitComponentDto**](../Model/CourseUnitComponentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseUnitComponentsAsync()`

```php
getCourseUnitComponentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseUnitComponentDto[]
```

Get all course unit components

Retrieves all course unit components for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUnitComponentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitComponentsApi->getCourseUnitComponentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseUnitComponentDto[]**](../Model/CourseUnitComponentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseUnitComponentsCountAsync()`

```php
getCourseUnitComponentsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course unit components count

Returns the count of course unit components for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUnitComponentsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitComponentsApi->getCourseUnitComponentsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseUnitComponentAsync()`

```php
updateCourseUnitComponentAsync($tenant_id, $component_id, $api_version, $x_api_version, $course_unit_component_update_dto)
```

Update a course unit component

Updates an existing course unit component for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$component_id = 'component_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_unit_component_update_dto = new \OpenAPI\Client\Model\CourseUnitComponentUpdateDto(); // \OpenAPI\Client\Model\CourseUnitComponentUpdateDto

try {
    $apiInstance->updateCourseUnitComponentAsync($tenant_id, $component_id, $api_version, $x_api_version, $course_unit_component_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitComponentsApi->updateCourseUnitComponentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **component_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_unit_component_update_dto** | [**\OpenAPI\Client\Model\CourseUnitComponentUpdateDto**](../Model/CourseUnitComponentUpdateDto.md)|  | [optional] |

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
