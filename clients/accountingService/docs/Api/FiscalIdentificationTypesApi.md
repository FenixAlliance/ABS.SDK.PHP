# OpenAPI\Client\FiscalIdentificationTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFiscalIdentificationType()**](FiscalIdentificationTypesApi.md#createFiscalIdentificationType) | **POST** /api/v2/AccountingService/Fiscals/Authorities/IdentificationTypes | Create a fiscal identification type |
| [**deleteFiscalIdentificationType()**](FiscalIdentificationTypesApi.md#deleteFiscalIdentificationType) | **DELETE** /api/v2/AccountingService/Fiscals/Authorities/IdentificationTypes/{identificationTypeId} | Delete a fiscal identification type |
| [**getFiscalIdentificationType()**](FiscalIdentificationTypesApi.md#getFiscalIdentificationType) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/IdentificationTypes/{identificationTypeId} | Get fiscal identification type by ID |
| [**getFiscalIdentificationTypes()**](FiscalIdentificationTypesApi.md#getFiscalIdentificationTypes) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{authorityId}/IdentificationTypes | Get fiscal identification types for an authority |
| [**getFiscalIdentificationTypesCount()**](FiscalIdentificationTypesApi.md#getFiscalIdentificationTypesCount) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{authorityId}/IdentificationTypes/Count | Get fiscal identification types count |
| [**updateFiscalIdentificationType()**](FiscalIdentificationTypesApi.md#updateFiscalIdentificationType) | **PUT** /api/v2/AccountingService/Fiscals/Authorities/IdentificationTypes/{identificationTypeId} | Update a fiscal identification type |


## `createFiscalIdentificationType()`

```php
createFiscalIdentificationType($tenant_id, $api_version, $x_api_version, $fiscal_identification_type_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a fiscal identification type

Creates a new fiscal identification type for a fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalIdentificationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_identification_type_create_dto = new \OpenAPI\Client\Model\FiscalIdentificationTypeCreateDto(); // \OpenAPI\Client\Model\FiscalIdentificationTypeCreateDto

try {
    $result = $apiInstance->createFiscalIdentificationType($tenant_id, $api_version, $x_api_version, $fiscal_identification_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalIdentificationTypesApi->createFiscalIdentificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_identification_type_create_dto** | [**\OpenAPI\Client\Model\FiscalIdentificationTypeCreateDto**](../Model/FiscalIdentificationTypeCreateDto.md)|  | [optional] |

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

## `deleteFiscalIdentificationType()`

```php
deleteFiscalIdentificationType($tenant_id, $identification_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a fiscal identification type

Deletes a fiscal identification type identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalIdentificationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$identification_type_id = 'identification_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFiscalIdentificationType($tenant_id, $identification_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalIdentificationTypesApi->deleteFiscalIdentificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **identification_type_id** | **string**|  | |
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

## `getFiscalIdentificationType()`

```php
getFiscalIdentificationType($tenant_id, $fiscal_authority_id, $identification_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalIdentificationTypeDtoEnvelope
```

Get fiscal identification type by ID

Retrieves a specific fiscal identification type by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalIdentificationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$identification_type_id = 'identification_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalIdentificationType($tenant_id, $fiscal_authority_id, $identification_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalIdentificationTypesApi->getFiscalIdentificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **identification_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalIdentificationTypeDtoEnvelope**](../Model/FiscalIdentificationTypeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalIdentificationTypes()`

```php
getFiscalIdentificationTypes($authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalIdentificationTypeDtoListEnvelope
```

Get fiscal identification types for an authority

Retrieves all fiscal identification types for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalIdentificationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalIdentificationTypes($authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalIdentificationTypesApi->getFiscalIdentificationTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authority_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalIdentificationTypeDtoListEnvelope**](../Model/FiscalIdentificationTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalIdentificationTypesCount()`

```php
getFiscalIdentificationTypesCount($authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get fiscal identification types count

Returns the total count of fiscal identification types for the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalIdentificationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalIdentificationTypesCount($authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalIdentificationTypesApi->getFiscalIdentificationTypesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authority_id** | **string**|  | |
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

## `updateFiscalIdentificationType()`

```php
updateFiscalIdentificationType($tenant_id, $identification_type_id, $api_version, $x_api_version, $fiscal_identification_type_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a fiscal identification type

Updates an existing fiscal identification type identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalIdentificationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$identification_type_id = 'identification_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_identification_type_update_dto = new \OpenAPI\Client\Model\FiscalIdentificationTypeUpdateDto(); // \OpenAPI\Client\Model\FiscalIdentificationTypeUpdateDto

try {
    $result = $apiInstance->updateFiscalIdentificationType($tenant_id, $identification_type_id, $api_version, $x_api_version, $fiscal_identification_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalIdentificationTypesApi->updateFiscalIdentificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **identification_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_identification_type_update_dto** | [**\OpenAPI\Client\Model\FiscalIdentificationTypeUpdateDto**](../Model/FiscalIdentificationTypeUpdateDto.md)|  | [optional] |

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
