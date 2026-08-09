# OpenAPI\Client\CognitiveAgentVariablesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCognitiveAgentVariableAsync()**](CognitiveAgentVariablesApi.md#createCognitiveAgentVariableAsync) | **POST** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Variables | Add a variable to a cognitive agent |
| [**deleteCognitiveAgentVariableAsync()**](CognitiveAgentVariablesApi.md#deleteCognitiveAgentVariableAsync) | **DELETE** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Variables/{id} | Remove a variable from a cognitive agent |
| [**getCognitiveAgentVariableByIdAsync()**](CognitiveAgentVariablesApi.md#getCognitiveAgentVariableByIdAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Variables/{id} | Get a cognitive agent variable by ID |
| [**getCognitiveAgentVariablesAsync()**](CognitiveAgentVariablesApi.md#getCognitiveAgentVariablesAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Variables | Get all variables for a cognitive agent |
| [**getCognitiveAgentVariablesCountAsync()**](CognitiveAgentVariablesApi.md#getCognitiveAgentVariablesCountAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Variables/Count | Get variable count for a cognitive agent |
| [**updateCognitiveAgentVariableAsync()**](CognitiveAgentVariablesApi.md#updateCognitiveAgentVariableAsync) | **PUT** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Variables/{id} | Update a cognitive agent variable |


## `createCognitiveAgentVariableAsync()`

```php
createCognitiveAgentVariableAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_variable_create_dto)
```

Add a variable to a cognitive agent

Adds a key/value variable to the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_variable_create_dto = new \OpenAPI\Client\Model\CognitiveAgentVariableCreateDto(); // \OpenAPI\Client\Model\CognitiveAgentVariableCreateDto

try {
    $apiInstance->createCognitiveAgentVariableAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_variable_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentVariablesApi->createCognitiveAgentVariableAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_variable_create_dto** | [**\OpenAPI\Client\Model\CognitiveAgentVariableCreateDto**](../Model/CognitiveAgentVariableCreateDto.md)|  | [optional] |

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

## `deleteCognitiveAgentVariableAsync()`

```php
deleteCognitiveAgentVariableAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version)
```

Remove a variable from a cognitive agent

Removes a variable from the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentVariablesApi(
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
    $apiInstance->deleteCognitiveAgentVariableAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentVariablesApi->deleteCognitiveAgentVariableAsync: ', $e->getMessage(), PHP_EOL;
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

## `getCognitiveAgentVariableByIdAsync()`

```php
getCognitiveAgentVariableByIdAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\CognitiveAgentVariableDtoEnvelope
```

Get a cognitive agent variable by ID

Retrieves a specific variable of a cognitive agent by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentVariablesApi(
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
    $result = $apiInstance->getCognitiveAgentVariableByIdAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentVariablesApi->getCognitiveAgentVariableByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\CognitiveAgentVariableDtoEnvelope**](../Model/CognitiveAgentVariableDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentVariablesAsync()`

```php
getCognitiveAgentVariablesAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_variable_dto_collection_query_parameters): \OpenAPI\Client\Model\CognitiveAgentVariableDtoListEnvelope
```

Get all variables for a cognitive agent

Retrieves all key/value variables for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_variable_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentVariableDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentVariableDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentVariablesAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_variable_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentVariablesApi->getCognitiveAgentVariablesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_variable_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentVariableDtoCollectionQueryParameters**](../Model/CognitiveAgentVariableDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentVariableDtoListEnvelope**](../Model/CognitiveAgentVariableDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentVariablesCountAsync()`

```php
getCognitiveAgentVariablesCountAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_variable_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get variable count for a cognitive agent

Returns the count of variables for the specified cognitive agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_variable_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentVariableDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentVariableDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentVariablesCountAsync($tenant_id, $agent_id, $api_version, $x_api_version, $cognitive_agent_variable_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentVariablesApi->getCognitiveAgentVariablesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_variable_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentVariableDtoCollectionQueryParameters**](../Model/CognitiveAgentVariableDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateCognitiveAgentVariableAsync()`

```php
updateCognitiveAgentVariableAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version, $cognitive_agent_variable_update_dto)
```

Update a cognitive agent variable

Updates the value of a variable for the specified agent and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_variable_update_dto = new \OpenAPI\Client\Model\CognitiveAgentVariableUpdateDto(); // \OpenAPI\Client\Model\CognitiveAgentVariableUpdateDto

try {
    $apiInstance->updateCognitiveAgentVariableAsync($tenant_id, $agent_id, $id, $api_version, $x_api_version, $cognitive_agent_variable_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentVariablesApi->updateCognitiveAgentVariableAsync: ', $e->getMessage(), PHP_EOL;
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
| **cognitive_agent_variable_update_dto** | [**\OpenAPI\Client\Model\CognitiveAgentVariableUpdateDto**](../Model/CognitiveAgentVariableUpdateDto.md)|  | [optional] |

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
