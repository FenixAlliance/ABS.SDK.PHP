# OpenAPI\Client\ProjectTimeLogsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TimeTrackerServiceProjectTimeLogsByResponsibleContactGet()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsByResponsibleContactGet) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/ByResponsibleContact |  |
| [**apiV2TimeTrackerServiceProjectTimeLogsCreatedByContactGet()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsCreatedByContactGet) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/CreatedByContact |  |
| [**apiV2TimeTrackerServiceProjectTimeLogsForProjectProjectIdGet()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsForProjectProjectIdGet) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/ForProject/{projectId} |  |
| [**apiV2TimeTrackerServiceProjectTimeLogsGet()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsGet) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs |  |
| [**apiV2TimeTrackerServiceProjectTimeLogsPost()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsPost) | **POST** /api/v2/TimeTrackerService/ProjectTimeLogs |  |
| [**apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdDelete()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdDelete) | **DELETE** /api/v2/TimeTrackerService/ProjectTimeLogs/{timeLogId} |  |
| [**apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdGet()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdGet) | **GET** /api/v2/TimeTrackerService/ProjectTimeLogs/{timeLogId} |  |
| [**apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdPut()**](ProjectTimeLogsApi.md#apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdPut) | **PUT** /api/v2/TimeTrackerService/ProjectTimeLogs/{timeLogId} |  |


## `apiV2TimeTrackerServiceProjectTimeLogsByResponsibleContactGet()`

```php
apiV2TimeTrackerServiceProjectTimeLogsByResponsibleContactGet($contact_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsByResponsibleContactGet($contact_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsByResponsibleContactGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope**](../Model/ProjectTimeLogDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceProjectTimeLogsCreatedByContactGet()`

```php
apiV2TimeTrackerServiceProjectTimeLogsCreatedByContactGet($contact_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsCreatedByContactGet($contact_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsCreatedByContactGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope**](../Model/ProjectTimeLogDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceProjectTimeLogsForProjectProjectIdGet()`

```php
apiV2TimeTrackerServiceProjectTimeLogsForProjectProjectIdGet($project_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsForProjectProjectIdGet($project_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsForProjectProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope**](../Model/ProjectTimeLogDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceProjectTimeLogsGet()`

```php
apiV2TimeTrackerServiceProjectTimeLogsGet($tenant_id, $project_period_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$project_period_id = 'project_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsGet($tenant_id, $project_period_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **project_period_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoListEnvelope**](../Model/ProjectTimeLogDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceProjectTimeLogsPost()`

```php
apiV2TimeTrackerServiceProjectTimeLogsPost($tenant_id, $api_version, $x_api_version, $project_time_log_create_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_time_log_create_dto = new \OpenAPI\Client\Model\ProjectTimeLogCreateDto(); // \OpenAPI\Client\Model\ProjectTimeLogCreateDto

try {
    $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsPost($tenant_id, $api_version, $x_api_version, $project_time_log_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_time_log_create_dto** | [**\OpenAPI\Client\Model\ProjectTimeLogCreateDto**](../Model/ProjectTimeLogCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdDelete()`

```php
apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdDelete($tenant_id, $time_log_id, $api_version, $x_api_version)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$time_log_id = 'time_log_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdDelete($tenant_id, $time_log_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **time_log_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdGet()`

```php
apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdGet($time_log_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProjectTimeLogDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_log_id = 'time_log_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdGet($time_log_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_log_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTimeLogDtoEnvelope**](../Model/ProjectTimeLogDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdPut()`

```php
apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdPut($time_log_id, $tenant_id, $api_version, $x_api_version, $project_time_log_update_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectTimeLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_log_id = 'time_log_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$project_time_log_update_dto = new \OpenAPI\Client\Model\ProjectTimeLogUpdateDto(); // \OpenAPI\Client\Model\ProjectTimeLogUpdateDto

try {
    $apiInstance->apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdPut($time_log_id, $tenant_id, $api_version, $x_api_version, $project_time_log_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTimeLogsApi->apiV2TimeTrackerServiceProjectTimeLogsTimeLogIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_log_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **project_time_log_update_dto** | [**\OpenAPI\Client\Model\ProjectTimeLogUpdateDto**](../Model/ProjectTimeLogUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
