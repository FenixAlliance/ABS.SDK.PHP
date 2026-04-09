# OpenAPI\Client\AssetTransfersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetTransferAsync()**](AssetTransfersApi.md#createAssetTransferAsync) | **POST** /api/v2/AssetsService/AssetTransfers | Creates a new asset transfer |
| [**deleteAssetTransferAsync()**](AssetTransfersApi.md#deleteAssetTransferAsync) | **DELETE** /api/v2/AssetsService/AssetTransfers/{transferId} | Deletes an asset transfer |
| [**getAssetTransferAsync()**](AssetTransfersApi.md#getAssetTransferAsync) | **GET** /api/v2/AssetsService/AssetTransfers/{transferId} | Gets a single asset transfer by ID |
| [**getAssetTransfersAsync()**](AssetTransfersApi.md#getAssetTransfersAsync) | **GET** /api/v2/AssetsService/AssetTransfers | Gets a list of asset transfers |
| [**getAssetTransfersCountAsync()**](AssetTransfersApi.md#getAssetTransfersCountAsync) | **GET** /api/v2/AssetsService/AssetTransfers/Count | Gets the count of asset transfers |
| [**updateAssetTransferAsync()**](AssetTransfersApi.md#updateAssetTransferAsync) | **PUT** /api/v2/AssetsService/AssetTransfers/{transferId} | Updates an existing asset transfer |


## `createAssetTransferAsync()`

```php
createAssetTransferAsync($tenant_id, $asset_transfer_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new asset transfer

Creates a new asset transfer for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$asset_transfer_create_dto = new \OpenAPI\Client\Model\AssetTransferCreateDto(); // \OpenAPI\Client\Model\AssetTransferCreateDto

try {
    $result = $apiInstance->createAssetTransferAsync($tenant_id, $asset_transfer_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransfersApi->createAssetTransferAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **asset_transfer_create_dto** | [**\OpenAPI\Client\Model\AssetTransferCreateDto**](../Model/AssetTransferCreateDto.md)|  | [optional] |

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

## `deleteAssetTransferAsync()`

```php
deleteAssetTransferAsync($tenant_id, $transfer_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes an asset transfer

Deletes an asset transfer for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transfer_id = 'transfer_id_example'; // string

try {
    $result = $apiInstance->deleteAssetTransferAsync($tenant_id, $transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransfersApi->deleteAssetTransferAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transfer_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTransferAsync()`

```php
getAssetTransferAsync($tenant_id, $transfer_id): \OpenAPI\Client\Model\AssetTransferDtoEnvelope
```

Gets a single asset transfer by ID

Retrieves a specific asset transfer by its ID for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transfer_id = 'transfer_id_example'; // string

try {
    $result = $apiInstance->getAssetTransferAsync($tenant_id, $transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransfersApi->getAssetTransferAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transfer_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetTransferDtoEnvelope**](../Model/AssetTransferDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTransfersAsync()`

```php
getAssetTransfersAsync($tenant_id): \OpenAPI\Client\Model\AssetTransferDtoListEnvelope
```

Gets a list of asset transfers

Retrieves all asset transfers for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetTransfersAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransfersApi->getAssetTransfersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssetTransferDtoListEnvelope**](../Model/AssetTransferDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTransfersCountAsync()`

```php
getAssetTransfersCountAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets the count of asset transfers

Returns the total number of asset transfers for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getAssetTransfersCountAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransfersApi->getAssetTransfersCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateAssetTransferAsync()`

```php
updateAssetTransferAsync($tenant_id, $transfer_id, $asset_transfer_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates an existing asset transfer

Updates an existing asset transfer for the authenticated tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transfer_id = 'transfer_id_example'; // string
$asset_transfer_update_dto = new \OpenAPI\Client\Model\AssetTransferUpdateDto(); // \OpenAPI\Client\Model\AssetTransferUpdateDto

try {
    $result = $apiInstance->updateAssetTransferAsync($tenant_id, $transfer_id, $asset_transfer_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransfersApi->updateAssetTransferAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transfer_id** | **string**|  | |
| **asset_transfer_update_dto** | [**\OpenAPI\Client\Model\AssetTransferUpdateDto**](../Model/AssetTransferUpdateDto.md)|  | [optional] |

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
