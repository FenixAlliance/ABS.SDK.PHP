# OpenAPI\Client\PostingExecutionsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countPostingExecutionsAsync()**](PostingExecutionsApi.md#countPostingExecutionsAsync) | **GET** /api/v2/AccountingService/PostingExecutions/Count | Count posting executions |
| [**getPostingExecutionsAsync()**](PostingExecutionsApi.md#getPostingExecutionsAsync) | **GET** /api/v2/AccountingService/PostingExecutions | List posting executions |


## `countPostingExecutionsAsync()`

```php
countPostingExecutionsAsync($tenant_id, $api_version, $x_api_version, $posting_execution_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count posting executions

Returns the count of the tenant's posting-inbox executions under the same OData shaping as the list read (e.g. $filter=Status eq 'Rejected' to count rejected intents). Requires journals_read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PostingExecutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$posting_execution_dto_collection_query_parameters = new \OpenAPI\Client\Model\PostingExecutionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PostingExecutionDtoCollectionQueryParameters

try {
    $result = $apiInstance->countPostingExecutionsAsync($tenant_id, $api_version, $x_api_version, $posting_execution_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingExecutionsApi->countPostingExecutionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **posting_execution_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PostingExecutionDtoCollectionQueryParameters**](../Model/PostingExecutionDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getPostingExecutionsAsync()`

```php
getPostingExecutionsAsync($tenant_id, $api_version, $x_api_version, $posting_execution_dto_collection_query_parameters): \OpenAPI\Client\Model\PostingExecutionDtoIReadOnlyListEnvelope
```

List posting executions

Lists the tenant's posting-inbox executions (the durable evidence of every posting intent). Use OData to scope to a state — e.g. $filter=Status eq 'Rejected' for rejected intents, or Status eq 'PendingMapping'/'PendingPeriod'/'PendingRate' for the retryable pending set — and to page/order. Requires journals_read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PostingExecutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$posting_execution_dto_collection_query_parameters = new \OpenAPI\Client\Model\PostingExecutionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PostingExecutionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getPostingExecutionsAsync($tenant_id, $api_version, $x_api_version, $posting_execution_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingExecutionsApi->getPostingExecutionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **posting_execution_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PostingExecutionDtoCollectionQueryParameters**](../Model/PostingExecutionDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostingExecutionDtoIReadOnlyListEnvelope**](../Model/PostingExecutionDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
