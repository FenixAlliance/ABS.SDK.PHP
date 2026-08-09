# OpenAPI\Client\CognitiveAgentMessagesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCognitiveAgentMessageByIdAsync()**](CognitiveAgentMessagesApi.md#getCognitiveAgentMessageByIdAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/{conversationId}/Messages/{id} | Get a cognitive agent conversation message by ID |
| [**getCognitiveAgentMessagesAsync()**](CognitiveAgentMessagesApi.md#getCognitiveAgentMessagesAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/{conversationId}/Messages | Get all messages for a cognitive agent conversation |
| [**getCognitiveAgentMessagesCountAsync()**](CognitiveAgentMessagesApi.md#getCognitiveAgentMessagesCountAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/{conversationId}/Messages/Count | Get message count for a cognitive agent conversation |


## `getCognitiveAgentMessageByIdAsync()`

```php
getCognitiveAgentMessageByIdAsync($tenant_id, $agent_id, $conversation_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\CognitiveAgentMessageDtoEnvelope
```

Get a cognitive agent conversation message by ID

Retrieves a specific durable message of a conversation by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$conversation_id = 'conversation_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCognitiveAgentMessageByIdAsync($tenant_id, $agent_id, $conversation_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentMessagesApi->getCognitiveAgentMessageByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **conversation_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentMessageDtoEnvelope**](../Model/CognitiveAgentMessageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentMessagesAsync()`

```php
getCognitiveAgentMessagesAsync($tenant_id, $agent_id, $conversation_id, $api_version, $x_api_version, $cognitive_agent_message_dto_collection_query_parameters): \OpenAPI\Client\Model\CognitiveAgentMessageDtoListEnvelope
```

Get all messages for a cognitive agent conversation

Retrieves all durable messages for the specified conversation, agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$conversation_id = 'conversation_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentMessagesAsync($tenant_id, $agent_id, $conversation_id, $api_version, $x_api_version, $cognitive_agent_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentMessagesApi->getCognitiveAgentMessagesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **conversation_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentMessageDtoCollectionQueryParameters**](../Model/CognitiveAgentMessageDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentMessageDtoListEnvelope**](../Model/CognitiveAgentMessageDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentMessagesCountAsync()`

```php
getCognitiveAgentMessagesCountAsync($tenant_id, $agent_id, $conversation_id, $api_version, $x_api_version, $cognitive_agent_message_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get message count for a cognitive agent conversation

Returns the count of durable messages for the specified conversation, agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$conversation_id = 'conversation_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_message_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentMessageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentMessageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentMessagesCountAsync($tenant_id, $agent_id, $conversation_id, $api_version, $x_api_version, $cognitive_agent_message_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentMessagesApi->getCognitiveAgentMessagesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **conversation_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_message_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentMessageDtoCollectionQueryParameters**](../Model/CognitiveAgentMessageDtoCollectionQueryParameters.md)|  | [optional] |

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
