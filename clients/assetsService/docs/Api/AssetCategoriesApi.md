# OpenAPI\Client\AssetCategoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetCategory()**](AssetCategoriesApi.md#createAssetCategory) | **POST** /api/v2/AssetsService/AssetCategories | Creates a new asset category |
| [**deleteAssetCategory()**](AssetCategoriesApi.md#deleteAssetCategory) | **DELETE** /api/v2/AssetsService/AssetCategories/{categoryId} | Deletes an asset category |
| [**getAssetCategories()**](AssetCategoriesApi.md#getAssetCategories) | **GET** /api/v2/AssetsService/AssetCategories | Gets all asset categories for the current tenant |
| [**getAssetCategoriesCount()**](AssetCategoriesApi.md#getAssetCategoriesCount) | **GET** /api/v2/AssetsService/AssetCategories/count | Gets the count of asset categories |
| [**getAssetCategory()**](AssetCategoriesApi.md#getAssetCategory) | **GET** /api/v2/AssetsService/AssetCategories/{categoryId} | Gets a specific asset category |
| [**updateAssetCategory()**](AssetCategoriesApi.md#updateAssetCategory) | **PUT** /api/v2/AssetsService/AssetCategories/{categoryId} | Updates an existing asset category |


## `createAssetCategory()`

```php
createAssetCategory($tenant_id, $asset_category_create_dto): \OpenAPI\Client\Model\AssetCategoryDtoEnvelope
```

Creates a new asset category

Creates a new asset category for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_category_create_dto = new \OpenAPI\Client\Model\AssetCategoryCreateDto(); // \OpenAPI\Client\Model\AssetCategoryCreateDto

try {
    $result = $apiInstance->createAssetCategory($tenant_id, $asset_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetCategoriesApi->createAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_category_create_dto** | [**\OpenAPI\Client\Model\AssetCategoryCreateDto**](../Model/AssetCategoryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetCategoryDtoEnvelope**](../Model/AssetCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetCategory()`

```php
deleteAssetCategory($tenant_id, $category_id)
```

Deletes an asset category

Deletes an asset category for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string

try {
    $apiInstance->deleteAssetCategory($tenant_id, $category_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetCategoriesApi->deleteAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |

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

## `getAssetCategories()`

```php
getAssetCategories($tenant_id): \OpenAPI\Client\Model\AssetCategoryDtoListEnvelope
```

Gets all asset categories for the current tenant

Retrieves all asset categories for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetCategories($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetCategoriesApi->getAssetCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetCategoryDtoListEnvelope**](../Model/AssetCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetCategoriesCount()`

```php
getAssetCategoriesCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets the count of asset categories

Returns the total number of asset categories for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetCategoriesCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetCategoriesApi->getAssetCategoriesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

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

## `getAssetCategory()`

```php
getAssetCategory($tenant_id, $category_id): \OpenAPI\Client\Model\AssetCategoryDtoEnvelope
```

Gets a specific asset category

Retrieves a specific asset category by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string

try {
    $result = $apiInstance->getAssetCategory($tenant_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetCategoriesApi->getAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetCategoryDtoEnvelope**](../Model/AssetCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetCategory()`

```php
updateAssetCategory($tenant_id, $category_id, $asset_category_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates an existing asset category

Updates an existing asset category for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string
$asset_category_update_dto = new \OpenAPI\Client\Model\AssetCategoryUpdateDto(); // \OpenAPI\Client\Model\AssetCategoryUpdateDto

try {
    $result = $apiInstance->updateAssetCategory($tenant_id, $category_id, $asset_category_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetCategoriesApi->updateAssetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |
| **asset_category_update_dto** | [**\OpenAPI\Client\Model\AssetCategoryUpdateDto**](../Model/AssetCategoryUpdateDto.md)|  | [optional] |

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
