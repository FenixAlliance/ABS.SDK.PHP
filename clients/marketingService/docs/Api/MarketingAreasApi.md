# OpenAPI\Client\MarketingAreasApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMarketingAreaAsync()**](MarketingAreasApi.md#createMarketingAreaAsync) | **POST** /api/v2/MarketingService/MarketingAreas | Create a marketing area |
| [**deleteMarketingAreaAsync()**](MarketingAreasApi.md#deleteMarketingAreaAsync) | **DELETE** /api/v2/MarketingService/MarketingAreas/{marketingAreaId} | Delete a marketing area |
| [**getMarketingAreaByIdAsync()**](MarketingAreasApi.md#getMarketingAreaByIdAsync) | **GET** /api/v2/MarketingService/MarketingAreas/{marketingAreaId} | Get marketing area by ID |
| [**getMarketingAreasAsync()**](MarketingAreasApi.md#getMarketingAreasAsync) | **GET** /api/v2/MarketingService/MarketingAreas | Get marketing areas |
| [**getMarketingAreasCountAsync()**](MarketingAreasApi.md#getMarketingAreasCountAsync) | **GET** /api/v2/MarketingService/MarketingAreas/Count | Count marketing areas |
| [**updateMarketingAreaAsync()**](MarketingAreasApi.md#updateMarketingAreaAsync) | **PUT** /api/v2/MarketingService/MarketingAreas/{marketingAreaId} | Update a marketing area |


## `createMarketingAreaAsync()`

```php
createMarketingAreaAsync($tenant_id, $api_version, $x_api_version, $marketing_area_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a marketing area

Creates a new marketing area for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$marketing_area_create_dto = new \OpenAPI\Client\Model\MarketingAreaCreateDto(); // \OpenAPI\Client\Model\MarketingAreaCreateDto

try {
    $result = $apiInstance->createMarketingAreaAsync($tenant_id, $api_version, $x_api_version, $marketing_area_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingAreasApi->createMarketingAreaAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **marketing_area_create_dto** | [**\OpenAPI\Client\Model\MarketingAreaCreateDto**](../Model/MarketingAreaCreateDto.md)|  | [optional] |

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

## `deleteMarketingAreaAsync()`

```php
deleteMarketingAreaAsync($tenant_id, $marketing_area_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a marketing area

Deletes a marketing area for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketing_area_id = 'marketing_area_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteMarketingAreaAsync($tenant_id, $marketing_area_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingAreasApi->deleteMarketingAreaAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketing_area_id** | **string**|  | |
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

## `getMarketingAreaByIdAsync()`

```php
getMarketingAreaByIdAsync($tenant_id, $marketing_area_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MarketingAreaDtoEnvelope
```

Get marketing area by ID

Retrieves a specific marketing area by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketing_area_id = 'marketing_area_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMarketingAreaByIdAsync($tenant_id, $marketing_area_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingAreasApi->getMarketingAreaByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketing_area_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MarketingAreaDtoEnvelope**](../Model/MarketingAreaDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarketingAreasAsync()`

```php
getMarketingAreasAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\MarketingAreaDtoListEnvelope
```

Get marketing areas

Retrieves marketing areas for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMarketingAreasAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingAreasApi->getMarketingAreasAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MarketingAreaDtoListEnvelope**](../Model/MarketingAreaDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarketingAreasCountAsync()`

```php
getMarketingAreasCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count marketing areas

Counts marketing areas for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getMarketingAreasCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingAreasApi->getMarketingAreasCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateMarketingAreaAsync()`

```php
updateMarketingAreaAsync($tenant_id, $marketing_area_id, $api_version, $x_api_version, $marketing_area_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a marketing area

Updates an existing marketing area for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketingAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$marketing_area_id = 'marketing_area_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$marketing_area_update_dto = new \OpenAPI\Client\Model\MarketingAreaUpdateDto(); // \OpenAPI\Client\Model\MarketingAreaUpdateDto

try {
    $result = $apiInstance->updateMarketingAreaAsync($tenant_id, $marketing_area_id, $api_version, $x_api_version, $marketing_area_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketingAreasApi->updateMarketingAreaAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **marketing_area_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **marketing_area_update_dto** | [**\OpenAPI\Client\Model\MarketingAreaUpdateDto**](../Model/MarketingAreaUpdateDto.md)|  | [optional] |

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
