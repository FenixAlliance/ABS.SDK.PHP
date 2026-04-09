# OpenAPI\Client\CourseLibrariesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseLibraryAsync()**](CourseLibrariesApi.md#createCourseLibraryAsync) | **POST** /api/v2/LearningService/CourseLibraries | Create a course library |
| [**deleteCourseLibraryAsync()**](CourseLibrariesApi.md#deleteCourseLibraryAsync) | **DELETE** /api/v2/LearningService/CourseLibraries/{libraryId} | Delete a course library |
| [**getCourseLibrariesAsync()**](CourseLibrariesApi.md#getCourseLibrariesAsync) | **GET** /api/v2/LearningService/CourseLibraries | Get all course libraries |
| [**getCourseLibrariesCountAsync()**](CourseLibrariesApi.md#getCourseLibrariesCountAsync) | **GET** /api/v2/LearningService/CourseLibraries/Count | Get course libraries count |
| [**getCourseLibraryByIdAsync()**](CourseLibrariesApi.md#getCourseLibraryByIdAsync) | **GET** /api/v2/LearningService/CourseLibraries/{libraryId} | Get course library by ID |
| [**updateCourseLibraryAsync()**](CourseLibrariesApi.md#updateCourseLibraryAsync) | **PUT** /api/v2/LearningService/CourseLibraries/{libraryId} | Update a course library |


## `createCourseLibraryAsync()`

```php
createCourseLibraryAsync($tenant_id, $api_version, $x_api_version, $course_library_create_dto): \OpenAPI\Client\Model\CourseLibraryDto
```

Create a course library

Creates a new course library for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_library_create_dto = new \OpenAPI\Client\Model\CourseLibraryCreateDto(); // \OpenAPI\Client\Model\CourseLibraryCreateDto

try {
    $result = $apiInstance->createCourseLibraryAsync($tenant_id, $api_version, $x_api_version, $course_library_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseLibrariesApi->createCourseLibraryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_library_create_dto** | [**\OpenAPI\Client\Model\CourseLibraryCreateDto**](../Model/CourseLibraryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseLibraryDto**](../Model/CourseLibraryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCourseLibraryAsync()`

```php
deleteCourseLibraryAsync($tenant_id, $library_id, $api_version, $x_api_version)
```

Delete a course library

Deletes a course library by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$library_id = 'library_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseLibraryAsync($tenant_id, $library_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseLibrariesApi->deleteCourseLibraryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **library_id** | **string**|  | |
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

## `getCourseLibrariesAsync()`

```php
getCourseLibrariesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseLibraryDto[]
```

Get all course libraries

Retrieves all course libraries for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseLibrariesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseLibrariesApi->getCourseLibrariesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseLibraryDto[]**](../Model/CourseLibraryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseLibrariesCountAsync()`

```php
getCourseLibrariesCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course libraries count

Returns the count of course libraries for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseLibrariesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseLibrariesApi->getCourseLibrariesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getCourseLibraryByIdAsync()`

```php
getCourseLibraryByIdAsync($library_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseLibraryDto
```

Get course library by ID

Retrieves a specific course library by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$library_id = 'library_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseLibraryByIdAsync($library_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseLibrariesApi->getCourseLibraryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **library_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseLibraryDto**](../Model/CourseLibraryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCourseLibraryAsync()`

```php
updateCourseLibraryAsync($tenant_id, $library_id, $api_version, $x_api_version, $course_library_update_dto): \OpenAPI\Client\Model\CourseLibraryDto
```

Update a course library

Updates an existing course library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$library_id = 'library_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_library_update_dto = new \OpenAPI\Client\Model\CourseLibraryUpdateDto(); // \OpenAPI\Client\Model\CourseLibraryUpdateDto

try {
    $result = $apiInstance->updateCourseLibraryAsync($tenant_id, $library_id, $api_version, $x_api_version, $course_library_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseLibrariesApi->updateCourseLibraryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **library_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_library_update_dto** | [**\OpenAPI\Client\Model\CourseLibraryUpdateDto**](../Model/CourseLibraryUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseLibraryDto**](../Model/CourseLibraryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
