# OpenAPI\Client\TimezonesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countTimezonesAsync()**](TimezonesApi.md#countTimezonesAsync) | **GET** /api/v2/GlobeService/Timezones/Count | Count timezones |
| [**getTimeZoneByIdAsync()**](TimezonesApi.md#getTimeZoneByIdAsync) | **GET** /api/v2/GlobeService/Timezones/{timeZoneId} | Get timezone by ID |
| [**getTimeZonesAsync()**](TimezonesApi.md#getTimeZonesAsync) | **GET** /api/v2/GlobeService/Timezones | Get all timezones |


## `countTimezonesAsync()`

```php
countTimezonesAsync($api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count timezones

Returns the total number of supported timezones, with optional OData filtering.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimezonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countTimezonesAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimezonesApi->countTimezonesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTimeZoneByIdAsync()`

```php
getTimeZoneByIdAsync($time_zone_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TimezoneDtoEnvelope
```

Get timezone by ID

Retrieves a single timezone by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimezonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$time_zone_id = 'time_zone_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTimeZoneByIdAsync($time_zone_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimezonesApi->getTimeZoneByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_zone_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TimezoneDtoEnvelope**](../Model/TimezoneDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTimeZonesAsync()`

```php
getTimeZonesAsync($api_version, $x_api_version): \OpenAPI\Client\Model\TimezoneDtoListEnvelope
```

Get all timezones

Retrieves the list of all supported timezones with optional OData pagination and filtering.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimezonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTimeZonesAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimezonesApi->getTimeZonesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TimezoneDtoListEnvelope**](../Model/TimezoneDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
