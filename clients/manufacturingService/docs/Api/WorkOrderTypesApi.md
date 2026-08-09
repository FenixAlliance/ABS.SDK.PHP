# OpenAPI\Client\WorkOrderTypesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkOrderTypeAsync()**](WorkOrderTypesApi.md#createWorkOrderTypeAsync) | **POST** /api/v2/ManufacturingService/WorkOrderTypes | Create a new work order type |
| [**deleteWorkOrderTypeAsync()**](WorkOrderTypesApi.md#deleteWorkOrderTypeAsync) | **DELETE** /api/v2/ManufacturingService/WorkOrderTypes/{id} | Delete a work order type |
| [**getWorkOrderTypeByIdAsync()**](WorkOrderTypesApi.md#getWorkOrderTypeByIdAsync) | **GET** /api/v2/ManufacturingService/WorkOrderTypes/{id} | Get work order type by ID |
| [**getWorkOrderTypesAsync()**](WorkOrderTypesApi.md#getWorkOrderTypesAsync) | **GET** /api/v2/ManufacturingService/WorkOrderTypes | Get all work order types |
| [**getWorkOrderTypesCountAsync()**](WorkOrderTypesApi.md#getWorkOrderTypesCountAsync) | **GET** /api/v2/ManufacturingService/WorkOrderTypes/Count | Get work order types count |
| [**patchWorkOrderTypeAsync()**](WorkOrderTypesApi.md#patchWorkOrderTypeAsync) | **PATCH** /api/v2/ManufacturingService/WorkOrderTypes/{id} | Patch a work order type |
| [**updateWorkOrderTypeAsync()**](WorkOrderTypesApi.md#updateWorkOrderTypeAsync) | **PUT** /api/v2/ManufacturingService/WorkOrderTypes/{id} | Update a work order type |


## `createWorkOrderTypeAsync()`

```php
createWorkOrderTypeAsync($tenant_id, $api_version, $x_api_version, $work_order_type_create_dto)
```

Create a new work order type

Creates a new work order type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkOrderTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$work_order_type_create_dto = new \OpenAPI\Client\Model\WorkOrderTypeCreateDto(); // \OpenAPI\Client\Model\WorkOrderTypeCreateDto

try {
    $apiInstance->createWorkOrderTypeAsync($tenant_id, $api_version, $x_api_version, $work_order_type_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderTypesApi->createWorkOrderTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **work_order_type_create_dto** | [**\OpenAPI\Client\Model\WorkOrderTypeCreateDto**](../Model/WorkOrderTypeCreateDto.md)|  | [optional] |

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

## `deleteWorkOrderTypeAsync()`

```php
deleteWorkOrderTypeAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a work order type

Deletes a work order type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkOrderTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteWorkOrderTypeAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderTypesApi->deleteWorkOrderTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
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

## `getWorkOrderTypeByIdAsync()`

```php
getWorkOrderTypeByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\WorkOrderTypeDto
```

Get work order type by ID

Retrieves a specific work order type by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkOrderTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWorkOrderTypeByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderTypesApi->getWorkOrderTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkOrderTypeDto**](../Model/WorkOrderTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkOrderTypesAsync()`

```php
getWorkOrderTypesAsync($tenant_id, $api_version, $x_api_version, $work_order_type_dto_collection_query_parameters): \OpenAPI\Client\Model\WorkOrderTypeDtoListEnvelope
```

Get all work order types

Retrieves all work order types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkOrderTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$work_order_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\WorkOrderTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WorkOrderTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWorkOrderTypesAsync($tenant_id, $api_version, $x_api_version, $work_order_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderTypesApi->getWorkOrderTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **work_order_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WorkOrderTypeDtoCollectionQueryParameters**](../Model/WorkOrderTypeDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkOrderTypeDtoListEnvelope**](../Model/WorkOrderTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkOrderTypesCountAsync()`

```php
getWorkOrderTypesCountAsync($tenant_id, $api_version, $x_api_version, $work_order_type_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get work order types count

Returns the count of work order types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkOrderTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$work_order_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\WorkOrderTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WorkOrderTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWorkOrderTypesCountAsync($tenant_id, $api_version, $x_api_version, $work_order_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderTypesApi->getWorkOrderTypesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **work_order_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WorkOrderTypeDtoCollectionQueryParameters**](../Model/WorkOrderTypeDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchWorkOrderTypeAsync()`

```php
patchWorkOrderTypeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a work order type

Patch a work order type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkOrderTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchWorkOrderTypeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderTypesApi->patchWorkOrderTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
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

## `updateWorkOrderTypeAsync()`

```php
updateWorkOrderTypeAsync($tenant_id, $id, $api_version, $x_api_version, $work_order_type_update_dto)
```

Update a work order type

Updates an existing work order type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkOrderTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$work_order_type_update_dto = new \OpenAPI\Client\Model\WorkOrderTypeUpdateDto(); // \OpenAPI\Client\Model\WorkOrderTypeUpdateDto

try {
    $apiInstance->updateWorkOrderTypeAsync($tenant_id, $id, $api_version, $x_api_version, $work_order_type_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderTypesApi->updateWorkOrderTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **work_order_type_update_dto** | [**\OpenAPI\Client\Model\WorkOrderTypeUpdateDto**](../Model/WorkOrderTypeUpdateDto.md)|  | [optional] |

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
