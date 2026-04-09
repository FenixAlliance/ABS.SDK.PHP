# OpenAPI\Client\DepartmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTenantDepartment()**](DepartmentsApi.md#createTenantDepartment) | **POST** /api/v2/TenantsService/Departments | Create a new tenant department |
| [**deleteTenantDepartment()**](DepartmentsApi.md#deleteTenantDepartment) | **DELETE** /api/v2/TenantsService/Departments/{tenantDepartmentId} | Delete a tenant department |
| [**getTenantDepartmentById()**](DepartmentsApi.md#getTenantDepartmentById) | **GET** /api/v2/TenantsService/Departments/{tenantDepartmentId} | Retrieve a single tenant department by its ID |
| [**getTenantDepartments()**](DepartmentsApi.md#getTenantDepartments) | **GET** /api/v2/TenantsService/Departments | Retrieve a list of tenant departments |
| [**getTenantDepartmentsCount()**](DepartmentsApi.md#getTenantDepartmentsCount) | **GET** /api/v2/TenantsService/Departments/Count | Get the count of tenant departments |
| [**updateTenantDepartment()**](DepartmentsApi.md#updateTenantDepartment) | **PUT** /api/v2/TenantsService/Departments/{tenantDepartmentId} | Update a tenant department |


## `createTenantDepartment()`

```php
createTenantDepartment($tenant_id, $api_version, $x_api_version, $tenant_department_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new tenant department

Create a new tenant department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_department_create_dto = new \OpenAPI\Client\Model\TenantDepartmentCreateDto(); // \OpenAPI\Client\Model\TenantDepartmentCreateDto

try {
    $result = $apiInstance->createTenantDepartment($tenant_id, $api_version, $x_api_version, $tenant_department_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->createTenantDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_department_create_dto** | [**\OpenAPI\Client\Model\TenantDepartmentCreateDto**](../Model/TenantDepartmentCreateDto.md)|  | [optional] |

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

## `deleteTenantDepartment()`

```php
deleteTenantDepartment($tenant_id, $tenant_department_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tenant department

Delete a tenant department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_department_id = 'tenant_department_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTenantDepartment($tenant_id, $tenant_department_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->deleteTenantDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_department_id** | **string**|  | |
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

## `getTenantDepartmentById()`

```php
getTenantDepartmentById($tenant_id, $tenant_department_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantDepartmentDtoEnvelope
```

Retrieve a single tenant department by its ID

Retrieve a single tenant department by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_department_id = 'tenant_department_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantDepartmentById($tenant_id, $tenant_department_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getTenantDepartmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_department_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantDepartmentDtoEnvelope**](../Model/TenantDepartmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantDepartments()`

```php
getTenantDepartments($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantDepartmentDtoListEnvelope
```

Retrieve a list of tenant departments

Retrieve a list of tenant departments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantDepartments($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getTenantDepartments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantDepartmentDtoListEnvelope**](../Model/TenantDepartmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantDepartmentsCount()`

```php
getTenantDepartmentsCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of tenant departments

Get the count of tenant departments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantDepartmentsCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getTenantDepartmentsCount: ', $e->getMessage(), PHP_EOL;
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

## `updateTenantDepartment()`

```php
updateTenantDepartment($tenant_id, $tenant_department_id, $api_version, $x_api_version, $tenant_department_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tenant department

Update a tenant department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_department_id = 'tenant_department_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_department_update_dto = new \OpenAPI\Client\Model\TenantDepartmentUpdateDto(); // \OpenAPI\Client\Model\TenantDepartmentUpdateDto

try {
    $result = $apiInstance->updateTenantDepartment($tenant_id, $tenant_department_id, $api_version, $x_api_version, $tenant_department_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->updateTenantDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_department_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_department_update_dto** | [**\OpenAPI\Client\Model\TenantDepartmentUpdateDto**](../Model/TenantDepartmentUpdateDto.md)|  | [optional] |

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
