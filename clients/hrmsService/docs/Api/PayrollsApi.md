# OpenAPI\Client\PayrollsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPayrollAsync()**](PayrollsApi.md#createPayrollAsync) | **POST** /api/v2/HrmsService/Payrolls | Create a payroll |
| [**deletePayrollAsync()**](PayrollsApi.md#deletePayrollAsync) | **DELETE** /api/v2/HrmsService/Payrolls/{payrollId} | Delete a payroll |
| [**getPayrollByIdAsync()**](PayrollsApi.md#getPayrollByIdAsync) | **GET** /api/v2/HrmsService/Payrolls/{payrollId} | Get payroll by ID |
| [**getPayrollsAsync()**](PayrollsApi.md#getPayrollsAsync) | **GET** /api/v2/HrmsService/Payrolls | Get payrolls |
| [**getPayrollsCountAsync()**](PayrollsApi.md#getPayrollsCountAsync) | **GET** /api/v2/HrmsService/Payrolls/Count | Count payrolls |
| [**patchPayrollAsync()**](PayrollsApi.md#patchPayrollAsync) | **PATCH** /api/v2/HrmsService/Payrolls/{payrollId} | Patch a payroll |
| [**updatePayrollAsync()**](PayrollsApi.md#updatePayrollAsync) | **PUT** /api/v2/HrmsService/Payrolls/{payrollId} | Update a payroll |


## `createPayrollAsync()`

```php
createPayrollAsync($tenant_id, $api_version, $x_api_version, $payroll_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a payroll

Creates a new payroll for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_create_dto = new \OpenAPI\Client\Model\PayrollCreateDto(); // \OpenAPI\Client\Model\PayrollCreateDto

try {
    $result = $apiInstance->createPayrollAsync($tenant_id, $api_version, $x_api_version, $payroll_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->createPayrollAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_create_dto** | [**\OpenAPI\Client\Model\PayrollCreateDto**](../Model/PayrollCreateDto.md)|  | [optional] |

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

## `deletePayrollAsync()`

```php
deletePayrollAsync($tenant_id, $payroll_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a payroll

Deletes a payroll for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payroll_id = 'payroll_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deletePayrollAsync($tenant_id, $payroll_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->deletePayrollAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payroll_id** | **string**|  | |
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

## `getPayrollByIdAsync()`

```php
getPayrollByIdAsync($tenant_id, $payroll_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PayrollDtoEnvelope
```

Get payroll by ID

Retrieves a specific payroll by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payroll_id = 'payroll_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPayrollByIdAsync($tenant_id, $payroll_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->getPayrollByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payroll_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollDtoEnvelope**](../Model/PayrollDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollsAsync()`

```php
getPayrollsAsync($tenant_id, $api_version, $x_api_version, $payroll_dto_collection_query_parameters): \OpenAPI\Client\Model\PayrollDtoListEnvelope
```

Get payrolls

Retrieves payrolls for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_dto_collection_query_parameters = new \OpenAPI\Client\Model\PayrollDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PayrollDtoCollectionQueryParameters

try {
    $result = $apiInstance->getPayrollsAsync($tenant_id, $api_version, $x_api_version, $payroll_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->getPayrollsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PayrollDtoCollectionQueryParameters**](../Model/PayrollDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollDtoListEnvelope**](../Model/PayrollDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollsCountAsync()`

```php
getPayrollsCountAsync($tenant_id, $api_version, $x_api_version, $payroll_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count payrolls

Counts payrolls for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_dto_collection_query_parameters = new \OpenAPI\Client\Model\PayrollDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PayrollDtoCollectionQueryParameters

try {
    $result = $apiInstance->getPayrollsCountAsync($tenant_id, $api_version, $x_api_version, $payroll_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->getPayrollsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PayrollDtoCollectionQueryParameters**](../Model/PayrollDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchPayrollAsync()`

```php
patchPayrollAsync($tenant_id, $payroll_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a payroll

Partially updates an existing payroll for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payroll_id = 'payroll_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchPayrollAsync($tenant_id, $payroll_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->patchPayrollAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payroll_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `updatePayrollAsync()`

```php
updatePayrollAsync($tenant_id, $payroll_id, $api_version, $x_api_version, $payroll_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a payroll

Updates an existing payroll for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$payroll_id = 'payroll_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payroll_update_dto = new \OpenAPI\Client\Model\PayrollUpdateDto(); // \OpenAPI\Client\Model\PayrollUpdateDto

try {
    $result = $apiInstance->updatePayrollAsync($tenant_id, $payroll_id, $api_version, $x_api_version, $payroll_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->updatePayrollAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **payroll_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payroll_update_dto** | [**\OpenAPI\Client\Model\PayrollUpdateDto**](../Model/PayrollUpdateDto.md)|  | [optional] |

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
