# OpenAPI\Client\TrackingPixelsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTrackingPixelAsync()**](TrackingPixelsApi.md#getTrackingPixelAsync) | **GET** /api/v2/MarketingService/TrackingPixels/{pixelId} | Get a tracking pixel |


## `getTrackingPixelAsync()`

```php
getTrackingPixelAsync($pixel_id, $api_version, $x_api_version): \OpenAPI\Client\Model\OrderDtoEnvelope
```

Get a tracking pixel

Retrieves a tracking pixel by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrackingPixelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pixel_id = 'pixel_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTrackingPixelAsync($pixel_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPixelsApi->getTrackingPixelAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pixel_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderDtoEnvelope**](../Model/OrderDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
