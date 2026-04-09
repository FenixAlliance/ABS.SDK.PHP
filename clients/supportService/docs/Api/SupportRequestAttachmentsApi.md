# OpenAPI\Client\SupportRequestAttachmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupportRequestAttachmentAsync()**](SupportRequestAttachmentsApi.md#createSupportRequestAttachmentAsync) | **POST** /api/v2/SupportService/SupportRequestAttachments | Create a new support request attachment |
| [**deleteSupportRequestAttachmentAsync()**](SupportRequestAttachmentsApi.md#deleteSupportRequestAttachmentAsync) | **DELETE** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} | Delete a support request attachment |
| [**getSupportRequestAttachmentAsync()**](SupportRequestAttachmentsApi.md#getSupportRequestAttachmentAsync) | **GET** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} | Retrieve a support request attachment by ID |
| [**getSupportRequestAttachmentsAsync()**](SupportRequestAttachmentsApi.md#getSupportRequestAttachmentsAsync) | **GET** /api/v2/SupportService/SupportRequestAttachments | Retrieve a list of support request attachments |
| [**getSupportRequestAttachmentsCountAsync()**](SupportRequestAttachmentsApi.md#getSupportRequestAttachmentsCountAsync) | **GET** /api/v2/SupportService/SupportRequestAttachments/Count | Get the count of support request attachments |
| [**updateSupportRequestAttachmentAsync()**](SupportRequestAttachmentsApi.md#updateSupportRequestAttachmentAsync) | **PUT** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} | Update a support request attachment |


## `createSupportRequestAttachmentAsync()`

```php
createSupportRequestAttachmentAsync($tenant_id, $api_version, $x_api_version, $support_request_attachment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new support request attachment

Creates a new support request attachment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$support_request_attachment_create_dto = new \OpenAPI\Client\Model\SupportRequestAttachmentCreateDto(); // \OpenAPI\Client\Model\SupportRequestAttachmentCreateDto

try {
    $result = $apiInstance->createSupportRequestAttachmentAsync($tenant_id, $api_version, $x_api_version, $support_request_attachment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->createSupportRequestAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **support_request_attachment_create_dto** | [**\OpenAPI\Client\Model\SupportRequestAttachmentCreateDto**](../Model/SupportRequestAttachmentCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSupportRequestAttachmentAsync()`

```php
deleteSupportRequestAttachmentAsync($tenant_id, $support_request_attachment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a support request attachment

Deletes a support request attachment by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_request_attachment_id = 'support_request_attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSupportRequestAttachmentAsync($tenant_id, $support_request_attachment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->deleteSupportRequestAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_request_attachment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportRequestAttachmentAsync()`

```php
getSupportRequestAttachmentAsync($tenant_id, $support_request_attachment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportRequestAttachmentDtoEnvelope
```

Retrieve a support request attachment by ID

Retrieves a single support request attachment by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_request_attachment_id = 'support_request_attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportRequestAttachmentAsync($tenant_id, $support_request_attachment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->getSupportRequestAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_request_attachment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportRequestAttachmentDtoEnvelope**](../Model/SupportRequestAttachmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportRequestAttachmentsAsync()`

```php
getSupportRequestAttachmentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupportRequestAttachmentDtoListEnvelope
```

Retrieve a list of support request attachments

Retrieves a list of support request attachments for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportRequestAttachmentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->getSupportRequestAttachmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupportRequestAttachmentDtoListEnvelope**](../Model/SupportRequestAttachmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportRequestAttachmentsCountAsync()`

```php
getSupportRequestAttachmentsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of support request attachments

Returns the total count of support request attachments for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupportRequestAttachmentsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->getSupportRequestAttachmentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSupportRequestAttachmentAsync()`

```php
updateSupportRequestAttachmentAsync($tenant_id, $support_request_attachment_id, $api_version, $x_api_version, $support_request_attachment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a support request attachment

Updates an existing support request attachment by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupportRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$support_request_attachment_id = 'support_request_attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$support_request_attachment_update_dto = new \OpenAPI\Client\Model\SupportRequestAttachmentUpdateDto(); // \OpenAPI\Client\Model\SupportRequestAttachmentUpdateDto

try {
    $result = $apiInstance->updateSupportRequestAttachmentAsync($tenant_id, $support_request_attachment_id, $api_version, $x_api_version, $support_request_attachment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRequestAttachmentsApi->updateSupportRequestAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **support_request_attachment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **support_request_attachment_update_dto** | [**\OpenAPI\Client\Model\SupportRequestAttachmentUpdateDto**](../Model/SupportRequestAttachmentUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
