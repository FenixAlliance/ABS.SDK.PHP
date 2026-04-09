# OpenAPI\Client\CourseCategoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseCategoryAsync()**](CourseCategoriesApi.md#createCourseCategoryAsync) | **POST** /api/v2/LearningService/CourseCategories | Create a new course category |
| [**deleteCourseCategoryAsync()**](CourseCategoriesApi.md#deleteCourseCategoryAsync) | **DELETE** /api/v2/LearningService/CourseCategories/{categoryId} | Delete a course category |
| [**getCourseCategoriesAsync()**](CourseCategoriesApi.md#getCourseCategoriesAsync) | **GET** /api/v2/LearningService/CourseCategories | Get all course categories |
| [**getCourseCategoriesCountAsync()**](CourseCategoriesApi.md#getCourseCategoriesCountAsync) | **GET** /api/v2/LearningService/CourseCategories/Count | Get course categories count |
| [**getCourseCategoryByIdAsync()**](CourseCategoriesApi.md#getCourseCategoryByIdAsync) | **GET** /api/v2/LearningService/CourseCategories/{categoryId} | Get course category by ID |
| [**updateCourseCategoryAsync()**](CourseCategoriesApi.md#updateCourseCategoryAsync) | **PUT** /api/v2/LearningService/CourseCategories/{categoryId} | Update a course category |


## `createCourseCategoryAsync()`

```php
createCourseCategoryAsync($tenant_id, $api_version, $x_api_version, $course_category_create_dto)
```

Create a new course category

Creates a new course category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_category_create_dto = new \OpenAPI\Client\Model\CourseCategoryCreateDto(); // \OpenAPI\Client\Model\CourseCategoryCreateDto

try {
    $apiInstance->createCourseCategoryAsync($tenant_id, $api_version, $x_api_version, $course_category_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseCategoriesApi->createCourseCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_category_create_dto** | [**\OpenAPI\Client\Model\CourseCategoryCreateDto**](../Model/CourseCategoryCreateDto.md)|  | [optional] |

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

## `deleteCourseCategoryAsync()`

```php
deleteCourseCategoryAsync($tenant_id, $category_id, $api_version, $x_api_version)
```

Delete a course category

Deletes a course category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseCategoryAsync($tenant_id, $category_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseCategoriesApi->deleteCourseCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |
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

## `getCourseCategoriesAsync()`

```php
getCourseCategoriesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseCategoryDto[]
```

Get all course categories

Retrieves all course categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCategoriesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCategoriesApi->getCourseCategoriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseCategoryDto[]**](../Model/CourseCategoryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseCategoriesCountAsync()`

```php
getCourseCategoriesCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course categories count

Returns the count of course categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCategoriesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCategoriesApi->getCourseCategoriesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getCourseCategoryByIdAsync()`

```php
getCourseCategoryByIdAsync($category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseCategoryDto
```

Get course category by ID

Retrieves a specific course category by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCategoryByIdAsync($category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCategoriesApi->getCourseCategoryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseCategoryDto**](../Model/CourseCategoryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCourseCategoryAsync()`

```php
updateCourseCategoryAsync($tenant_id, $category_id, $api_version, $x_api_version, $course_category_update_dto)
```

Update a course category

Updates an existing course category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_category_update_dto = new \OpenAPI\Client\Model\CourseCategoryUpdateDto(); // \OpenAPI\Client\Model\CourseCategoryUpdateDto

try {
    $apiInstance->updateCourseCategoryAsync($tenant_id, $category_id, $api_version, $x_api_version, $course_category_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseCategoriesApi->updateCourseCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_category_update_dto** | [**\OpenAPI\Client\Model\CourseCategoryUpdateDto**](../Model/CourseCategoryUpdateDto.md)|  | [optional] |

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
