# OpenAPI\Client\PriceListsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPriceListAsync()**](PriceListsApi.md#createPriceListAsync) | **POST** /api/v2/PricingService/PriceLists | Creates a new price list |
| [**createPriceListPricesAsync()**](PriceListsApi.md#createPriceListPricesAsync) | **POST** /api/v2/PricingService/PriceLists/{priceListId}/Prices | Creates a price list entry |
| [**deletePriceListAsync()**](PriceListsApi.md#deletePriceListAsync) | **DELETE** /api/v2/PricingService/PriceLists/{priceListId} | Deletes a price list |
| [**deletePriceListPriceAsync()**](PriceListsApi.md#deletePriceListPriceAsync) | **DELETE** /api/v2/PricingService/PriceLists/{priceListId}/Prices/{priceId} | Deletes a price list entry |
| [**getPriceListAsync()**](PriceListsApi.md#getPriceListAsync) | **GET** /api/v2/PricingService/PriceLists/{priceListId} | Gets a price list by ID |
| [**getPriceListPriceAsync()**](PriceListsApi.md#getPriceListPriceAsync) | **GET** /api/v2/PricingService/PriceLists/{priceListId}/Prices/{priceId} | Gets a price list entry by ID |
| [**getPriceListPricesAsync()**](PriceListsApi.md#getPriceListPricesAsync) | **GET** /api/v2/PricingService/PriceLists/{priceListId}/Prices | Retrieves prices in a price list |
| [**getPriceListsAsync()**](PriceListsApi.md#getPriceListsAsync) | **GET** /api/v2/PricingService/PriceLists | Retrieves all price lists |
| [**getPriceListsCountAsync()**](PriceListsApi.md#getPriceListsCountAsync) | **GET** /api/v2/PricingService/PriceLists/Count | Counts price lists |
| [**updatePriceListAsync()**](PriceListsApi.md#updatePriceListAsync) | **PUT** /api/v2/PricingService/PriceLists/{priceListId} | Updates a price list |
| [**updatePriceListPriceAsync()**](PriceListsApi.md#updatePriceListPriceAsync) | **PUT** /api/v2/PricingService/PriceLists/{priceListId}/Prices/{priceId} | Updates a price list entry |


## `createPriceListAsync()`

```php
createPriceListAsync($tenant_id, $price_list_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new price list

Creates a new price list for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_create_dto = new \OpenAPI\Client\Model\PriceListCreateDto(); // \OpenAPI\Client\Model\PriceListCreateDto

try {
    $result = $apiInstance->createPriceListAsync($tenant_id, $price_list_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->createPriceListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_create_dto** | [**\OpenAPI\Client\Model\PriceListCreateDto**](../Model/PriceListCreateDto.md)|  | [optional] |

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

## `createPriceListPricesAsync()`

```php
createPriceListPricesAsync($tenant_id, $price_list_id, $item_price_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a price list entry

Creates a new price entry in the specified price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$item_price_create_dto = new \OpenAPI\Client\Model\ItemPriceCreateDto(); // \OpenAPI\Client\Model\ItemPriceCreateDto

try {
    $result = $apiInstance->createPriceListPricesAsync($tenant_id, $price_list_id, $item_price_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->createPriceListPricesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **item_price_create_dto** | [**\OpenAPI\Client\Model\ItemPriceCreateDto**](../Model/ItemPriceCreateDto.md)|  | [optional] |

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

## `deletePriceListAsync()`

```php
deletePriceListAsync($tenant_id, $price_list_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a price list

Deletes the specified price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string

try {
    $result = $apiInstance->deletePriceListAsync($tenant_id, $price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->deletePriceListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |

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

## `deletePriceListPriceAsync()`

```php
deletePriceListPriceAsync($tenant_id, $price_list_id, $price_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a price list entry

Deletes the specified price entry from a price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$price_id = 'price_id_example'; // string

try {
    $result = $apiInstance->deletePriceListPriceAsync($tenant_id, $price_list_id, $price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->deletePriceListPriceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **price_id** | **string**|  | |

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

## `getPriceListAsync()`

```php
getPriceListAsync($tenant_id, $price_list_id): \OpenAPI\Client\Model\PriceListDtoEnvelope
```

Gets a price list by ID

Retrieves the details of a price list using its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string

try {
    $result = $apiInstance->getPriceListAsync($tenant_id, $price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PriceListDtoEnvelope**](../Model/PriceListDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListPriceAsync()`

```php
getPriceListPriceAsync($tenant_id, $price_list_id, $price_id): \OpenAPI\Client\Model\ItemPriceDtoEnvelope
```

Gets a price list entry by ID

Retrieves a specific price entry from a price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$price_id = 'price_id_example'; // string

try {
    $result = $apiInstance->getPriceListPriceAsync($tenant_id, $price_list_id, $price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListPriceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **price_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ItemPriceDtoEnvelope**](../Model/ItemPriceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListPricesAsync()`

```php
getPriceListPricesAsync($tenant_id, $price_list_id, $item_id): \OpenAPI\Client\Model\ItemPriceDtoListEnvelope
```

Retrieves prices in a price list

Gets all price entries for a specific price list with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->getPriceListPricesAsync($tenant_id, $price_list_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListPricesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemPriceDtoListEnvelope**](../Model/ItemPriceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListsAsync()`

```php
getPriceListsAsync($tenant_id): \OpenAPI\Client\Model\PriceListDtoListEnvelope
```

Retrieves all price lists

Gets all price lists for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getPriceListsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PriceListDtoListEnvelope**](../Model/PriceListDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListsCountAsync()`

```php
getPriceListsCountAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Counts price lists

Gets the count of price lists for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getPriceListsCountAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updatePriceListAsync()`

```php
updatePriceListAsync($tenant_id, $price_list_id, $price_list_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a price list

Updates the specified price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$price_list_update_dto = new \OpenAPI\Client\Model\PriceListUpdateDto(); // \OpenAPI\Client\Model\PriceListUpdateDto

try {
    $result = $apiInstance->updatePriceListAsync($tenant_id, $price_list_id, $price_list_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->updatePriceListAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **price_list_update_dto** | [**\OpenAPI\Client\Model\PriceListUpdateDto**](../Model/PriceListUpdateDto.md)|  | [optional] |

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

## `updatePriceListPriceAsync()`

```php
updatePriceListPriceAsync($tenant_id, $price_list_id, $price_id, $item_price_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a price list entry

Updates the specified price entry in a price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$price_list_id = 'price_list_id_example'; // string
$price_id = 'price_id_example'; // string
$item_price_update_dto = new \OpenAPI\Client\Model\ItemPriceUpdateDto(); // \OpenAPI\Client\Model\ItemPriceUpdateDto

try {
    $result = $apiInstance->updatePriceListPriceAsync($tenant_id, $price_list_id, $price_id, $item_price_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->updatePriceListPriceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **price_list_id** | **string**|  | |
| **price_id** | **string**|  | |
| **item_price_update_dto** | [**\OpenAPI\Client\Model\ItemPriceUpdateDto**](../Model/ItemPriceUpdateDto.md)|  | [optional] |

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
