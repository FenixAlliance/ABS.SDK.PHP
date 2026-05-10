# OpenAPI\Client\ShippingCouriersApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippingCourierAsync()**](ShippingCouriersApi.md#createShippingCourierAsync) | **POST** /api/v2/ShipmentsService/ShippingCouriers | Create a shipping courier |
| [**deleteShippingCourierAsync()**](ShippingCouriersApi.md#deleteShippingCourierAsync) | **DELETE** /api/v2/ShipmentsService/ShippingCouriers/{courierId} | Delete a shipping courier |
| [**getShippingCourierByIdAsync()**](ShippingCouriersApi.md#getShippingCourierByIdAsync) | **GET** /api/v2/ShipmentsService/ShippingCouriers/{courierId} | Get shipping courier by ID |
| [**getShippingCouriersAsync()**](ShippingCouriersApi.md#getShippingCouriersAsync) | **GET** /api/v2/ShipmentsService/ShippingCouriers | Get all shipping couriers |
| [**getShippingCouriersCountAsync()**](ShippingCouriersApi.md#getShippingCouriersCountAsync) | **GET** /api/v2/ShipmentsService/ShippingCouriers/Count | Get shipping couriers count |
| [**updateShippingCourierAsync()**](ShippingCouriersApi.md#updateShippingCourierAsync) | **PUT** /api/v2/ShipmentsService/ShippingCouriers/{courierId} | Update a shipping courier |


## `createShippingCourierAsync()`

```php
createShippingCourierAsync($tenant_id, $api_version, $x_api_version, $shipping_courier_create_dto)
```

Create a shipping courier

Creates a new shipping courier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_courier_create_dto = new \OpenAPI\Client\Model\ShippingCourierCreateDto(); // \OpenAPI\Client\Model\ShippingCourierCreateDto

try {
    $apiInstance->createShippingCourierAsync($tenant_id, $api_version, $x_api_version, $shipping_courier_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCouriersApi->createShippingCourierAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_courier_create_dto** | [**\OpenAPI\Client\Model\ShippingCourierCreateDto**](../Model/ShippingCourierCreateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteShippingCourierAsync()`

```php
deleteShippingCourierAsync($tenant_id, $courier_id, $api_version, $x_api_version)
```

Delete a shipping courier

Deletes a shipping courier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$courier_id = 'courier_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShippingCourierAsync($tenant_id, $courier_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCouriersApi->deleteShippingCourierAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **courier_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `getShippingCourierByIdAsync()`

```php
getShippingCourierByIdAsync($tenant_id, $courier_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShippingCourierDtoEnvelope
```

Get shipping courier by ID

Retrieves a specific shipping courier by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$courier_id = 'courier_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShippingCourierByIdAsync($tenant_id, $courier_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCouriersApi->getShippingCourierByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **courier_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingCourierDtoEnvelope**](../Model/ShippingCourierDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingCouriersAsync()`

```php
getShippingCouriersAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShippingCourierDtoListEnvelope
```

Get all shipping couriers

Retrieves all shipping couriers for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShippingCouriersAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCouriersApi->getShippingCouriersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingCourierDtoListEnvelope**](../Model/ShippingCourierDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingCouriersCountAsync()`

```php
getShippingCouriersCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get shipping couriers count

Returns the count of shipping couriers for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShippingCouriersCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCouriersApi->getShippingCouriersCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `updateShippingCourierAsync()`

```php
updateShippingCourierAsync($tenant_id, $courier_id, $api_version, $x_api_version, $shipping_courier_update_dto)
```

Update a shipping courier

Updates an existing shipping courier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$courier_id = 'courier_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_courier_update_dto = new \OpenAPI\Client\Model\ShippingCourierUpdateDto(); // \OpenAPI\Client\Model\ShippingCourierUpdateDto

try {
    $apiInstance->updateShippingCourierAsync($tenant_id, $courier_id, $api_version, $x_api_version, $shipping_courier_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCouriersApi->updateShippingCourierAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **courier_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_courier_update_dto** | [**\OpenAPI\Client\Model\ShippingCourierUpdateDto**](../Model/ShippingCourierUpdateDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
