# OpenAPI\Client\InvoicesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aggregateInvoiceDiscounts()**](InvoicesApi.md#aggregateInvoiceDiscounts) | **POST** /api/v2/InvoicingService/Invoices/DiscountsAggregate | Aggregate invoice discounts. |
| [**aggregateInvoiceGlobalSurcharges()**](InvoicesApi.md#aggregateInvoiceGlobalSurcharges) | **POST** /api/v2/InvoicingService/Invoices/GlobalSurchargesAggregate | Aggregate invoice global surcharges. |
| [**aggregateInvoiceTaxBases()**](InvoicesApi.md#aggregateInvoiceTaxBases) | **POST** /api/v2/InvoicingService/Invoices/TaxBasesAggregate | Aggregate invoice tax bases. |
| [**aggregateInvoiceTaxes()**](InvoicesApi.md#aggregateInvoiceTaxes) | **POST** /api/v2/InvoicingService/Invoices/TaxesAggregate | Aggregate invoice taxes. |
| [**aggregateInvoiceTotals()**](InvoicesApi.md#aggregateInvoiceTotals) | **POST** /api/v2/InvoicingService/Invoices/TotalsAggregate | Aggregate invoice totals. |
| [**calculateInvoice()**](InvoicesApi.md#calculateInvoice) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Calculate | Calculate an invoice. |
| [**calculateInvoiceLine()**](InvoicesApi.md#calculateInvoiceLine) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Calculate | Calculate an invoice line. |
| [**createInvoice()**](InvoicesApi.md#createInvoice) | **POST** /api/v2/InvoicingService/Invoices | Create a new invoice. |
| [**createInvoiceAdjustment()**](InvoicesApi.md#createInvoiceAdjustment) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments | Create a new invoice adjustment. |
| [**createInvoiceLine()**](InvoicesApi.md#createInvoiceLine) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines | Create a new invoice line. |
| [**createInvoiceLineTax()**](InvoicesApi.md#createInvoiceLineTax) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes | Create a new tax for an invoice line. |
| [**createInvoiceReference()**](InvoicesApi.md#createInvoiceReference) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/References | Create a new invoice reference. |
| [**deleteInvoice()**](InvoicesApi.md#deleteInvoice) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId} | Delete an invoice. |
| [**deleteInvoiceAdjustment()**](InvoicesApi.md#deleteInvoiceAdjustment) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} | Delete an invoice adjustment. |
| [**deleteInvoiceLine()**](InvoicesApi.md#deleteInvoiceLine) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} | Delete an invoice line. |
| [**deleteInvoiceLineTax()**](InvoicesApi.md#deleteInvoiceLineTax) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/{invoiceLineTaxId} | Delete a tax from an invoice line. |
| [**deleteInvoiceReference()**](InvoicesApi.md#deleteInvoiceReference) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} | Delete an invoice reference. |
| [**getExtendedInvoice()**](InvoicesApi.md#getExtendedInvoice) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Extended | Get an extended invoice by ID. |
| [**getExtendedInvoices()**](InvoicesApi.md#getExtendedInvoices) | **GET** /api/v2/InvoicingService/Invoices/Extended | Get a list of extended invoices. |
| [**getExtendedInvoicesCount()**](InvoicesApi.md#getExtendedInvoicesCount) | **GET** /api/v2/InvoicingService/Invoices/Extended/Count | Get the count of extended invoices. |
| [**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId} | Get an invoice by ID. |
| [**getInvoiceAdjustment()**](InvoicesApi.md#getInvoiceAdjustment) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} | Get an invoice adjustment by ID. |
| [**getInvoiceAdjustments()**](InvoicesApi.md#getInvoiceAdjustments) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments | Get invoice adjustments. |
| [**getInvoiceAdjustmentsCount()**](InvoicesApi.md#getInvoiceAdjustmentsCount) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/Count | Get the count of invoice adjustments. |
| [**getInvoiceLine()**](InvoicesApi.md#getInvoiceLine) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} | Get an invoice line by ID. |
| [**getInvoiceLineTaxes()**](InvoicesApi.md#getInvoiceLineTaxes) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes | Get taxes for an invoice line. |
| [**getInvoiceLineTaxesCount()**](InvoicesApi.md#getInvoiceLineTaxesCount) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/Count | Get the count of taxes for an invoice line. |
| [**getInvoiceLines()**](InvoicesApi.md#getInvoiceLines) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines | Get invoice lines. |
| [**getInvoiceLinesCount()**](InvoicesApi.md#getInvoiceLinesCount) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/Count | Get the count of invoice lines. |
| [**getInvoicePayments()**](InvoicesApi.md#getInvoicePayments) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Payments | Get payments for an invoice. |
| [**getInvoicePaymentsCount()**](InvoicesApi.md#getInvoicePaymentsCount) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Payments/Count | Get the count of payments for an invoice. |
| [**getInvoiceReference()**](InvoicesApi.md#getInvoiceReference) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} | Get an invoice reference by ID. |
| [**getInvoiceReferences()**](InvoicesApi.md#getInvoiceReferences) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References | Get invoice references. |
| [**getInvoiceReferencesCount()**](InvoicesApi.md#getInvoiceReferencesCount) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References/Count | Get the count of invoice references. |
| [**getInvoices()**](InvoicesApi.md#getInvoices) | **GET** /api/v2/InvoicingService/Invoices | Get a list of invoices. |
| [**getInvoicesCount()**](InvoicesApi.md#getInvoicesCount) | **GET** /api/v2/InvoicingService/Invoices/Count | Get the count of invoices. |
| [**previewInvoiceEmail()**](InvoicesApi.md#previewInvoiceEmail) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Emails/Preview | Preview the rendered email for an invoice. |
| [**sendInvoiceEmail()**](InvoicesApi.md#sendInvoiceEmail) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Emails/Send | Send an invoice transactional email to recipients. |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId} | Update an invoice. |
| [**updateInvoiceAdjustment()**](InvoicesApi.md#updateInvoiceAdjustment) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} | Update an invoice adjustment. |
| [**updateInvoiceLine()**](InvoicesApi.md#updateInvoiceLine) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} | Update an invoice line. |
| [**updateInvoiceLineTax()**](InvoicesApi.md#updateInvoiceLineTax) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/{invoiceLineTaxId} | Update a tax for an invoice line. |
| [**updateInvoiceReference()**](InvoicesApi.md#updateInvoiceReference) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} | Update an invoice reference. |


## `aggregateInvoiceDiscounts()`

```php
aggregateInvoiceDiscounts($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```

Aggregate invoice discounts.

Aggregates the discounts for the specified invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->aggregateInvoiceDiscounts($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->aggregateInvoiceDiscounts: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregateInvoiceGlobalSurcharges()`

```php
aggregateInvoiceGlobalSurcharges($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```

Aggregate invoice global surcharges.

Aggregates the global surcharges for the specified invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->aggregateInvoiceGlobalSurcharges($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->aggregateInvoiceGlobalSurcharges: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregateInvoiceTaxBases()`

```php
aggregateInvoiceTaxBases($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```

Aggregate invoice tax bases.

Aggregates the tax bases for the specified invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->aggregateInvoiceTaxBases($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->aggregateInvoiceTaxBases: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregateInvoiceTaxes()`

```php
aggregateInvoiceTaxes($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```

Aggregate invoice taxes.

Aggregates the taxes for the specified invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->aggregateInvoiceTaxes($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->aggregateInvoiceTaxes: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregateInvoiceTotals()`

```php
aggregateInvoiceTotals($request_body, $currency_id): \OpenAPI\Client\Model\MoneyEnvelope
```

Aggregate invoice totals.

Aggregates the totals for the specified invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]
$currency_id = 'currency_id_example'; // string

try {
    $result = $apiInstance->aggregateInvoiceTotals($request_body, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->aggregateInvoiceTotals: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateInvoice()`

```php
calculateInvoice($tenant_id, $invoice_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculate an invoice.

Calculates the totals and taxes for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->calculateInvoice($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->calculateInvoice: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateInvoiceLine()`

```php
calculateInvoiceLine($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Calculate an invoice line.

Calculates the totals and taxes for the specified invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->calculateInvoiceLine($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->calculateInvoiceLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoice()`

```php
createInvoice($tenant_id, $invoice_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new invoice.

Creates a new invoice for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_create_dto = new \OpenAPI\Client\Model\InvoiceCreateDto(); // \OpenAPI\Client\Model\InvoiceCreateDto

try {
    $result = $apiInstance->createInvoice($tenant_id, $invoice_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceAdjustment()`

```php
createInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new invoice adjustment.

Creates a new adjustment for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_create_dto = new \OpenAPI\Client\Model\InvoiceAdjustmentCreateDto(); // \OpenAPI\Client\Model\InvoiceAdjustmentCreateDto

try {
    $result = $apiInstance->createInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceLine()`

```php
createInvoiceLine($tenant_id, $invoice_id, $invoice_line_create_dto): \OpenAPI\Client\Model\InvoiceLineDtoIReadOnlyListEnvelope
```

Create a new invoice line.

Creates a new invoice line for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_create_dto = new \OpenAPI\Client\Model\InvoiceLineCreateDto(); // \OpenAPI\Client\Model\InvoiceLineCreateDto

try {
    $result = $apiInstance->createInvoiceLine($tenant_id, $invoice_id, $invoice_line_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_create_dto** | [**\OpenAPI\Client\Model\InvoiceLineCreateDto**](../Model/InvoiceLineCreateDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineDtoIReadOnlyListEnvelope**](../Model/InvoiceLineDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceLineTax()`

```php
createInvoiceLineTax($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_applied_tax_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new tax for an invoice line.

Creates a new tax entry for the specified invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_applied_tax_create_dto = new \OpenAPI\Client\Model\InvoiceLineAppliedTaxCreateDto(); // \OpenAPI\Client\Model\InvoiceLineAppliedTaxCreateDto

try {
    $result = $apiInstance->createInvoiceLineTax($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_applied_tax_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoiceLineTax: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceReference()`

```php
createInvoiceReference($tenant_id, $invoice_id, $invoice_reference_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new invoice reference.

Creates a new reference for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_create_dto = new \OpenAPI\Client\Model\InvoiceReferenceCreateDto(); // \OpenAPI\Client\Model\InvoiceReferenceCreateDto

try {
    $result = $apiInstance->createInvoiceReference($tenant_id, $invoice_id, $invoice_reference_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoiceReference: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoice()`

```php
deleteInvoice($tenant_id, $invoice_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an invoice.

Deletes the specified invoice for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->deleteInvoice($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoice: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoiceAdjustment()`

```php
deleteInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an invoice adjustment.

Deletes the specified adjustment from the invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_id = 'invoice_adjustment_id_example'; // string

try {
    $result = $apiInstance->deleteInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoiceLine()`

```php
deleteInvoiceLine($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an invoice line.

Deletes the specified invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->deleteInvoiceLine($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoiceLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoiceLineTax()`

```php
deleteInvoiceLineTax($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a tax from an invoice line.

Deletes the specified tax entry from the invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_tax_id = 'invoice_line_tax_id_example'; // string

try {
    $result = $apiInstance->deleteInvoiceLineTax($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoiceLineTax: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoiceReference()`

```php
deleteInvoiceReference($tenant_id, $invoice_id, $invoice_reference_id): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an invoice reference.

Deletes the specified reference from the invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_id = 'invoice_reference_id_example'; // string

try {
    $result = $apiInstance->deleteInvoiceReference($tenant_id, $invoice_id, $invoice_reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoiceReference: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedInvoice()`

```php
getExtendedInvoice($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceDtoEnvelope
```

Get an extended invoice by ID.

Retrieves the extended invoice details for the specified invoice ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getExtendedInvoice($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getExtendedInvoice: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedInvoices()`

```php
getExtendedInvoices($tenant_id): \OpenAPI\Client\Model\ExtendedInvoiceDtoListEnvelope
```

Get a list of extended invoices.

Retrieves a list of extended invoice details for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getExtendedInvoices($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getExtendedInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ExtendedInvoiceDtoListEnvelope**](../Model/ExtendedInvoiceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedInvoicesCount()`

```php
getExtendedInvoicesCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of extended invoices.

Retrieves the total count of extended invoices for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getExtendedInvoicesCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getExtendedInvoicesCount: ', $e->getMessage(), PHP_EOL;
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

## `getInvoice()`

```php
getInvoice($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceDtoEnvelope
```

Get an invoice by ID.

Retrieves the invoice details for the specified invoice ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoice($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceAdjustment()`

```php
getInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_id): \OpenAPI\Client\Model\InvoiceAdjustmentDtoEnvelope
```

Get an invoice adjustment by ID.

Retrieves the adjustment details for the specified invoice adjustment ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_id = 'invoice_adjustment_id_example'; // string

try {
    $result = $apiInstance->getInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceAdjustments()`

```php
getInvoiceAdjustments($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceAdjustmentDtoIReadOnlyListEnvelope
```

Get invoice adjustments.

Retrieves the adjustments for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoiceAdjustments($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceAdjustments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceAdjustmentDtoIReadOnlyListEnvelope**](../Model/InvoiceAdjustmentDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceAdjustmentsCount()`

```php
getInvoiceAdjustmentsCount($tenant_id, $invoice_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of invoice adjustments.

Retrieves the total count of adjustments for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoiceAdjustmentsCount($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceAdjustmentsCount: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceLine()`

```php
getInvoiceLine($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\InvoiceLineDtoEnvelope
```

Get an invoice line by ID.

Retrieves the invoice line details for the specified invoice line ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->getInvoiceLine($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceLine: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceLineTaxes()`

```php
getInvoiceLineTaxes($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\InvoiceLineAppliedTaxDtoIReadOnlyListEnvelope
```

Get taxes for an invoice line.

Retrieves the taxes applied to the specified invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->getInvoiceLineTaxes($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceLineTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **invoice_line_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineAppliedTaxDtoIReadOnlyListEnvelope**](../Model/InvoiceLineAppliedTaxDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceLineTaxesCount()`

```php
getInvoiceLineTaxesCount($tenant_id, $invoice_id, $invoice_line_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of taxes for an invoice line.

Retrieves the total count of taxes applied to the specified invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string

try {
    $result = $apiInstance->getInvoiceLineTaxesCount($tenant_id, $invoice_id, $invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceLineTaxesCount: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceLines()`

```php
getInvoiceLines($tenant_id, $invoice_id, $item_id): \OpenAPI\Client\Model\InvoiceLineDtoListEnvelope
```

Get invoice lines.

Retrieves the invoice lines for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->getInvoiceLines($tenant_id, $invoice_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceLines: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceLinesCount()`

```php
getInvoiceLinesCount($tenant_id, $invoice_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of invoice lines.

Retrieves the total count of invoice lines for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoiceLinesCount($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceLinesCount: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicePayments()`

```php
getInvoicePayments($invoice_id): \OpenAPI\Client\Model\PaymentDtoIReadOnlyListEnvelope
```

Get payments for an invoice.

Retrieves the list of payments related to the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoicePayments($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoicePayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentDtoIReadOnlyListEnvelope**](../Model/PaymentDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicePaymentsCount()`

```php
getInvoicePaymentsCount($invoice_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of payments for an invoice.

Retrieves the total count of payments for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoicePaymentsCount($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoicePaymentsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**|  | |

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

## `getInvoiceReference()`

```php
getInvoiceReference($tenant_id, $invoice_id, $invoice_reference_id): \OpenAPI\Client\Model\InvoiceReferenceDtoEnvelope
```

Get an invoice reference by ID.

Retrieves the reference details for the specified invoice reference ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_id = 'invoice_reference_id_example'; // string

try {
    $result = $apiInstance->getInvoiceReference($tenant_id, $invoice_id, $invoice_reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceReference: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceReferences()`

```php
getInvoiceReferences($tenant_id, $invoice_id): \OpenAPI\Client\Model\InvoiceReferenceDtoIReadOnlyListEnvelope
```

Get invoice references.

Retrieves the references for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoiceReferences($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceReferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceReferenceDtoIReadOnlyListEnvelope**](../Model/InvoiceReferenceDtoIReadOnlyListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceReferencesCount()`

```php
getInvoiceReferencesCount($tenant_id, $invoice_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of invoice references.

Retrieves the total count of references for the specified invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoiceReferencesCount($tenant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceReferencesCount: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($tenant_id): \OpenAPI\Client\Model\InvoiceDtoListEnvelope
```

Get a list of invoices.

Retrieves a list of invoices for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getInvoices($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvoiceDtoListEnvelope**](../Model/InvoiceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicesCount()`

```php
getInvoicesCount($tenant_id): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of invoices.

Retrieves the total count of invoices for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->getInvoicesCount($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoicesCount: ', $e->getMessage(), PHP_EOL;
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

## `previewInvoiceEmail()`

```php
previewInvoiceEmail($invoice_id, $tenant_id, $email_dispatch_request)
```

Preview the rendered email for an invoice.

This action is only available for users with the 'send_email' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = 'invoice_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $apiInstance->previewInvoiceEmail($invoice_id, $tenant_id, $email_dispatch_request);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->previewInvoiceEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**|  | |
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

## `sendInvoiceEmail()`

```php
sendInvoiceEmail($tenant_id, $invoice_id, $email_dispatch_request): \OpenAPI\Client\Model\Envelope
```

Send an invoice transactional email to recipients.

This action is only available for users with the 'send_email' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$email_dispatch_request = new \OpenAPI\Client\Model\EmailDispatchRequest(); // \OpenAPI\Client\Model\EmailDispatchRequest

try {
    $result = $apiInstance->sendInvoiceEmail($tenant_id, $invoice_id, $email_dispatch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->sendInvoiceEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **email_dispatch_request** | [**\OpenAPI\Client\Model\EmailDispatchRequest**](../Model/EmailDispatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Envelope**](../Model/Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoice()`

```php
updateInvoice($tenant_id, $invoice_id, $invoice_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an invoice.

Updates the specified invoice for the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_update_dto = new \OpenAPI\Client\Model\InvoiceUpdateDto(); // \OpenAPI\Client\Model\InvoiceUpdateDto

try {
    $result = $apiInstance->updateInvoice($tenant_id, $invoice_id, $invoice_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoiceAdjustment()`

```php
updateInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_id, $invoice_adjustment_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an invoice adjustment.

Updates the specified adjustment for the invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_adjustment_id = 'invoice_adjustment_id_example'; // string
$invoice_adjustment_update_dto = new \OpenAPI\Client\Model\InvoiceAdjustmentUpdateDto(); // \OpenAPI\Client\Model\InvoiceAdjustmentUpdateDto

try {
    $result = $apiInstance->updateInvoiceAdjustment($tenant_id, $invoice_id, $invoice_adjustment_id, $invoice_adjustment_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoiceLine()`

```php
updateInvoiceLine($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_update_dto): \OpenAPI\Client\Model\InvoiceLineDtoEnvelope
```

Update an invoice line.

Updates the specified invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_update_dto = new \OpenAPI\Client\Model\InvoiceLineUpdateDto(); // \OpenAPI\Client\Model\InvoiceLineUpdateDto

try {
    $result = $apiInstance->updateInvoiceLine($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoiceLine: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InvoiceLineDtoEnvelope**](../Model/InvoiceLineDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoiceLineTax()`

```php
updateInvoiceLineTax($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id, $invoice_line_applied_tax_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a tax for an invoice line.

Updates the specified tax entry for the invoice line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_line_id = 'invoice_line_id_example'; // string
$invoice_line_tax_id = 'invoice_line_tax_id_example'; // string
$invoice_line_applied_tax_update_dto = new \OpenAPI\Client\Model\InvoiceLineAppliedTaxUpdateDto(); // \OpenAPI\Client\Model\InvoiceLineAppliedTaxUpdateDto

try {
    $result = $apiInstance->updateInvoiceLineTax($tenant_id, $invoice_id, $invoice_line_id, $invoice_line_tax_id, $invoice_line_applied_tax_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoiceLineTax: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoiceReference()`

```php
updateInvoiceReference($tenant_id, $invoice_id, $invoice_reference_id, $invoice_reference_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an invoice reference.

Updates the specified reference for the invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$invoice_reference_id = 'invoice_reference_id_example'; // string
$invoice_reference_update_dto = new \OpenAPI\Client\Model\InvoiceReferenceUpdateDto(); // \OpenAPI\Client\Model\InvoiceReferenceUpdateDto

try {
    $result = $apiInstance->updateInvoiceReference($tenant_id, $invoice_id, $invoice_reference_id, $invoice_reference_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoiceReference: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
