# OpenAPI\Client\InstructorProfilesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2LearningServiceInstructorProfilesCountGet()**](InstructorProfilesApi.md#apiV2LearningServiceInstructorProfilesCountGet) | **GET** /api/v2/LearningService/InstructorProfiles/Count |  |
| [**apiV2LearningServiceInstructorProfilesGet()**](InstructorProfilesApi.md#apiV2LearningServiceInstructorProfilesGet) | **GET** /api/v2/LearningService/InstructorProfiles |  |
| [**apiV2LearningServiceInstructorProfilesInstructorProfileIdDelete()**](InstructorProfilesApi.md#apiV2LearningServiceInstructorProfilesInstructorProfileIdDelete) | **DELETE** /api/v2/LearningService/InstructorProfiles/{instructorProfileId} |  |
| [**apiV2LearningServiceInstructorProfilesInstructorProfileIdGet()**](InstructorProfilesApi.md#apiV2LearningServiceInstructorProfilesInstructorProfileIdGet) | **GET** /api/v2/LearningService/InstructorProfiles/{instructorProfileId} |  |
| [**apiV2LearningServiceInstructorProfilesInstructorProfileIdPut()**](InstructorProfilesApi.md#apiV2LearningServiceInstructorProfilesInstructorProfileIdPut) | **PUT** /api/v2/LearningService/InstructorProfiles/{instructorProfileId} |  |
| [**apiV2LearningServiceInstructorProfilesPost()**](InstructorProfilesApi.md#apiV2LearningServiceInstructorProfilesPost) | **POST** /api/v2/LearningService/InstructorProfiles |  |


## `apiV2LearningServiceInstructorProfilesCountGet()`

```php
apiV2LearningServiceInstructorProfilesCountGet($tenant_id, $api_version, $x_api_version): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstructorProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceInstructorProfilesCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructorProfilesApi->apiV2LearningServiceInstructorProfilesCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2LearningServiceInstructorProfilesGet()`

```php
apiV2LearningServiceInstructorProfilesGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InstructorProfileDto[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstructorProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceInstructorProfilesGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructorProfilesApi->apiV2LearningServiceInstructorProfilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InstructorProfileDto[]**](../Model/InstructorProfileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2LearningServiceInstructorProfilesInstructorProfileIdDelete()`

```php
apiV2LearningServiceInstructorProfilesInstructorProfileIdDelete($tenant_id, $instructor_profile_id, $api_version, $x_api_version)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstructorProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$instructor_profile_id = 'instructor_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->apiV2LearningServiceInstructorProfilesInstructorProfileIdDelete($tenant_id, $instructor_profile_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling InstructorProfilesApi->apiV2LearningServiceInstructorProfilesInstructorProfileIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **instructor_profile_id** | **string**|  | |
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

## `apiV2LearningServiceInstructorProfilesInstructorProfileIdGet()`

```php
apiV2LearningServiceInstructorProfilesInstructorProfileIdGet($tenant_id, $instructor_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InstructorProfileDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstructorProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$instructor_profile_id = 'instructor_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceInstructorProfilesInstructorProfileIdGet($tenant_id, $instructor_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructorProfilesApi->apiV2LearningServiceInstructorProfilesInstructorProfileIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **instructor_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InstructorProfileDto**](../Model/InstructorProfileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2LearningServiceInstructorProfilesInstructorProfileIdPut()`

```php
apiV2LearningServiceInstructorProfilesInstructorProfileIdPut($tenant_id, $instructor_profile_id, $api_version, $x_api_version, $instructor_profile_update_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstructorProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$instructor_profile_id = 'instructor_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$instructor_profile_update_dto = new \OpenAPI\Client\Model\InstructorProfileUpdateDto(); // \OpenAPI\Client\Model\InstructorProfileUpdateDto

try {
    $apiInstance->apiV2LearningServiceInstructorProfilesInstructorProfileIdPut($tenant_id, $instructor_profile_id, $api_version, $x_api_version, $instructor_profile_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling InstructorProfilesApi->apiV2LearningServiceInstructorProfilesInstructorProfileIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **instructor_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **instructor_profile_update_dto** | [**\OpenAPI\Client\Model\InstructorProfileUpdateDto**](../Model/InstructorProfileUpdateDto.md)|  | [optional] |

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

## `apiV2LearningServiceInstructorProfilesPost()`

```php
apiV2LearningServiceInstructorProfilesPost($tenant_id, $api_version, $x_api_version, $instructor_profile_create_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstructorProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$instructor_profile_create_dto = new \OpenAPI\Client\Model\InstructorProfileCreateDto(); // \OpenAPI\Client\Model\InstructorProfileCreateDto

try {
    $apiInstance->apiV2LearningServiceInstructorProfilesPost($tenant_id, $api_version, $x_api_version, $instructor_profile_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling InstructorProfilesApi->apiV2LearningServiceInstructorProfilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **instructor_profile_create_dto** | [**\OpenAPI\Client\Model\InstructorProfileCreateDto**](../Model/InstructorProfileCreateDto.md)|  | [optional] |

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
