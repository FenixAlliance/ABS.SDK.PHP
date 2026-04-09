# OpenAPI\Client\FiscalPeriodsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFiscalPeriod()**](FiscalPeriodsApi.md#createFiscalPeriod) | **POST** /api/v2/AccountingService/Fiscals/Authorities/FiscalPeriods | Create a fiscal period |
| [**deleteFiscalPeriod()**](FiscalPeriodsApi.md#deleteFiscalPeriod) | **DELETE** /api/v2/AccountingService/Fiscals/Authorities/FiscalPeriods/{fiscalPeriodId} | Delete a fiscal period |
| [**getFiscalPeriod()**](FiscalPeriodsApi.md#getFiscalPeriod) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalYears/{fiscalYearId}/FiscalPeriods/{fiscalPeriodId} | Get fiscal period by ID |
| [**getFiscalPeriods()**](FiscalPeriodsApi.md#getFiscalPeriods) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{authorityId}/FiscalYears/{fiscalYearId}/FiscalPeriods | Get fiscal periods for a fiscal year |
| [**getFiscalPeriodsCount()**](FiscalPeriodsApi.md#getFiscalPeriodsCount) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalYears/{fiscalYearId}/FiscalPeriods/Count | Get fiscal periods count |
| [**updateFiscalPeriod()**](FiscalPeriodsApi.md#updateFiscalPeriod) | **PUT** /api/v2/AccountingService/Fiscals/Authorities/FiscalPeriods/{fiscalPeriodId} | Update a fiscal period |


## `createFiscalPeriod()`

```php
createFiscalPeriod($tenant_id, $api_version, $x_api_version, $fiscal_period_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a fiscal period

Creates a new fiscal period associated with a fiscal year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_period_create_dto = new \OpenAPI\Client\Model\FiscalPeriodCreateDto(); // \OpenAPI\Client\Model\FiscalPeriodCreateDto

try {
    $result = $apiInstance->createFiscalPeriod($tenant_id, $api_version, $x_api_version, $fiscal_period_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->createFiscalPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_period_create_dto** | [**\OpenAPI\Client\Model\FiscalPeriodCreateDto**](../Model/FiscalPeriodCreateDto.md)|  | [optional] |

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

## `deleteFiscalPeriod()`

```php
deleteFiscalPeriod($tenant_id, $fiscal_period_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a fiscal period

Deletes a fiscal period identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_period_id = 'fiscal_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFiscalPeriod($tenant_id, $fiscal_period_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->deleteFiscalPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_period_id** | **string**|  | |
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

## `getFiscalPeriod()`

```php
getFiscalPeriod($tenant_id, $fiscal_authority_id, $fiscal_year_id, $fiscal_period_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalPeriodDtoEnvelope
```

Get fiscal period by ID

Retrieves a specific fiscal period by its unique identifier within a fiscal year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$fiscal_period_id = 'fiscal_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalPeriod($tenant_id, $fiscal_authority_id, $fiscal_year_id, $fiscal_period_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->getFiscalPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **fiscal_period_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalPeriodDtoEnvelope**](../Model/FiscalPeriodDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalPeriods()`

```php
getFiscalPeriods($tenant_id, $fiscal_authority_id, $fiscal_year_id, $authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalPeriodDtoListEnvelope
```

Get fiscal periods for a fiscal year

Retrieves all fiscal periods for the specified fiscal year within a fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalPeriods($tenant_id, $fiscal_authority_id, $fiscal_year_id, $authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->getFiscalPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **authority_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalPeriodDtoListEnvelope**](../Model/FiscalPeriodDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalPeriodsCount()`

```php
getFiscalPeriodsCount($tenant_id, $fiscal_authority_id, $fiscal_year_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get fiscal periods count

Returns the total count of fiscal periods for the specified fiscal year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalPeriodsCount($tenant_id, $fiscal_authority_id, $fiscal_year_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->getFiscalPeriodsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
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

## `updateFiscalPeriod()`

```php
updateFiscalPeriod($tenant_id, $fiscal_period_id, $api_version, $x_api_version, $fiscal_period_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a fiscal period

Updates an existing fiscal period identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_period_id = 'fiscal_period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_period_update_dto = new \OpenAPI\Client\Model\FiscalPeriodUpdateDto(); // \OpenAPI\Client\Model\FiscalPeriodUpdateDto

try {
    $result = $apiInstance->updateFiscalPeriod($tenant_id, $fiscal_period_id, $api_version, $x_api_version, $fiscal_period_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->updateFiscalPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_period_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_period_update_dto** | [**\OpenAPI\Client\Model\FiscalPeriodUpdateDto**](../Model/FiscalPeriodUpdateDto.md)|  | [optional] |

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
