# OpenAPI\Client\ItemTagsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemTagAsync()**](ItemTagsApi.md#createItemTagAsync) | **POST** /api/v2/CatalogService/ItemTags | Create a new item tag |
| [**deleteItemTagAsync()**](ItemTagsApi.md#deleteItemTagAsync) | **DELETE** /api/v2/CatalogService/ItemTags/{itemTagId} | Delete an item tag |
| [**getItemTagByIdAsync()**](ItemTagsApi.md#getItemTagByIdAsync) | **GET** /api/v2/CatalogService/ItemTags/{itemTagId} | Get item tag by ID |
| [**getItemTagsAsync()**](ItemTagsApi.md#getItemTagsAsync) | **GET** /api/v2/CatalogService/ItemTags | Get all item tags |
| [**updateItemTagAsync()**](ItemTagsApi.md#updateItemTagAsync) | **PUT** /api/v2/CatalogService/ItemTags/{itemTagId} | Update an item tag |


## `createItemTagAsync()`

```php
createItemTagAsync($tenant_id, $api_version, $x_api_version, $item_tag_create_dto): \OpenAPI\Client\Model\ItemTagDtoEnvelope
```

Create a new item tag

Creates a new item tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_tag_create_dto = new \OpenAPI\Client\Model\ItemTagCreateDto(); // \OpenAPI\Client\Model\ItemTagCreateDto

try {
    $result = $apiInstance->createItemTagAsync($tenant_id, $api_version, $x_api_version, $item_tag_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTagsApi->createItemTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_tag_create_dto** | [**\OpenAPI\Client\Model\ItemTagCreateDto**](../Model/ItemTagCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTagDtoEnvelope**](../Model/ItemTagDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemTagAsync()`

```php
deleteItemTagAsync($tenant_id, $item_tag_id, $api_version, $x_api_version)
```

Delete an item tag

Deletes an item tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_tag_id = 'item_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemTagAsync($tenant_id, $item_tag_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemTagsApi->deleteItemTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_tag_id** | **string**|  | |
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

## `getItemTagByIdAsync()`

```php
getItemTagByIdAsync($item_tag_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTagDtoEnvelope
```

Get item tag by ID

Retrieves a specific item tag by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_tag_id = 'item_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTagByIdAsync($item_tag_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTagsApi->getItemTagByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_tag_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTagDtoEnvelope**](../Model/ItemTagDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemTagsAsync()`

```php
getItemTagsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTagDtoListEnvelope
```

Get all item tags

Retrieves all item tags for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTagsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTagsApi->getItemTagsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTagDtoListEnvelope**](../Model/ItemTagDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemTagAsync()`

```php
updateItemTagAsync($tenant_id, $item_tag_id, $api_version, $x_api_version, $item_tag_update_dto)
```

Update an item tag

Updates an existing item tag for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_tag_id = 'item_tag_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_tag_update_dto = new \OpenAPI\Client\Model\ItemTagUpdateDto(); // \OpenAPI\Client\Model\ItemTagUpdateDto

try {
    $apiInstance->updateItemTagAsync($tenant_id, $item_tag_id, $api_version, $x_api_version, $item_tag_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemTagsApi->updateItemTagAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_tag_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_tag_update_dto** | [**\OpenAPI\Client\Model\ItemTagUpdateDto**](../Model/ItemTagUpdateDto.md)|  | [optional] |

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
