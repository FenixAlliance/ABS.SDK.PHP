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


$apiInstance = new OpenAPI\Client\Api\EmailGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2MarketingServiceEmailGroupsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailGroupsApi->apiV2MarketingServiceEmailGroupsCountGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EmailGroupsApi* | [**apiV2MarketingServiceEmailGroupsCountGet**](docs/Api/EmailGroupsApi.md#apiv2marketingserviceemailgroupscountget) | **GET** /api/v2/MarketingService/EmailGroups/Count | 
*EmailGroupsApi* | [**apiV2MarketingServiceEmailGroupsEmailgroupIdDelete**](docs/Api/EmailGroupsApi.md#apiv2marketingserviceemailgroupsemailgroupiddelete) | **DELETE** /api/v2/MarketingService/EmailGroups/{emailgroupId} | 
*EmailGroupsApi* | [**apiV2MarketingServiceEmailGroupsEmailgroupIdGet**](docs/Api/EmailGroupsApi.md#apiv2marketingserviceemailgroupsemailgroupidget) | **GET** /api/v2/MarketingService/EmailGroups/{emailgroupId} | 
*EmailGroupsApi* | [**apiV2MarketingServiceEmailGroupsEmailgroupIdPut**](docs/Api/EmailGroupsApi.md#apiv2marketingserviceemailgroupsemailgroupidput) | **PUT** /api/v2/MarketingService/EmailGroups/{emailgroupId} | 
*EmailGroupsApi* | [**apiV2MarketingServiceEmailGroupsGet**](docs/Api/EmailGroupsApi.md#apiv2marketingserviceemailgroupsget) | **GET** /api/v2/MarketingService/EmailGroups | 
*EmailGroupsApi* | [**apiV2MarketingServiceEmailGroupsPost**](docs/Api/EmailGroupsApi.md#apiv2marketingserviceemailgroupspost) | **POST** /api/v2/MarketingService/EmailGroups | 
*EmailSignaturesApi* | [**apiV2MarketingServiceEmailSignaturesCountGet**](docs/Api/EmailSignaturesApi.md#apiv2marketingserviceemailsignaturescountget) | **GET** /api/v2/MarketingService/EmailSignatures/Count | 
*EmailSignaturesApi* | [**apiV2MarketingServiceEmailSignaturesEmailsignatureIdDelete**](docs/Api/EmailSignaturesApi.md#apiv2marketingserviceemailsignaturesemailsignatureiddelete) | **DELETE** /api/v2/MarketingService/EmailSignatures/{emailsignatureId} | 
*EmailSignaturesApi* | [**apiV2MarketingServiceEmailSignaturesEmailsignatureIdGet**](docs/Api/EmailSignaturesApi.md#apiv2marketingserviceemailsignaturesemailsignatureidget) | **GET** /api/v2/MarketingService/EmailSignatures/{emailsignatureId} | 
*EmailSignaturesApi* | [**apiV2MarketingServiceEmailSignaturesEmailsignatureIdPut**](docs/Api/EmailSignaturesApi.md#apiv2marketingserviceemailsignaturesemailsignatureidput) | **PUT** /api/v2/MarketingService/EmailSignatures/{emailsignatureId} | 
*EmailSignaturesApi* | [**apiV2MarketingServiceEmailSignaturesGet**](docs/Api/EmailSignaturesApi.md#apiv2marketingserviceemailsignaturesget) | **GET** /api/v2/MarketingService/EmailSignatures | 
*EmailSignaturesApi* | [**apiV2MarketingServiceEmailSignaturesPost**](docs/Api/EmailSignaturesApi.md#apiv2marketingserviceemailsignaturespost) | **POST** /api/v2/MarketingService/EmailSignatures | 
*EmailTemplatesApi* | [**apiV2MarketingServiceEmailTemplatesCountGet**](docs/Api/EmailTemplatesApi.md#apiv2marketingserviceemailtemplatescountget) | **GET** /api/v2/MarketingService/EmailTemplates/Count | 
*EmailTemplatesApi* | [**apiV2MarketingServiceEmailTemplatesEmailTemplateIdDelete**](docs/Api/EmailTemplatesApi.md#apiv2marketingserviceemailtemplatesemailtemplateiddelete) | **DELETE** /api/v2/MarketingService/EmailTemplates/{emailTemplateId} | 
*EmailTemplatesApi* | [**apiV2MarketingServiceEmailTemplatesEmailTemplateIdGet**](docs/Api/EmailTemplatesApi.md#apiv2marketingserviceemailtemplatesemailtemplateidget) | **GET** /api/v2/MarketingService/EmailTemplates/{emailTemplateId} | 
*EmailTemplatesApi* | [**apiV2MarketingServiceEmailTemplatesEmailTemplateIdPut**](docs/Api/EmailTemplatesApi.md#apiv2marketingserviceemailtemplatesemailtemplateidput) | **PUT** /api/v2/MarketingService/EmailTemplates/{emailTemplateId} | 
*EmailTemplatesApi* | [**apiV2MarketingServiceEmailTemplatesGet**](docs/Api/EmailTemplatesApi.md#apiv2marketingserviceemailtemplatesget) | **GET** /api/v2/MarketingService/EmailTemplates | 
*EmailTemplatesApi* | [**apiV2MarketingServiceEmailTemplatesPost**](docs/Api/EmailTemplatesApi.md#apiv2marketingserviceemailtemplatespost) | **POST** /api/v2/MarketingService/EmailTemplates | 
*MarketingCampaignsApi* | [**apiV2MarketingServiceMarketingCampaignsCountGet**](docs/Api/MarketingCampaignsApi.md#apiv2marketingservicemarketingcampaignscountget) | **GET** /api/v2/MarketingService/MarketingCampaigns/Count | 
*MarketingCampaignsApi* | [**apiV2MarketingServiceMarketingCampaignsGet**](docs/Api/MarketingCampaignsApi.md#apiv2marketingservicemarketingcampaignsget) | **GET** /api/v2/MarketingService/MarketingCampaigns | 
*MarketingCampaignsApi* | [**apiV2MarketingServiceMarketingCampaignsMarketingcampaignIdDelete**](docs/Api/MarketingCampaignsApi.md#apiv2marketingservicemarketingcampaignsmarketingcampaigniddelete) | **DELETE** /api/v2/MarketingService/MarketingCampaigns/{marketingcampaignId} | 
*MarketingCampaignsApi* | [**apiV2MarketingServiceMarketingCampaignsMarketingcampaignIdGet**](docs/Api/MarketingCampaignsApi.md#apiv2marketingservicemarketingcampaignsmarketingcampaignidget) | **GET** /api/v2/MarketingService/MarketingCampaigns/{marketingcampaignId} | 
*MarketingCampaignsApi* | [**apiV2MarketingServiceMarketingCampaignsMarketingcampaignIdPut**](docs/Api/MarketingCampaignsApi.md#apiv2marketingservicemarketingcampaignsmarketingcampaignidput) | **PUT** /api/v2/MarketingService/MarketingCampaigns/{marketingcampaignId} | 
*MarketingCampaignsApi* | [**apiV2MarketingServiceMarketingCampaignsPost**](docs/Api/MarketingCampaignsApi.md#apiv2marketingservicemarketingcampaignspost) | **POST** /api/v2/MarketingService/MarketingCampaigns | 
*MarketingListsApi* | [**apiV2MarketingServiceMarketingListsCountGet**](docs/Api/MarketingListsApi.md#apiv2marketingservicemarketinglistscountget) | **GET** /api/v2/MarketingService/MarketingLists/Count | 
*MarketingListsApi* | [**apiV2MarketingServiceMarketingListsGet**](docs/Api/MarketingListsApi.md#apiv2marketingservicemarketinglistsget) | **GET** /api/v2/MarketingService/MarketingLists | 
*MarketingListsApi* | [**apiV2MarketingServiceMarketingListsMarketinglistIdDelete**](docs/Api/MarketingListsApi.md#apiv2marketingservicemarketinglistsmarketinglistiddelete) | **DELETE** /api/v2/MarketingService/MarketingLists/{marketinglistId} | 
*MarketingListsApi* | [**apiV2MarketingServiceMarketingListsMarketinglistIdGet**](docs/Api/MarketingListsApi.md#apiv2marketingservicemarketinglistsmarketinglistidget) | **GET** /api/v2/MarketingService/MarketingLists/{marketinglistId} | 
*MarketingListsApi* | [**apiV2MarketingServiceMarketingListsMarketinglistIdPut**](docs/Api/MarketingListsApi.md#apiv2marketingservicemarketinglistsmarketinglistidput) | **PUT** /api/v2/MarketingService/MarketingLists/{marketinglistId} | 
*MarketingListsApi* | [**apiV2MarketingServiceMarketingListsPost**](docs/Api/MarketingListsApi.md#apiv2marketingservicemarketinglistspost) | **POST** /api/v2/MarketingService/MarketingLists | 
*NewslettersApi* | [**apiV2MarketingServiceNewslettersCountGet**](docs/Api/NewslettersApi.md#apiv2marketingservicenewsletterscountget) | **GET** /api/v2/MarketingService/Newsletters/Count | 
*NewslettersApi* | [**apiV2MarketingServiceNewslettersGet**](docs/Api/NewslettersApi.md#apiv2marketingservicenewslettersget) | **GET** /api/v2/MarketingService/Newsletters | 
*NewslettersApi* | [**apiV2MarketingServiceNewslettersNewsletterIdDelete**](docs/Api/NewslettersApi.md#apiv2marketingservicenewslettersnewsletteriddelete) | **DELETE** /api/v2/MarketingService/Newsletters/{newsletterId} | 
*NewslettersApi* | [**apiV2MarketingServiceNewslettersNewsletterIdGet**](docs/Api/NewslettersApi.md#apiv2marketingservicenewslettersnewsletteridget) | **GET** /api/v2/MarketingService/Newsletters/{newsletterId} | 
*NewslettersApi* | [**apiV2MarketingServiceNewslettersNewsletterIdPut**](docs/Api/NewslettersApi.md#apiv2marketingservicenewslettersnewsletteridput) | **PUT** /api/v2/MarketingService/Newsletters/{newsletterId} | 
*NewslettersApi* | [**apiV2MarketingServiceNewslettersPost**](docs/Api/NewslettersApi.md#apiv2marketingservicenewsletterspost) | **POST** /api/v2/MarketingService/Newsletters | 
*SocialMediaPostsApi* | [**apiV2MarketingServiceSocialMediaPostsCountGet**](docs/Api/SocialMediaPostsApi.md#apiv2marketingservicesocialmediapostscountget) | **GET** /api/v2/MarketingService/SocialMediaPosts/Count | 
*SocialMediaPostsApi* | [**apiV2MarketingServiceSocialMediaPostsGet**](docs/Api/SocialMediaPostsApi.md#apiv2marketingservicesocialmediapostsget) | **GET** /api/v2/MarketingService/SocialMediaPosts | 
*SocialMediaPostsApi* | [**apiV2MarketingServiceSocialMediaPostsPost**](docs/Api/SocialMediaPostsApi.md#apiv2marketingservicesocialmediapostspost) | **POST** /api/v2/MarketingService/SocialMediaPosts | 
*SocialMediaPostsApi* | [**apiV2MarketingServiceSocialMediaPostsSocialmediapostIdDelete**](docs/Api/SocialMediaPostsApi.md#apiv2marketingservicesocialmediapostssocialmediapostiddelete) | **DELETE** /api/v2/MarketingService/SocialMediaPosts/{socialmediapostId} | 
*SocialMediaPostsApi* | [**apiV2MarketingServiceSocialMediaPostsSocialmediapostIdGet**](docs/Api/SocialMediaPostsApi.md#apiv2marketingservicesocialmediapostssocialmediapostidget) | **GET** /api/v2/MarketingService/SocialMediaPosts/{socialmediapostId} | 
*SocialMediaPostsApi* | [**apiV2MarketingServiceSocialMediaPostsSocialmediapostIdPut**](docs/Api/SocialMediaPostsApi.md#apiv2marketingservicesocialmediapostssocialmediapostidput) | **PUT** /api/v2/MarketingService/SocialMediaPosts/{socialmediapostId} | 
*SocialPostBucketsApi* | [**apiV2MarketingServiceSocialPostBucketsCountGet**](docs/Api/SocialPostBucketsApi.md#apiv2marketingservicesocialpostbucketscountget) | **GET** /api/v2/MarketingService/SocialPostBuckets/Count | 
*SocialPostBucketsApi* | [**apiV2MarketingServiceSocialPostBucketsGet**](docs/Api/SocialPostBucketsApi.md#apiv2marketingservicesocialpostbucketsget) | **GET** /api/v2/MarketingService/SocialPostBuckets | 
*SocialPostBucketsApi* | [**apiV2MarketingServiceSocialPostBucketsPost**](docs/Api/SocialPostBucketsApi.md#apiv2marketingservicesocialpostbucketspost) | **POST** /api/v2/MarketingService/SocialPostBuckets | 
*SocialPostBucketsApi* | [**apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdDelete**](docs/Api/SocialPostBucketsApi.md#apiv2marketingservicesocialpostbucketssocialpostbucketiddelete) | **DELETE** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} | 
*SocialPostBucketsApi* | [**apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdGet**](docs/Api/SocialPostBucketsApi.md#apiv2marketingservicesocialpostbucketssocialpostbucketidget) | **GET** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} | 
*SocialPostBucketsApi* | [**apiV2MarketingServiceSocialPostBucketsSocialpostbucketIdPut**](docs/Api/SocialPostBucketsApi.md#apiv2marketingservicesocialpostbucketssocialpostbucketidput) | **PUT** /api/v2/MarketingService/SocialPostBuckets/{socialpostbucketId} | 
*TrackingPixelsApi* | [**apiV2MarketingServiceTrackingPixelsPixelIdGet**](docs/Api/TrackingPixelsApi.md#apiv2marketingservicetrackingpixelspixelidget) | **GET** /api/v2/MarketingService/TrackingPixels/{pixelId} | 

## Models

- [Currency](docs/Model/Currency.md)
- [EmailGroupCreateDto](docs/Model/EmailGroupCreateDto.md)
- [EmailGroupDto](docs/Model/EmailGroupDto.md)
- [EmailGroupDtoEnvelope](docs/Model/EmailGroupDtoEnvelope.md)
- [EmailGroupDtoListEnvelope](docs/Model/EmailGroupDtoListEnvelope.md)
- [EmailGroupUpdateDto](docs/Model/EmailGroupUpdateDto.md)
- [EmailSignatureCreateDto](docs/Model/EmailSignatureCreateDto.md)
- [EmailSignatureDto](docs/Model/EmailSignatureDto.md)
- [EmailSignatureDtoEnvelope](docs/Model/EmailSignatureDtoEnvelope.md)
- [EmailSignatureDtoListEnvelope](docs/Model/EmailSignatureDtoListEnvelope.md)
- [EmailSignatureUpdateDto](docs/Model/EmailSignatureUpdateDto.md)
- [EmailTemplateCreateDto](docs/Model/EmailTemplateCreateDto.md)
- [EmailTemplateDto](docs/Model/EmailTemplateDto.md)
- [EmailTemplateDtoEnvelope](docs/Model/EmailTemplateDtoEnvelope.md)
- [EmailTemplateDtoListEnvelope](docs/Model/EmailTemplateDtoListEnvelope.md)
- [EmailTemplateUpdateDto](docs/Model/EmailTemplateUpdateDto.md)
- [EmptyEnvelope](docs/Model/EmptyEnvelope.md)
- [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
- [Int32Envelope](docs/Model/Int32Envelope.md)
- [MarketingCampaignCreateDto](docs/Model/MarketingCampaignCreateDto.md)
- [MarketingCampaignDto](docs/Model/MarketingCampaignDto.md)
- [MarketingCampaignDtoEnvelope](docs/Model/MarketingCampaignDtoEnvelope.md)
- [MarketingCampaignUpdateDto](docs/Model/MarketingCampaignUpdateDto.md)
- [MarketingListCreateDto](docs/Model/MarketingListCreateDto.md)
- [MarketingListDto](docs/Model/MarketingListDto.md)
- [MarketingListDtoEnvelope](docs/Model/MarketingListDtoEnvelope.md)
- [MarketingListDtoListEnvelope](docs/Model/MarketingListDtoListEnvelope.md)
- [MarketingListUpdateDto](docs/Model/MarketingListUpdateDto.md)
- [Money](docs/Model/Money.md)
- [NewsletterCreateDto](docs/Model/NewsletterCreateDto.md)
- [NewsletterDto](docs/Model/NewsletterDto.md)
- [NewsletterDtoEnvelope](docs/Model/NewsletterDtoEnvelope.md)
- [NewsletterUpdateDto](docs/Model/NewsletterUpdateDto.md)
- [OrderDto](docs/Model/OrderDto.md)
- [OrderDtoEnvelope](docs/Model/OrderDtoEnvelope.md)
- [SocialMediaPostCreateDto](docs/Model/SocialMediaPostCreateDto.md)
- [SocialMediaPostDto](docs/Model/SocialMediaPostDto.md)
- [SocialMediaPostDtoEnvelope](docs/Model/SocialMediaPostDtoEnvelope.md)
- [SocialMediaPostDtoListEnvelope](docs/Model/SocialMediaPostDtoListEnvelope.md)
- [SocialMediaPostUpdateDto](docs/Model/SocialMediaPostUpdateDto.md)
- [SocialPostBucketCreateDto](docs/Model/SocialPostBucketCreateDto.md)
- [SocialPostBucketDto](docs/Model/SocialPostBucketDto.md)
- [SocialPostBucketDtoEnvelope](docs/Model/SocialPostBucketDtoEnvelope.md)
- [SocialPostBucketDtoListEnvelope](docs/Model/SocialPostBucketDtoListEnvelope.md)
- [SocialPostBucketUpdateDto](docs/Model/SocialPostBucketUpdateDto.md)

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