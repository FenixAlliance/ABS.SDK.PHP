# OpenAPI\Client\CourseFilesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseFileAsync()**](CourseFilesApi.md#createCourseFileAsync) | **POST** /api/v2/LearningService/CourseFiles | Create a new course file |
| [**deleteCourseFileAsync()**](CourseFilesApi.md#deleteCourseFileAsync) | **DELETE** /api/v2/LearningService/CourseFiles/{fileId} | Delete a course file |
| [**getCourseFileByIdAsync()**](CourseFilesApi.md#getCourseFileByIdAsync) | **GET** /api/v2/LearningService/CourseFiles/{fileId} | Get course file by ID |
| [**getCourseFilesAsync()**](CourseFilesApi.md#getCourseFilesAsync) | **GET** /api/v2/LearningService/CourseFiles | Get all course files |
| [**getCourseFilesCountAsync()**](CourseFilesApi.md#getCourseFilesCountAsync) | **GET** /api/v2/LearningService/CourseFiles/Count | Get course files count |
| [**patchCourseFileAsync()**](CourseFilesApi.md#patchCourseFileAsync) | **PATCH** /api/v2/LearningService/CourseFiles/{fileId} | Patch a course file |
| [**updateCourseFileAsync()**](CourseFilesApi.md#updateCourseFileAsync) | **PUT** /api/v2/LearningService/CourseFiles/{fileId} | Update a course file |


## `createCourseFileAsync()`

```php
createCourseFileAsync($tenant_id, $api_version, $x_api_version, $course_file_create_dto)
```

Create a new course file

Creates a new course file for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_file_create_dto = new \OpenAPI\Client\Model\CourseFileCreateDto(); // \OpenAPI\Client\Model\CourseFileCreateDto

try {
    $apiInstance->createCourseFileAsync($tenant_id, $api_version, $x_api_version, $course_file_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseFilesApi->createCourseFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_file_create_dto** | [**\OpenAPI\Client\Model\CourseFileCreateDto**](../Model/CourseFileCreateDto.md)|  | [optional] |

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

## `deleteCourseFileAsync()`

```php
deleteCourseFileAsync($tenant_id, $file_id, $api_version, $x_api_version)
```

Delete a course file

Deletes a course file for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$file_id = 'file_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseFileAsync($tenant_id, $file_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseFilesApi->deleteCourseFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **file_id** | **string**|  | |
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

## `getCourseFileByIdAsync()`

```php
getCourseFileByIdAsync($file_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseFileDto
```

Get course file by ID

Retrieves a specific course file by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseFileByIdAsync($file_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseFilesApi->getCourseFileByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseFileDto**](../Model/CourseFileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseFilesAsync()`

```php
getCourseFilesAsync($tenant_id, $api_version, $x_api_version, $course_file_dto_collection_query_parameters): \OpenAPI\Client\Model\CourseFileDto[]
```

Get all course files

Retrieves all course files for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_file_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseFileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseFileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseFilesAsync($tenant_id, $api_version, $x_api_version, $course_file_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseFilesApi->getCourseFilesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_file_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseFileDtoCollectionQueryParameters**](../Model/CourseFileDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseFileDto[]**](../Model/CourseFileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseFilesCountAsync()`

```php
getCourseFilesCountAsync($tenant_id, $api_version, $x_api_version, $course_file_dto_collection_query_parameters): int
```

Get course files count

Returns the count of course files for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_file_dto_collection_query_parameters = new \OpenAPI\Client\Model\CourseFileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CourseFileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCourseFilesCountAsync($tenant_id, $api_version, $x_api_version, $course_file_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseFilesApi->getCourseFilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_file_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CourseFileDtoCollectionQueryParameters**](../Model/CourseFileDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchCourseFileAsync()`

```php
patchCourseFileAsync($tenant_id, $file_id, $api_version, $x_api_version, $patch_operation)
```

Patch a course file

Partially updates an existing course file for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$file_id = 'file_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $apiInstance->patchCourseFileAsync($tenant_id, $file_id, $api_version, $x_api_version, $patch_operation);
} catch (Exception $e) {
    echo 'Exception when calling CourseFilesApi->patchCourseFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **file_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `updateCourseFileAsync()`

```php
updateCourseFileAsync($tenant_id, $file_id, $api_version, $x_api_version, $course_file_update_dto)
```

Update a course file

Updates an existing course file for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$file_id = 'file_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_file_update_dto = new \OpenAPI\Client\Model\CourseFileUpdateDto(); // \OpenAPI\Client\Model\CourseFileUpdateDto

try {
    $apiInstance->updateCourseFileAsync($tenant_id, $file_id, $api_version, $x_api_version, $course_file_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseFilesApi->updateCourseFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **file_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_file_update_dto** | [**\OpenAPI\Client\Model\CourseFileUpdateDto**](../Model/CourseFileUpdateDto.md)|  | [optional] |

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
