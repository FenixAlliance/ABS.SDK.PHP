# OpenAPI\Client\OutboxApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOutboxMessage()**](OutboxApi.md#cancelOutboxMessage) | **POST** /api/v2/SystemService/Outbox/Messages/{id}/Cancel | Cancel an outbox message |
| [**deadLetterOutboxMessage()**](OutboxApi.md#deadLetterOutboxMessage) | **POST** /api/v2/SystemService/Outbox/Messages/{id}/DeadLetter | Manually dead-letter an outbox message |
| [**expediteOutboxMessage()**](OutboxApi.md#expediteOutboxMessage) | **POST** /api/v2/SystemService/Outbox/Messages/{id}/Expedite | Expedite a failed (retry-eligible) outbox message |
| [**getOutboxCorrelationChain()**](OutboxApi.md#getOutboxCorrelationChain) | **GET** /api/v2/SystemService/Outbox/Correlations/{correlationId} | Get an outbox correlation chain |
| [**getOutboxHealth()**](OutboxApi.md#getOutboxHealth) | **GET** /api/v2/SystemService/Outbox/Health | Get durable-outbox relay health |
| [**getOutboxMessage()**](OutboxApi.md#getOutboxMessage) | **GET** /api/v2/SystemService/Outbox/Messages/{id} | Get one outbox message |
| [**getOutboxMessages()**](OutboxApi.md#getOutboxMessages) | **GET** /api/v2/SystemService/Outbox/Messages | List outbox messages |
| [**getOutboxMessagesCount()**](OutboxApi.md#getOutboxMessagesCount) | **GET** /api/v2/SystemService/Outbox/Messages/Count | Count outbox messages |
| [**releaseOutboxMessageLease()**](OutboxApi.md#releaseOutboxMessageLease) | **POST** /api/v2/SystemService/Outbox/Messages/{id}/ReleaseLease | Release a stuck outbox lease |
| [**replayOutboxMessage()**](OutboxApi.md#replayOutboxMessage) | **POST** /api/v2/SystemService/Outbox/Messages/{id}/Replay | Replay a dead-lettered or failed outbox message |


## `cancelOutboxMessage()`

```php
cancelOutboxMessage($id, $api_version, $x_api_version, $outbox_admin_reason_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Cancel an outbox message

Stops a Pending or Failed message by operator decision, moving it to the terminal Cancelled state (deliberately distinct from DeadLettered so the dead-letter gauge stays honest). The reason is audit-critical. An in-flight (Processing) or already-terminal message is rejected. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$outbox_admin_reason_dto = new \OpenAPI\Client\Model\OutboxAdminReasonDto(); // \OpenAPI\Client\Model\OutboxAdminReasonDto

try {
    $result = $apiInstance->cancelOutboxMessage($id, $api_version, $x_api_version, $outbox_admin_reason_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->cancelOutboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **outbox_admin_reason_dto** | [**\OpenAPI\Client\Model\OutboxAdminReasonDto**](../Model/OutboxAdminReasonDto.md)|  | [optional] |

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

## `deadLetterOutboxMessage()`

```php
deadLetterOutboxMessage($id, $api_version, $x_api_version, $outbox_admin_reason_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Manually dead-letter an outbox message

Manually moves a Processing or Failed message to the terminal DeadLettered state. The reason is audit-critical. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$outbox_admin_reason_dto = new \OpenAPI\Client\Model\OutboxAdminReasonDto(); // \OpenAPI\Client\Model\OutboxAdminReasonDto

try {
    $result = $apiInstance->deadLetterOutboxMessage($id, $api_version, $x_api_version, $outbox_admin_reason_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->deadLetterOutboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **outbox_admin_reason_dto** | [**\OpenAPI\Client\Model\OutboxAdminReasonDto**](../Model/OutboxAdminReasonDto.md)|  | [optional] |

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

## `expediteOutboxMessage()`

```php
expediteOutboxMessage($id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Expedite a failed (retry-eligible) outbox message

Pulls a Failed message's scheduled instant forward to now so the relay claims it on the next poll, bypassing the remaining backoff. Same row, retry budget untouched (the lighter-touch counterpart to Replay, which also clears the recorded error). Only a Failed message can be expedited. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->expediteOutboxMessage($id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->expediteOutboxMessage: ', $e->getMessage(), PHP_EOL;
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

## `getOutboxCorrelationChain()`

```php
getOutboxCorrelationChain($correlation_id, $api_version, $x_api_version): \OpenAPI\Client\Model\OutboxMessageDtoIReadOnlyListEnvelope
```

Get an outbox correlation chain

Returns every outbox message that shares a correlation id — one logical unit of async work end-to-end (e.g. a command and the events its handler in turn staged) — oldest-created first. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$correlation_id = 'correlation_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getOutboxCorrelationChain($correlation_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->getOutboxCorrelationChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **correlation_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OutboxMessageDtoIReadOnlyListEnvelope**](../Model/OutboxMessageDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboxHealth()`

```php
getOutboxHealth($api_version, $x_api_version): \OpenAPI\Client\Model\OutboxHealthDtoEnvelope
```

Get durable-outbox relay health

Returns a single snapshot of the durable-outbox relay: whether it is enabled, the per-status counts (pending/processing/failed/dead-lettered), the age of the oldest pending message, and the last successful dispatch instant. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getOutboxHealth($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->getOutboxHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OutboxHealthDtoEnvelope**](../Model/OutboxHealthDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboxMessage()`

```php
getOutboxMessage($id, $api_version, $x_api_version): \OpenAPI\Client\Model\OutboxMessageDtoEnvelope
```

Get one outbox message

Returns one outbox message's payload-safe detail by id — its lifecycle status, the two classification axes (kind + message type), the attempt/ceiling budget, the recorded failure, the idempotency + correlation lineage, and the timestamps. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getOutboxMessage($id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->getOutboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OutboxMessageDtoEnvelope**](../Model/OutboxMessageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboxMessages()`

```php
getOutboxMessages($api_version, $x_api_version, $outbox_message_dto_collection_query_parameters): \OpenAPI\Client\Model\OutboxMessageDtoIReadOnlyListEnvelope
```

List outbox messages

Lists durable-outbox messages (payload-safe fields only). Use OData to scope to a state — e.g. $filter=Status eq 'DeadLettered' for the dead-letter set or Status eq 'Failed' for retry-eligible rows — and to page/order. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$outbox_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\OutboxMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OutboxMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getOutboxMessages($api_version, $x_api_version, $outbox_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->getOutboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **outbox_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\OutboxMessageDtoCollectionQueryParameters**](../Model/OutboxMessageDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OutboxMessageDtoIReadOnlyListEnvelope**](../Model/OutboxMessageDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboxMessagesCount()`

```php
getOutboxMessagesCount($api_version, $x_api_version, $outbox_message_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count outbox messages

Returns the count of durable-outbox messages under the same OData shaping as the list read (e.g. $filter=Status eq 'DeadLettered'). Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$outbox_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\OutboxMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OutboxMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getOutboxMessagesCount($api_version, $x_api_version, $outbox_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->getOutboxMessagesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **outbox_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\OutboxMessageDtoCollectionQueryParameters**](../Model/OutboxMessageDtoCollectionQueryParameters.md)|  | [optional] |

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

## `releaseOutboxMessageLease()`

```php
releaseOutboxMessageLease($id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Release a stuck outbox lease

Force-releases the lease on a message wedged in Processing (a crashed/hung relay) and returns it to the claimable Pending state, due now, so the next poll re-drives it. The in-flight attempt is NOT counted — a crash is not a business failure. The relay auto-reclaims a crashed row once its lease expires; this manual lever forces the release immediately. Only a Processing message can have its lease released. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->releaseOutboxMessageLease($id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->releaseOutboxMessageLease: ', $e->getMessage(), PHP_EOL;
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

## `replayOutboxMessage()`

```php
replayOutboxMessage($id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Replay a dead-lettered or failed outbox message

Requeues a DeadLettered or Failed message back to Pending so the relay re-drives it immediately (clearing the lease and recorded error, and bypassing the remaining backoff). The attempt budget is preserved — a replay grants one more pass, not a fresh budget. Replaying a message that is already Pending/Processing or is Succeeded/Cancelled is rejected. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OutboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->replayOutboxMessage($id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboxApi->replayOutboxMessage: ', $e->getMessage(), PHP_EOL;
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
