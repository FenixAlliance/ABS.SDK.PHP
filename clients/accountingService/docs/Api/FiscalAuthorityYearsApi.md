# OpenAPI\Client\FiscalAuthorityYearsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFiscalYear()**](FiscalAuthorityYearsApi.md#createFiscalYear) | **POST** /api/v2/AccountingService/Fiscals/Authorities/FiscalYears | Create a fiscal year |
| [**deleteFiscalYear()**](FiscalAuthorityYearsApi.md#deleteFiscalYear) | **DELETE** /api/v2/AccountingService/Fiscals/Authorities/FiscalYears/{fiscalYearId} | Delete a fiscal year |
| [**getFiscalYear()**](FiscalAuthorityYearsApi.md#getFiscalYear) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalYears/{fiscalYearId} | Get fiscal year by ID for an authority |
| [**getFiscalYears()**](FiscalAuthorityYearsApi.md#getFiscalYears) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{authorityId}/FiscalYears | Get fiscal years for an authority |
| [**getFiscalYearsCount()**](FiscalAuthorityYearsApi.md#getFiscalYearsCount) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalYears/Count | Get fiscal years count for an authority |
| [**updateFiscalYear()**](FiscalAuthorityYearsApi.md#updateFiscalYear) | **PUT** /api/v2/AccountingService/Fiscals/Authorities/FiscalYears/{fiscalYearId} | Update a fiscal year |


## `createFiscalYear()`

```php
createFiscalYear($tenant_id, $api_version, $x_api_version, $fiscal_year_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a fiscal year

Creates a new fiscal year associated with a fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalAuthorityYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_year_create_dto = new \OpenAPI\Client\Model\FiscalYearCreateDto(); // \OpenAPI\Client\Model\FiscalYearCreateDto

try {
    $result = $apiInstance->createFiscalYear($tenant_id, $api_version, $x_api_version, $fiscal_year_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalAuthorityYearsApi->createFiscalYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
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

## `deleteFiscalYear()`

```php
deleteFiscalYear($tenant_id, $fiscal_year_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a fiscal year

Deletes a fiscal year identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalAuthorityYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_year_id = 'fiscal_year_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFiscalYear($tenant_id, $fiscal_year_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalAuthorityYearsApi->deleteFiscalYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
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

## `getFiscalYear()`

```php
getFiscalYear($tenant_id, $fiscal_authority_id, $fiscal_year_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalYearDtoEnvelope
```

Get fiscal year by ID for an authority

Retrieves a specific fiscal year by its unique identifier within a fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalAuthorityYearsApi(
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
    $result = $apiInstance->getFiscalYear($tenant_id, $fiscal_authority_id, $fiscal_year_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalAuthorityYearsApi->getFiscalYear: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\FiscalYearDtoEnvelope**](../Model/FiscalYearDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalYears()`

```php
getFiscalYears($tenant_id, $fiscal_authority_id, $authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalYearDtoListEnvelope
```

Get fiscal years for an authority

Retrieves all fiscal years associated with the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalAuthorityYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalYears($tenant_id, $fiscal_authority_id, $authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalAuthorityYearsApi->getFiscalYears: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **authority_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalYearDtoListEnvelope**](../Model/FiscalYearDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalYearsCount()`

```php
getFiscalYearsCount($tenant_id, $fiscal_authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get fiscal years count for an authority

Returns the total count of fiscal years for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalAuthorityYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalYearsCount($tenant_id, $fiscal_authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalAuthorityYearsApi->getFiscalYearsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
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

## `updateFiscalYear()`

```php
updateFiscalYear($tenant_id, $fiscal_year_id, $api_version, $x_api_version, $fiscal_year_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a fiscal year

Updates an existing fiscal year identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalAuthorityYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_year_id = 'fiscal_year_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_year_update_dto = new \OpenAPI\Client\Model\FiscalYearUpdateDto(); // \OpenAPI\Client\Model\FiscalYearUpdateDto

try {
    $result = $apiInstance->updateFiscalYear($tenant_id, $fiscal_year_id, $api_version, $x_api_version, $fiscal_year_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalAuthorityYearsApi->updateFiscalYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
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
