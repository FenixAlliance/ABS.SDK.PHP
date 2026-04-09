# OpenAPI\Client\TenantsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignLicenseAsync()**](TenantsApi.md#assignLicenseAsync) | **POST** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Licenses/{licenseId} | Assign a license to a specific enrollment |
| [**createTenantAsync()**](TenantsApi.md#createTenantAsync) | **POST** /api/v2/TenantsService/Tenants | Create a new business tenant |
| [**deSelectTenantAsync()**](TenantsApi.md#deSelectTenantAsync) | **POST** /api/v2/TenantsService/Tenants/Deselect | Deselect the user&#39;s default tenant |
| [**deleteTenantAsync()**](TenantsApi.md#deleteTenantAsync) | **DELETE** /api/v2/TenantsService/Tenants | Delete a tenant |
| [**getAccessibleFeaturesAsync()**](TenantsApi.md#getAccessibleFeaturesAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Features | Get the list of features accessible to a specific enrollment |
| [**getCurrentTenantAsync()**](TenantsApi.md#getCurrentTenantAsync) | **GET** /api/v2/TenantsService/Tenants/Current | Get the user&#39;s current default tenant |
| [**getEnrollmentLicenseByIdAsync()**](TenantsApi.md#getEnrollmentLicenseByIdAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Licenses/{licenseId} | Get a specific license for an enrollment |
| [**getEnrollmentLicensesAsync()**](TenantsApi.md#getEnrollmentLicensesAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Licenses | Get the list of licenses available to a specific enrollment |
| [**getEnrollmentPermissionsAsync()**](TenantsApi.md#getEnrollmentPermissionsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Permissions | Get a specific tenant enrollment&#39;s permissions list |
| [**getExtendedTenantAsync()**](TenantsApi.md#getExtendedTenantAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Extended | Get an extended tenant&#39;s business profile |
| [**getExtendedTenantEnrollmentAsync()**](TenantsApi.md#getExtendedTenantEnrollmentAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Extended | Get a specific tenant enrollment |
| [**getRootTenantAsync()**](TenantsApi.md#getRootTenantAsync) | **GET** /api/v2/TenantsService/Tenants/Root | Get the root tenant of the platform |
| [**getTenantAsync()**](TenantsApi.md#getTenantAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId} | Get a specific tenant by ID |
| [**getTenantAvatarAsync()**](TenantsApi.md#getTenantAvatarAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Avatar | Get a tenant&#39;s avatar |
| [**getTenantCartAsync()**](TenantsApi.md#getTenantCartAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Cart | Get a tenant&#39;s default cart |
| [**getTenantEnrollmentAsync()**](TenantsApi.md#getTenantEnrollmentAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId} | Get a specific tenant enrollment |
| [**getTenantEnrollmentsAsync()**](TenantsApi.md#getTenantEnrollmentsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments | Get the list of user enrollments for a tenant |
| [**getTenantInvitationsAsync()**](TenantsApi.md#getTenantInvitationsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Invitations | Get the list of invitations issued by a tenant |
| [**getTenantLicensesAsync()**](TenantsApi.md#getTenantLicensesAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Licenses | Get the list of licenses available to a tenant |
| [**getTenantNotificationsAsync()**](TenantsApi.md#getTenantNotificationsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Notifications | Get the list of notifications for a tenant |
| [**getTenantNotificationsCountAsync()**](TenantsApi.md#getTenantNotificationsCountAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Notifications/Count | Get the count of notifications for a tenant |
| [**getTenantPendingInvitationsAsync()**](TenantsApi.md#getTenantPendingInvitationsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Invitations/Pending | Get the list of invitations issued by a tenant that are pending |
| [**getTenantRedeemedInvitationsAsync()**](TenantsApi.md#getTenantRedeemedInvitationsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Invitations/Redeemed | Get the list of invitations issued by a tenant that have been redeemed |
| [**getTenantRevokedInvitationsAsync()**](TenantsApi.md#getTenantRevokedInvitationsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Invitations/Revoked | Get the list of invitations issued by a tenant that have been revoked |
| [**getTenantSocialProfileAsync()**](TenantsApi.md#getTenantSocialProfileAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/SocialProfile | Get a tenant&#39;s social profile |
| [**getTenantUsersAsync()**](TenantsApi.md#getTenantUsersAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Users | Get the list of users enrolled in a tenant |
| [**getTenantWalletAsync()**](TenantsApi.md#getTenantWalletAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Wallet | Get a tenant&#39;s billing profile (A.K.A. Wallet Account) |
| [**getTenantWebPortalsAsync()**](TenantsApi.md#getTenantWebPortalsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/WebPortals | Get the list of web portals for a tenant |
| [**patchTenantAsync()**](TenantsApi.md#patchTenantAsync) | **PATCH** /api/v2/TenantsService/Tenants/{tenantId} | Patch a tenant&#39;s profile |
| [**revokeLicenseAsync()**](TenantsApi.md#revokeLicenseAsync) | **DELETE** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Licenses/{licenseId} | Revoke a license from a specific enrollment |
| [**selectTenantAsync()**](TenantsApi.md#selectTenantAsync) | **POST** /api/v2/TenantsService/Tenants/{tenantId}/Select | Select a business tenant as the user&#39;s default tenant |
| [**updateAvatarAsync()**](TenantsApi.md#updateAvatarAsync) | **POST** /api/v2/TenantsService/Tenants/{tenantId}/Avatar | Update a tenant&#39;s avatar |
| [**updateTenantAsync()**](TenantsApi.md#updateTenantAsync) | **PUT** /api/v2/TenantsService/Tenants/{tenantId} | Update a tenant&#39;s profile |
| [**validateEnrollmentFeatureAccess()**](TenantsApi.md#validateEnrollmentFeatureAccess) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/HasAccess | Validate the access to a specific feature for a specific enrollment |
| [**validateEnrollmentPermissionsAsync()**](TenantsApi.md#validateEnrollmentPermissionsAsync) | **GET** /api/v2/TenantsService/Tenants/{tenantId}/Enrollments/{enrollmentId}/Permissions/Validate | Validate the existence of a list of roles and permissions for a specific enrollment |


## `assignLicenseAsync()`

```php
assignLicenseAsync($tenant_id, $enrollment_id, $license_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope
```

Assign a license to a specific enrollment

Assign a license to a specific enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$license_id = 'license_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->assignLicenseAsync($tenant_id, $enrollment_id, $license_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->assignLicenseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **license_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope**](../Model/SuiteLicenseDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTenantAsync()`

```php
createTenantAsync($api_version, $x_api_version, $tenant_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new business tenant

Create a new business tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_create_dto = new \OpenAPI\Client\Model\TenantCreateDto(); // \OpenAPI\Client\Model\TenantCreateDto

try {
    $result = $apiInstance->createTenantAsync($api_version, $x_api_version, $tenant_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->createTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_create_dto** | [**\OpenAPI\Client\Model\TenantCreateDto**](../Model/TenantCreateDto.md)|  | [optional] |

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

## `deSelectTenantAsync()`

```php
deSelectTenantAsync($api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Deselect the user's default tenant

Deselect the user's default tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deSelectTenantAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->deSelectTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `deleteTenantAsync()`

```php
deleteTenantAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tenant

Delete a business tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTenantAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->deleteTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `getAccessibleFeaturesAsync()`

```php
getAccessibleFeaturesAsync($tenant_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SuiteLicenseFeatureDtoListEnvelope
```

Get the list of features accessible to a specific enrollment

Get the list of features accessible to a specific enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccessibleFeaturesAsync($tenant_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getAccessibleFeaturesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuiteLicenseFeatureDtoListEnvelope**](../Model/SuiteLicenseFeatureDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentTenantAsync()`

```php
getCurrentTenantAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantDtoEnvelope
```

Get the user's current default tenant

Get the user's current default tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCurrentTenantAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getCurrentTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantDtoEnvelope**](../Model/TenantDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollmentLicenseByIdAsync()`

```php
getEnrollmentLicenseByIdAsync($tenant_id, $enrollment_id, $license_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope
```

Get a specific license for an enrollment

Get a specific license for an enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$license_id = 'license_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getEnrollmentLicenseByIdAsync($tenant_id, $enrollment_id, $license_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getEnrollmentLicenseByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **license_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope**](../Model/SuiteLicenseDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollmentLicensesAsync()`

```php
getEnrollmentLicensesAsync($tenant_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SuiteLicenseAssignmentDtoListEnvelope
```

Get the list of licenses available to a specific enrollment

Get the list of licenses available to a specific enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getEnrollmentLicensesAsync($tenant_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getEnrollmentLicensesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuiteLicenseAssignmentDtoListEnvelope**](../Model/SuiteLicenseAssignmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollmentPermissionsAsync()`

```php
getEnrollmentPermissionsAsync($tenant_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\StringListEnvelope
```

Get a specific tenant enrollment's permissions list

Get a specific tenant enrollment's permissions list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getEnrollmentPermissionsAsync($tenant_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getEnrollmentPermissionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StringListEnvelope**](../Model/StringListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedTenantAsync()`

```php
getExtendedTenantAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ExtendedTenantDtoEnvelope
```

Get an extended tenant's business profile

Get an extended tenant's business profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getExtendedTenantAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getExtendedTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtendedTenantDtoEnvelope**](../Model/ExtendedTenantDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedTenantEnrollmentAsync()`

```php
getExtendedTenantEnrollmentAsync($tenant_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ExtendedTenantEnrollmentDtoEnvelope
```

Get a specific tenant enrollment

Get a specific tenant enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getExtendedTenantEnrollmentAsync($tenant_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getExtendedTenantEnrollmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtendedTenantEnrollmentDtoEnvelope**](../Model/ExtendedTenantEnrollmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRootTenantAsync()`

```php
getRootTenantAsync($api_version, $x_api_version): \OpenAPI\Client\Model\TenantDtoEnvelope
```

Get the root tenant of the platform

Get the root tenant of the platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRootTenantAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getRootTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantDtoEnvelope**](../Model/TenantDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantAsync()`

```php
getTenantAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantDtoEnvelope
```

Get a specific tenant by ID

Get a specific tenant by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantDtoEnvelope**](../Model/TenantDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantAvatarAsync()`

```php
getTenantAvatarAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Get a tenant's avatar

Get a tenant's avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantAvatarAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantAvatarAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `getTenantCartAsync()`

```php
getTenantCartAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CartDtoEnvelope
```

Get a tenant's default cart

Get a tenant's default cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantCartAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantCartAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartDtoEnvelope**](../Model/CartDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantEnrollmentAsync()`

```php
getTenantEnrollmentAsync($tenant_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantEnrollmentDtoEnvelope
```

Get a specific tenant enrollment

Get a specific tenant enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantEnrollmentAsync($tenant_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantEnrollmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantEnrollmentDtoEnvelope**](../Model/TenantEnrollmentDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantEnrollmentsAsync()`

```php
getTenantEnrollmentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantEnrollmentDtoListEnvelope
```

Get the list of user enrollments for a tenant

Get the list of user enrollments for a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantEnrollmentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantEnrollmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantEnrollmentDtoListEnvelope**](../Model/TenantEnrollmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantInvitationsAsync()`

```php
getTenantInvitationsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantInvitationDtoListEnvelope
```

Get the list of invitations issued by a tenant

Get the list of invitations issued by a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantInvitationsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantInvitationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantInvitationDtoListEnvelope**](../Model/TenantInvitationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantLicensesAsync()`

```php
getTenantLicensesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope
```

Get the list of licenses available to a tenant

Get the list of licenses available to a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantLicensesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantLicensesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope**](../Model/SuiteLicenseDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantNotificationsAsync()`

```php
getTenantNotificationsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\NotificationDtoListEnvelope
```

Get the list of notifications for a tenant

Get the list of notifications for a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantNotificationsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantNotificationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NotificationDtoListEnvelope**](../Model/NotificationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantNotificationsCountAsync()`

```php
getTenantNotificationsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of notifications for a tenant

Get the count of notifications for a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantNotificationsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantNotificationsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getTenantPendingInvitationsAsync()`

```php
getTenantPendingInvitationsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantInvitationDtoListEnvelope
```

Get the list of invitations issued by a tenant that are pending

Get the list of invitations issued by a tenant that are pending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantPendingInvitationsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantPendingInvitationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantInvitationDtoListEnvelope**](../Model/TenantInvitationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantRedeemedInvitationsAsync()`

```php
getTenantRedeemedInvitationsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantInvitationDtoListEnvelope
```

Get the list of invitations issued by a tenant that have been redeemed

Get the list of invitations issued by a tenant that have been redeemed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantRedeemedInvitationsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantRedeemedInvitationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantInvitationDtoListEnvelope**](../Model/TenantInvitationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantRevokedInvitationsAsync()`

```php
getTenantRevokedInvitationsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantInvitationDtoListEnvelope
```

Get the list of invitations issued by a tenant that have been revoked

Get the list of invitations issued by a tenant that have been revoked

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantRevokedInvitationsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantRevokedInvitationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantInvitationDtoListEnvelope**](../Model/TenantInvitationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantSocialProfileAsync()`

```php
getTenantSocialProfileAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialProfileDtoEnvelope
```

Get a tenant's social profile

Get a tenant's social profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantSocialProfileAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantSocialProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialProfileDtoEnvelope**](../Model/SocialProfileDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantUsersAsync()`

```php
getTenantUsersAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\UserDtoListEnvelope
```

Get the list of users enrolled in a tenant

Get the list of users enrolled in a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantUsersAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantUsersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserDtoListEnvelope**](../Model/UserDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantWalletAsync()`

```php
getTenantWalletAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WalletDtoEnvelope
```

Get a tenant's billing profile (A.K.A. Wallet Account)

Get a tenant's billing profile (A.K.A. Wallet Account)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantWalletAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantWalletAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WalletDtoEnvelope**](../Model/WalletDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantWebPortalsAsync()`

```php
getTenantWebPortalsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WebPortalDtoListEnvelope
```

Get the list of web portals for a tenant

Get the list of web portals for a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTenantWebPortalsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantWebPortalsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebPortalDtoListEnvelope**](../Model/WebPortalDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchTenantAsync()`

```php
patchTenantAsync($tenant_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a tenant's profile

Patch a tenant's profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchTenantAsync($tenant_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->patchTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `revokeLicenseAsync()`

```php
revokeLicenseAsync($tenant_id, $enrollment_id, $license_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope
```

Revoke a license from a specific enrollment

Revoke a license from a specific enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$license_id = 'license_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->revokeLicenseAsync($tenant_id, $enrollment_id, $license_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->revokeLicenseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **license_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuiteLicenseDtoListEnvelope**](../Model/SuiteLicenseDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectTenantAsync()`

```php
selectTenantAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Select a business tenant as the user's default tenant

Select a business tenant as the user's default tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->selectTenantAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->selectTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `updateAvatarAsync()`

```php
updateAvatarAsync($tenant_id, $api_version, $x_api_version, $avatar): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tenant's avatar

Update a tenant's avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$avatar = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateAvatarAsync($tenant_id, $api_version, $x_api_version, $avatar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->updateAvatarAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **avatar** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`, `application/xml`
- **Accept**: `image/png`, `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenantAsync()`

```php
updateTenantAsync($tenant_id, $api_version, $x_api_version, $tenant_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tenant's profile

Update a tenant's profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$tenant_update_dto = new \OpenAPI\Client\Model\TenantUpdateDto(); // \OpenAPI\Client\Model\TenantUpdateDto

try {
    $result = $apiInstance->updateTenantAsync($tenant_id, $api_version, $x_api_version, $tenant_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->updateTenantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **tenant_update_dto** | [**\OpenAPI\Client\Model\TenantUpdateDto**](../Model/TenantUpdateDto.md)|  | [optional] |

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

## `validateEnrollmentFeatureAccess()`

```php
validateEnrollmentFeatureAccess($tenant_id, $enrollment_id, $feature, $api_version, $x_api_version): \OpenAPI\Client\Model\BooleanEnvelope
```

Validate the access to a specific feature for a specific enrollment

Validate the access to a specific feature for a specific enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$feature = 'feature_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->validateEnrollmentFeatureAccess($tenant_id, $enrollment_id, $feature, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->validateEnrollmentFeatureAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **feature** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanEnvelope**](../Model/BooleanEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateEnrollmentPermissionsAsync()`

```php
validateEnrollmentPermissionsAsync($tenant_id, $enrollment_id, $roles, $permissions, $api_version, $x_api_version): \OpenAPI\Client\Model\BooleanEnvelope
```

Validate the existence of a list of roles and permissions for a specific enrollment

Validate the existence of a list of roles and permissions for a specific enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$roles = array('roles_example'); // string[]
$permissions = array('permissions_example'); // string[]
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->validateEnrollmentPermissionsAsync($tenant_id, $enrollment_id, $roles, $permissions, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->validateEnrollmentPermissionsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **roles** | [**string[]**](../Model/string.md)|  | [optional] |
| **permissions** | [**string[]**](../Model/string.md)|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanEnvelope**](../Model/BooleanEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
