# OpenAPI\Client\WalletsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLocationForWalletAsync()**](WalletsApi.md#createLocationForWalletAsync) | **POST** /api/v2/WalletsService/Wallets/{walletId}/Locations | Create Wallet Location |
| [**createWalletBankAccountAsync()**](WalletsApi.md#createWalletBankAccountAsync) | **POST** /api/v2/WalletsService/Wallets/{walletId}/BankAccounts | Create Wallet Bank Account |
| [**createWalletPaymentAsync()**](WalletsApi.md#createWalletPaymentAsync) | **POST** /api/v2/WalletsService/Wallets/{walletId}/Payments | Create Wallet Payment |
| [**createWalletTokenAsync()**](WalletsApi.md#createWalletTokenAsync) | **POST** /api/v2/WalletsService/Wallets/{walletId}/Tokens | Create Wallet Token |
| [**createWalletWithdrawRequestAsync()**](WalletsApi.md#createWalletWithdrawRequestAsync) | **POST** /api/v2/WalletsService/Wallets/{walletId}/Withdraws | Create Wallet Withdraw Request |
| [**deleteLocationForWalletAsync()**](WalletsApi.md#deleteLocationForWalletAsync) | **DELETE** /api/v2/WalletsService/Wallets/{walletId}/Locations/{locationId} | Delete Wallet Location |
| [**deleteWalletBankAccountAsync()**](WalletsApi.md#deleteWalletBankAccountAsync) | **DELETE** /api/v2/WalletsService/Wallets/{walletId}/BankAccounts/{bankAccountId} | Delete Wallet Bank Account |
| [**deleteWalletTokenAsync()**](WalletsApi.md#deleteWalletTokenAsync) | **DELETE** /api/v2/WalletsService/Wallets/{walletId}/Tokens/{tokenId} | Delete Wallet Token |
| [**getIncomingPaymentsAsync()**](WalletsApi.md#getIncomingPaymentsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Incoming | Get Incoming Payments |
| [**getIncomingPaymentsCountAsync()**](WalletsApi.md#getIncomingPaymentsCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Incoming/Count | Get Incoming Payments Count |
| [**getIncomingWalletInvoicesAsync()**](WalletsApi.md#getIncomingWalletInvoicesAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Incoming | Get Incoming Wallet Invoices |
| [**getIncomingWalletInvoicesCountAsync()**](WalletsApi.md#getIncomingWalletInvoicesCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Incoming/Count | Get Incoming Wallet Invoices Count |
| [**getLocationForWalletAsync()**](WalletsApi.md#getLocationForWalletAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Locations/{locationId} | Get Wallet Location |
| [**getLocationsForWalletAsync()**](WalletsApi.md#getLocationsForWalletAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Locations | Get Wallet Locations |
| [**getLocationsForWalletCountAsync()**](WalletsApi.md#getLocationsForWalletCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Locations/Count | Get Wallet Locations Count |
| [**getOutgoingPaymentsAsync()**](WalletsApi.md#getOutgoingPaymentsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Outgoing | Get Outgoing Payments |
| [**getOutgoingPaymentsCountAsync()**](WalletsApi.md#getOutgoingPaymentsCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Outgoing/Count | Get Outgoing Payments Count |
| [**getOutgoingWalletInvoicesAsync()**](WalletsApi.md#getOutgoingWalletInvoicesAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Outgoing | Get Outgoing Wallet Invoices |
| [**getOutgoingWalletInvoicesCountAsync()**](WalletsApi.md#getOutgoingWalletInvoicesCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Outgoing/Count | Get Outgoing Wallet Invoices Count |
| [**getWalletBankAccountAsync()**](WalletsApi.md#getWalletBankAccountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/BankAccounts/{bankAccountId} | Get Wallet Bank Account |
| [**getWalletBankAccountsAsync()**](WalletsApi.md#getWalletBankAccountsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/BankAccounts | Get Wallet Bank Accounts |
| [**getWalletBankAccountsCountAsync()**](WalletsApi.md#getWalletBankAccountsCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/BankAccounts/Count | Get Wallet Bank Accounts Count |
| [**getWalletChargebacksAsync()**](WalletsApi.md#getWalletChargebacksAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Chargebacks | Get Wallet Chargebacks |
| [**getWalletChargebacksCountAsync()**](WalletsApi.md#getWalletChargebacksCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Chargebacks/Count | Get Wallet Chargebacks Count |
| [**getWalletDetailsAsync()**](WalletsApi.md#getWalletDetailsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId} | Get Wallet Details |
| [**getWalletExtendedOrdersAsync()**](WalletsApi.md#getWalletExtendedOrdersAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Orders/Extended | Get Wallet Extended Orders |
| [**getWalletInvoicesAsync()**](WalletsApi.md#getWalletInvoicesAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices | Get Wallet Invoices |
| [**getWalletInvoicesCountAsync()**](WalletsApi.md#getWalletInvoicesCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Count | Get Wallet Invoices Count |
| [**getWalletOrdersAsync()**](WalletsApi.md#getWalletOrdersAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Orders | Get Wallet Orders |
| [**getWalletOrdersCountAsync()**](WalletsApi.md#getWalletOrdersCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Orders/Count | Get Wallet Orders Count |
| [**getWalletPaymentsAsync()**](WalletsApi.md#getWalletPaymentsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments | Get Wallet Payments |
| [**getWalletPaymentsCountAsync()**](WalletsApi.md#getWalletPaymentsCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Count | Get Wallet Payments Count |
| [**getWalletQuotesAsync()**](WalletsApi.md#getWalletQuotesAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Quotes | Get Wallet Quotes |
| [**getWalletQuotesCountAsync()**](WalletsApi.md#getWalletQuotesCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Quotes/Count | Get Wallet Quotes Count |
| [**getWalletRefundsAsync()**](WalletsApi.md#getWalletRefundsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Refunds | Get Wallet Refunds |
| [**getWalletRefundsCountAsync()**](WalletsApi.md#getWalletRefundsCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Refunds/Count | Get Wallet Refunds Count |
| [**getWalletTokenAsync()**](WalletsApi.md#getWalletTokenAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Tokens/{tokenId} | Get Wallet Token |
| [**getWalletTokensAsync()**](WalletsApi.md#getWalletTokensAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Tokens | Get Wallet Tokens |
| [**getWalletTokensCountAsync()**](WalletsApi.md#getWalletTokensCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Tokens/Count | Get Wallet Tokens Count |
| [**getWalletWithdrawRequestsAsync()**](WalletsApi.md#getWalletWithdrawRequestsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/WithdrawRequests | Get Wallet Withdraw Requests |
| [**getWalletWithdrawRequestsCountAsync()**](WalletsApi.md#getWalletWithdrawRequestsCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/WithdrawRequests/Count | Get Wallet Withdraw Requests Count |
| [**getWalletWithdrawsAsync()**](WalletsApi.md#getWalletWithdrawsAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Withdraws | Get Wallet Withdraws |
| [**getWalletWithdrawsCountAsync()**](WalletsApi.md#getWalletWithdrawsCountAsync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Withdraws/Count | Get Wallet Withdraws Count |
| [**patchWalletBankAccountAsync()**](WalletsApi.md#patchWalletBankAccountAsync) | **PATCH** /api/v2/WalletsService/Wallets/{walletId}/BankAccounts/{bankAccountId} | Patch Wallet Bank Account |
| [**patchWalletTokenAsync()**](WalletsApi.md#patchWalletTokenAsync) | **PATCH** /api/v2/WalletsService/Wallets/{walletId}/Tokens/{tokenId} | Patch Wallet Token |
| [**updateLocationForWalletAsync()**](WalletsApi.md#updateLocationForWalletAsync) | **PUT** /api/v2/WalletsService/Wallets/{walletId}/Locations/{locationId} | Update Wallet Location |
| [**updateWalletBankAccountAsync()**](WalletsApi.md#updateWalletBankAccountAsync) | **PUT** /api/v2/WalletsService/Wallets/{walletId}/BankAccounts/{bankAccountId} | Update Wallet Bank Account |
| [**updateWalletTokenAsync()**](WalletsApi.md#updateWalletTokenAsync) | **PUT** /api/v2/WalletsService/Wallets/{walletId}/Tokens/{tokenId} | Update Wallet Token |


## `createLocationForWalletAsync()`

```php
createLocationForWalletAsync($wallet_id, $api_version, $x_api_version, $location_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create Wallet Location

Create a new location for a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$location_create_dto = new \OpenAPI\Client\Model\LocationCreateDto(); // \OpenAPI\Client\Model\LocationCreateDto

try {
    $result = $apiInstance->createLocationForWalletAsync($wallet_id, $api_version, $x_api_version, $location_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createLocationForWalletAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **location_create_dto** | [**\OpenAPI\Client\Model\LocationCreateDto**](../Model/LocationCreateDto.md)|  | [optional] |

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

## `createWalletBankAccountAsync()`

```php
createWalletBankAccountAsync($wallet_id, $api_version, $x_api_version, $bank_account_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create Wallet Bank Account

Create a new bank account for a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_account_create_dto = new \OpenAPI\Client\Model\BankAccountCreateDto(); // \OpenAPI\Client\Model\BankAccountCreateDto

try {
    $result = $apiInstance->createWalletBankAccountAsync($wallet_id, $api_version, $x_api_version, $bank_account_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletBankAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_account_create_dto** | [**\OpenAPI\Client\Model\BankAccountCreateDto**](../Model/BankAccountCreateDto.md)|  | [optional] |

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

## `createWalletPaymentAsync()`

```php
createWalletPaymentAsync($wallet_id, $api_version, $x_api_version, $payment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create Wallet Payment

Create a new payment for a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_create_dto = new \OpenAPI\Client\Model\PaymentCreateDto(); // \OpenAPI\Client\Model\PaymentCreateDto

try {
    $result = $apiInstance->createWalletPaymentAsync($wallet_id, $api_version, $x_api_version, $payment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletPaymentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_create_dto** | [**\OpenAPI\Client\Model\PaymentCreateDto**](../Model/PaymentCreateDto.md)|  | [optional] |

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

## `createWalletTokenAsync()`

```php
createWalletTokenAsync($wallet_id, $api_version, $x_api_version, $payment_token_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create Wallet Token

Create a new payment token for a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_token_create_dto = new \OpenAPI\Client\Model\PaymentTokenCreateDto(); // \OpenAPI\Client\Model\PaymentTokenCreateDto

try {
    $result = $apiInstance->createWalletTokenAsync($wallet_id, $api_version, $x_api_version, $payment_token_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletTokenAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_token_create_dto** | [**\OpenAPI\Client\Model\PaymentTokenCreateDto**](../Model/PaymentTokenCreateDto.md)|  | [optional] |

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

## `createWalletWithdrawRequestAsync()`

```php
createWalletWithdrawRequestAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_request_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create Wallet Withdraw Request

Create a new withdraw request for a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$wallet_withdraw_request_create_dto = new \OpenAPI\Client\Model\WalletWithdrawRequestCreateDto(); // \OpenAPI\Client\Model\WalletWithdrawRequestCreateDto

try {
    $result = $apiInstance->createWalletWithdrawRequestAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_request_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletWithdrawRequestAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **wallet_withdraw_request_create_dto** | [**\OpenAPI\Client\Model\WalletWithdrawRequestCreateDto**](../Model/WalletWithdrawRequestCreateDto.md)|  | [optional] |

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

## `deleteLocationForWalletAsync()`

```php
deleteLocationForWalletAsync($wallet_id, $location_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete Wallet Location

Delete a specific location of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$location_id = 'location_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteLocationForWalletAsync($wallet_id, $location_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->deleteLocationForWalletAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **location_id** | **string**|  | |
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

## `deleteWalletBankAccountAsync()`

```php
deleteWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete Wallet Bank Account

Delete a specific bank account of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$bank_account_id = 'bank_account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->deleteWalletBankAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **bank_account_id** | **string**|  | |
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

## `deleteWalletTokenAsync()`

```php
deleteWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete Wallet Token

Delete a specific payment token of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$token_id = 'token_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->deleteWalletTokenAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **token_id** | **string**|  | |
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

## `getIncomingPaymentsAsync()`

```php
getIncomingPaymentsAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```

Get Incoming Payments

Get incoming payments of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getIncomingPaymentsAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getIncomingPaymentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters**](../Model/PaymentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomingPaymentsCountAsync()`

```php
getIncomingPaymentsCountAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Incoming Payments Count

Get incoming payments count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getIncomingPaymentsCountAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getIncomingPaymentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters**](../Model/PaymentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getIncomingWalletInvoicesAsync()`

```php
getIncomingWalletInvoicesAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters): \OpenAPI\Client\Model\InvoiceDtoListEnvelope
```

Get Incoming Wallet Invoices

Get incoming invoices of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_dto_collection_query_parameters = new \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters

try {
    $result = $apiInstance->getIncomingWalletInvoicesAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getIncomingWalletInvoicesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters**](../Model/InvoiceDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoListEnvelope**](../Model/InvoiceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomingWalletInvoicesCountAsync()`

```php
getIncomingWalletInvoicesCountAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Incoming Wallet Invoices Count

Get incoming invoices count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_dto_collection_query_parameters = new \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters

try {
    $result = $apiInstance->getIncomingWalletInvoicesCountAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getIncomingWalletInvoicesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters**](../Model/InvoiceDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getLocationForWalletAsync()`

```php
getLocationForWalletAsync($wallet_id, $location_id, $api_version, $x_api_version): \OpenAPI\Client\Model\LocationDtoEnvelope
```

Get Wallet Location

Get a specific location of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$location_id = 'location_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLocationForWalletAsync($wallet_id, $location_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getLocationForWalletAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **location_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LocationDtoEnvelope**](../Model/LocationDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationsForWalletAsync()`

```php
getLocationsForWalletAsync($wallet_id, $api_version, $x_api_version, $location_dto_collection_query_parameters): \OpenAPI\Client\Model\LocationDtoListEnvelope
```

Get Wallet Locations

Get locations of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$location_dto_collection_query_parameters = new \OpenAPI\Client\Model\LocationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LocationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLocationsForWalletAsync($wallet_id, $api_version, $x_api_version, $location_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getLocationsForWalletAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **location_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LocationDtoCollectionQueryParameters**](../Model/LocationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LocationDtoListEnvelope**](../Model/LocationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationsForWalletCountAsync()`

```php
getLocationsForWalletCountAsync($wallet_id, $api_version, $x_api_version, $location_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Locations Count

Get locations count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$location_dto_collection_query_parameters = new \OpenAPI\Client\Model\LocationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LocationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLocationsForWalletCountAsync($wallet_id, $api_version, $x_api_version, $location_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getLocationsForWalletCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **location_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LocationDtoCollectionQueryParameters**](../Model/LocationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getOutgoingPaymentsAsync()`

```php
getOutgoingPaymentsAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```

Get Outgoing Payments

Get outgoing payments of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getOutgoingPaymentsAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getOutgoingPaymentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters**](../Model/PaymentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutgoingPaymentsCountAsync()`

```php
getOutgoingPaymentsCountAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Outgoing Payments Count

Get outgoing payments count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getOutgoingPaymentsCountAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getOutgoingPaymentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters**](../Model/PaymentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getOutgoingWalletInvoicesAsync()`

```php
getOutgoingWalletInvoicesAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters): \OpenAPI\Client\Model\InvoiceDtoListEnvelope
```

Get Outgoing Wallet Invoices

Get outgoing invoices of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_dto_collection_query_parameters = new \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters

try {
    $result = $apiInstance->getOutgoingWalletInvoicesAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getOutgoingWalletInvoicesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters**](../Model/InvoiceDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoListEnvelope**](../Model/InvoiceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutgoingWalletInvoicesCountAsync()`

```php
getOutgoingWalletInvoicesCountAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Outgoing Wallet Invoices Count

Get outgoing invoices count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_dto_collection_query_parameters = new \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters

try {
    $result = $apiInstance->getOutgoingWalletInvoicesCountAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getOutgoingWalletInvoicesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters**](../Model/InvoiceDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletBankAccountAsync()`

```php
getWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BankAccountDtoEnvelope
```

Get Wallet Bank Account

Get a specific bank account of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$bank_account_id = 'bank_account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletBankAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **bank_account_id** | **string**|  | |
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

## `getWalletBankAccountsAsync()`

```php
getWalletBankAccountsAsync($wallet_id, $api_version, $x_api_version, $bank_account_dto_collection_query_parameters): \OpenAPI\Client\Model\BankAccountDtoListEnvelope
```

Get Wallet Bank Accounts

Get bank accounts of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_account_dto_collection_query_parameters = new \OpenAPI\Client\Model\BankAccountDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BankAccountDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletBankAccountsAsync($wallet_id, $api_version, $x_api_version, $bank_account_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletBankAccountsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_account_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BankAccountDtoCollectionQueryParameters**](../Model/BankAccountDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BankAccountDtoListEnvelope**](../Model/BankAccountDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletBankAccountsCountAsync()`

```php
getWalletBankAccountsCountAsync($wallet_id, $api_version, $x_api_version, $bank_account_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Bank Accounts Count

Get bank accounts count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_account_dto_collection_query_parameters = new \OpenAPI\Client\Model\BankAccountDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\BankAccountDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletBankAccountsCountAsync($wallet_id, $api_version, $x_api_version, $bank_account_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletBankAccountsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_account_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\BankAccountDtoCollectionQueryParameters**](../Model/BankAccountDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletChargebacksAsync()`

```php
getWalletChargebacksAsync($wallet_id, $api_version, $x_api_version, $payment_chargeback_dto_collection_query_parameters): \OpenAPI\Client\Model\PaymentChargebackDtoListEnvelope
```

Get Wallet Chargebacks

Get chargebacks of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_chargeback_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentChargebackDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentChargebackDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletChargebacksAsync($wallet_id, $api_version, $x_api_version, $payment_chargeback_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletChargebacksAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_chargeback_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentChargebackDtoCollectionQueryParameters**](../Model/PaymentChargebackDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentChargebackDtoListEnvelope**](../Model/PaymentChargebackDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletChargebacksCountAsync()`

```php
getWalletChargebacksCountAsync($wallet_id, $api_version, $x_api_version, $payment_chargeback_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Chargebacks Count

Get chargebacks count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_chargeback_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentChargebackDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentChargebackDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletChargebacksCountAsync($wallet_id, $api_version, $x_api_version, $payment_chargeback_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletChargebacksCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_chargeback_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentChargebackDtoCollectionQueryParameters**](../Model/PaymentChargebackDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletDetailsAsync()`

```php
getWalletDetailsAsync($wallet_id, $api_version, $x_api_version): \OpenAPI\Client\Model\WalletDtoEnvelope
```

Get Wallet Details

Get details of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWalletDetailsAsync($wallet_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WalletDtoEnvelope**](../Model/WalletDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletExtendedOrdersAsync()`

```php
getWalletExtendedOrdersAsync($wallet_id, $api_version, $x_api_version, $extended_order_dto_collection_query_parameters): \OpenAPI\Client\Model\ExtendedOrderDtoListEnvelope
```

Get Wallet Extended Orders

Get extended orders of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$extended_order_dto_collection_query_parameters = new \OpenAPI\Client\Model\ExtendedOrderDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ExtendedOrderDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletExtendedOrdersAsync($wallet_id, $api_version, $x_api_version, $extended_order_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletExtendedOrdersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **extended_order_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ExtendedOrderDtoCollectionQueryParameters**](../Model/ExtendedOrderDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtendedOrderDtoListEnvelope**](../Model/ExtendedOrderDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletInvoicesAsync()`

```php
getWalletInvoicesAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters): \OpenAPI\Client\Model\InvoiceDtoListEnvelope
```

Get Wallet Invoices

Get invoices of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_dto_collection_query_parameters = new \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletInvoicesAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletInvoicesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters**](../Model/InvoiceDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoListEnvelope**](../Model/InvoiceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletInvoicesCountAsync()`

```php
getWalletInvoicesCountAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Invoices Count

Get invoices count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$invoice_dto_collection_query_parameters = new \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletInvoicesCountAsync($wallet_id, $api_version, $x_api_version, $invoice_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletInvoicesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **invoice_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\InvoiceDtoCollectionQueryParameters**](../Model/InvoiceDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletOrdersAsync()`

```php
getWalletOrdersAsync($wallet_id, $api_version, $x_api_version, $order_dto_collection_query_parameters): \OpenAPI\Client\Model\OrderDtoListEnvelope
```

Get Wallet Orders

Get orders of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$order_dto_collection_query_parameters = new \OpenAPI\Client\Model\OrderDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OrderDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletOrdersAsync($wallet_id, $api_version, $x_api_version, $order_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletOrdersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **order_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\OrderDtoCollectionQueryParameters**](../Model/OrderDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderDtoListEnvelope**](../Model/OrderDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletOrdersCountAsync()`

```php
getWalletOrdersCountAsync($wallet_id, $api_version, $x_api_version, $order_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Orders Count

Get orders count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$order_dto_collection_query_parameters = new \OpenAPI\Client\Model\OrderDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OrderDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletOrdersCountAsync($wallet_id, $api_version, $x_api_version, $order_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletOrdersCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **order_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\OrderDtoCollectionQueryParameters**](../Model/OrderDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletPaymentsAsync()`

```php
getWalletPaymentsAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters): \OpenAPI\Client\Model\PaymentDtoListEnvelope
```

Get Wallet Payments

Get payments of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletPaymentsAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletPaymentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters**](../Model/PaymentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoListEnvelope**](../Model/PaymentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletPaymentsCountAsync()`

```php
getWalletPaymentsCountAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Payments Count

Get payments count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletPaymentsCountAsync($wallet_id, $api_version, $x_api_version, $payment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletPaymentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentDtoCollectionQueryParameters**](../Model/PaymentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletQuotesAsync()`

```php
getWalletQuotesAsync($wallet_id, $api_version, $x_api_version, $quote_dto_collection_query_parameters): \OpenAPI\Client\Model\QuoteDtoListEnvelope
```

Get Wallet Quotes

Get quotes of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$quote_dto_collection_query_parameters = new \OpenAPI\Client\Model\QuoteDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\QuoteDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletQuotesAsync($wallet_id, $api_version, $x_api_version, $quote_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletQuotesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **quote_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\QuoteDtoCollectionQueryParameters**](../Model/QuoteDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\QuoteDtoListEnvelope**](../Model/QuoteDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletQuotesCountAsync()`

```php
getWalletQuotesCountAsync($wallet_id, $api_version, $x_api_version, $quote_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Quotes Count

Get quotes count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$quote_dto_collection_query_parameters = new \OpenAPI\Client\Model\QuoteDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\QuoteDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletQuotesCountAsync($wallet_id, $api_version, $x_api_version, $quote_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletQuotesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **quote_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\QuoteDtoCollectionQueryParameters**](../Model/QuoteDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletRefundsAsync()`

```php
getWalletRefundsAsync($wallet_id, $api_version, $x_api_version, $payment_refund_dto_collection_query_parameters): \OpenAPI\Client\Model\PaymentRefundDtoListEnvelope
```

Get Wallet Refunds

Get refunds of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_refund_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentRefundDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentRefundDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletRefundsAsync($wallet_id, $api_version, $x_api_version, $payment_refund_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletRefundsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_refund_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentRefundDtoCollectionQueryParameters**](../Model/PaymentRefundDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentRefundDtoListEnvelope**](../Model/PaymentRefundDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletRefundsCountAsync()`

```php
getWalletRefundsCountAsync($wallet_id, $api_version, $x_api_version, $payment_refund_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Refunds Count

Get refunds count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_refund_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentRefundDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentRefundDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletRefundsCountAsync($wallet_id, $api_version, $x_api_version, $payment_refund_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletRefundsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_refund_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentRefundDtoCollectionQueryParameters**](../Model/PaymentRefundDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletTokenAsync()`

```php
getWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version): \OpenAPI\Client\Model\PaymentTokenDtoEnvelope
```

Get Wallet Token

Get a specific payment token of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$token_id = 'token_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletTokenAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **token_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentTokenDtoEnvelope**](../Model/PaymentTokenDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletTokensAsync()`

```php
getWalletTokensAsync($wallet_id, $api_version, $x_api_version, $payment_token_dto_collection_query_parameters): \OpenAPI\Client\Model\PaymentTokenDtoListEnvelope
```

Get Wallet Tokens

Get payment tokens of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_token_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentTokenDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentTokenDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletTokensAsync($wallet_id, $api_version, $x_api_version, $payment_token_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletTokensAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_token_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentTokenDtoCollectionQueryParameters**](../Model/PaymentTokenDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentTokenDtoListEnvelope**](../Model/PaymentTokenDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletTokensCountAsync()`

```php
getWalletTokensCountAsync($wallet_id, $api_version, $x_api_version, $payment_token_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Tokens Count

Get payment tokens count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_token_dto_collection_query_parameters = new \OpenAPI\Client\Model\PaymentTokenDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\PaymentTokenDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletTokensCountAsync($wallet_id, $api_version, $x_api_version, $payment_token_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletTokensCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_token_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\PaymentTokenDtoCollectionQueryParameters**](../Model/PaymentTokenDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletWithdrawRequestsAsync()`

```php
getWalletWithdrawRequestsAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_request_dto_collection_query_parameters): \OpenAPI\Client\Model\WalletWithdrawRequestDtoListEnvelope
```

Get Wallet Withdraw Requests

Get withdraw requests of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$wallet_withdraw_request_dto_collection_query_parameters = new \OpenAPI\Client\Model\WalletWithdrawRequestDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WalletWithdrawRequestDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletWithdrawRequestsAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_request_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletWithdrawRequestsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **wallet_withdraw_request_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WalletWithdrawRequestDtoCollectionQueryParameters**](../Model/WalletWithdrawRequestDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WalletWithdrawRequestDtoListEnvelope**](../Model/WalletWithdrawRequestDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletWithdrawRequestsCountAsync()`

```php
getWalletWithdrawRequestsCountAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_request_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Withdraw Requests Count

Get withdraw requests count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$wallet_withdraw_request_dto_collection_query_parameters = new \OpenAPI\Client\Model\WalletWithdrawRequestDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WalletWithdrawRequestDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletWithdrawRequestsCountAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_request_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletWithdrawRequestsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **wallet_withdraw_request_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WalletWithdrawRequestDtoCollectionQueryParameters**](../Model/WalletWithdrawRequestDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getWalletWithdrawsAsync()`

```php
getWalletWithdrawsAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_dto_collection_query_parameters): \OpenAPI\Client\Model\WalletWithdrawDtoListEnvelope
```

Get Wallet Withdraws

Get withdraws of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$wallet_withdraw_dto_collection_query_parameters = new \OpenAPI\Client\Model\WalletWithdrawDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WalletWithdrawDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletWithdrawsAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletWithdrawsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **wallet_withdraw_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WalletWithdrawDtoCollectionQueryParameters**](../Model/WalletWithdrawDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WalletWithdrawDtoListEnvelope**](../Model/WalletWithdrawDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletWithdrawsCountAsync()`

```php
getWalletWithdrawsCountAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get Wallet Withdraws Count

Get withdraws count of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$wallet_withdraw_dto_collection_query_parameters = new \OpenAPI\Client\Model\WalletWithdrawDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\WalletWithdrawDtoCollectionQueryParameters

try {
    $result = $apiInstance->getWalletWithdrawsCountAsync($wallet_id, $api_version, $x_api_version, $wallet_withdraw_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletWithdrawsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **wallet_withdraw_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\WalletWithdrawDtoCollectionQueryParameters**](../Model/WalletWithdrawDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchWalletBankAccountAsync()`

```php
patchWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch Wallet Bank Account

Partially update a specific bank account of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$bank_account_id = 'bank_account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->patchWalletBankAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **bank_account_id** | **string**|  | |
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

## `patchWalletTokenAsync()`

```php
patchWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch Wallet Token

Partially update a specific payment token of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$token_id = 'token_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->patchWalletTokenAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **token_id** | **string**|  | |
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

## `updateLocationForWalletAsync()`

```php
updateLocationForWalletAsync($wallet_id, $location_id, $api_version, $x_api_version, $location_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update Wallet Location

Update a specific location of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$location_id = 'location_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$location_update_dto = new \OpenAPI\Client\Model\LocationUpdateDto(); // \OpenAPI\Client\Model\LocationUpdateDto

try {
    $result = $apiInstance->updateLocationForWalletAsync($wallet_id, $location_id, $api_version, $x_api_version, $location_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->updateLocationForWalletAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **location_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **location_update_dto** | [**\OpenAPI\Client\Model\LocationUpdateDto**](../Model/LocationUpdateDto.md)|  | [optional] |

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

## `updateWalletBankAccountAsync()`

```php
updateWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version, $bank_account_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update Wallet Bank Account

Update a specific bank account of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$bank_account_id = 'bank_account_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$bank_account_update_dto = new \OpenAPI\Client\Model\BankAccountUpdateDto(); // \OpenAPI\Client\Model\BankAccountUpdateDto

try {
    $result = $apiInstance->updateWalletBankAccountAsync($wallet_id, $bank_account_id, $api_version, $x_api_version, $bank_account_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->updateWalletBankAccountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **bank_account_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **bank_account_update_dto** | [**\OpenAPI\Client\Model\BankAccountUpdateDto**](../Model/BankAccountUpdateDto.md)|  | [optional] |

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

## `updateWalletTokenAsync()`

```php
updateWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version, $payment_token_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update Wallet Token

Update a specific payment token of a specific wallet by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string
$token_id = 'token_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$payment_token_update_dto = new \OpenAPI\Client\Model\PaymentTokenUpdateDto(); // \OpenAPI\Client\Model\PaymentTokenUpdateDto

try {
    $result = $apiInstance->updateWalletTokenAsync($wallet_id, $token_id, $api_version, $x_api_version, $payment_token_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->updateWalletTokenAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | |
| **token_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **payment_token_update_dto** | [**\OpenAPI\Client\Model\PaymentTokenUpdateDto**](../Model/PaymentTokenUpdateDto.md)|  | [optional] |

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
