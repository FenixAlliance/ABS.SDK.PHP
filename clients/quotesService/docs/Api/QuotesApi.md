# OpenAPI\Client\QuotesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateQuote()**](QuotesApi.md#calculateQuote) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Calculate | Calculate a quote. |
| [**calculateQuoteLine()**](QuotesApi.md#calculateQuoteLine) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId}/Calculate | Calculate a quote line. |
| [**closeQuote()**](QuotesApi.md#closeQuote) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Close | Close a quote. |
| [**createOrderFromQuote()**](QuotesApi.md#createOrderFromQuote) | **POST** /api/v2/QuotesService/Quotes/{quoteId}/Orders | Create an order from a quote. |
| [**createQuote()**](QuotesApi.md#createQuote) | **POST** /api/v2/QuotesService/Quotes | Create a new quote. |
| [**createQuoteLine()**](QuotesApi.md#createQuoteLine) | **POST** /api/v2/QuotesService/Quotes/{quoteId}/Lines | Create a new quote line. |
| [**deleteQuote()**](QuotesApi.md#deleteQuote) | **DELETE** /api/v2/QuotesService/Quotes/{quoteId} | Delete a quote. |
| [**deleteQuoteLine()**](QuotesApi.md#deleteQuoteLine) | **DELETE** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId} | Delete a quote line. |
| [**getExtendedQuotes()**](QuotesApi.md#getExtendedQuotes) | **GET** /api/v2/QuotesService/Quotes/Extended | Get a list of extended quotes. |
| [**getQuote()**](QuotesApi.md#getQuote) | **GET** /api/v2/QuotesService/Quotes/{quoteId} | Get a quote by ID. |
| [**getQuoteLine()**](QuotesApi.md#getQuoteLine) | **GET** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId} | Get a quote line by ID. |
| [**getQuoteLines()**](QuotesApi.md#getQuoteLines) | **GET** /api/v2/QuotesService/Quotes/{quoteId}/Lines | Get quote lines for a quote. |
| [**getQuoteLinesCount()**](QuotesApi.md#getQuoteLinesCount) | **GET** /api/v2/QuotesService/Quotes/{quoteId}/Lines/Count | Get the count of quote lines. |
| [**getQuotes()**](QuotesApi.md#getQuotes) | **GET** /api/v2/QuotesService/Quotes | Get a list of quotes. |
| [**getQuotesCount()**](QuotesApi.md#getQuotesCount) | **GET** /api/v2/QuotesService/Quotes/Count | Get the count of quotes. |
| [**previewQuoteEmailTemplate()**](QuotesApi.md#previewQuoteEmailTemplate) | **POST** /api/v2/QuotesService/Quotes/{quoteId}/Emails/Preview | Preview the rendered email for an invoice. |
| [**quoteLineExists()**](QuotesApi.md#quoteLineExists) | **GET** /api/v2/QuotesService/Quotes/{quoteId}/Lines/Exists | Check if a quote line exists. |
| [**reopenQuote()**](QuotesApi.md#reopenQuote) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Reopen | Reopen a closed quote. |
| [**sendQuoteEmail()**](QuotesApi.md#sendQuoteEmail) | **POST** /api/v2/QuotesService/Quotes/{quoteId}/Emails/Send | Send a quote transactional email to recipients. |
| [**updateQuote()**](QuotesApi.md#updateQuote) | **PUT** /api/v2/QuotesService/Quotes/{quoteId} | Update an existing quote. |
| [**updateQuoteLine()**](QuotesApi.md#updateQuoteLine) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId} | Update a quote line. |
| [**upsertQuoteLine()**](QuotesApi.md#upsertQuoteLine) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId}/Upsert | Upsert a quote line. |


## `calculateQuote()`

```php
calculateQuote($tenant_id, $quote_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculate a quote.

Performs calculation logic for the specified quote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->calculateQuote($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->calculateQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |

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

## `calculateQuoteLine()`

```php
calculateQuoteLine($tenant_id, $quote_id, $quote_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculate a quote line.

Performs calculation logic for the specified quote line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string

try {
    $result = $apiInstance->calculateQuoteLine($tenant_id, $quote_id, $quote_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->calculateQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_line_id** | **string**|  | |

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

## `closeQuote()`

```php
closeQuote($tenant_id, $quote_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Close a quote.

Closes the specified quote for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->closeQuote($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->closeQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |

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

## `createOrderFromQuote()`

```php
createOrderFromQuote($tenant_id, $quote_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an order from a quote.

Creates an order based on the specified quote for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->createOrderFromQuote($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->createOrderFromQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |

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

## `createQuote()`

```php
createQuote($tenant_id, $quote_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new quote.

Creates a new quote for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_create_dto = new \OpenAPI\Client\Model\QuoteCreateDto(); // \OpenAPI\Client\Model\QuoteCreateDto

try {
    $result = $apiInstance->createQuote($tenant_id, $quote_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->createQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_create_dto** | [**\OpenAPI\Client\Model\QuoteCreateDto**](../Model/QuoteCreateDto.md)|  | [optional] |

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

## `createQuoteLine()`

```php
createQuoteLine($tenant_id, $quote_id, $quote_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new quote line.

Creates a new quote line for the specified quote and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_create_dto = new \OpenAPI\Client\Model\QuoteLineCreateDto(); // \OpenAPI\Client\Model\QuoteLineCreateDto

try {
    $result = $apiInstance->createQuoteLine($tenant_id, $quote_id, $quote_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->createQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_line_create_dto** | [**\OpenAPI\Client\Model\QuoteLineCreateDto**](../Model/QuoteLineCreateDto.md)|  | [optional] |

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

## `deleteQuote()`

```php
deleteQuote($quote_id, $tenant_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a quote.

Deletes the specified quote for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quote_id = 'quote_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->deleteQuote($quote_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->deleteQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quote_id** | **string**|  | |
| **tenant_id** | **string**|  | |

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

## `deleteQuoteLine()`

```php
deleteQuoteLine($tenant_id, $quote_id, $quote_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a quote line.

Deletes the specified quote line for the quote and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string

try {
    $result = $apiInstance->deleteQuoteLine($tenant_id, $quote_id, $quote_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->deleteQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_line_id** | **string**|  | |

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

## `getExtendedQuotes()`

```php
getExtendedQuotes($tenant_id): \OpenAPI\Client\Model\ExtendedQuoteDtoListEnvelope
```

Get a list of extended quotes.

Retrieves a list of extended quotes for the specified tenant, supporting OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getExtendedQuotes($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getExtendedQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedQuoteDtoListEnvelope**](../Model/ExtendedQuoteDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuote()`

```php
getQuote($tenant_id, $quote_id): \OpenAPI\Client\Model\QuoteDtoEnvelope
```

Get a quote by ID.

Retrieves a single quote by its unique identifier for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->getQuote($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\QuoteDtoEnvelope**](../Model/QuoteDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuoteLine()`

```php
getQuoteLine($tenant_id, $quote_id, $quote_line_id): \OpenAPI\Client\Model\QuoteLineDtoEnvelope
```

Get a quote line by ID.

Retrieves a single quote line by its unique identifier for the specified quote and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string

try {
    $result = $apiInstance->getQuoteLine($tenant_id, $quote_id, $quote_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_line_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\QuoteLineDtoEnvelope**](../Model/QuoteLineDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuoteLines()`

```php
getQuoteLines($tenant_id, $quote_id, $item_id): \OpenAPI\Client\Model\QuoteLineDtoListEnvelope
```

Get quote lines for a quote.

Retrieves all quote lines for the specified quote and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->getQuoteLines($tenant_id, $quote_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuoteLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\QuoteLineDtoListEnvelope**](../Model/QuoteLineDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuoteLinesCount()`

```php
getQuoteLinesCount($tenant_id, $quote_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of quote lines.

Retrieves the total count of quote lines for the specified quote and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->getQuoteLinesCount($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuoteLinesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |

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

## `getQuotes()`

```php
getQuotes($tenant_id): \OpenAPI\Client\Model\QuoteDtoListEnvelope
```

Get a list of quotes.

Retrieves a list of quotes for the specified tenant, supporting OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getQuotes($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\QuoteDtoListEnvelope**](../Model/QuoteDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuotesCount()`

```php
getQuotesCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of quotes.

Retrieves the total count of quotes for the specified tenant, supporting OData query options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getQuotesCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuotesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

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

## `previewQuoteEmailTemplate()`

```php
previewQuoteEmailTemplate($quote_id, $tenant_id, $email_dispatch_request)
```

Preview the rendered email for an invoice.

This action is only available for users with the 'send_email' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quote_id = 'quote_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $apiInstance->previewQuoteEmailTemplate($quote_id, $tenant_id, $email_dispatch_request);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->previewQuoteEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quote_id** | **string**|  | |
| **tenant_id** | **string**|  | |
| **email_dispatch_request** | [**\OpenAPI\Client\Model\EmailDispatchRequest**](../Model/EmailDispatchRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quoteLineExists()`

```php
quoteLineExists($tenant_id, $quote_id, $quote_line_id, $item_id): \OpenAPI\Client\Model\BooleanEnvelope
```

Check if a quote line exists.

Checks if a quote line exists for the specified quote and tenant, by quote line ID or item ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->quoteLineExists($tenant_id, $quote_id, $quote_line_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quoteLineExists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_line_id** | **string**|  | [optional] |
| **item_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanEnvelope**](../Model/BooleanEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reopenQuote()`

```php
reopenQuote($tenant_id, $quote_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Reopen a closed quote.

Reopens a previously closed quote for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->reopenQuote($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->reopenQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |

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

## `sendQuoteEmail()`

```php
sendQuoteEmail($tenant_id, $quote_id, $email_dispatch_request): \OpenAPI\Client\Model\EmptyEnvelope
```

Send a quote transactional email to recipients.

This action is only available for users with the 'send_email' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $result = $apiInstance->sendQuoteEmail($tenant_id, $quote_id, $email_dispatch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->sendQuoteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
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

## `updateQuote()`

```php
updateQuote($tenant_id, $quote_id, $quote_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an existing quote.

Updates an existing quote for the specified tenant and quote ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_update_dto = new \OpenAPI\Client\Model\QuoteUpdateDto(); // \OpenAPI\Client\Model\QuoteUpdateDto

try {
    $result = $apiInstance->updateQuote($tenant_id, $quote_id, $quote_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->updateQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_update_dto** | [**\OpenAPI\Client\Model\QuoteUpdateDto**](../Model/QuoteUpdateDto.md)|  | [optional] |

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

## `updateQuoteLine()`

```php
updateQuoteLine($tenant_id, $quote_id, $quote_line_id, $quote_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a quote line.

Updates an existing quote line for the specified quote and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string
$quote_line_update_dto = new \OpenAPI\Client\Model\QuoteLineUpdateDto(); // \OpenAPI\Client\Model\QuoteLineUpdateDto

try {
    $result = $apiInstance->updateQuoteLine($tenant_id, $quote_id, $quote_line_id, $quote_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->updateQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_line_id** | **string**|  | |
| **quote_line_update_dto** | [**\OpenAPI\Client\Model\QuoteLineUpdateDto**](../Model/QuoteLineUpdateDto.md)|  | [optional] |

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

## `upsertQuoteLine()`

```php
upsertQuoteLine($tenant_id, $quote_id, $quote_line_id, $quote_line_upsert_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Upsert a quote line.

Creates or updates a quote line for the specified quote and tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string
$quote_line_upsert_dto = new \OpenAPI\Client\Model\QuoteLineUpsertDto(); // \OpenAPI\Client\Model\QuoteLineUpsertDto

try {
    $result = $apiInstance->upsertQuoteLine($tenant_id, $quote_id, $quote_line_id, $quote_line_upsert_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->upsertQuoteLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **quote_id** | **string**|  | |
| **quote_line_id** | **string**|  | |
| **quote_line_upsert_dto** | [**\OpenAPI\Client\Model\QuoteLineUpsertDto**](../Model/QuoteLineUpsertDto.md)|  | [optional] |

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
