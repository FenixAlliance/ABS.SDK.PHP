# OpenAPI\Client\MarginsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getQuoteAsync()**](MarginsApi.md#getQuoteAsync) | **GET** /api/v2/SalesService/Margins/{marginId}/Details | Get margin details by ID |


## `getQuoteAsync()`

```php
getQuoteAsync($margin_id, $api_version, $x_api_version)
```

Get margin details by ID

Retrieves the details of a specific sales margin by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$margin_id = 'margin_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->getQuoteAsync($margin_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling MarginsApi->getQuoteAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **margin_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
