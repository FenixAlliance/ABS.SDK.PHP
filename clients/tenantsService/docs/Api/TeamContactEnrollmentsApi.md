# OpenAPI\Client\TeamContactEnrollmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTenantTeamContactEnrollment()**](TeamContactEnrollmentsApi.md#createTenantTeamContactEnrollment) | **POST** /api/v2/TenantsService/TeamContactEnrollments | Create a new tenant team contact enrollment |
| [**deleteTenantTeamContactEnrollment()**](TeamContactEnrollmentsApi.md#deleteTenantTeamContactEnrollment) | **DELETE** /api/v2/TenantsService/TeamContactEnrollments/{tenantTeamContactEnrollmentId} | Delete a tenant team contact enrollment |
| [**getTenantTeamContactEnrollmentById()**](TeamContactEnrollmentsApi.md#getTenantTeamContactEnrollmentById) | **GET** /api/v2/TenantsService/TeamContactEnrollments/{tenantTeamContactEnrollmentId} | Retrieve a single tenant team contact enrollment by its ID |
| [**getTenantTeamContactEnrollments()**](TeamContactEnrollmentsApi.md#getTenantTeamContactEnrollments) | **GET** /api/v2/TenantsService/TeamContactEnrollments | Retrieve a list of tenant team contact enrollments |
| [**getTenantTeamContactEnrollmentsCount()**](TeamContactEnrollmentsApi.md#getTenantTeamContactEnrollmentsCount) | **GET** /api/v2/TenantsService/TeamContactEnrollments/Count | Get the count of tenant team contact enrollments |
| [**updateTenantTeamContactEnrollment()**](TeamContactEnrollmentsApi.md#updateTenantTeamContactEnrollment) | **PUT** /api/v2/TenantsService/TeamContactEnrollments/{tenantTeamContactEnrollmentId} | Update a tenant team contact enrollment |


## `createTenantTeamContactEnrollment()`

```php
createTenantTeamContactEnrollment($tenant_id, $api_version, $x_api_version, $tenant_team_contact_enrollment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new tenant team contact enrollment

Create a new tenant team contact enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamContactEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_team_contact_enrollment_create_dto = new \OpenAPI\Client\Model\TenantTeamContactEnrollmentCreateDto(); // \OpenAPI\Client\Model\TenantTeamContactEnrollmentCreateDto

try {
    $result = $apiInstance->createTenantTeamContactEnrollment($tenant_id, $api_version, $x_api_version, $tenant_team_contact_enrollment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamContactEnrollmentsApi->createTenantTeamContactEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_team_contact_enrollment_create_dto** | [**\OpenAPI\Client\Model\TenantTeamContactEnrollmentCreateDto**](../Model/TenantTeamContactEnrollmentCreateDto.md)|  | [optional] |

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

## `deleteTenantTeamContactEnrollment()`

```php
deleteTenantTeamContactEnrollment($tenant_id, $tenant_team_contact_enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tenant team contact enrollment

Delete a tenant team contact enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamContactEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_team_contact_enrollment_id = 'tenant_team_contact_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTenantTeamContactEnrollment($tenant_id, $tenant_team_contact_enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamContactEnrollmentsApi->deleteTenantTeamContactEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_team_contact_enrollment_id** | **string**|  | |
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

## `getTenantTeamContactEnrollmentById()`

```php
getTenantTeamContactEnrollmentById($tenant_id, $tenant_team_contact_enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantTeamContactEnrollmentDtoEnvelope
```

Retrieve a single tenant team contact enrollment by its ID

Retrieve a single tenant team contact enrollment by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamContactEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_team_contact_enrollment_id = 'tenant_team_contact_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantTeamContactEnrollmentById($tenant_id, $tenant_team_contact_enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamContactEnrollmentsApi->getTenantTeamContactEnrollmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_team_contact_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantTeamContactEnrollmentDtoEnvelope**](../Model/TenantTeamContactEnrollmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantTeamContactEnrollments()`

```php
getTenantTeamContactEnrollments($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantTeamContactEnrollmentDtoListEnvelope
```

Retrieve a list of tenant team contact enrollments

Retrieve a list of tenant team contact enrollments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamContactEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantTeamContactEnrollments($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamContactEnrollmentsApi->getTenantTeamContactEnrollments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantTeamContactEnrollmentDtoListEnvelope**](../Model/TenantTeamContactEnrollmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantTeamContactEnrollmentsCount()`

```php
getTenantTeamContactEnrollmentsCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of tenant team contact enrollments

Get the count of tenant team contact enrollments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamContactEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantTeamContactEnrollmentsCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamContactEnrollmentsApi->getTenantTeamContactEnrollmentsCount: ', $e->getMessage(), PHP_EOL;
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

## `updateTenantTeamContactEnrollment()`

```php
updateTenantTeamContactEnrollment($tenant_id, $tenant_team_contact_enrollment_id, $api_version, $x_api_version, $tenant_team_contact_enrollment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tenant team contact enrollment

Update a tenant team contact enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TeamContactEnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$tenant_team_contact_enrollment_id = 'tenant_team_contact_enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_team_contact_enrollment_update_dto = new \OpenAPI\Client\Model\TenantTeamContactEnrollmentUpdateDto(); // \OpenAPI\Client\Model\TenantTeamContactEnrollmentUpdateDto

try {
    $result = $apiInstance->updateTenantTeamContactEnrollment($tenant_id, $tenant_team_contact_enrollment_id, $api_version, $x_api_version, $tenant_team_contact_enrollment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamContactEnrollmentsApi->updateTenantTeamContactEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **tenant_team_contact_enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_team_contact_enrollment_update_dto** | [**\OpenAPI\Client\Model\TenantTeamContactEnrollmentUpdateDto**](../Model/TenantTeamContactEnrollmentUpdateDto.md)|  | [optional] |

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
