# OpenAPI\Client\SigningLogsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSigningLogByIdAsync()**](SigningLogsApi.md#getSigningLogByIdAsync) | **GET** /api/v2/TrustService/SigningLogs/{id} | Get signing log by ID |
| [**getSigningLogsAsync()**](SigningLogsApi.md#getSigningLogsAsync) | **GET** /api/v2/TrustService/SigningLogs | Get all signing logs |
| [**getSigningLogsCountAsync()**](SigningLogsApi.md#getSigningLogsCountAsync) | **GET** /api/v2/TrustService/SigningLogs/Count | Get signing logs count |


## `getSigningLogByIdAsync()`

```php
getSigningLogByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SigningLogDto
```

Get signing log by ID

Retrieves a specific signing log by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSigningLogByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningLogsApi->getSigningLogByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningLogDto**](../Model/SigningLogDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningLogsAsync()`

```php
getSigningLogsAsync($tenant_id, $api_version, $x_api_version, $signing_log_dto_collection_query_parameters): \OpenAPI\Client\Model\SigningLogDtoListEnvelope
```

Get all signing logs

Retrieves all signing logs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningLogsAsync($tenant_id, $api_version, $x_api_version, $signing_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningLogsApi->getSigningLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningLogDtoCollectionQueryParameters**](../Model/SigningLogDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningLogDtoListEnvelope**](../Model/SigningLogDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningLogsCountAsync()`

```php
getSigningLogsCountAsync($tenant_id, $api_version, $x_api_version, $signing_log_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get signing logs count

Returns the count of signing logs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningLogsCountAsync($tenant_id, $api_version, $x_api_version, $signing_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningLogsApi->getSigningLogsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningLogDtoCollectionQueryParameters**](../Model/SigningLogDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
