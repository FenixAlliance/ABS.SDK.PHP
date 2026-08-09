# OpenAPI\Client\ApplicationPrincipalsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableApplicationPrincipalAsync()**](ApplicationPrincipalsApi.md#disableApplicationPrincipalAsync) | **POST** /api/v2/SecurityService/ApplicationPrincipals/{principalId}/Disable | Disable an application principal |
| [**enableApplicationPrincipalAsync()**](ApplicationPrincipalsApi.md#enableApplicationPrincipalAsync) | **POST** /api/v2/SecurityService/ApplicationPrincipals/{principalId}/Enable | Enable an application principal |
| [**getApplicationPrincipalAsync()**](ApplicationPrincipalsApi.md#getApplicationPrincipalAsync) | **GET** /api/v2/SecurityService/ApplicationPrincipals/{principalId} | Get application principal by ID |
| [**getApplicationPrincipalsAsync()**](ApplicationPrincipalsApi.md#getApplicationPrincipalsAsync) | **GET** /api/v2/SecurityService/ApplicationPrincipals | Get all application principals |
| [**getApplicationPrincipalsCountAsync()**](ApplicationPrincipalsApi.md#getApplicationPrincipalsCountAsync) | **GET** /api/v2/SecurityService/ApplicationPrincipals/Count | Get application principals count |
| [**grantPermissionAsync()**](ApplicationPrincipalsApi.md#grantPermissionAsync) | **POST** /api/v2/SecurityService/ApplicationPrincipals/{principalId}/Permissions | Grant a permission to an application principal |
| [**provisionApplicationPrincipalAsync()**](ApplicationPrincipalsApi.md#provisionApplicationPrincipalAsync) | **POST** /api/v2/SecurityService/ApplicationPrincipals/Provision | Provision an application principal |
| [**revokePermissionAsync()**](ApplicationPrincipalsApi.md#revokePermissionAsync) | **DELETE** /api/v2/SecurityService/ApplicationPrincipals/{principalId}/Permissions/{permission} | Revoke a permission from an application principal |
| [**suspendApplicationPrincipalAsync()**](ApplicationPrincipalsApi.md#suspendApplicationPrincipalAsync) | **POST** /api/v2/SecurityService/ApplicationPrincipals/{principalId}/Suspend | Suspend an application principal |


## `disableApplicationPrincipalAsync()`

```php
disableApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Disable an application principal

Disables the application principal; dependent unattended execution fails closed.

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
$principal_id = 'principal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->disableApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->disableApplicationPrincipalAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **principal_id** | **string**|  | |
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

## `enableApplicationPrincipalAsync()`

```php
enableApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Enable an application principal

Reinstates the application principal to the Active lifecycle state.

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
$principal_id = 'principal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->enableApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->enableApplicationPrincipalAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **principal_id** | **string**|  | |
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

## `getApplicationPrincipalAsync()`

```php
getApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ApplicationPrincipalDetailDtoEnvelope
```

Get application principal by ID

Retrieves a specific application principal: owning application, tenant enrollment, lifecycle status, system-locked flag, and its explicit least-privilege permission grants.

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
$principal_id = 'principal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->getApplicationPrincipalAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **principal_id** | **string**|  | |
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

## `getApplicationPrincipalsAsync()`

```php
getApplicationPrincipalsAsync($tenant_id, $api_version, $x_api_version, $application_principal_dto_collection_query_parameters): \OpenAPI\Client\Model\ApplicationPrincipalDtoListEnvelope
```

Get all application principals

Retrieves the non-human application principals enrolled in the specified tenant (including read-only system-locked platform principals).

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
$application_principal_dto_collection_query_parameters = new \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters

try {
    $result = $apiInstance->getApplicationPrincipalsAsync($tenant_id, $api_version, $x_api_version, $application_principal_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->getApplicationPrincipalsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **application_principal_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters**](../Model/ApplicationPrincipalDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationPrincipalDtoListEnvelope**](../Model/ApplicationPrincipalDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationPrincipalsCountAsync()`

```php
getApplicationPrincipalsCountAsync($tenant_id, $api_version, $x_api_version, $application_principal_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get application principals count

Retrieves the count of application principals enrolled in the specified tenant.

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
$application_principal_dto_collection_query_parameters = new \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ApplicationPrincipalDtoCollectionQueryParameters

try {
    $result = $apiInstance->getApplicationPrincipalsCountAsync($tenant_id, $api_version, $x_api_version, $application_principal_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->getApplicationPrincipalsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `grantPermissionAsync()`

```php
grantPermissionAsync($tenant_id, $principal_id, $application_principal_permission_request_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Grant a permission to an application principal

Grants a single least-privilege permission to the application principal's enrollment. Owner/admin/wildcard/_*_manage permissions are rejected; system-locked principals require a platform administrator.

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
$principal_id = 'principal_id_example'; // string
$application_principal_permission_request_dto = new \OpenAPI\Client\Model\ApplicationPrincipalPermissionRequestDto(); // \OpenAPI\Client\Model\ApplicationPrincipalPermissionRequestDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->grantPermissionAsync($tenant_id, $principal_id, $application_principal_permission_request_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->grantPermissionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **principal_id** | **string**|  | |
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

## `provisionApplicationPrincipalAsync()`

```php
provisionApplicationPrincipalAsync($tenant_id, $application_principal_provision_request_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\ApplicationPrincipalProvisioningResultDtoEnvelope
```

Provision an application principal

Idempotently provisions the application principal (and its own least-privilege enrollment) for a governed business application in the specified tenant. System-locked platform applications require a platform administrator.

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
$application_principal_provision_request_dto = new \OpenAPI\Client\Model\ApplicationPrincipalProvisionRequestDto(); // \OpenAPI\Client\Model\ApplicationPrincipalProvisionRequestDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->provisionApplicationPrincipalAsync($tenant_id, $application_principal_provision_request_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->provisionApplicationPrincipalAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **application_principal_provision_request_dto** | [**\OpenAPI\Client\Model\ApplicationPrincipalProvisionRequestDto**](../Model/ApplicationPrincipalProvisionRequestDto.md)|  | |
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

## `revokePermissionAsync()`

```php
revokePermissionAsync($tenant_id, $principal_id, $permission, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Revoke a permission from an application principal

Revokes a direct permission grant from the application principal's enrollment. System-locked principals require a platform administrator.

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
$principal_id = 'principal_id_example'; // string
$permission = 'permission_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->revokePermissionAsync($tenant_id, $principal_id, $permission, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->revokePermissionAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **principal_id** | **string**|  | |
| **permission** | **string**|  | |
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

## `suspendApplicationPrincipalAsync()`

```php
suspendApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Suspend an application principal

Temporarily suspends the application principal; its identity is retained but it cannot act until reinstated.

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
$principal_id = 'principal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->suspendApplicationPrincipalAsync($tenant_id, $principal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPrincipalsApi->suspendApplicationPrincipalAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **principal_id** | **string**|  | |
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
