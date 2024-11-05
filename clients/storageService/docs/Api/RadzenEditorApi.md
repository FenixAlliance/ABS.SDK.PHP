# OpenAPI\Client\RadzenEditorApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2StorageServiceRadzenEditorUploadsIdPost()**](RadzenEditorApi.md#apiV2StorageServiceRadzenEditorUploadsIdPost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/{id} |  |
| [**apiV2StorageServiceRadzenEditorUploadsImagePost()**](RadzenEditorApi.md#apiV2StorageServiceRadzenEditorUploadsImagePost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Image |  |
| [**apiV2StorageServiceRadzenEditorUploadsMultiplePost()**](RadzenEditorApi.md#apiV2StorageServiceRadzenEditorUploadsMultiplePost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Multiple |  |
| [**apiV2StorageServiceRadzenEditorUploadsSinglePost()**](RadzenEditorApi.md#apiV2StorageServiceRadzenEditorUploadsSinglePost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Single |  |
| [**apiV2StorageServiceRadzenEditorUploadsSpecificPost()**](RadzenEditorApi.md#apiV2StorageServiceRadzenEditorUploadsSpecificPost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Specific |  |


## `apiV2StorageServiceRadzenEditorUploadsIdPost()`

```php
apiV2StorageServiceRadzenEditorUploadsIdPost($id, $tenant_id, $api_version, $x_api_version, $files)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$files = array("/path/to/file.txt"); // \SplFileObject[]

try {
    $apiInstance->apiV2StorageServiceRadzenEditorUploadsIdPost($id, $tenant_id, $api_version, $x_api_version, $files);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->apiV2StorageServiceRadzenEditorUploadsIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **files** | **\SplFileObject[]**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StorageServiceRadzenEditorUploadsImagePost()`

```php
apiV2StorageServiceRadzenEditorUploadsImagePost($tenant_id, $api_version, $x_api_version, $file)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->apiV2StorageServiceRadzenEditorUploadsImagePost($tenant_id, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->apiV2StorageServiceRadzenEditorUploadsImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StorageServiceRadzenEditorUploadsMultiplePost()`

```php
apiV2StorageServiceRadzenEditorUploadsMultiplePost($tenant_id, $api_version, $x_api_version, $files)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$files = array("/path/to/file.txt"); // \SplFileObject[]

try {
    $apiInstance->apiV2StorageServiceRadzenEditorUploadsMultiplePost($tenant_id, $api_version, $x_api_version, $files);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->apiV2StorageServiceRadzenEditorUploadsMultiplePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **files** | **\SplFileObject[]**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StorageServiceRadzenEditorUploadsSinglePost()`

```php
apiV2StorageServiceRadzenEditorUploadsSinglePost($tenant_id, $api_version, $x_api_version, $file)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->apiV2StorageServiceRadzenEditorUploadsSinglePost($tenant_id, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->apiV2StorageServiceRadzenEditorUploadsSinglePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StorageServiceRadzenEditorUploadsSpecificPost()`

```php
apiV2StorageServiceRadzenEditorUploadsSpecificPost($tenant_id, $api_version, $x_api_version, $file)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RadzenEditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->apiV2StorageServiceRadzenEditorUploadsSpecificPost($tenant_id, $api_version, $x_api_version, $file);
} catch (Exception $e) {
    echo 'Exception when calling RadzenEditorApi->apiV2StorageServiceRadzenEditorUploadsSpecificPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
