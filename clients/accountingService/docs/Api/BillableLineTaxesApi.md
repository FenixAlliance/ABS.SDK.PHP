# OpenAPI\Client\BillableLineTaxesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBillableLineTax()**](BillableLineTaxesApi.md#createBillableLineTax) | **POST** /api/v2/AccountingService/BillableLines/{billableLineId}/Taxes | Create a new tax for a billable line. |
| [**deleteBillableLineTax()**](BillableLineTaxesApi.md#deleteBillableLineTax) | **DELETE** /api/v2/AccountingService/BillableLines/{billableLineId}/Taxes/{taxId} | Delete a tax from a billable line. |
| [**getBillableLineTaxes()**](BillableLineTaxesApi.md#getBillableLineTaxes) | **GET** /api/v2/AccountingService/BillableLines/{billableLineId}/Taxes | Get taxes for a billable line. |
| [**getBillableLineTaxesCount()**](BillableLineTaxesApi.md#getBillableLineTaxesCount) | **GET** /api/v2/AccountingService/BillableLines/{billableLineId}/Taxes/Count | Get the count of taxes for a billable line. |
| [**updateBillableLineTax()**](BillableLineTaxesApi.md#updateBillableLineTax) | **PUT** /api/v2/AccountingService/BillableLines/{billableLineId}/Taxes/{taxId} | Update a tax for a billable line. |


## `createBillableLineTax()`

```php
createBillableLineTax($tenant_id, $billable_line_id, $api_version, $x_api_version, $applied_item_tax_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new tax for a billable line.

Creates a new tax entry for the specified billable line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillableLineTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$billable_line_id = 'billable_line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$applied_item_tax_record_create_dto = new \OpenAPI\Client\Model\AppliedItemTaxRecordCreateDto(); // \OpenAPI\Client\Model\AppliedItemTaxRecordCreateDto

try {
    $result = $apiInstance->createBillableLineTax($tenant_id, $billable_line_id, $api_version, $x_api_version, $applied_item_tax_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableLineTaxesApi->createBillableLineTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **billable_line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **applied_item_tax_record_create_dto** | [**\OpenAPI\Client\Model\AppliedItemTaxRecordCreateDto**](../Model/AppliedItemTaxRecordCreateDto.md)|  | [optional] |

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

## `deleteBillableLineTax()`

```php
deleteBillableLineTax($tenant_id, $billable_line_id, $tax_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tax from a billable line.

Deletes the specified tax entry from the billable line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillableLineTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$billable_line_id = 'billable_line_id_example'; // string
$tax_id = 'tax_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteBillableLineTax($tenant_id, $billable_line_id, $tax_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableLineTaxesApi->deleteBillableLineTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **billable_line_id** | **string**|  | |
| **tax_id** | **string**|  | |
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

## `getBillableLineTaxes()`

```php
getBillableLineTaxes($tenant_id, $billable_line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AppliedItemTaxRecordDtoIReadOnlyListEnvelope
```

Get taxes for a billable line.

Retrieves the taxes applied to the specified billable line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillableLineTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$billable_line_id = 'billable_line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillableLineTaxes($tenant_id, $billable_line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableLineTaxesApi->getBillableLineTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **billable_line_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppliedItemTaxRecordDtoIReadOnlyListEnvelope**](../Model/AppliedItemTaxRecordDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillableLineTaxesCount()`

```php
getBillableLineTaxesCount($tenant_id, $billable_line_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of taxes for a billable line.

Retrieves the total count of taxes applied to the specified billable line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillableLineTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$billable_line_id = 'billable_line_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBillableLineTaxesCount($tenant_id, $billable_line_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableLineTaxesApi->getBillableLineTaxesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **billable_line_id** | **string**|  | |
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

## `updateBillableLineTax()`

```php
updateBillableLineTax($tenant_id, $billable_line_id, $tax_id, $api_version, $x_api_version, $applied_item_tax_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tax for a billable line.

Updates the specified tax entry for the billable line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillableLineTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$billable_line_id = 'billable_line_id_example'; // string
$tax_id = 'tax_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$applied_item_tax_record_update_dto = new \OpenAPI\Client\Model\AppliedItemTaxRecordUpdateDto(); // \OpenAPI\Client\Model\AppliedItemTaxRecordUpdateDto

try {
    $result = $apiInstance->updateBillableLineTax($tenant_id, $billable_line_id, $tax_id, $api_version, $x_api_version, $applied_item_tax_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableLineTaxesApi->updateBillableLineTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **billable_line_id** | **string**|  | |
| **tax_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **applied_item_tax_record_update_dto** | [**\OpenAPI\Client\Model\AppliedItemTaxRecordUpdateDto**](../Model/AppliedItemTaxRecordUpdateDto.md)|  | [optional] |

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
