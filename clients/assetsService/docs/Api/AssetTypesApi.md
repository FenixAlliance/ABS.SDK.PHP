# OpenAPI\Client\AssetTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetType()**](AssetTypesApi.md#createAssetType) | **POST** /api/v2/AssetsService/AssetTypes | Creates a new asset type |
| [**deleteAssetType()**](AssetTypesApi.md#deleteAssetType) | **DELETE** /api/v2/AssetsService/AssetTypes/{typeId} | Deletes an asset type |
| [**getAssetType()**](AssetTypesApi.md#getAssetType) | **GET** /api/v2/AssetsService/AssetTypes/{typeId} | Gets a specific asset type |
| [**getAssetTypes()**](AssetTypesApi.md#getAssetTypes) | **GET** /api/v2/AssetsService/AssetTypes | Gets all asset types for the current tenant |
| [**getAssetTypesCount()**](AssetTypesApi.md#getAssetTypesCount) | **GET** /api/v2/AssetsService/AssetTypes/count | Gets the count of asset types |
| [**updateAssetType()**](AssetTypesApi.md#updateAssetType) | **PUT** /api/v2/AssetsService/AssetTypes/{typeId} | Updates an existing asset type |


## `createAssetType()`

```php
createAssetType($tenant_id, $asset_type_create_dto): \OpenAPI\Client\Model\AssetTypeDtoEnvelope
```

Creates a new asset type

Creates a new asset type for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_type_create_dto = new \OpenAPI\Client\Model\AssetTypeCreateDto(); // \OpenAPI\Client\Model\AssetTypeCreateDto

try {
    $result = $apiInstance->createAssetType($tenant_id, $asset_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesApi->createAssetType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_type_create_dto** | [**\OpenAPI\Client\Model\AssetTypeCreateDto**](../Model/AssetTypeCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetTypeDtoEnvelope**](../Model/AssetTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetType()`

```php
deleteAssetType($tenant_id, $type_id)
```

Deletes an asset type

Deletes an asset type for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$type_id = 'type_id_example'; // string

try {
    $apiInstance->deleteAssetType($tenant_id, $type_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesApi->deleteAssetType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **type_id** | **string**|  | |

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

## `getAssetType()`

```php
getAssetType($tenant_id, $type_id): \OpenAPI\Client\Model\AssetTypeDtoEnvelope
```

Gets a specific asset type

Retrieves a specific asset type by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$type_id = 'type_id_example'; // string

try {
    $result = $apiInstance->getAssetType($tenant_id, $type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesApi->getAssetType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **type_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetTypeDtoEnvelope**](../Model/AssetTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTypes()`

```php
getAssetTypes($tenant_id): \OpenAPI\Client\Model\AssetTypeDtoListEnvelope
```

Gets all asset types for the current tenant

Retrieves all asset types for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetTypes($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesApi->getAssetTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetTypeDtoListEnvelope**](../Model/AssetTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTypesCount()`

```php
getAssetTypesCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets the count of asset types

Returns the total number of asset types for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetTypesCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesApi->getAssetTypesCount: ', $e->getMessage(), PHP_EOL;
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

## `updateAssetType()`

```php
updateAssetType($tenant_id, $type_id, $asset_type_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates an existing asset type

Updates an existing asset type for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$type_id = 'type_id_example'; // string
$asset_type_update_dto = new \OpenAPI\Client\Model\AssetTypeUpdateDto(); // \OpenAPI\Client\Model\AssetTypeUpdateDto

try {
    $result = $apiInstance->updateAssetType($tenant_id, $type_id, $asset_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesApi->updateAssetType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **type_id** | **string**|  | |
| **asset_type_update_dto** | [**\OpenAPI\Client\Model\AssetTypeUpdateDto**](../Model/AssetTypeUpdateDto.md)|  | [optional] |

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
