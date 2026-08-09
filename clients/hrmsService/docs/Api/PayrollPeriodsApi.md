# OpenAPI\Client\PayrollPeriodsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPayrollPeriodAsync()**](PayrollPeriodsApi.md#createPayrollPeriodAsync) | **POST** /api/v2/HrmsService/PayrollPeriods | Create a payroll period |
| [**deletePayrollPeriodAsync()**](PayrollPeriodsApi.md#deletePayrollPeriodAsync) | **DELETE** /api/v2/HrmsService/PayrollPeriods/{periodId} | Delete a payroll period |
| [**getPayrollPeriodByIdAsync()**](PayrollPeriodsApi.md#getPayrollPeriodByIdAsync) | **GET** /api/v2/HrmsService/PayrollPeriods/{periodId} | Get payroll period by ID |
| [**getPayrollPeriodsAsync()**](PayrollPeriodsApi.md#getPayrollPeriodsAsync) | **GET** /api/v2/HrmsService/PayrollPeriods | Get payroll periods |
| [**getPayrollPeriodsCountAsync()**](PayrollPeriodsApi.md#getPayrollPeriodsCountAsync) | **GET** /api/v2/HrmsService/PayrollPeriods/Count | Count payroll periods |
| [**updatePayrollPeriodAsync()**](PayrollPeriodsApi.md#updatePayrollPeriodAsync) | **PUT** /api/v2/HrmsService/PayrollPeriods/{periodId} | Update a payroll period |


## `createPayrollPeriodAsync()`

```php
createPayrollPeriodAsync($tenant_id, $api_version, $x_api_version, $payroll_period_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a payroll period

Creates a new payroll period for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_period_create_dto = new \OpenAPI\Client\Model\PayrollPeriodCreateDto(); // \OpenAPI\Client\Model\PayrollPeriodCreateDto

try {
    $result = $apiInstance->createPayrollPeriodAsync($tenant_id, $api_version, $x_api_version, $payroll_period_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPeriodsApi->createPayrollPeriodAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_period_create_dto** | [**\OpenAPI\Client\Model\PayrollPeriodCreateDto**](../Model/PayrollPeriodCreateDto.md)|  | [optional] |

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

## `deletePayrollPeriodAsync()`

```php
deletePayrollPeriodAsync($tenant_id, $period_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a payroll period

Deletes a payroll period for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$period_id = 'period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deletePayrollPeriodAsync($tenant_id, $period_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPeriodsApi->deletePayrollPeriodAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **period_id** | **string**|  | |
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

## `getPayrollPeriodByIdAsync()`

```php
getPayrollPeriodByIdAsync($tenant_id, $period_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PayrollPeriodDtoEnvelope
```

Get payroll period by ID

Retrieves a specific payroll period by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$period_id = 'period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPayrollPeriodByIdAsync($tenant_id, $period_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPeriodsApi->getPayrollPeriodByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **period_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollPeriodDtoEnvelope**](../Model/PayrollPeriodDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollPeriodsAsync()`

```php
getPayrollPeriodsAsync($tenant_id, $api_version, $x_api_version, $payroll_period_dto_collection_query_parameters): \OpenAPI\Client\Model\PayrollPeriodDtoListEnvelope
```

Get payroll periods

Retrieves payroll periods for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_period_dto_collection_query_parameters = new \OpenAPI\Client\Model\PayrollPeriodDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PayrollPeriodDtoCollectionQueryParameters

try {
    $result = $apiInstance->getPayrollPeriodsAsync($tenant_id, $api_version, $x_api_version, $payroll_period_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPeriodsApi->getPayrollPeriodsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_period_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PayrollPeriodDtoCollectionQueryParameters**](../Model/PayrollPeriodDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollPeriodDtoListEnvelope**](../Model/PayrollPeriodDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollPeriodsCountAsync()`

```php
getPayrollPeriodsCountAsync($tenant_id, $api_version, $x_api_version, $payroll_period_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count payroll periods

Counts payroll periods for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_period_dto_collection_query_parameters = new \OpenAPI\Client\Model\PayrollPeriodDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PayrollPeriodDtoCollectionQueryParameters

try {
    $result = $apiInstance->getPayrollPeriodsCountAsync($tenant_id, $api_version, $x_api_version, $payroll_period_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPeriodsApi->getPayrollPeriodsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_period_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PayrollPeriodDtoCollectionQueryParameters**](../Model/PayrollPeriodDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayrollPeriodAsync()`

```php
updatePayrollPeriodAsync($tenant_id, $period_id, $api_version, $x_api_version, $payroll_period_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a payroll period

Updates an existing payroll period for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$period_id = 'period_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_period_update_dto = new \OpenAPI\Client\Model\PayrollPeriodUpdateDto(); // \OpenAPI\Client\Model\PayrollPeriodUpdateDto

try {
    $result = $apiInstance->updatePayrollPeriodAsync($tenant_id, $period_id, $api_version, $x_api_version, $payroll_period_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPeriodsApi->updatePayrollPeriodAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **period_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_period_update_dto** | [**\OpenAPI\Client\Model\PayrollPeriodUpdateDto**](../Model/PayrollPeriodUpdateDto.md)|  | [optional] |

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
