# OpenAPI\Client\PaymentTermsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentTermAsync()**](PaymentTermsApi.md#createPaymentTermAsync) | **POST** /api/v2/PaymentsService/PaymentTerms | Creates a new payment term |
| [**deletePaymentTermAsync()**](PaymentTermsApi.md#deletePaymentTermAsync) | **DELETE** /api/v2/PaymentsService/PaymentTerms/{paymentTermId} | Deletes a payment term |
| [**getPaymentTermDetailsAsync()**](PaymentTermsApi.md#getPaymentTermDetailsAsync) | **GET** /api/v2/PaymentsService/PaymentTerms/{paymentTermId} | Gets a payment term by ID |
| [**getPaymentTermsAsync()**](PaymentTermsApi.md#getPaymentTermsAsync) | **GET** /api/v2/PaymentsService/PaymentTerms | Retrieves all payment terms |
| [**getPaymentTermsCountAsync()**](PaymentTermsApi.md#getPaymentTermsCountAsync) | **GET** /api/v2/PaymentsService/PaymentTerms/Count | Counts payment terms |
| [**updatePaymentTermAsync()**](PaymentTermsApi.md#updatePaymentTermAsync) | **PUT** /api/v2/PaymentsService/PaymentTerms/{paymentTermId} | Updates a payment term |


## `createPaymentTermAsync()`

```php
createPaymentTermAsync($tenant_id, $api_version, $x_api_version, $payment_term_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new payment term

Creates a new payment term for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_term_create_dto = new \OpenAPI\Client\Model\PaymentTermCreateDto(); // \OpenAPI\Client\Model\PaymentTermCreateDto

try {
    $result = $apiInstance->createPaymentTermAsync($tenant_id, $api_version, $x_api_version, $payment_term_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->createPaymentTermAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_term_create_dto** | [**\OpenAPI\Client\Model\PaymentTermCreateDto**](../Model/PaymentTermCreateDto.md)|  | [optional] |

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

## `deletePaymentTermAsync()`

```php
deletePaymentTermAsync($tenant_id, $payment_term_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes a payment term

Deletes the specified payment term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_term_id = 'payment_term_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deletePaymentTermAsync($tenant_id, $payment_term_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->deletePaymentTermAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_term_id** | **string**|  | |
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

## `getPaymentTermDetailsAsync()`

```php
getPaymentTermDetailsAsync($tenant_id, $payment_term_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PaymentTermDtoEnvelope
```

Gets a payment term by ID

Retrieves the details of a payment term using its unique ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_term_id = 'payment_term_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPaymentTermDetailsAsync($tenant_id, $payment_term_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->getPaymentTermDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_term_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentTermDtoEnvelope**](../Model/PaymentTermDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTermsAsync()`

```php
getPaymentTermsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PaymentTermDtoIReadOnlyListEnvelope
```

Retrieves all payment terms

Gets all payment terms for the current tenant with OData support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPaymentTermsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->getPaymentTermsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentTermDtoIReadOnlyListEnvelope**](../Model/PaymentTermDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTermsCountAsync()`

```php
getPaymentTermsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Counts payment terms

Gets the count of payment terms for the current tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPaymentTermsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->getPaymentTermsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updatePaymentTermAsync()`

```php
updatePaymentTermAsync($tenant_id, $payment_term_id, $api_version, $x_api_version, $payment_term_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates a payment term

Updates the specified payment term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payment_term_id = 'payment_term_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_term_update_dto = new \OpenAPI\Client\Model\PaymentTermUpdateDto(); // \OpenAPI\Client\Model\PaymentTermUpdateDto

try {
    $result = $apiInstance->updatePaymentTermAsync($tenant_id, $payment_term_id, $api_version, $x_api_version, $payment_term_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->updatePaymentTermAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payment_term_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_term_update_dto** | [**\OpenAPI\Client\Model\PaymentTermUpdateDto**](../Model/PaymentTermUpdateDto.md)|  | [optional] |

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
