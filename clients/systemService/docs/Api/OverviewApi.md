# OpenAPI\Client\OverviewApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSystemOverview()**](OverviewApi.md#getSystemOverview) | **GET** /api/v2/SystemService/Overview | Get system overview information |


## `getSystemOverview()`

```php
getSystemOverview($api_version, $x_api_version): \OpenAPI\Client\Model\SystemOverviewDtoEnvelope
```

Get system overview information

Returns runtime, memory, and entity count information for the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OverviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemOverview($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverviewApi->getSystemOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SystemOverviewDtoEnvelope**](../Model/SystemOverviewDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
