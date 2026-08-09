# OpenAPI\Client\ItemAttributesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemAttributesAsync()**](ItemAttributesApi.md#countItemAttributesAsync) | **GET** /api/v2/CatalogService/ItemAttributes/Count | Count item attributes |
| [**createItemAttributeAsync()**](ItemAttributesApi.md#createItemAttributeAsync) | **POST** /api/v2/CatalogService/ItemAttributes | Create a new item attribute |
| [**deleteItemAttributeAsync()**](ItemAttributesApi.md#deleteItemAttributeAsync) | **DELETE** /api/v2/CatalogService/ItemAttributes/{itemAttributeId} | Delete an item attribute |
| [**getItemAttributeByIdAsync()**](ItemAttributesApi.md#getItemAttributeByIdAsync) | **GET** /api/v2/CatalogService/ItemAttributes/{itemAttributeId} | Get item attribute by ID |
| [**getItemAttributesAsync()**](ItemAttributesApi.md#getItemAttributesAsync) | **GET** /api/v2/CatalogService/ItemAttributes | Get all item attributes |
| [**patchItemAttributeAsync()**](ItemAttributesApi.md#patchItemAttributeAsync) | **PATCH** /api/v2/CatalogService/ItemAttributes/{itemAttributeId} | Patch an item attribute |
| [**updateItemAttributeAsync()**](ItemAttributesApi.md#updateItemAttributeAsync) | **PUT** /api/v2/CatalogService/ItemAttributes/{itemAttributeId} | Update an item attribute |


## `countItemAttributesAsync()`

```php
countItemAttributesAsync($tenant_id, $api_version, $x_api_version, $item_attribute_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count item attributes

Counts all item attributes for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attribute_dto_collection_query_parameters = new \OpenAPI\Client\Model\ItemAttributeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ItemAttributeDtoCollectionQueryParameters

try {
    $result = $apiInstance->countItemAttributesAsync($tenant_id, $api_version, $x_api_version, $item_attribute_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributesApi->countItemAttributesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attribute_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ItemAttributeDtoCollectionQueryParameters**](../Model/ItemAttributeDtoCollectionQueryParameters.md)|  | [optional] |

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

## `createItemAttributeAsync()`

```php
createItemAttributeAsync($tenant_id, $api_version, $x_api_version, $item_attribute_create_dto): \OpenAPI\Client\Model\ItemAttributeDtoEnvelope
```

Create a new item attribute

Creates a new item attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attribute_create_dto = new \OpenAPI\Client\Model\ItemAttributeCreateDto(); // \OpenAPI\Client\Model\ItemAttributeCreateDto

try {
    $result = $apiInstance->createItemAttributeAsync($tenant_id, $api_version, $x_api_version, $item_attribute_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributesApi->createItemAttributeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attribute_create_dto** | [**\OpenAPI\Client\Model\ItemAttributeCreateDto**](../Model/ItemAttributeCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttributeDtoEnvelope**](../Model/ItemAttributeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemAttributeAsync()`

```php
deleteItemAttributeAsync($tenant_id, $item_attribute_id, $api_version, $x_api_version)
```

Delete an item attribute

Deletes an item attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_attribute_id = 'item_attribute_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemAttributeAsync($tenant_id, $item_attribute_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributesApi->deleteItemAttributeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_attribute_id** | **string**|  | |
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

## `getItemAttributeByIdAsync()`

```php
getItemAttributeByIdAsync($item_attribute_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemAttributeDtoEnvelope
```

Get item attribute by ID

Retrieves a specific item attribute by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_attribute_id = 'item_attribute_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemAttributeByIdAsync($item_attribute_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributesApi->getItemAttributeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_attribute_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttributeDtoEnvelope**](../Model/ItemAttributeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemAttributesAsync()`

```php
getItemAttributesAsync($tenant_id, $api_version, $x_api_version, $item_attribute_dto_collection_query_parameters): \OpenAPI\Client\Model\ItemAttributeDtoListEnvelope
```

Get all item attributes

Retrieves all item attributes for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attribute_dto_collection_query_parameters = new \OpenAPI\Client\Model\ItemAttributeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ItemAttributeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getItemAttributesAsync($tenant_id, $api_version, $x_api_version, $item_attribute_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributesApi->getItemAttributesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attribute_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ItemAttributeDtoCollectionQueryParameters**](../Model/ItemAttributeDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttributeDtoListEnvelope**](../Model/ItemAttributeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchItemAttributeAsync()`

```php
patchItemAttributeAsync($tenant_id, $item_attribute_id, $api_version, $x_api_version, $patch_operation)
```

Patch an item attribute

Partially updates an existing item attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_attribute_id = 'item_attribute_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $apiInstance->patchItemAttributeAsync($tenant_id, $item_attribute_id, $api_version, $x_api_version, $patch_operation);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributesApi->patchItemAttributeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_attribute_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `updateItemAttributeAsync()`

```php
updateItemAttributeAsync($tenant_id, $item_attribute_id, $api_version, $x_api_version, $item_attribute_update_dto)
```

Update an item attribute

Updates an existing item attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_attribute_id = 'item_attribute_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attribute_update_dto = new \OpenAPI\Client\Model\ItemAttributeUpdateDto(); // \OpenAPI\Client\Model\ItemAttributeUpdateDto

try {
    $apiInstance->updateItemAttributeAsync($tenant_id, $item_attribute_id, $api_version, $x_api_version, $item_attribute_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributesApi->updateItemAttributeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_attribute_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attribute_update_dto** | [**\OpenAPI\Client\Model\ItemAttributeUpdateDto**](../Model/ItemAttributeUpdateDto.md)|  | [optional] |

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
