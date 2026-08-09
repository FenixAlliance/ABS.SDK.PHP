# OpenAPI\Client\ShippingZonesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippingZoneAsync()**](ShippingZonesApi.md#createShippingZoneAsync) | **POST** /api/v2/ShipmentsService/ShippingZones | Create a shipping zone |
| [**deleteShippingZoneAsync()**](ShippingZonesApi.md#deleteShippingZoneAsync) | **DELETE** /api/v2/ShipmentsService/ShippingZones/{zoneId} | Delete a shipping zone |
| [**getShippingZoneByIdAsync()**](ShippingZonesApi.md#getShippingZoneByIdAsync) | **GET** /api/v2/ShipmentsService/ShippingZones/{zoneId} | Get shipping zone by ID |
| [**getShippingZonesAsync()**](ShippingZonesApi.md#getShippingZonesAsync) | **GET** /api/v2/ShipmentsService/ShippingZones | Get all shipping zones |
| [**getShippingZonesCountAsync()**](ShippingZonesApi.md#getShippingZonesCountAsync) | **GET** /api/v2/ShipmentsService/ShippingZones/Count | Get shipping zones count |
| [**patchShippingZoneAsync()**](ShippingZonesApi.md#patchShippingZoneAsync) | **PATCH** /api/v2/ShipmentsService/ShippingZones/{zoneId} | Patch a shipping zone |
| [**updateShippingZoneAsync()**](ShippingZonesApi.md#updateShippingZoneAsync) | **PUT** /api/v2/ShipmentsService/ShippingZones/{zoneId} | Update a shipping zone |


## `createShippingZoneAsync()`

```php
createShippingZoneAsync($tenant_id, $api_version, $x_api_version, $shipping_zone_create_dto)
```

Create a shipping zone

Creates a new shipping zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_zone_create_dto = new \OpenAPI\Client\Model\ShippingZoneCreateDto(); // \OpenAPI\Client\Model\ShippingZoneCreateDto

try {
    $apiInstance->createShippingZoneAsync($tenant_id, $api_version, $x_api_version, $shipping_zone_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->createShippingZoneAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_zone_create_dto** | [**\OpenAPI\Client\Model\ShippingZoneCreateDto**](../Model/ShippingZoneCreateDto.md)|  | [optional] |

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

## `deleteShippingZoneAsync()`

```php
deleteShippingZoneAsync($tenant_id, $zone_id, $api_version, $x_api_version)
```

Delete a shipping zone

Deletes a shipping zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$zone_id = 'zone_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteShippingZoneAsync($tenant_id, $zone_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->deleteShippingZoneAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **zone_id** | **string**|  | |
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

## `getShippingZoneByIdAsync()`

```php
getShippingZoneByIdAsync($tenant_id, $zone_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ShippingZoneDtoEnvelope
```

Get shipping zone by ID

Retrieves a specific shipping zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$zone_id = 'zone_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getShippingZoneByIdAsync($tenant_id, $zone_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->getShippingZoneByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **zone_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingZoneDtoEnvelope**](../Model/ShippingZoneDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingZonesAsync()`

```php
getShippingZonesAsync($tenant_id, $api_version, $x_api_version, $shipping_zone_dto_collection_query_parameters): \OpenAPI\Client\Model\ShippingZoneDtoListEnvelope
```

Get all shipping zones

Retrieves all shipping zones for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_zone_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingZoneDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingZoneDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingZonesAsync($tenant_id, $api_version, $x_api_version, $shipping_zone_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->getShippingZonesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_zone_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingZoneDtoCollectionQueryParameters**](../Model/ShippingZoneDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingZoneDtoListEnvelope**](../Model/ShippingZoneDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingZonesCountAsync()`

```php
getShippingZonesCountAsync($tenant_id, $api_version, $x_api_version, $shipping_zone_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get shipping zones count

Returns the count of shipping zones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_zone_dto_collection_query_parameters = new \OpenAPI\Client\Model\ShippingZoneDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ShippingZoneDtoCollectionQueryParameters

try {
    $result = $apiInstance->getShippingZonesCountAsync($tenant_id, $api_version, $x_api_version, $shipping_zone_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->getShippingZonesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_zone_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ShippingZoneDtoCollectionQueryParameters**](../Model/ShippingZoneDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchShippingZoneAsync()`

```php
patchShippingZoneAsync($tenant_id, $zone_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a shipping zone

Partially updates an existing shipping zone using JSON Patch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$zone_id = 'zone_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchShippingZoneAsync($tenant_id, $zone_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->patchShippingZoneAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **zone_id** | **string**|  | |
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

## `updateShippingZoneAsync()`

```php
updateShippingZoneAsync($tenant_id, $zone_id, $api_version, $x_api_version, $shipping_zone_update_dto)
```

Update a shipping zone

Updates an existing shipping zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$zone_id = 'zone_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$shipping_zone_update_dto = new \OpenAPI\Client\Model\ShippingZoneUpdateDto(); // \OpenAPI\Client\Model\ShippingZoneUpdateDto

try {
    $apiInstance->updateShippingZoneAsync($tenant_id, $zone_id, $api_version, $x_api_version, $shipping_zone_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->updateShippingZoneAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **zone_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **shipping_zone_update_dto** | [**\OpenAPI\Client\Model\ShippingZoneUpdateDto**](../Model/ShippingZoneUpdateDto.md)|  | [optional] |

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
