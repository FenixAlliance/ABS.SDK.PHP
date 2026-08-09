# OpenAPI\Client\ApplicationPrincipalsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableGlobalApplicationPrincipal()**](ApplicationPrincipalsApi.md#disableGlobalApplicationPrincipal) | **POST** /api/v2/SystemService/ApplicationPrincipals/{principalId}/Disable | Disable an application principal (global) |
| [**enableGlobalApplicationPrincipal()**](ApplicationPrincipalsApi.md#enableGlobalApplicationPrincipal) | **POST** /api/v2/SystemService/ApplicationPrincipals/{principalId}/Enable | Enable an application principal (global) |
| [**getGlobalApplicationPrincipal()**](ApplicationPrincipalsApi.md#getGlobalApplicationPrincipal) | **GET** /api/v2/SystemService/ApplicationPrincipals/{principalId} | Get one application principal (any tenant) |
| [**getGlobalApplicationPrincipals()**](ApplicationPrincipalsApi.md#getGlobalApplicationPrincipals) | **GET** /api/v2/SystemService/ApplicationPrincipals | List application principals across all tenants |
| [**getGlobalApplicationPrincipalsCount()**](ApplicationPrincipalsApi.md#getGlobalApplicationPrincipalsCount) | **GET** /api/v2/SystemService/ApplicationPrincipals/Count | Count application principals across all tenants |
| [**grantGlobalApplicationPrincipalPermission()**](ApplicationPrincipalsApi.md#grantGlobalApplicationPrincipalPermission) | **POST** /api/v2/SystemService/ApplicationPrincipals/{principalId}/Permissions | Grant a permission to an application principal (any tenant) |
| [**provisionGlobalApplicationPrincipal()**](ApplicationPrincipalsApi.md#provisionGlobalApplicationPrincipal) | **POST** /api/v2/SystemService/ApplicationPrincipals/Provision | Provision an application principal (any tenant, incl. system-locked) |
| [**provisionPaymentsConnector()**](ApplicationPrincipalsApi.md#provisionPaymentsConnector) | **POST** /api/v2/SystemService/ApplicationPrincipals/PaymentsConnector | Provision the platform payments-connector identity |
| [**revokeGlobalApplicationPrincipalPermission()**](ApplicationPrincipalsApi.md#revokeGlobalApplicationPrincipalPermission) | **DELETE** /api/v2/SystemService/ApplicationPrincipals/{principalId}/Permissions/{permission} | Revoke a permission from an application principal (any tenant) |
| [**suspendGlobalApplicationPrincipal()**](ApplicationPrincipalsApi.md#suspendGlobalApplicationPrincipal) | **POST** /api/v2/SystemService/ApplicationPrincipals/{principalId}/Suspend | Suspend an application principal (global) |


## `disableGlobalApplicationPrincipal()`

```php
disableGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Disable an application principal (global)

Disables the application principal; dependent unattended execution fails closed (applies to system-locked principals here). tenantId scopes the action to a tenant the principal is enrolled in (required). Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$principal_id = 'principal_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->disableGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->disableGlobalApplicationPrincipal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **principal_id** | **string**|  | |
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

## `enableGlobalApplicationPrincipal()`

```php
enableGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Enable an application principal (global)

Reinstates the application principal to the Active lifecycle state (applies to system-locked principals here). tenantId scopes the action to a tenant the principal is enrolled in (required). Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$principal_id = 'principal_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->enableGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->enableGlobalApplicationPrincipal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **principal_id** | **string**|  | |
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

## `getGlobalApplicationPrincipal()`

```php
getGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ApplicationPrincipalDetailDtoEnvelope
```

Get one application principal (any tenant)

Returns one application principal's detail by id: owning application, an enrollment, the system-locked flag, lifecycle status, and that enrollment's explicit least-privilege grants. Pass tenantId to select the enrollment for a multi-tenant principal; when omitted the principal's first enrollment is used. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$principal_id = 'principal_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->getGlobalApplicationPrincipal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **principal_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationPrincipalDetailDtoEnvelope**](../Model/ApplicationPrincipalDetailDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalApplicationPrincipals()`

```php
getGlobalApplicationPrincipals($api_version, $x_api_version, $application_principal_dto_collection_query_parameters): \OpenAPI\Client\Model\ApplicationPrincipalDtoIReadOnlyListEnvelope
```

List application principals across all tenants

Lists every non-human application principal enrollment across ALL tenants (payload-safe fields only), including the platform-managed (system-locked) connectors. Use OData to scope — e.g. $filter=SystemLocked eq true for the platform connectors or TenantId eq '{guid}' for one tenant — and to page/order. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$application_principal_dto_collection_query_parameters = new \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters

try {
    $result = $apiInstance->getGlobalApplicationPrincipals($api_version, $x_api_version, $application_principal_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->getGlobalApplicationPrincipals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **application_principal_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters**](../Model/ApplicationPrincipalDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationPrincipalDtoIReadOnlyListEnvelope**](../Model/ApplicationPrincipalDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalApplicationPrincipalsCount()`

```php
getGlobalApplicationPrincipalsCount($api_version, $x_api_version, $application_principal_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count application principals across all tenants

Returns the count of application principal enrollments across ALL tenants under the same OData shaping as the list read (e.g. $filter=SystemLocked eq true). Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$application_principal_dto_collection_query_parameters = new \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters

try {
    $result = $apiInstance->getGlobalApplicationPrincipalsCount($api_version, $x_api_version, $application_principal_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->getGlobalApplicationPrincipalsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **application_principal_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters**](../Model/ApplicationPrincipalDtoCollectionQueryParameters.md)|  | [optional] |

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

## `grantGlobalApplicationPrincipalPermission()`

```php
grantGlobalApplicationPrincipalPermission($principal_id, $tenant_id, $application_principal_permission_request_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Grant a permission to an application principal (any tenant)

Grants a single least-privilege permission to the application principal's enrollment in the tenantId tenant (grants are per-tenant, so tenantId is required). Owner/admin/wildcard/_*_manage permissions are rejected even for a global admin (least-privilege by construction). Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$principal_id = 'principal_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$application_principal_permission_request_dto = new \OpenAPI\Client\Model\ApplicationPrincipalPermissionRequestDto(); // \OpenAPI\Client\Model\ApplicationPrincipalPermissionRequestDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->grantGlobalApplicationPrincipalPermission($principal_id, $tenant_id, $application_principal_permission_request_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->grantGlobalApplicationPrincipalPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **principal_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **application_principal_permission_request_dto** | [**\OpenAPI\Client\Model\ApplicationPrincipalPermissionRequestDto**](../Model/ApplicationPrincipalPermissionRequestDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `provisionGlobalApplicationPrincipal()`

```php
provisionGlobalApplicationPrincipal($application_principal_provision_request_dto, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ApplicationPrincipalProvisioningResultDtoEnvelope
```

Provision an application principal (any tenant, incl. system-locked)

Idempotently provisions the application principal (and its own least-privilege enrollment) for a governed business application. tenantId selects the target tenant (defaults to the platform/root tenant). Unlike the per-tenant lane, a system-locked platform application is provisionable here. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_principal_provision_request_dto = new \OpenAPI\Client\Model\ApplicationPrincipalProvisionRequestDto(); // \OpenAPI\Client\Model\ApplicationPrincipalProvisionRequestDto
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->provisionGlobalApplicationPrincipal($application_principal_provision_request_dto, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->provisionGlobalApplicationPrincipal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_principal_provision_request_dto** | [**\OpenAPI\Client\Model\ApplicationPrincipalProvisionRequestDto**](../Model/ApplicationPrincipalProvisionRequestDto.md)|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationPrincipalProvisioningResultDtoEnvelope**](../Model/ApplicationPrincipalProvisioningResultDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provisionPaymentsConnector()`

```php
provisionPaymentsConnector($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ApplicationPrincipalProvisioningResultDtoEnvelope
```

Provision the platform payments-connector identity

Idempotently stands up the platform payments-connector identity — its well-known business application, its application principal, and its own least-privilege enrollment (payments_create/payments_update/journals_post). tenantId selects the target tenant (defaults to the platform/root tenant). The provisioned connector then appears in this global list and (for its tenant) the per-tenant list. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->provisionPaymentsConnector($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->provisionPaymentsConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationPrincipalProvisioningResultDtoEnvelope**](../Model/ApplicationPrincipalProvisioningResultDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeGlobalApplicationPrincipalPermission()`

```php
revokeGlobalApplicationPrincipalPermission($principal_id, $permission, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Revoke a permission from an application principal (any tenant)

Revokes a direct permission grant from the application principal's enrollment in the tenantId tenant (required). Idempotent. Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$principal_id = 'principal_id_example'; // string
$permission = 'permission_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->revokeGlobalApplicationPrincipalPermission($principal_id, $permission, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->revokeGlobalApplicationPrincipalPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **principal_id** | **string**|  | |
| **permission** | **string**|  | |
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

## `suspendGlobalApplicationPrincipal()`

```php
suspendGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Suspend an application principal (global)

Temporarily suspends the application principal; its identity is retained but it cannot act until reinstated (applies to system-locked principals here). tenantId scopes the action to a tenant the principal is enrolled in (required). Global-administrator only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationPrincipalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$principal_id = 'principal_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->suspendGlobalApplicationPrincipal($principal_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->suspendGlobalApplicationPrincipal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **principal_id** | **string**|  | |
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
