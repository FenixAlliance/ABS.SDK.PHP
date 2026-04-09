# OpenAPI\Client\ItemTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemTypesAsync()**](ItemTypesApi.md#countItemTypesAsync) | **GET** /api/v2/CatalogService/ItemTypes/Count | Count item types |
| [**createItemTypeAsync()**](ItemTypesApi.md#createItemTypeAsync) | **POST** /api/v2/CatalogService/ItemTypes | Create a new item type |
| [**deleteItemTypeAsync()**](ItemTypesApi.md#deleteItemTypeAsync) | **DELETE** /api/v2/CatalogService/ItemTypes/{itemTypeID} | Delete an item type |
| [**getItemTypeByIdAsync()**](ItemTypesApi.md#getItemTypeByIdAsync) | **GET** /api/v2/CatalogService/ItemTypes/{itemTypeID} | Get item type by ID |
| [**getItemTypesAsync()**](ItemTypesApi.md#getItemTypesAsync) | **GET** /api/v2/CatalogService/ItemTypes | Get all item types |
| [**updateItemTypeAsync()**](ItemTypesApi.md#updateItemTypeAsync) | **PUT** /api/v2/CatalogService/ItemTypes/{itemTypeID} | Update an item type |


## `countItemTypesAsync()`

```php
countItemTypesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count item types

Counts all item types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countItemTypesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTypesApi->countItemTypesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createItemTypeAsync()`

```php
createItemTypeAsync($tenant_id, $api_version, $x_api_version, $item_type_create_dto): \OpenAPI\Client\Model\ItemTypeDtoEnvelope
```

Create a new item type

Creates a new item type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_type_create_dto = new \OpenAPI\Client\Model\ItemTypeCreateDto(); // \OpenAPI\Client\Model\ItemTypeCreateDto

try {
    $result = $apiInstance->createItemTypeAsync($tenant_id, $api_version, $x_api_version, $item_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTypesApi->createItemTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_type_create_dto** | [**\OpenAPI\Client\Model\ItemTypeCreateDto**](../Model/ItemTypeCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTypeDtoEnvelope**](../Model/ItemTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemTypeAsync()`

```php
deleteItemTypeAsync($tenant_id, $item_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTypeDtoEnvelope
```

Delete an item type

Deletes an item type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_type_id = 'item_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemTypeAsync($tenant_id, $item_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTypesApi->deleteItemTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTypeDtoEnvelope**](../Model/ItemTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemTypeByIdAsync()`

```php
getItemTypeByIdAsync($item_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTypeDtoEnvelope
```

Get item type by ID

Retrieves a specific item type by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_type_id = 'item_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTypeByIdAsync($item_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTypesApi->getItemTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTypeDtoEnvelope**](../Model/ItemTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemTypesAsync()`

```php
getItemTypesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTypeDtoListEnvelope
```

Get all item types

Retrieves all item types for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTypesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTypesApi->getItemTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTypeDtoListEnvelope**](../Model/ItemTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemTypeAsync()`

```php
updateItemTypeAsync($tenant_id, $item_type_id, $api_version, $x_api_version, $item_type_update_dto)
```

Update an item type

Updates an existing item type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_type_id = 'item_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_type_update_dto = new \OpenAPI\Client\Model\ItemTypeUpdateDto(); // \OpenAPI\Client\Model\ItemTypeUpdateDto

try {
    $apiInstance->updateItemTypeAsync($tenant_id, $item_type_id, $api_version, $x_api_version, $item_type_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemTypesApi->updateItemTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_type_update_dto** | [**\OpenAPI\Client\Model\ItemTypeUpdateDto**](../Model/ItemTypeUpdateDto.md)|  | [optional] |

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
