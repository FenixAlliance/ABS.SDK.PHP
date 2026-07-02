# OpenAPI\Client\PointOfSalesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countPointOfSalesAsync()**](PointOfSalesApi.md#countPointOfSalesAsync) | **GET** /api/v2/SalesService/PointOfSales/Count | Get point of sales count |
| [**createPointOfSaleAsync()**](PointOfSalesApi.md#createPointOfSaleAsync) | **POST** /api/v2/SalesService/PointOfSales | Create a point of sale |
| [**deletePointOfSaleAsync()**](PointOfSalesApi.md#deletePointOfSaleAsync) | **DELETE** /api/v2/SalesService/PointOfSales/{pointOfSaleId} | Delete a point of sale |
| [**getPointOfSaleAsync()**](PointOfSalesApi.md#getPointOfSaleAsync) | **GET** /api/v2/SalesService/PointOfSales/{pointOfSaleId} | Get point of sale by ID |
| [**getPointOfSalesAsync()**](PointOfSalesApi.md#getPointOfSalesAsync) | **GET** /api/v2/SalesService/PointOfSales | Get point of sales |
| [**patchPointOfSaleAsync()**](PointOfSalesApi.md#patchPointOfSaleAsync) | **PATCH** /api/v2/SalesService/PointOfSales/{pointOfSaleId} | Patch a point of sale |
| [**updatePointOfSaleAsync()**](PointOfSalesApi.md#updatePointOfSaleAsync) | **PUT** /api/v2/SalesService/PointOfSales/{pointOfSaleId} | Update a point of sale |


## `countPointOfSalesAsync()`

```php
countPointOfSalesAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get point of sales count

Returns the total count of point of sales for the specified tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->countPointOfSalesAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSalesApi->countPointOfSalesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createPointOfSaleAsync()`

```php
createPointOfSaleAsync($tenant_id, $point_of_sale_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a point of sale

Creates a new point of sale for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$point_of_sale_create_dto = new \OpenAPI\Client\Model\PointOfSaleCreateDto(); // \OpenAPI\Client\Model\PointOfSaleCreateDto

try {
    $result = $apiInstance->createPointOfSaleAsync($tenant_id, $point_of_sale_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSalesApi->createPointOfSaleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **point_of_sale_create_dto** | [**\OpenAPI\Client\Model\PointOfSaleCreateDto**](../Model/PointOfSaleCreateDto.md)|  | [optional] |

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

## `deletePointOfSaleAsync()`

```php
deletePointOfSaleAsync($tenant_id, $point_of_sale_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a point of sale

Deletes an existing point of sale by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$point_of_sale_id = 'point_of_sale_id_example'; // string

try {
    $result = $apiInstance->deletePointOfSaleAsync($tenant_id, $point_of_sale_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSalesApi->deletePointOfSaleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **point_of_sale_id** | **string**|  | |

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

## `getPointOfSaleAsync()`

```php
getPointOfSaleAsync($tenant_id, $point_of_sale_id): \OpenAPI\Client\Model\PointOfSaleDtoEnvelope
```

Get point of sale by ID

Retrieves a single point of sale by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$point_of_sale_id = 'point_of_sale_id_example'; // string

try {
    $result = $apiInstance->getPointOfSaleAsync($tenant_id, $point_of_sale_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSalesApi->getPointOfSaleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **point_of_sale_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PointOfSaleDtoEnvelope**](../Model/PointOfSaleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPointOfSalesAsync()`

```php
getPointOfSalesAsync($tenant_id): \OpenAPI\Client\Model\PointOfSaleDtoListEnvelope
```

Get point of sales

Retrieves a list of point of sales for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getPointOfSalesAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSalesApi->getPointOfSalesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PointOfSaleDtoListEnvelope**](../Model/PointOfSaleDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPointOfSaleAsync()`

```php
patchPointOfSaleAsync($tenant_id, $point_of_sale_id, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a point of sale

Partially updates an existing point of sale using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$point_of_sale_id = 'point_of_sale_id_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchPointOfSaleAsync($tenant_id, $point_of_sale_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSalesApi->patchPointOfSaleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **point_of_sale_id** | **string**|  | |
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

## `updatePointOfSaleAsync()`

```php
updatePointOfSaleAsync($tenant_id, $point_of_sale_id, $point_of_sale_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a point of sale

Updates an existing point of sale by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PointOfSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$point_of_sale_id = 'point_of_sale_id_example'; // string
$point_of_sale_update_dto = new \OpenAPI\Client\Model\PointOfSaleUpdateDto(); // \OpenAPI\Client\Model\PointOfSaleUpdateDto

try {
    $result = $apiInstance->updatePointOfSaleAsync($tenant_id, $point_of_sale_id, $point_of_sale_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointOfSalesApi->updatePointOfSaleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **point_of_sale_id** | **string**|  | |
| **point_of_sale_update_dto** | [**\OpenAPI\Client\Model\PointOfSaleUpdateDto**](../Model/PointOfSaleUpdateDto.md)|  | [optional] |

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
