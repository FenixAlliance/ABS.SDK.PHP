# OpenAPI\Client\InboxApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelInboxMessageRetry()**](InboxApi.md#cancelInboxMessageRetry) | **POST** /api/v2/SystemService/Inbox/Messages/{id}/CancelRetry | Cancel a scheduled inbox retry |
| [**deadLetterInboxMessage()**](InboxApi.md#deadLetterInboxMessage) | **POST** /api/v2/SystemService/Inbox/Messages/{id}/DeadLetter | Manually dead-letter an inbox message |
| [**expediteInboxMessage()**](InboxApi.md#expediteInboxMessage) | **POST** /api/v2/SystemService/Inbox/Messages/{id}/Expedite | Expedite a retry-scheduled inbox message |
| [**getDuplicateInboxMessages()**](InboxApi.md#getDuplicateInboxMessages) | **GET** /api/v2/SystemService/Inbox/Duplicates | List duplicate-bearing inbox messages |
| [**getDuplicateInboxMessagesCount()**](InboxApi.md#getDuplicateInboxMessagesCount) | **GET** /api/v2/SystemService/Inbox/Duplicates/Count | Count duplicate-bearing inbox messages |
| [**getInboxCorrelationChain()**](InboxApi.md#getInboxCorrelationChain) | **GET** /api/v2/SystemService/Inbox/Correlations/{correlationId} | Get an inbox correlation chain |
| [**getInboxHealth()**](InboxApi.md#getInboxHealth) | **GET** /api/v2/SystemService/Inbox/Health | Get durable-inbox processor health |
| [**getInboxMessage()**](InboxApi.md#getInboxMessage) | **GET** /api/v2/SystemService/Inbox/Messages/{id} | Get one inbox message |
| [**getInboxMessages()**](InboxApi.md#getInboxMessages) | **GET** /api/v2/SystemService/Inbox/Messages | List inbox messages |
| [**getInboxMessagesCount()**](InboxApi.md#getInboxMessagesCount) | **GET** /api/v2/SystemService/Inbox/Messages/Count | Count inbox messages |
| [**quarantineInboxMessage()**](InboxApi.md#quarantineInboxMessage) | **POST** /api/v2/SystemService/Inbox/Messages/{id}/Quarantine | Manually quarantine an inbox message |
| [**releaseInboxMessageLease()**](InboxApi.md#releaseInboxMessageLease) | **POST** /api/v2/SystemService/Inbox/Messages/{id}/ReleaseLease | Release a stuck inbox lease |
| [**replayInboxMessage()**](InboxApi.md#replayInboxMessage) | **POST** /api/v2/SystemService/Inbox/Messages/{id}/Replay | Replay a terminal inbox message as a new generation |


## `cancelInboxMessageRetry()`

```php
cancelInboxMessageRetry($id, $api_version, $x_api_version, $inbox_admin_reason_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Cancel a scheduled inbox retry

Stops a RetryScheduled message from retrying by operator decision, moving it to the terminal Cancelled state (deliberately distinct from DeadLettered so the dead-letter gauge stays honest). The reason is audit-critical. Only a RetryScheduled message can be cancelled. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_admin_reason_dto = new \OpenAPI\Client\Model\InboxAdminReasonDto(); // \OpenAPI\Client\Model\InboxAdminReasonDto

try {
    $result = $apiInstance->cancelInboxMessageRetry($id, $api_version, $x_api_version, $inbox_admin_reason_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->cancelInboxMessageRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_admin_reason_dto** | [**\OpenAPI\Client\Model\InboxAdminReasonDto**](../Model/InboxAdminReasonDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deadLetterInboxMessage()`

```php
deadLetterInboxMessage($id, $api_version, $x_api_version, $inbox_admin_reason_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Manually dead-letter an inbox message

Manually moves a non-terminal message to the terminal DeadLettered state. The reason is audit-critical. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_admin_reason_dto = new \OpenAPI\Client\Model\InboxAdminReasonDto(); // \OpenAPI\Client\Model\InboxAdminReasonDto

try {
    $result = $apiInstance->deadLetterInboxMessage($id, $api_version, $x_api_version, $inbox_admin_reason_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->deadLetterInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_admin_reason_dto** | [**\OpenAPI\Client\Model\InboxAdminReasonDto**](../Model/InboxAdminReasonDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expediteInboxMessage()`

```php
expediteInboxMessage($id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Expedite a retry-scheduled inbox message

Pulls a RetryScheduled message's scheduled instant forward to now so the processor claims it on the next poll, bypassing the remaining backoff. Same row, retry budget untouched. Only a RetryScheduled message can be expedited. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->expediteInboxMessage($id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->expediteInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDuplicateInboxMessages()`

```php
getDuplicateInboxMessages($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters): \OpenAPI\Client\Model\InboxMessageDtoIReadOnlyListEnvelope
```

List duplicate-bearing inbox messages

Lists inbox messages that have observed a re-delivery (DeliveryCount > 1) — durable evidence that a source is re-sending, surfaced with DeliveryCount / LastDuplicateReceivedAtUtc. Further OData filtering/paging applies. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getDuplicateInboxMessages($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getDuplicateInboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters**](../Model/InboxMessageDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboxMessageDtoIReadOnlyListEnvelope**](../Model/InboxMessageDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDuplicateInboxMessagesCount()`

```php
getDuplicateInboxMessagesCount($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count duplicate-bearing inbox messages

Returns the count of duplicate-bearing inbox messages under the same OData shaping as the duplicates list. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getDuplicateInboxMessagesCount($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getDuplicateInboxMessagesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters**](../Model/InboxMessageDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getInboxCorrelationChain()`

```php
getInboxCorrelationChain($correlation_id, $api_version, $x_api_version): \OpenAPI\Client\Model\InboxMessageDtoIReadOnlyListEnvelope
```

Get an inbox correlation chain

Returns every inbox message that shares a correlation id — one logical inbound interaction end-to-end, including its replay generations — oldest-received first. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$correlation_id = 'correlation_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInboxCorrelationChain($correlation_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getInboxCorrelationChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **correlation_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboxMessageDtoIReadOnlyListEnvelope**](../Model/InboxMessageDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxHealth()`

```php
getInboxHealth($api_version, $x_api_version): \OpenAPI\Client\Model\InboxHealthDtoEnvelope
```

Get durable-inbox processor health

Returns a single snapshot of the durable-inbox processor: whether it is enabled, the per-status counts (received/accepted/processing/retry-scheduled/rejected/quarantined/dead-lettered/cancelled), the age of the oldest accepted message, and the last successful processing instant. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInboxHealth($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getInboxHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboxHealthDtoEnvelope**](../Model/InboxHealthDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxMessage()`

```php
getInboxMessage($id, $api_version, $x_api_version): \OpenAPI\Client\Model\InboxMessageDtoEnvelope
```

Get one inbox message

Returns one inbox message's payload-safe detail by id — both lifecycle axes (processing status + independent verification status), the dedup lineage, attempt/generation counters, the recorded failure, and the timestamps. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getInboxMessage($id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboxMessageDtoEnvelope**](../Model/InboxMessageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxMessages()`

```php
getInboxMessages($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters): \OpenAPI\Client\Model\InboxMessageDtoIReadOnlyListEnvelope
```

List inbox messages

Lists durable-inbox messages (payload-safe fields only). Use OData to scope by any projected field — e.g. $filter=Status eq 'Quarantined' for the quarantine review, Status eq 'DeadLettered' for terminal failures, VerificationStatus eq 'Failed' for forged/untrusted callbacks, SourceSystem eq 'stripe', or a ReceivedAtUtc range — and to page/order. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getInboxMessages($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getInboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters**](../Model/InboxMessageDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboxMessageDtoIReadOnlyListEnvelope**](../Model/InboxMessageDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxMessagesCount()`

```php
getInboxMessagesCount($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count inbox messages

Returns the count of durable-inbox messages under the same OData shaping as the list read (e.g. $filter=Status eq 'Quarantined'). Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getInboxMessagesCount($api_version, $x_api_version, $inbox_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getInboxMessagesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InboxMessageDtoCollectionQueryParameters**](../Model/InboxMessageDtoCollectionQueryParameters.md)|  | [optional] |

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

## `quarantineInboxMessage()`

```php
quarantineInboxMessage($id, $api_version, $x_api_version, $inbox_admin_reason_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Manually quarantine an inbox message

Manually holds a non-terminal message for review in the terminal Quarantined state (e.g. an operator judges it suspicious). The reason is audit-critical. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_admin_reason_dto = new \OpenAPI\Client\Model\InboxAdminReasonDto(); // \OpenAPI\Client\Model\InboxAdminReasonDto

try {
    $result = $apiInstance->quarantineInboxMessage($id, $api_version, $x_api_version, $inbox_admin_reason_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->quarantineInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_admin_reason_dto** | [**\OpenAPI\Client\Model\InboxAdminReasonDto**](../Model/InboxAdminReasonDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseInboxMessageLease()`

```php
releaseInboxMessageLease($id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Release a stuck inbox lease

Force-releases the lease on a message wedged in Processing (a crashed/hung processor) and returns it to the claimable Accepted state, due now, so the next poll re-drives it. The in-flight attempt is NOT counted — a crash is not a business failure. Only a Processing message can have its lease released. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->releaseInboxMessageLease($id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->releaseInboxMessageLease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replayInboxMessage()`

```php
replayInboxMessage($id, $api_version, $x_api_version, $inbox_admin_reason_dto): \OpenAPI\Client\Model\InboxReplayResultDtoEnvelope
```

Replay a terminal inbox message as a new generation

Replays a terminal message as a NEW processing generation over its immutable received evidence — the inbox's recovery lever (distinct from the outbox's same-row requeue). A selected replay-generation row is resolved back to its lineage root before replaying, so numbering stays global and collision-free; the new row is claimable at once with a fresh retry budget, and the root's evidence and budget are never mutated. Legal only from a terminal state whose authenticity passed. Returns the new generation's identity. The reason is audit-critical. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$inbox_admin_reason_dto = new \OpenAPI\Client\Model\InboxAdminReasonDto(); // \OpenAPI\Client\Model\InboxAdminReasonDto

try {
    $result = $apiInstance->replayInboxMessage($id, $api_version, $x_api_version, $inbox_admin_reason_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->replayInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **inbox_admin_reason_dto** | [**\OpenAPI\Client\Model\InboxAdminReasonDto**](../Model/InboxAdminReasonDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboxReplayResultDtoEnvelope**](../Model/InboxReplayResultDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
