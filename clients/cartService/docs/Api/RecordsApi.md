# OpenAPI\Client\RecordsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addItemToCart()**](RecordsApi.md#addItemToCart) | **POST** /api/v2/CartService/Records/AddItem | Add an item to a cart |
| [**addProductToCartAsync()**](RecordsApi.md#addProductToCartAsync) | **POST** /api/v2/CartService/Records | Add a product to a cart with tracking |
| [**clearCartAsync()**](RecordsApi.md#clearCartAsync) | **POST** /api/v2/CartService/Records/ClearCart | Clear all items from a cart |
| [**decreaseItemCartRecord()**](RecordsApi.md#decreaseItemCartRecord) | **PUT** /api/v2/CartService/Records/{recordId}/Decrease | Decrease cart record quantity |
| [**getItemCartRecord()**](RecordsApi.md#getItemCartRecord) | **GET** /api/v2/CartService/Records/{recordId}/Details | Get a cart record by ID |
| [**getItemsInCartAsync()**](RecordsApi.md#getItemsInCartAsync) | **GET** /api/v2/CartService/Records/{cartId} | Get all items in a cart |
| [**increaseItemCartRecord()**](RecordsApi.md#increaseItemCartRecord) | **PUT** /api/v2/CartService/Records/{recordId}/Increase | Increase cart record quantity |
| [**isItemAlreadyInCart()**](RecordsApi.md#isItemAlreadyInCart) | **GET** /api/v2/CartService/Records/IsInCart | Check if an item is in a cart |
| [**removeProductFromCartByParams()**](RecordsApi.md#removeProductFromCartByParams) | **DELETE** /api/v2/CartService/Records | Remove a product from a cart |
| [**removeProductFromCartByRecordId()**](RecordsApi.md#removeProductFromCartByRecordId) | **DELETE** /api/v2/CartService/Records/{recordId} | Remove a product from a cart by record ID |
| [**updateItemCartRecord()**](RecordsApi.md#updateItemCartRecord) | **PUT** /api/v2/CartService/Records/{recordId} | Update a cart record |


## `addItemToCart()`

```php
addItemToCart($cart_id, $item_id, $quantity, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Add an item to a cart

Adds an item with the specified quantity to the given cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$item_id = 'item_id_example'; // string
$quantity = 56; // int
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->addItemToCart($cart_id, $item_id, $quantity, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->addItemToCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | [optional] |
| **item_id** | **string**|  | [optional] |
| **quantity** | **int**|  | [optional] |
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

## `addProductToCartAsync()`

```php
addProductToCartAsync($api_version, $x_api_version, $item_cart_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Add a product to a cart with tracking

Adds a product to the cart using a request body with cart ID, product ID, and quantity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_cart_record_create_dto = new \OpenAPI\Client\Model\ItemCartRecordCreateDto(); // \OpenAPI\Client\Model\ItemCartRecordCreateDto

try {
    $result = $apiInstance->addProductToCartAsync($api_version, $x_api_version, $item_cart_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->addProductToCartAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_cart_record_create_dto** | [**\OpenAPI\Client\Model\ItemCartRecordCreateDto**](../Model/ItemCartRecordCreateDto.md)|  | [optional] |

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

## `clearCartAsync()`

```php
clearCartAsync($cart_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Clear all items from a cart

Removes all item records from the specified cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->clearCartAsync($cart_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->clearCartAsync: ', $e->getMessage(), PHP_EOL;
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

## `decreaseItemCartRecord()`

```php
decreaseItemCartRecord($record_id, $quantity, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Decrease cart record quantity

Decreases the quantity of the specified item cart record by the given amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$quantity = 1; // float
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->decreaseItemCartRecord($record_id, $quantity, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->decreaseItemCartRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
| **quantity** | **float**|  | [optional] [default to 1] |
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

## `getItemCartRecord()`

```php
getItemCartRecord($record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Get a cart record by ID

Retrieves the details of a specific item cart record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemCartRecord($record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->getItemCartRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
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

## `getItemsInCartAsync()`

```php
getItemsInCartAsync($cart_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemCartRecordDtoListEnvelope
```

Get all items in a cart

Retrieves all item cart records for the specified cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemsInCartAsync($cart_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->getItemsInCartAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemCartRecordDtoListEnvelope**](../Model/ItemCartRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `increaseItemCartRecord()`

```php
increaseItemCartRecord($record_id, $quantity, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Increase cart record quantity

Increases the quantity of the specified item cart record by the given amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$quantity = 1; // float
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->increaseItemCartRecord($record_id, $quantity, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->increaseItemCartRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
| **quantity** | **float**|  | [optional] [default to 1] |
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

## `isItemAlreadyInCart()`

```php
isItemAlreadyInCart($item_id, $cart_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BooleanEnvelope
```

Check if an item is in a cart

Returns a boolean indicating whether the specified item is already in the given cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string
$cart_id = 'cart_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->isItemAlreadyInCart($item_id, $cart_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->isItemAlreadyInCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |
| **cart_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanEnvelope**](../Model/BooleanEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProductFromCartByParams()`

```php
removeProductFromCartByParams($cart_id, $product_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove a product from a cart

Removes a product from the cart using cart ID and product ID query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$product_id = 'product_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->removeProductFromCartByParams($cart_id, $product_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->removeProductFromCartByParams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | [optional] |
| **product_id** | **string**|  | [optional] |
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

## `removeProductFromCartByRecordId()`

```php
removeProductFromCartByRecordId($record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove a product from a cart by record ID

Removes a specific item record from the cart by its record ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->removeProductFromCartByRecordId($record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->removeProductFromCartByRecordId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
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

## `updateItemCartRecord()`

```php
updateItemCartRecord($record_id, $api_version, $x_api_version, $item_cart_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a cart record

Updates the specified item cart record with the provided data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_cart_record_update_dto = new \OpenAPI\Client\Model\ItemCartRecordUpdateDto(); // \OpenAPI\Client\Model\ItemCartRecordUpdateDto

try {
    $result = $apiInstance->updateItemCartRecord($record_id, $api_version, $x_api_version, $item_cart_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->updateItemCartRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_cart_record_update_dto** | [**\OpenAPI\Client\Model\ItemCartRecordUpdateDto**](../Model/ItemCartRecordUpdateDto.md)|  | [optional] |

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
