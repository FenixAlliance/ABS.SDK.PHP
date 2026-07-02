# OpenAPI\Client\StoresApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countStoresAsync()**](StoresApi.md#countStoresAsync) | **GET** /api/v2/SalesService/Stores/Count | Get stores count |
| [**createStoreAsync()**](StoresApi.md#createStoreAsync) | **POST** /api/v2/SalesService/Stores | Create a store |
| [**deleteStoreAsync()**](StoresApi.md#deleteStoreAsync) | **DELETE** /api/v2/SalesService/Stores/{storeId} | Delete a store |
| [**getStoreAsync()**](StoresApi.md#getStoreAsync) | **GET** /api/v2/SalesService/Stores/{storeId} | Get store by ID |
| [**getStoresAsync()**](StoresApi.md#getStoresAsync) | **GET** /api/v2/SalesService/Stores | Get stores |
| [**patchStoreAsync()**](StoresApi.md#patchStoreAsync) | **PATCH** /api/v2/SalesService/Stores/{storeId} | Patch a store |
| [**updateStoreAsync()**](StoresApi.md#updateStoreAsync) | **PUT** /api/v2/SalesService/Stores/{storeId} | Update a store |


## `countStoresAsync()`

```php
countStoresAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get stores count

Returns the total count of stores for the specified tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->countStoresAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->countStoresAsync: ', $e->getMessage(), PHP_EOL;
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

## `createStoreAsync()`

```php
createStoreAsync($tenant_id, $store_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a store

Creates a new store for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$store_create_dto = new \OpenAPI\Client\Model\StoreCreateDto(); // \OpenAPI\Client\Model\StoreCreateDto

try {
    $result = $apiInstance->createStoreAsync($tenant_id, $store_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createStoreAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **store_create_dto** | [**\OpenAPI\Client\Model\StoreCreateDto**](../Model/StoreCreateDto.md)|  | [optional] |

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

## `deleteStoreAsync()`

```php
deleteStoreAsync($tenant_id, $store_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a store

Deletes an existing store by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$store_id = 'store_id_example'; // string

try {
    $result = $apiInstance->deleteStoreAsync($tenant_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->deleteStoreAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **store_id** | **string**|  | |

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

## `getStoreAsync()`

```php
getStoreAsync($tenant_id, $store_id): \OpenAPI\Client\Model\StoreDtoEnvelope
```

Get store by ID

Retrieves a single store by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$store_id = 'store_id_example'; // string

try {
    $result = $apiInstance->getStoreAsync($tenant_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **store_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\StoreDtoEnvelope**](../Model/StoreDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoresAsync()`

```php
getStoresAsync($tenant_id): \OpenAPI\Client\Model\StoreDtoListEnvelope
```

Get stores

Retrieves a list of stores for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getStoresAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoresAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\StoreDtoListEnvelope**](../Model/StoreDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchStoreAsync()`

```php
patchStoreAsync($tenant_id, $store_id, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a store

Partially updates an existing store using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$store_id = 'store_id_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchStoreAsync($tenant_id, $store_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->patchStoreAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **store_id** | **string**|  | |
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

## `updateStoreAsync()`

```php
updateStoreAsync($tenant_id, $store_id, $store_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a store

Updates an existing store by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$store_id = 'store_id_example'; // string
$store_update_dto = new \OpenAPI\Client\Model\StoreUpdateDto(); // \OpenAPI\Client\Model\StoreUpdateDto

try {
    $result = $apiInstance->updateStoreAsync($tenant_id, $store_id, $store_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->updateStoreAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **store_id** | **string**|  | |
| **store_update_dto** | [**\OpenAPI\Client\Model\StoreUpdateDto**](../Model/StoreUpdateDto.md)|  | [optional] |

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
