# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

For more information, please visit [https://fenixalliance.com.co/Support](https://fenixalliance.com.co/Support).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesCountGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicescountget) | **GET** /api/v2/InvoicingService/Invoices/Count | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesDiscountsAggregatePost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesdiscountsaggregatepost) | **POST** /api/v2/InvoicingService/Invoices/DiscountsAggregate | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesExtendedCountGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesextendedcountget) | **GET** /api/v2/InvoicingService/Invoices/Extended/Count | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesExtendedGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesextendedget) | **GET** /api/v2/InvoicingService/Invoices/Extended | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesget) | **GET** /api/v2/InvoicingService/Invoices | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesGlobalSurchargesAggregatePost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesglobalsurchargesaggregatepost) | **POST** /api/v2/InvoicingService/Invoices/GlobalSurchargesAggregate | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsCountGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidadjustmentscountget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/Count | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidadjustmentsget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdDelete**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidadjustmentsinvoiceadjustmentiddelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidadjustmentsinvoiceadjustmentidget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsInvoiceAdjustmentIdPut**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidadjustmentsinvoiceadjustmentidput) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments/{invoiceAdjustmentId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdAdjustmentsPost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidadjustmentspost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Adjustments | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdCalculatePut**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidcalculateput) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Calculate | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdDelete**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceiddelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdExtendedGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidextendedget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Extended | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesCountGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinescountget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/Count | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdCalculatePut**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidcalculateput) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Calculate | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdDelete**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineiddelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdPut**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidput) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesCountGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidtaxescountget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/Count | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidtaxesget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdDelete**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidtaxesinvoicelinetaxiddelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/{invoiceLineTaxId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesInvoiceLineTaxIdPut**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidtaxesinvoicelinetaxidput) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes/{invoiceLineTaxId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesInvoiceLineIdTaxesPost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinesinvoicelineidtaxespost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines/{invoiceLineId}/Taxes | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdLinesPost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidlinespost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/Lines | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdPaymentsCountGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidpaymentscountget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Payments/Count | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdPaymentsGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidpaymentsget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/Payments | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdPut**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidput) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesCountGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidreferencescountget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References/Count | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidreferencesget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdDelete**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidreferencesinvoicereferenceiddelete) | **DELETE** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdGet**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidreferencesinvoicereferenceidget) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesInvoiceReferenceIdPut**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidreferencesinvoicereferenceidput) | **PUT** /api/v2/InvoicingService/Invoices/{invoiceId}/References/{invoiceReferenceId} | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesInvoiceIdReferencesPost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicesinvoiceidreferencespost) | **POST** /api/v2/InvoicingService/Invoices/{invoiceId}/References | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesPost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicespost) | **POST** /api/v2/InvoicingService/Invoices | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesTaxBasesAggregatePost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicestaxbasesaggregatepost) | **POST** /api/v2/InvoicingService/Invoices/TaxBasesAggregate | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesTaxesAggregatePost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicestaxesaggregatepost) | **POST** /api/v2/InvoicingService/Invoices/TaxesAggregate | 
*InvoicesApi* | [**apiV2InvoicingServiceInvoicesTotalsAggregatePost**](docs/Api/InvoicesApi.md#apiv2invoicingserviceinvoicestotalsaggregatepost) | **POST** /api/v2/InvoicingService/Invoices/TotalsAggregate | 
*InvoicesApi* | [**getInvoiceAsync**](docs/Api/InvoicesApi.md#getinvoiceasync) | **GET** /api/v2/InvoicingService/Invoices/{invoiceId} | 

## Models

- [Currency](docs/Model/Currency.md)
- [EmptyEnvelope](docs/Model/EmptyEnvelope.md)
- [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
- [ExtendedInvoiceDto](docs/Model/ExtendedInvoiceDto.md)
- [ExtendedInvoiceDtoListEnvelope](docs/Model/ExtendedInvoiceDtoListEnvelope.md)
- [Int32Envelope](docs/Model/Int32Envelope.md)
- [InvoiceAdjustmentCreateDto](docs/Model/InvoiceAdjustmentCreateDto.md)
- [InvoiceAdjustmentDto](docs/Model/InvoiceAdjustmentDto.md)
- [InvoiceAdjustmentDtoEnvelope](docs/Model/InvoiceAdjustmentDtoEnvelope.md)
- [InvoiceAdjustmentDtoListEnvelope](docs/Model/InvoiceAdjustmentDtoListEnvelope.md)
- [InvoiceAdjustmentUpdateDto](docs/Model/InvoiceAdjustmentUpdateDto.md)
- [InvoiceCreateDto](docs/Model/InvoiceCreateDto.md)
- [InvoiceDto](docs/Model/InvoiceDto.md)
- [InvoiceDtoEnvelope](docs/Model/InvoiceDtoEnvelope.md)
- [InvoiceDtoListEnvelope](docs/Model/InvoiceDtoListEnvelope.md)
- [InvoiceItemRecordDto](docs/Model/InvoiceItemRecordDto.md)
- [InvoiceLineAppliedTaxCreateDto](docs/Model/InvoiceLineAppliedTaxCreateDto.md)
- [InvoiceLineAppliedTaxDto](docs/Model/InvoiceLineAppliedTaxDto.md)
- [InvoiceLineAppliedTaxDtoListEnvelope](docs/Model/InvoiceLineAppliedTaxDtoListEnvelope.md)
- [InvoiceLineAppliedTaxUpdateDto](docs/Model/InvoiceLineAppliedTaxUpdateDto.md)
- [InvoiceLineCreateDto](docs/Model/InvoiceLineCreateDto.md)
- [InvoiceLineDto](docs/Model/InvoiceLineDto.md)
- [InvoiceLineDtoEnvelope](docs/Model/InvoiceLineDtoEnvelope.md)
- [InvoiceLineDtoListEnvelope](docs/Model/InvoiceLineDtoListEnvelope.md)
- [InvoiceLineUpdateDto](docs/Model/InvoiceLineUpdateDto.md)
- [InvoiceReferenceCreateDto](docs/Model/InvoiceReferenceCreateDto.md)
- [InvoiceReferenceDto](docs/Model/InvoiceReferenceDto.md)
- [InvoiceReferenceDtoEnvelope](docs/Model/InvoiceReferenceDtoEnvelope.md)
- [InvoiceReferenceDtoListEnvelope](docs/Model/InvoiceReferenceDtoListEnvelope.md)
- [InvoiceReferenceUpdateDto](docs/Model/InvoiceReferenceUpdateDto.md)
- [InvoiceUpdateDto](docs/Model/InvoiceUpdateDto.md)
- [Money](docs/Model/Money.md)
- [MoneyEnvelope](docs/Model/MoneyEnvelope.md)
- [SimpleContactDto](docs/Model/SimpleContactDto.md)
- [SimpleTenantEnrolmentDto](docs/Model/SimpleTenantEnrolmentDto.md)
- [SimpleUserDto](docs/Model/SimpleUserDto.md)
- [TenantDto](docs/Model/TenantDto.md)

## Authorization

Authentication schemes defined for the API:
### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@fenix-alliance.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.1.4089`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
