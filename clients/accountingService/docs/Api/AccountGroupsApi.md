# OpenAPI\Client\AccountGroupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccountGroup()**](AccountGroupsApi.md#createAccountGroup) | **POST** /api/v2/AccountingService/AccountGroups | Creates a new account group |
| [**deleteAccountGroup()**](AccountGroupsApi.md#deleteAccountGroup) | **DELETE** /api/v2/AccountingService/AccountGroups/{accountGroupId} | Deletes an existing account group |
| [**getAccountGroup()**](AccountGroupsApi.md#getAccountGroup) | **GET** /api/v2/AccountingService/AccountGroups/{accountGroupId} | Gets the current tenant account group |
| [**getAccountGroups()**](AccountGroupsApi.md#getAccountGroups) | **GET** /api/v2/AccountingService/AccountGroups | Gets the current tenant account groups |
| [**getAccountGroupsCountAsync()**](AccountGroupsApi.md#getAccountGroupsCountAsync) | **GET** /api/v2/AccountingService/AccountGroups/Count | Gets the current tenant accounts count |
| [**updateAccountGroup()**](AccountGroupsApi.md#updateAccountGroup) | **PUT** /api/v2/AccountingService/AccountGroups/{accountGroupId} | Updates an existing account group |


## `createAccountGroup()`

```php
createAccountGroup($tenant_id, $api_version, $x_api_version, $account_group_create_dto): \OpenAPI\Client\Model\AccountGroupDtoEnvelope
```

Creates a new account group

Creates a new account group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_group_create_dto = new \OpenAPI\Client\Model\AccountGroupCreateDto(); // \OpenAPI\Client\Model\AccountGroupCreateDto

try {
    $result = $apiInstance->createAccountGroup($tenant_id, $api_version, $x_api_version, $account_group_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->createAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_group_create_dto** | [**\OpenAPI\Client\Model\AccountGroupCreateDto**](../Model/AccountGroupCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountGroupDtoEnvelope**](../Model/AccountGroupDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountGroup()`

```php
deleteAccountGroup($tenant_id, $account_group_id, $api_version, $x_api_version)
```

Deletes an existing account group

Deletes an existing account group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_group_id = 'account_group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteAccountGroup($tenant_id, $account_group_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->deleteAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountGroup()`

```php
getAccountGroup($tenant_id, $account_group_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountGroupDtoEnvelope
```

Gets the current tenant account group

Get the currently acting tenant account group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_group_id = 'account_group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountGroup($tenant_id, $account_group_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->getAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountGroupDtoEnvelope**](../Model/AccountGroupDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountGroups()`

```php
getAccountGroups($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountGroupDtoListEnvelope
```

Gets the current tenant account groups

Get the currently acting tenant account groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountGroups($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->getAccountGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountGroupDtoListEnvelope**](../Model/AccountGroupDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountGroupsCountAsync()`

```php
getAccountGroupsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant accounts count

Get the currently acting tenant accounts count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountGroupsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->getAccountGroupsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateAccountGroup()`

```php
updateAccountGroup($tenant_id, $account_group_id, $api_version, $x_api_version, $account_group_update_dto): \OpenAPI\Client\Model\AccountGroupDtoEnvelope
```

Updates an existing account group

Updates an existing account group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_group_id = 'account_group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_group_update_dto = new \OpenAPI\Client\Model\AccountGroupUpdateDto(); // \OpenAPI\Client\Model\AccountGroupUpdateDto

try {
    $result = $apiInstance->updateAccountGroup($tenant_id, $account_group_id, $api_version, $x_api_version, $account_group_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->updateAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_group_update_dto** | [**\OpenAPI\Client\Model\AccountGroupUpdateDto**](../Model/AccountGroupUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountGroupDtoEnvelope**](../Model/AccountGroupDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
