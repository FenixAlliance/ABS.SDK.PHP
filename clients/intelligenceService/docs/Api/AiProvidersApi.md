# OpenAPI\Client\AiProvidersApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAiProvidersAsync()**](AiProvidersApi.md#getAiProvidersAsync) | **GET** /api/v2/IntelligenceService/AiProviders | Get the available AI providers |


## `getAiProvidersAsync()`

```php
getAiProvidersAsync($api_version, $x_api_version): \OpenAPI\Client\Model\AiProviderDtoListEnvelope
```

Get the available AI providers

Returns every AI provider key this instance has a registered adapter for. The set is a property of the deployment, so it is not tenant-scoped; what varies per tenant is the credential for a provider, which is never returned here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AiProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAiProvidersAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AiProvidersApi->getAiProvidersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AiProviderDtoListEnvelope**](../Model/AiProviderDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
