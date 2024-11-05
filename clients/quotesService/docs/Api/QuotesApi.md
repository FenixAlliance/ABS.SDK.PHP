# OpenAPI\Client\QuotesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2QuotesServiceQuotesCountGet()**](QuotesApi.md#apiV2QuotesServiceQuotesCountGet) | **GET** /api/v2/QuotesService/Quotes/Count |  |
| [**apiV2QuotesServiceQuotesExtendedGet()**](QuotesApi.md#apiV2QuotesServiceQuotesExtendedGet) | **GET** /api/v2/QuotesService/Quotes/Extended |  |
| [**apiV2QuotesServiceQuotesGet()**](QuotesApi.md#apiV2QuotesServiceQuotesGet) | **GET** /api/v2/QuotesService/Quotes |  |
| [**apiV2QuotesServiceQuotesPost()**](QuotesApi.md#apiV2QuotesServiceQuotesPost) | **POST** /api/v2/QuotesService/Quotes |  |
| [**apiV2QuotesServiceQuotesQuoteIdCalculatePut()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdCalculatePut) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Calculate |  |
| [**apiV2QuotesServiceQuotesQuoteIdDelete()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdDelete) | **DELETE** /api/v2/QuotesService/Quotes/{quoteId} |  |
| [**apiV2QuotesServiceQuotesQuoteIdLinesCountGet()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdLinesCountGet) | **GET** /api/v2/QuotesService/Quotes/{quoteId}/Lines/Count |  |
| [**apiV2QuotesServiceQuotesQuoteIdLinesGet()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdLinesGet) | **GET** /api/v2/QuotesService/Quotes/{quoteId}/Lines |  |
| [**apiV2QuotesServiceQuotesQuoteIdLinesPost()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdLinesPost) | **POST** /api/v2/QuotesService/Quotes/{quoteId}/Lines |  |
| [**apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdCalculatePut()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdCalculatePut) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId}/Calculate |  |
| [**apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdDelete()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdDelete) | **DELETE** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId} |  |
| [**apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdGet()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdGet) | **GET** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId} |  |
| [**apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdPut()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdPut) | **PUT** /api/v2/QuotesService/Quotes/{quoteId}/Lines/{quoteLineId} |  |
| [**apiV2QuotesServiceQuotesQuoteIdPut()**](QuotesApi.md#apiV2QuotesServiceQuotesQuoteIdPut) | **PUT** /api/v2/QuotesService/Quotes/{quoteId} |  |
| [**getQuoteAsync()**](QuotesApi.md#getQuoteAsync) | **GET** /api/v2/QuotesService/Quotes/{quoteId} |  |


## `apiV2QuotesServiceQuotesCountGet()`

```php
apiV2QuotesServiceQuotesCountGet($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesCountGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesExtendedGet()`

```php
apiV2QuotesServiceQuotesExtendedGet($tenant_id): \OpenAPI\Client\Model\ExtendedQuoteDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesExtendedGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedQuoteDtoListEnvelope**](../Model/ExtendedQuoteDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesGet()`

```php
apiV2QuotesServiceQuotesGet($tenant_id): \OpenAPI\Client\Model\QuoteDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\QuoteDtoListEnvelope**](../Model/QuoteDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesPost()`

```php
apiV2QuotesServiceQuotesPost($tenant_id, $quote_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_create_dto = new \OpenAPI\Client\Model\QuoteCreateDto(); // \OpenAPI\Client\Model\QuoteCreateDto

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesPost($tenant_id, $quote_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesPost: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdCalculatePut()`

```php
apiV2QuotesServiceQuotesQuoteIdCalculatePut($tenant_id, $quote_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdCalculatePut($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdCalculatePut: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdDelete()`

```php
apiV2QuotesServiceQuotesQuoteIdDelete($quote_id, $tenant_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_id = 'quote_id_example'; // string
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdDelete($quote_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdDelete: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdLinesCountGet()`

```php
apiV2QuotesServiceQuotesQuoteIdLinesCountGet($tenant_id, $quote_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdLinesCountGet($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdLinesCountGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdLinesGet()`

```php
apiV2QuotesServiceQuotesQuoteIdLinesGet($tenant_id, $quote_id, $item_id): \OpenAPI\Client\Model\QuoteLineDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdLinesGet($tenant_id, $quote_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdLinesGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdLinesPost()`

```php
apiV2QuotesServiceQuotesQuoteIdLinesPost($tenant_id, $quote_id, $quote_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_create_dto = new \OpenAPI\Client\Model\QuoteLineCreateDto(); // \OpenAPI\Client\Model\QuoteLineCreateDto

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdLinesPost($tenant_id, $quote_id, $quote_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdLinesPost: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdCalculatePut()`

```php
apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdCalculatePut($tenant_id, $quote_id, $quote_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdCalculatePut($tenant_id, $quote_id, $quote_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdCalculatePut: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdDelete()`

```php
apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdDelete($tenant_id, $quote_id, $quote_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdDelete($tenant_id, $quote_id, $quote_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdDelete: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdGet()`

```php
apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdGet($tenant_id, $quote_id, $quote_line_id): \OpenAPI\Client\Model\QuoteLineDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdGet($tenant_id, $quote_id, $quote_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdGet: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdPut()`

```php
apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdPut($tenant_id, $quote_id, $quote_line_id, $quote_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_line_id = 'quote_line_id_example'; // string
$quote_line_update_dto = new \OpenAPI\Client\Model\QuoteLineUpdateDto(); // \OpenAPI\Client\Model\QuoteLineUpdateDto

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdPut($tenant_id, $quote_id, $quote_line_id, $quote_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdLinesQuoteLineIdPut: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuotesServiceQuotesQuoteIdPut()`

```php
apiV2QuotesServiceQuotesQuoteIdPut($tenant_id, $quote_id, $quote_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string
$quote_update_dto = new \OpenAPI\Client\Model\QuoteUpdateDto(); // \OpenAPI\Client\Model\QuoteUpdateDto

try {
    $result = $apiInstance->apiV2QuotesServiceQuotesQuoteIdPut($tenant_id, $quote_id, $quote_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->apiV2QuotesServiceQuotesQuoteIdPut: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuoteAsync()`

```php
getQuoteAsync($tenant_id, $quote_id): \OpenAPI\Client\Model\QuoteDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$quote_id = 'quote_id_example'; // string

try {
    $result = $apiInstance->getQuoteAsync($tenant_id, $quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuoteAsync: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
