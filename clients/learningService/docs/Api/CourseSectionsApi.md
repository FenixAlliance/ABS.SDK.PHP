# OpenAPI\Client\CourseSectionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseSectionAsync()**](CourseSectionsApi.md#createCourseSectionAsync) | **POST** /api/v2/LearningService/CourseSections | Create a new course section |
| [**deleteCourseSectionAsync()**](CourseSectionsApi.md#deleteCourseSectionAsync) | **DELETE** /api/v2/LearningService/CourseSections/{sectionId} | Delete a course section |
| [**getCourseSectionByIdAsync()**](CourseSectionsApi.md#getCourseSectionByIdAsync) | **GET** /api/v2/LearningService/CourseSections/{sectionId} | Get course section by ID |
| [**getCourseSectionsAsync()**](CourseSectionsApi.md#getCourseSectionsAsync) | **GET** /api/v2/LearningService/CourseSections | Get all course sections |
| [**getCourseSectionsCountAsync()**](CourseSectionsApi.md#getCourseSectionsCountAsync) | **GET** /api/v2/LearningService/CourseSections/Count | Get course sections count |
| [**updateCourseSectionAsync()**](CourseSectionsApi.md#updateCourseSectionAsync) | **PUT** /api/v2/LearningService/CourseSections/{sectionId} | Update a course section |


## `createCourseSectionAsync()`

```php
createCourseSectionAsync($tenant_id, $api_version, $x_api_version, $course_section_create_dto)
```

Create a new course section

Creates a new course section for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_section_create_dto = new \OpenAPI\Client\Model\CourseSectionCreateDto(); // \OpenAPI\Client\Model\CourseSectionCreateDto

try {
    $apiInstance->createCourseSectionAsync($tenant_id, $api_version, $x_api_version, $course_section_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseSectionsApi->createCourseSectionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_section_create_dto** | [**\OpenAPI\Client\Model\CourseSectionCreateDto**](../Model/CourseSectionCreateDto.md)|  | [optional] |

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

## `deleteCourseSectionAsync()`

```php
deleteCourseSectionAsync($tenant_id, $section_id, $api_version, $x_api_version)
```

Delete a course section

Deletes a course section for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$section_id = 'section_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseSectionAsync($tenant_id, $section_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseSectionsApi->deleteCourseSectionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **section_id** | **string**|  | |
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

## `getCourseSectionByIdAsync()`

```php
getCourseSectionByIdAsync($section_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseSectionDto
```

Get course section by ID

Retrieves a specific course section by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$section_id = 'section_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseSectionByIdAsync($section_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseSectionsApi->getCourseSectionByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **section_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseSectionDto**](../Model/CourseSectionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseSectionsAsync()`

```php
getCourseSectionsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseSectionDto[]
```

Get all course sections

Retrieves all course sections for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseSectionsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseSectionsApi->getCourseSectionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseSectionDto[]**](../Model/CourseSectionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseSectionsCountAsync()`

```php
getCourseSectionsCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course sections count

Returns the count of course sections for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseSectionsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseSectionsApi->getCourseSectionsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseSectionAsync()`

```php
updateCourseSectionAsync($tenant_id, $section_id, $api_version, $x_api_version, $course_section_update_dto)
```

Update a course section

Updates an existing course section for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$section_id = 'section_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_section_update_dto = new \OpenAPI\Client\Model\CourseSectionUpdateDto(); // \OpenAPI\Client\Model\CourseSectionUpdateDto

try {
    $apiInstance->updateCourseSectionAsync($tenant_id, $section_id, $api_version, $x_api_version, $course_section_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseSectionsApi->updateCourseSectionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **section_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_section_update_dto** | [**\OpenAPI\Client\Model\CourseSectionUpdateDto**](../Model/CourseSectionUpdateDto.md)|  | [optional] |

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
