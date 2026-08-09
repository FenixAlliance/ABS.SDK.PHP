# OpenAPI\Client\CognitiveAgentsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCognitiveAgentAsync()**](CognitiveAgentsApi.md#createCognitiveAgentAsync) | **POST** /api/v2/IntelligenceService/CognitiveAgents | Create a new cognitive agent |
| [**deleteCognitiveAgentAsync()**](CognitiveAgentsApi.md#deleteCognitiveAgentAsync) | **DELETE** /api/v2/IntelligenceService/CognitiveAgents/{id} | Delete a cognitive agent |
| [**getCognitiveAgentByIdAsync()**](CognitiveAgentsApi.md#getCognitiveAgentByIdAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/{id} | Get cognitive agent by ID |
| [**getCognitiveAgentsAsync()**](CognitiveAgentsApi.md#getCognitiveAgentsAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents | Get all cognitive agents |
| [**getCognitiveAgentsCountAsync()**](CognitiveAgentsApi.md#getCognitiveAgentsCountAsync) | **GET** /api/v2/IntelligenceService/CognitiveAgents/Count | Get cognitive agents count |
| [**updateCognitiveAgentAsync()**](CognitiveAgentsApi.md#updateCognitiveAgentAsync) | **PUT** /api/v2/IntelligenceService/CognitiveAgents/{id} | Update a cognitive agent |


## `createCognitiveAgentAsync()`

```php
createCognitiveAgentAsync($tenant_id, $api_version, $x_api_version, $cognitive_agent_create_dto)
```

Create a new cognitive agent

Creates a new managed cognitive agent for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_create_dto = new \OpenAPI\Client\Model\CognitiveAgentCreateDto(); // \OpenAPI\Client\Model\CognitiveAgentCreateDto

try {
    $apiInstance->createCognitiveAgentAsync($tenant_id, $api_version, $x_api_version, $cognitive_agent_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentsApi->createCognitiveAgentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_create_dto** | [**\OpenAPI\Client\Model\CognitiveAgentCreateDto**](../Model/CognitiveAgentCreateDto.md)|  | [optional] |

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

## `deleteCognitiveAgentAsync()`

```php
deleteCognitiveAgentAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a cognitive agent

Deletes a managed cognitive agent for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCognitiveAgentAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentsApi->deleteCognitiveAgentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `getCognitiveAgentByIdAsync()`

```php
getCognitiveAgentByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\CognitiveAgentDtoEnvelope
```

Get cognitive agent by ID

Retrieves a specific managed cognitive agent by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCognitiveAgentByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentsApi->getCognitiveAgentByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentDtoEnvelope**](../Model/CognitiveAgentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentsAsync()`

```php
getCognitiveAgentsAsync($tenant_id, $api_version, $x_api_version, $cognitive_agent_dto_collection_query_parameters): \OpenAPI\Client\Model\CognitiveAgentDtoListEnvelope
```

Get all cognitive agents

Retrieves all managed cognitive agents for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentsAsync($tenant_id, $api_version, $x_api_version, $cognitive_agent_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentsApi->getCognitiveAgentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentDtoCollectionQueryParameters**](../Model/CognitiveAgentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveAgentDtoListEnvelope**](../Model/CognitiveAgentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveAgentsCountAsync()`

```php
getCognitiveAgentsCountAsync($tenant_id, $api_version, $x_api_version, $cognitive_agent_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get cognitive agents count

Returns the count of managed cognitive agents for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveAgentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveAgentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveAgentsCountAsync($tenant_id, $api_version, $x_api_version, $cognitive_agent_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentsApi->getCognitiveAgentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveAgentDtoCollectionQueryParameters**](../Model/CognitiveAgentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateCognitiveAgentAsync()`

```php
updateCognitiveAgentAsync($tenant_id, $id, $api_version, $x_api_version, $cognitive_agent_update_dto)
```

Update a cognitive agent

Updates an existing managed cognitive agent for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_agent_update_dto = new \OpenAPI\Client\Model\CognitiveAgentUpdateDto(); // \OpenAPI\Client\Model\CognitiveAgentUpdateDto

try {
    $apiInstance->updateCognitiveAgentAsync($tenant_id, $id, $api_version, $x_api_version, $cognitive_agent_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentsApi->updateCognitiveAgentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_agent_update_dto** | [**\OpenAPI\Client\Model\CognitiveAgentUpdateDto**](../Model/CognitiveAgentUpdateDto.md)|  | [optional] |

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
