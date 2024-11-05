# OpenAPI\Client\InvoicesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2InvoicingServiceInvoicesCountGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesCountGet) | **GET** /api/v2/InvoicingService/Invoices/Count |  |
| [**apiV2InvoicingServiceInvoicesDiscountsAggregatePost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesDiscountsAggregatePost) | **POST** /api/v2/InvoicingService/Invoices/DiscountsAggregate |  |
| [**apiV2InvoicingServiceInvoicesExtendedCountGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesExtendedCountGet) | **GET** /api/v2/InvoicingService/Invoices/Extended/Count |  |
| [**apiV2InvoicingServiceInvoicesExtendedGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesExtendedGet) | **GET** /api/v2/InvoicingService/Invoices/Extended |  |
| [**apiV2InvoicingServiceInvoicesGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesGet) | **GET** /api/v2/InvoicingService/Invoices |  |
| [**apiV2InvoicingServiceInvoicesGlobalSurchargesAggregatePost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesGlobalSurchargesAggregatePost) | **POST** /api/v2/InvoicingService/Invoices/GlobalSurchargesAggregate |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsCountGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsCountGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/Count |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdDelete()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdDelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdPut()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdPut) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsPost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsPost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdCalculatePut()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdCalculatePut) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Calculate |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdDelete()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdDelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdExtendedGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdExtendedGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Extended |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesCountGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesCountGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/Count |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdCalculatePut()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdCalculatePut) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Calculate |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdDelete()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdDelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdPut()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdPut) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesCountGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesCountGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/Count |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdDelete()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdDelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/{invoiceLineTaxId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdPut()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdPut) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/{invoiceLineTaxId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesPost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesPost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdLinesPost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdLinesPost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdPaymentsCountGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdPaymentsCountGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Payments/Count |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdPaymentsGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdPaymentsGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Payments |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdPut()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdPut) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesCountGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdReferencesCountGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References/Count |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdReferencesGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdDelete()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdDelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdGet()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdGet) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdPut()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdPut) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} |  |
| [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesPost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesInvoiceIdReferencesPost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/References |  |
| [**apiV2InvoicingServiceInvoicesPost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesPost) | **POST** /api/v2/InvoicingService/Invoices |  |
| [**apiV2InvoicingServiceInvoicesTaxBasesAggregatePost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesTaxBasesAggregatePost) | **POST** /api/v2/InvoicingService/Invoices/TaxBasesAggregate |  |
| [**apiV2InvoicingServiceInvoicesTaxesAggregatePost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesTaxesAggregatePost) | **POST** /api/v2/InvoicingService/Invoices/TaxesAggregate |  |
| [**apiV2InvoicingServiceInvoicesTotalsAggregatePost()**](InvoicesApi.md#apiV2InvoicingServiceInvoicesTotalsAggregatePost) | **POST** /api/v2/InvoicingService/Invoices/TotalsAggregate |  |
| [**getInvoiceAsync()**](InvoicesApi.md#getInvoiceAsync) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId} |  |


## `apiV2InvoicingServiceInvoicesCountGet()`

```php
apiV2InvoicingServiceInvoicesCountGet($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesCountGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2InvoicingServiceInvoicesDiscountsAggregatePost()`

```php
apiV2InvoicingServiceInvoicesDiscountsAggregatePost($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesDiscountsAggregatePost($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesDiscountsAggregatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |
| **currency_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesExtendedCountGet()`

```php
apiV2InvoicingServiceInvoicesExtendedCountGet($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesExtendedCountGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesExtendedCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2InvoicingServiceInvoicesExtendedGet()`

```php
apiV2InvoicingServiceInvoicesExtendedGet($tenant_id): \OpenAPI\Client\Model\ExtendedInvoiceDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesExtendedGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedInvoiceDtoListEnvelope**](../Model/ExtendedInvoiceDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesGet()`

```php
apiV2InvoicingServiceInvoicesGet($tenant_id): \OpenAPI\Client\Model\InvoiceDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesGet($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoListEnvelope**](../Model/InvoiceDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesGlobalSurchargesAggregatePost()`

```php
apiV2InvoicingServiceInvoicesGlobalSurchargesAggregatePost($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesGlobalSurchargesAggregatePost($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesGlobalSurchargesAggregatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |
| **currency_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsCountGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsCountGet($tenant_id, $invoice_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsCountGet($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsGet($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceAdjustmentDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsGet($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceAdjustmentDtoListEnvelope**](../Model/InvoiceAdjustmentDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdDelete()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdDelete($tenant_id, $invoice_id, $invoice_adjustment_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_id = 'invoice_adjustment_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdDelete($tenant_id, $invoice_id, $invoice_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_adjustment_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdGet($tenant_id, $invoice_id, $invoice_adjustment_id): \OpenAPI\Client\Model\InvoiceAdjustmentDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_id = 'invoice_adjustment_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdGet($tenant_id, $invoice_id, $invoice_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_adjustment_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceAdjustmentDtoEnvelope**](../Model/InvoiceAdjustmentDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdPut()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdPut($tenant_id, $invoice_id, $invoice_adjustment_id, $invoice_adjustment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_id = 'invoice_adjustment_id_example'; // string
$invoice_adjustment_update_dto = new \OpenAPI\Client\Model\InvoiceAdjustmentUpdateDto(); // \OpenAPI\Client\Model\InvoiceAdjustmentUpdateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdPut($tenant_id, $invoice_id, $invoice_adjustment_id, $invoice_adjustment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_adjustment_id** | **string**|  | |
| **invoice_adjustment_update_dto** | [**\OpenAPI\Client\Model\InvoiceAdjustmentUpdateDto**](../Model/InvoiceAdjustmentUpdateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsPost()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsPost($tenant_id, $invoice_id, $invoice_adjustment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_create_dto = new \OpenAPI\Client\Model\InvoiceAdjustmentCreateDto(); // \OpenAPI\Client\Model\InvoiceAdjustmentCreateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsPost($tenant_id, $invoice_id, $invoice_adjustment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_adjustment_create_dto** | [**\OpenAPI\Client\Model\InvoiceAdjustmentCreateDto**](../Model/InvoiceAdjustmentCreateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdCalculatePut()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdCalculatePut($tenant_id, $invoice_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdCalculatePut($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdCalculatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdDelete()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdDelete($tenant_id, $invoice_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdDelete($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdExtendedGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdExtendedGet($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdExtendedGet($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoEnvelope**](../Model/InvoiceDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesCountGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesCountGet($tenant_id, $invoice_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesCountGet($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesGet($tenant_id, $invoice_id, $item_id): \OpenAPI\Client\Model\InvoiceLineDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesGet($tenant_id, $invoice_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **item_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineDtoListEnvelope**](../Model/InvoiceLineDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdCalculatePut()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdCalculatePut($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdCalculatePut($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdCalculatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdDelete()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdDelete($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdDelete($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdGet($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\InvoiceLineDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdGet($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineDtoEnvelope**](../Model/InvoiceLineDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdPut()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdPut($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_update_dto = new \OpenAPI\Client\Model\InvoiceLineUpdateDto(); // \OpenAPI\Client\Model\InvoiceLineUpdateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdPut($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |
| **invoice_line_update_dto** | [**\OpenAPI\Client\Model\InvoiceLineUpdateDto**](../Model/InvoiceLineUpdateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesCountGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesCountGet($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesCountGet($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesGet($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\InvoiceLineAppliedTaxDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesGet($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineAppliedTaxDtoListEnvelope**](../Model/InvoiceLineAppliedTaxDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdDelete()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdDelete($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_tax_id = 'invoice_line_tax_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdDelete($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |
| **invoice_line_tax_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdPut()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdPut($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id, $invoice_line_applied_tax_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_tax_id = 'invoice_line_tax_id_example'; // string
$invoice_line_applied_tax_update_dto = new \OpenAPI\Client\Model\InvoiceLineAppliedTaxUpdateDto(); // \OpenAPI\Client\Model\InvoiceLineAppliedTaxUpdateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdPut($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id, $invoice_line_applied_tax_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |
| **invoice_line_tax_id** | **string**|  | |
| **invoice_line_applied_tax_update_dto** | [**\OpenAPI\Client\Model\InvoiceLineAppliedTaxUpdateDto**](../Model/InvoiceLineAppliedTaxUpdateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesPost()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesPost($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_applied_tax_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_applied_tax_create_dto = new \OpenAPI\Client\Model\InvoiceLineAppliedTaxCreateDto(); // \OpenAPI\Client\Model\InvoiceLineAppliedTaxCreateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesPost($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_applied_tax_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |
| **invoice_line_applied_tax_create_dto** | [**\OpenAPI\Client\Model\InvoiceLineAppliedTaxCreateDto**](../Model/InvoiceLineAppliedTaxCreateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdLinesPost()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdLinesPost($tenant_id, $invoice_id, $invoice_line_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_create_dto = new \OpenAPI\Client\Model\InvoiceLineCreateDto(); // \OpenAPI\Client\Model\InvoiceLineCreateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdLinesPost($tenant_id, $invoice_id, $invoice_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdLinesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_create_dto** | [**\OpenAPI\Client\Model\InvoiceLineCreateDto**](../Model/InvoiceLineCreateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdPaymentsCountGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdPaymentsCountGet($invoice_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdPaymentsCountGet($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdPaymentsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdPaymentsGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdPaymentsGet($invoice_id): \OpenAPI\Client\Model\InvoiceDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdPaymentsGet($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoListEnvelope**](../Model/InvoiceDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdPut()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdPut($tenant_id, $invoice_id, $invoice_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_update_dto = new \OpenAPI\Client\Model\InvoiceUpdateDto(); // \OpenAPI\Client\Model\InvoiceUpdateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdPut($tenant_id, $invoice_id, $invoice_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_update_dto** | [**\OpenAPI\Client\Model\InvoiceUpdateDto**](../Model/InvoiceUpdateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdReferencesCountGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdReferencesCountGet($tenant_id, $invoice_id): \OpenAPI\Client\Model\Int32Envelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdReferencesCountGet($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdReferencesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdReferencesGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdReferencesGet($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceReferenceDtoListEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdReferencesGet($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceReferenceDtoListEnvelope**](../Model/InvoiceReferenceDtoListEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdDelete()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdDelete($tenant_id, $invoice_id, $invoice_reference_id): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_id = 'invoice_reference_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdDelete($tenant_id, $invoice_id, $invoice_reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_reference_id** | **string**|  | |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdGet()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdGet($tenant_id, $invoice_id, $invoice_reference_id): \OpenAPI\Client\Model\InvoiceReferenceDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_id = 'invoice_reference_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdGet($tenant_id, $invoice_id, $invoice_reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_reference_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceReferenceDtoEnvelope**](../Model/InvoiceReferenceDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdPut()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdPut($tenant_id, $invoice_id, $invoice_reference_id, $invoice_reference_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_id = 'invoice_reference_id_example'; // string
$invoice_reference_update_dto = new \OpenAPI\Client\Model\InvoiceReferenceUpdateDto(); // \OpenAPI\Client\Model\InvoiceReferenceUpdateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdPut($tenant_id, $invoice_id, $invoice_reference_id, $invoice_reference_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_reference_id** | **string**|  | |
| **invoice_reference_update_dto** | [**\OpenAPI\Client\Model\InvoiceReferenceUpdateDto**](../Model/InvoiceReferenceUpdateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesInvoiceIdReferencesPost()`

```php
apiV2InvoicingServiceInvoicesInvoiceIdReferencesPost($tenant_id, $invoice_id, $invoice_reference_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_create_dto = new \OpenAPI\Client\Model\InvoiceReferenceCreateDto(); // \OpenAPI\Client\Model\InvoiceReferenceCreateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesInvoiceIdReferencesPost($tenant_id, $invoice_id, $invoice_reference_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesInvoiceIdReferencesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_reference_create_dto** | [**\OpenAPI\Client\Model\InvoiceReferenceCreateDto**](../Model/InvoiceReferenceCreateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesPost()`

```php
apiV2InvoicingServiceInvoicesPost($tenant_id, $invoice_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_create_dto = new \OpenAPI\Client\Model\InvoiceCreateDto(); // \OpenAPI\Client\Model\InvoiceCreateDto

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesPost($tenant_id, $invoice_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_create_dto** | [**\OpenAPI\Client\Model\InvoiceCreateDto**](../Model/InvoiceCreateDto.md)|  | [optional] |

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

## `apiV2InvoicingServiceInvoicesTaxBasesAggregatePost()`

```php
apiV2InvoicingServiceInvoicesTaxBasesAggregatePost($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesTaxBasesAggregatePost($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesTaxBasesAggregatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |
| **currency_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesTaxesAggregatePost()`

```php
apiV2InvoicingServiceInvoicesTaxesAggregatePost($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesTaxesAggregatePost($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesTaxesAggregatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |
| **currency_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2InvoicingServiceInvoicesTotalsAggregatePost()`

```php
apiV2InvoicingServiceInvoicesTotalsAggregatePost($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->apiV2InvoicingServiceInvoicesTotalsAggregatePost($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiV2InvoicingServiceInvoicesTotalsAggregatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |
| **currency_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MoneyEnvelope**](../Model/MoneyEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceAsync()`

```php
getInvoiceAsync($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceDtoEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoiceAsync($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoEnvelope**](../Model/InvoiceDtoEnvelope.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
