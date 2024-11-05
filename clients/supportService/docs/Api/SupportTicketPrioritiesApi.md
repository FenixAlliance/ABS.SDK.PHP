# OpenAPI\Client\SupportTicketPrioritiesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SupportServiceSupportTicketPrioritiesCountGet()**](SupportTicketPrioritiesApi.md#apiV2SupportServiceSupportTicketPrioritiesCountGet) | **GET** /api/v2/SupportService/SupportTicketPriorities/Count |  |
| [**apiV2SupportServiceSupportTicketPrioritiesGet()**](SupportTicketPrioritiesApi.md#apiV2SupportServiceSupportTicketPrioritiesGet) | **GET** /api/v2/SupportService/SupportTicketPriorities |  |
| [**apiV2SupportServiceSupportTicketPrioritiesPost()**](SupportTicketPrioritiesApi.md#apiV2SupportServiceSupportTicketPrioritiesPost) | **POST** /api/v2/SupportService/SupportTicketPriorities |  |
| [**apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdDelete()**](SupportTicketPrioritiesApi.md#apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdDelete) | **DELETE** /api/v2/SupportService/SupportTicketPriorities/{supportTicketPriorityId} |  |
| [**apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdGet()**](SupportTicketPrioritiesApi.md#apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdGet) | **GET** /api/v2/SupportService/SupportTicketPriorities/{supportTicketPriorityId} |  |
| [**apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdPut()**](SupportTicketPrioritiesApi.md#apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdPut) | **PUT** /api/v2/SupportService/SupportTicketPriorities/{supportTicketPriorityId} |  |


## `apiV2SupportServiceSupportTicketPrioritiesCountGet()`

```php
apiV2SupportServiceSupportTicketPrioritiesCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketPrioritiesCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketPrioritiesApi->apiV2SupportServiceSupportTicketPrioritiesCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SupportServiceSupportTicketPrioritiesGet()`

```php
apiV2SupportServiceSupportTicketPrioritiesGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketPriorityDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketPrioritiesGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketPrioritiesApi->apiV2SupportServiceSupportTicketPrioritiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketPriorityDtoListEnvelope**](../Model/SupportTicketPriorityDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketPrioritiesPost()`

```php
apiV2SupportServiceSupportTicketPrioritiesPost($support_ticket_priority_create_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_priority_create_dto = new \OpenAPI\Client\Model\SupportTicketPriorityCreateDto(); // \OpenAPI\Client\Model\SupportTicketPriorityCreateDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketPrioritiesPost($support_ticket_priority_create_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketPrioritiesApi->apiV2SupportServiceSupportTicketPrioritiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_priority_create_dto** | [**\OpenAPI\Client\Model\SupportTicketPriorityCreateDto**](../Model/SupportTicketPriorityCreateDto.md)|  | |
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

## `apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdDelete()`

```php
apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdDelete($support_ticket_priority_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_priority_id = 'support_ticket_priority_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdDelete($support_ticket_priority_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketPrioritiesApi->apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_priority_id** | **string**|  | |
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

## `apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdGet()`

```php
apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdGet($support_ticket_priority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportTicketPriorityDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_priority_id = 'support_ticket_priority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdGet($support_ticket_priority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketPrioritiesApi->apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_priority_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportTicketPriorityDtoEnvelope**](../Model/SupportTicketPriorityDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdPut()`

```php
apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdPut($support_ticket_priority_id, $support_ticket_priority_update_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportTicketPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_ticket_priority_id = 'support_ticket_priority_id_example'; // string
$support_ticket_priority_update_dto = new \OpenAPI\Client\Model\SupportTicketPriorityUpdateDto(); // \OpenAPI\Client\Model\SupportTicketPriorityUpdateDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdPut($support_ticket_priority_id, $support_ticket_priority_update_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportTicketPrioritiesApi->apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_ticket_priority_id** | **string**|  | |
| **support_ticket_priority_update_dto** | [**\OpenAPI\Client\Model\SupportTicketPriorityUpdateDto**](../Model/SupportTicketPriorityUpdateDto.md)|  | |
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
