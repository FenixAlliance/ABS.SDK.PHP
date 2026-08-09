# OpenAPI\Client\ShippingClassesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippingClassAsync()**](ShippingClassesApi.md#createShippingClassAsync) | **POST** /api/v2/ShipmentsService/ShippingClasses | Create a shipping class |
| [**deleteShippingClassAsync()**](ShippingClassesApi.md#deleteShippingClassAsync) | **DELETE** /api/v2/ShipmentsService/ShippingClasses/{classId} | Delete a shipping class |
| [**getShippingClassByIdAsync()**](ShippingClassesApi.md#getShippingClassByIdAsync) | **GET** /api/v2/ShipmentsService/ShippingClasses/{classId} | Get shipping class by ID |
| [**getShippingClassesAsync()**](ShippingClassesApi.md#getShippingClassesAsync) | **GET** /api/v2/ShipmentsService/ShippingClasses | Get all shipping classes |
| [**getShippingClassesCountAsync()**](ShippingClassesApi.md#getShippingClassesCountAsync) | **GET** /api/v2/ShipmentsService/ShippingClasses/Count | Get shipping classes count |
| [**patchShippingClassAsync()**](ShippingClassesApi.md#patchShippingClassAsync) | **PATCH** /api/v2/ShipmentsService/ShippingClasses/{classId} | Patch a shipping class |
| [**updateShippingClassAsync()**](ShippingClassesApi.md#updateShippingClassAsync) | **PUT** /api/v2/ShipmentsService/ShippingClasses/{classId} | Update a shipping class |


## `createShippingClassAsync()`

```php
createShippingClassAsync($tenant_id, $api_version, $x_api_version, $shipping_class_create_dto)
```

Create a shipping class

Creates a new shipping class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_class_create_dto = new \OpenAPI\Client\Model\ShippingClassCreateDto(); // \OpenAPI\Client\Model\ShippingClassCreateDto

try {
    $apiInstance->createShippingClassAsync($tenant_id, $api_version, $x_api_version, $shipping_class_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingClassesApi->createShippingClassAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_class_create_dto** | [**\OpenAPI\Client\Model\ShippingClassCreateDto**](../Model/ShippingClassCreateDto.md)|  | [optional] |

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

## `deleteShippingClassAsync()`

```php
deleteShippingClassAsync($tenant_id, $class_id, $api_version, $x_api_version)
```

Delete a shipping class

Deletes a shipping class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$class_id = 'class_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShippingClassAsync($tenant_id, $class_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ShippingClassesApi->deleteShippingClassAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **class_id** | **string**|  | |
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

## `getShippingClassByIdAsync()`

```php
getShippingClassByIdAsync($tenant_id, $class_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShippingClassDtoEnvelope
```

Get shipping class by ID

Retrieves a specific shipping class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$class_id = 'class_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShippingClassByIdAsync($tenant_id, $class_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingClassesApi->getShippingClassByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **class_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingClassDtoEnvelope**](../Model/ShippingClassDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingClassesAsync()`

```php
getShippingClassesAsync($tenant_id, $api_version, $x_api_version, $shipping_class_dto_collection_query_parameters): \OpenAPI\Client\Model\ShippingClassDtoListEnvelope
```

Get all shipping classes

Retrieves all shipping classes for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_class_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingClassDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingClassDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingClassesAsync($tenant_id, $api_version, $x_api_version, $shipping_class_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingClassesApi->getShippingClassesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_class_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingClassDtoCollectionQueryParameters**](../Model/ShippingClassDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingClassDtoListEnvelope**](../Model/ShippingClassDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingClassesCountAsync()`

```php
getShippingClassesCountAsync($tenant_id, $api_version, $x_api_version, $shipping_class_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get shipping classes count

Returns the count of shipping classes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_class_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingClassDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingClassDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingClassesCountAsync($tenant_id, $api_version, $x_api_version, $shipping_class_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingClassesApi->getShippingClassesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_class_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingClassDtoCollectionQueryParameters**](../Model/ShippingClassDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchShippingClassAsync()`

```php
patchShippingClassAsync($tenant_id, $class_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a shipping class

Partially updates an existing shipping class using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$class_id = 'class_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchShippingClassAsync($tenant_id, $class_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingClassesApi->patchShippingClassAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **class_id** | **string**|  | |
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

## `updateShippingClassAsync()`

```php
updateShippingClassAsync($tenant_id, $class_id, $api_version, $x_api_version, $shipping_class_update_dto)
```

Update a shipping class

Updates an existing shipping class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$class_id = 'class_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_class_update_dto = new \OpenAPI\Client\Model\ShippingClassUpdateDto(); // \OpenAPI\Client\Model\ShippingClassUpdateDto

try {
    $apiInstance->updateShippingClassAsync($tenant_id, $class_id, $api_version, $x_api_version, $shipping_class_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingClassesApi->updateShippingClassAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **class_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_class_update_dto** | [**\OpenAPI\Client\Model\ShippingClassUpdateDto**](../Model/ShippingClassUpdateDto.md)|  | [optional] |

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
