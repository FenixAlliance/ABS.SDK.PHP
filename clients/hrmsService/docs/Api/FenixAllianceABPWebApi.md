# OpenAPI\Client\FenixAllianceABPWebApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**forgotPasswordPost()**](FenixAllianceABPWebApi.md#forgotPasswordPost) | **POST** /forgotPassword |  |
| [**healthGet()**](FenixAllianceABPWebApi.md#healthGet) | **GET** /health |  |
| [**helloGet()**](FenixAllianceABPWebApi.md#helloGet) | **GET** /hello |  |
| [**loginPost()**](FenixAllianceABPWebApi.md#loginPost) | **POST** /login |  |
| [**manage2faPost()**](FenixAllianceABPWebApi.md#manage2faPost) | **POST** /manage/2fa |  |
| [**manageInfoGet()**](FenixAllianceABPWebApi.md#manageInfoGet) | **GET** /manage/info |  |
| [**manageInfoPost()**](FenixAllianceABPWebApi.md#manageInfoPost) | **POST** /manage/info |  |
| [**mapIdentityApiConfirmEmail()**](FenixAllianceABPWebApi.md#mapIdentityApiConfirmEmail) | **GET** /confirmEmail |  |
| [**refreshPost()**](FenixAllianceABPWebApi.md#refreshPost) | **POST** /refresh |  |
| [**registerPost()**](FenixAllianceABPWebApi.md#registerPost) | **POST** /register |  |
| [**resendConfirmationEmailPost()**](FenixAllianceABPWebApi.md#resendConfirmationEmailPost) | **POST** /resendConfirmationEmail |  |
| [**resetPasswordPost()**](FenixAllianceABPWebApi.md#resetPasswordPost) | **POST** /resetPassword |  |
| [**versionGet()**](FenixAllianceABPWebApi.md#versionGet) | **GET** /version |  |


## `forgotPasswordPost()`

```php
forgotPasswordPost($forgot_password_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgot_password_request = new \OpenAPI\Client\Model\ForgotPasswordRequest(); // \OpenAPI\Client\Model\ForgotPasswordRequest

try {
    $apiInstance->forgotPasswordPost($forgot_password_request);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->forgotPasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forgot_password_request** | [**\OpenAPI\Client\Model\ForgotPasswordRequest**](../Model/ForgotPasswordRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `healthGet()`

```php
healthGet()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->healthGet();
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->healthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `helloGet()`

```php
helloGet()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->helloGet();
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->helloGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `loginPost()`

```php
loginPost($login_request, $use_cookies, $use_session_cookies): \OpenAPI\Client\Model\AccessTokenResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_request = new \OpenAPI\Client\Model\LoginRequest(); // \OpenAPI\Client\Model\LoginRequest
$use_cookies = True; // bool
$use_session_cookies = True; // bool

try {
    $result = $apiInstance->loginPost($login_request, $use_cookies, $use_session_cookies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_request** | [**\OpenAPI\Client\Model\LoginRequest**](../Model/LoginRequest.md)|  | |
| **use_cookies** | **bool**|  | [optional] |
| **use_session_cookies** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manage2faPost()`

```php
manage2faPost($two_factor_request): \OpenAPI\Client\Model\TwoFactorResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$two_factor_request = new \OpenAPI\Client\Model\TwoFactorRequest(); // \OpenAPI\Client\Model\TwoFactorRequest

try {
    $result = $apiInstance->manage2faPost($two_factor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->manage2faPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **two_factor_request** | [**\OpenAPI\Client\Model\TwoFactorRequest**](../Model/TwoFactorRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TwoFactorResponse**](../Model/TwoFactorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageInfoGet()`

```php
manageInfoGet(): \OpenAPI\Client\Model\InfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->manageInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->manageInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InfoResponse**](../Model/InfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageInfoPost()`

```php
manageInfoPost($info_request): \OpenAPI\Client\Model\InfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$info_request = new \OpenAPI\Client\Model\InfoRequest(); // \OpenAPI\Client\Model\InfoRequest

try {
    $result = $apiInstance->manageInfoPost($info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->manageInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **info_request** | [**\OpenAPI\Client\Model\InfoRequest**](../Model/InfoRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InfoResponse**](../Model/InfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mapIdentityApiConfirmEmail()`

```php
mapIdentityApiConfirmEmail($user_id, $code, $changed_email)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$code = 'code_example'; // string
$changed_email = 'changed_email_example'; // string

try {
    $apiInstance->mapIdentityApiConfirmEmail($user_id, $code, $changed_email);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->mapIdentityApiConfirmEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **code** | **string**|  | |
| **changed_email** | **string**|  | [optional] |

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

## `refreshPost()`

```php
refreshPost($refresh_request): \OpenAPI\Client\Model\AccessTokenResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refresh_request = new \OpenAPI\Client\Model\RefreshRequest(); // \OpenAPI\Client\Model\RefreshRequest

try {
    $result = $apiInstance->refreshPost($refresh_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->refreshPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refresh_request** | [**\OpenAPI\Client\Model\RefreshRequest**](../Model/RefreshRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerPost()`

```php
registerPost($register_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_request = new \OpenAPI\Client\Model\RegisterRequest(); // \OpenAPI\Client\Model\RegisterRequest

try {
    $apiInstance->registerPost($register_request);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->registerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_request** | [**\OpenAPI\Client\Model\RegisterRequest**](../Model/RegisterRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendConfirmationEmailPost()`

```php
resendConfirmationEmailPost($resend_confirmation_email_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resend_confirmation_email_request = new \OpenAPI\Client\Model\ResendConfirmationEmailRequest(); // \OpenAPI\Client\Model\ResendConfirmationEmailRequest

try {
    $apiInstance->resendConfirmationEmailPost($resend_confirmation_email_request);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->resendConfirmationEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resend_confirmation_email_request** | [**\OpenAPI\Client\Model\ResendConfirmationEmailRequest**](../Model/ResendConfirmationEmailRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPasswordPost()`

```php
resetPasswordPost($reset_password_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reset_password_request = new \OpenAPI\Client\Model\ResetPasswordRequest(); // \OpenAPI\Client\Model\ResetPasswordRequest

try {
    $apiInstance->resetPasswordPost($reset_password_request);
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->resetPasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reset_password_request** | [**\OpenAPI\Client\Model\ResetPasswordRequest**](../Model/ResetPasswordRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `versionGet()`

```php
versionGet()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FenixAllianceABPWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->versionGet();
} catch (Exception $e) {
    echo 'Exception when calling FenixAllianceABPWebApi->versionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
