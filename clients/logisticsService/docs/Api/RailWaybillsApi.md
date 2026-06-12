# OpenAPI\Client\RailWaybillsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRailWaybillLineAsync()**](RailWaybillsApi.md#addRailWaybillLineAsync) | **POST** /api/v2/LogisticsService/RailWaybills/{waybillId}/Lines | Add a line to rail waybill |
| [**cancelRailWaybillAsync()**](RailWaybillsApi.md#cancelRailWaybillAsync) | **POST** /api/v2/LogisticsService/RailWaybills/{waybillId}/Cancel | Cancel a rail waybill |
| [**createRailWaybillAsync()**](RailWaybillsApi.md#createRailWaybillAsync) | **POST** /api/v2/LogisticsService/RailWaybills | Create a rail waybill |
| [**deleteRailWaybillAsync()**](RailWaybillsApi.md#deleteRailWaybillAsync) | **DELETE** /api/v2/LogisticsService/RailWaybills/{waybillId} | Delete a rail waybill |
| [**getRailWaybillByIdAsync()**](RailWaybillsApi.md#getRailWaybillByIdAsync) | **GET** /api/v2/LogisticsService/RailWaybills/{waybillId} | Get rail waybill by ID |
| [**getRailWaybillLinesAsync()**](RailWaybillsApi.md#getRailWaybillLinesAsync) | **GET** /api/v2/LogisticsService/RailWaybills/{waybillId}/Lines | Get rail waybill lines |
| [**getRailWaybillLinesCountAsync()**](RailWaybillsApi.md#getRailWaybillLinesCountAsync) | **GET** /api/v2/LogisticsService/RailWaybills/{waybillId}/Lines/Count | Get rail waybill lines count |
| [**getRailWaybillsAsync()**](RailWaybillsApi.md#getRailWaybillsAsync) | **GET** /api/v2/LogisticsService/RailWaybills | Get all rail waybills |
| [**getRailWaybillsCountAsync()**](RailWaybillsApi.md#getRailWaybillsCountAsync) | **GET** /api/v2/LogisticsService/RailWaybills/Count | Get rail waybills count |
| [**issueRailWaybillAsync()**](RailWaybillsApi.md#issueRailWaybillAsync) | **POST** /api/v2/LogisticsService/RailWaybills/{waybillId}/Issue | Issue a rail waybill |
| [**markRailWaybillDeliveredAsync()**](RailWaybillsApi.md#markRailWaybillDeliveredAsync) | **POST** /api/v2/LogisticsService/RailWaybills/{waybillId}/MarkDelivered | Mark rail waybill delivered |
| [**markRailWaybillInTransitAsync()**](RailWaybillsApi.md#markRailWaybillInTransitAsync) | **POST** /api/v2/LogisticsService/RailWaybills/{waybillId}/MarkInTransit | Mark rail waybill in transit |
| [**patchRailWaybillAsync()**](RailWaybillsApi.md#patchRailWaybillAsync) | **PATCH** /api/v2/LogisticsService/RailWaybills/{waybillId} | Patch a rail waybill |
| [**patchRailWaybillLineAsync()**](RailWaybillsApi.md#patchRailWaybillLineAsync) | **PATCH** /api/v2/LogisticsService/RailWaybills/{waybillId}/Lines/{lineId} | Patch a rail waybill line |
| [**removeRailWaybillLineAsync()**](RailWaybillsApi.md#removeRailWaybillLineAsync) | **DELETE** /api/v2/LogisticsService/RailWaybills/{waybillId}/Lines/{lineId} | Remove a rail waybill line |
| [**updateRailWaybillAsync()**](RailWaybillsApi.md#updateRailWaybillAsync) | **PUT** /api/v2/LogisticsService/RailWaybills/{waybillId} | Update a rail waybill |
| [**updateRailWaybillLineAsync()**](RailWaybillsApi.md#updateRailWaybillLineAsync) | **PUT** /api/v2/LogisticsService/RailWaybills/{waybillId}/Lines/{lineId} | Update a rail waybill line |


## `addRailWaybillLineAsync()`

```php
addRailWaybillLineAsync($tenant_id, $waybill_id, $api_version, $x_api_version, $waybill_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Add a line to rail waybill

Adds a new line to a rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$waybill_line_create_dto = new \OpenAPI\Client\Model\WaybillLineCreateDto(); // \OpenAPI\Client\Model\WaybillLineCreateDto

try {
    $result = $apiInstance->addRailWaybillLineAsync($tenant_id, $waybill_id, $api_version, $x_api_version, $waybill_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->addRailWaybillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **waybill_line_create_dto** | [**\OpenAPI\Client\Model\WaybillLineCreateDto**](../Model/WaybillLineCreateDto.md)|  | [optional] |

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

## `cancelRailWaybillAsync()`

```php
cancelRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Cancel a rail waybill

Cancels a rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->cancelRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->cancelRailWaybillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
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

## `createRailWaybillAsync()`

```php
createRailWaybillAsync($tenant_id, $api_version, $x_api_version, $rail_waybill_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a rail waybill

Creates a new rail waybill for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$rail_waybill_create_dto = new \OpenAPI\Client\Model\RailWaybillCreateDto(); // \OpenAPI\Client\Model\RailWaybillCreateDto

try {
    $result = $apiInstance->createRailWaybillAsync($tenant_id, $api_version, $x_api_version, $rail_waybill_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->createRailWaybillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **rail_waybill_create_dto** | [**\OpenAPI\Client\Model\RailWaybillCreateDto**](../Model/RailWaybillCreateDto.md)|  | [optional] |

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

## `deleteRailWaybillAsync()`

```php
deleteRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a rail waybill

Deletes a rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->deleteRailWaybillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
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

## `getRailWaybillByIdAsync()`

```php
getRailWaybillByIdAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\RailWaybillDtoEnvelope
```

Get rail waybill by ID

Retrieves a specific rail waybill by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRailWaybillByIdAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->getRailWaybillByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RailWaybillDtoEnvelope**](../Model/RailWaybillDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRailWaybillLinesAsync()`

```php
getRailWaybillLinesAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WaybillLineDtoListEnvelope
```

Get rail waybill lines

Retrieves all lines for a specific rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRailWaybillLinesAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->getRailWaybillLinesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WaybillLineDtoListEnvelope**](../Model/WaybillLineDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRailWaybillLinesCountAsync()`

```php
getRailWaybillLinesCountAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get rail waybill lines count

Returns the count of lines for a specific rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRailWaybillLinesCountAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->getRailWaybillLinesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `getRailWaybillsAsync()`

```php
getRailWaybillsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\RailWaybillDtoListEnvelope
```

Get all rail waybills

Retrieves all rail waybills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRailWaybillsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->getRailWaybillsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RailWaybillDtoListEnvelope**](../Model/RailWaybillDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRailWaybillsCountAsync()`

```php
getRailWaybillsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get rail waybills count

Returns the count of rail waybills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRailWaybillsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->getRailWaybillsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `issueRailWaybillAsync()`

```php
issueRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Issue a rail waybill

Issues a rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->issueRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->issueRailWaybillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
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

## `markRailWaybillDeliveredAsync()`

```php
markRailWaybillDeliveredAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Mark rail waybill delivered

Marks a rail waybill as delivered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->markRailWaybillDeliveredAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->markRailWaybillDeliveredAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
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

## `markRailWaybillInTransitAsync()`

```php
markRailWaybillInTransitAsync($tenant_id, $waybill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Mark rail waybill in transit

Marks a rail waybill as in transit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->markRailWaybillInTransitAsync($tenant_id, $waybill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->markRailWaybillInTransitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
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

## `patchRailWaybillAsync()`

```php
patchRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a rail waybill

Partially updates an existing rail waybill using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->patchRailWaybillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `patchRailWaybillLineAsync()`

```php
patchRailWaybillLineAsync($tenant_id, $waybill_id, $line_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a rail waybill line

Partially updates a line on a rail waybill using a JSON Patch document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchRailWaybillLineAsync($tenant_id, $waybill_id, $line_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->patchRailWaybillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `removeRailWaybillLineAsync()`

```php
removeRailWaybillLineAsync($tenant_id, $waybill_id, $line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Remove a rail waybill line

Removes a line from a rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->removeRailWaybillLineAsync($tenant_id, $waybill_id, $line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->removeRailWaybillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **line_id** | **string**|  | |
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

## `updateRailWaybillAsync()`

```php
updateRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version, $rail_waybill_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a rail waybill

Updates an existing rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$rail_waybill_update_dto = new \OpenAPI\Client\Model\RailWaybillUpdateDto(); // \OpenAPI\Client\Model\RailWaybillUpdateDto

try {
    $result = $apiInstance->updateRailWaybillAsync($tenant_id, $waybill_id, $api_version, $x_api_version, $rail_waybill_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->updateRailWaybillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **rail_waybill_update_dto** | [**\OpenAPI\Client\Model\RailWaybillUpdateDto**](../Model/RailWaybillUpdateDto.md)|  | [optional] |

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

## `updateRailWaybillLineAsync()`

```php
updateRailWaybillLineAsync($tenant_id, $waybill_id, $line_id, $api_version, $x_api_version, $waybill_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a rail waybill line

Updates an existing line on a rail waybill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RailWaybillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$waybill_id = 'waybill_id_example'; // string
$line_id = 'line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$waybill_line_update_dto = new \OpenAPI\Client\Model\WaybillLineUpdateDto(); // \OpenAPI\Client\Model\WaybillLineUpdateDto

try {
    $result = $apiInstance->updateRailWaybillLineAsync($tenant_id, $waybill_id, $line_id, $api_version, $x_api_version, $waybill_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RailWaybillsApi->updateRailWaybillLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **waybill_id** | **string**|  | |
| **line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **waybill_line_update_dto** | [**\OpenAPI\Client\Model\WaybillLineUpdateDto**](../Model/WaybillLineUpdateDto.md)|  | [optional] |

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
