# OpenAPI\Client\StudentProfilesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2LearningServiceStudentProfilesCountGet()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesCountGet) | **GET** /api/v2/LearningService/StudentProfiles/Count |  |
| [**apiV2LearningServiceStudentProfilesGet()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesGet) | **GET** /api/v2/LearningService/StudentProfiles |  |
| [**apiV2LearningServiceStudentProfilesPost()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesPost) | **POST** /api/v2/LearningService/StudentProfiles |  |
| [**apiV2LearningServiceStudentProfilesStudentProfileIdAverageGet()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesStudentProfileIdAverageGet) | **GET** /api/v2/LearningService/StudentProfiles/{studentProfileId}/Average |  |
| [**apiV2LearningServiceStudentProfilesStudentProfileIdDelete()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesStudentProfileIdDelete) | **DELETE** /api/v2/LearningService/StudentProfiles/{studentProfileId} |  |
| [**apiV2LearningServiceStudentProfilesStudentProfileIdGet()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesStudentProfileIdGet) | **GET** /api/v2/LearningService/StudentProfiles/{studentProfileId} |  |
| [**apiV2LearningServiceStudentProfilesStudentProfileIdHoursCompletedGet()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesStudentProfileIdHoursCompletedGet) | **GET** /api/v2/LearningService/StudentProfiles/{studentProfileId}/HoursCompleted |  |
| [**apiV2LearningServiceStudentProfilesStudentProfileIdPut()**](StudentProfilesApi.md#apiV2LearningServiceStudentProfilesStudentProfileIdPut) | **PUT** /api/v2/LearningService/StudentProfiles/{studentProfileId} |  |


## `apiV2LearningServiceStudentProfilesCountGet()`

```php
apiV2LearningServiceStudentProfilesCountGet($tenant_id, $api_version, $x_api_version): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceStudentProfilesCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2LearningServiceStudentProfilesGet()`

```php
apiV2LearningServiceStudentProfilesGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\StudentProfileDto[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceStudentProfilesGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StudentProfileDto[]**](../Model/StudentProfileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2LearningServiceStudentProfilesPost()`

```php
apiV2LearningServiceStudentProfilesPost($tenant_id, $api_version, $x_api_version, $student_profile_create_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$student_profile_create_dto = new \OpenAPI\Client\Model\StudentProfileCreateDto(); // \OpenAPI\Client\Model\StudentProfileCreateDto

try {
    $apiInstance->apiV2LearningServiceStudentProfilesPost($tenant_id, $api_version, $x_api_version, $student_profile_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **student_profile_create_dto** | [**\OpenAPI\Client\Model\StudentProfileCreateDto**](../Model/StudentProfileCreateDto.md)|  | [optional] |

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

## `apiV2LearningServiceStudentProfilesStudentProfileIdAverageGet()`

```php
apiV2LearningServiceStudentProfilesStudentProfileIdAverageGet($tenant_id, $student_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AverageDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$student_profile_id = 'student_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceStudentProfilesStudentProfileIdAverageGet($tenant_id, $student_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesStudentProfileIdAverageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **student_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AverageDto**](../Model/AverageDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2LearningServiceStudentProfilesStudentProfileIdDelete()`

```php
apiV2LearningServiceStudentProfilesStudentProfileIdDelete($tenant_id, $student_profile_id, $api_version, $x_api_version)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$student_profile_id = 'student_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->apiV2LearningServiceStudentProfilesStudentProfileIdDelete($tenant_id, $student_profile_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesStudentProfileIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **student_profile_id** | **string**|  | |
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

## `apiV2LearningServiceStudentProfilesStudentProfileIdGet()`

```php
apiV2LearningServiceStudentProfilesStudentProfileIdGet($tenant_id, $student_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\StudentProfileDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$student_profile_id = 'student_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceStudentProfilesStudentProfileIdGet($tenant_id, $student_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesStudentProfileIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **student_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StudentProfileDto**](../Model/StudentProfileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2LearningServiceStudentProfilesStudentProfileIdHoursCompletedGet()`

```php
apiV2LearningServiceStudentProfilesStudentProfileIdHoursCompletedGet($tenant_id, $student_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CountDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$student_profile_id = 'student_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2LearningServiceStudentProfilesStudentProfileIdHoursCompletedGet($tenant_id, $student_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesStudentProfileIdHoursCompletedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **student_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CountDto**](../Model/CountDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2LearningServiceStudentProfilesStudentProfileIdPut()`

```php
apiV2LearningServiceStudentProfilesStudentProfileIdPut($tenant_id, $student_profile_id, $api_version, $x_api_version, $student_profile_update_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StudentProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$student_profile_id = 'student_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$student_profile_update_dto = new \OpenAPI\Client\Model\StudentProfileUpdateDto(); // \OpenAPI\Client\Model\StudentProfileUpdateDto

try {
    $apiInstance->apiV2LearningServiceStudentProfilesStudentProfileIdPut($tenant_id, $student_profile_id, $api_version, $x_api_version, $student_profile_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling StudentProfilesApi->apiV2LearningServiceStudentProfilesStudentProfileIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **student_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **student_profile_update_dto** | [**\OpenAPI\Client\Model\StudentProfileUpdateDto**](../Model/StudentProfileUpdateDto.md)|  | [optional] |

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
