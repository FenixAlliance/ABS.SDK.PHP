# OpenAPI\Client\TaskTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ProjectsServiceTaskTypesPost()**](TaskTypesApi.md#apiV2ProjectsServiceTaskTypesPost) | **POST** /api/v2/ProjectsService/TaskTypes |  |
| [**apiV2ProjectsServiceTaskTypesTaskTypeIdDelete()**](TaskTypesApi.md#apiV2ProjectsServiceTaskTypesTaskTypeIdDelete) | **DELETE** /api/v2/ProjectsService/TaskTypes/{taskTypeId} |  |
| [**apiV2ProjectsServiceTaskTypesTaskTypeIdGet()**](TaskTypesApi.md#apiV2ProjectsServiceTaskTypesTaskTypeIdGet) | **GET** /api/v2/ProjectsService/TaskTypes/{taskTypeId} |  |
| [**apiV2ProjectsServiceTaskTypesTaskTypeIdPut()**](TaskTypesApi.md#apiV2ProjectsServiceTaskTypesTaskTypeIdPut) | **PUT** /api/v2/ProjectsService/TaskTypes/{taskTypeId} |  |


## `apiV2ProjectsServiceTaskTypesPost()`

```php
apiV2ProjectsServiceTaskTypesPost($tenant_id, $api_version, $x_api_version, $task_type_create_dto): \OpenAPI\Client\Model\TaskTypeDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$task_type_create_dto = new \OpenAPI\Client\Model\TaskTypeCreateDto(); // \OpenAPI\Client\Model\TaskTypeCreateDto

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskTypesPost($tenant_id, $api_version, $x_api_version, $task_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->apiV2ProjectsServiceTaskTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **task_type_create_dto** | [**\OpenAPI\Client\Model\TaskTypeCreateDto**](../Model/TaskTypeCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskTypesTaskTypeIdDelete()`

```php
apiV2ProjectsServiceTaskTypesTaskTypeIdDelete($task_type_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaskTypeDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_type_id = 'task_type_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskTypesTaskTypeIdDelete($task_type_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->apiV2ProjectsServiceTaskTypesTaskTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_type_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskTypesTaskTypeIdGet()`

```php
apiV2ProjectsServiceTaskTypesTaskTypeIdGet($task_type_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaskTypeDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_type_id = 'task_type_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskTypesTaskTypeIdGet($task_type_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->apiV2ProjectsServiceTaskTypesTaskTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_type_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskTypesTaskTypeIdPut()`

```php
apiV2ProjectsServiceTaskTypesTaskTypeIdPut($task_type_id, $tenant_id, $api_version, $x_api_version, $task_type_update_dto): \OpenAPI\Client\Model\TaskTypeDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_type_id = 'task_type_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$task_type_update_dto = new \OpenAPI\Client\Model\TaskTypeUpdateDto(); // \OpenAPI\Client\Model\TaskTypeUpdateDto

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskTypesTaskTypeIdPut($task_type_id, $tenant_id, $api_version, $x_api_version, $task_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskTypesApi->apiV2ProjectsServiceTaskTypesTaskTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_type_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **task_type_update_dto** | [**\OpenAPI\Client\Model\TaskTypeUpdateDto**](../Model/TaskTypeUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskTypeDto**](../Model/TaskTypeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
