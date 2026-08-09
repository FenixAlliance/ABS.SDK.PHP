# OpenAPI\Client\ProductionPlansApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductionPlanAsync()**](ProductionPlansApi.md#createProductionPlanAsync) | **POST** /api/v2/ManufacturingService/ProductionPlans | Create a new production plan |
| [**deleteProductionPlanAsync()**](ProductionPlansApi.md#deleteProductionPlanAsync) | **DELETE** /api/v2/ManufacturingService/ProductionPlans/{id} | Delete a production plan |
| [**getProductionPlanByIdAsync()**](ProductionPlansApi.md#getProductionPlanByIdAsync) | **GET** /api/v2/ManufacturingService/ProductionPlans/{id} | Get production plan by ID |
| [**getProductionPlansAsync()**](ProductionPlansApi.md#getProductionPlansAsync) | **GET** /api/v2/ManufacturingService/ProductionPlans | Get all production plans |
| [**getProductionPlansCountAsync()**](ProductionPlansApi.md#getProductionPlansCountAsync) | **GET** /api/v2/ManufacturingService/ProductionPlans/Count | Get production plans count |
| [**patchProductionPlanAsync()**](ProductionPlansApi.md#patchProductionPlanAsync) | **PATCH** /api/v2/ManufacturingService/ProductionPlans/{id} | Patch a production plan |
| [**updateProductionPlanAsync()**](ProductionPlansApi.md#updateProductionPlanAsync) | **PUT** /api/v2/ManufacturingService/ProductionPlans/{id} | Update a production plan |


## `createProductionPlanAsync()`

```php
createProductionPlanAsync($tenant_id, $api_version, $x_api_version, $production_plan_create_dto)
```

Create a new production plan

Creates a new production plan for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$production_plan_create_dto = new \OpenAPI\Client\Model\ProductionPlanCreateDto(); // \OpenAPI\Client\Model\ProductionPlanCreateDto

try {
    $apiInstance->createProductionPlanAsync($tenant_id, $api_version, $x_api_version, $production_plan_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProductionPlansApi->createProductionPlanAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **production_plan_create_dto** | [**\OpenAPI\Client\Model\ProductionPlanCreateDto**](../Model/ProductionPlanCreateDto.md)|  | [optional] |

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

## `deleteProductionPlanAsync()`

```php
deleteProductionPlanAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a production plan

Deletes a production plan for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteProductionPlanAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ProductionPlansApi->deleteProductionPlanAsync: ', $e->getMessage(), PHP_EOL;
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

## `getProductionPlanByIdAsync()`

```php
getProductionPlanByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\ProductionPlanDto
```

Get production plan by ID

Retrieves a specific production plan by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getProductionPlanByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionPlansApi->getProductionPlanByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ProductionPlanDto**](../Model/ProductionPlanDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductionPlansAsync()`

```php
getProductionPlansAsync($tenant_id, $api_version, $x_api_version, $production_plan_dto_collection_query_parameters): \OpenAPI\Client\Model\ProductionPlanDtoListEnvelope
```

Get all production plans

Retrieves all production plans for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$production_plan_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProductionPlanDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProductionPlanDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProductionPlansAsync($tenant_id, $api_version, $x_api_version, $production_plan_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionPlansApi->getProductionPlansAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **production_plan_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProductionPlanDtoCollectionQueryParameters**](../Model/ProductionPlanDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductionPlanDtoListEnvelope**](../Model/ProductionPlanDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductionPlansCountAsync()`

```php
getProductionPlansCountAsync($tenant_id, $api_version, $x_api_version, $production_plan_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get production plans count

Returns the count of production plans for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$production_plan_dto_collection_query_parameters = new \OpenAPI\Client\Model\ProductionPlanDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ProductionPlanDtoCollectionQueryParameters

try {
    $result = $apiInstance->getProductionPlansCountAsync($tenant_id, $api_version, $x_api_version, $production_plan_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionPlansApi->getProductionPlansCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **production_plan_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ProductionPlanDtoCollectionQueryParameters**](../Model/ProductionPlanDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchProductionPlanAsync()`

```php
patchProductionPlanAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a production plan

Patch a production plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductionPlansApi(
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
    $result = $apiInstance->patchProductionPlanAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionPlansApi->patchProductionPlanAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateProductionPlanAsync()`

```php
updateProductionPlanAsync($tenant_id, $id, $api_version, $x_api_version, $production_plan_update_dto)
```

Update a production plan

Updates an existing production plan for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$production_plan_update_dto = new \OpenAPI\Client\Model\ProductionPlanUpdateDto(); // \OpenAPI\Client\Model\ProductionPlanUpdateDto

try {
    $apiInstance->updateProductionPlanAsync($tenant_id, $id, $api_version, $x_api_version, $production_plan_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProductionPlansApi->updateProductionPlanAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **production_plan_update_dto** | [**\OpenAPI\Client\Model\ProductionPlanUpdateDto**](../Model/ProductionPlanUpdateDto.md)|  | [optional] |

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
