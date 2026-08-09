# OpenAPI\Client\CartsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSystemCart()**](CartsApi.md#deleteSystemCart) | **DELETE** /api/v2/SystemService/Carts/{cartId} | Delete a system cart |
| [**getSystemCartById()**](CartsApi.md#getSystemCartById) | **GET** /api/v2/SystemService/Carts/{cartId} | Retrieve a single system cart by its ID |
| [**getSystemCarts()**](CartsApi.md#getSystemCarts) | **GET** /api/v2/SystemService/Carts | Retrieve a list of system carts |
| [**getSystemCartsCount()**](CartsApi.md#getSystemCartsCount) | **GET** /api/v2/SystemService/Carts/Count | Get the count of system carts |
| [**purgeSystemGuestCarts()**](CartsApi.md#purgeSystemGuestCarts) | **DELETE** /api/v2/SystemService/Carts/Guests | Purge all guest carts |


## `deleteSystemCart()`

```php
deleteSystemCart($cart_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a system cart

Delete a system cart by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSystemCart($cart_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->deleteSystemCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `getSystemCartById()`

```php
getSystemCartById($cart_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CartDtoEnvelope
```

Retrieve a single system cart by its ID

Retrieve a single system cart by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemCartById($cart_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getSystemCartById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartDtoEnvelope**](../Model/CartDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemCarts()`

```php
getSystemCarts($api_version, $x_api_version, $cart_dto_collection_query_parameters): \OpenAPI\Client\Model\CartDtoListEnvelope
```

Retrieve a list of system carts

Retrieve a list of all carts in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cart_dto_collection_query_parameters = new \OpenAPI\Client\Model\CartDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CartDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemCarts($api_version, $x_api_version, $cart_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getSystemCarts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cart_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CartDtoCollectionQueryParameters**](../Model/CartDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartDtoListEnvelope**](../Model/CartDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemCartsCount()`

```php
getSystemCartsCount($api_version, $x_api_version, $cart_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of system carts

Get the count of all carts in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cart_dto_collection_query_parameters = new \OpenAPI\Client\Model\CartDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CartDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemCartsCount($api_version, $x_api_version, $cart_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getSystemCartsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cart_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CartDtoCollectionQueryParameters**](../Model/CartDtoCollectionQueryParameters.md)|  | [optional] |

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

## `purgeSystemGuestCarts()`

```php
purgeSystemGuestCarts($api_version, $x_api_version): \OpenAPI\Client\Model\GuestCartPurgeResultDtoEnvelope
```

Purge all guest carts

Deletes every guest cart, cascading its item cart records, compare records and wish lists, and returns the removed-row counts. Idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->purgeSystemGuestCarts($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->purgeSystemGuestCarts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuestCartPurgeResultDtoEnvelope**](../Model/GuestCartPurgeResultDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
