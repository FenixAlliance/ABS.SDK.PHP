# OpenAPI\Client\FiscalYearsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFiscalYearAsync()**](FiscalYearsApi.md#createFiscalYearAsync) | **POST** /api/v2/AccountingService/FiscalYears | Create fiscal year |
| [**deleteFiscalYearAsync()**](FiscalYearsApi.md#deleteFiscalYearAsync) | **DELETE** /api/v2/AccountingService/FiscalYears/{fiscalYearId} | Delete fiscal year |
| [**getFiscalYearDetailsAsync()**](FiscalYearsApi.md#getFiscalYearDetailsAsync) | **GET** /api/v2/AccountingService/FiscalYears/{fiscalYearId} | Get fiscal year by ID |
| [**getFiscalYearsAsync()**](FiscalYearsApi.md#getFiscalYearsAsync) | **GET** /api/v2/AccountingService/FiscalYears | Get all fiscal years |
| [**getFiscalYearsCountAsync()**](FiscalYearsApi.md#getFiscalYearsCountAsync) | **GET** /api/v2/AccountingService/FiscalYears/Count | Count fiscal years |
| [**updateFiscalYearAsync()**](FiscalYearsApi.md#updateFiscalYearAsync) | **PUT** /api/v2/AccountingService/FiscalYears/{fiscalYearId} | Update fiscal year |


## `createFiscalYearAsync()`

```php
createFiscalYearAsync($tenant_id, $api_version, $x_api_version, $fiscal_year_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create fiscal year

Creates a new fiscal year entry for a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_year_create_dto = new \OpenAPI\Client\Model\FiscalYearCreateDto(); // \OpenAPI\Client\Model\FiscalYearCreateDto

try {
    $result = $apiInstance->createFiscalYearAsync($tenant_id, $api_version, $x_api_version, $fiscal_year_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->createFiscalYearAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_year_create_dto** | [**\OpenAPI\Client\Model\FiscalYearCreateDto**](../Model/FiscalYearCreateDto.md)|  | [optional] |

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

## `deleteFiscalYearAsync()`

```php
deleteFiscalYearAsync($tenant_id, $fiscal_year_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete fiscal year

Deletes a fiscal year identified by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFiscalYearAsync($tenant_id, $fiscal_year_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->deleteFiscalYearAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
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

## `getFiscalYearDetailsAsync()`

```php
getFiscalYearDetailsAsync($tenant_id, $fiscal_year_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalYearDtoEnvelope
```

Get fiscal year by ID

Gets details for a specific fiscal year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalYearDetailsAsync($tenant_id, $fiscal_year_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->getFiscalYearDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalYearDtoEnvelope**](../Model/FiscalYearDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalYearsAsync()`

```php
getFiscalYearsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalYearDtoIReadOnlyListEnvelope
```

Get all fiscal years

Retrieves a list of fiscal years for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalYearsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->getFiscalYearsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalYearDtoIReadOnlyListEnvelope**](../Model/FiscalYearDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalYearsCountAsync()`

```php
getFiscalYearsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count fiscal years

Returns the number of fiscal years for a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalYearsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->getFiscalYearsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateFiscalYearAsync()`

```php
updateFiscalYearAsync($tenant_id, $fiscal_year_id, $api_version, $x_api_version, $fiscal_year_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update fiscal year

Updates an existing fiscal year identified by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_year_update_dto = new \OpenAPI\Client\Model\FiscalYearUpdateDto(); // \OpenAPI\Client\Model\FiscalYearUpdateDto

try {
    $result = $apiInstance->updateFiscalYearAsync($tenant_id, $fiscal_year_id, $api_version, $x_api_version, $fiscal_year_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->updateFiscalYearAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_year_update_dto** | [**\OpenAPI\Client\Model\FiscalYearUpdateDto**](../Model/FiscalYearUpdateDto.md)|  | [optional] |

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
