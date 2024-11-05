# OpenAPI\Client\PermissionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SecurityServicePermissionsGet()**](PermissionsApi.md#apiV2SecurityServicePermissionsGet) | **GET** /api/v2/SecurityService/Permissions |  |
| [**apiV2SecurityServicePermissionsPost()**](PermissionsApi.md#apiV2SecurityServicePermissionsPost) | **POST** /api/v2/SecurityService/Permissions |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdDelete()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdDelete) | **DELETE** /api/v2/SecurityService/Permissions/{securityPermissionId}/Applications/{applicationId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdPost()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdPost) | **POST** /api/v2/SecurityService/Permissions/{securityPermissionId}/Applications/{applicationId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdDelete()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdDelete) | **DELETE** /api/v2/SecurityService/Permissions/{securityPermissionId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdDelete()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdDelete) | **DELETE** /api/v2/SecurityService/Permissions/{securityPermissionId}/Enrollments/{enrollmentId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdPost()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdPost) | **POST** /api/v2/SecurityService/Permissions/{securityPermissionId}/Enrollments/{enrollmentId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsGet()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsGet) | **GET** /api/v2/SecurityService/Permissions/{securityPermissionId}/Enrollments |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdGet()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdGet) | **GET** /api/v2/SecurityService/Permissions/{securityPermissionId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdPut()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdPut) | **PUT** /api/v2/SecurityService/Permissions/{securityPermissionId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdDelete()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdDelete) | **DELETE** /api/v2/SecurityService/Permissions/{securityPermissionId}/Roles/{securityRoleId} |  |
| [**apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdPost()**](PermissionsApi.md#apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdPost) | **POST** /api/v2/SecurityService/Permissions/{securityPermissionId}/Roles/{securityRoleId} |  |


## `apiV2SecurityServicePermissionsGet()`

```php
apiV2SecurityServicePermissionsGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SecurityRoleDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityRoleDtoListEnvelope**](../Model/SecurityRoleDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsPost()`

```php
apiV2SecurityServicePermissionsPost($tenant_id, $security_permission_create_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_create_dto = new \OpenAPI\Client\Model\SecurityPermissionCreateDto(); // \OpenAPI\Client\Model\SecurityPermissionCreateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsPost($tenant_id, $security_permission_create_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_create_dto** | [**\OpenAPI\Client\Model\SecurityPermissionCreateDto**](../Model/SecurityPermissionCreateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdDelete()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdDelete($tenant_id, $security_permission_id, $application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$application_id = 'application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdDelete($tenant_id, $security_permission_id, $application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdPost()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdPost($tenant_id, $security_permission_id, $application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$application_id = 'application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdPost($tenant_id, $security_permission_id, $application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdApplicationsApplicationIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdDelete()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdDelete($tenant_id, $security_permission_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdDelete($tenant_id, $security_permission_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdDelete()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdDelete($tenant_id, $security_permission_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdDelete($tenant_id, $security_permission_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdPost()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdPost($tenant_id, $security_permission_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdPost($tenant_id, $security_permission_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsEnrollmentIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **enrollment_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsGet()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsGet($tenant_id, $security_permission_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantEnrolmentDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsGet($tenant_id, $security_permission_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TenantEnrolmentDtoListEnvelope**](../Model/TenantEnrolmentDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdGet()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdGet($tenant_id, $security_permission_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SecurityRoleDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdGet($tenant_id, $security_permission_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityRoleDtoListEnvelope**](../Model/SecurityRoleDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdPut()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdPut($tenant_id, $security_permission_id, $security_permission_update_dto, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$security_permission_update_dto = new \OpenAPI\Client\Model\SecurityPermissionUpdateDto(); // \OpenAPI\Client\Model\SecurityPermissionUpdateDto
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdPut($tenant_id, $security_permission_id, $security_permission_update_dto, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **security_permission_update_dto** | [**\OpenAPI\Client\Model\SecurityPermissionUpdateDto**](../Model/SecurityPermissionUpdateDto.md)|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdDelete()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdDelete($tenant_id, $security_permission_id, $security_role_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdDelete($tenant_id, $security_permission_id, $security_role_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **security_role_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdPost()`

```php
apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdPost($tenant_id, $security_permission_id, $security_role_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdPost($tenant_id, $security_permission_id, $security_role_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->apiV2SecurityServicePermissionsSecurityPermissionIdRolesSecurityRoleIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_permission_id** | **string**|  | |
| **security_role_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
