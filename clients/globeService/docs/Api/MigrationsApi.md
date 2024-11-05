# OpenAPI\Client\MigrationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2GlobalSystemMigratePost()**](MigrationsApi.md#apiV2GlobalSystemMigratePost) | **POST** /api/v2/Global/System/Migrate |  |


## `apiV2GlobalSystemMigratePost()`

```php
apiV2GlobalSystemMigratePost($api_version, $x_api_version): \OpenAPI\Client\Model\PaymentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2GlobalSystemMigratePost($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationsApi->apiV2GlobalSystemMigratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
