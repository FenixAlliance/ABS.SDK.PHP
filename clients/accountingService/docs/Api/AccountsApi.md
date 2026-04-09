# OpenAPI\Client\AccountsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**balanceAccountAsync()**](AccountsApi.md#balanceAccountAsync) | **POST** /api/v2/AccountingService/Accounts/{accountId}/Balance | Balance account |
| [**balanceRootAccountAsync()**](AccountsApi.md#balanceRootAccountAsync) | **POST** /api/v2/AccountingService/Accounts/Root/Balance | Balance root account |
| [**createAccountAsync()**](AccountsApi.md#createAccountAsync) | **POST** /api/v2/AccountingService/Accounts | Get root accounts |
| [**createAccountCreditAsync()**](AccountsApi.md#createAccountCreditAsync) | **POST** /api/v2/AccountingService/Accounts/{accountId}/Credits | Create account credit |
| [**createAccountDebitAsync()**](AccountsApi.md#createAccountDebitAsync) | **POST** /api/v2/AccountingService/Accounts/{accountId}/Debits | Create account debit |
| [**createAccountEntryAsync()**](AccountsApi.md#createAccountEntryAsync) | **POST** /api/v2/AccountingService/Accounts/{accountId}/Entries | Create account entry |
| [**createAccountRelationAsync()**](AccountsApi.md#createAccountRelationAsync) | **POST** /api/v2/AccountingService/Accounts/Relations | Create account relation |
| [**createAccountTypeAsync()**](AccountsApi.md#createAccountTypeAsync) | **POST** /api/v2/AccountingService/Accounts/Types | Create account type |
| [**deleteAccountAsync()**](AccountsApi.md#deleteAccountAsync) | **DELETE** /api/v2/AccountingService/Accounts/{accountId} | Delete an account |
| [**deleteAccountEntryAsync()**](AccountsApi.md#deleteAccountEntryAsync) | **DELETE** /api/v2/AccountingService/Accounts/{accountId}/Entries/{entryId} | Delete account entry |
| [**deleteAccountRelationAsync()**](AccountsApi.md#deleteAccountRelationAsync) | **DELETE** /api/v2/AccountingService/Accounts/Relations/{accountRelationId} | Delete account relation |
| [**deleteAccountTypeAsync()**](AccountsApi.md#deleteAccountTypeAsync) | **DELETE** /api/v2/AccountingService/Accounts/Types/{accountTypeId} | Delete account type |
| [**getAccountAggregateAsync()**](AccountsApi.md#getAccountAggregateAsync) | **POST** /api/v2/AccountingService/Accounts/Aggregate | Get account aggregate |
| [**getAccountCreditsAsync()**](AccountsApi.md#getAccountCreditsAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Credits | Get account credits |
| [**getAccountCreditsCountAsync()**](AccountsApi.md#getAccountCreditsCountAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Credits/Count | Get account credits count |
| [**getAccountDebitsAsync()**](AccountsApi.md#getAccountDebitsAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Debits | Get account debits |
| [**getAccountDebitsCountAsync()**](AccountsApi.md#getAccountDebitsCountAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Debits/Count | Get account debits count |
| [**getAccountDetailsAsync()**](AccountsApi.md#getAccountDetailsAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId} | Get account details |
| [**getAccountEntriesAsync()**](AccountsApi.md#getAccountEntriesAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Entries | Get account entries |
| [**getAccountEntryAsync()**](AccountsApi.md#getAccountEntryAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Entries/{entryId} | Get account entry |
| [**getAccountRelationsAsync()**](AccountsApi.md#getAccountRelationsAsync) | **GET** /api/v2/AccountingService/Accounts/Relations | Get account relations |
| [**getAccountRelationsCountAsync()**](AccountsApi.md#getAccountRelationsCountAsync) | **GET** /api/v2/AccountingService/Accounts/Relations/Count | Get account relations count |
| [**getAccountTypesAsync()**](AccountsApi.md#getAccountTypesAsync) | **GET** /api/v2/AccountingService/Accounts/Types | Get account types |
| [**getAccountTypesCountAsync()**](AccountsApi.md#getAccountTypesCountAsync) | **GET** /api/v2/AccountingService/Accounts/Types/Count | Get account types count |
| [**getAccountsAsync()**](AccountsApi.md#getAccountsAsync) | **GET** /api/v2/AccountingService/Accounts | Creates a new account |
| [**getAccountsCountAsync()**](AccountsApi.md#getAccountsCountAsync) | **GET** /api/v2/AccountingService/Accounts/Count | Get the number of accounts |
| [**getChildAccountsAsync()**](AccountsApi.md#getChildAccountsAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Children | Get child accounts |
| [**getCreditAccountEntriesAsync()**](AccountsApi.md#getCreditAccountEntriesAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Entries/Credit | Get credit account entries |
| [**getDebitAccountEntriesAsync()**](AccountsApi.md#getDebitAccountEntriesAsync) | **GET** /api/v2/AccountingService/Accounts/{accountId}/Entries/Debit | Get debit account entries |
| [**getRootAccountsAsync()**](AccountsApi.md#getRootAccountsAsync) | **GET** /api/v2/AccountingService/Accounts/Root | Get root accounts |
| [**patchAccountAsync()**](AccountsApi.md#patchAccountAsync) | **PATCH** /api/v2/AccountingService/Accounts/{accountId} | Patch an account |
| [**updateAccountAsync()**](AccountsApi.md#updateAccountAsync) | **PUT** /api/v2/AccountingService/Accounts/{accountId} | Update an account |
| [**updateAccountEntryAsync()**](AccountsApi.md#updateAccountEntryAsync) | **PUT** /api/v2/AccountingService/Accounts/{accountId}/Entries/{entryId} | Update account entry |
| [**updateAccountRelationAsync()**](AccountsApi.md#updateAccountRelationAsync) | **PUT** /api/v2/AccountingService/Accounts/Relations/{accountRelationId} | Update account relation |
| [**updateAccountTypeAsync()**](AccountsApi.md#updateAccountTypeAsync) | **PUT** /api/v2/AccountingService/Accounts/Types/{accountTypeId} | Update account type |


## `balanceAccountAsync()`

```php
balanceAccountAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountDtoEnvelope
```

Balance account

Balance account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->balanceAccountAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->balanceAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoEnvelope**](../Model/AccountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `balanceRootAccountAsync()`

```php
balanceRootAccountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountDtoListEnvelope
```

Balance root account

Balance root account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->balanceRootAccountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->balanceRootAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoListEnvelope**](../Model/AccountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountAsync()`

```php
createAccountAsync($tenant_id, $api_version, $x_api_version, $account_create_dto): \OpenAPI\Client\Model\AccountDtoListEnvelope
```

Get root accounts

Get root accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_create_dto = new \OpenAPI\Client\Model\AccountCreateDto(); // \OpenAPI\Client\Model\AccountCreateDto

try {
    $result = $apiInstance->createAccountAsync($tenant_id, $api_version, $x_api_version, $account_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_create_dto** | [**\OpenAPI\Client\Model\AccountCreateDto**](../Model/AccountCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoListEnvelope**](../Model/AccountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountCreditAsync()`

```php
createAccountCreditAsync($tenant_id, $account_id, $api_version, $x_api_version, $accounting_entry_create_dto): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Create account credit

Create account credit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$accounting_entry_create_dto = new \OpenAPI\Client\Model\AccountingEntryCreateDto(); // \OpenAPI\Client\Model\AccountingEntryCreateDto

try {
    $result = $apiInstance->createAccountCreditAsync($tenant_id, $account_id, $api_version, $x_api_version, $accounting_entry_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccountCreditAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **accounting_entry_create_dto** | [**\OpenAPI\Client\Model\AccountingEntryCreateDto**](../Model/AccountingEntryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountDebitAsync()`

```php
createAccountDebitAsync($tenant_id, $account_id, $api_version, $x_api_version, $accounting_entry_create_dto): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Create account debit

Create account debit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$accounting_entry_create_dto = new \OpenAPI\Client\Model\AccountingEntryCreateDto(); // \OpenAPI\Client\Model\AccountingEntryCreateDto

try {
    $result = $apiInstance->createAccountDebitAsync($tenant_id, $account_id, $api_version, $x_api_version, $accounting_entry_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccountDebitAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **accounting_entry_create_dto** | [**\OpenAPI\Client\Model\AccountingEntryCreateDto**](../Model/AccountingEntryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountEntryAsync()`

```php
createAccountEntryAsync($tenant_id, $account_id, $api_version, $x_api_version, $accounting_entry_create_dto): \OpenAPI\Client\Model\AccountingEntryDtoEnvelope
```

Create account entry

Create account entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$accounting_entry_create_dto = new \OpenAPI\Client\Model\AccountingEntryCreateDto(); // \OpenAPI\Client\Model\AccountingEntryCreateDto

try {
    $result = $apiInstance->createAccountEntryAsync($tenant_id, $account_id, $api_version, $x_api_version, $accounting_entry_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccountEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **accounting_entry_create_dto** | [**\OpenAPI\Client\Model\AccountingEntryCreateDto**](../Model/AccountingEntryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoEnvelope**](../Model/AccountingEntryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountRelationAsync()`

```php
createAccountRelationAsync($tenant_id, $account_id, $api_version, $x_api_version, $account_relation_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create account relation

Create account relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_relation_create_dto = new \OpenAPI\Client\Model\AccountRelationCreateDto(); // \OpenAPI\Client\Model\AccountRelationCreateDto

try {
    $result = $apiInstance->createAccountRelationAsync($tenant_id, $account_id, $api_version, $x_api_version, $account_relation_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccountRelationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_relation_create_dto** | [**\OpenAPI\Client\Model\AccountRelationCreateDto**](../Model/AccountRelationCreateDto.md)|  | [optional] |

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

## `createAccountTypeAsync()`

```php
createAccountTypeAsync($tenant_id, $account_id, $api_version, $x_api_version, $account_type_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create account type

Create account type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_type_create_dto = new \OpenAPI\Client\Model\AccountTypeCreateDto(); // \OpenAPI\Client\Model\AccountTypeCreateDto

try {
    $result = $apiInstance->createAccountTypeAsync($tenant_id, $account_id, $api_version, $x_api_version, $account_type_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccountTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_type_create_dto** | [**\OpenAPI\Client\Model\AccountTypeCreateDto**](../Model/AccountTypeCreateDto.md)|  | [optional] |

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

## `deleteAccountAsync()`

```php
deleteAccountAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an account

Delete an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAccountAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `deleteAccountEntryAsync()`

```php
deleteAccountEntryAsync($tenant_id, $account_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete account entry

Delete account entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAccountEntryAsync($tenant_id, $account_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteAccountEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **entry_id** | **string**|  | |
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

## `deleteAccountRelationAsync()`

```php
deleteAccountRelationAsync($tenant_id, $account_relation_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete account relation

Delete account relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_relation_id = 'account_relation_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAccountRelationAsync($tenant_id, $account_relation_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteAccountRelationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_relation_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `deleteAccountTypeAsync()`

```php
deleteAccountTypeAsync($tenant_id, $account_type_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete account type

Delete account type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_type_id = 'account_type_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteAccountTypeAsync($tenant_id, $account_type_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteAccountTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_type_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `getAccountAggregateAsync()`

```php
getAccountAggregateAsync($tenant_id, $currency_id, $api_version, $x_api_version, $account_dto): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Get account aggregate

Get account aggregate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$currency_id = 'currency_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_dto = array(new \OpenAPI\Client\Model\AccountDto()); // \OpenAPI\Client\Model\AccountDto[]

try {
    $result = $apiInstance->getAccountAggregateAsync($tenant_id, $currency_id, $api_version, $x_api_version, $account_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountAggregateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **currency_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_dto** | [**\OpenAPI\Client\Model\AccountDto[]**](../Model/AccountDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountCreditsAsync()`

```php
getAccountCreditsAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Get account credits

Get account credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountCreditsAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountCreditsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountCreditsCountAsync()`

```php
getAccountCreditsCountAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get account credits count

Get account credits count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountCreditsCountAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountCreditsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `getAccountDebitsAsync()`

```php
getAccountDebitsAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Get account debits

Get account debits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountDebitsAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountDebitsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountDebitsCountAsync()`

```php
getAccountDebitsCountAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get account debits count

Get account debits count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountDebitsCountAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountDebitsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `getAccountDetailsAsync()`

```php
getAccountDetailsAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountDtoEnvelope
```

Get account details

Get account details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountDetailsAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoEnvelope**](../Model/AccountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountEntriesAsync()`

```php
getAccountEntriesAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Get account entries

Get account entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountEntriesAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountEntriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountEntryAsync()`

```php
getAccountEntryAsync($tenant_id, $account_id, $entry_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountingEntryDtoEnvelope
```

Get account entry

Get account entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountEntryAsync($tenant_id, $account_id, $entry_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoEnvelope**](../Model/AccountingEntryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountRelationsAsync()`

```php
getAccountRelationsAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountRelationDtoListEnvelope
```

Get account relations

Get account relations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountRelationsAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountRelationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountRelationDtoListEnvelope**](../Model/AccountRelationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountRelationsCountAsync()`

```php
getAccountRelationsCountAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get account relations count

Get account relations count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountRelationsCountAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountRelationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `getAccountTypesAsync()`

```php
getAccountTypesAsync($tenant_id, $account_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountTypeDtoListEnvelope
```

Get account types

Get account types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_type_id = 'account_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountTypesAsync($tenant_id, $account_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_type_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountTypeDtoListEnvelope**](../Model/AccountTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTypesCountAsync()`

```php
getAccountTypesCountAsync($tenant_id, $account_type_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get account types count

Get account types count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_type_id = 'account_type_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountTypesCountAsync($tenant_id, $account_type_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountTypesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_type_id** | **string**|  | |
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

## `getAccountsAsync()`

```php
getAccountsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountDtoListEnvelope
```

Creates a new account

Creates a new account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoListEnvelope**](../Model/AccountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsCountAsync()`

```php
getAccountsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the number of accounts

Get the number of accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAccountsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountsCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `getChildAccountsAsync()`

```php
getChildAccountsAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountDtoListEnvelope
```

Get child accounts

Get child accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getChildAccountsAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getChildAccountsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoListEnvelope**](../Model/AccountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditAccountEntriesAsync()`

```php
getCreditAccountEntriesAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Get credit account entries

Get credit account entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCreditAccountEntriesAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getCreditAccountEntriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDebitAccountEntriesAsync()`

```php
getDebitAccountEntriesAsync($tenant_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountingEntryDtoListEnvelope
```

Get debit account entries

Get debit account entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getDebitAccountEntriesAsync($tenant_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getDebitAccountEntriesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDtoListEnvelope**](../Model/AccountingEntryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRootAccountsAsync()`

```php
getRootAccountsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\AccountDtoListEnvelope
```

Get root accounts

Get root accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRootAccountsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getRootAccountsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoListEnvelope**](../Model/AccountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAccountAsync()`

```php
patchAccountAsync($tenant_id, $account_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch an account

Patch an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchAccountAsync($tenant_id, $account_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->patchAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `updateAccountAsync()`

```php
updateAccountAsync($tenant_id, $account_id, $api_version, $x_api_version, $account_update_dto): \OpenAPI\Client\Model\AccountDtoEnvelope
```

Update an account

Update an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_update_dto = new \OpenAPI\Client\Model\AccountUpdateDto(); // \OpenAPI\Client\Model\AccountUpdateDto

try {
    $result = $apiInstance->updateAccountAsync($tenant_id, $account_id, $api_version, $x_api_version, $account_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_update_dto** | [**\OpenAPI\Client\Model\AccountUpdateDto**](../Model/AccountUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountDtoEnvelope**](../Model/AccountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountEntryAsync()`

```php
updateAccountEntryAsync($tenant_id, $account_id, $entry_id, $api_version, $x_api_version, $accounting_entry_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update account entry

Update account entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_id = 'account_id_example'; // string
$entry_id = 'entry_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$accounting_entry_update_dto = new \OpenAPI\Client\Model\AccountingEntryUpdateDto(); // \OpenAPI\Client\Model\AccountingEntryUpdateDto

try {
    $result = $apiInstance->updateAccountEntryAsync($tenant_id, $account_id, $entry_id, $api_version, $x_api_version, $accounting_entry_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccountEntryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **accounting_entry_update_dto** | [**\OpenAPI\Client\Model\AccountingEntryUpdateDto**](../Model/AccountingEntryUpdateDto.md)|  | [optional] |

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

## `updateAccountRelationAsync()`

```php
updateAccountRelationAsync($tenant_id, $account_relation_id, $account_id, $api_version, $x_api_version, $account_relation_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update account relation

Update account relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_relation_id = 'account_relation_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_relation_update_dto = new \OpenAPI\Client\Model\AccountRelationUpdateDto(); // \OpenAPI\Client\Model\AccountRelationUpdateDto

try {
    $result = $apiInstance->updateAccountRelationAsync($tenant_id, $account_relation_id, $account_id, $api_version, $x_api_version, $account_relation_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccountRelationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_relation_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_relation_update_dto** | [**\OpenAPI\Client\Model\AccountRelationUpdateDto**](../Model/AccountRelationUpdateDto.md)|  | [optional] |

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

## `updateAccountTypeAsync()`

```php
updateAccountTypeAsync($tenant_id, $account_type_id, $account_id, $api_version, $x_api_version, $account_type_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update account type

Update account type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$account_type_id = 'account_type_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$account_type_update_dto = new \OpenAPI\Client\Model\AccountTypeUpdateDto(); // \OpenAPI\Client\Model\AccountTypeUpdateDto

try {
    $result = $apiInstance->updateAccountTypeAsync($tenant_id, $account_type_id, $account_id, $api_version, $x_api_version, $account_type_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccountTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **account_type_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **account_type_update_dto** | [**\OpenAPI\Client\Model\AccountTypeUpdateDto**](../Model/AccountTypeUpdateDto.md)|  | [optional] |

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
