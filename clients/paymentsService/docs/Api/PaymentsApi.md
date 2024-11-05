# OpenAPI\Client\PaymentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2PaymentsServicePaymentsGet()**](PaymentsApi.md#apiV2PaymentsServicePaymentsGet) | **GET** /api/v2/PaymentsService/Payments |  |
| [**apiV2PaymentsServicePaymentsPaymentIdDelete()**](PaymentsApi.md#apiV2PaymentsServicePaymentsPaymentIdDelete) | **DELETE** /api/v2/PaymentsService/Payments/{paymentId} |  |
| [**apiV2PaymentsServicePaymentsPaymentIdDetailsGet()**](PaymentsApi.md#apiV2PaymentsServicePaymentsPaymentIdDetailsGet) | **GET** /api/v2/PaymentsService/Payments/{paymentId}/Details |  |
| [**apiV2PaymentsServicePaymentsPaymentIdGet()**](PaymentsApi.md#apiV2PaymentsServicePaymentsPaymentIdGet) | **GET** /api/v2/PaymentsService/Payments/{paymentId} |  |
| [**apiV2PaymentsServicePaymentsPaymentIdPut()**](PaymentsApi.md#apiV2PaymentsServicePaymentsPaymentIdPut) | **PUT** /api/v2/PaymentsService/Payments/{paymentId} |  |
| [**apiV2PaymentsServicePaymentsPost()**](PaymentsApi.md#apiV2PaymentsServicePaymentsPost) | **POST** /api/v2/PaymentsService/Payments |  |


## `apiV2PaymentsServicePaymentsGet()`

```php
apiV2PaymentsServicePaymentsGet($tenant_id): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2PaymentsServicePaymentsGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV2PaymentsServicePaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PaymentsServicePaymentsPaymentIdDelete()`

```php
apiV2PaymentsServicePaymentsPaymentIdDelete($tenant_id, $payment_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$payment_id = 'payment_id_example'; // string

try {
    $result = $apiInstance->apiV2PaymentsServicePaymentsPaymentIdDelete($tenant_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV2PaymentsServicePaymentsPaymentIdDelete: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PaymentsServicePaymentsPaymentIdDetailsGet()`

```php
apiV2PaymentsServicePaymentsPaymentIdDetailsGet($payment_id): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string

try {
    $result = $apiInstance->apiV2PaymentsServicePaymentsPaymentIdDetailsGet($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV2PaymentsServicePaymentsPaymentIdDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PaymentsServicePaymentsPaymentIdGet()`

```php
apiV2PaymentsServicePaymentsPaymentIdGet($payment_id): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string

try {
    $result = $apiInstance->apiV2PaymentsServicePaymentsPaymentIdGet($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV2PaymentsServicePaymentsPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PaymentsServicePaymentsPaymentIdPut()`

```php
apiV2PaymentsServicePaymentsPaymentIdPut($tenant_id, $payment_id, $payment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$payment_id = 'payment_id_example'; // string
$payment_update_dto = new \OpenAPI\Client\Model\PaymentUpdateDto(); // \OpenAPI\Client\Model\PaymentUpdateDto

try {
    $result = $apiInstance->apiV2PaymentsServicePaymentsPaymentIdPut($tenant_id, $payment_id, $payment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV2PaymentsServicePaymentsPaymentIdPut: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PaymentsServicePaymentsPost()`

```php
apiV2PaymentsServicePaymentsPost($tenant_id, $payment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$payment_create_dto = new \OpenAPI\Client\Model\PaymentCreateDto(); // \OpenAPI\Client\Model\PaymentCreateDto

try {
    $result = $apiInstance->apiV2PaymentsServicePaymentsPost($tenant_id, $payment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV2PaymentsServicePaymentsPost: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
