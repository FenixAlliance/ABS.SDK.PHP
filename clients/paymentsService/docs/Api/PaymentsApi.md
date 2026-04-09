# OpenAPI\Client\PaymentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentAsync()**](PaymentsApi.md#createPaymentAsync) | **POST** /api/v2/PaymentsService/Payments | Creates a new payment |
| [**deletePaymentAsync()**](PaymentsApi.md#deletePaymentAsync) | **DELETE** /api/v2/PaymentsService/Payments/{paymentId} | Deletes a payment |
| [**getPaymentAsync()**](PaymentsApi.md#getPaymentAsync) | **GET** /api/v2/PaymentsService/Payments/{paymentId}/Details | Gets a payment by ID (deprecated) |
| [**getPaymentAsyncV2()**](PaymentsApi.md#getPaymentAsyncV2) | **GET** /api/v2/PaymentsService/Payments/{paymentId} | Gets a payment by ID |
| [**getPaymentsAsync()**](PaymentsApi.md#getPaymentsAsync) | **GET** /api/v2/PaymentsService/Payments | Retrieves all payments |
| [**updatePaymentAsync()**](PaymentsApi.md#updatePaymentAsync) | **PUT** /api/v2/PaymentsService/Payments/{paymentId} | Updates a payment |


## `createPaymentAsync()`

```php
createPaymentAsync($tenant_id, $payment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new payment

Creates a new payment for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_create_dto = new \OpenAPI\Client\Model\PaymentCreateDto(); // \OpenAPI\Client\Model\PaymentCreateDto

try {
    $result = $apiInstance->createPaymentAsync($tenant_id, $payment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPaymentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_create_dto** | [**\OpenAPI\Client\Model\PaymentCreateDto**](../Model/PaymentCreateDto.md)|  | [optional] |

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

## `deletePaymentAsync()`

```php
deletePaymentAsync($tenant_id, $payment_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a payment

Deletes the specified payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_id = 'payment_id_example'; // string

try {
    $result = $apiInstance->deletePaymentAsync($tenant_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->deletePaymentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_id** | **string**|  | |

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

## `getPaymentAsync()`

```php
getPaymentAsync($payment_id): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```

Gets a payment by ID (deprecated)

Retrieves a payment using the deprecated /Details route. Use GET {paymentId} instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 'payment_id_example'; // string

try {
    $result = $apiInstance->getPaymentAsync($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentAsyncV2()`

```php
getPaymentAsyncV2($payment_id): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```

Gets a payment by ID

Retrieves the details of a payment using its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 'payment_id_example'; // string

try {
    $result = $apiInstance->getPaymentAsyncV2($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentAsyncV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentsAsync()`

```php
getPaymentsAsync($tenant_id): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```

Retrieves all payments

Gets all payments for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getPaymentsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentAsync()`

```php
updatePaymentAsync($tenant_id, $payment_id, $payment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a payment

Updates the specified payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_id = 'payment_id_example'; // string
$payment_update_dto = new \OpenAPI\Client\Model\PaymentUpdateDto(); // \OpenAPI\Client\Model\PaymentUpdateDto

try {
    $result = $apiInstance->updatePaymentAsync($tenant_id, $payment_id, $payment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->updatePaymentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_id** | **string**|  | |
| **payment_update_dto** | [**\OpenAPI\Client\Model\PaymentUpdateDto**](../Model/PaymentUpdateDto.md)|  | [optional] |

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
