# OpenAPI\Client\OrdersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateOrder()**](OrdersApi.md#calculateOrder) | **PUT** /api/v2/OrdersService/Orders/{orderId}/Calculate | Calculates totals for an order. |
| [**calculateOrderLine()**](OrdersApi.md#calculateOrderLine) | **PUT** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId}/Calculate | Calculates totals for an order line. |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /api/v2/OrdersService/Orders | Creates a new order. |
| [**createOrderLine()**](OrdersApi.md#createOrderLine) | **POST** /api/v2/OrdersService/Orders/{orderId}/Lines | Creates a new order line. |
| [**deleteOrder()**](OrdersApi.md#deleteOrder) | **DELETE** /api/v2/OrdersService/Orders/{orderId} | Deletes an order. |
| [**deleteOrderLine()**](OrdersApi.md#deleteOrderLine) | **DELETE** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId} | Deletes an order line. |
| [**getExtendedOrders()**](OrdersApi.md#getExtendedOrders) | **GET** /api/v2/OrdersService/Orders/Extended | Gets a list of extended orders for a tenant. |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /api/v2/OrdersService/Orders/{orderId} | Gets a specific order by ID. |
| [**getOrderLine()**](OrdersApi.md#getOrderLine) | **GET** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId} | Gets a specific order line. |
| [**getOrderLines()**](OrdersApi.md#getOrderLines) | **GET** /api/v2/OrdersService/Orders/{orderId}/Lines | Gets order lines for an order. |
| [**getOrderLinesCount()**](OrdersApi.md#getOrderLinesCount) | **GET** /api/v2/OrdersService/Orders/{orderId}/Lines/Count | Gets the count of order lines for an order. |
| [**getOrders()**](OrdersApi.md#getOrders) | **GET** /api/v2/OrdersService/Orders | Gets a list of orders for a tenant. |
| [**getOrdersCount()**](OrdersApi.md#getOrdersCount) | **GET** /api/v2/OrdersService/Orders/Count | Gets the count of orders for a tenant. |
| [**previewOrderEmailTemplate()**](OrdersApi.md#previewOrderEmailTemplate) | **POST** /api/v2/OrdersService/Orders/{orderId}/Emails/Preview | Preview the rendered email for an Order. |
| [**sendOrderEmail()**](OrdersApi.md#sendOrderEmail) | **POST** /api/v2/OrdersService/Orders/{orderId}/Emails/Send | Send a transactional email for an order. |
| [**submitCart()**](OrdersApi.md#submitCart) | **POST** /api/v2/OrdersService/Orders/SubmitCart | Submits a cart and creates an order. |
| [**updateOrder()**](OrdersApi.md#updateOrder) | **PUT** /api/v2/OrdersService/Orders/{orderId} | Updates an existing order. |
| [**updateOrderLine()**](OrdersApi.md#updateOrderLine) | **PUT** /api/v2/OrdersService/Orders/{orderId}/Lines/{orderLineId} | Updates an order line. |


## `calculateOrder()`

```php
calculateOrder($tenant_id, $order_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculates totals for an order.

Performs calculation of totals and taxes for the specified order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->calculateOrder($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->calculateOrder: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateOrderLine()`

```php
calculateOrderLine($tenant_id, $order_id, $order_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculates totals for an order line.

Performs calculation of totals and taxes for the specified order line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string

try {
    $result = $apiInstance->calculateOrderLine($tenant_id, $order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->calculateOrderLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($tenant_id, $order_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new order.

Creates a new order for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_create_dto = new \OpenAPI\Client\Model\OrderCreateDto(); // \OpenAPI\Client\Model\OrderCreateDto

try {
    $result = $apiInstance->createOrder($tenant_id, $order_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderLine()`

```php
createOrderLine($tenant_id, $order_id, $order_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Creates a new order line.

Creates a new line (item) for the specified order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_create_dto = new \OpenAPI\Client\Model\OrderLineCreateDto(); // \OpenAPI\Client\Model\OrderLineCreateDto

try {
    $result = $apiInstance->createOrderLine($tenant_id, $order_id, $order_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrderLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($tenant_id, $order_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes an order.

Deletes the specified order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->deleteOrder($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrderLine()`

```php
deleteOrderLine($tenant_id, $order_id, $order_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Deletes an order line.

Deletes the specified order line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string

try {
    $result = $apiInstance->deleteOrderLine($tenant_id, $order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrderLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedOrders()`

```php
getExtendedOrders($tenant_id): \OpenAPI\Client\Model\ExtendedOrderDtoListEnvelope
```

Gets a list of extended orders for a tenant.

Retrieves a list of extended order details for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getExtendedOrders($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getExtendedOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedOrderDtoListEnvelope**](../Model/ExtendedOrderDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($tenant_id, $order_id): \OpenAPI\Client\Model\OrderDtoEnvelope
```

Gets a specific order by ID.

Retrieves the details of a specific order by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getOrder($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderLine()`

```php
getOrderLine($tenant_id, $order_id, $order_line_id): \OpenAPI\Client\Model\OrderLineDtoEnvelope
```

Gets a specific order line.

Retrieves the details of a specific order line by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string

try {
    $result = $apiInstance->getOrderLine($tenant_id, $order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderLines()`

```php
getOrderLines($tenant_id, $order_id, $item_id): \OpenAPI\Client\Model\OrderLineDtoListEnvelope
```

Gets order lines for an order.

Retrieves the lines (items) for the specified order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->getOrderLines($tenant_id, $order_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderLines: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderLinesCount()`

```php
getOrderLinesCount($tenant_id, $order_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets the count of order lines for an order.

Retrieves the total number of lines for the specified order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getOrderLinesCount($tenant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderLinesCount: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($tenant_id): \OpenAPI\Client\Model\OrderDtoListEnvelope
```

Gets a list of orders for a tenant.

Retrieves a list of orders for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getOrders($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrderDtoListEnvelope**](../Model/OrderDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersCount()`

```php
getOrdersCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Gets the count of orders for a tenant.

Retrieves the total number of orders for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getOrdersCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersCount: ', $e->getMessage(), PHP_EOL;
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

## `previewOrderEmailTemplate()`

```php
previewOrderEmailTemplate($order_id, $tenant_id, $email_dispatch_request)
```

Preview the rendered email for an Order.

Previews the rendered email template for the specified order. Only users with the 'send_email' permission are permitted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $apiInstance->previewOrderEmailTemplate($order_id, $tenant_id, $email_dispatch_request);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->previewOrderEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **email_dispatch_request** | [**\OpenAPI\Client\Model\EmailDispatchRequest**](../Model/EmailDispatchRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOrderEmail()`

```php
sendOrderEmail($tenant_id, $order_id, $email_dispatch_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Send a transactional email for an order.

Sends a transactional email for the specified order. Only users with the 'send_email' permission are permitted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $result = $apiInstance->sendOrderEmail($tenant_id, $order_id, $email_dispatch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->sendOrderEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **order_id** | **string**|  | |
| **email_dispatch_request** | [**\OpenAPI\Client\Model\EmailDispatchRequest**](../Model/EmailDispatchRequest.md)|  | [optional] |

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

## `submitCart()`

```php
submitCart($cart_id): \OpenAPI\Client\Model\OrderDtoEnvelope
```

Submits a cart and creates an order.

Submits the specified cart and creates an order for the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 'cart_id_example'; // string

try {
    $result = $apiInstance->submitCart($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->submitCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrderDtoEnvelope**](../Model/OrderDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($tenant_id, $order_id, $order_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates an existing order.

Updates the details of an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_update_dto = new \OpenAPI\Client\Model\OrderUpdateDto(); // \OpenAPI\Client\Model\OrderUpdateDto

try {
    $result = $apiInstance->updateOrder($tenant_id, $order_id, $order_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderLine()`

```php
updateOrderLine($tenant_id, $order_id, $order_line_id, $order_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Updates an order line.

Updates the details of a specific order line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$order_id = 'order_id_example'; // string
$order_line_id = 'order_line_id_example'; // string
$order_line_update_dto = new \OpenAPI\Client\Model\OrderLineUpdateDto(); // \OpenAPI\Client\Model\OrderLineUpdateDto

try {
    $result = $apiInstance->updateOrderLine($tenant_id, $order_id, $order_line_id, $order_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrderLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
