# OpenAPI\Client\CognitiveAgentSkillsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCognitiveAgentSkillAsync()**](CognitiveAgentSkillsApi.md#createCognitiveAgentSkillAsync) | **POST** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Skills | Assign a skill to a cognitive agent |
| [**deleteCognitiveAgentSkillAsync()**](CognitiveAgentSkillsApi.md#deleteCognitiveAgentSkillAsync) | **DELETE** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Skills/{id} | Remove a skill assignment from a cognitive agent |
| [**getCognitiveAgentSkillByIdAsync()**](CognitiveAgentSkillsApi.md#getCognitiveAgentSkillByIdAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Skills/{id} | Get a cognitive agent skill assignment by ID |
| [**getCognitiveAgentSkillsAsync()**](CognitiveAgentSkillsApi.md#getCognitiveAgentSkillsAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Skills | Get all skill assignments for a cognitive agent |
| [**getCognitiveAgentSkillsCountAsync()**](CognitiveAgentSkillsApi.md#getCognitiveAgentSkillsCountAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Skills/Count | Get skill assignment count for a cognitive agent |
| [**updateCognitiveAgentSkillAsync()**](CognitiveAgentSkillsApi.md#updateCognitiveAgentSkillAsync) | **PUT** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Skills/{id} | Update a cognitive agent skill assignment |


## `createCognitiveAgentSkillAsync()`

```php
createCognitiveAgentSkillAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_skill_create_dto)
```

Assign a skill to a cognitive agent

Assigns a reusable catalog skill to the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_skill_create_dto = new \OpenAPI\Client\Model\CognitiveAgentSkillCreateDto(); // \OpenAPI\Client\Model\CognitiveAgentSkillCreateDto

try {
    $apiInstance->createCognitiveAgentSkillAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_skill_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentSkillsApi->createCognitiveAgentSkillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_skill_create_dto** | [**\OpenAPI\Client\Model\CognitiveAgentSkillCreateDto**](../Model/CognitiveAgentSkillCreateDto.md)|  | [optional] |

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

## `deleteCognitiveAgentSkillAsync()`

```php
deleteCognitiveAgentSkillAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version)
```

Remove a skill assignment from a cognitive agent

Removes a skill assignment from the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentSkillsApi(
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
    $apiInstance->deleteCognitiveAgentSkillAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentSkillsApi->deleteCognitiveAgentSkillAsync: ', $e->getMessage(), PHP_EOL;
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

## `getCognitiveAgentSkillByIdAsync()`

```php
getCognitiveAgentSkillByIdAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\CognitiveAgentSkillDtoEnvelope
```

Get a cognitive agent skill assignment by ID

Retrieves a specific skill assignment of a cognitive agent by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentSkillsApi(
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
    $result = $apiInstance->getCognitiveAgentSkillByIdAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentSkillsApi->getCognitiveAgentSkillByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\CognitiveAgentSkillDtoEnvelope**](../Model/CognitiveAgentSkillDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentSkillsAsync()`

```php
getCognitiveAgentSkillsAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_skill_dto_collection_query_parameters): \OpenAPI\Client\Model\CognitiveAgentSkillDtoListEnvelope
```

Get all skill assignments for a cognitive agent

Retrieves all skill assignments for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_skill_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentSkillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentSkillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentSkillsAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_skill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentSkillsApi->getCognitiveAgentSkillsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_skill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentSkillDtoCollectionQueryParameters**](../Model/CognitiveAgentSkillDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentSkillDtoListEnvelope**](../Model/CognitiveAgentSkillDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentSkillsCountAsync()`

```php
getCognitiveAgentSkillsCountAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_skill_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get skill assignment count for a cognitive agent

Returns the count of skill assignments for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_skill_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentSkillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentSkillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentSkillsCountAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_skill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentSkillsApi->getCognitiveAgentSkillsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_skill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentSkillDtoCollectionQueryParameters**](../Model/CognitiveAgentSkillDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateCognitiveAgentSkillAsync()`

```php
updateCognitiveAgentSkillAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version, $cognitive_agent_skill_update_dto)
```

Update a cognitive agent skill assignment

Updates the per-assignment overrides of a skill assignment for the specified agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_skill_update_dto = new \OpenAPI\Client\Model\CognitiveAgentSkillUpdateDto(); // \OpenAPI\Client\Model\CognitiveAgentSkillUpdateDto

try {
    $apiInstance->updateCognitiveAgentSkillAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version, $cognitive_agent_skill_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentSkillsApi->updateCognitiveAgentSkillAsync: ', $e->getMessage(), PHP_EOL;
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
| **cognitive_agent_skill_update_dto** | [**\OpenAPI\Client\Model\CognitiveAgentSkillUpdateDto**](../Model/CognitiveAgentSkillUpdateDto.md)|  | [optional] |

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
