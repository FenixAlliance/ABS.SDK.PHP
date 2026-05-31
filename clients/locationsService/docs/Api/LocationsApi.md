# OpenAPI\Client\LocationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLocationAsync()**](LocationsApi.md#createLocationAsync) | **POST** /api/v2/LocationsService/Locations | Create Location |
| [**createWalletLocationAsync()**](LocationsApi.md#createWalletLocationAsync) | **POST** /api/v2/LocationsService/Locations/wallet/{walletId} | Create Wallet Location |
| [**deleteLocationAsync()**](LocationsApi.md#deleteLocationAsync) | **DELETE** /api/v2/LocationsService/Locations/{locationId} | Delete Location |
| [**deleteWalletLocationAsync()**](LocationsApi.md#deleteWalletLocationAsync) | **DELETE** /api/v2/LocationsService/Locations/wallet/{walletId}/{locationId} | Delete Wallet Location |
| [**getLocationAsync()**](LocationsApi.md#getLocationAsync) | **GET** /api/v2/LocationsService/Locations/{locationId} | Get Location |
| [**getLocationsAsync()**](LocationsApi.md#getLocationsAsync) | **GET** /api/v2/LocationsService/Locations | Get Locations |
| [**getLocationsCountAsync()**](LocationsApi.md#getLocationsCountAsync) | **GET** /api/v2/LocationsService/Locations/count | Get Locations Count |
| [**getWalletLocationAsync()**](LocationsApi.md#getWalletLocationAsync) | **GET** /api/v2/LocationsService/Locations/wallet/{walletId}/{locationId} | Get Wallet Location |
| [**getWalletLocationsAsync()**](LocationsApi.md#getWalletLocationsAsync) | **GET** /api/v2/LocationsService/Locations/wallet/{walletId} | Get Wallet Locations |
| [**getWalletLocationsCountAsync()**](LocationsApi.md#getWalletLocationsCountAsync) | **GET** /api/v2/LocationsService/Locations/wallet/{walletId}/count | Get Wallet Locations Count |
| [**updateLocationAsync()**](LocationsApi.md#updateLocationAsync) | **PUT** /api/v2/LocationsService/Locations/{locationId} | Update Location |
| [**updateWalletLocationAsync()**](LocationsApi.md#updateWalletLocationAsync) | **PUT** /api/v2/LocationsService/Locations/wallet/{walletId}/{locationId} | Update Wallet Location |


## `createLocationAsync()`

```php
createLocationAsync($tenant_id, $location_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create Location

Create a new location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$location_create_dto = new \OpenAPI\Client\Model\LocationCreateDto(); // \OpenAPI\Client\Model\LocationCreateDto

try {
    $result = $apiInstance->createLocationAsync($tenant_id, $location_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->createLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **location_create_dto** | [**\OpenAPI\Client\Model\LocationCreateDto**](../Model/LocationCreateDto.md)|  | [optional] |

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

## `createWalletLocationAsync()`

```php
createWalletLocationAsync($wallet_id, $location_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create Wallet Location

Create a new location for a specific wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$location_create_dto = new \OpenAPI\Client\Model\LocationCreateDto(); // \OpenAPI\Client\Model\LocationCreateDto

try {
    $result = $apiInstance->createWalletLocationAsync($wallet_id, $location_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->createWalletLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **location_create_dto** | [**\OpenAPI\Client\Model\LocationCreateDto**](../Model/LocationCreateDto.md)|  | [optional] |

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

## `deleteLocationAsync()`

```php
deleteLocationAsync($tenant_id, $location_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete Location

Delete a specific location by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$location_id = 'location_id_example'; // string

try {
    $result = $apiInstance->deleteLocationAsync($tenant_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->deleteLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **location_id** | **string**|  | |

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

## `deleteWalletLocationAsync()`

```php
deleteWalletLocationAsync($wallet_id, $location_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete Wallet Location

Delete a specific location of a wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$location_id = 'location_id_example'; // string

try {
    $result = $apiInstance->deleteWalletLocationAsync($wallet_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->deleteWalletLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **location_id** | **string**|  | |

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

## `getLocationAsync()`

```php
getLocationAsync($tenant_id, $location_id): \OpenAPI\Client\Model\LocationDtoEnvelope
```

Get Location

Get details of a specific location by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$location_id = 'location_id_example'; // string

try {
    $result = $apiInstance->getLocationAsync($tenant_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **location_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LocationDtoEnvelope**](../Model/LocationDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationsAsync()`

```php
getLocationsAsync($tenant_id): \OpenAPI\Client\Model\LocationDtoIReadOnlyListEnvelope
```

Get Locations

Get all locations with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getLocationsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LocationDtoIReadOnlyListEnvelope**](../Model/LocationDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationsCountAsync()`

```php
getLocationsCountAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get Locations Count

Get the count of locations with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getLocationsCountAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getWalletLocationAsync()`

```php
getWalletLocationAsync($wallet_id, $location_id): \OpenAPI\Client\Model\LocationDtoEnvelope
```

Get Wallet Location

Get a specific location of a wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$location_id = 'location_id_example'; // string

try {
    $result = $apiInstance->getWalletLocationAsync($wallet_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getWalletLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **location_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LocationDtoEnvelope**](../Model/LocationDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletLocationsAsync()`

```php
getWalletLocationsAsync($wallet_id): \OpenAPI\Client\Model\LocationDtoIReadOnlyListEnvelope
```

Get Wallet Locations

Get locations for a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string

try {
    $result = $apiInstance->getWalletLocationsAsync($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getWalletLocationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LocationDtoIReadOnlyListEnvelope**](../Model/LocationDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletLocationsCountAsync()`

```php
getWalletLocationsCountAsync($wallet_id): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Locations Count

Get the count of locations for a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string

try {
    $result = $apiInstance->getWalletLocationsCountAsync($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getWalletLocationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |

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

## `updateLocationAsync()`

```php
updateLocationAsync($tenant_id, $location_id, $location_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update Location

Update a specific location by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$location_id = 'location_id_example'; // string
$location_update_dto = new \OpenAPI\Client\Model\LocationUpdateDto(); // \OpenAPI\Client\Model\LocationUpdateDto

try {
    $result = $apiInstance->updateLocationAsync($tenant_id, $location_id, $location_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->updateLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **location_id** | **string**|  | |
| **location_update_dto** | [**\OpenAPI\Client\Model\LocationUpdateDto**](../Model/LocationUpdateDto.md)|  | [optional] |

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

## `updateWalletLocationAsync()`

```php
updateWalletLocationAsync($wallet_id, $location_id, $location_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update Wallet Location

Update a specific location of a wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$location_id = 'location_id_example'; // string
$location_update_dto = new \OpenAPI\Client\Model\LocationUpdateDto(); // \OpenAPI\Client\Model\LocationUpdateDto

try {
    $result = $apiInstance->updateWalletLocationAsync($wallet_id, $location_id, $location_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->updateWalletLocationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **location_id** | **string**|  | |
| **location_update_dto** | [**\OpenAPI\Client\Model\LocationUpdateDto**](../Model/LocationUpdateDto.md)|  | [optional] |

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
