# OpenAPI\Client\AntiforgeryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SystemServiceAntiforgeryGetAndStoreTokensGet()**](AntiforgeryApi.md#apiV2SystemServiceAntiforgeryGetAndStoreTokensGet) | **GET** /api/v2/SystemService/Antiforgery/GetAndStoreTokens |  |
| [**apiV2SystemServiceAntiforgeryIsRequestValidGet()**](AntiforgeryApi.md#apiV2SystemServiceAntiforgeryIsRequestValidGet) | **GET** /api/v2/SystemService/Antiforgery/IsRequestValid |  |


## `apiV2SystemServiceAntiforgeryGetAndStoreTokensGet()`

```php
apiV2SystemServiceAntiforgeryGetAndStoreTokensGet($api_version, $x_api_version)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AntiforgeryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->apiV2SystemServiceAntiforgeryGetAndStoreTokensGet($api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling AntiforgeryApi->apiV2SystemServiceAntiforgeryGetAndStoreTokensGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SystemServiceAntiforgeryIsRequestValidGet()`

```php
apiV2SystemServiceAntiforgeryIsRequestValidGet($api_version, $x_api_version)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AntiforgeryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->apiV2SystemServiceAntiforgeryIsRequestValidGet($api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling AntiforgeryApi->apiV2SystemServiceAntiforgeryIsRequestValidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
