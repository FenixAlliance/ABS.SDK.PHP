# OpenAPI\Client\RolesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SecurityServiceRolesGet()**](RolesApi.md#apiV2SecurityServiceRolesGet) | **GET** /api/v2/SecurityService/Roles |  |
| [**apiV2SecurityServiceRolesPost()**](RolesApi.md#apiV2SecurityServiceRolesPost) | **POST** /api/v2/SecurityService/Roles |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdDelete()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdDelete) | **DELETE** /api/v2/SecurityService/Roles/{securityRoleId}/Applications/{applicationId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdPost()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdPost) | **POST** /api/v2/SecurityService/Roles/{securityRoleId}/Applications/{applicationId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdDelete()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdDelete) | **DELETE** /api/v2/SecurityService/Roles/{securityRoleId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdDelete()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdDelete) | **DELETE** /api/v2/SecurityService/Roles/{securityRoleId}/Enrollments/{enrollmentId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdPost()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdPost) | **POST** /api/v2/SecurityService/Roles/{securityRoleId}/Enrollments/{enrollmentId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsGet()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsGet) | **GET** /api/v2/SecurityService/Roles/{securityRoleId}/Enrollments |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdGet()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdGet) | **GET** /api/v2/SecurityService/Roles/{securityRoleId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdPermissionsGet()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdPermissionsGet) | **GET** /api/v2/SecurityService/Roles/{securityRoleId}/Permissions |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdDelete()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdDelete) | **DELETE** /api/v2/SecurityService/Roles/{securityRoleId}/Permissions/{securityPermissionId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdPost()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdPost) | **POST** /api/v2/SecurityService/Roles/{securityRoleId}/Permissions/{securityPermissionId} |  |
| [**apiV2SecurityServiceRolesSecurityRoleIdPut()**](RolesApi.md#apiV2SecurityServiceRolesSecurityRoleIdPut) | **PUT** /api/v2/SecurityService/Roles/{securityRoleId} |  |


## `apiV2SecurityServiceRolesGet()`

```php
apiV2SecurityServiceRolesGet($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SecurityRoleDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SecurityServiceRolesPost()`

```php
apiV2SecurityServiceRolesPost($tenant_id, $api_version, $x_api_version, $security_role_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$security_role_create_dto = new \OpenAPI\Client\Model\SecurityRoleCreateDto(); // \OpenAPI\Client\Model\SecurityRoleCreateDto

try {
    $result = $apiInstance->apiV2SecurityServiceRolesPost($tenant_id, $api_version, $x_api_version, $security_role_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **security_role_create_dto** | [**\OpenAPI\Client\Model\SecurityRoleCreateDto**](../Model/SecurityRoleCreateDto.md)|  | [optional] |

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

## `apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdDelete()`

```php
apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdDelete($tenant_id, $security_role_id, $application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$application_id = 'application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdDelete($tenant_id, $security_role_id, $application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdPost()`

```php
apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdPost($tenant_id, $security_role_id, $application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$application_id = 'application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdPost($tenant_id, $security_role_id, $application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdApplicationsApplicationIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdDelete()`

```php
apiV2SecurityServiceRolesSecurityRoleIdDelete($tenant_id, $security_role_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdDelete($tenant_id, $security_role_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdDelete()`

```php
apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdDelete($tenant_id, $security_role_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdDelete($tenant_id, $security_role_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdPost()`

```php
apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdPost($tenant_id, $security_role_id, $enrollment_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$enrollment_id = 'enrollment_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdPost($tenant_id, $security_role_id, $enrollment_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsEnrollmentIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsGet()`

```php
apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsGet($tenant_id, $security_role_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TenantEnrolmentDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsGet($tenant_id, $security_role_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdGet()`

```php
apiV2SecurityServiceRolesSecurityRoleIdGet($tenant_id, $security_role_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SecurityRoleDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdGet($tenant_id, $security_role_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdPermissionsGet()`

```php
apiV2SecurityServiceRolesSecurityRoleIdPermissionsGet($tenant_id, $security_role_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SecurityPermissionDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdPermissionsGet($tenant_id, $security_role_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityPermissionDtoListEnvelope**](../Model/SecurityPermissionDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdDelete()`

```php
apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdDelete($tenant_id, $security_role_id, $security_permission_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdDelete($tenant_id, $security_role_id, $security_permission_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdPost()`

```php
apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdPost($tenant_id, $security_role_id, $security_permission_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$security_permission_id = 'security_permission_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdPost($tenant_id, $security_role_id, $security_permission_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdPermissionsSecurityPermissionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
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

## `apiV2SecurityServiceRolesSecurityRoleIdPut()`

```php
apiV2SecurityServiceRolesSecurityRoleIdPut($tenant_id, $security_role_id, $api_version, $x_api_version, $security_role_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$security_role_id = 'security_role_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$security_role_update_dto = new \OpenAPI\Client\Model\SecurityRoleUpdateDto(); // \OpenAPI\Client\Model\SecurityRoleUpdateDto

try {
    $result = $apiInstance->apiV2SecurityServiceRolesSecurityRoleIdPut($tenant_id, $security_role_id, $api_version, $x_api_version, $security_role_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->apiV2SecurityServiceRolesSecurityRoleIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **security_role_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **security_role_update_dto** | [**\OpenAPI\Client\Model\SecurityRoleUpdateDto**](../Model/SecurityRoleUpdateDto.md)|  | [optional] |

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
