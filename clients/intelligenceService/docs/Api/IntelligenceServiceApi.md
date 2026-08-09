# OpenAPI\Client\IntelligenceServiceApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invokeAgentSurfaceAsync()**](IntelligenceServiceApi.md#invokeAgentSurfaceAsync) | **POST** /api/v2/IntelligenceService/Agents/{agentId}/agui | Run a governed agent over the AG-UI protocol |


## `invokeAgentSurfaceAsync()`

```php
invokeAgentSurfaceAsync($agent_id)
```

Run a governed agent over the AG-UI protocol

Streams a governed agent run as AG-UI server-sent events. Feature-flagged on ABP.Cognitive.AgentSurface.Enable; returns 503 when disabled, 401 when unauthorized and 404 when the agent cannot be resolved. An optional ?projectId= binds the run to a project (resolved tenant-scoped): the project id + name are surfaced to the model as context so it can call the governed project-storage tools; it is never auto-filled into a tool's arguments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntelligenceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_id = 'agent_id_example'; // string

try {
    $apiInstance->invokeAgentSurfaceAsync($agent_id);
} catch (Exception $e) {
    echo 'Exception when calling IntelligenceServiceApi->invokeAgentSurfaceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
