# OpenAPI\Client\CourseUpdatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseUpdateAsync()**](CourseUpdatesApi.md#createCourseUpdateAsync) | **POST** /api/v2/LearningService/CourseUpdates | Create a new course update |
| [**deleteCourseUpdateAsync()**](CourseUpdatesApi.md#deleteCourseUpdateAsync) | **DELETE** /api/v2/LearningService/CourseUpdates/{updateId} | Delete a course update |
| [**getCourseUpdateByIdAsync()**](CourseUpdatesApi.md#getCourseUpdateByIdAsync) | **GET** /api/v2/LearningService/CourseUpdates/{updateId} | Get course update by ID |
| [**getCourseUpdatesAsync()**](CourseUpdatesApi.md#getCourseUpdatesAsync) | **GET** /api/v2/LearningService/CourseUpdates | Get all course updates |
| [**getCourseUpdatesCountAsync()**](CourseUpdatesApi.md#getCourseUpdatesCountAsync) | **GET** /api/v2/LearningService/CourseUpdates/Count | Get course updates count |
| [**updateCourseUpdateAsync()**](CourseUpdatesApi.md#updateCourseUpdateAsync) | **PUT** /api/v2/LearningService/CourseUpdates/{updateId} | Update a course update |


## `createCourseUpdateAsync()`

```php
createCourseUpdateAsync($tenant_id, $api_version, $x_api_version, $course_news_create_dto)
```

Create a new course update

Creates a new course update for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_news_create_dto = new \OpenAPI\Client\Model\CourseNewsCreateDto(); // \OpenAPI\Client\Model\CourseNewsCreateDto

try {
    $apiInstance->createCourseUpdateAsync($tenant_id, $api_version, $x_api_version, $course_news_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseUpdatesApi->createCourseUpdateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_news_create_dto** | [**\OpenAPI\Client\Model\CourseNewsCreateDto**](../Model/CourseNewsCreateDto.md)|  | [optional] |

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

## `deleteCourseUpdateAsync()`

```php
deleteCourseUpdateAsync($tenant_id, $update_id, $api_version, $x_api_version)
```

Delete a course update

Deletes a course update for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$update_id = 'update_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseUpdateAsync($tenant_id, $update_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseUpdatesApi->deleteCourseUpdateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **update_id** | **string**|  | |
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

## `getCourseUpdateByIdAsync()`

```php
getCourseUpdateByIdAsync($update_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseNewsDto
```

Get course update by ID

Retrieves a specific course update by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_id = 'update_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUpdateByIdAsync($update_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUpdatesApi->getCourseUpdateByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseNewsDto**](../Model/CourseNewsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseUpdatesAsync()`

```php
getCourseUpdatesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseNewsDto[]
```

Get all course updates

Retrieves all course updates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUpdatesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUpdatesApi->getCourseUpdatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseNewsDto[]**](../Model/CourseNewsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseUpdatesCountAsync()`

```php
getCourseUpdatesCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course updates count

Returns the count of course updates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseUpdatesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseUpdatesApi->getCourseUpdatesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseUpdateAsync()`

```php
updateCourseUpdateAsync($tenant_id, $update_id, $api_version, $x_api_version, $course_news_update_dto)
```

Update a course update

Updates an existing course update for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$update_id = 'update_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_news_update_dto = new \OpenAPI\Client\Model\CourseNewsUpdateDto(); // \OpenAPI\Client\Model\CourseNewsUpdateDto

try {
    $apiInstance->updateCourseUpdateAsync($tenant_id, $update_id, $api_version, $x_api_version, $course_news_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseUpdatesApi->updateCourseUpdateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **update_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_news_update_dto** | [**\OpenAPI\Client\Model\CourseNewsUpdateDto**](../Model/CourseNewsUpdateDto.md)|  | [optional] |

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
