# OpenAPI\Client\SalesLiteraturesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countSalesLiteraturesAsync()**](SalesLiteraturesApi.md#countSalesLiteraturesAsync) | **GET** /api/v2/DealsService/SalesLiteratures/Count | Get sales literatures count |
| [**createSalesLiteratureAsync()**](SalesLiteraturesApi.md#createSalesLiteratureAsync) | **POST** /api/v2/DealsService/SalesLiteratures | Create a sales literature |
| [**deleteSalesLiteratureAsync()**](SalesLiteraturesApi.md#deleteSalesLiteratureAsync) | **DELETE** /api/v2/DealsService/SalesLiteratures/{salesLiteratureId} | Delete a sales literature |
| [**getExtendedSalesLiteraturesAsync()**](SalesLiteraturesApi.md#getExtendedSalesLiteraturesAsync) | **GET** /api/v2/DealsService/SalesLiteratures/Extended | Get extended sales literatures |
| [**getSalesLiteratureAsync()**](SalesLiteraturesApi.md#getSalesLiteratureAsync) | **GET** /api/v2/DealsService/SalesLiteratures/{salesLiteratureId} | Get sales literature by ID |
| [**getSalesLiteraturesAsync()**](SalesLiteraturesApi.md#getSalesLiteraturesAsync) | **GET** /api/v2/DealsService/SalesLiteratures | Get sales literatures |
| [**updateSalesLiteratureAsync()**](SalesLiteraturesApi.md#updateSalesLiteratureAsync) | **PUT** /api/v2/DealsService/SalesLiteratures/{salesLiteratureId} | Update a sales literature |


## `countSalesLiteraturesAsync()`

```php
countSalesLiteraturesAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get sales literatures count

Returns the total count of sales literatures for the specified tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->countSalesLiteraturesAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->countSalesLiteraturesAsync: ', $e->getMessage(), PHP_EOL;
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

## `createSalesLiteratureAsync()`

```php
createSalesLiteratureAsync($tenant_id, $sales_literature_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a sales literature

Creates a new sales literature for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$sales_literature_create_dto = new \OpenAPI\Client\Model\SalesLiteratureCreateDto(); // \OpenAPI\Client\Model\SalesLiteratureCreateDto

try {
    $result = $apiInstance->createSalesLiteratureAsync($tenant_id, $sales_literature_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->createSalesLiteratureAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sales_literature_create_dto** | [**\OpenAPI\Client\Model\SalesLiteratureCreateDto**](../Model/SalesLiteratureCreateDto.md)|  | [optional] |

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

## `deleteSalesLiteratureAsync()`

```php
deleteSalesLiteratureAsync($tenant_id, $sales_literature_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a sales literature

Deletes an existing sales literature by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$sales_literature_id = 'sales_literature_id_example'; // string

try {
    $result = $apiInstance->deleteSalesLiteratureAsync($tenant_id, $sales_literature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->deleteSalesLiteratureAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sales_literature_id** | **string**|  | |

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

## `getExtendedSalesLiteraturesAsync()`

```php
getExtendedSalesLiteraturesAsync($tenant_id): \OpenAPI\Client\Model\ExtendedSalesLiteratureDtoListEnvelope
```

Get extended sales literatures

Retrieves a list of sales literatures with extended details for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getExtendedSalesLiteraturesAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->getExtendedSalesLiteraturesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedSalesLiteratureDtoListEnvelope**](../Model/ExtendedSalesLiteratureDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesLiteratureAsync()`

```php
getSalesLiteratureAsync($tenant_id, $sales_literature_id): \OpenAPI\Client\Model\SalesLiteratureDtoEnvelope
```

Get sales literature by ID

Retrieves a single sales literature by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$sales_literature_id = 'sales_literature_id_example'; // string

try {
    $result = $apiInstance->getSalesLiteratureAsync($tenant_id, $sales_literature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->getSalesLiteratureAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sales_literature_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SalesLiteratureDtoEnvelope**](../Model/SalesLiteratureDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesLiteraturesAsync()`

```php
getSalesLiteraturesAsync($tenant_id): \OpenAPI\Client\Model\SalesLiteratureDtoListEnvelope
```

Get sales literatures

Retrieves a list of sales literatures for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getSalesLiteraturesAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->getSalesLiteraturesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SalesLiteratureDtoListEnvelope**](../Model/SalesLiteratureDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSalesLiteratureAsync()`

```php
updateSalesLiteratureAsync($tenant_id, $sales_literature_id, $sales_literature_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a sales literature

Updates an existing sales literature by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SalesLiteraturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$sales_literature_id = 'sales_literature_id_example'; // string
$sales_literature_update_dto = new \OpenAPI\Client\Model\SalesLiteratureUpdateDto(); // \OpenAPI\Client\Model\SalesLiteratureUpdateDto

try {
    $result = $apiInstance->updateSalesLiteratureAsync($tenant_id, $sales_literature_id, $sales_literature_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesLiteraturesApi->updateSalesLiteratureAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sales_literature_id** | **string**|  | |
| **sales_literature_update_dto** | [**\OpenAPI\Client\Model\SalesLiteratureUpdateDto**](../Model/SalesLiteratureUpdateDto.md)|  | [optional] |

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
