# OpenAPI\Client\CourseUnitsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseUnitAsync()**](CourseUnitsApi.md#createCourseUnitAsync) | **POST** /api/v2/LearningService/CourseUnits | Create a new course unit |
| [**deleteCourseUnitAsync()**](CourseUnitsApi.md#deleteCourseUnitAsync) | **DELETE** /api/v2/LearningService/CourseUnits/{unitId} | Delete a course unit |
| [**getCourseUnitByIdAsync()**](CourseUnitsApi.md#getCourseUnitByIdAsync) | **GET** /api/v2/LearningService/CourseUnits/{unitId} | Get course unit by ID |
| [**getCourseUnitsAsync()**](CourseUnitsApi.md#getCourseUnitsAsync) | **GET** /api/v2/LearningService/CourseUnits | Get all course units |
| [**getCourseUnitsCountAsync()**](CourseUnitsApi.md#getCourseUnitsCountAsync) | **GET** /api/v2/LearningService/CourseUnits/Count | Get course units count |
| [**updateCourseUnitAsync()**](CourseUnitsApi.md#updateCourseUnitAsync) | **PUT** /api/v2/LearningService/CourseUnits/{unitId} | Update a course unit |


## `createCourseUnitAsync()`

```php
createCourseUnitAsync($tenant_id, $api_version, $x_api_version, $course_unit_create_dto)
```

Create a new course unit

Creates a new course unit for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_unit_create_dto = new \OpenAPI\Client\Model\CourseUnitCreateDto(); // \OpenAPI\Client\Model\CourseUnitCreateDto

try {
    $apiInstance->createCourseUnitAsync($tenant_id, $api_version, $x_api_version, $course_unit_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitsApi->createCourseUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_unit_create_dto** | [**\OpenAPI\Client\Model\CourseUnitCreateDto**](../Model/CourseUnitCreateDto.md)|  | [optional] |

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

## `deleteCourseUnitAsync()`

```php
deleteCourseUnitAsync($tenant_id, $unit_id, $api_version, $x_api_version)
```

Delete a course unit

Deletes a course unit for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$unit_id = 'unit_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseUnitAsync($tenant_id, $unit_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitsApi->deleteCourseUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **unit_id** | **string**|  | |
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

## `getCourseUnitByIdAsync()`

```php
getCourseUnitByIdAsync($unit_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseUnitDto
```

Get course unit by ID

Retrieves a specific course unit by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = 'unit_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUnitByIdAsync($unit_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitsApi->getCourseUnitByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unit_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseUnitDto**](../Model/CourseUnitDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseUnitsAsync()`

```php
getCourseUnitsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseUnitDto[]
```

Get all course units

Retrieves all course units for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUnitsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitsApi->getCourseUnitsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseUnitDto[]**](../Model/CourseUnitDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseUnitsCountAsync()`

```php
getCourseUnitsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course units count

Returns the count of course units for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUnitsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitsApi->getCourseUnitsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseUnitAsync()`

```php
updateCourseUnitAsync($tenant_id, $unit_id, $api_version, $x_api_version, $course_unit_update_dto)
```

Update a course unit

Updates an existing course unit for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$unit_id = 'unit_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_unit_update_dto = new \OpenAPI\Client\Model\CourseUnitUpdateDto(); // \OpenAPI\Client\Model\CourseUnitUpdateDto

try {
    $apiInstance->updateCourseUnitAsync($tenant_id, $unit_id, $api_version, $x_api_version, $course_unit_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseUnitsApi->updateCourseUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **unit_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_unit_update_dto** | [**\OpenAPI\Client\Model\CourseUnitUpdateDto**](../Model/CourseUnitUpdateDto.md)|  | [optional] |

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
