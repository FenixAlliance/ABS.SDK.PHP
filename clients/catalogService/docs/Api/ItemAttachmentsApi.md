# OpenAPI\Client\ItemAttachmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemAttachmentAsync()**](ItemAttachmentsApi.md#createItemAttachmentAsync) | **POST** /api/v2/CatalogService/ItemAttachments | Create a new item attachment |
| [**deleteItemAttachmentAsync()**](ItemAttachmentsApi.md#deleteItemAttachmentAsync) | **DELETE** /api/v2/CatalogService/ItemAttachments/{itemAttachmentId} | Delete an item attachment |
| [**getItemAttachmentByIdAsync()**](ItemAttachmentsApi.md#getItemAttachmentByIdAsync) | **GET** /api/v2/CatalogService/ItemAttachments/{itemAttachmentId} | Get item attachment by ID |
| [**getItemAttachmentsAsync()**](ItemAttachmentsApi.md#getItemAttachmentsAsync) | **GET** /api/v2/CatalogService/ItemAttachments | Get all item attachments |
| [**updateItemAttachmentAsync()**](ItemAttachmentsApi.md#updateItemAttachmentAsync) | **PUT** /api/v2/CatalogService/ItemAttachments/{itemAttachmentId} | Update an item attachment |


## `createItemAttachmentAsync()`

```php
createItemAttachmentAsync($tenant_id, $api_version, $x_api_version, $item_attachment_create_dto): \OpenAPI\Client\Model\ItemAttachmentDtoEnvelope
```

Create a new item attachment

Creates a new item attachment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attachment_create_dto = new \OpenAPI\Client\Model\ItemAttachmentCreateDto(); // \OpenAPI\Client\Model\ItemAttachmentCreateDto

try {
    $result = $apiInstance->createItemAttachmentAsync($tenant_id, $api_version, $x_api_version, $item_attachment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttachmentsApi->createItemAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attachment_create_dto** | [**\OpenAPI\Client\Model\ItemAttachmentCreateDto**](../Model/ItemAttachmentCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttachmentDtoEnvelope**](../Model/ItemAttachmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemAttachmentAsync()`

```php
deleteItemAttachmentAsync($tenant_id, $item_attachment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an item attachment

Deletes an item attachment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_attachment_id = 'item_attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemAttachmentAsync($tenant_id, $item_attachment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttachmentsApi->deleteItemAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_attachment_id** | **string**|  | |
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

## `getItemAttachmentByIdAsync()`

```php
getItemAttachmentByIdAsync($item_attachment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemAttachmentDtoEnvelope
```

Get item attachment by ID

Retrieves a specific item attachment by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_attachment_id = 'item_attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemAttachmentByIdAsync($item_attachment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttachmentsApi->getItemAttachmentByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_attachment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttachmentDtoEnvelope**](../Model/ItemAttachmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemAttachmentsAsync()`

```php
getItemAttachmentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemAttachmentDtoListEnvelope
```

Get all item attachments

Retrieves all item attachments for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemAttachmentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttachmentsApi->getItemAttachmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttachmentDtoListEnvelope**](../Model/ItemAttachmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemAttachmentAsync()`

```php
updateItemAttachmentAsync($tenant_id, $item_attachment_id, $api_version, $x_api_version, $item_attachment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an item attachment

Updates an existing item attachment for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_attachment_id = 'item_attachment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attachment_update_dto = new \OpenAPI\Client\Model\ItemAttachmentUpdateDto(); // \OpenAPI\Client\Model\ItemAttachmentUpdateDto

try {
    $result = $apiInstance->updateItemAttachmentAsync($tenant_id, $item_attachment_id, $api_version, $x_api_version, $item_attachment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttachmentsApi->updateItemAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_attachment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attachment_update_dto** | [**\OpenAPI\Client\Model\ItemAttachmentUpdateDto**](../Model/ItemAttachmentUpdateDto.md)|  | [optional] |

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
