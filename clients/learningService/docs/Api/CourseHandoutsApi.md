# OpenAPI\Client\CourseHandoutsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseHandoutAsync()**](CourseHandoutsApi.md#createCourseHandoutAsync) | **POST** /api/v2/LearningService/CourseHandouts | Create a course handout |
| [**deleteCourseHandoutAsync()**](CourseHandoutsApi.md#deleteCourseHandoutAsync) | **DELETE** /api/v2/LearningService/CourseHandouts/{handoutId} | Delete a course handout |
| [**getCourseHandoutByIdAsync()**](CourseHandoutsApi.md#getCourseHandoutByIdAsync) | **GET** /api/v2/LearningService/CourseHandouts/{handoutId} | Get course handout by ID |
| [**getCourseHandoutsAsync()**](CourseHandoutsApi.md#getCourseHandoutsAsync) | **GET** /api/v2/LearningService/CourseHandouts | Get all course handouts |
| [**getCourseHandoutsCountAsync()**](CourseHandoutsApi.md#getCourseHandoutsCountAsync) | **GET** /api/v2/LearningService/CourseHandouts/Count | Get course handouts count |
| [**updateCourseHandoutAsync()**](CourseHandoutsApi.md#updateCourseHandoutAsync) | **PUT** /api/v2/LearningService/CourseHandouts/{handoutId} | Update a course handout |


## `createCourseHandoutAsync()`

```php
createCourseHandoutAsync($tenant_id, $api_version, $x_api_version, $course_handout_create_dto): \OpenAPI\Client\Model\CourseHandoutDto
```

Create a course handout

Creates a new course handout for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseHandoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_handout_create_dto = new \OpenAPI\Client\Model\CourseHandoutCreateDto(); // \OpenAPI\Client\Model\CourseHandoutCreateDto

try {
    $result = $apiInstance->createCourseHandoutAsync($tenant_id, $api_version, $x_api_version, $course_handout_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseHandoutsApi->createCourseHandoutAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_handout_create_dto** | [**\OpenAPI\Client\Model\CourseHandoutCreateDto**](../Model/CourseHandoutCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseHandoutDto**](../Model/CourseHandoutDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCourseHandoutAsync()`

```php
deleteCourseHandoutAsync($tenant_id, $handout_id, $api_version, $x_api_version)
```

Delete a course handout

Deletes a course handout by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseHandoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$handout_id = 'handout_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseHandoutAsync($tenant_id, $handout_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseHandoutsApi->deleteCourseHandoutAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **handout_id** | **string**|  | |
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

## `getCourseHandoutByIdAsync()`

```php
getCourseHandoutByIdAsync($handout_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseHandoutDto
```

Get course handout by ID

Retrieves a specific course handout by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseHandoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$handout_id = 'handout_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseHandoutByIdAsync($handout_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseHandoutsApi->getCourseHandoutByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **handout_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseHandoutDto**](../Model/CourseHandoutDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseHandoutsAsync()`

```php
getCourseHandoutsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseHandoutDto[]
```

Get all course handouts

Retrieves all course handouts for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseHandoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseHandoutsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseHandoutsApi->getCourseHandoutsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseHandoutDto[]**](../Model/CourseHandoutDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseHandoutsCountAsync()`

```php
getCourseHandoutsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course handouts count

Returns the count of course handouts for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseHandoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseHandoutsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseHandoutsApi->getCourseHandoutsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseHandoutAsync()`

```php
updateCourseHandoutAsync($tenant_id, $handout_id, $api_version, $x_api_version, $course_handout_update_dto): \OpenAPI\Client\Model\CourseHandoutDto
```

Update a course handout

Updates an existing course handout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseHandoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$handout_id = 'handout_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_handout_update_dto = new \OpenAPI\Client\Model\CourseHandoutUpdateDto(); // \OpenAPI\Client\Model\CourseHandoutUpdateDto

try {
    $result = $apiInstance->updateCourseHandoutAsync($tenant_id, $handout_id, $api_version, $x_api_version, $course_handout_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseHandoutsApi->updateCourseHandoutAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **handout_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_handout_update_dto** | [**\OpenAPI\Client\Model\CourseHandoutUpdateDto**](../Model/CourseHandoutUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseHandoutDto**](../Model/CourseHandoutDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
