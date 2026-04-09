# OpenAPI\Client\TransactionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTransaction()**](TransactionsApi.md#createTransaction) | **POST** /api/v2/AccountingService/Transactions | Create a transaction |
| [**createTransactionCategory()**](TransactionsApi.md#createTransactionCategory) | **POST** /api/v2/AccountingService/Transactions/Categories | Create a transaction category |
| [**deleteTransaction()**](TransactionsApi.md#deleteTransaction) | **DELETE** /api/v2/AccountingService/Transactions/{transactionId} | Delete a transaction |
| [**deleteTransactionCategory()**](TransactionsApi.md#deleteTransactionCategory) | **DELETE** /api/v2/AccountingService/Transactions/Categories/{categoryId} | Delete a transaction category |
| [**getTransaction()**](TransactionsApi.md#getTransaction) | **GET** /api/v2/AccountingService/Transactions/{transactionId} | Get transaction by ID |
| [**getTransactionCategories()**](TransactionsApi.md#getTransactionCategories) | **GET** /api/v2/AccountingService/Transactions/Categories | Get all transaction categories |
| [**getTransactionCategoriesCount()**](TransactionsApi.md#getTransactionCategoriesCount) | **GET** /api/v2/AccountingService/Transactions/Categories/Count | Get transaction categories count |
| [**getTransactionCategory()**](TransactionsApi.md#getTransactionCategory) | **GET** /api/v2/AccountingService/Transactions/Categories/{categoryId} | Get transaction category by ID |
| [**getTransactions()**](TransactionsApi.md#getTransactions) | **GET** /api/v2/AccountingService/Transactions | Get all transactions for a tenant |
| [**getTransactionsCount()**](TransactionsApi.md#getTransactionsCount) | **GET** /api/v2/AccountingService/Transactions/Count | Get transactions count |
| [**updateTransaction()**](TransactionsApi.md#updateTransaction) | **PUT** /api/v2/AccountingService/Transactions/{transactionId} | Update a transaction |
| [**updateTransactionCategory()**](TransactionsApi.md#updateTransactionCategory) | **PUT** /api/v2/AccountingService/Transactions/Categories/{categoryId} | Update a transaction category |


## `createTransaction()`

```php
createTransaction($tenant_id, $api_version, $x_api_version, $transaction_create_dto): \OpenAPI\Client\Model\TransactionDtoEnvelope
```

Create a transaction

Creates a new transaction for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$transaction_create_dto = new \OpenAPI\Client\Model\TransactionCreateDto(); // \OpenAPI\Client\Model\TransactionCreateDto

try {
    $result = $apiInstance->createTransaction($tenant_id, $api_version, $x_api_version, $transaction_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **transaction_create_dto** | [**\OpenAPI\Client\Model\TransactionCreateDto**](../Model/TransactionCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionDtoEnvelope**](../Model/TransactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransactionCategory()`

```php
createTransactionCategory($tenant_id, $api_version, $x_api_version, $transaction_category_create_dto): \OpenAPI\Client\Model\TransactionCategoryDtoEnvelope
```

Create a transaction category

Creates a new transaction category for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$transaction_category_create_dto = new \OpenAPI\Client\Model\TransactionCategoryCreateDto(); // \OpenAPI\Client\Model\TransactionCategoryCreateDto

try {
    $result = $apiInstance->createTransactionCategory($tenant_id, $api_version, $x_api_version, $transaction_category_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransactionCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **transaction_category_create_dto** | [**\OpenAPI\Client\Model\TransactionCategoryCreateDto**](../Model/TransactionCategoryCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionCategoryDtoEnvelope**](../Model/TransactionCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransaction()`

```php
deleteTransaction($tenant_id, $transaction_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TransactionDtoEnvelope
```

Delete a transaction

Deletes a transaction by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transaction_id = 'transaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTransaction($tenant_id, $transaction_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionDtoEnvelope**](../Model/TransactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransactionCategory()`

```php
deleteTransactionCategory($tenant_id, $category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TransactionCategoryDtoEnvelope
```

Delete a transaction category

Deletes a transaction category by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteTransactionCategory($tenant_id, $category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->deleteTransactionCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionCategoryDtoEnvelope**](../Model/TransactionCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($tenant_id, $transaction_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TransactionDtoEnvelope
```

Get transaction by ID

Retrieves a specific transaction by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transaction_id = 'transaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTransaction($tenant_id, $transaction_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionDtoEnvelope**](../Model/TransactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionCategories()`

```php
getTransactionCategories($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TransactionCategoryDtoListEnvelope
```

Get all transaction categories

Retrieves all transaction categories for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTransactionCategories($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionCategoryDtoListEnvelope**](../Model/TransactionCategoryDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionCategoriesCount()`

```php
getTransactionCategoriesCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get transaction categories count

Returns total number of transaction categories for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTransactionCategoriesCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionCategoriesCount: ', $e->getMessage(), PHP_EOL;
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

## `getTransactionCategory()`

```php
getTransactionCategory($tenant_id, $category_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TransactionCategoryDtoEnvelope
```

Get transaction category by ID

Retrieves a specific transaction category by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTransactionCategory($tenant_id, $category_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionCategoryDtoEnvelope**](../Model/TransactionCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactions()`

```php
getTransactions($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TransactionDtoListEnvelope
```

Get all transactions for a tenant

Retrieves all transactions for the specified tenant using OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTransactions($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionDtoListEnvelope**](../Model/TransactionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsCount()`

```php
getTransactionsCount($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get transactions count

Returns total number of transactions for the tenant with OData filter support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getTransactionsCount($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsCount: ', $e->getMessage(), PHP_EOL;
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

## `updateTransaction()`

```php
updateTransaction($tenant_id, $transaction_id, $api_version, $x_api_version, $transaction_update_dto): \OpenAPI\Client\Model\TransactionDtoEnvelope
```

Update a transaction

Updates an existing transaction with the provided data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$transaction_id = 'transaction_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$transaction_update_dto = new \OpenAPI\Client\Model\TransactionUpdateDto(); // \OpenAPI\Client\Model\TransactionUpdateDto

try {
    $result = $apiInstance->updateTransaction($tenant_id, $transaction_id, $api_version, $x_api_version, $transaction_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **transaction_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **transaction_update_dto** | [**\OpenAPI\Client\Model\TransactionUpdateDto**](../Model/TransactionUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionDtoEnvelope**](../Model/TransactionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionCategory()`

```php
updateTransactionCategory($tenant_id, $category_id, $api_version, $x_api_version, $transaction_category_update_dto): \OpenAPI\Client\Model\TransactionCategoryDtoEnvelope
```

Update a transaction category

Updates an existing transaction category with the provided data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$category_id = 'category_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$transaction_category_update_dto = new \OpenAPI\Client\Model\TransactionCategoryUpdateDto(); // \OpenAPI\Client\Model\TransactionCategoryUpdateDto

try {
    $result = $apiInstance->updateTransactionCategory($tenant_id, $category_id, $api_version, $x_api_version, $transaction_category_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransactionCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **category_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **transaction_category_update_dto** | [**\OpenAPI\Client\Model\TransactionCategoryUpdateDto**](../Model/TransactionCategoryUpdateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionCategoryDtoEnvelope**](../Model/TransactionCategoryDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
