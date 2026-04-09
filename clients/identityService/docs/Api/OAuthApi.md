# OpenAPI\Client\OAuthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkPasswordSignInAsync()**](OAuthApi.md#checkPasswordSignInAsync) | **GET** /api/v2/OAuth/SignIn | Check password sign-in |
| [**get()**](OAuthApi.md#get) | **GET** /api/v2/OAuth/WhoAmI | Get current user identity |
| [**getJwKs()**](OAuthApi.md#getJwKs) | **GET** /api/v2/OAuth/{applicationId}/Keys | Get JSON Web Key Set |
| [**getOpenIdConfiguration()**](OAuthApi.md#getOpenIdConfiguration) | **GET** /api/v2/OAuth/{tenantId}/{applicationId}/.Well-Known/OpenId-Configuration | Get OpenID configuration |
| [**getPermissions()**](OAuthApi.md#getPermissions) | **GET** /api/v2/OAuth/Permissions | Get user permissions |
| [**passwordSignInAsync()**](OAuthApi.md#passwordSignInAsync) | **POST** /api/v2/OAuth/SignIn | Sign in with password |
| [**token()**](OAuthApi.md#token) | **POST** /api/v2/OAuth/Token | Get OAuth token |


## `checkPasswordSignInAsync()`

```php
checkPasswordSignInAsync($api_version, $x_api_version): \OpenAPI\Client\Model\UserCreateDtoEnvelope
```

Check password sign-in

Verifies sign-in credentials and returns user details without creating a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->checkPasswordSignInAsync($api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->checkPasswordSignInAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserCreateDtoEnvelope**](../Model/UserCreateDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `get()`

```php
get($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AuthorizationResultEnvelope
```

Get current user identity

Returns the authorization result for the authenticated user, including identity and tenant context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->get($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuthorizationResultEnvelope**](../Model/AuthorizationResultEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJwKs()`

```php
getJwKs($application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\JsonWebKeySetEnvelope
```

Get JSON Web Key Set

Retrieves the signing keys (JWKS) for a specific application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getJwKs($application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->getJwKs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JsonWebKeySetEnvelope**](../Model/JsonWebKeySetEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpenIdConfiguration()`

```php
getOpenIdConfiguration($tenant_id, $application_id, $api_version, $x_api_version): \OpenAPI\Client\Model\OpenIdConfigurationEnvelope
```

Get OpenID configuration

Retrieves the OpenID Connect discovery document for a specific application within a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$application_id = 'application_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getOpenIdConfiguration($tenant_id, $application_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->getOpenIdConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **application_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OpenIdConfigurationEnvelope**](../Model/OpenIdConfigurationEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPermissions()`

```php
getPermissions($tenant_id, $user_id, $api_version, $x_api_version): \OpenAPI\Client\Model\StringListEnvelope
```

Get user permissions

Retrieves the list of permission identifiers for a specific user within a tenant context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getPermissions($tenant_id, $user_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
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

## `passwordSignInAsync()`

```php
passwordSignInAsync($api_version, $x_api_version, $signin_model): \OpenAPI\Client\Model\JsonWebTokenEnvelope
```

Sign in with password

Authenticates a user using email and password credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signin_model = new \OpenAPI\Client\Model\SigninModel(); // \OpenAPI\Client\Model\SigninModel

try {
    $result = $apiInstance->passwordSignInAsync($api_version, $x_api_version, $signin_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->passwordSignInAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signin_model** | [**\OpenAPI\Client\Model\SigninModel**](../Model/SigninModel.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JsonWebTokenEnvelope**](../Model/JsonWebTokenEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `token()`

```php
token($api_version, $x_api_version, $o_auth_token_request): \OpenAPI\Client\Model\JsonWebTokenEnvelope
```

Get OAuth token

Generates an OAuth token based on the provided credentials or grant type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$o_auth_token_request = new \OpenAPI\Client\Model\OAuthTokenRequest(); // \OpenAPI\Client\Model\OAuthTokenRequest

try {
    $result = $apiInstance->token($api_version, $x_api_version, $o_auth_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **o_auth_token_request** | [**\OpenAPI\Client\Model\OAuthTokenRequest**](../Model/OAuthTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JsonWebTokenEnvelope**](../Model/JsonWebTokenEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
