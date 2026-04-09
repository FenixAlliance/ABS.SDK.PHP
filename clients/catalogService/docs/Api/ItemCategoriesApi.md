# OpenAPI\Client\ItemCategoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countItemCategoriesAsync()**](ItemCategoriesApi.md#countItemCategoriesAsync) | **GET** /api/v2/CatalogService/ItemCategories/Count | Count item categories |
| [**createItemCategoryAsync()**](ItemCategoriesApi.md#createItemCategoryAsync) | **POST** /api/v2/CatalogService/ItemCategories | Create a new item category |
| [**deleteItemCategoryAsync()**](ItemCategoriesApi.md#deleteItemCategoryAsync) | **DELETE** /api/v2/CatalogService/ItemCategories/{itemCategoryId} | Delete an item category |
| [**getItemCategoriesAsync()**](ItemCategoriesApi.md#getItemCategoriesAsync) | **GET** /api/v2/CatalogService/ItemCategories | Get all item categories |
| [**getItemCategoryByIdAsync()**](ItemCategoriesApi.md#getItemCategoryByIdAsync) | **GET** /api/v2/CatalogService/ItemCategories/{itemCategoryId} | Get item category by ID |
| [**updateItemCategoryAsync()**](ItemCategoriesApi.md#updateItemCategoryAsync) | **PUT** /api/v2/CatalogService/ItemCategories/{itemCategoryId} | Update an item category |


## `countItemCategoriesAsync()`

```php
countItemCategoriesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count item categories

Counts all item categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countItemCategoriesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoriesApi->countItemCategoriesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createItemCategoryAsync()`

```php
createItemCategoryAsync($tenant_id, $api_version, $x_api_version, $item_category_create_dto): \OpenAPI\Client\Model\ItemCategoryDtoEnvelope
```

Create a new item category

Creates a new item category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_category_create_dto = new \OpenAPI\Client\Model\ItemCategoryCreateDto(); // \OpenAPI\Client\Model\ItemCategoryCreateDto

try {
    $result = $apiInstance->createItemCategoryAsync($tenant_id, $api_version, $x_api_version, $item_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoriesApi->createItemCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_category_create_dto** | [**\OpenAPI\Client\Model\ItemCategoryCreateDto**](../Model/ItemCategoryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemCategoryDtoEnvelope**](../Model/ItemCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemCategoryAsync()`

```php
deleteItemCategoryAsync($tenant_id, $item_category_id, $api_version, $x_api_version)
```

Delete an item category

Deletes an item category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_category_id = 'item_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemCategoryAsync($tenant_id, $item_category_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoriesApi->deleteItemCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_category_id** | **string**|  | |
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

## `getItemCategoriesAsync()`

```php
getItemCategoriesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemCategoryDtoListEnvelope
```

Get all item categories

Retrieves all item categories for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemCategoriesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoriesApi->getItemCategoriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemCategoryDtoListEnvelope**](../Model/ItemCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemCategoryByIdAsync()`

```php
getItemCategoryByIdAsync($item_category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemCategoryDtoEnvelope
```

Get item category by ID

Retrieves a specific item category by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_category_id = 'item_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemCategoryByIdAsync($item_category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoriesApi->getItemCategoryByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemCategoryDtoEnvelope**](../Model/ItemCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemCategoryAsync()`

```php
updateItemCategoryAsync($tenant_id, $item_category_id, $api_version, $x_api_version, $item_category_update_dto)
```

Update an item category

Updates an existing item category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_category_id = 'item_category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_category_update_dto = new \OpenAPI\Client\Model\ItemCategoryUpdateDto(); // \OpenAPI\Client\Model\ItemCategoryUpdateDto

try {
    $apiInstance->updateItemCategoryAsync($tenant_id, $item_category_id, $api_version, $x_api_version, $item_category_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoriesApi->updateItemCategoryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_category_update_dto** | [**\OpenAPI\Client\Model\ItemCategoryUpdateDto**](../Model/ItemCategoryUpdateDto.md)|  | [optional] |

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
