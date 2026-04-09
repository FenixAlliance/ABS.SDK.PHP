# OpenAPI\Client\ItemImagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemImageAsync()**](ItemImagesApi.md#createItemImageAsync) | **POST** /api/v2/CatalogService/ItemImages | Create a new item image |
| [**deleteItemImageAsync()**](ItemImagesApi.md#deleteItemImageAsync) | **DELETE** /api/v2/CatalogService/ItemImages/{itemImageId} | Delete an item image |
| [**getItemImageByIdAsync()**](ItemImagesApi.md#getItemImageByIdAsync) | **GET** /api/v2/CatalogService/ItemImages/{itemImageId} | Get item image by ID |
| [**getItemImagesAsync()**](ItemImagesApi.md#getItemImagesAsync) | **GET** /api/v2/CatalogService/ItemImages | Get all item images |
| [**updateItemImageAsync()**](ItemImagesApi.md#updateItemImageAsync) | **PUT** /api/v2/CatalogService/ItemImages/{itemImageId} | Update an item image |


## `createItemImageAsync()`

```php
createItemImageAsync($tenant_id, $api_version, $x_api_version, $item_image_create_dto): \OpenAPI\Client\Model\ItemImageDtoEnvelope
```

Create a new item image

Creates a new item image for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_image_create_dto = new \OpenAPI\Client\Model\ItemImageCreateDto(); // \OpenAPI\Client\Model\ItemImageCreateDto

try {
    $result = $apiInstance->createItemImageAsync($tenant_id, $api_version, $x_api_version, $item_image_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemImagesApi->createItemImageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_image_create_dto** | [**\OpenAPI\Client\Model\ItemImageCreateDto**](../Model/ItemImageCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemImageDtoEnvelope**](../Model/ItemImageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemImageAsync()`

```php
deleteItemImageAsync($tenant_id, $item_image_id, $api_version, $x_api_version)
```

Delete an item image

Deletes an item image for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_image_id = 'item_image_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemImageAsync($tenant_id, $item_image_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemImagesApi->deleteItemImageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_image_id** | **string**|  | |
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

## `getItemImageByIdAsync()`

```php
getItemImageByIdAsync($item_image_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemImageDtoEnvelope
```

Get item image by ID

Retrieves a specific item image by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_image_id = 'item_image_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemImageByIdAsync($item_image_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemImagesApi->getItemImageByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_image_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemImageDtoEnvelope**](../Model/ItemImageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemImagesAsync()`

```php
getItemImagesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemImageDtoListEnvelope
```

Get all item images

Retrieves all item images for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemImagesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemImagesApi->getItemImagesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemImageDtoListEnvelope**](../Model/ItemImageDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemImageAsync()`

```php
updateItemImageAsync($tenant_id, $item_image_id, $api_version, $x_api_version, $item_image_update_dto)
```

Update an item image

Updates an existing item image for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_image_id = 'item_image_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_image_update_dto = new \OpenAPI\Client\Model\ItemImageUpdateDto(); // \OpenAPI\Client\Model\ItemImageUpdateDto

try {
    $apiInstance->updateItemImageAsync($tenant_id, $item_image_id, $api_version, $x_api_version, $item_image_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ItemImagesApi->updateItemImageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_image_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_image_update_dto** | [**\OpenAPI\Client\Model\ItemImageUpdateDto**](../Model/ItemImageUpdateDto.md)|  | [optional] |

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
