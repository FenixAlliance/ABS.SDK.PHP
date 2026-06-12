# OpenAPI\Client\ItemFamiliesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemFamilyAsync()**](ItemFamiliesApi.md#createItemFamilyAsync) | **POST** /api/v2/CatalogService/ItemFamilies | Create a new item family |
| [**deleteItemFamilyAsync()**](ItemFamiliesApi.md#deleteItemFamilyAsync) | **DELETE** /api/v2/CatalogService/ItemFamilies/{itemFamilyId} | Delete an item family |
| [**getItemFamiliesAsync()**](ItemFamiliesApi.md#getItemFamiliesAsync) | **GET** /api/v2/CatalogService/ItemFamilies | Get all item families |
| [**getItemFamiliesCountAsync()**](ItemFamiliesApi.md#getItemFamiliesCountAsync) | **GET** /api/v2/CatalogService/ItemFamilies/Count | Get item families count |
| [**getItemFamilyByIdAsync()**](ItemFamiliesApi.md#getItemFamilyByIdAsync) | **GET** /api/v2/CatalogService/ItemFamilies/{itemFamilyId} | Get item family by ID |
| [**patchItemFamilyAsync()**](ItemFamiliesApi.md#patchItemFamilyAsync) | **PATCH** /api/v2/CatalogService/ItemFamilies/{itemFamilyId} | Patch an item family |
| [**updateItemFamilyAsync()**](ItemFamiliesApi.md#updateItemFamilyAsync) | **PUT** /api/v2/CatalogService/ItemFamilies/{itemFamilyId} | Update an item family |


## `createItemFamilyAsync()`

```php
createItemFamilyAsync($tenant_id, $api_version, $x_api_version, $item_family_create_dto): \OpenAPI\Client\Model\ItemFamilyDtoEnvelope
```

Create a new item family

Creates a new item family for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_family_create_dto = new \OpenAPI\Client\Model\ItemFamilyCreateDto(); // \OpenAPI\Client\Model\ItemFamilyCreateDto

try {
    $result = $apiInstance->createItemFamilyAsync($tenant_id, $api_version, $x_api_version, $item_family_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemFamiliesApi->createItemFamilyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_family_create_dto** | [**\OpenAPI\Client\Model\ItemFamilyCreateDto**](../Model/ItemFamilyCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemFamilyDtoEnvelope**](../Model/ItemFamilyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemFamilyAsync()`

```php
deleteItemFamilyAsync($tenant_id, $item_family_id, $api_version, $x_api_version)
```

Delete an item family

Deletes an item family for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_family_id = 'item_family_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemFamilyAsync($tenant_id, $item_family_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemFamiliesApi->deleteItemFamilyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_family_id** | **string**|  | |
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

## `getItemFamiliesAsync()`

```php
getItemFamiliesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemFamilyDtoListEnvelope
```

Get all item families

Retrieves all item families for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemFamiliesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemFamiliesApi->getItemFamiliesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemFamilyDtoListEnvelope**](../Model/ItemFamilyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemFamiliesCountAsync()`

```php
getItemFamiliesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item families count

Returns the count of item families for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemFamiliesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemFamiliesApi->getItemFamiliesCountAsync: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemFamilyByIdAsync()`

```php
getItemFamilyByIdAsync($item_family_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemFamilyDtoEnvelope
```

Get item family by ID

Retrieves a specific item family by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_family_id = 'item_family_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemFamilyByIdAsync($item_family_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemFamiliesApi->getItemFamilyByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_family_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemFamilyDtoEnvelope**](../Model/ItemFamilyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchItemFamilyAsync()`

```php
patchItemFamilyAsync($tenant_id, $item_family_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch an item family

Partially updates an existing item family for the specified tenant using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_family_id = 'item_family_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchItemFamilyAsync($tenant_id, $item_family_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemFamiliesApi->patchItemFamilyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_family_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `updateItemFamilyAsync()`

```php
updateItemFamilyAsync($tenant_id, $item_family_id, $api_version, $x_api_version, $item_family_update_dto): \OpenAPI\Client\Model\ItemFamilyDtoEnvelope
```

Update an item family

Updates an existing item family for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_family_id = 'item_family_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_family_update_dto = new \OpenAPI\Client\Model\ItemFamilyUpdateDto(); // \OpenAPI\Client\Model\ItemFamilyUpdateDto

try {
    $result = $apiInstance->updateItemFamilyAsync($tenant_id, $item_family_id, $api_version, $x_api_version, $item_family_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemFamiliesApi->updateItemFamilyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_family_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_family_update_dto** | [**\OpenAPI\Client\Model\ItemFamilyUpdateDto**](../Model/ItemFamilyUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemFamilyDtoEnvelope**](../Model/ItemFamilyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
