# OpenAPI\Client\ShippingRegionsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippingRegionAsync()**](ShippingRegionsApi.md#createShippingRegionAsync) | **POST** /api/v2/ShipmentsService/ShippingRegions | Create a shipping region |
| [**deleteShippingRegionAsync()**](ShippingRegionsApi.md#deleteShippingRegionAsync) | **DELETE** /api/v2/ShipmentsService/ShippingRegions/{regionId} | Delete a shipping region |
| [**getShippingRegionByIdAsync()**](ShippingRegionsApi.md#getShippingRegionByIdAsync) | **GET** /api/v2/ShipmentsService/ShippingRegions/{regionId} | Get shipping region by ID |
| [**getShippingRegionsAsync()**](ShippingRegionsApi.md#getShippingRegionsAsync) | **GET** /api/v2/ShipmentsService/ShippingRegions | Get all shipping regions |
| [**getShippingRegionsCountAsync()**](ShippingRegionsApi.md#getShippingRegionsCountAsync) | **GET** /api/v2/ShipmentsService/ShippingRegions/Count | Get shipping regions count |
| [**patchShippingRegionAsync()**](ShippingRegionsApi.md#patchShippingRegionAsync) | **PATCH** /api/v2/ShipmentsService/ShippingRegions/{regionId} | Patch a shipping region |
| [**updateShippingRegionAsync()**](ShippingRegionsApi.md#updateShippingRegionAsync) | **PUT** /api/v2/ShipmentsService/ShippingRegions/{regionId} | Update a shipping region |


## `createShippingRegionAsync()`

```php
createShippingRegionAsync($tenant_id, $api_version, $x_api_version, $shipping_region_create_dto)
```

Create a shipping region

Creates a new shipping region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_region_create_dto = new \OpenAPI\Client\Model\ShippingRegionCreateDto(); // \OpenAPI\Client\Model\ShippingRegionCreateDto

try {
    $apiInstance->createShippingRegionAsync($tenant_id, $api_version, $x_api_version, $shipping_region_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingRegionsApi->createShippingRegionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_region_create_dto** | [**\OpenAPI\Client\Model\ShippingRegionCreateDto**](../Model/ShippingRegionCreateDto.md)|  | [optional] |

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

## `deleteShippingRegionAsync()`

```php
deleteShippingRegionAsync($tenant_id, $region_id, $api_version, $x_api_version)
```

Delete a shipping region

Deletes a shipping region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$region_id = 'region_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShippingRegionAsync($tenant_id, $region_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ShippingRegionsApi->deleteShippingRegionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **region_id** | **string**|  | |
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

## `getShippingRegionByIdAsync()`

```php
getShippingRegionByIdAsync($tenant_id, $region_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShippingRegionDtoEnvelope
```

Get shipping region by ID

Retrieves a specific shipping region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$region_id = 'region_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShippingRegionByIdAsync($tenant_id, $region_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingRegionsApi->getShippingRegionByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **region_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingRegionDtoEnvelope**](../Model/ShippingRegionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingRegionsAsync()`

```php
getShippingRegionsAsync($tenant_id, $api_version, $x_api_version, $shipping_region_dto_collection_query_parameters): \OpenAPI\Client\Model\ShippingRegionDtoListEnvelope
```

Get all shipping regions

Retrieves all shipping regions for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_region_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingRegionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingRegionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingRegionsAsync($tenant_id, $api_version, $x_api_version, $shipping_region_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingRegionsApi->getShippingRegionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_region_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingRegionDtoCollectionQueryParameters**](../Model/ShippingRegionDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingRegionDtoListEnvelope**](../Model/ShippingRegionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingRegionsCountAsync()`

```php
getShippingRegionsCountAsync($tenant_id, $api_version, $x_api_version, $shipping_region_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get shipping regions count

Returns the count of shipping regions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_region_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingRegionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingRegionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingRegionsCountAsync($tenant_id, $api_version, $x_api_version, $shipping_region_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingRegionsApi->getShippingRegionsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_region_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingRegionDtoCollectionQueryParameters**](../Model/ShippingRegionDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchShippingRegionAsync()`

```php
patchShippingRegionAsync($tenant_id, $region_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a shipping region

Partially updates an existing shipping region using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$region_id = 'region_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchShippingRegionAsync($tenant_id, $region_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingRegionsApi->patchShippingRegionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **region_id** | **string**|  | |
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

## `updateShippingRegionAsync()`

```php
updateShippingRegionAsync($tenant_id, $region_id, $api_version, $x_api_version, $shipping_region_update_dto)
```

Update a shipping region

Updates an existing shipping region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$region_id = 'region_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_region_update_dto = new \OpenAPI\Client\Model\ShippingRegionUpdateDto(); // \OpenAPI\Client\Model\ShippingRegionUpdateDto

try {
    $apiInstance->updateShippingRegionAsync($tenant_id, $region_id, $api_version, $x_api_version, $shipping_region_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingRegionsApi->updateShippingRegionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **region_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_region_update_dto** | [**\OpenAPI\Client\Model\ShippingRegionUpdateDto**](../Model/ShippingRegionUpdateDto.md)|  | [optional] |

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
