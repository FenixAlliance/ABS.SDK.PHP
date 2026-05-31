# OpenAPI\Client\ThemesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLatestCurrencyRatesModelAsync()**](ThemesApi.md#getLatestCurrencyRatesModelAsync) | **GET** /api/v2/ContentService/Themes/Update | Update base web content themes |


## `getLatestCurrencyRatesModelAsync()`

```php
getLatestCurrencyRatesModelAsync($api_version, $x_api_version)
```

Update base web content themes

Triggers an update of the base web content themes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->getLatestCurrencyRatesModelAsync($api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ThemesApi->getLatestCurrencyRatesModelAsync: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
