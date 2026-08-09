# OpenAPI\Client\CognitiveAgentConversationAttachmentsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadCognitiveAgentConversationAttachmentAsync()**](CognitiveAgentConversationAttachmentsApi.md#uploadCognitiveAgentConversationAttachmentAsync) | **POST** /api/v2/IntelligenceService/CognitiveAgents/{agentId}/Conversations/{conversationId}/Attachments | Upload an attachment to a cognitive agent conversation |


## `uploadCognitiveAgentConversationAttachmentAsync()`

```php
uploadCognitiveAgentConversationAttachmentAsync($tenant_id, $agent_id, $conversation_id, $api_version, $x_api_version, $file): \OpenAPI\Client\Model\ConversationAttachmentUploadResultDtoEnvelope
```

Upload an attachment to a cognitive agent conversation

Uploads a file into the acting user's OWN conversation attachment store, scanned and catalogued through the storage spine. A conversation the caller does not own returns 404. The response carries the new file's id, name, content type and length; the chat UI passes that id as an AttachmentFileIds entry when it sends the referencing user turn.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveAgentConversationAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$agent_id = 'agent_id_example'; // string
$conversation_id = 'conversation_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadCognitiveAgentConversationAttachmentAsync($tenant_id, $agent_id, $conversation_id, $api_version, $x_api_version, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveAgentConversationAttachmentsApi->uploadCognitiveAgentConversationAttachmentAsync: ', $e->getMessage(), PHP_EOL;
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
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConversationAttachmentUploadResultDtoEnvelope**](../Model/ConversationAttachmentUploadResultDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
