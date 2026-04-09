# OpenAPI\Client\CompareApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addItemToCompareTableAsync()**](CompareApi.md#addItemToCompareTableAsync) | **POST** /api/v2/CartService/Compare | Add an item to the compare table |
| [**getItemToCompareRecord()**](CompareApi.md#getItemToCompareRecord) | **GET** /api/v2/CartService/Compare/{recordId}/Details | Get compare record details |
| [**getItemToCompareRecords()**](CompareApi.md#getItemToCompareRecords) | **GET** /api/v2/CartService/Compare/{cartId} | Get items to compare in a cart |
| [**removeItemFromCompareTable()**](CompareApi.md#removeItemFromCompareTable) | **DELETE** /api/v2/CartService/Compare/{recordId} | Remove an item from the compare table |


## `addItemToCompareTableAsync()`

```php
addItemToCompareTableAsync($api_version, $x_api_version, $add_product_to_compare_request): \OpenAPI\Client\Model\ItemCartRecordDto
```

Add an item to the compare table

Adds a product to the compare table for the specified cart with tracking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$add_product_to_compare_request = new \OpenAPI\Client\Model\AddProductToCompareRequest(); // \OpenAPI\Client\Model\AddProductToCompareRequest

try {
    $result = $apiInstance->addItemToCompareTableAsync($api_version, $x_api_version, $add_product_to_compare_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompareApi->addItemToCompareTableAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **add_product_to_compare_request** | [**\OpenAPI\Client\Model\AddProductToCompareRequest**](../Model/AddProductToCompareRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemCartRecordDto**](../Model/ItemCartRecordDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemToCompareRecord()`

```php
getItemToCompareRecord($record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemToCompareCartRecordDtoEnvelope
```

Get compare record details

Retrieves the details of a specific item-to-compare cart record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemToCompareRecord($record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompareApi->getItemToCompareRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemToCompareCartRecordDtoEnvelope**](../Model/ItemToCompareCartRecordDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemToCompareRecords()`

```php
getItemToCompareRecords($cart_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemToCompareCartRecordDtoListEnvelope
```

Get items to compare in a cart

Retrieves all items added to the compare table for the specified cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemToCompareRecords($cart_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompareApi->getItemToCompareRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemToCompareCartRecordDtoListEnvelope**](../Model/ItemToCompareCartRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeItemFromCompareTable()`

```php
removeItemFromCompareTable($record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemToCompareCartRecordDto
```

Remove an item from the compare table

Removes a specific record from the compare table by its record ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$record_id = 'record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->removeItemFromCompareTable($record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompareApi->removeItemFromCompareTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemToCompareCartRecordDto**](../Model/ItemToCompareCartRecordDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
