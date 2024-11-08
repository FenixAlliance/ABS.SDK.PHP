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


$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_id = 'wallet_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$location_create_dto = new \OpenAPI\Client\Model\LocationCreateDto(); // \OpenAPI\Client\Model\LocationCreateDto

try {
    $result = $apiInstance->createWalletLocationAsync($wallet_id, $api_version, $x_api_version, $location_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletLocationAsync: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*WalletsApi* | [**createWalletLocationAsync**](docs/Api/WalletsApi.md#createwalletlocationasync) | **POST** /api/v2/WalletsService/Wallets/{walletId}/Locations | Create Wallet Location
*WalletsApi* | [**deleteWalletLocationAsync**](docs/Api/WalletsApi.md#deletewalletlocationasync) | **DELETE** /api/v2/WalletsService/Wallets/{walletId}/Locations/{locationId} | Delete Wallet Location
*WalletsApi* | [**getIncomingPaymentsAsync**](docs/Api/WalletsApi.md#getincomingpaymentsasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Incoming | Get Incoming Payments
*WalletsApi* | [**getIncomingPaymentsCountAsync**](docs/Api/WalletsApi.md#getincomingpaymentscountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Incoming/Count | Get Incoming Payments Count
*WalletsApi* | [**getIncomingWalletInvoicesAsync**](docs/Api/WalletsApi.md#getincomingwalletinvoicesasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Incoming | Get Incoming Wallet Invoices
*WalletsApi* | [**getIncomingWalletInvoicesCountAsync**](docs/Api/WalletsApi.md#getincomingwalletinvoicescountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Incoming/Count | Get Incoming Wallet Invoices Count
*WalletsApi* | [**getOutgoingPaymentsAsync**](docs/Api/WalletsApi.md#getoutgoingpaymentsasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Outgoing | Get Outgoing Payments
*WalletsApi* | [**getOutgoingPaymentsCountAsync**](docs/Api/WalletsApi.md#getoutgoingpaymentscountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Outgoing/Count | Get Outgoing Payments Count
*WalletsApi* | [**getOutgoingWalletInvoicesAsync**](docs/Api/WalletsApi.md#getoutgoingwalletinvoicesasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Outgoing | Get Outgoing Wallet Invoices
*WalletsApi* | [**getOutgoingWalletInvoicesCountAsync**](docs/Api/WalletsApi.md#getoutgoingwalletinvoicescountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Outgoing/Count | Get Outgoing Wallet Invoices Count
*WalletsApi* | [**getWalletDetailsAsync**](docs/Api/WalletsApi.md#getwalletdetailsasync) | **GET** /api/v2/WalletsService/Wallets/{walletId} | Get Wallet Details
*WalletsApi* | [**getWalletExtendedOrdersAsync**](docs/Api/WalletsApi.md#getwalletextendedordersasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Orders/Extended | Get Wallet Extended Orders
*WalletsApi* | [**getWalletInvoicesAsync**](docs/Api/WalletsApi.md#getwalletinvoicesasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices | Get Wallet Invoices
*WalletsApi* | [**getWalletInvoicesCountAsync**](docs/Api/WalletsApi.md#getwalletinvoicescountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Invoices/Count | Get Wallet Invoices Count
*WalletsApi* | [**getWalletLocationAsync**](docs/Api/WalletsApi.md#getwalletlocationasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Locations/{locationId} | Get Wallet Location
*WalletsApi* | [**getWalletLocationsAsync**](docs/Api/WalletsApi.md#getwalletlocationsasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Locations | Get Wallet Locations
*WalletsApi* | [**getWalletLocationsCountAsync**](docs/Api/WalletsApi.md#getwalletlocationscountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Locations/Count | Get Wallet Locations Count
*WalletsApi* | [**getWalletOrdersAsync**](docs/Api/WalletsApi.md#getwalletordersasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Orders | Get Wallet Orders
*WalletsApi* | [**getWalletOrdersCountAsync**](docs/Api/WalletsApi.md#getwalletorderscountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Orders/Count | Get Wallet Orders Count
*WalletsApi* | [**getWalletPaymentsAsync**](docs/Api/WalletsApi.md#getwalletpaymentsasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments | Get Wallet Payments
*WalletsApi* | [**getWalletPaymentsCountAsync**](docs/Api/WalletsApi.md#getwalletpaymentscountasync) | **GET** /api/v2/WalletsService/Wallets/{walletId}/Payments/Count | Get Wallet Payments Count
*WalletsApi* | [**updateWalletLocationAsync**](docs/Api/WalletsApi.md#updatewalletlocationasync) | **PUT** /api/v2/WalletsService/Wallets/{walletId}/Locations/{locationId} | Update Wallet Location

## Models

- [ContactDto](docs/Model/ContactDto.md)
- [Currency](docs/Model/Currency.md)
- [EmptyEnvelope](docs/Model/EmptyEnvelope.md)
- [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
- [ExtendedOrderDto](docs/Model/ExtendedOrderDto.md)
- [ExtendedOrderDtoListEnvelope](docs/Model/ExtendedOrderDtoListEnvelope.md)
- [Int32Envelope](docs/Model/Int32Envelope.md)
- [InvoiceDto](docs/Model/InvoiceDto.md)
- [InvoiceDtoListEnvelope](docs/Model/InvoiceDtoListEnvelope.md)
- [LocationCreateDto](docs/Model/LocationCreateDto.md)
- [LocationDto](docs/Model/LocationDto.md)
- [LocationDtoEnvelope](docs/Model/LocationDtoEnvelope.md)
- [LocationDtoListEnvelope](docs/Model/LocationDtoListEnvelope.md)
- [LocationUpdateDto](docs/Model/LocationUpdateDto.md)
- [Money](docs/Model/Money.md)
- [OrderDto](docs/Model/OrderDto.md)
- [OrderDtoListEnvelope](docs/Model/OrderDtoListEnvelope.md)
- [PaymentDto](docs/Model/PaymentDto.md)
- [PaymentDtoListEnvelope](docs/Model/PaymentDtoListEnvelope.md)
- [TenantDto](docs/Model/TenantDto.md)
- [TenantEnrolmentDto](docs/Model/TenantEnrolmentDto.md)
- [UserDto](docs/Model/UserDto.md)
- [WalletDto](docs/Model/WalletDto.md)
- [WalletDtoEnvelope](docs/Model/WalletDtoEnvelope.md)

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
