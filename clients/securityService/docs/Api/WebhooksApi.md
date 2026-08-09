# OpenAPI\Client\WebhooksApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebhookRequestsAsync()**](WebhooksApi.md#getWebhookRequestsAsync) | **GET** /api/v2/SecurityService/Webhooks | Get all webhook requests |
| [**getWebhookRequestsCountAsync()**](WebhooksApi.md#getWebhookRequestsCountAsync) | **GET** /api/v2/SecurityService/Webhooks/Count | Get webhook requests count |


## `getWebhookRequestsAsync()`

```php
getWebhookRequestsAsync($tenant_id, $api_version, $x_api_version, $webhook_request_dto_collection_query_parameters): \OpenAPI\Client\Model\WebhookRequestDtoListEnvelope
```

Get all webhook requests

Retrieves all webhook requests for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$webhook_request_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebhookRequestDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebhookRequestDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWebhookRequestsAsync($tenant_id, $api_version, $x_api_version, $webhook_request_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookRequestsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **webhook_request_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebhookRequestDtoCollectionQueryParameters**](../Model/WebhookRequestDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhookRequestDtoListEnvelope**](../Model/WebhookRequestDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookRequestsCountAsync()`

```php
getWebhookRequestsCountAsync($tenant_id, $api_version, $x_api_version, $webhook_request_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get webhook requests count

Retrieves the count of webhook requests for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$webhook_request_dto_collection_query_parameters = new \OpenAPI\Client\Model\WebhookRequestDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WebhookRequestDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWebhookRequestsCountAsync($tenant_id, $api_version, $x_api_version, $webhook_request_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookRequestsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **webhook_request_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WebhookRequestDtoCollectionQueryParameters**](../Model/WebhookRequestDtoCollectionQueryParameters.md)|  | [optional] |

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
