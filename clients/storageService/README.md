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


$apiInstance = new OpenAPI\Client\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$social_profile_id = 'social_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getAvatar($social_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->getAvatar: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AvatarsApi* | [**getAvatar**](docs/Api/AvatarsApi.md#getavatar) | **GET** /api/v2/StorageService/Avatars/{socialProfileId} | Get the avatar for a given social profile.
*AvatarsApi* | [**getContactAvatar**](docs/Api/AvatarsApi.md#getcontactavatar) | **GET** /api/v2/StorageService/Avatars/Contact/{contactId} | Get the avatar for a given contact.
*AvatarsApi* | [**getCurrentUserAvatar**](docs/Api/AvatarsApi.md#getcurrentuseravatar) | **GET** /api/v2/StorageService/Avatars/User | Get the avatar for the current user.
*AvatarsApi* | [**getTenantAvatar**](docs/Api/AvatarsApi.md#gettenantavatar) | **GET** /api/v2/StorageService/Avatars/Tenant/{tenantId} | Get the avatar for a given tenant.
*AvatarsApi* | [**getUserAvatar**](docs/Api/AvatarsApi.md#getuseravatar) | **GET** /api/v2/StorageService/Avatars/User/{userId} | Get the avatar for a given user.
*AvatarsApi* | [**updateContactAvatar**](docs/Api/AvatarsApi.md#updatecontactavatar) | **POST** /api/v2/StorageService/Avatars/Contacts/{contactId} | Update the avatar for a given contact.
*AvatarsApi* | [**updateTenantAvatar**](docs/Api/AvatarsApi.md#updatetenantavatar) | **POST** /api/v2/StorageService/Avatars/Tenant/{tenantId} | Update the avatar for a given tenant.
*AvatarsApi* | [**updateUserAvatar**](docs/Api/AvatarsApi.md#updateuseravatar) | **POST** /api/v2/StorageService/Avatars/User | Update the avatar for the current user.
*BlobsApi* | [**getBlobAsync**](docs/Api/BlobsApi.md#getblobasync) | **GET** /api/v2/StorageService/Blobs/Single | 
*BlobsApi* | [**getBlobsAsync**](docs/Api/BlobsApi.md#getblobsasync) | **GET** /api/v2/StorageService/Blobs | 
*FilesApi* | [**createFileAsync**](docs/Api/FilesApi.md#createfileasync) | **POST** /api/v2/StorageService/Files | 
*FilesApi* | [**deleteFileAsync**](docs/Api/FilesApi.md#deletefileasync) | **DELETE** /api/v2/StorageService/Files/{fileId} | 
*FilesApi* | [**downloadFileAsync**](docs/Api/FilesApi.md#downloadfileasync) | **GET** /api/v2/StorageService/Files/{fileId}/Raw | 
*FilesApi* | [**getFileAsync**](docs/Api/FilesApi.md#getfileasync) | **GET** /api/v2/StorageService/Files/{fileId} | 
*FilesApi* | [**getFilesAsync**](docs/Api/FilesApi.md#getfilesasync) | **GET** /api/v2/StorageService/Files | 
*FilesApi* | [**updateFileAsync**](docs/Api/FilesApi.md#updatefileasync) | **PUT** /api/v2/StorageService/Files/{fileId} | 
*RadzenEditorApi* | [**apiV2StorageServiceRadzenEditorUploadsIdPost**](docs/Api/RadzenEditorApi.md#apiv2storageserviceradzeneditoruploadsidpost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/{id} | 
*RadzenEditorApi* | [**apiV2StorageServiceRadzenEditorUploadsImagePost**](docs/Api/RadzenEditorApi.md#apiv2storageserviceradzeneditoruploadsimagepost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Image | 
*RadzenEditorApi* | [**apiV2StorageServiceRadzenEditorUploadsMultiplePost**](docs/Api/RadzenEditorApi.md#apiv2storageserviceradzeneditoruploadsmultiplepost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Multiple | 
*RadzenEditorApi* | [**apiV2StorageServiceRadzenEditorUploadsSinglePost**](docs/Api/RadzenEditorApi.md#apiv2storageserviceradzeneditoruploadssinglepost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Single | 
*RadzenEditorApi* | [**apiV2StorageServiceRadzenEditorUploadsSpecificPost**](docs/Api/RadzenEditorApi.md#apiv2storageserviceradzeneditoruploadsspecificpost) | **POST** /api/v2/StorageService/RadzenEditor/Uploads/Specific | 
*UploadsApi* | [**apiV2StorageServiceUploadsPost**](docs/Api/UploadsApi.md#apiv2storageserviceuploadspost) | **POST** /api/v2/StorageService/Uploads | 

## Models

- [Blob](docs/Model/Blob.md)
- [BlobEnvelope](docs/Model/BlobEnvelope.md)
- [EmptyEnvelope](docs/Model/EmptyEnvelope.md)
- [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
- [FileUploadDto](docs/Model/FileUploadDto.md)
- [FileUploadDtoEnvelope](docs/Model/FileUploadDtoEnvelope.md)

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
