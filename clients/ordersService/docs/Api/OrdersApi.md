# OpenAPI\Client\OrdersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2OrdersServiceOrdersCountGet()**](OrdersApi.md#apiV2OrdersServiceOrdersCountGet) | **GET** /api/v2/OrdersService/Orders/Count |  |
| [**apiV2OrdersServiceOrdersExtendedGet()**](OrdersApi.md#apiV2OrdersServiceOrdersExtendedGet) | **GET** /api/v2/OrdersService/Orders/Extended |  |
| [**apiV2OrdersServiceOrdersOrderIdCalculatePut()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdCalculatePut) | **PUT** /api/v2/OrdersService/Orders/{orderId}/Calculate |  |
| [**apiV2OrdersServiceOrdersOrderIdDelete()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdDelete) | **DELETE** /api/v2/OrdersService/Orders/{orderId} |  |
| [**apiV2OrdersServiceOrdersOrderIdLinesCountGet()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdLinesCountGet) | **GET** /api/v2/OrdersService/Orders/{orderId}/Lines/Count |  |
| [**apiV2OrdersServiceOrdersOrderIdLinesGet()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdLinesGet) | **GET** /api/v2/OrdersService/Orders/{orderId}/Lines |  |
| [**apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdCalculatePut()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdCalculatePut) | **PUT** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId}/Calculate |  |
| [**apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdDelete()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdDelete) | **DELETE** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId} |  |
| [**apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdGet()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdGet) | **GET** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId} |  |
| [**apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdPut()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdPut) | **PUT** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId} |  |
| [**apiV2OrdersServiceOrdersOrderIdLinesPost()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdLinesPost) | **POST** /api/v2/OrdersService/Orders/{orderId}/Lines |  |
| [**apiV2OrdersServiceOrdersOrderIdPut()**](OrdersApi.md#apiV2OrdersServiceOrdersOrderIdPut) | **PUT** /api/v2/OrdersService/Orders/{orderId} |  |
| [**apiV2OrdersServiceOrdersPost()**](OrdersApi.md#apiV2OrdersServiceOrdersPost) | **POST** /api/v2/OrdersService/Orders |  |
| [**apiV2OrdersServiceOrdersSubmitCartPost()**](OrdersApi.md#apiV2OrdersServiceOrdersSubmitCartPost) | **POST** /api/v2/OrdersService/Orders/SubmitCart |  |
| [**getOrderAsync()**](OrdersApi.md#getOrderAsync) | **GET** /api/v2/OrdersService/Orders/{orderId} |  |
| [**getOrdersAsync()**](OrdersApi.md#getOrdersAsync) | **GET** /api/v2/OrdersService/Orders |  |


## `apiV2OrdersServiceOrdersCountGet()`

```php
apiV2OrdersServiceOrdersCountGet($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersCountGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersServiceOrdersExtendedGet()`

```php
apiV2OrdersServiceOrdersExtendedGet($tenant_id): \OpenAPI\Client\Model\ExtendedOrderDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersExtendedGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedOrderDtoListEnvelope**](../Model/ExtendedOrderDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersServiceOrdersOrderIdCalculatePut()`

```php
apiV2OrdersServiceOrdersOrderIdCalculatePut($tenant_id, $order_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdCalculatePut($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdCalculatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |

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

## `apiV2OrdersServiceOrdersOrderIdDelete()`

```php
apiV2OrdersServiceOrdersOrderIdDelete($tenant_id, $order_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdDelete($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |

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

## `apiV2OrdersServiceOrdersOrderIdLinesCountGet()`

```php
apiV2OrdersServiceOrdersOrderIdLinesCountGet($tenant_id, $order_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdLinesCountGet($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdLinesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersServiceOrdersOrderIdLinesGet()`

```php
apiV2OrdersServiceOrdersOrderIdLinesGet($tenant_id, $order_id, $item_id): \OpenAPI\Client\Model\OrderLineDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdLinesGet($tenant_id, $order_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdLinesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderLineDtoListEnvelope**](../Model/OrderLineDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdCalculatePut()`

```php
apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdCalculatePut($tenant_id, $order_id, $order_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdCalculatePut($tenant_id, $order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdCalculatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **order_line_id** | **string**|  | |

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

## `apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdDelete()`

```php
apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdDelete($tenant_id, $order_id, $order_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdDelete($tenant_id, $order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **order_line_id** | **string**|  | |

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

## `apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdGet()`

```php
apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdGet($tenant_id, $order_id, $order_line_id): \OpenAPI\Client\Model\OrderLineDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdGet($tenant_id, $order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **order_line_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrderLineDtoEnvelope**](../Model/OrderLineDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdPut()`

```php
apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdPut($tenant_id, $order_id, $order_line_id, $order_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string
$order_line_update_dto = new \OpenAPI\Client\Model\OrderLineUpdateDto(); // \OpenAPI\Client\Model\OrderLineUpdateDto

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdPut($tenant_id, $order_id, $order_line_id, $order_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdLinesOrderLineIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **order_line_id** | **string**|  | |
| **order_line_update_dto** | [**\OpenAPI\Client\Model\OrderLineUpdateDto**](../Model/OrderLineUpdateDto.md)|  | [optional] |

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

## `apiV2OrdersServiceOrdersOrderIdLinesPost()`

```php
apiV2OrdersServiceOrdersOrderIdLinesPost($tenant_id, $order_id, $order_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_create_dto = new \OpenAPI\Client\Model\OrderLineCreateDto(); // \OpenAPI\Client\Model\OrderLineCreateDto

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdLinesPost($tenant_id, $order_id, $order_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdLinesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **order_line_create_dto** | [**\OpenAPI\Client\Model\OrderLineCreateDto**](../Model/OrderLineCreateDto.md)|  | [optional] |

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

## `apiV2OrdersServiceOrdersOrderIdPut()`

```php
apiV2OrdersServiceOrdersOrderIdPut($tenant_id, $order_id, $order_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_update_dto = new \OpenAPI\Client\Model\OrderUpdateDto(); // \OpenAPI\Client\Model\OrderUpdateDto

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersOrderIdPut($tenant_id, $order_id, $order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **order_update_dto** | [**\OpenAPI\Client\Model\OrderUpdateDto**](../Model/OrderUpdateDto.md)|  | [optional] |

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

## `apiV2OrdersServiceOrdersPost()`

```php
apiV2OrdersServiceOrdersPost($tenant_id, $order_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_create_dto = new \OpenAPI\Client\Model\OrderCreateDto(); // \OpenAPI\Client\Model\OrderCreateDto

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersPost($tenant_id, $order_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_create_dto** | [**\OpenAPI\Client\Model\OrderCreateDto**](../Model/OrderCreateDto.md)|  | [optional] |

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

## `apiV2OrdersServiceOrdersSubmitCartPost()`

```php
apiV2OrdersServiceOrdersSubmitCartPost($cart_id): \OpenAPI\Client\Model\OrderDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_id = 'cart_id_example'; // string

try {
    $result = $apiInstance->apiV2OrdersServiceOrdersSubmitCartPost($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV2OrdersServiceOrdersSubmitCartPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrderDtoEnvelope**](../Model/OrderDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderAsync()`

```php
getOrderAsync($tenant_id, $order_id): \OpenAPI\Client\Model\OrderDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getOrderAsync($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrderDtoEnvelope**](../Model/OrderDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersAsync()`

```php
getOrdersAsync($tenant_id): \OpenAPI\Client\Model\OrderDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getOrdersAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrderDtoListEnvelope**](../Model/OrderDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
