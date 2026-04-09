# OpenAPI\Client\ItemBrandsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemBrandAsync()**](ItemBrandsApi.md#createItemBrandAsync) | **POST** /api/v2/CatalogService/ItemBrands | Create a new item brand |
| [**deleteItemBrandAsync()**](ItemBrandsApi.md#deleteItemBrandAsync) | **DELETE** /api/v2/CatalogService/ItemBrands/{itemBrandId} | Delete an item brand |
| [**getItemBrandByIdAsync()**](ItemBrandsApi.md#getItemBrandByIdAsync) | **GET** /api/v2/CatalogService/ItemBrands/{itemBrandId} | Get item brand by ID |
| [**getItemBrandsAsync()**](ItemBrandsApi.md#getItemBrandsAsync) | **GET** /api/v2/CatalogService/ItemBrands | Get all item brands |
| [**updateItemBrandAsync()**](ItemBrandsApi.md#updateItemBrandAsync) | **PUT** /api/v2/CatalogService/ItemBrands/{itemBrandId} | Update an item brand |


## `createItemBrandAsync()`

```php
createItemBrandAsync($tenant_id, $api_version, $x_api_version, $item_brand_create_dto): \OpenAPI\Client\Model\ItemBrandDtoEnvelope
```

Create a new item brand

Creates a new item brand for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_brand_create_dto = new \OpenAPI\Client\Model\ItemBrandCreateDto(); // \OpenAPI\Client\Model\ItemBrandCreateDto

try {
    $result = $apiInstance->createItemBrandAsync($tenant_id, $api_version, $x_api_version, $item_brand_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBrandsApi->createItemBrandAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_brand_create_dto** | [**\OpenAPI\Client\Model\ItemBrandCreateDto**](../Model/ItemBrandCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemBrandDtoEnvelope**](../Model/ItemBrandDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemBrandAsync()`

```php
deleteItemBrandAsync($tenant_id, $item_brand_id, $api_version, $x_api_version)
```

Delete an item brand

Deletes an item brand for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_brand_id = 'item_brand_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemBrandAsync($tenant_id, $item_brand_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemBrandsApi->deleteItemBrandAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_brand_id** | **string**|  | |
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

## `getItemBrandByIdAsync()`

```php
getItemBrandByIdAsync($item_brand_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemBrandDtoEnvelope
```

Get item brand by ID

Retrieves a specific item brand by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_brand_id = 'item_brand_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemBrandByIdAsync($item_brand_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBrandsApi->getItemBrandByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_brand_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemBrandDtoEnvelope**](../Model/ItemBrandDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemBrandsAsync()`

```php
getItemBrandsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemBrandDtoListEnvelope
```

Get all item brands

Retrieves all item brands for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemBrandsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBrandsApi->getItemBrandsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemBrandDtoListEnvelope**](../Model/ItemBrandDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemBrandAsync()`

```php
updateItemBrandAsync($tenant_id, $item_brand_id, $api_version, $x_api_version, $item_brand_update_dto): \OpenAPI\Client\Model\ItemBrandDtoEnvelope
```

Update an item brand

Updates an existing item brand for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_brand_id = 'item_brand_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_brand_update_dto = new \OpenAPI\Client\Model\ItemBrandUpdateDto(); // \OpenAPI\Client\Model\ItemBrandUpdateDto

try {
    $result = $apiInstance->updateItemBrandAsync($tenant_id, $item_brand_id, $api_version, $x_api_version, $item_brand_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBrandsApi->updateItemBrandAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_brand_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_brand_update_dto** | [**\OpenAPI\Client\Model\ItemBrandUpdateDto**](../Model/ItemBrandUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemBrandDtoEnvelope**](../Model/ItemBrandDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
