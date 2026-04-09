# OpenAPI\Client\WishListsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProductToWishList()**](WishListsApi.md#addProductToWishList) | **POST** /api/v2/CartService/WishLists/Records | Add a product to a wish list |
| [**createWishList()**](WishListsApi.md#createWishList) | **POST** /api/v2/CartService/WishLists | Create a wish list |
| [**deleteWishList()**](WishListsApi.md#deleteWishList) | **DELETE** /api/v2/CartService/WishLists/{wishListId} | Delete a wish list |
| [**deleteWishListRecord()**](WishListsApi.md#deleteWishListRecord) | **DELETE** /api/v2/CartService/WishLists/Records/{recordId} | Delete a wish list record |
| [**getCartWishListDetailsAsync()**](WishListsApi.md#getCartWishListDetailsAsync) | **GET** /api/v2/CartService/WishLists/{wishListId}/Details | Get wish list details |
| [**getCartWishListItemsAsync()**](WishListsApi.md#getCartWishListItemsAsync) | **GET** /api/v2/CartService/WishLists/{wishListId}/Records | Get wish list item records |
| [**getWishListAsync()**](WishListsApi.md#getWishListAsync) | **GET** /api/v2/CartService/WishLists/{cartId} | Get wish lists for a cart |
| [**isProductInWishLists()**](WishListsApi.md#isProductInWishLists) | **GET** /api/v2/CartService/WishLists/Contains | Check if a product is in any wish list |
| [**updateProductToWishList()**](WishListsApi.md#updateProductToWishList) | **PUT** /api/v2/CartService/WishLists/{wishListId} | Update a wish list |
| [**wishListExists()**](WishListsApi.md#wishListExists) | **GET** /api/v2/CartService/WishLists/Exists | Check if a wish list exists |
| [**wishListExistsHeadAsync()**](WishListsApi.md#wishListExistsHeadAsync) | **HEAD** /api/v2/CartService/WishLists/Exists | Check if a wish list exists (HEAD) |


## `addProductToWishList()`

```php
addProductToWishList($api_version, $x_api_version, $product_to_wish_list_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Add a product to a wish list

Adds the specified product to the given wish list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$product_to_wish_list_request = new \OpenAPI\Client\Model\ProductToWishListRequest(); // \OpenAPI\Client\Model\ProductToWishListRequest

try {
    $result = $apiInstance->addProductToWishList($api_version, $x_api_version, $product_to_wish_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->addProductToWishList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **product_to_wish_list_request** | [**\OpenAPI\Client\Model\ProductToWishListRequest**](../Model/ProductToWishListRequest.md)|  | [optional] |

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

## `createWishList()`

```php
createWishList($api_version, $x_api_version, $new_wish_list_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a wish list

Creates a new wish list from the provided request data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$new_wish_list_request = new \OpenAPI\Client\Model\NewWishListRequest(); // \OpenAPI\Client\Model\NewWishListRequest

try {
    $result = $apiInstance->createWishList($api_version, $x_api_version, $new_wish_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->createWishList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **new_wish_list_request** | [**\OpenAPI\Client\Model\NewWishListRequest**](../Model/NewWishListRequest.md)|  | [optional] |

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

## `deleteWishList()`

```php
deleteWishList($wish_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a wish list

Deletes the specified wish list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wish_list_id = 'wish_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWishList($wish_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->deleteWishList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wish_list_id** | **string**|  | |
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

## `deleteWishListRecord()`

```php
deleteWishListRecord($record_id, $api_version, $x_api_version)
```

Delete a wish list record

Removes a specific item record from a wish list by its record ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteWishListRecord($record_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->deleteWishListRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCartWishListDetailsAsync()`

```php
getCartWishListDetailsAsync($wish_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WishListDto
```

Get wish list details

Retrieves the full details of the specified wish list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wish_list_id = 'wish_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCartWishListDetailsAsync($wish_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->getCartWishListDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wish_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WishListDto**](../Model/WishListDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCartWishListItemsAsync()`

```php
getCartWishListItemsAsync($wish_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WishListItemRecordDto[]
```

Get wish list item records

Retrieves all item records in the specified wish list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wish_list_id = 'wish_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCartWishListItemsAsync($wish_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->getCartWishListItemsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wish_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WishListItemRecordDto[]**](../Model/WishListItemRecordDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWishListAsync()`

```php
getWishListAsync($cart_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WishListDto[]
```

Get wish lists for a cart

Retrieves all wish lists associated with the specified cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWishListAsync($cart_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->getWishListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WishListDto[]**](../Model/WishListDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isProductInWishLists()`

```php
isProductInWishLists($cart_id, $product_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BooleanEnvelope
```

Check if a product is in any wish list

Returns a boolean indicating whether the specified product exists in any wish list of the given cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$product_id = 'product_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->isProductInWishLists($cart_id, $product_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->isProductInWishLists: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\BooleanEnvelope**](../Model/BooleanEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductToWishList()`

```php
updateProductToWishList($wish_list_id, $api_version, $x_api_version, $wish_list_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a wish list

Updates the specified wish list with the provided data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wish_list_id = 'wish_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$wish_list_update_dto = new \OpenAPI\Client\Model\WishListUpdateDto(); // \OpenAPI\Client\Model\WishListUpdateDto

try {
    $result = $apiInstance->updateProductToWishList($wish_list_id, $api_version, $x_api_version, $wish_list_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->updateProductToWishList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wish_list_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **wish_list_update_dto** | [**\OpenAPI\Client\Model\WishListUpdateDto**](../Model/WishListUpdateDto.md)|  | [optional] |

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

## `wishListExists()`

```php
wishListExists($wish_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BooleanEnvelope
```

Check if a wish list exists

Returns a boolean indicating whether the specified wish list exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wish_list_id = 'wish_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->wishListExists($wish_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->wishListExists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wish_list_id** | **string**|  | [optional] |
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

## `wishListExistsHeadAsync()`

```php
wishListExistsHeadAsync($wish_list_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Check if a wish list exists (HEAD)

HEAD request to check whether the specified wish list exists without returning a response body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WishListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wish_list_id = 'wish_list_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->wishListExistsHeadAsync($wish_list_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WishListsApi->wishListExistsHeadAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wish_list_id** | **string**|  | [optional] |
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
