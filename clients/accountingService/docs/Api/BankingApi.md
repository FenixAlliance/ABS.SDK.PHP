# OpenAPI\Client\BankingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBank()**](BankingApi.md#createBank) | **POST** /api/v2/AccountingService/Banking | Creates a new bank |
| [**createBankAccount()**](BankingApi.md#createBankAccount) | **POST** /api/v2/AccountingService/Banking/{bankId}/Accounts | Creates a new bank account |
| [**createBankGuarantee()**](BankingApi.md#createBankGuarantee) | **POST** /api/v2/AccountingService/Banking/{bankId}/Guarantees | Creates a new bank guarantee |
| [**createBankTransaction()**](BankingApi.md#createBankTransaction) | **POST** /api/v2/AccountingService/Banking/{bankId}/Transactions | Creates a new bank transaction |
| [**deleteBank()**](BankingApi.md#deleteBank) | **DELETE** /api/v2/AccountingService/Banking/{bankId} | Deletes a bank |
| [**deleteBankAccount()**](BankingApi.md#deleteBankAccount) | **DELETE** /api/v2/AccountingService/Banking/{bankId}/Accounts/{accountId} | Deletes a bank account |
| [**deleteBankGuarantee()**](BankingApi.md#deleteBankGuarantee) | **DELETE** /api/v2/AccountingService/Banking/{bankId}/Guarantees/{guaranteeId} | Deletes a bank guarantee |
| [**deleteBankTransaction()**](BankingApi.md#deleteBankTransaction) | **DELETE** /api/v2/AccountingService/Banking/{bankId}/Transactions/{transactionId} | Deletes a bank transaction |
| [**getBank()**](BankingApi.md#getBank) | **GET** /api/v2/AccountingService/Banking/{bankId} | Gets the current tenant bank |
| [**getBankAccount()**](BankingApi.md#getBankAccount) | **GET** /api/v2/AccountingService/Banking/{bankId}/Accounts/{accountId} | Gets the current tenant bank account |
| [**getBankAccounts()**](BankingApi.md#getBankAccounts) | **GET** /api/v2/AccountingService/Banking/{bankId}/Accounts | Gets the current tenant bank accounts |
| [**getBankAccountsCount()**](BankingApi.md#getBankAccountsCount) | **GET** /api/v2/AccountingService/Banking/{bankId}/Accounts/Count | Gets the current tenant bank accounts count |
| [**getBankGuarantee()**](BankingApi.md#getBankGuarantee) | **GET** /api/v2/AccountingService/Banking/{bankId}/Guarantees/{guaranteeId} | Gets the current tenant bank guarantee |
| [**getBankGuarantees()**](BankingApi.md#getBankGuarantees) | **GET** /api/v2/AccountingService/Banking/{bankId}/Guarantees | Gets the current tenant bank guarantees |
| [**getBankGuaranteesCount()**](BankingApi.md#getBankGuaranteesCount) | **GET** /api/v2/AccountingService/Banking/{bankId}/Guarantees/Count | Gets the current tenant bank guarantees count |
| [**getBankTransaction()**](BankingApi.md#getBankTransaction) | **GET** /api/v2/AccountingService/Banking/{bankId}/Transactions/{transactionId} | Gets the current tenant bank transaction |
| [**getBankTransactions()**](BankingApi.md#getBankTransactions) | **GET** /api/v2/AccountingService/Banking/{bankId}/Transactions | Gets the current tenant bank transactions |
| [**getBankTransactionsCount()**](BankingApi.md#getBankTransactionsCount) | **GET** /api/v2/AccountingService/Banking/{bankId}/Transactions/Count | Gets the current tenant bank transactions count |
| [**getBanks()**](BankingApi.md#getBanks) | **GET** /api/v2/AccountingService/Banking | Gets the current tenant banks |
| [**getBanksCount()**](BankingApi.md#getBanksCount) | **GET** /api/v2/AccountingService/Banking/Count | Gets the current tenant banks count |
| [**updateBank()**](BankingApi.md#updateBank) | **PUT** /api/v2/AccountingService/Banking/{bankId} | Updates a bank |
| [**updateBankAccount()**](BankingApi.md#updateBankAccount) | **PUT** /api/v2/AccountingService/Banking/{bankId}/Accounts/{accountId} | Updates a bank account |
| [**updateBankGuarantee()**](BankingApi.md#updateBankGuarantee) | **PUT** /api/v2/AccountingService/Banking/{bankId}/Guarantees/{guaranteeId} | Updates a bank guarantee |
| [**updateBankTransaction()**](BankingApi.md#updateBankTransaction) | **PUT** /api/v2/AccountingService/Banking/{bankId}/Transactions/{transactionId} | Updates a bank transaction |


## `createBank()`

```php
createBank($tenant_id, $api_version, $x_api_version, $bank_create_dto): \OpenAPI\Client\Model\BankDtoEnvelope
```

Creates a new bank

Create a new bank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_create_dto = new \OpenAPI\Client\Model\BankCreateDto(); // \OpenAPI\Client\Model\BankCreateDto

try {
    $result = $apiInstance->createBank($tenant_id, $api_version, $x_api_version, $bank_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->createBank: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_create_dto** | [**\OpenAPI\Client\Model\BankCreateDto**](../Model/BankCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankDtoEnvelope**](../Model/BankDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBankAccount()`

```php
createBankAccount($tenant_id, $bank_id, $api_version, $x_api_version, $bank_account_create_dto): \OpenAPI\Client\Model\BankAccountDtoEnvelope
```

Creates a new bank account

Create a new bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_account_create_dto = new \OpenAPI\Client\Model\BankAccountCreateDto(); // \OpenAPI\Client\Model\BankAccountCreateDto

try {
    $result = $apiInstance->createBankAccount($tenant_id, $bank_id, $api_version, $x_api_version, $bank_account_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->createBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_account_create_dto** | [**\OpenAPI\Client\Model\BankAccountCreateDto**](../Model/BankAccountCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankAccountDtoEnvelope**](../Model/BankAccountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBankGuarantee()`

```php
createBankGuarantee($tenant_id, $bank_id, $api_version, $x_api_version, $bank_guarantee_create_dto): \OpenAPI\Client\Model\BankGuaranteeDtoEnvelope
```

Creates a new bank guarantee

Create a new bank guarantee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_guarantee_create_dto = new \OpenAPI\Client\Model\BankGuaranteeCreateDto(); // \OpenAPI\Client\Model\BankGuaranteeCreateDto

try {
    $result = $apiInstance->createBankGuarantee($tenant_id, $bank_id, $api_version, $x_api_version, $bank_guarantee_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->createBankGuarantee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_guarantee_create_dto** | [**\OpenAPI\Client\Model\BankGuaranteeCreateDto**](../Model/BankGuaranteeCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankGuaranteeDtoEnvelope**](../Model/BankGuaranteeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBankTransaction()`

```php
createBankTransaction($tenant_id, $bank_id, $api_version, $x_api_version, $bank_transaction_create_dto): \OpenAPI\Client\Model\BankTransactionDtoEnvelope
```

Creates a new bank transaction

Create a new bank transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_transaction_create_dto = new \OpenAPI\Client\Model\BankTransactionCreateDto(); // \OpenAPI\Client\Model\BankTransactionCreateDto

try {
    $result = $apiInstance->createBankTransaction($tenant_id, $bank_id, $api_version, $x_api_version, $bank_transaction_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->createBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_transaction_create_dto** | [**\OpenAPI\Client\Model\BankTransactionCreateDto**](../Model/BankTransactionCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankTransactionDtoEnvelope**](../Model/BankTransactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBank()`

```php
deleteBank($tenant_id, $bank_id, $api_version, $x_api_version)
```

Deletes a bank

Delete a bank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteBank($tenant_id, $bank_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->deleteBank: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
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

## `deleteBankAccount()`

```php
deleteBankAccount($tenant_id, $bank_id, $account_id, $api_version, $x_api_version)
```

Deletes a bank account

Delete a bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteBankAccount($tenant_id, $bank_id, $account_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->deleteBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `deleteBankGuarantee()`

```php
deleteBankGuarantee($tenant_id, $bank_id, $guarantee_id, $api_version, $x_api_version)
```

Deletes a bank guarantee

Delete a bank guarantee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$guarantee_id = 'guarantee_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteBankGuarantee($tenant_id, $bank_id, $guarantee_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->deleteBankGuarantee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **guarantee_id** | **string**|  | |
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

## `deleteBankTransaction()`

```php
deleteBankTransaction($tenant_id, $bank_id, $transaction_id, $api_version, $x_api_version)
```

Deletes a bank transaction

Delete a bank transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$transaction_id = 'transaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteBankTransaction($tenant_id, $bank_id, $transaction_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->deleteBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **transaction_id** | **string**|  | |
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

## `getBank()`

```php
getBank($tenant_id, $bank_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankDtoEnvelope
```

Gets the current tenant bank

Get the currently acting tenant bank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBank($tenant_id, $bank_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBank: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankDtoEnvelope**](../Model/BankDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccount()`

```php
getBankAccount($tenant_id, $bank_id, $account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankAccountDtoEnvelope
```

Gets the current tenant bank account

Get the currently acting tenant bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankAccount($tenant_id, $bank_id, $account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankAccountDtoEnvelope**](../Model/BankAccountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccounts()`

```php
getBankAccounts($tenant_id, $bank_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankAccountDtoListEnvelope
```

Gets the current tenant bank accounts

Get the currently acting tenant bank accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankAccounts($tenant_id, $bank_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankAccountDtoListEnvelope**](../Model/BankAccountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccountsCount()`

```php
getBankAccountsCount($tenant_id, $bank_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant bank accounts count

Get the currently acting tenant bank accounts count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankAccountsCount($tenant_id, $bank_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankAccountsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
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

## `getBankGuarantee()`

```php
getBankGuarantee($tenant_id, $bank_id, $guarantee_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankGuaranteeDtoEnvelope
```

Gets the current tenant bank guarantee

Get the currently acting tenant bank guarantee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$guarantee_id = 'guarantee_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankGuarantee($tenant_id, $bank_id, $guarantee_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankGuarantee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **guarantee_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankGuaranteeDtoEnvelope**](../Model/BankGuaranteeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankGuarantees()`

```php
getBankGuarantees($tenant_id, $bank_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankGuaranteeDtoListEnvelope
```

Gets the current tenant bank guarantees

Get the currently acting tenant bank guarantees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankGuarantees($tenant_id, $bank_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankGuarantees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankGuaranteeDtoListEnvelope**](../Model/BankGuaranteeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankGuaranteesCount()`

```php
getBankGuaranteesCount($tenant_id, $bank_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant bank guarantees count

Get the currently acting tenant bank guarantees count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankGuaranteesCount($tenant_id, $bank_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankGuaranteesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
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

## `getBankTransaction()`

```php
getBankTransaction($tenant_id, $bank_id, $transaction_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankTransactionDtoEnvelope
```

Gets the current tenant bank transaction

Get the currently acting tenant bank transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$transaction_id = 'transaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankTransaction($tenant_id, $bank_id, $transaction_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **transaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankTransactionDtoEnvelope**](../Model/BankTransactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankTransactions()`

```php
getBankTransactions($tenant_id, $bank_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankTransactionDtoListEnvelope
```

Gets the current tenant bank transactions

Get the currently acting tenant bank transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankTransactions($tenant_id, $bank_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankTransactionDtoListEnvelope**](../Model/BankTransactionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankTransactionsCount()`

```php
getBankTransactionsCount($tenant_id, $bank_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant bank transactions count

Get the currently acting tenant bank transactions count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBankTransactionsCount($tenant_id, $bank_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBankTransactionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
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

## `getBanks()`

```php
getBanks($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankDtoListEnvelope
```

Gets the current tenant banks

Get the currently acting tenant banks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBanks($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBanks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankDtoListEnvelope**](../Model/BankDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBanksCount()`

```php
getBanksCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Gets the current tenant banks count

Get the currently acting tenant banks count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getBanksCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->getBanksCount: ', $e->getMessage(), PHP_EOL;
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

## `updateBank()`

```php
updateBank($tenant_id, $bank_id, $api_version, $x_api_version, $bank_update_dto): \OpenAPI\Client\Model\BankDtoEnvelope
```

Updates a bank

Update a bank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_update_dto = new \OpenAPI\Client\Model\BankUpdateDto(); // \OpenAPI\Client\Model\BankUpdateDto

try {
    $result = $apiInstance->updateBank($tenant_id, $bank_id, $api_version, $x_api_version, $bank_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->updateBank: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_update_dto** | [**\OpenAPI\Client\Model\BankUpdateDto**](../Model/BankUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankDtoEnvelope**](../Model/BankDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBankAccount()`

```php
updateBankAccount($tenant_id, $bank_id, $account_id, $api_version, $x_api_version, $bank_account_update_dto): \OpenAPI\Client\Model\BankAccountDtoEnvelope
```

Updates a bank account

Update a bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$account_id = 'account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_account_update_dto = new \OpenAPI\Client\Model\BankAccountUpdateDto(); // \OpenAPI\Client\Model\BankAccountUpdateDto

try {
    $result = $apiInstance->updateBankAccount($tenant_id, $bank_id, $account_id, $api_version, $x_api_version, $bank_account_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->updateBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_account_update_dto** | [**\OpenAPI\Client\Model\BankAccountUpdateDto**](../Model/BankAccountUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankAccountDtoEnvelope**](../Model/BankAccountDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBankGuarantee()`

```php
updateBankGuarantee($tenant_id, $bank_id, $guarantee_id, $api_version, $x_api_version, $bank_guarantee_update_dto): \OpenAPI\Client\Model\BankGuaranteeDtoEnvelope
```

Updates a bank guarantee

Update a bank guarantee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$guarantee_id = 'guarantee_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_guarantee_update_dto = new \OpenAPI\Client\Model\BankGuaranteeUpdateDto(); // \OpenAPI\Client\Model\BankGuaranteeUpdateDto

try {
    $result = $apiInstance->updateBankGuarantee($tenant_id, $bank_id, $guarantee_id, $api_version, $x_api_version, $bank_guarantee_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->updateBankGuarantee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **guarantee_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_guarantee_update_dto** | [**\OpenAPI\Client\Model\BankGuaranteeUpdateDto**](../Model/BankGuaranteeUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankGuaranteeDtoEnvelope**](../Model/BankGuaranteeDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBankTransaction()`

```php
updateBankTransaction($tenant_id, $bank_id, $transaction_id, $api_version, $x_api_version, $bank_transaction_update_dto): \OpenAPI\Client\Model\BankTransactionDtoEnvelope
```

Updates a bank transaction

Update a bank transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$bank_id = 'bank_id_example'; // string
$transaction_id = 'transaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_transaction_update_dto = new \OpenAPI\Client\Model\BankTransactionUpdateDto(); // \OpenAPI\Client\Model\BankTransactionUpdateDto

try {
    $result = $apiInstance->updateBankTransaction($tenant_id, $bank_id, $transaction_id, $api_version, $x_api_version, $bank_transaction_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingApi->updateBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bank_id** | **string**|  | |
| **transaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_transaction_update_dto** | [**\OpenAPI\Client\Model\BankTransactionUpdateDto**](../Model/BankTransactionUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankTransactionDtoEnvelope**](../Model/BankTransactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
