# OpenAPI\Client\SupportRequestAttachmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SupportServiceSupportRequestAttachmentsCountGet()**](SupportRequestAttachmentsApi.md#apiV2SupportServiceSupportRequestAttachmentsCountGet) | **GET** /api/v2/SupportService/SupportRequestAttachments/Count |  |
| [**apiV2SupportServiceSupportRequestAttachmentsGet()**](SupportRequestAttachmentsApi.md#apiV2SupportServiceSupportRequestAttachmentsGet) | **GET** /api/v2/SupportService/SupportRequestAttachments |  |
| [**apiV2SupportServiceSupportRequestAttachmentsPost()**](SupportRequestAttachmentsApi.md#apiV2SupportServiceSupportRequestAttachmentsPost) | **POST** /api/v2/SupportService/SupportRequestAttachments |  |
| [**apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdDelete()**](SupportRequestAttachmentsApi.md#apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdDelete) | **DELETE** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} |  |
| [**apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdGet()**](SupportRequestAttachmentsApi.md#apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdGet) | **GET** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} |  |
| [**apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdPut()**](SupportRequestAttachmentsApi.md#apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdPut) | **PUT** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} |  |


## `apiV2SupportServiceSupportRequestAttachmentsCountGet()`

```php
apiV2SupportServiceSupportRequestAttachmentsCountGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportRequestAttachmentsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->apiV2SupportServiceSupportRequestAttachmentsCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SupportServiceSupportRequestAttachmentsGet()`

```php
apiV2SupportServiceSupportRequestAttachmentsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportRequestAttachmentDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportRequestAttachmentsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->apiV2SupportServiceSupportRequestAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportRequestAttachmentDtoListEnvelope**](../Model/SupportRequestAttachmentDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportRequestAttachmentsPost()`

```php
apiV2SupportServiceSupportRequestAttachmentsPost($support_request_attachment_create_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_request_attachment_create_dto = new \OpenAPI\Client\Model\SupportRequestAttachmentCreateDto(); // \OpenAPI\Client\Model\SupportRequestAttachmentCreateDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportRequestAttachmentsPost($support_request_attachment_create_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->apiV2SupportServiceSupportRequestAttachmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_request_attachment_create_dto** | [**\OpenAPI\Client\Model\SupportRequestAttachmentCreateDto**](../Model/SupportRequestAttachmentCreateDto.md)|  | |
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

## `apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdDelete()`

```php
apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdDelete($support_request_attachment_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_request_attachment_id = 'support_request_attachment_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdDelete($support_request_attachment_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_request_attachment_id** | **string**|  | |
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

## `apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdGet()`

```php
apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdGet($support_request_attachment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportRequestAttachmentDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_request_attachment_id = 'support_request_attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdGet($support_request_attachment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_request_attachment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportRequestAttachmentDtoEnvelope**](../Model/SupportRequestAttachmentDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdPut()`

```php
apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdPut($support_request_attachment_id, $support_request_attachment_update_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_request_attachment_id = 'support_request_attachment_id_example'; // string
$support_request_attachment_update_dto = new \OpenAPI\Client\Model\SupportRequestAttachmentUpdateDto(); // \OpenAPI\Client\Model\SupportRequestAttachmentUpdateDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdPut($support_request_attachment_id, $support_request_attachment_update_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **support_request_attachment_id** | **string**|  | |
| **support_request_attachment_update_dto** | [**\OpenAPI\Client\Model\SupportRequestAttachmentUpdateDto**](../Model/SupportRequestAttachmentUpdateDto.md)|  | |
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
