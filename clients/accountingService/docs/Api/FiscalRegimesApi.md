# OpenAPI\Client\FiscalRegimesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFiscalRegime()**](FiscalRegimesApi.md#createFiscalRegime) | **POST** /api/v2/AccountingService/Fiscals/Authorities/FiscalRegimes | Create a fiscal regime |
| [**deleteFiscalRegime()**](FiscalRegimesApi.md#deleteFiscalRegime) | **DELETE** /api/v2/AccountingService/Fiscals/Authorities/FiscalRegimes/{regimeId} | Delete a fiscal regime |
| [**getFiscalRegime()**](FiscalRegimesApi.md#getFiscalRegime) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalRegimes/{regimeId} | Get fiscal regime by ID |
| [**getFiscalRegimes()**](FiscalRegimesApi.md#getFiscalRegimes) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{authorityId}/FiscalRegimes | Get fiscal regimes for an authority |
| [**getFiscalRegimesCount()**](FiscalRegimesApi.md#getFiscalRegimesCount) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalRegimes/Count | Get fiscal regimes count |
| [**updateFiscalRegime()**](FiscalRegimesApi.md#updateFiscalRegime) | **PUT** /api/v2/AccountingService/Fiscals/Authorities/FiscalRegimes/{regimeId} | Update a fiscal regime |


## `createFiscalRegime()`

```php
createFiscalRegime($tenant_id, $api_version, $x_api_version, $fiscal_regime_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a fiscal regime

Creates a new fiscal regime for a fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalRegimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_regime_create_dto = new \OpenAPI\Client\Model\FiscalRegimeCreateDto(); // \OpenAPI\Client\Model\FiscalRegimeCreateDto

try {
    $result = $apiInstance->createFiscalRegime($tenant_id, $api_version, $x_api_version, $fiscal_regime_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalRegimesApi->createFiscalRegime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_regime_create_dto** | [**\OpenAPI\Client\Model\FiscalRegimeCreateDto**](../Model/FiscalRegimeCreateDto.md)|  | [optional] |

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

## `deleteFiscalRegime()`

```php
deleteFiscalRegime($tenant_id, $regime_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a fiscal regime

Deletes a fiscal regime identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalRegimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$regime_id = 'regime_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFiscalRegime($tenant_id, $regime_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalRegimesApi->deleteFiscalRegime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **regime_id** | **string**|  | |
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

## `getFiscalRegime()`

```php
getFiscalRegime($tenant_id, $fiscal_authority_id, $regime_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalRegimeDtoEnvelope
```

Get fiscal regime by ID

Retrieves a specific fiscal regime by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalRegimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$regime_id = 'regime_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalRegime($tenant_id, $fiscal_authority_id, $regime_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalRegimesApi->getFiscalRegime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **regime_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalRegimeDtoEnvelope**](../Model/FiscalRegimeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalRegimes()`

```php
getFiscalRegimes($fiscal_authority_id, $authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalRegimeDtoListEnvelope
```

Get fiscal regimes for an authority

Retrieves all fiscal regimes for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalRegimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalRegimes($fiscal_authority_id, $authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalRegimesApi->getFiscalRegimes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fiscal_authority_id** | **string**|  | |
| **authority_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalRegimeDtoListEnvelope**](../Model/FiscalRegimeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalRegimesCount()`

```php
getFiscalRegimesCount($fiscal_authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get fiscal regimes count

Returns the total count of fiscal regimes for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalRegimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalRegimesCount($fiscal_authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalRegimesApi->getFiscalRegimesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `updateFiscalRegime()`

```php
updateFiscalRegime($tenant_id, $regime_id, $api_version, $x_api_version, $fiscal_regime_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a fiscal regime

Updates an existing fiscal regime identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalRegimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$regime_id = 'regime_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_regime_update_dto = new \OpenAPI\Client\Model\FiscalRegimeUpdateDto(); // \OpenAPI\Client\Model\FiscalRegimeUpdateDto

try {
    $result = $apiInstance->updateFiscalRegime($tenant_id, $regime_id, $api_version, $x_api_version, $fiscal_regime_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalRegimesApi->updateFiscalRegime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **regime_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_regime_update_dto** | [**\OpenAPI\Client\Model\FiscalRegimeUpdateDto**](../Model/FiscalRegimeUpdateDto.md)|  | [optional] |

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
