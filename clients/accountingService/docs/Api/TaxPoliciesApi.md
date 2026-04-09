# OpenAPI\Client\TaxPoliciesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppliedTaxPolicyRecord()**](TaxPoliciesApi.md#createAppliedTaxPolicyRecord) | **POST** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/AppliedTaxPolicyRecords | Create an applied tax policy record |
| [**createItemTaxPolicyRecord()**](TaxPoliciesApi.md#createItemTaxPolicyRecord) | **POST** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/ItemTaxPolicyRecords | Create an item tax policy record |
| [**createTaxPolicy()**](TaxPoliciesApi.md#createTaxPolicy) | **POST** /api/v2/AccountingService/TaxPolicies | Create a tax policy |
| [**deleteAppliedTaxPolicyRecord()**](TaxPoliciesApi.md#deleteAppliedTaxPolicyRecord) | **DELETE** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/AppliedTaxPolicyRecords/{appliedTaxPolicyRecordId} | Delete an applied tax policy record |
| [**deleteItemTaxPolicyRecord()**](TaxPoliciesApi.md#deleteItemTaxPolicyRecord) | **DELETE** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/ItemTaxPolicyRecords/{itemTaxPolicyRecordId} | Delete an item tax policy record |
| [**deleteTaxPolicy()**](TaxPoliciesApi.md#deleteTaxPolicy) | **DELETE** /api/v2/AccountingService/TaxPolicies/{id} | Delete a tax policy |
| [**getAppliedTaxPolicyRecord()**](TaxPoliciesApi.md#getAppliedTaxPolicyRecord) | **GET** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/AppliedTaxPolicyRecords/{appliedTaxPolicyRecordId} | Get applied tax policy record by ID |
| [**getAppliedTaxPolicyRecords()**](TaxPoliciesApi.md#getAppliedTaxPolicyRecords) | **GET** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/AppliedTaxPolicyRecords | Get applied tax policy records |
| [**getAppliedTaxPolicyRecordsCount()**](TaxPoliciesApi.md#getAppliedTaxPolicyRecordsCount) | **GET** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/AppliedTaxPolicyRecords/Count | Get applied tax policy records count |
| [**getItemTaxPolicyRecord()**](TaxPoliciesApi.md#getItemTaxPolicyRecord) | **GET** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/ItemTaxPolicyRecords/{itemTaxPolicyRecordId} | Get item tax policy record by ID |
| [**getItemTaxPolicyRecords()**](TaxPoliciesApi.md#getItemTaxPolicyRecords) | **GET** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/ItemTaxPolicyRecords | Get item tax policy records |
| [**getTaxPolicies()**](TaxPoliciesApi.md#getTaxPolicies) | **GET** /api/v2/AccountingService/TaxPolicies | Get all tax policies for a tenant |
| [**getTaxPoliciesByAuthority()**](TaxPoliciesApi.md#getTaxPoliciesByAuthority) | **GET** /api/v2/AccountingService/TaxPolicies/ByAuthority/{authorityId} | Get tax policies by fiscal authority |
| [**getTaxPoliciesCount()**](TaxPoliciesApi.md#getTaxPoliciesCount) | **GET** /api/v2/AccountingService/TaxPolicies/Count | Get tax policies count |
| [**getTaxPolicy()**](TaxPoliciesApi.md#getTaxPolicy) | **GET** /api/v2/AccountingService/TaxPolicies/{id} | Get tax policy by ID |
| [**updateAppliedTaxPolicyRecord()**](TaxPoliciesApi.md#updateAppliedTaxPolicyRecord) | **PUT** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/AppliedTaxPolicyRecords/{appliedTaxPolicyRecordId} | Update an applied tax policy record |
| [**updateItemTaxPolicyRecord()**](TaxPoliciesApi.md#updateItemTaxPolicyRecord) | **PUT** /api/v2/AccountingService/TaxPolicies/{taxPolicyId}/ItemTaxPolicyRecords/{itemTaxPolicyRecordId} | Update an item tax policy record |
| [**updateTaxPolicy()**](TaxPoliciesApi.md#updateTaxPolicy) | **PUT** /api/v2/AccountingService/TaxPolicies/{id} | Update a tax policy |


## `createAppliedTaxPolicyRecord()`

```php
createAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $api_version, $x_api_version, $applied_tax_policy_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an applied tax policy record

Creates a new applied tax policy record for the specified tax policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$applied_tax_policy_record_create_dto = new \OpenAPI\Client\Model\AppliedTaxPolicyRecordCreateDto(); // \OpenAPI\Client\Model\AppliedTaxPolicyRecordCreateDto

try {
    $result = $apiInstance->createAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $api_version, $x_api_version, $applied_tax_policy_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->createAppliedTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **applied_tax_policy_record_create_dto** | [**\OpenAPI\Client\Model\AppliedTaxPolicyRecordCreateDto**](../Model/AppliedTaxPolicyRecordCreateDto.md)|  | [optional] |

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

## `createItemTaxPolicyRecord()`

```php
createItemTaxPolicyRecord($tenant_id, $tax_policy_id, $api_version, $x_api_version, $item_tax_policy_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an item tax policy record

Creates a new item tax policy record for the specified tax policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_tax_policy_record_create_dto = new \OpenAPI\Client\Model\ItemTaxPolicyRecordCreateDto(); // \OpenAPI\Client\Model\ItemTaxPolicyRecordCreateDto

try {
    $result = $apiInstance->createItemTaxPolicyRecord($tenant_id, $tax_policy_id, $api_version, $x_api_version, $item_tax_policy_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->createItemTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_tax_policy_record_create_dto** | [**\OpenAPI\Client\Model\ItemTaxPolicyRecordCreateDto**](../Model/ItemTaxPolicyRecordCreateDto.md)|  | [optional] |

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

## `createTaxPolicy()`

```php
createTaxPolicy($tenant_id, $api_version, $x_api_version, $tax_policy_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a tax policy

Creates a new tax policy for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tax_policy_create_dto = new \OpenAPI\Client\Model\TaxPolicyCreateDto(); // \OpenAPI\Client\Model\TaxPolicyCreateDto

try {
    $result = $apiInstance->createTaxPolicy($tenant_id, $api_version, $x_api_version, $tax_policy_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->createTaxPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tax_policy_create_dto** | [**\OpenAPI\Client\Model\TaxPolicyCreateDto**](../Model/TaxPolicyCreateDto.md)|  | [optional] |

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

## `deleteAppliedTaxPolicyRecord()`

```php
deleteAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $applied_tax_policy_record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an applied tax policy record

Deletes an applied tax policy record identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$applied_tax_policy_record_id = 'applied_tax_policy_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $applied_tax_policy_record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->deleteAppliedTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **applied_tax_policy_record_id** | **string**|  | |
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

## `deleteItemTaxPolicyRecord()`

```php
deleteItemTaxPolicyRecord($tenant_id, $tax_policy_id, $item_tax_policy_record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an item tax policy record

Deletes an item tax policy record identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$item_tax_policy_record_id = 'item_tax_policy_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemTaxPolicyRecord($tenant_id, $tax_policy_id, $item_tax_policy_record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->deleteItemTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **item_tax_policy_record_id** | **string**|  | |
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

## `deleteTaxPolicy()`

```php
deleteTaxPolicy($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tax policy

Deletes a tax policy identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTaxPolicy($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->deleteTaxPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
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

## `getAppliedTaxPolicyRecord()`

```php
getAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $applied_tax_policy_record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AppliedTaxPolicyRecordDtoEnvelope
```

Get applied tax policy record by ID

Retrieves a specific applied tax policy record by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$applied_tax_policy_record_id = 'applied_tax_policy_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $applied_tax_policy_record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getAppliedTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **applied_tax_policy_record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppliedTaxPolicyRecordDtoEnvelope**](../Model/AppliedTaxPolicyRecordDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppliedTaxPolicyRecords()`

```php
getAppliedTaxPolicyRecords($tenant_id, $tax_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AppliedTaxPolicyRecordDtoListEnvelope
```

Get applied tax policy records

Retrieves all applied tax policy records for the specified tax policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAppliedTaxPolicyRecords($tenant_id, $tax_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getAppliedTaxPolicyRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppliedTaxPolicyRecordDtoListEnvelope**](../Model/AppliedTaxPolicyRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppliedTaxPolicyRecordsCount()`

```php
getAppliedTaxPolicyRecordsCount($tenant_id, $tax_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get applied tax policy records count

Returns the total count of applied tax policy records for the specified tax policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAppliedTaxPolicyRecordsCount($tenant_id, $tax_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getAppliedTaxPolicyRecordsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
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

## `getItemTaxPolicyRecord()`

```php
getItemTaxPolicyRecord($tenant_id, $tax_policy_id, $item_tax_policy_record_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTaxPolicyRecordDtoEnvelope
```

Get item tax policy record by ID

Retrieves a specific item tax policy record by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$item_tax_policy_record_id = 'item_tax_policy_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTaxPolicyRecord($tenant_id, $tax_policy_id, $item_tax_policy_record_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getItemTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **item_tax_policy_record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTaxPolicyRecordDtoEnvelope**](../Model/ItemTaxPolicyRecordDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemTaxPolicyRecords()`

```php
getItemTaxPolicyRecords($tenant_id, $tax_policy_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemTaxPolicyRecordDtoListEnvelope
```

Get item tax policy records

Retrieves all item tax policy records for the specified tax policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemTaxPolicyRecords($tenant_id, $tax_policy_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getItemTaxPolicyRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemTaxPolicyRecordDtoListEnvelope**](../Model/ItemTaxPolicyRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxPolicies()`

```php
getTaxPolicies($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaxPolicyDtoListEnvelope
```

Get all tax policies for a tenant

Retrieves all tax policies for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTaxPolicies($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getTaxPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaxPolicyDtoListEnvelope**](../Model/TaxPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxPoliciesByAuthority()`

```php
getTaxPoliciesByAuthority($tenant_id, $authority_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaxPolicyDtoListEnvelope
```

Get tax policies by fiscal authority

Retrieves all tax policies associated with the specified fiscal authority.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$authority_id = 'authority_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTaxPoliciesByAuthority($tenant_id, $authority_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getTaxPoliciesByAuthority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **authority_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaxPolicyDtoListEnvelope**](../Model/TaxPolicyDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxPoliciesCount()`

```php
getTaxPoliciesCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get tax policies count

Returns the count of tax policies for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTaxPoliciesCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getTaxPoliciesCount: ', $e->getMessage(), PHP_EOL;
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

## `getTaxPolicy()`

```php
getTaxPolicy($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\TaxPolicyDtoEnvelope
```

Get tax policy by ID

Retrieves a specific tax policy by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTaxPolicy($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->getTaxPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaxPolicyDtoEnvelope**](../Model/TaxPolicyDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppliedTaxPolicyRecord()`

```php
updateAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $applied_tax_policy_record_id, $api_version, $x_api_version, $applied_tax_policy_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an applied tax policy record

Updates an existing applied tax policy record identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$applied_tax_policy_record_id = 'applied_tax_policy_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$applied_tax_policy_record_update_dto = new \OpenAPI\Client\Model\AppliedTaxPolicyRecordUpdateDto(); // \OpenAPI\Client\Model\AppliedTaxPolicyRecordUpdateDto

try {
    $result = $apiInstance->updateAppliedTaxPolicyRecord($tenant_id, $tax_policy_id, $applied_tax_policy_record_id, $api_version, $x_api_version, $applied_tax_policy_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->updateAppliedTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **applied_tax_policy_record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **applied_tax_policy_record_update_dto** | [**\OpenAPI\Client\Model\AppliedTaxPolicyRecordUpdateDto**](../Model/AppliedTaxPolicyRecordUpdateDto.md)|  | [optional] |

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

## `updateItemTaxPolicyRecord()`

```php
updateItemTaxPolicyRecord($tenant_id, $tax_policy_id, $item_tax_policy_record_id, $api_version, $x_api_version, $item_tax_policy_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an item tax policy record

Updates an existing item tax policy record identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tax_policy_id = 'tax_policy_id_example'; // string
$item_tax_policy_record_id = 'item_tax_policy_record_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_tax_policy_record_update_dto = new \OpenAPI\Client\Model\ItemTaxPolicyRecordUpdateDto(); // \OpenAPI\Client\Model\ItemTaxPolicyRecordUpdateDto

try {
    $result = $apiInstance->updateItemTaxPolicyRecord($tenant_id, $tax_policy_id, $item_tax_policy_record_id, $api_version, $x_api_version, $item_tax_policy_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->updateItemTaxPolicyRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tax_policy_id** | **string**|  | |
| **item_tax_policy_record_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_tax_policy_record_update_dto** | [**\OpenAPI\Client\Model\ItemTaxPolicyRecordUpdateDto**](../Model/ItemTaxPolicyRecordUpdateDto.md)|  | [optional] |

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

## `updateTaxPolicy()`

```php
updateTaxPolicy($tenant_id, $id, $api_version, $x_api_version, $tax_policy_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tax policy

Updates an existing tax policy identified by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tax_policy_update_dto = new \OpenAPI\Client\Model\TaxPolicyUpdateDto(); // \OpenAPI\Client\Model\TaxPolicyUpdateDto

try {
    $result = $apiInstance->updateTaxPolicy($tenant_id, $id, $api_version, $x_api_version, $tax_policy_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxPoliciesApi->updateTaxPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tax_policy_update_dto** | [**\OpenAPI\Client\Model\TaxPolicyUpdateDto**](../Model/TaxPolicyUpdateDto.md)|  | [optional] |

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
