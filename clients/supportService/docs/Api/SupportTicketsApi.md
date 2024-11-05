# OpenAPI\Client\SupportTicketsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SupportServiceSupportTicketsCountGet()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsCountGet) | **GET** /api/v2/SupportService/SupportTickets/Count |  |
| [**apiV2SupportServiceSupportTicketsGet()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsGet) | **GET** /api/v2/SupportService/SupportTickets |  |
| [**apiV2SupportServiceSupportTicketsPost()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsPost) | **POST** /api/v2/SupportService/SupportTickets |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsGet()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdConversationsGet) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsPost()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdConversationsPost) | **POST** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdDelete()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdDelete) | **DELETE** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations/{supportTicketConversationId} |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdGet()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdGet) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations/{supportTicketConversationId} |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdMessagesGet()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdMessagesGet) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations/{supportTicketConversationId}/Messages |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdDelete()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdDelete) | **DELETE** /api/v2/SupportService/SupportTickets/{supportTicketId} |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdGet()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdGet) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId} |  |
| [**apiV2SupportServiceSupportTicketsSupportTicketIdPut()**](SupportTicketsApi.md#apiV2SupportServiceSupportTicketsSupportTicketIdPut) | **PUT** /api/v2/SupportService/SupportTickets/{supportTicketId} |  |


## `apiV2SupportServiceSupportTicketsCountGet()`

```php
apiV2SupportServiceSupportTicketsCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsGet()`

```php
apiV2SupportServiceSupportTicketsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketDtoListEnvelope**](../Model/SupportTicketDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsPost()`

```php
apiV2SupportServiceSupportTicketsPost($support_ticket_create_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_create_dto = new \OpenAPI\Client\Model\SupportTicketCreateDto(); // \OpenAPI\Client\Model\SupportTicketCreateDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsPost($support_ticket_create_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_create_dto** | [**\OpenAPI\Client\Model\SupportTicketCreateDto**](../Model/SupportTicketCreateDto.md)|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdConversationsGet()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdConversationsGet($support_ticket_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketConversationDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_id = 'support_ticket_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsGet($support_ticket_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketConversationDtoListEnvelope**](../Model/SupportTicketConversationDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdConversationsPost()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdConversationsPost($support_ticket_id, $support_ticket_conversation_create_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_id = 'support_ticket_id_example'; // string
$support_ticket_conversation_create_dto = new \OpenAPI\Client\Model\SupportTicketConversationCreateDto(); // \OpenAPI\Client\Model\SupportTicketConversationCreateDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsPost($support_ticket_id, $support_ticket_conversation_create_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_id** | **string**|  | |
| **support_ticket_conversation_create_dto** | [**\OpenAPI\Client\Model\SupportTicketConversationCreateDto**](../Model/SupportTicketConversationCreateDto.md)|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdDelete()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdDelete($support_ticket_id, $support_ticket_conversation_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_id = 'support_ticket_id_example'; // string
$support_ticket_conversation_id = 'support_ticket_conversation_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdDelete($support_ticket_id, $support_ticket_conversation_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_id** | **string**|  | |
| **support_ticket_conversation_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdGet()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdGet($support_ticket_id, $support_ticket_conversation_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketConversationDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_id = 'support_ticket_id_example'; // string
$support_ticket_conversation_id = 'support_ticket_conversation_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdGet($support_ticket_id, $support_ticket_conversation_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_id** | **string**|  | |
| **support_ticket_conversation_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketConversationDtoEnvelope**](../Model/SupportTicketConversationDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdMessagesGet()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdMessagesGet($support_ticket_conversation_id, $support_ticket_id, $page_number, $page_size, $api_version, $x_api_version): \OpenAPI\Client\Model\PrivateMessageDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_conversation_id = 'support_ticket_conversation_id_example'; // string
$support_ticket_id = 'support_ticket_id_example'; // string
$page_number = 56; // int
$page_size = 56; // int
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdMessagesGet($support_ticket_conversation_id, $support_ticket_id, $page_number, $page_size, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_conversation_id** | **string**|  | |
| **support_ticket_id** | **string**|  | |
| **page_number** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PrivateMessageDtoListEnvelope**](../Model/PrivateMessageDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdDelete()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdDelete($support_ticket_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_id = 'support_ticket_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdDelete($support_ticket_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdGet()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdGet($support_ticket_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_id = 'support_ticket_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdGet($support_ticket_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketDtoEnvelope**](../Model/SupportTicketDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketsSupportTicketIdPut()`

```php
apiV2SupportServiceSupportTicketsSupportTicketIdPut($support_ticket_id, $support_ticket_update_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_id = 'support_ticket_id_example'; // string
$support_ticket_update_dto = new \OpenAPI\Client\Model\SupportTicketUpdateDto(); // \OpenAPI\Client\Model\SupportTicketUpdateDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketsSupportTicketIdPut($support_ticket_id, $support_ticket_update_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketsApi->apiV2SupportServiceSupportTicketsSupportTicketIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_id** | **string**|  | |
| **support_ticket_update_dto** | [**\OpenAPI\Client\Model\SupportTicketUpdateDto**](../Model/SupportTicketUpdateDto.md)|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
