# OpenAPI\Client\TeamProjectEnrollmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTenantTeamProjectEnrollment()**](TeamProjectEnrollmentsApi.md#createTenantTeamProjectEnrollment) | **POST** /api/v2/TenantsService/TeamProjectEnrollments | Create a new tenant team project enrollment |
| [**deleteTenantTeamProjectEnrollment()**](TeamProjectEnrollmentsApi.md#deleteTenantTeamProjectEnrollment) | **DELETE** /api/v2/TenantsService/TeamProjectEnrollments/{tenantTeamProjectEnrollmentId} | Delete a tenant team project enrollment |
| [**getTenantTeamProjectEnrollmentById()**](TeamProjectEnrollmentsApi.md#getTenantTeamProjectEnrollmentById) | **GET** /api/v2/TenantsService/TeamProjectEnrollments/{tenantTeamProjectEnrollmentId} | Retrieve a single tenant team project enrollment by its ID |
| [**getTenantTeamProjectEnrollments()**](TeamProjectEnrollmentsApi.md#getTenantTeamProjectEnrollments) | **GET** /api/v2/TenantsService/TeamProjectEnrollments | Retrieve a list of tenant team project enrollments |
| [**getTenantTeamProjectEnrollmentsCount()**](TeamProjectEnrollmentsApi.md#getTenantTeamProjectEnrollmentsCount) | **GET** /api/v2/TenantsService/TeamProjectEnrollments/Count | Get the count of tenant team project enrollments |
| [**updateTenantTeamProjectEnrollment()**](TeamProjectEnrollmentsApi.md#updateTenantTeamProjectEnrollment) | **PUT** /api/v2/TenantsService/TeamProjectEnrollments/{tenantTeamProjectEnrollmentId} | Update a tenant team project enrollment |


## `createTenantTeamProjectEnrollment()`

```php
createTenantTeamProjectEnrollment($tenant_id, $api_version, $x_api_version, $tenant_team_project_enrollment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new tenant team project enrollment

Create a new tenant team project enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamProjectEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_team_project_enrollment_create_dto = new \OpenAPI\Client\Model\TenantTeamProjectEnrollmentCreateDto(); // \OpenAPI\Client\Model\TenantTeamProjectEnrollmentCreateDto

try {
    $result = $apiInstance->createTenantTeamProjectEnrollment($tenant_id, $api_version, $x_api_version, $tenant_team_project_enrollment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamProjectEnrollmentsApi->createTenantTeamProjectEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_team_project_enrollment_create_dto** | [**\OpenAPI\Client\Model\TenantTeamProjectEnrollmentCreateDto**](../Model/TenantTeamProjectEnrollmentCreateDto.md)|  | [optional] |

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

## `deleteTenantTeamProjectEnrollment()`

```php
deleteTenantTeamProjectEnrollment($tenant_id, $tenant_team_project_enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tenant team project enrollment

Delete a tenant team project enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamProjectEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_team_project_enrollment_id = 'tenant_team_project_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTenantTeamProjectEnrollment($tenant_id, $tenant_team_project_enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamProjectEnrollmentsApi->deleteTenantTeamProjectEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_team_project_enrollment_id** | **string**|  | |
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

## `getTenantTeamProjectEnrollmentById()`

```php
getTenantTeamProjectEnrollmentById($tenant_id, $tenant_team_project_enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantTeamProjectEnrollmentDtoEnvelope
```

Retrieve a single tenant team project enrollment by its ID

Retrieve a single tenant team project enrollment by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamProjectEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_team_project_enrollment_id = 'tenant_team_project_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantTeamProjectEnrollmentById($tenant_id, $tenant_team_project_enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamProjectEnrollmentsApi->getTenantTeamProjectEnrollmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_team_project_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantTeamProjectEnrollmentDtoEnvelope**](../Model/TenantTeamProjectEnrollmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantTeamProjectEnrollments()`

```php
getTenantTeamProjectEnrollments($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantTeamProjectEnrollmentDtoListEnvelope
```

Retrieve a list of tenant team project enrollments

Retrieve a list of tenant team project enrollments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamProjectEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantTeamProjectEnrollments($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamProjectEnrollmentsApi->getTenantTeamProjectEnrollments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantTeamProjectEnrollmentDtoListEnvelope**](../Model/TenantTeamProjectEnrollmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantTeamProjectEnrollmentsCount()`

```php
getTenantTeamProjectEnrollmentsCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of tenant team project enrollments

Get the count of tenant team project enrollments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamProjectEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantTeamProjectEnrollmentsCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamProjectEnrollmentsApi->getTenantTeamProjectEnrollmentsCount: ', $e->getMessage(), PHP_EOL;
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

## `updateTenantTeamProjectEnrollment()`

```php
updateTenantTeamProjectEnrollment($tenant_id, $tenant_team_project_enrollment_id, $api_version, $x_api_version, $tenant_team_project_enrollment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tenant team project enrollment

Update a tenant team project enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamProjectEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_team_project_enrollment_id = 'tenant_team_project_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_team_project_enrollment_update_dto = new \OpenAPI\Client\Model\TenantTeamProjectEnrollmentUpdateDto(); // \OpenAPI\Client\Model\TenantTeamProjectEnrollmentUpdateDto

try {
    $result = $apiInstance->updateTenantTeamProjectEnrollment($tenant_id, $tenant_team_project_enrollment_id, $api_version, $x_api_version, $tenant_team_project_enrollment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamProjectEnrollmentsApi->updateTenantTeamProjectEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_team_project_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_team_project_enrollment_update_dto** | [**\OpenAPI\Client\Model\TenantTeamProjectEnrollmentUpdateDto**](../Model/TenantTeamProjectEnrollmentUpdateDto.md)|  | [optional] |

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
