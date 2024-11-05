# OpenAPI\Client\BlobsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBlobAsync()**](BlobsApi.md#getBlobAsync) | **GET** /api/v2/StorageService/Blobs/Single |  |
| [**getBlobsAsync()**](BlobsApi.md#getBlobsAsync) | **GET** /api/v2/StorageService/Blobs |  |


## `getBlobAsync()`

```php
getBlobAsync($tenant_id, $file_path, $api_version, $x_api_version): \OpenAPI\Client\Model\BlobEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$file_path = 'file_path_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlobAsync($tenant_id, $file_path, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->getBlobAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **file_path** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlobEnvelope**](../Model/BlobEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlobsAsync()`

```php
getBlobsAsync($tenant_id, $folder_path, $browse_filter, $file_prefix, $recurse, $max_results, $include_attributes, $api_version, $x_api_version): \OpenAPI\Client\Model\BlobEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$folder_path = 'folder_path_example'; // string
$browse_filter = 'browse_filter_example'; // string
$file_prefix = 'file_prefix_example'; // string
$recurse = True; // bool
$max_results = 56; // int
$include_attributes = True; // bool
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBlobsAsync($tenant_id, $folder_path, $browse_filter, $file_prefix, $recurse, $max_results, $include_attributes, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->getBlobsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **folder_path** | **string**|  | [optional] |
| **browse_filter** | **string**|  | [optional] |
| **file_prefix** | **string**|  | [optional] |
| **recurse** | **bool**|  | [optional] |
| **max_results** | **int**|  | [optional] |
| **include_attributes** | **bool**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BlobEnvelope**](../Model/BlobEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
