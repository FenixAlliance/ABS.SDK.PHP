# OpenAPI\Client\WorkstationsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkstationAsync()**](WorkstationsApi.md#createWorkstationAsync) | **POST** /api/v2/ManufacturingService/Workstations | Create a new workstation |
| [**deleteWorkstationAsync()**](WorkstationsApi.md#deleteWorkstationAsync) | **DELETE** /api/v2/ManufacturingService/Workstations/{id} | Delete a workstation |
| [**getWorkstationByIdAsync()**](WorkstationsApi.md#getWorkstationByIdAsync) | **GET** /api/v2/ManufacturingService/Workstations/{id} | Get workstation by ID |
| [**getWorkstationsAsync()**](WorkstationsApi.md#getWorkstationsAsync) | **GET** /api/v2/ManufacturingService/Workstations | Get all workstations |
| [**getWorkstationsCountAsync()**](WorkstationsApi.md#getWorkstationsCountAsync) | **GET** /api/v2/ManufacturingService/Workstations/Count | Get workstations count |
| [**patchWorkstationAsync()**](WorkstationsApi.md#patchWorkstationAsync) | **PATCH** /api/v2/ManufacturingService/Workstations/{id} | Patch a workstation |
| [**updateWorkstationAsync()**](WorkstationsApi.md#updateWorkstationAsync) | **PUT** /api/v2/ManufacturingService/Workstations/{id} | Update a workstation |


## `createWorkstationAsync()`

```php
createWorkstationAsync($tenant_id, $api_version, $x_api_version, $workstation_create_dto)
```

Create a new workstation

Creates a new workstation for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkstationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$workstation_create_dto = new \OpenAPI\Client\Model\WorkstationCreateDto(); // \OpenAPI\Client\Model\WorkstationCreateDto

try {
    $apiInstance->createWorkstationAsync($tenant_id, $api_version, $x_api_version, $workstation_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling WorkstationsApi->createWorkstationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **workstation_create_dto** | [**\OpenAPI\Client\Model\WorkstationCreateDto**](../Model/WorkstationCreateDto.md)|  | [optional] |

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

## `deleteWorkstationAsync()`

```php
deleteWorkstationAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a workstation

Deletes a workstation for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkstationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteWorkstationAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling WorkstationsApi->deleteWorkstationAsync: ', $e->getMessage(), PHP_EOL;
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

## `getWorkstationByIdAsync()`

```php
getWorkstationByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\WorkstationDto
```

Get workstation by ID

Retrieves a specific workstation by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkstationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWorkstationByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkstationsApi->getWorkstationByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WorkstationDto**](../Model/WorkstationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkstationsAsync()`

```php
getWorkstationsAsync($tenant_id, $api_version, $x_api_version, $workstation_dto_collection_query_parameters): \OpenAPI\Client\Model\WorkstationDtoListEnvelope
```

Get all workstations

Retrieves all workstations for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkstationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$workstation_dto_collection_query_parameters = new \OpenAPI\Client\Model\WorkstationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WorkstationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWorkstationsAsync($tenant_id, $api_version, $x_api_version, $workstation_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkstationsApi->getWorkstationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **workstation_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WorkstationDtoCollectionQueryParameters**](../Model/WorkstationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkstationDtoListEnvelope**](../Model/WorkstationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkstationsCountAsync()`

```php
getWorkstationsCountAsync($tenant_id, $api_version, $x_api_version, $workstation_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get workstations count

Returns the count of workstations for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkstationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$workstation_dto_collection_query_parameters = new \OpenAPI\Client\Model\WorkstationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WorkstationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWorkstationsCountAsync($tenant_id, $api_version, $x_api_version, $workstation_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkstationsApi->getWorkstationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **workstation_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WorkstationDtoCollectionQueryParameters**](../Model/WorkstationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchWorkstationAsync()`

```php
patchWorkstationAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a workstation

Patch a workstation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkstationsApi(
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
    $result = $apiInstance->patchWorkstationAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkstationsApi->patchWorkstationAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateWorkstationAsync()`

```php
updateWorkstationAsync($tenant_id, $id, $api_version, $x_api_version, $workstation_update_dto)
```

Update a workstation

Updates an existing workstation for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WorkstationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$workstation_update_dto = new \OpenAPI\Client\Model\WorkstationUpdateDto(); // \OpenAPI\Client\Model\WorkstationUpdateDto

try {
    $apiInstance->updateWorkstationAsync($tenant_id, $id, $api_version, $x_api_version, $workstation_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling WorkstationsApi->updateWorkstationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **workstation_update_dto** | [**\OpenAPI\Client\Model\WorkstationUpdateDto**](../Model/WorkstationUpdateDto.md)|  | [optional] |

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
