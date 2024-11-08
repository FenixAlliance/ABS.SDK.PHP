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


$apiInstance = new OpenAPI\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 'country_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2GlobeServiceCountriesCountryIdCallingCodesGet($country_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->apiV2GlobeServiceCountriesCountryIdCallingCodesGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdCallingCodesGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidcallingcodesget) | **GET** /api/v2/GlobeService/Countries/{countryId}/CallingCodes | 
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdCurrenciesGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidcurrenciesget) | **GET** /api/v2/GlobeService/Countries/{countryId}/Currencies | 
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidget) | **GET** /api/v2/GlobeService/Countries/{countryId} | 
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdStatesCountryStateIdCitiesGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidstatescountrystateidcitiesget) | **GET** /api/v2/GlobeService/Countries/{countryId}/States/{countryStateId}/Cities | 
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdStatesCountryStateIdGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidstatescountrystateidget) | **GET** /api/v2/GlobeService/Countries/{countryId}/States/{countryStateId} | 
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdStatesGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidstatesget) | **GET** /api/v2/GlobeService/Countries/{countryId}/States | 
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdTimezonesGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidtimezonesget) | **GET** /api/v2/GlobeService/Countries/{countryId}/Timezones | 
*CountriesApi* | [**apiV2GlobeServiceCountriesCountryIdTopLevelDomainsGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriescountryidtopleveldomainsget) | **GET** /api/v2/GlobeService/Countries/{countryId}/TopLevelDomains | 
*CountriesApi* | [**apiV2GlobeServiceCountriesGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriesget) | **GET** /api/v2/GlobeService/Countries | 
*CountriesApi* | [**apiV2GlobeServiceCountriesSearchGet**](docs/Api/CountriesApi.md#apiv2globeservicecountriessearchget) | **GET** /api/v2/GlobeService/Countries/Search | 
*CurrenciesApi* | [**apiV2GlobeServiceCurrenciesCurrencyIdGet**](docs/Api/CurrenciesApi.md#apiv2globeservicecurrenciescurrencyidget) | **GET** /api/v2/GlobeService/Currencies/{currencyId} | 
*CurrenciesApi* | [**apiV2GlobeServiceCurrenciesGet**](docs/Api/CurrenciesApi.md#apiv2globeservicecurrenciesget) | **GET** /api/v2/GlobeService/Currencies | 
*LanguagesApi* | [**apiV2GlobeServiceLanguagesGet**](docs/Api/LanguagesApi.md#apiv2globeservicelanguagesget) | **GET** /api/v2/GlobeService/Languages | 
*LanguagesApi* | [**apiV2GlobeServiceLanguagesLanguageIdGet**](docs/Api/LanguagesApi.md#apiv2globeservicelanguageslanguageidget) | **GET** /api/v2/GlobeService/Languages/{languageId} | 
*MigrationsApi* | [**apiV2GlobalSystemMigratePost**](docs/Api/MigrationsApi.md#apiv2globalsystemmigratepost) | **POST** /api/v2/Global/System/Migrate | 
*TimezonesApi* | [**apiV2GlobeServiceTimezonesGet**](docs/Api/TimezonesApi.md#apiv2globeservicetimezonesget) | **GET** /api/v2/GlobeService/Timezones | 
*TimezonesApi* | [**apiV2GlobeServiceTimezonesTimeZoneIdGet**](docs/Api/TimezonesApi.md#apiv2globeservicetimezonestimezoneidget) | **GET** /api/v2/GlobeService/Timezones/{timeZoneId} | 

## Models

- [CityDto](docs/Model/CityDto.md)
- [CityDtoListEnvelope](docs/Model/CityDtoListEnvelope.md)
- [CountryCallingCodeDto](docs/Model/CountryCallingCodeDto.md)
- [CountryCallingCodeDtoListEnvelope](docs/Model/CountryCallingCodeDtoListEnvelope.md)
- [CountryDto](docs/Model/CountryDto.md)
- [CountryDtoEnvelope](docs/Model/CountryDtoEnvelope.md)
- [CountryDtoListEnvelope](docs/Model/CountryDtoListEnvelope.md)
- [CountryLanguageDto](docs/Model/CountryLanguageDto.md)
- [CountryLanguageDtoEnvelope](docs/Model/CountryLanguageDtoEnvelope.md)
- [CountryLanguageDtoListEnvelope](docs/Model/CountryLanguageDtoListEnvelope.md)
- [CountryStateDto](docs/Model/CountryStateDto.md)
- [CountryStateDtoEnvelope](docs/Model/CountryStateDtoEnvelope.md)
- [CountryStateDtoListEnvelope](docs/Model/CountryStateDtoListEnvelope.md)
- [CountryTopLevelDomainDto](docs/Model/CountryTopLevelDomainDto.md)
- [CountryTopLevelDomainDtoListEnvelope](docs/Model/CountryTopLevelDomainDtoListEnvelope.md)
- [CurrencyDto](docs/Model/CurrencyDto.md)
- [CurrencyDtoEnvelope](docs/Model/CurrencyDtoEnvelope.md)
- [CurrencyDtoListEnvelope](docs/Model/CurrencyDtoListEnvelope.md)
- [Error](docs/Model/Error.md)
- [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
- [PaymentResponse](docs/Model/PaymentResponse.md)
- [ResponseStatus](docs/Model/ResponseStatus.md)
- [TimezoneDto](docs/Model/TimezoneDto.md)
- [TimezoneDtoEnvelope](docs/Model/TimezoneDtoEnvelope.md)
- [TimezoneDtoListEnvelope](docs/Model/TimezoneDtoListEnvelope.md)

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
