# OpenAPI\Client\TaskCategoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ProjectsServiceTaskCategoriesGet()**](TaskCategoriesApi.md#apiV2ProjectsServiceTaskCategoriesGet) | **GET** /api/v2/ProjectsService/TaskCategories |  |
| [**apiV2ProjectsServiceTaskCategoriesPost()**](TaskCategoriesApi.md#apiV2ProjectsServiceTaskCategoriesPost) | **POST** /api/v2/ProjectsService/TaskCategories |  |
| [**apiV2ProjectsServiceTaskCategoriesTaskCategoryIdDelete()**](TaskCategoriesApi.md#apiV2ProjectsServiceTaskCategoriesTaskCategoryIdDelete) | **DELETE** /api/v2/ProjectsService/TaskCategories/{taskCategoryId} |  |
| [**apiV2ProjectsServiceTaskCategoriesTaskCategoryIdGet()**](TaskCategoriesApi.md#apiV2ProjectsServiceTaskCategoriesTaskCategoryIdGet) | **GET** /api/v2/ProjectsService/TaskCategories/{taskCategoryId} |  |
| [**apiV2ProjectsServiceTaskCategoriesTaskCategoryIdPut()**](TaskCategoriesApi.md#apiV2ProjectsServiceTaskCategoriesTaskCategoryIdPut) | **PUT** /api/v2/ProjectsService/TaskCategories/{taskCategoryId} |  |
| [**apiV2ProjectsServiceTaskCategoriesTaskCategoryIdTypesGet()**](TaskCategoriesApi.md#apiV2ProjectsServiceTaskCategoriesTaskCategoryIdTypesGet) | **GET** /api/v2/ProjectsService/TaskCategories/{taskCategoryId}/Types |  |


## `apiV2ProjectsServiceTaskCategoriesGet()`

```php
apiV2ProjectsServiceTaskCategoriesGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaskCategoryDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskCategoriesGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->apiV2ProjectsServiceTaskCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDtoListEnvelope**](../Model/TaskCategoryDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskCategoriesPost()`

```php
apiV2ProjectsServiceTaskCategoriesPost($tenant_id, $api_version, $x_api_version, $task_category_create_dto): \OpenAPI\Client\Model\TaskCategoryDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$task_category_create_dto = new \OpenAPI\Client\Model\TaskCategoryCreateDto(); // \OpenAPI\Client\Model\TaskCategoryCreateDto

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskCategoriesPost($tenant_id, $api_version, $x_api_version, $task_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->apiV2ProjectsServiceTaskCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **task_category_create_dto** | [**\OpenAPI\Client\Model\TaskCategoryCreateDto**](../Model/TaskCategoryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskCategoriesTaskCategoryIdDelete()`

```php
apiV2ProjectsServiceTaskCategoriesTaskCategoryIdDelete($task_category_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaskCategoryDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdDelete($task_category_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskCategoriesTaskCategoryIdGet()`

```php
apiV2ProjectsServiceTaskCategoriesTaskCategoryIdGet($task_category_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaskCategoryDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdGet($task_category_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskCategoriesTaskCategoryIdPut()`

```php
apiV2ProjectsServiceTaskCategoriesTaskCategoryIdPut($task_category_id, $tenant_id, $api_version, $x_api_version, $task_category_update_dto): \OpenAPI\Client\Model\TaskCategoryDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$task_category_update_dto = new \OpenAPI\Client\Model\TaskCategoryUpdateDto(); // \OpenAPI\Client\Model\TaskCategoryUpdateDto

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdPut($task_category_id, $tenant_id, $api_version, $x_api_version, $task_category_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **task_category_update_dto** | [**\OpenAPI\Client\Model\TaskCategoryUpdateDto**](../Model/TaskCategoryUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ProjectsServiceTaskCategoriesTaskCategoryIdTypesGet()`

```php
apiV2ProjectsServiceTaskCategoriesTaskCategoryIdTypesGet($task_category_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaskCategoryDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_category_id = 'task_category_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdTypesGet($task_category_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->apiV2ProjectsServiceTaskCategoriesTaskCategoryIdTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_category_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCategoryDto**](../Model/TaskCategoryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
