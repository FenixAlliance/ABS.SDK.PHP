# OpenAPI\Client\CourseWikisApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseWikiAsync()**](CourseWikisApi.md#createCourseWikiAsync) | **POST** /api/v2/LearningService/CourseWikis | Create a new course wiki |
| [**deleteCourseWikiAsync()**](CourseWikisApi.md#deleteCourseWikiAsync) | **DELETE** /api/v2/LearningService/CourseWikis/{wikiId} | Delete a course wiki |
| [**getCourseWikiByIdAsync()**](CourseWikisApi.md#getCourseWikiByIdAsync) | **GET** /api/v2/LearningService/CourseWikis/{wikiId} | Get course wiki by ID |
| [**getCourseWikisAsync()**](CourseWikisApi.md#getCourseWikisAsync) | **GET** /api/v2/LearningService/CourseWikis | Get all course wikis |
| [**getCourseWikisCountAsync()**](CourseWikisApi.md#getCourseWikisCountAsync) | **GET** /api/v2/LearningService/CourseWikis/Count | Get course wikis count |
| [**updateCourseWikiAsync()**](CourseWikisApi.md#updateCourseWikiAsync) | **PUT** /api/v2/LearningService/CourseWikis/{wikiId} | Update a course wiki |


## `createCourseWikiAsync()`

```php
createCourseWikiAsync($tenant_id, $api_version, $x_api_version, $course_wiki_create_dto)
```

Create a new course wiki

Creates a new course wiki for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseWikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_wiki_create_dto = new \OpenAPI\Client\Model\CourseWikiCreateDto(); // \OpenAPI\Client\Model\CourseWikiCreateDto

try {
    $apiInstance->createCourseWikiAsync($tenant_id, $api_version, $x_api_version, $course_wiki_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseWikisApi->createCourseWikiAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_wiki_create_dto** | [**\OpenAPI\Client\Model\CourseWikiCreateDto**](../Model/CourseWikiCreateDto.md)|  | [optional] |

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

## `deleteCourseWikiAsync()`

```php
deleteCourseWikiAsync($tenant_id, $wiki_id, $api_version, $x_api_version)
```

Delete a course wiki

Deletes a course wiki for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseWikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$wiki_id = 'wiki_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseWikiAsync($tenant_id, $wiki_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseWikisApi->deleteCourseWikiAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **wiki_id** | **string**|  | |
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

## `getCourseWikiByIdAsync()`

```php
getCourseWikiByIdAsync($wiki_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseWikiDto
```

Get course wiki by ID

Retrieves a specific course wiki by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseWikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wiki_id = 'wiki_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseWikiByIdAsync($wiki_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseWikisApi->getCourseWikiByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wiki_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseWikiDto**](../Model/CourseWikiDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseWikisAsync()`

```php
getCourseWikisAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseWikiDto[]
```

Get all course wikis

Retrieves all course wikis for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseWikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseWikisAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseWikisApi->getCourseWikisAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseWikiDto[]**](../Model/CourseWikiDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseWikisCountAsync()`

```php
getCourseWikisCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course wikis count

Returns the count of course wikis for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseWikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseWikisCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseWikisApi->getCourseWikisCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseWikiAsync()`

```php
updateCourseWikiAsync($tenant_id, $wiki_id, $api_version, $x_api_version, $course_wiki_update_dto)
```

Update a course wiki

Updates an existing course wiki for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseWikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$wiki_id = 'wiki_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_wiki_update_dto = new \OpenAPI\Client\Model\CourseWikiUpdateDto(); // \OpenAPI\Client\Model\CourseWikiUpdateDto

try {
    $apiInstance->updateCourseWikiAsync($tenant_id, $wiki_id, $api_version, $x_api_version, $course_wiki_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseWikisApi->updateCourseWikiAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **wiki_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_wiki_update_dto** | [**\OpenAPI\Client\Model\CourseWikiUpdateDto**](../Model/CourseWikiUpdateDto.md)|  | [optional] |

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
