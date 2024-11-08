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


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_create_dto = new \OpenAPI\Client\Model\ContactCreateDto(); // \OpenAPI\Client\Model\ContactCreateDto

try {
    $result = $apiInstance->createContactAsync($tenant_id, $api_version, $x_api_version, $contact_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContactAsync: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContactsApi* | [**createContactAsync**](docs/Api/ContactsApi.md#createcontactasync) | **POST** /api/v2/CrmService/Contacts | Create a new contact
*ContactsApi* | [**deleteContactAsync**](docs/Api/ContactsApi.md#deletecontactasync) | **DELETE** /api/v2/CrmService/Contacts/{contactId} | Delete a contact
*ContactsApi* | [**getBusinessOwnedIndividualAsync**](docs/Api/ContactsApi.md#getbusinessownedindividualasync) | **GET** /api/v2/CrmService/Contacts/Individuals/{contactId} | Get a Contact of type Individual by ID
*ContactsApi* | [**getBusinessOwnedIndividualsAsync**](docs/Api/ContactsApi.md#getbusinessownedindividualsasync) | **GET** /api/v2/CrmService/Contacts/Individuals | Get all contacts of type individual
*ContactsApi* | [**getBusinessOwnedIndividualsCountAsync**](docs/Api/ContactsApi.md#getbusinessownedindividualscountasync) | **GET** /api/v2/CrmService/Contacts/Individuals/Count | Get all contacts of type individual count
*ContactsApi* | [**getBusinessOwnedOrganizationAsync**](docs/Api/ContactsApi.md#getbusinessownedorganizationasync) | **GET** /api/v2/CrmService/Contacts/Organizations/{contactId} | Get a Contact of type Organization by ID
*ContactsApi* | [**getBusinessOwnedOrganizationsAsync**](docs/Api/ContactsApi.md#getbusinessownedorganizationsasync) | **GET** /api/v2/CrmService/Contacts/Organizations | Get all contacts of type organization
*ContactsApi* | [**getBusinessOwnedOrganizationsCountAsync**](docs/Api/ContactsApi.md#getbusinessownedorganizationscountasync) | **GET** /api/v2/CrmService/Contacts/Organizations/Count | Get all contacts of type organization count
*ContactsApi* | [**getContactAsync**](docs/Api/ContactsApi.md#getcontactasync) | **GET** /api/v2/CrmService/Contacts/{contactId} | Get a contact by ID
*ContactsApi* | [**getContactAvatarAsync**](docs/Api/ContactsApi.md#getcontactavatarasync) | **GET** /api/v2/CrmService/Contacts/{contactId}/Avatar | Get a contact&#39;s avatar
*ContactsApi* | [**getContactCartAsync**](docs/Api/ContactsApi.md#getcontactcartasync) | **GET** /api/v2/CrmService/Contacts/{contactId}/Cart | Get a contact&#39;s cart
*ContactsApi* | [**getContactProfilesAsync**](docs/Api/ContactsApi.md#getcontactprofilesasync) | **GET** /api/v2/CrmService/Contacts/{contactId}/Profiles | Get a contact&#39;s social profiles
*ContactsApi* | [**getContactSocialProfileAsync**](docs/Api/ContactsApi.md#getcontactsocialprofileasync) | **GET** /api/v2/CrmService/Contacts/{contactId}/SocialProfile | Get a contact&#39;s social profile
*ContactsApi* | [**getContactWalletAsync**](docs/Api/ContactsApi.md#getcontactwalletasync) | **GET** /api/v2/CrmService/Contacts/{contactId}/Wallet | Get a contact&#39;s wallet
*ContactsApi* | [**getContactsAsync**](docs/Api/ContactsApi.md#getcontactsasync) | **GET** /api/v2/CrmService/Contacts | Get all business owned contacts
*ContactsApi* | [**getContactsCountAsync**](docs/Api/ContactsApi.md#getcontactscountasync) | **GET** /api/v2/CrmService/Contacts/Count | Get all business owned contacts count
*ContactsApi* | [**getExtendedBusinessOwnedIndividualsAsync**](docs/Api/ContactsApi.md#getextendedbusinessownedindividualsasync) | **GET** /api/v2/CrmService/Contacts/Individuals/Extended | Get all contacts of type individual
*ContactsApi* | [**getExtendedBusinessOwnedOrganizationsAsync**](docs/Api/ContactsApi.md#getextendedbusinessownedorganizationsasync) | **GET** /api/v2/CrmService/Contacts/Organizations/Extended | Get all contacts of type organization
*ContactsApi* | [**getExtendedContactAsync**](docs/Api/ContactsApi.md#getextendedcontactasync) | **GET** /api/v2/CrmService/Contacts/{contactId}/Extended | Get a contact by ID
*ContactsApi* | [**getExtendedContactsAsync**](docs/Api/ContactsApi.md#getextendedcontactsasync) | **GET** /api/v2/CrmService/Contacts/Extended | Get all business owned contacts
*ContactsApi* | [**getIndividualRelatedIndividualsAsync**](docs/Api/ContactsApi.md#getindividualrelatedindividualsasync) | **GET** /api/v2/CrmService/Contacts/Individuals/{contactId}/Individuals | Get individual related individuals
*ContactsApi* | [**getIndividualRelatedOrganizationsAsync**](docs/Api/ContactsApi.md#getindividualrelatedorganizationsasync) | **GET** /api/v2/CrmService/Contacts/Individuals/{contactId}/Organizations | Get individual related organizations
*ContactsApi* | [**getOrganizationRelatedIndividualsAsync**](docs/Api/ContactsApi.md#getorganizationrelatedindividualsasync) | **GET** /api/v2/CrmService/Contacts/Organizations/{contactId}/Individuals | Get organization related individuals
*ContactsApi* | [**getOrganizationRelatedOrganizationsAsync**](docs/Api/ContactsApi.md#getorganizationrelatedorganizationsasync) | **GET** /api/v2/CrmService/Contacts/Organizations/{contactId}/Organizations | Get organization related organizations
*ContactsApi* | [**patchContactAsync**](docs/Api/ContactsApi.md#patchcontactasync) | **PATCH** /api/v2/CrmService/Contacts/{contactId} | Patch a contact
*ContactsApi* | [**updateContactAsync**](docs/Api/ContactsApi.md#updatecontactasync) | **PUT** /api/v2/CrmService/Contacts/{contactId} | Update a contact
*ContactsApi* | [**updateContactAvatarAsync**](docs/Api/ContactsApi.md#updatecontactavatarasync) | **POST** /api/v2/CrmService/Contacts/{contactId}/Avatar | Update a contact&#39;s avatar
*ContactsApi* | [**upsertTenantOntoAnotherTenantContactListAsync**](docs/Api/ContactsApi.md#upserttenantontoanothertenantcontactlistasync) | **POST** /api/v2/CrmService/Contacts/Organizations/Upsert | Upsert a tenant onto another tenant&#39;s contact list
*ContactsApi* | [**upsertUserOntoAnotherTenantContactListAsync**](docs/Api/ContactsApi.md#upsertuserontoanothertenantcontactlistasync) | **POST** /api/v2/CrmService/Contacts/Individuals/Upsert | Upsert a user onto a tenant&#39;s contact list
*SyncApi* | [**apiV2CrmServiceSyncMePost**](docs/Api/SyncApi.md#apiv2crmservicesyncmepost) | **POST** /api/v2/CrmService/Sync/Me | 
*SyncApi* | [**apiV2CrmServiceSyncPost**](docs/Api/SyncApi.md#apiv2crmservicesyncpost) | **POST** /api/v2/CrmService/Sync | 
*SyncApi* | [**apiV2CrmServiceSyncTenantPost**](docs/Api/SyncApi.md#apiv2crmservicesynctenantpost) | **POST** /api/v2/CrmService/Sync/Tenant | 
*SyncApi* | [**apiV2CrmServiceSyncUserPost**](docs/Api/SyncApi.md#apiv2crmservicesyncuserpost) | **POST** /api/v2/CrmService/Sync/User | 

## Models

- [CartDto](docs/Model/CartDto.md)
- [CartDtoEnvelope](docs/Model/CartDtoEnvelope.md)
- [ContactCreateDto](docs/Model/ContactCreateDto.md)
- [ContactDto](docs/Model/ContactDto.md)
- [ContactDtoEnvelope](docs/Model/ContactDtoEnvelope.md)
- [ContactDtoListEnvelope](docs/Model/ContactDtoListEnvelope.md)
- [ContactProfileDto](docs/Model/ContactProfileDto.md)
- [ContactProfileDtoListEnvelope](docs/Model/ContactProfileDtoListEnvelope.md)
- [ContactUpdateDto](docs/Model/ContactUpdateDto.md)
- [EmptyEnvelope](docs/Model/EmptyEnvelope.md)
- [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
- [ExtendedContactDto](docs/Model/ExtendedContactDto.md)
- [ExtendedContactDtoEnvelope](docs/Model/ExtendedContactDtoEnvelope.md)
- [ExtendedContactDtoListEnvelope](docs/Model/ExtendedContactDtoListEnvelope.md)
- [Operation](docs/Model/Operation.md)
- [SimpleContactDto](docs/Model/SimpleContactDto.md)
- [SocialProfileDto](docs/Model/SocialProfileDto.md)
- [SocialProfileDtoEnvelope](docs/Model/SocialProfileDtoEnvelope.md)
- [UpdateContactAvatarAsyncRequest](docs/Model/UpdateContactAvatarAsyncRequest.md)
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
