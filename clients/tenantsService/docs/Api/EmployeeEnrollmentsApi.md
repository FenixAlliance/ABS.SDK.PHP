# OpenAPI\Client\EmployeeEnrollmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTenantEmployeeEnrollment()**](EmployeeEnrollmentsApi.md#createTenantEmployeeEnrollment) | **POST** /api/v2/TenantsService/EmployeeEnrollments | Create a new tenant employee enrollment |
| [**deleteTenantEmployeeEnrollment()**](EmployeeEnrollmentsApi.md#deleteTenantEmployeeEnrollment) | **DELETE** /api/v2/TenantsService/EmployeeEnrollments/{tenantEmployeeEnrollmentId} | Delete a tenant employee enrollment |
| [**getTenantEmployeeEnrollmentById()**](EmployeeEnrollmentsApi.md#getTenantEmployeeEnrollmentById) | **GET** /api/v2/TenantsService/EmployeeEnrollments/{tenantEmployeeEnrollmentId} | Retrieve a single tenant employee enrollment by its ID |
| [**getTenantEmployeeEnrollments()**](EmployeeEnrollmentsApi.md#getTenantEmployeeEnrollments) | **GET** /api/v2/TenantsService/EmployeeEnrollments | Retrieve a list of tenant employee enrollments |
| [**getTenantEmployeeEnrollmentsCount()**](EmployeeEnrollmentsApi.md#getTenantEmployeeEnrollmentsCount) | **GET** /api/v2/TenantsService/EmployeeEnrollments/Count | Get the count of tenant employee enrollments |
| [**updateTenantEmployeeEnrollment()**](EmployeeEnrollmentsApi.md#updateTenantEmployeeEnrollment) | **PUT** /api/v2/TenantsService/EmployeeEnrollments/{tenantEmployeeEnrollmentId} | Update a tenant employee enrollment |


## `createTenantEmployeeEnrollment()`

```php
createTenantEmployeeEnrollment($tenant_id, $api_version, $x_api_version, $tenant_team_employee_enrollment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new tenant employee enrollment

Create a new tenant employee enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_team_employee_enrollment_create_dto = new \OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentCreateDto(); // \OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentCreateDto

try {
    $result = $apiInstance->createTenantEmployeeEnrollment($tenant_id, $api_version, $x_api_version, $tenant_team_employee_enrollment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeEnrollmentsApi->createTenantEmployeeEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_team_employee_enrollment_create_dto** | [**\OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentCreateDto**](../Model/TenantTeamEmployeeEnrollmentCreateDto.md)|  | [optional] |

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

## `deleteTenantEmployeeEnrollment()`

```php
deleteTenantEmployeeEnrollment($tenant_id, $tenant_employee_enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tenant employee enrollment

Delete a tenant employee enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_employee_enrollment_id = 'tenant_employee_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTenantEmployeeEnrollment($tenant_id, $tenant_employee_enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeEnrollmentsApi->deleteTenantEmployeeEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_employee_enrollment_id** | **string**|  | |
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

## `getTenantEmployeeEnrollmentById()`

```php
getTenantEmployeeEnrollmentById($tenant_id, $tenant_employee_enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentDtoEnvelope
```

Retrieve a single tenant employee enrollment by its ID

Retrieve a single tenant employee enrollment by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_employee_enrollment_id = 'tenant_employee_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantEmployeeEnrollmentById($tenant_id, $tenant_employee_enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeEnrollmentsApi->getTenantEmployeeEnrollmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_employee_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentDtoEnvelope**](../Model/TenantTeamEmployeeEnrollmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantEmployeeEnrollments()`

```php
getTenantEmployeeEnrollments($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentDtoListEnvelope
```

Retrieve a list of tenant employee enrollments

Retrieve a list of tenant employee enrollments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantEmployeeEnrollments($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeEnrollmentsApi->getTenantEmployeeEnrollments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentDtoListEnvelope**](../Model/TenantTeamEmployeeEnrollmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantEmployeeEnrollmentsCount()`

```php
getTenantEmployeeEnrollmentsCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of tenant employee enrollments

Get the count of tenant employee enrollments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantEmployeeEnrollmentsCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeEnrollmentsApi->getTenantEmployeeEnrollmentsCount: ', $e->getMessage(), PHP_EOL;
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

## `updateTenantEmployeeEnrollment()`

```php
updateTenantEmployeeEnrollment($tenant_id, $tenant_employee_enrollment_id, $api_version, $x_api_version, $tenant_team_employee_enrollment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tenant employee enrollment

Update a tenant employee enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_employee_enrollment_id = 'tenant_employee_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_team_employee_enrollment_update_dto = new \OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentUpdateDto(); // \OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentUpdateDto

try {
    $result = $apiInstance->updateTenantEmployeeEnrollment($tenant_id, $tenant_employee_enrollment_id, $api_version, $x_api_version, $tenant_team_employee_enrollment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeEnrollmentsApi->updateTenantEmployeeEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_employee_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_team_employee_enrollment_update_dto** | [**\OpenAPI\Client\Model\TenantTeamEmployeeEnrollmentUpdateDto**](../Model/TenantTeamEmployeeEnrollmentUpdateDto.md)|  | [optional] |

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
