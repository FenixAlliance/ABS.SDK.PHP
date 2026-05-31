# OpenAPI\Client\DealUnitsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateDealUnitAsync()**](DealUnitsApi.md#calculateDealUnitAsync) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId}/Calculate | Calculate a deal unit |
| [**calculateDealUnitLineAsync()**](DealUnitsApi.md#calculateDealUnitLineAsync) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId}/Calculate | Calculate a deal unit line |
| [**createDealUnitAsync()**](DealUnitsApi.md#createDealUnitAsync) | **POST** /api/v2/DealsService/DealUnits | Create a deal unit |
| [**createGetDealUnitLinesAsync()**](DealUnitsApi.md#createGetDealUnitLinesAsync) | **POST** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines | Create a deal unit line |
| [**deleteDealUnitAsync()**](DealUnitsApi.md#deleteDealUnitAsync) | **DELETE** /api/v2/DealsService/DealUnits/{dealUnitId} | Delete a deal unit |
| [**deleteDealUnitPriceAsync()**](DealUnitsApi.md#deleteDealUnitPriceAsync) | **DELETE** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId} | Delete a deal unit line |
| [**getDealUnitAsync()**](DealUnitsApi.md#getDealUnitAsync) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId} | Get deal unit by ID |
| [**getDealUnitLinesAsync()**](DealUnitsApi.md#getDealUnitLinesAsync) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines | Get deal unit lines |
| [**getDealUnitLinesCountAsync()**](DealUnitsApi.md#getDealUnitLinesCountAsync) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/Count | Get deal unit lines count |
| [**getDealUnitPriceAsync()**](DealUnitsApi.md#getDealUnitPriceAsync) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId} | Get a deal unit line by ID |
| [**getDealUnitsAsync()**](DealUnitsApi.md#getDealUnitsAsync) | **GET** /api/v2/DealsService/DealUnits | Get deal units |
| [**getDealUnitsCountAsync()**](DealUnitsApi.md#getDealUnitsCountAsync) | **GET** /api/v2/DealsService/DealUnits/Count | Get deal units count |
| [**getExtendedDealUnitAsync()**](DealUnitsApi.md#getExtendedDealUnitAsync) | **GET** /api/v2/DealsService/DealUnits/{dealUnitId}/Extended | Get extended deal unit by ID |
| [**getExtendedDealUnitsAsync()**](DealUnitsApi.md#getExtendedDealUnitsAsync) | **GET** /api/v2/DealsService/DealUnits/Extended | Get extended deal units |
| [**updateDealUnitAsync()**](DealUnitsApi.md#updateDealUnitAsync) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId} | Update a deal unit |
| [**updateDealUnitPriceAsync()**](DealUnitsApi.md#updateDealUnitPriceAsync) | **PUT** /api/v2/DealsService/DealUnits/{dealUnitId}/Lines/{dealUnitLineId} | Update a deal unit line |


## `calculateDealUnitAsync()`

```php
calculateDealUnitAsync($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculate a deal unit

Triggers recalculation of totals and derived values for a specific deal unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->calculateDealUnitAsync($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->calculateDealUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

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

## `calculateDealUnitLineAsync()`

```php
calculateDealUnitLineAsync($tenant_id, $deal_unit_id, $deal_unit_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculate a deal unit line

Triggers recalculation of totals and derived values for a specific deal unit line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string

try {
    $result = $apiInstance->calculateDealUnitLineAsync($tenant_id, $deal_unit_id, $deal_unit_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->calculateDealUnitLineAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |

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

## `createDealUnitAsync()`

```php
createDealUnitAsync($tenant_id, $deal_unit_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a deal unit

Creates a new deal unit for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_create_dto = new \OpenAPI\Client\Model\DealUnitCreateDto(); // \OpenAPI\Client\Model\DealUnitCreateDto

try {
    $result = $apiInstance->createDealUnitAsync($tenant_id, $deal_unit_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->createDealUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_create_dto** | [**\OpenAPI\Client\Model\DealUnitCreateDto**](../Model/DealUnitCreateDto.md)|  | [optional] |

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

## `createGetDealUnitLinesAsync()`

```php
createGetDealUnitLinesAsync($tenant_id, $deal_unit_id, $deal_unit_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a deal unit line

Creates a new line within a specific deal unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_create_dto = new \OpenAPI\Client\Model\DealUnitLineCreateDto(); // \OpenAPI\Client\Model\DealUnitLineCreateDto

try {
    $result = $apiInstance->createGetDealUnitLinesAsync($tenant_id, $deal_unit_id, $deal_unit_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->createGetDealUnitLinesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_create_dto** | [**\OpenAPI\Client\Model\DealUnitLineCreateDto**](../Model/DealUnitLineCreateDto.md)|  | [optional] |

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

## `deleteDealUnitAsync()`

```php
deleteDealUnitAsync($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a deal unit

Deletes an existing deal unit by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->deleteDealUnitAsync($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->deleteDealUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

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

## `deleteDealUnitPriceAsync()`

```php
deleteDealUnitPriceAsync($tenant_id, $deal_unit_id, $deal_unit_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a deal unit line

Deletes an existing line from a specific deal unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string

try {
    $result = $apiInstance->deleteDealUnitPriceAsync($tenant_id, $deal_unit_id, $deal_unit_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->deleteDealUnitPriceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |

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

## `getDealUnitAsync()`

```php
getDealUnitAsync($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\DealUnitDtoEnvelope
```

Get deal unit by ID

Retrieves a single deal unit by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->getDealUnitAsync($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getDealUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitDtoEnvelope**](../Model/DealUnitDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitLinesAsync()`

```php
getDealUnitLinesAsync($tenant_id, $deal_unit_id, $item_id): \OpenAPI\Client\Model\DealUnitLineDtoListEnvelope
```

Get deal unit lines

Retrieves a list of lines for a specific deal unit with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->getDealUnitLinesAsync($tenant_id, $deal_unit_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getDealUnitLinesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DealUnitLineDtoListEnvelope**](../Model/DealUnitLineDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitLinesCountAsync()`

```php
getDealUnitLinesCountAsync($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\Int32Envelope
```

Get deal unit lines count

Returns the total count of lines for a specific deal unit with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->getDealUnitLinesCountAsync($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getDealUnitLinesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

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

## `getDealUnitPriceAsync()`

```php
getDealUnitPriceAsync($tenant_id, $deal_unit_id, $deal_unit_line_id): \OpenAPI\Client\Model\DealUnitLineDtoEnvelope
```

Get a deal unit line by ID

Retrieves a single deal unit line by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string

try {
    $result = $apiInstance->getDealUnitPriceAsync($tenant_id, $deal_unit_id, $deal_unit_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getDealUnitPriceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitLineDtoEnvelope**](../Model/DealUnitLineDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitsAsync()`

```php
getDealUnitsAsync($tenant_id): \OpenAPI\Client\Model\DealUnitDtoListEnvelope
```

Get deal units

Retrieves a list of deal units for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getDealUnitsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getDealUnitsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DealUnitDtoListEnvelope**](../Model/DealUnitDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealUnitsCountAsync()`

```php
getDealUnitsCountAsync($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get deal units count

Returns the total count of deal units for the specified tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getDealUnitsCountAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getDealUnitsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getExtendedDealUnitAsync()`

```php
getExtendedDealUnitAsync($tenant_id, $deal_unit_id): \OpenAPI\Client\Model\ExtendedDealUnitDtoEnvelope
```

Get extended deal unit by ID

Retrieves a single deal unit with extended details by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string

try {
    $result = $apiInstance->getExtendedDealUnitAsync($tenant_id, $deal_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getExtendedDealUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedDealUnitDtoEnvelope**](../Model/ExtendedDealUnitDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedDealUnitsAsync()`

```php
getExtendedDealUnitsAsync($tenant_id): \OpenAPI\Client\Model\ExtendedDealUnitDtoListEnvelope
```

Get extended deal units

Retrieves a list of deal units with extended details for the specified tenant with OData query support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getExtendedDealUnitsAsync($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->getExtendedDealUnitsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedDealUnitDtoListEnvelope**](../Model/ExtendedDealUnitDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDealUnitAsync()`

```php
updateDealUnitAsync($tenant_id, $deal_unit_id, $deal_unit_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a deal unit

Updates an existing deal unit by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_update_dto = new \OpenAPI\Client\Model\DealUnitUpdateDto(); // \OpenAPI\Client\Model\DealUnitUpdateDto

try {
    $result = $apiInstance->updateDealUnitAsync($tenant_id, $deal_unit_id, $deal_unit_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->updateDealUnitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_update_dto** | [**\OpenAPI\Client\Model\DealUnitUpdateDto**](../Model/DealUnitUpdateDto.md)|  | [optional] |

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

## `updateDealUnitPriceAsync()`

```php
updateDealUnitPriceAsync($tenant_id, $deal_unit_id, $deal_unit_line_id, $deal_unit_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a deal unit line

Updates an existing line within a specific deal unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DealUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$deal_unit_id = 'deal_unit_id_example'; // string
$deal_unit_line_id = 'deal_unit_line_id_example'; // string
$deal_unit_line_update_dto = new \OpenAPI\Client\Model\DealUnitLineUpdateDto(); // \OpenAPI\Client\Model\DealUnitLineUpdateDto

try {
    $result = $apiInstance->updateDealUnitPriceAsync($tenant_id, $deal_unit_id, $deal_unit_line_id, $deal_unit_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealUnitsApi->updateDealUnitPriceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **deal_unit_id** | **string**|  | |
| **deal_unit_line_id** | **string**|  | |
| **deal_unit_line_update_dto** | [**\OpenAPI\Client\Model\DealUnitLineUpdateDto**](../Model/DealUnitLineUpdateDto.md)|  | [optional] |

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
