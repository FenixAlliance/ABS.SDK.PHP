# OpenAPI\Client\ApplicationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApplication()**](ApplicationsApi.md#getApplication) | **GET** /api/v2/Applications/{appId} | Get application by ID |
| [**getGrantedEnrollmentPermissions()**](ApplicationsApi.md#getGrantedEnrollmentPermissions) | **GET** /api/v2/Applications/{appId}/GrantedRoles/{securityRoleId}/GrantedPermissions | Get granted permissions for an application role |
| [**getGrantedTenantPermissions()**](ApplicationsApi.md#getGrantedTenantPermissions) | **GET** /api/v2/Applications/{appId}/GrantedPermissions | Get granted tenant permissions for an application |
| [**getGrantedTenantRoles()**](ApplicationsApi.md#getGrantedTenantRoles) | **GET** /api/v2/Applications/{appId}/GrantedRoles | Get granted tenant roles for an application |
| [**getRequiredPermissions()**](ApplicationsApi.md#getRequiredPermissions) | **GET** /api/v2/Applications/{appId}/RequiredPermissions | Get required permissions for an application |


## `getApplication()`

```php
getApplication($app_id, $api_version, $x_api_version)
```

Get application by ID

Retrieves an application by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->getApplication($app_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGrantedEnrollmentPermissions()`

```php
getGrantedEnrollmentPermissions($app_id, $security_role_id, $enrollment_id, $api_version, $x_api_version)
```

Get granted permissions for an application role

Retrieves the list of permissions granted through a specific security role for the specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->getGrantedEnrollmentPermissions($app_id, $security_role_id, $enrollment_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getGrantedEnrollmentPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | |
| **security_role_id** | **string**|  | |
| **enrollment_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGrantedTenantPermissions()`

```php
getGrantedTenantPermissions($app_id, $tenant_id, $api_version, $x_api_version)
```

Get granted tenant permissions for an application

Retrieves the list of permissions granted to the specified application within a tenant context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->getGrantedTenantPermissions($app_id, $tenant_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getGrantedTenantPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGrantedTenantRoles()`

```php
getGrantedTenantRoles($app_id, $tenant_id, $api_version, $x_api_version)
```

Get granted tenant roles for an application

Retrieves the list of security roles granted to the specified application within a tenant context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->getGrantedTenantRoles($app_id, $tenant_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getGrantedTenantRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequiredPermissions()`

```php
getRequiredPermissions($app_id, $api_version, $x_api_version)
```

Get required permissions for an application

Retrieves the list of permissions required by the specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->getRequiredPermissions($app_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getRequiredPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
