# OpenAPI\Client\SecurityLogsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSecurityLogsAsync()**](SecurityLogsApi.md#getSecurityLogsAsync) | **GET** /api/v2/SecurityService/SecurityLogs | Get business security logs |
| [**getSecurityLogsCountAsync()**](SecurityLogsApi.md#getSecurityLogsCountAsync) | **GET** /api/v2/SecurityService/SecurityLogs/Count | Get business security logs count |


## `getSecurityLogsAsync()`

```php
getSecurityLogsAsync($tenant_id, $api_version, $x_api_version, $business_security_log_dto_collection_query_parameters): \OpenAPI\Client\Model\BusinessSecurityLogDtoListEnvelope
```

Get business security logs

Retrieves security logs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$business_security_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\BusinessSecurityLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BusinessSecurityLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSecurityLogsAsync($tenant_id, $api_version, $x_api_version, $business_security_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityLogsApi->getSecurityLogsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **business_security_log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BusinessSecurityLogDtoCollectionQueryParameters**](../Model/BusinessSecurityLogDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BusinessSecurityLogDtoListEnvelope**](../Model/BusinessSecurityLogDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecurityLogsCountAsync()`

```php
getSecurityLogsCountAsync($tenant_id, $api_version, $x_api_version, $business_security_log_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get business security logs count

Retrieves the count of security logs for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$business_security_log_dto_collection_query_parameters = new \OpenAPI\Client\Model\BusinessSecurityLogDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BusinessSecurityLogDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSecurityLogsCountAsync($tenant_id, $api_version, $x_api_version, $business_security_log_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityLogsApi->getSecurityLogsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **business_security_log_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BusinessSecurityLogDtoCollectionQueryParameters**](../Model/BusinessSecurityLogDtoCollectionQueryParameters.md)|  | [optional] |

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
