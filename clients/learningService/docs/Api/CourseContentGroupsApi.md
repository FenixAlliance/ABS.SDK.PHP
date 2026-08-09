# OpenAPI\Client\CourseContentGroupsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseContentGroupAsync()**](CourseContentGroupsApi.md#createCourseContentGroupAsync) | **POST** /api/v2/LearningService/CourseContentGroups | Create a new course content group |
| [**deleteCourseContentGroupAsync()**](CourseContentGroupsApi.md#deleteCourseContentGroupAsync) | **DELETE** /api/v2/LearningService/CourseContentGroups/{groupId} | Delete a course content group |
| [**getCourseContentGroupByIdAsync()**](CourseContentGroupsApi.md#getCourseContentGroupByIdAsync) | **GET** /api/v2/LearningService/CourseContentGroups/{groupId} | Get course content group by ID |
| [**getCourseContentGroupsAsync()**](CourseContentGroupsApi.md#getCourseContentGroupsAsync) | **GET** /api/v2/LearningService/CourseContentGroups | Get all course content groups |
| [**getCourseContentGroupsByCourseAsync()**](CourseContentGroupsApi.md#getCourseContentGroupsByCourseAsync) | **GET** /api/v2/LearningService/Courses/{courseId}/ContentGroups | Get course content groups by course |
| [**getCourseContentGroupsByCourseCountAsync()**](CourseContentGroupsApi.md#getCourseContentGroupsByCourseCountAsync) | **GET** /api/v2/LearningService/Courses/{courseId}/ContentGroups/Count | Get course content groups count by course |
| [**getCourseContentGroupsCountAsync()**](CourseContentGroupsApi.md#getCourseContentGroupsCountAsync) | **GET** /api/v2/LearningService/CourseContentGroups/Count | Get course content groups count |
| [**patchCourseContentGroupAsync()**](CourseContentGroupsApi.md#patchCourseContentGroupAsync) | **PATCH** /api/v2/LearningService/CourseContentGroups/{groupId} | Patch a course content group |
| [**updateCourseContentGroupAsync()**](CourseContentGroupsApi.md#updateCourseContentGroupAsync) | **PUT** /api/v2/LearningService/CourseContentGroups/{groupId} | Update a course content group |


## `createCourseContentGroupAsync()`

```php
createCourseContentGroupAsync($tenant_id, $api_version, $x_api_version, $course_content_group_create_dto)
```

Create a new course content group

Creates a new course content group for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_content_group_create_dto = new \OpenAPI\Client\Model\CourseContentGroupCreateDto(); // \OpenAPI\Client\Model\CourseContentGroupCreateDto

try {
    $apiInstance->createCourseContentGroupAsync($tenant_id, $api_version, $x_api_version, $course_content_group_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->createCourseContentGroupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_content_group_create_dto** | [**\OpenAPI\Client\Model\CourseContentGroupCreateDto**](../Model/CourseContentGroupCreateDto.md)|  | [optional] |

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

## `deleteCourseContentGroupAsync()`

```php
deleteCourseContentGroupAsync($tenant_id, $group_id, $api_version, $x_api_version)
```

Delete a course content group

Deletes a course content group for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$group_id = 'group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseContentGroupAsync($tenant_id, $group_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->deleteCourseContentGroupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **group_id** | **string**|  | |
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

## `getCourseContentGroupByIdAsync()`

```php
getCourseContentGroupByIdAsync($group_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseContentGroupDto
```

Get course content group by ID

Retrieves a specific course content group by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseContentGroupByIdAsync($group_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->getCourseContentGroupByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseContentGroupDto**](../Model/CourseContentGroupDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseContentGroupsAsync()`

```php
getCourseContentGroupsAsync($tenant_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters): \OpenAPI\Client\Model\CourseContentGroupDto[]
```

Get all course content groups

Retrieves all course content groups for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_content_group_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseContentGroupsAsync($tenant_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->getCourseContentGroupsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_content_group_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters**](../Model/CourseContentGroupDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseContentGroupDto[]**](../Model/CourseContentGroupDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseContentGroupsByCourseAsync()`

```php
getCourseContentGroupsByCourseAsync($course_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters): \OpenAPI\Client\Model\CourseContentGroupDto[]
```

Get course content groups by course

Retrieves all course content groups for a specific course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$course_id = 'course_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_content_group_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseContentGroupsByCourseAsync($course_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->getCourseContentGroupsByCourseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **course_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_content_group_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters**](../Model/CourseContentGroupDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseContentGroupDto[]**](../Model/CourseContentGroupDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseContentGroupsByCourseCountAsync()`

```php
getCourseContentGroupsByCourseCountAsync($course_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters): int
```

Get course content groups count by course

Returns the count of course content groups for a specific course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$course_id = 'course_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_content_group_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseContentGroupsByCourseCountAsync($course_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->getCourseContentGroupsByCourseCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **course_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_content_group_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters**](../Model/CourseContentGroupDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseContentGroupsCountAsync()`

```php
getCourseContentGroupsCountAsync($tenant_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters): int
```

Get course content groups count

Returns the count of course content groups for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_content_group_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseContentGroupsCountAsync($tenant_id, $api_version, $x_api_version, $course_content_group_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->getCourseContentGroupsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_content_group_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseContentGroupDtoCollectionQueryParameters**](../Model/CourseContentGroupDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCourseContentGroupAsync()`

```php
patchCourseContentGroupAsync($tenant_id, $group_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a course content group

Partially updates a course content group for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$group_id = 'group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchCourseContentGroupAsync($tenant_id, $group_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->patchCourseContentGroupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCourseContentGroupAsync()`

```php
updateCourseContentGroupAsync($tenant_id, $group_id, $api_version, $x_api_version, $course_content_group_update_dto)
```

Update a course content group

Updates an existing course content group for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseContentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$group_id = 'group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_content_group_update_dto = new \OpenAPI\Client\Model\CourseContentGroupUpdateDto(); // \OpenAPI\Client\Model\CourseContentGroupUpdateDto

try {
    $apiInstance->updateCourseContentGroupAsync($tenant_id, $group_id, $api_version, $x_api_version, $course_content_group_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseContentGroupsApi->updateCourseContentGroupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_content_group_update_dto** | [**\OpenAPI\Client\Model\CourseContentGroupUpdateDto**](../Model/CourseContentGroupUpdateDto.md)|  | [optional] |

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
