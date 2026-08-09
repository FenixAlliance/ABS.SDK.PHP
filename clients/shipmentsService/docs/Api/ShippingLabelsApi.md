# OpenAPI\Client\ShippingLabelsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippingLabelAsync()**](ShippingLabelsApi.md#createShippingLabelAsync) | **POST** /api/v2/ShipmentsService/ShippingLabels | Create a shipping label |
| [**deleteShippingLabelAsync()**](ShippingLabelsApi.md#deleteShippingLabelAsync) | **DELETE** /api/v2/ShipmentsService/ShippingLabels/{labelId} | Delete a shipping label |
| [**getShippingLabelByIdAsync()**](ShippingLabelsApi.md#getShippingLabelByIdAsync) | **GET** /api/v2/ShipmentsService/ShippingLabels/{labelId} | Get shipping label by ID |
| [**getShippingLabelsAsync()**](ShippingLabelsApi.md#getShippingLabelsAsync) | **GET** /api/v2/ShipmentsService/ShippingLabels | Get all shipping labels |
| [**getShippingLabelsCountAsync()**](ShippingLabelsApi.md#getShippingLabelsCountAsync) | **GET** /api/v2/ShipmentsService/ShippingLabels/Count | Get shipping labels count |
| [**patchShippingLabelAsync()**](ShippingLabelsApi.md#patchShippingLabelAsync) | **PATCH** /api/v2/ShipmentsService/ShippingLabels/{labelId} | Patch a shipping label |
| [**updateShippingLabelAsync()**](ShippingLabelsApi.md#updateShippingLabelAsync) | **PUT** /api/v2/ShipmentsService/ShippingLabels/{labelId} | Update a shipping label |


## `createShippingLabelAsync()`

```php
createShippingLabelAsync($tenant_id, $api_version, $x_api_version, $shipping_label_create_dto)
```

Create a shipping label

Creates a new shipping label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_label_create_dto = new \OpenAPI\Client\Model\ShippingLabelCreateDto(); // \OpenAPI\Client\Model\ShippingLabelCreateDto

try {
    $apiInstance->createShippingLabelAsync($tenant_id, $api_version, $x_api_version, $shipping_label_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->createShippingLabelAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_label_create_dto** | [**\OpenAPI\Client\Model\ShippingLabelCreateDto**](../Model/ShippingLabelCreateDto.md)|  | [optional] |

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

## `deleteShippingLabelAsync()`

```php
deleteShippingLabelAsync($tenant_id, $label_id, $api_version, $x_api_version)
```

Delete a shipping label

Deletes a shipping label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$label_id = 'label_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShippingLabelAsync($tenant_id, $label_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->deleteShippingLabelAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **label_id** | **string**|  | |
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

## `getShippingLabelByIdAsync()`

```php
getShippingLabelByIdAsync($tenant_id, $label_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShippingLabelDtoEnvelope
```

Get shipping label by ID

Retrieves a specific shipping label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$label_id = 'label_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShippingLabelByIdAsync($tenant_id, $label_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->getShippingLabelByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **label_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingLabelDtoEnvelope**](../Model/ShippingLabelDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingLabelsAsync()`

```php
getShippingLabelsAsync($tenant_id, $api_version, $x_api_version, $shipping_label_dto_collection_query_parameters): \OpenAPI\Client\Model\ShippingLabelDtoListEnvelope
```

Get all shipping labels

Retrieves all shipping labels for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_label_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingLabelDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingLabelDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingLabelsAsync($tenant_id, $api_version, $x_api_version, $shipping_label_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->getShippingLabelsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_label_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingLabelDtoCollectionQueryParameters**](../Model/ShippingLabelDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingLabelDtoListEnvelope**](../Model/ShippingLabelDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingLabelsCountAsync()`

```php
getShippingLabelsCountAsync($tenant_id, $api_version, $x_api_version, $shipping_label_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get shipping labels count

Returns the count of shipping labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_label_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingLabelDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingLabelDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingLabelsCountAsync($tenant_id, $api_version, $x_api_version, $shipping_label_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->getShippingLabelsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_label_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingLabelDtoCollectionQueryParameters**](../Model/ShippingLabelDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchShippingLabelAsync()`

```php
patchShippingLabelAsync($tenant_id, $label_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a shipping label

Partially updates an existing shipping label using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$label_id = 'label_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchShippingLabelAsync($tenant_id, $label_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->patchShippingLabelAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **label_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `updateShippingLabelAsync()`

```php
updateShippingLabelAsync($tenant_id, $label_id, $api_version, $x_api_version, $shipping_label_update_dto)
```

Update a shipping label

Updates an existing shipping label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$label_id = 'label_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_label_update_dto = new \OpenAPI\Client\Model\ShippingLabelUpdateDto(); // \OpenAPI\Client\Model\ShippingLabelUpdateDto

try {
    $apiInstance->updateShippingLabelAsync($tenant_id, $label_id, $api_version, $x_api_version, $shipping_label_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->updateShippingLabelAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **label_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_label_update_dto** | [**\OpenAPI\Client\Model\ShippingLabelUpdateDto**](../Model/ShippingLabelUpdateDto.md)|  | [optional] |

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
