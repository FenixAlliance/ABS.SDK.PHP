# OpenAPI\Client\LogsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLogsAsync()**](LogsApi.md#getLogsAsync) | **GET** /api/v2/SecurityService/Logs | Get tenant logs |
| [**getLogsCountAsync()**](LogsApi.md#getLogsCountAsync) | **GET** /api/v2/SecurityService/Logs/Count | Get tenant logs count |


## `getLogsAsync()`

```php
getLogsAsync($tenant_id, $api_version, $x_api_version, $log_dto_collection_query_parameters): \OpenAPI\Client\Model\LogDtoListEnvelope
```

Get tenant logs

Retrieves logs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$log_dto_collection_query_parameters = new \OpenAPI\Client\Model\LogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLogsAsync($tenant_id, $api_version, $x_api_version, $log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LogDtoCollectionQueryParameters**](../Model/LogDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LogDtoListEnvelope**](../Model/LogDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogsCountAsync()`

```php
getLogsCountAsync($tenant_id, $api_version, $x_api_version, $log_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get tenant logs count

Retrieves the count of logs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$log_dto_collection_query_parameters = new \OpenAPI\Client\Model\LogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLogsCountAsync($tenant_id, $api_version, $x_api_version, $log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getLogsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LogDtoCollectionQueryParameters**](../Model/LogDtoCollectionQueryParameters.md)|  | [optional] |

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
