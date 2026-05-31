# OpenAPI\Client\ItemAttributeOptionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemAttributeOptionAsync()**](ItemAttributeOptionsApi.md#createItemAttributeOptionAsync) | **POST** /api/v2/CatalogService/ItemAttributeOptions | Create a new item attribute option |
| [**deleteItemAttributeOptionAsync()**](ItemAttributeOptionsApi.md#deleteItemAttributeOptionAsync) | **DELETE** /api/v2/CatalogService/ItemAttributeOptions/{itemAttributeOptionId} | Delete an item attribute option |
| [**getItemAttributeOptionByIdAsync()**](ItemAttributeOptionsApi.md#getItemAttributeOptionByIdAsync) | **GET** /api/v2/CatalogService/ItemAttributeOptions/{itemAttributeOptionId} | Get item attribute option by ID |
| [**getItemAttributeOptionsAsync()**](ItemAttributeOptionsApi.md#getItemAttributeOptionsAsync) | **GET** /api/v2/CatalogService/ItemAttributeOptions | Get all item attribute options |
| [**getItemAttributeOptionsCountAsync()**](ItemAttributeOptionsApi.md#getItemAttributeOptionsCountAsync) | **GET** /api/v2/CatalogService/ItemAttributeOptions/Count | Get item attribute options count |
| [**updateItemAttributeOptionAsync()**](ItemAttributeOptionsApi.md#updateItemAttributeOptionAsync) | **PUT** /api/v2/CatalogService/ItemAttributeOptions/{itemAttributeOptionId} | Update an item attribute option |


## `createItemAttributeOptionAsync()`

```php
createItemAttributeOptionAsync($tenant_id, $api_version, $x_api_version, $item_attribute_option_create_dto): \OpenAPI\Client\Model\ItemAttributeOptionDtoEnvelope
```

Create a new item attribute option

Creates a new item attribute option for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributeOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attribute_option_create_dto = new \OpenAPI\Client\Model\ItemAttributeOptionCreateDto(); // \OpenAPI\Client\Model\ItemAttributeOptionCreateDto

try {
    $result = $apiInstance->createItemAttributeOptionAsync($tenant_id, $api_version, $x_api_version, $item_attribute_option_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributeOptionsApi->createItemAttributeOptionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attribute_option_create_dto** | [**\OpenAPI\Client\Model\ItemAttributeOptionCreateDto**](../Model/ItemAttributeOptionCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttributeOptionDtoEnvelope**](../Model/ItemAttributeOptionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemAttributeOptionAsync()`

```php
deleteItemAttributeOptionAsync($tenant_id, $item_attribute_option_id, $api_version, $x_api_version)
```

Delete an item attribute option

Deletes an item attribute option for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributeOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_attribute_option_id = 'item_attribute_option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteItemAttributeOptionAsync($tenant_id, $item_attribute_option_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributeOptionsApi->deleteItemAttributeOptionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_attribute_option_id** | **string**|  | |
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

## `getItemAttributeOptionByIdAsync()`

```php
getItemAttributeOptionByIdAsync($item_attribute_option_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemAttributeOptionDtoEnvelope
```

Get item attribute option by ID

Retrieves a specific item attribute option by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributeOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_attribute_option_id = 'item_attribute_option_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemAttributeOptionByIdAsync($item_attribute_option_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributeOptionsApi->getItemAttributeOptionByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_attribute_option_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttributeOptionDtoEnvelope**](../Model/ItemAttributeOptionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemAttributeOptionsAsync()`

```php
getItemAttributeOptionsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemAttributeOptionDtoListEnvelope
```

Get all item attribute options

Retrieves all item attribute options for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributeOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemAttributeOptionsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributeOptionsApi->getItemAttributeOptionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttributeOptionDtoListEnvelope**](../Model/ItemAttributeOptionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemAttributeOptionsCountAsync()`

```php
getItemAttributeOptionsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item attribute options count

Returns the count of item attribute options for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributeOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemAttributeOptionsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributeOptionsApi->getItemAttributeOptionsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateItemAttributeOptionAsync()`

```php
updateItemAttributeOptionAsync($tenant_id, $item_attribute_option_id, $api_version, $x_api_version, $item_attribute_option_update_dto): \OpenAPI\Client\Model\ItemAttributeOptionDtoEnvelope
```

Update an item attribute option

Updates an existing item attribute option for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemAttributeOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$item_attribute_option_id = 'item_attribute_option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_attribute_option_update_dto = new \OpenAPI\Client\Model\ItemAttributeOptionUpdateDto(); // \OpenAPI\Client\Model\ItemAttributeOptionUpdateDto

try {
    $result = $apiInstance->updateItemAttributeOptionAsync($tenant_id, $item_attribute_option_id, $api_version, $x_api_version, $item_attribute_option_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAttributeOptionsApi->updateItemAttributeOptionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **item_attribute_option_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_attribute_option_update_dto** | [**\OpenAPI\Client\Model\ItemAttributeOptionUpdateDto**](../Model/ItemAttributeOptionUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemAttributeOptionDtoEnvelope**](../Model/ItemAttributeOptionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
