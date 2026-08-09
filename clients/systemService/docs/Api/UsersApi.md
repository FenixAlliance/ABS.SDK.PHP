# OpenAPI\Client\UsersApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminPreviewUserEmailTemplate()**](UsersApi.md#adminPreviewUserEmailTemplate) | **POST** /api/v2/SystemService/Users/{userId}/Emails/Preview | Preview the rendered email for a user. |
| [**adminSendUserEmail()**](UsersApi.md#adminSendUserEmail) | **POST** /api/v2/SystemService/Users/{userId}/Emails/Send | Send an email to a user. |
| [**createAccountHolderAsync()**](UsersApi.md#createAccountHolderAsync) | **POST** /api/v2/SystemService/Users | Create a new user |
| [**deleteAccountHolderAsync()**](UsersApi.md#deleteAccountHolderAsync) | **DELETE** /api/v2/SystemService/Users/{userId} | Delete a user |
| [**getExtendedAccountHolderAsync()**](UsersApi.md#getExtendedAccountHolderAsync) | **GET** /api/v2/SystemService/Users/{userId}/Extended | Retrieve an extended user by ID |
| [**getExtendedUsersAsync()**](UsersApi.md#getExtendedUsersAsync) | **GET** /api/v2/SystemService/Users/Extended | Retrieve a list of extended users |
| [**getExtendedUsersCountAsync()**](UsersApi.md#getExtendedUsersCountAsync) | **GET** /api/v2/SystemService/Users/Extended/Count | Get the count of extended users |
| [**getUserAdminDetailAsync()**](UsersApi.md#getUserAdminDetailAsync) | **GET** /api/v2/SystemService/Users/{userId}/AdminDetail | Retrieve the admin detail aggregate for a user |
| [**getUserAsync()**](UsersApi.md#getUserAsync) | **GET** /api/v2/SystemService/Users/{userId} | Retrieve a user by ID |
| [**getUsersAsync()**](UsersApi.md#getUsersAsync) | **GET** /api/v2/SystemService/Users | Retrieve a list of users |
| [**getUsersCountAsync()**](UsersApi.md#getUsersCountAsync) | **GET** /api/v2/SystemService/Users/Count | Get the count of users |
| [**patchAccountHolderAsync()**](UsersApi.md#patchAccountHolderAsync) | **PATCH** /api/v2/SystemService/Users/{userId} | Partially update a user |
| [**setUserPasswordAsync()**](UsersApi.md#setUserPasswordAsync) | **POST** /api/v2/SystemService/Users/{userId}/Password | Set a user&#39;s password |
| [**updateAccountHolderAdminProfileAsync()**](UsersApi.md#updateAccountHolderAdminProfileAsync) | **PUT** /api/v2/SystemService/Users/{userId}/AdminProfile | Update a user&#39;s admin-managed profile |
| [**updateAccountHolderAsync()**](UsersApi.md#updateAccountHolderAsync) | **PUT** /api/v2/SystemService/Users/{userId} | Update a user |


## `adminPreviewUserEmailTemplate()`

```php
adminPreviewUserEmailTemplate($user_id, $api_version, $x_api_version, $email_dispatch_request)
```

Preview the rendered email for a user.

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $apiInstance->adminPreviewUserEmailTemplate($user_id, $api_version, $x_api_version, $email_dispatch_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminPreviewUserEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **email_dispatch_request** | [**\OpenAPI\Client\Model\EmailDispatchRequest**](../Model/EmailDispatchRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminSendUserEmail()`

```php
adminSendUserEmail($user_id, $api_version, $x_api_version, $email_dispatch_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Send an email to a user.

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $result = $apiInstance->adminSendUserEmail($user_id, $api_version, $x_api_version, $email_dispatch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminSendUserEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **email_dispatch_request** | [**\OpenAPI\Client\Model\EmailDispatchRequest**](../Model/EmailDispatchRequest.md)|  | [optional] |

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

## `createAccountHolderAsync()`

```php
createAccountHolderAsync($api_version, $x_api_version, $user_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new user

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$user_create_dto = new \OpenAPI\Client\Model\UserCreateDto(); // \OpenAPI\Client\Model\UserCreateDto

try {
    $result = $apiInstance->createAccountHolderAsync($api_version, $x_api_version, $user_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createAccountHolderAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **user_create_dto** | [**\OpenAPI\Client\Model\UserCreateDto**](../Model/UserCreateDto.md)|  | [optional] |

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

## `deleteAccountHolderAsync()`

```php
deleteAccountHolderAsync($user_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a user

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAccountHolderAsync($user_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteAccountHolderAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
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

## `getExtendedAccountHolderAsync()`

```php
getExtendedAccountHolderAsync($user_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ExtendedUserDtoEnvelope
```

Retrieve an extended user by ID

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getExtendedAccountHolderAsync($user_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getExtendedAccountHolderAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtendedUserDtoEnvelope**](../Model/ExtendedUserDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedUsersAsync()`

```php
getExtendedUsersAsync($api_version, $x_api_version, $extended_user_dto_collection_query_parameters): \OpenAPI\Client\Model\ExtendedUserDtoListEnvelope
```

Retrieve a list of extended users

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$extended_user_dto_collection_query_parameters = new \OpenAPI\Client\Model\ExtendedUserDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ExtendedUserDtoCollectionQueryParameters

try {
    $result = $apiInstance->getExtendedUsersAsync($api_version, $x_api_version, $extended_user_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getExtendedUsersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **extended_user_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ExtendedUserDtoCollectionQueryParameters**](../Model/ExtendedUserDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtendedUserDtoListEnvelope**](../Model/ExtendedUserDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedUsersCountAsync()`

```php
getExtendedUsersCountAsync($api_version, $x_api_version, $extended_user_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of extended users

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$extended_user_dto_collection_query_parameters = new \OpenAPI\Client\Model\ExtendedUserDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ExtendedUserDtoCollectionQueryParameters

try {
    $result = $apiInstance->getExtendedUsersCountAsync($api_version, $x_api_version, $extended_user_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getExtendedUsersCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **extended_user_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ExtendedUserDtoCollectionQueryParameters**](../Model/ExtendedUserDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getUserAdminDetailAsync()`

```php
getUserAdminDetailAsync($user_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\UserAdminDetailDtoEnvelope
```

Retrieve the admin detail aggregate for a user

Returns the user's orders, external logins, and — for the supplied tenant — the enrollment with its granted roles/permissions and the tenant role/permission catalogs. Global administrators only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getUserAdminDetailAsync($user_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserAdminDetailAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserAdminDetailDtoEnvelope**](../Model/UserAdminDetailDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAsync()`

```php
getUserAsync($user_id, $api_version, $x_api_version): \OpenAPI\Client\Model\UserDtoEnvelope
```

Retrieve a user by ID

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getUserAsync($user_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserDtoEnvelope**](../Model/UserDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersAsync()`

```php
getUsersAsync($api_version, $x_api_version, $user_dto_collection_query_parameters): \OpenAPI\Client\Model\UserDtoListEnvelope
```

Retrieve a list of users

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$user_dto_collection_query_parameters = new \OpenAPI\Client\Model\UserDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\UserDtoCollectionQueryParameters

try {
    $result = $apiInstance->getUsersAsync($api_version, $x_api_version, $user_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **user_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\UserDtoCollectionQueryParameters**](../Model/UserDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserDtoListEnvelope**](../Model/UserDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersCountAsync()`

```php
getUsersCountAsync($api_version, $x_api_version, $user_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of users

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$user_dto_collection_query_parameters = new \OpenAPI\Client\Model\UserDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\UserDtoCollectionQueryParameters

try {
    $result = $apiInstance->getUsersCountAsync($api_version, $x_api_version, $user_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **user_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\UserDtoCollectionQueryParameters**](../Model/UserDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchAccountHolderAsync()`

```php
patchAccountHolderAsync($user_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Partially update a user

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchAccountHolderAsync($user_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchAccountHolderAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `setUserPasswordAsync()`

```php
setUserPasswordAsync($user_id, $api_version, $x_api_version, $set_user_password_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Set a user's password

Replaces the user's password with the supplied value. Global administrators only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$set_user_password_dto = new \OpenAPI\Client\Model\SetUserPasswordDto(); // \OpenAPI\Client\Model\SetUserPasswordDto

try {
    $result = $apiInstance->setUserPasswordAsync($user_id, $api_version, $x_api_version, $set_user_password_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUserPasswordAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **set_user_password_dto** | [**\OpenAPI\Client\Model\SetUserPasswordDto**](../Model/SetUserPasswordDto.md)|  | [optional] |

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

## `updateAccountHolderAdminProfileAsync()`

```php
updateAccountHolderAdminProfileAsync($user_id, $api_version, $x_api_version, $user_admin_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a user's admin-managed profile

Updates the identity fields (email/username, re-normalized by Identity) and display fields a global administrator may change on a user, and toggles two-factor and lockout. Normalized email/username and the access-failed count are never accepted. This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$user_admin_update_dto = new \OpenAPI\Client\Model\UserAdminUpdateDto(); // \OpenAPI\Client\Model\UserAdminUpdateDto

try {
    $result = $apiInstance->updateAccountHolderAdminProfileAsync($user_id, $api_version, $x_api_version, $user_admin_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateAccountHolderAdminProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **user_admin_update_dto** | [**\OpenAPI\Client\Model\UserAdminUpdateDto**](../Model/UserAdminUpdateDto.md)|  | [optional] |

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

## `updateAccountHolderAsync()`

```php
updateAccountHolderAsync($user_id, $api_version, $x_api_version, $user_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a user

This action is only available for global administrators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$user_update_dto = new \OpenAPI\Client\Model\UserUpdateDto(); // \OpenAPI\Client\Model\UserUpdateDto

try {
    $result = $apiInstance->updateAccountHolderAsync($user_id, $api_version, $x_api_version, $user_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateAccountHolderAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **user_update_dto** | [**\OpenAPI\Client\Model\UserUpdateDto**](../Model/UserUpdateDto.md)|  | [optional] |

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
