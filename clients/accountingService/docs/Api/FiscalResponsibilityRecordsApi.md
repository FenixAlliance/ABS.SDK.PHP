# OpenAPI\Client\FiscalResponsibilityRecordsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFiscalResponsibilityRecord()**](FiscalResponsibilityRecordsApi.md#createFiscalResponsibilityRecord) | **POST** /api/v2/AccountingService/Fiscals/Authorities/FiscalResponsibilityRecords | Create a fiscal responsibility record |
| [**deleteFiscalResponsibilityRecord()**](FiscalResponsibilityRecordsApi.md#deleteFiscalResponsibilityRecord) | **DELETE** /api/v2/AccountingService/Fiscals/Authorities/FiscalResponsibilityRecords/{fiscalResponsibilityRecordId} | Delete a fiscal responsibility record |
| [**getFiscalResponsibilityRecord()**](FiscalResponsibilityRecordsApi.md#getFiscalResponsibilityRecord) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalResponsibilities/{fiscalResponsibilityId}/FiscalResponsibilityRecords/{fiscalResponsibilityRecordId} | Get fiscal responsibility record by ID |
| [**getFiscalResponsibilityRecords()**](FiscalResponsibilityRecordsApi.md#getFiscalResponsibilityRecords) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalResponsibilities/{fiscalResponsibilityId}/FiscalResponsibilityRecords | Get fiscal responsibility records |
| [**getFiscalResponsibilityRecordsCount()**](FiscalResponsibilityRecordsApi.md#getFiscalResponsibilityRecordsCount) | **GET** /api/v2/AccountingService/Fiscals/Authorities/{fiscalAuthorityId}/FiscalResponsibilities/{fiscalResponsibilityId}/FiscalResponsibilityRecords/Count | Get fiscal responsibility records count |
| [**updateFiscalResponsibilityRecord()**](FiscalResponsibilityRecordsApi.md#updateFiscalResponsibilityRecord) | **PUT** /api/v2/AccountingService/Fiscals/Authorities/FiscalResponsibilityRecords/{fiscalResponsibilityRecordId} | Update a fiscal responsibility record |


## `createFiscalResponsibilityRecord()`

```php
createFiscalResponsibilityRecord($tenant_id, $api_version, $x_api_version, $fiscal_responsibility_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a fiscal responsibility record

Creates a new fiscal responsibility record for a fiscal responsibility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilityRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_responsibility_record_create_dto = new \OpenAPI\Client\Model\FiscalResponsibilityRecordCreateDto(); // \OpenAPI\Client\Model\FiscalResponsibilityRecordCreateDto

try {
    $result = $apiInstance->createFiscalResponsibilityRecord($tenant_id, $api_version, $x_api_version, $fiscal_responsibility_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilityRecordsApi->createFiscalResponsibilityRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_responsibility_record_create_dto** | [**\OpenAPI\Client\Model\FiscalResponsibilityRecordCreateDto**](../Model/FiscalResponsibilityRecordCreateDto.md)|  | [optional] |

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

## `deleteFiscalResponsibilityRecord()`

```php
deleteFiscalResponsibilityRecord($tenant_id, $fiscal_responsibility_record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a fiscal responsibility record

Deletes a fiscal responsibility record identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilityRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_responsibility_record_id = 'fiscal_responsibility_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteFiscalResponsibilityRecord($tenant_id, $fiscal_responsibility_record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilityRecordsApi->deleteFiscalResponsibilityRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_responsibility_record_id** | **string**|  | |
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

## `getFiscalResponsibilityRecord()`

```php
getFiscalResponsibilityRecord($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $fiscal_responsibility_record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalResponsibilityRecordDtoEnvelope
```

Get fiscal responsibility record by ID

Retrieves a specific fiscal responsibility record by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilityRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_authority_id = 'fiscal_authority_id_example'; // string
$fiscal_responsibility_id = 'fiscal_responsibility_id_example'; // string
$fiscal_responsibility_record_id = 'fiscal_responsibility_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getFiscalResponsibilityRecord($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $fiscal_responsibility_record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilityRecordsApi->getFiscalResponsibilityRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_authority_id** | **string**|  | |
| **fiscal_responsibility_id** | **string**|  | |
| **fiscal_responsibility_record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FiscalResponsibilityRecordDtoEnvelope**](../Model/FiscalResponsibilityRecordDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalResponsibilityRecords()`

```php
getFiscalResponsibilityRecords($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $api_version, $x_api_version): \OpenAPI\Client\Model\FiscalResponsibilityRecordDtoListEnvelope
```

Get fiscal responsibility records

Retrieves all fiscal responsibility records for the specified fiscal responsibility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilityRecordsApi(
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
    $result = $apiInstance->getFiscalResponsibilityRecords($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilityRecordsApi->getFiscalResponsibilityRecords: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\FiscalResponsibilityRecordDtoListEnvelope**](../Model/FiscalResponsibilityRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiscalResponsibilityRecordsCount()`

```php
getFiscalResponsibilityRecordsCount($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get fiscal responsibility records count

Returns the total count of fiscal responsibility records for the specified fiscal responsibility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilityRecordsApi(
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
    $result = $apiInstance->getFiscalResponsibilityRecordsCount($tenant_id, $fiscal_authority_id, $fiscal_responsibility_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilityRecordsApi->getFiscalResponsibilityRecordsCount: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFiscalResponsibilityRecord()`

```php
updateFiscalResponsibilityRecord($tenant_id, $fiscal_responsibility_record_id, $api_version, $x_api_version, $fiscal_responsibility_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a fiscal responsibility record

Updates an existing fiscal responsibility record identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalResponsibilityRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = array('key' => new \stdClass); // object
$fiscal_responsibility_record_id = 'fiscal_responsibility_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$fiscal_responsibility_record_update_dto = new \OpenAPI\Client\Model\FiscalResponsibilityRecordUpdateDto(); // \OpenAPI\Client\Model\FiscalResponsibilityRecordUpdateDto

try {
    $result = $apiInstance->updateFiscalResponsibilityRecord($tenant_id, $fiscal_responsibility_record_id, $api_version, $x_api_version, $fiscal_responsibility_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalResponsibilityRecordsApi->updateFiscalResponsibilityRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | [**object**](../Model/.md)|  | |
| **fiscal_responsibility_record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **fiscal_responsibility_record_update_dto** | [**\OpenAPI\Client\Model\FiscalResponsibilityRecordUpdateDto**](../Model/FiscalResponsibilityRecordUpdateDto.md)|  | [optional] |

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
