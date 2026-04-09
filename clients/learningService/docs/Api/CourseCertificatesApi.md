# OpenAPI\Client\CourseCertificatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCourseCertificateAsync()**](CourseCertificatesApi.md#createCourseCertificateAsync) | **POST** /api/v2/LearningService/CourseCertificates | Create a course certificate |
| [**createCourseCertificateTemplateAsync()**](CourseCertificatesApi.md#createCourseCertificateTemplateAsync) | **POST** /api/v2/LearningService/CourseCertificates/Template | Create a certificate template |
| [**deleteCourseCertificateAsync()**](CourseCertificatesApi.md#deleteCourseCertificateAsync) | **DELETE** /api/v2/LearningService/CourseCertificates/{courseCertificateId} | Delete a course certificate |
| [**deleteCourseCertificateTemplateAsync()**](CourseCertificatesApi.md#deleteCourseCertificateTemplateAsync) | **DELETE** /api/v2/LearningService/CourseCertificates/Template/{courseCertificateTemplateId} | Delete a certificate template |
| [**getCourseCertificateAsync()**](CourseCertificatesApi.md#getCourseCertificateAsync) | **GET** /api/v2/LearningService/CourseCertificates/{courseCertificateId} | Get course certificate by ID |
| [**getCourseCertificateTemplateAsync()**](CourseCertificatesApi.md#getCourseCertificateTemplateAsync) | **GET** /api/v2/LearningService/CourseCertificates/Template/{courseCertificateTemplateId} | Get certificate template by ID |
| [**getCourseCertificateTemplatesAsync()**](CourseCertificatesApi.md#getCourseCertificateTemplatesAsync) | **GET** /api/v2/LearningService/CourseCertificates/Template | Get all certificate templates |
| [**getCourseCertificatesAsync()**](CourseCertificatesApi.md#getCourseCertificatesAsync) | **GET** /api/v2/LearningService/CourseCertificates | Get all course certificates |
| [**getCourseCertificatesCountAsync()**](CourseCertificatesApi.md#getCourseCertificatesCountAsync) | **GET** /api/v2/LearningService/CourseCertificates/Count | Get course certificates count |
| [**updateCourseCertificateAsync()**](CourseCertificatesApi.md#updateCourseCertificateAsync) | **PUT** /api/v2/LearningService/CourseCertificates/{courseCertificateId} | Update a course certificate |


## `createCourseCertificateAsync()`

```php
createCourseCertificateAsync($tenant_id, $api_version, $x_api_version, $course_completion_certificate_create_dto)
```

Create a course certificate

Creates a new course certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_completion_certificate_create_dto = new \OpenAPI\Client\Model\CourseCompletionCertificateCreateDto(); // \OpenAPI\Client\Model\CourseCompletionCertificateCreateDto

try {
    $apiInstance->createCourseCertificateAsync($tenant_id, $api_version, $x_api_version, $course_completion_certificate_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->createCourseCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_completion_certificate_create_dto** | [**\OpenAPI\Client\Model\CourseCompletionCertificateCreateDto**](../Model/CourseCompletionCertificateCreateDto.md)|  | [optional] |

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

## `createCourseCertificateTemplateAsync()`

```php
createCourseCertificateTemplateAsync($tenant_id, $api_version, $x_api_version, $course_certificate_template_create_dto)
```

Create a certificate template

Creates a new course certificate template for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_certificate_template_create_dto = new \OpenAPI\Client\Model\CourseCertificateTemplateCreateDto(); // \OpenAPI\Client\Model\CourseCertificateTemplateCreateDto

try {
    $apiInstance->createCourseCertificateTemplateAsync($tenant_id, $api_version, $x_api_version, $course_certificate_template_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->createCourseCertificateTemplateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_certificate_template_create_dto** | [**\OpenAPI\Client\Model\CourseCertificateTemplateCreateDto**](../Model/CourseCertificateTemplateCreateDto.md)|  | [optional] |

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

## `deleteCourseCertificateAsync()`

```php
deleteCourseCertificateAsync($tenant_id, $course_certificate_id, $api_version, $x_api_version)
```

Delete a course certificate

Deletes a course certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_certificate_id = 'course_certificate_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseCertificateAsync($tenant_id, $course_certificate_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->deleteCourseCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_certificate_id** | **string**|  | |
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

## `deleteCourseCertificateTemplateAsync()`

```php
deleteCourseCertificateTemplateAsync($tenant_id, $course_certificate_template_id, $api_version, $x_api_version)
```

Delete a certificate template

Deletes a course certificate template for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_certificate_template_id = 'course_certificate_template_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCourseCertificateTemplateAsync($tenant_id, $course_certificate_template_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->deleteCourseCertificateTemplateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_certificate_template_id** | **string**|  | |
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

## `getCourseCertificateAsync()`

```php
getCourseCertificateAsync($tenant_id, $course_certificate_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseCompletionCertificateDto
```

Get course certificate by ID

Retrieves a specific course certificate by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_certificate_id = 'course_certificate_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCertificateAsync($tenant_id, $course_certificate_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->getCourseCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_certificate_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseCompletionCertificateDto**](../Model/CourseCompletionCertificateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseCertificateTemplateAsync()`

```php
getCourseCertificateTemplateAsync($tenant_id, $course_certificate_template_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseCertificateTemplateDto
```

Get certificate template by ID

Retrieves a specific course certificate template by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_certificate_template_id = 'course_certificate_template_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCertificateTemplateAsync($tenant_id, $course_certificate_template_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->getCourseCertificateTemplateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_certificate_template_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseCertificateTemplateDto**](../Model/CourseCertificateTemplateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseCertificateTemplatesAsync()`

```php
getCourseCertificateTemplatesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseCertificateTemplateDto[]
```

Get all certificate templates

Retrieves all course certificate templates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCertificateTemplatesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->getCourseCertificateTemplatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseCertificateTemplateDto[]**](../Model/CourseCertificateTemplateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseCertificatesAsync()`

```php
getCourseCertificatesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CourseCompletionCertificateDto[]
```

Get all course certificates

Retrieves all course certificates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCertificatesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->getCourseCertificatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CourseCompletionCertificateDto[]**](../Model/CourseCompletionCertificateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseCertificatesCountAsync()`

```php
getCourseCertificatesCountAsync($tenant_id, $api_version, $x_api_version): int
```

Get course certificates count

Returns the count of course certificates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCourseCertificatesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->getCourseCertificatesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateCourseCertificateAsync()`

```php
updateCourseCertificateAsync($tenant_id, $course_certificate_id, $api_version, $x_api_version, $course_completion_certificate_update_dto)
```

Update a course certificate

Updates an existing course certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CourseCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$course_certificate_id = 'course_certificate_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$course_completion_certificate_update_dto = new \OpenAPI\Client\Model\CourseCompletionCertificateUpdateDto(); // \OpenAPI\Client\Model\CourseCompletionCertificateUpdateDto

try {
    $apiInstance->updateCourseCertificateAsync($tenant_id, $course_certificate_id, $api_version, $x_api_version, $course_completion_certificate_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CourseCertificatesApi->updateCourseCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **course_certificate_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **course_completion_certificate_update_dto** | [**\OpenAPI\Client\Model\CourseCompletionCertificateUpdateDto**](../Model/CourseCompletionCertificateUpdateDto.md)|  | [optional] |

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
