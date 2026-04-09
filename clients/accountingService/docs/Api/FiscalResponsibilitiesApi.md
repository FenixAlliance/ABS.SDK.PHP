# OpenAPI\Client\FiscalResponsibilitiesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFiscalResponsibility()**](FiscalResponsibilitiesApi.md#createFiscalResponsibility) | **POST** /api/v2/AccountingService/Fiscals/Authorities/FiscalResponsibilities | Create a fiscal responsibility |
| [**deleteFiscalResponsibility()**](FiscalResponsibilitiesApi.md#deleteFiscalResponsibility) | **DELETE** /api/v2/AccountingService/Fiscals/Authorities/FiscalResponsibilities/{fiscalResponsibilityId} | Delete a fiscal responsibility |
| [**getFiscalResponsibilities()**](FiscalResponsibilitiesApi.md#getFiscalResponsibilities) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{authorityId}/FiscalResponsibilities | Get fiscal responsibilities for an authority |
| [**getFiscalResponsibilitiesCount()**](FiscalResponsibilitiesApi.md#getFiscalResponsibilitiesCount) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalResponsibilities/Count | Get fiscal responsibilities count |
| [**getFiscalResponsibility()**](FiscalResponsibilitiesApi.md#getFiscalResponsibility) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalResponsibilities/{fiscalResponsibilityId} | Get fiscal responsibility by ID |
| [**updateFiscalResponsibility()**](FiscalResponsibilitiesApi.md#updateFiscalResponsibility) | **PUT** /api/v2/AccountingService/Fiscals/Authorities/FiscalResponsibilities/{fiscalResponsibilityId} | Update a fiscal responsibility |


## `createFiscalResponsibility()`

```php
createFiscalResponsibility($tenant_id, $api_version, $x_api_version, $fiscal_responsibility_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a fiscal responsibility

Creates a new fiscal responsibility for a fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_responsibility_create_dto = new \OpenAPI\Client\Model\FiscalResponsibilityCreateDto(); // \OpenAPI\Client\Model\FiscalResponsibilityCreateDto

try {
    $result = $apiInstance->createFiscalResponsibility($tenant_id, $api_version, $x_api_version, $fiscal_responsibility_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilitiesApi->createFiscalResponsibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_responsibility_create_dto** | [**\OpenAPI\Client\Model\FiscalResponsibilityCreateDto**](../Model/FiscalResponsibilityCreateDto.md)|  | [optional] |

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

## `deleteFiscalResponsibility()`

```php
deleteFiscalResponsibility($tenant_id, $fiscal_responsibility_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a fiscal responsibility

Deletes a fiscal responsibility identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_responsibility_id = 'fiscal_responsibility_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFiscalResponsibility($tenant_id, $fiscal_responsibility_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilitiesApi->deleteFiscalResponsibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_responsibility_id** | **string**|  | |
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

## `getFiscalResponsibilities()`

```php
getFiscalResponsibilities($fiscal_authority_id, $authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalResponsibilityDtoListEnvelope
```

Get fiscal responsibilities for an authority

Retrieves all fiscal responsibilities for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalResponsibilities($fiscal_authority_id, $authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilitiesApi->getFiscalResponsibilities: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\FiscalResponsibilityDtoListEnvelope**](../Model/FiscalResponsibilityDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalResponsibilitiesCount()`

```php
getFiscalResponsibilitiesCount($fiscal_authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get fiscal responsibilities count

Returns the total count of fiscal responsibilities for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalResponsibilitiesCount($fiscal_authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilitiesApi->getFiscalResponsibilitiesCount: ', $e->getMessage(), PHP_EOL;
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

## `getFiscalResponsibility()`

```php
getFiscalResponsibility($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalResponsibilityDtoEnvelope
```

Get fiscal responsibility by ID

Retrieves a specific fiscal responsibility by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$fiscal_responsibility_id = 'fiscal_responsibility_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalResponsibility($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilitiesApi->getFiscalResponsibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **fiscal_responsibility_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalResponsibilityDtoEnvelope**](../Model/FiscalResponsibilityDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFiscalResponsibility()`

```php
updateFiscalResponsibility($tenant_id, $fiscal_responsibility_id, $api_version, $x_api_version, $fiscal_responsibility_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a fiscal responsibility

Updates an existing fiscal responsibility identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_responsibility_id = 'fiscal_responsibility_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_responsibility_update_dto = new \OpenAPI\Client\Model\FiscalResponsibilityUpdateDto(); // \OpenAPI\Client\Model\FiscalResponsibilityUpdateDto

try {
    $result = $apiInstance->updateFiscalResponsibility($tenant_id, $fiscal_responsibility_id, $api_version, $x_api_version, $fiscal_responsibility_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilitiesApi->updateFiscalResponsibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_responsibility_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_responsibility_update_dto** | [**\OpenAPI\Client\Model\FiscalResponsibilityUpdateDto**](../Model/FiscalResponsibilityUpdateDto.md)|  | [optional] |

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
