# OpenAPI\Client\CourseForumsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseForumAsync()**](CourseForumsApi.md#createCourseForumAsync) | **POST** /api/v2/LearningService/CourseForums | Create a course forum |
| [**deleteCourseForumAsync()**](CourseForumsApi.md#deleteCourseForumAsync) | **DELETE** /api/v2/LearningService/CourseForums/{forumId} | Delete a course forum |
| [**getCourseForumByIdAsync()**](CourseForumsApi.md#getCourseForumByIdAsync) | **GET** /api/v2/LearningService/CourseForums/{forumId} | Get course forum by ID |
| [**getCourseForumsAsync()**](CourseForumsApi.md#getCourseForumsAsync) | **GET** /api/v2/LearningService/CourseForums | Get all course forums |
| [**getCourseForumsCountAsync()**](CourseForumsApi.md#getCourseForumsCountAsync) | **GET** /api/v2/LearningService/CourseForums/Count | Get course forums count |
| [**updateCourseForumAsync()**](CourseForumsApi.md#updateCourseForumAsync) | **PUT** /api/v2/LearningService/CourseForums/{forumId} | Update a course forum |


## `createCourseForumAsync()`

```php
createCourseForumAsync($tenant_id, $api_version, $x_api_version, $course_forum_create_dto): \OpenAPI\Client\Model\CourseForumDto
```

Create a course forum

Creates a new course forum for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseForumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_forum_create_dto = new \OpenAPI\Client\Model\CourseForumCreateDto(); // \OpenAPI\Client\Model\CourseForumCreateDto

try {
    $result = $apiInstance->createCourseForumAsync($tenant_id, $api_version, $x_api_version, $course_forum_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseForumsApi->createCourseForumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_forum_create_dto** | [**\OpenAPI\Client\Model\CourseForumCreateDto**](../Model/CourseForumCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseForumDto**](../Model/CourseForumDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCourseForumAsync()`

```php
deleteCourseForumAsync($tenant_id, $forum_id, $api_version, $x_api_version)
```

Delete a course forum

Deletes a course forum by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseForumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$forum_id = 'forum_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseForumAsync($tenant_id, $forum_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseForumsApi->deleteCourseForumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **forum_id** | **string**|  | |
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

## `getCourseForumByIdAsync()`

```php
getCourseForumByIdAsync($forum_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseForumDto
```

Get course forum by ID

Retrieves a specific course forum by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseForumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forum_id = 'forum_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseForumByIdAsync($forum_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseForumsApi->getCourseForumByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forum_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseForumDto**](../Model/CourseForumDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseForumsAsync()`

```php
getCourseForumsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseForumDto[]
```

Get all course forums

Retrieves all course forums for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseForumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseForumsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseForumsApi->getCourseForumsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseForumDto[]**](../Model/CourseForumDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseForumsCountAsync()`

```php
getCourseForumsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course forums count

Returns the count of course forums for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseForumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseForumsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseForumsApi->getCourseForumsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseForumAsync()`

```php
updateCourseForumAsync($tenant_id, $forum_id, $api_version, $x_api_version, $course_forum_update_dto): \OpenAPI\Client\Model\CourseForumDto
```

Update a course forum

Updates an existing course forum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseForumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$forum_id = 'forum_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_forum_update_dto = new \OpenAPI\Client\Model\CourseForumUpdateDto(); // \OpenAPI\Client\Model\CourseForumUpdateDto

try {
    $result = $apiInstance->updateCourseForumAsync($tenant_id, $forum_id, $api_version, $x_api_version, $course_forum_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseForumsApi->updateCourseForumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **forum_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_forum_update_dto** | [**\OpenAPI\Client\Model\CourseForumUpdateDto**](../Model/CourseForumUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseForumDto**](../Model/CourseForumDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
