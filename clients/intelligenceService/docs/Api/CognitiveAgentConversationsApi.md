# OpenAPI\Client\CognitiveAgentConversationsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCognitiveAgentConversationAsync()**](CognitiveAgentConversationsApi.md#createCognitiveAgentConversationAsync) | **POST** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations | Create a new cognitive agent conversation |
| [**deleteCognitiveAgentConversationAsync()**](CognitiveAgentConversationsApi.md#deleteCognitiveAgentConversationAsync) | **DELETE** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/{id} | Delete a cognitive agent conversation |
| [**getCognitiveAgentConversationByIdAsync()**](CognitiveAgentConversationsApi.md#getCognitiveAgentConversationByIdAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/{id} | Get a cognitive agent conversation by ID |
| [**getCognitiveAgentConversationsAsync()**](CognitiveAgentConversationsApi.md#getCognitiveAgentConversationsAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations | Get all conversations for a cognitive agent |
| [**getCognitiveAgentConversationsCountAsync()**](CognitiveAgentConversationsApi.md#getCognitiveAgentConversationsCountAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/Count | Get conversation count for a cognitive agent |
| [**updateCognitiveAgentConversationAsync()**](CognitiveAgentConversationsApi.md#updateCognitiveAgentConversationAsync) | **PUT** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/{id} | Update a cognitive agent conversation |


## `createCognitiveAgentConversationAsync()`

```php
createCognitiveAgentConversationAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_conversation_create_dto)
```

Create a new cognitive agent conversation

Creates a new managed conversation for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_conversation_create_dto = new \OpenAPI\Client\Model\CognitiveAgentConversationCreateDto(); // \OpenAPI\Client\Model\CognitiveAgentConversationCreateDto

try {
    $apiInstance->createCognitiveAgentConversationAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_conversation_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentConversationsApi->createCognitiveAgentConversationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_conversation_create_dto** | [**\OpenAPI\Client\Model\CognitiveAgentConversationCreateDto**](../Model/CognitiveAgentConversationCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCognitiveAgentConversationAsync()`

```php
deleteCognitiveAgentConversationAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version)
```

Delete a cognitive agent conversation

Deletes a managed conversation for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCognitiveAgentConversationAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentConversationsApi->deleteCognitiveAgentConversationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentConversationByIdAsync()`

```php
getCognitiveAgentConversationByIdAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\CognitiveAgentConversationDtoEnvelope
```

Get a cognitive agent conversation by ID

Retrieves a specific managed conversation of a cognitive agent by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCognitiveAgentConversationByIdAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentConversationsApi->getCognitiveAgentConversationByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentConversationDtoEnvelope**](../Model/CognitiveAgentConversationDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentConversationsAsync()`

```php
getCognitiveAgentConversationsAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_conversation_dto_collection_query_parameters): \OpenAPI\Client\Model\CognitiveAgentConversationDtoListEnvelope
```

Get all conversations for a cognitive agent

Retrieves all managed conversations for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_conversation_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentConversationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentConversationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentConversationsAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_conversation_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentConversationsApi->getCognitiveAgentConversationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_conversation_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentConversationDtoCollectionQueryParameters**](../Model/CognitiveAgentConversationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentConversationDtoListEnvelope**](../Model/CognitiveAgentConversationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentConversationsCountAsync()`

```php
getCognitiveAgentConversationsCountAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_conversation_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get conversation count for a cognitive agent

Returns the count of managed conversations for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_conversation_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentConversationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentConversationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentConversationsCountAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_conversation_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentConversationsApi->getCognitiveAgentConversationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_conversation_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentConversationDtoCollectionQueryParameters**](../Model/CognitiveAgentConversationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateCognitiveAgentConversationAsync()`

```php
updateCognitiveAgentConversationAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version, $cognitive_agent_conversation_update_dto)
```

Update a cognitive agent conversation

Updates an existing managed conversation for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_conversation_update_dto = new \OpenAPI\Client\Model\CognitiveAgentConversationUpdateDto(); // \OpenAPI\Client\Model\CognitiveAgentConversationUpdateDto

try {
    $apiInstance->updateCognitiveAgentConversationAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version, $cognitive_agent_conversation_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentConversationsApi->updateCognitiveAgentConversationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_conversation_update_dto** | [**\OpenAPI\Client\Model\CognitiveAgentConversationUpdateDto**](../Model/CognitiveAgentConversationUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
