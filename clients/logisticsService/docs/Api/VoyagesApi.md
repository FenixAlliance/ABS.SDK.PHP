# OpenAPI\Client\VoyagesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelVoyageAsync()**](VoyagesApi.md#cancelVoyageAsync) | **POST** /api/v2/LogisticsService/Voyages/{voyageId}/Cancel | Cancel a voyage |
| [**completeVoyageAsync()**](VoyagesApi.md#completeVoyageAsync) | **POST** /api/v2/LogisticsService/Voyages/{voyageId}/Complete | Complete a voyage |
| [**createVoyageAsync()**](VoyagesApi.md#createVoyageAsync) | **POST** /api/v2/LogisticsService/Voyages | Create a voyage |
| [**createVoyagePortCallAsync()**](VoyagesApi.md#createVoyagePortCallAsync) | **POST** /api/v2/LogisticsService/Voyages/{voyageId}/PortCalls | Create a port call |
| [**deleteVoyageAsync()**](VoyagesApi.md#deleteVoyageAsync) | **DELETE** /api/v2/LogisticsService/Voyages/{voyageId} | Delete a voyage |
| [**deleteVoyagePortCallAsync()**](VoyagesApi.md#deleteVoyagePortCallAsync) | **DELETE** /api/v2/LogisticsService/Voyages/{voyageId}/PortCalls/{portCallId} | Delete a port call |
| [**getVoyageByIdAsync()**](VoyagesApi.md#getVoyageByIdAsync) | **GET** /api/v2/LogisticsService/Voyages/{voyageId} | Get voyage by ID |
| [**getVoyagePortCallsAsync()**](VoyagesApi.md#getVoyagePortCallsAsync) | **GET** /api/v2/LogisticsService/Voyages/{voyageId}/PortCalls | Get voyage port calls |
| [**getVoyagePortCallsCountAsync()**](VoyagesApi.md#getVoyagePortCallsCountAsync) | **GET** /api/v2/LogisticsService/Voyages/{voyageId}/PortCalls/Count | Get voyage port calls count |
| [**getVoyagesAsync()**](VoyagesApi.md#getVoyagesAsync) | **GET** /api/v2/LogisticsService/Voyages | Get all voyages |
| [**getVoyagesCountAsync()**](VoyagesApi.md#getVoyagesCountAsync) | **GET** /api/v2/LogisticsService/Voyages/Count | Get voyages count |
| [**patchVoyageAsync()**](VoyagesApi.md#patchVoyageAsync) | **PATCH** /api/v2/LogisticsService/Voyages/{voyageId} | Patch a voyage |
| [**patchVoyagePortCallAsync()**](VoyagesApi.md#patchVoyagePortCallAsync) | **PATCH** /api/v2/LogisticsService/Voyages/{voyageId}/PortCalls/{portCallId} | Patch a voyage port call |
| [**startVoyageAsync()**](VoyagesApi.md#startVoyageAsync) | **POST** /api/v2/LogisticsService/Voyages/{voyageId}/Start | Start a voyage |
| [**updateVoyageAsync()**](VoyagesApi.md#updateVoyageAsync) | **PUT** /api/v2/LogisticsService/Voyages/{voyageId} | Update a voyage |
| [**updateVoyagePortCallAsync()**](VoyagesApi.md#updateVoyagePortCallAsync) | **PUT** /api/v2/LogisticsService/Voyages/{voyageId}/PortCalls/{portCallId} | Update a port call |


## `cancelVoyageAsync()`

```php
cancelVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Cancel a voyage

Cancels a voyage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->cancelVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->cancelVoyageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
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

## `completeVoyageAsync()`

```php
completeVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Complete a voyage

Marks a voyage as completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->completeVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->completeVoyageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
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

## `createVoyageAsync()`

```php
createVoyageAsync($tenant_id, $api_version, $x_api_version, $voyage_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a voyage

Creates a new voyage for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_create_dto = new \OpenAPI\Client\Model\VoyageCreateDto(); // \OpenAPI\Client\Model\VoyageCreateDto

try {
    $result = $apiInstance->createVoyageAsync($tenant_id, $api_version, $x_api_version, $voyage_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->createVoyageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_create_dto** | [**\OpenAPI\Client\Model\VoyageCreateDto**](../Model/VoyageCreateDto.md)|  | [optional] |

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

## `createVoyagePortCallAsync()`

```php
createVoyagePortCallAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_port_call_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a port call

Creates a new port call for a voyage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_port_call_create_dto = new \OpenAPI\Client\Model\VoyagePortCallCreateDto(); // \OpenAPI\Client\Model\VoyagePortCallCreateDto

try {
    $result = $apiInstance->createVoyagePortCallAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_port_call_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->createVoyagePortCallAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_port_call_create_dto** | [**\OpenAPI\Client\Model\VoyagePortCallCreateDto**](../Model/VoyagePortCallCreateDto.md)|  | [optional] |

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

## `deleteVoyageAsync()`

```php
deleteVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a voyage

Deletes a voyage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->deleteVoyageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
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

## `deleteVoyagePortCallAsync()`

```php
deleteVoyagePortCallAsync($tenant_id, $voyage_id, $port_call_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a port call

Deletes a port call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$port_call_id = 'port_call_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteVoyagePortCallAsync($tenant_id, $voyage_id, $port_call_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->deleteVoyagePortCallAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **port_call_id** | **string**|  | |
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

## `getVoyageByIdAsync()`

```php
getVoyageByIdAsync($tenant_id, $voyage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\VoyageDtoEnvelope
```

Get voyage by ID

Retrieves a specific voyage by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getVoyageByIdAsync($tenant_id, $voyage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->getVoyageByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VoyageDtoEnvelope**](../Model/VoyageDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoyagePortCallsAsync()`

```php
getVoyagePortCallsAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_port_call_dto_collection_query_parameters): \OpenAPI\Client\Model\VoyagePortCallDtoListEnvelope
```

Get voyage port calls

Retrieves all port calls for a specific voyage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_port_call_dto_collection_query_parameters = new \OpenAPI\Client\Model\VoyagePortCallDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\VoyagePortCallDtoCollectionQueryParameters

try {
    $result = $apiInstance->getVoyagePortCallsAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_port_call_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->getVoyagePortCallsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_port_call_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\VoyagePortCallDtoCollectionQueryParameters**](../Model/VoyagePortCallDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VoyagePortCallDtoListEnvelope**](../Model/VoyagePortCallDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoyagePortCallsCountAsync()`

```php
getVoyagePortCallsCountAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_port_call_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get voyage port calls count

Returns the count of port calls for a specific voyage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_port_call_dto_collection_query_parameters = new \OpenAPI\Client\Model\VoyagePortCallDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\VoyagePortCallDtoCollectionQueryParameters

try {
    $result = $apiInstance->getVoyagePortCallsCountAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_port_call_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->getVoyagePortCallsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_port_call_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\VoyagePortCallDtoCollectionQueryParameters**](../Model/VoyagePortCallDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getVoyagesAsync()`

```php
getVoyagesAsync($tenant_id, $api_version, $x_api_version, $voyage_dto_collection_query_parameters): \OpenAPI\Client\Model\VoyageDtoListEnvelope
```

Get all voyages

Retrieves all voyages for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_dto_collection_query_parameters = new \OpenAPI\Client\Model\VoyageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\VoyageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getVoyagesAsync($tenant_id, $api_version, $x_api_version, $voyage_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->getVoyagesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\VoyageDtoCollectionQueryParameters**](../Model/VoyageDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VoyageDtoListEnvelope**](../Model/VoyageDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoyagesCountAsync()`

```php
getVoyagesCountAsync($tenant_id, $api_version, $x_api_version, $voyage_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get voyages count

Returns the count of voyages for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_dto_collection_query_parameters = new \OpenAPI\Client\Model\VoyageDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\VoyageDtoCollectionQueryParameters

try {
    $result = $apiInstance->getVoyagesCountAsync($tenant_id, $api_version, $x_api_version, $voyage_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->getVoyagesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\VoyageDtoCollectionQueryParameters**](../Model/VoyageDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchVoyageAsync()`

```php
patchVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a voyage

Partially updates an existing voyage using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->patchVoyageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
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

## `patchVoyagePortCallAsync()`

```php
patchVoyagePortCallAsync($tenant_id, $voyage_id, $port_call_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a voyage port call

Partially updates an existing voyage port call using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$port_call_id = 'port_call_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchVoyagePortCallAsync($tenant_id, $voyage_id, $port_call_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->patchVoyagePortCallAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **port_call_id** | **string**|  | |
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

## `startVoyageAsync()`

```php
startVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Start a voyage

Starts a voyage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->startVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->startVoyageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
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

## `updateVoyageAsync()`

```php
updateVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a voyage

Updates an existing voyage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_update_dto = new \OpenAPI\Client\Model\VoyageUpdateDto(); // \OpenAPI\Client\Model\VoyageUpdateDto

try {
    $result = $apiInstance->updateVoyageAsync($tenant_id, $voyage_id, $api_version, $x_api_version, $voyage_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->updateVoyageAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_update_dto** | [**\OpenAPI\Client\Model\VoyageUpdateDto**](../Model/VoyageUpdateDto.md)|  | [optional] |

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

## `updateVoyagePortCallAsync()`

```php
updateVoyagePortCallAsync($tenant_id, $voyage_id, $port_call_id, $api_version, $x_api_version, $voyage_port_call_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a port call

Updates an existing port call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoyagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$voyage_id = 'voyage_id_example'; // string
$port_call_id = 'port_call_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$voyage_port_call_update_dto = new \OpenAPI\Client\Model\VoyagePortCallUpdateDto(); // \OpenAPI\Client\Model\VoyagePortCallUpdateDto

try {
    $result = $apiInstance->updateVoyagePortCallAsync($tenant_id, $voyage_id, $port_call_id, $api_version, $x_api_version, $voyage_port_call_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoyagesApi->updateVoyagePortCallAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **voyage_id** | **string**|  | |
| **port_call_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **voyage_port_call_update_dto** | [**\OpenAPI\Client\Model\VoyagePortCallUpdateDto**](../Model/VoyagePortCallUpdateDto.md)|  | [optional] |

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
