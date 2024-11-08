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


$apiInstance = new OpenAPI\Client\Api\SupportEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->apiV2SupportServiceSupportEntitlementsCountGet($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportEntitlementsApi->apiV2SupportServiceSupportEntitlementsCountGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SupportEntitlementsApi* | [**apiV2SupportServiceSupportEntitlementsCountGet**](docs/Api/SupportEntitlementsApi.md#apiv2supportservicesupportentitlementscountget) | **GET** /api/v2/SupportService/SupportEntitlements/Count | 
*SupportEntitlementsApi* | [**apiV2SupportServiceSupportEntitlementsGet**](docs/Api/SupportEntitlementsApi.md#apiv2supportservicesupportentitlementsget) | **GET** /api/v2/SupportService/SupportEntitlements | 
*SupportEntitlementsApi* | [**apiV2SupportServiceSupportEntitlementsPost**](docs/Api/SupportEntitlementsApi.md#apiv2supportservicesupportentitlementspost) | **POST** /api/v2/SupportService/SupportEntitlements | 
*SupportEntitlementsApi* | [**apiV2SupportServiceSupportEntitlementsSupportEntitlementIdDelete**](docs/Api/SupportEntitlementsApi.md#apiv2supportservicesupportentitlementssupportentitlementiddelete) | **DELETE** /api/v2/SupportService/SupportEntitlements/{supportEntitlementId} | 
*SupportEntitlementsApi* | [**apiV2SupportServiceSupportEntitlementsSupportEntitlementIdGet**](docs/Api/SupportEntitlementsApi.md#apiv2supportservicesupportentitlementssupportentitlementidget) | **GET** /api/v2/SupportService/SupportEntitlements/{supportEntitlementId} | 
*SupportEntitlementsApi* | [**apiV2SupportServiceSupportEntitlementsSupportEntitlementIdPut**](docs/Api/SupportEntitlementsApi.md#apiv2supportservicesupportentitlementssupportentitlementidput) | **PUT** /api/v2/SupportService/SupportEntitlements/{supportEntitlementId} | 
*SupportRequestAttachmentsApi* | [**apiV2SupportServiceSupportRequestAttachmentsCountGet**](docs/Api/SupportRequestAttachmentsApi.md#apiv2supportservicesupportrequestattachmentscountget) | **GET** /api/v2/SupportService/SupportRequestAttachments/Count | 
*SupportRequestAttachmentsApi* | [**apiV2SupportServiceSupportRequestAttachmentsGet**](docs/Api/SupportRequestAttachmentsApi.md#apiv2supportservicesupportrequestattachmentsget) | **GET** /api/v2/SupportService/SupportRequestAttachments | 
*SupportRequestAttachmentsApi* | [**apiV2SupportServiceSupportRequestAttachmentsPost**](docs/Api/SupportRequestAttachmentsApi.md#apiv2supportservicesupportrequestattachmentspost) | **POST** /api/v2/SupportService/SupportRequestAttachments | 
*SupportRequestAttachmentsApi* | [**apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdDelete**](docs/Api/SupportRequestAttachmentsApi.md#apiv2supportservicesupportrequestattachmentssupportrequestattachmentiddelete) | **DELETE** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} | 
*SupportRequestAttachmentsApi* | [**apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdGet**](docs/Api/SupportRequestAttachmentsApi.md#apiv2supportservicesupportrequestattachmentssupportrequestattachmentidget) | **GET** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} | 
*SupportRequestAttachmentsApi* | [**apiV2SupportServiceSupportRequestAttachmentsSupportRequestAttachmentIdPut**](docs/Api/SupportRequestAttachmentsApi.md#apiv2supportservicesupportrequestattachmentssupportrequestattachmentidput) | **PUT** /api/v2/SupportService/SupportRequestAttachments/{supportRequestAttachmentId} | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsCountGet**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestscountget) | **GET** /api/v2/SupportService/SupportRequests/Count | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsGet**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestsget) | **GET** /api/v2/SupportService/SupportRequests | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsPost**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestspost) | **POST** /api/v2/SupportService/SupportRequests | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdAttachmentsAttachmentIdGet**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestidattachmentsattachmentidget) | **GET** /api/v2/SupportService/SupportRequests/{supportRequestId}/Attachments/{attachmentId} | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdAttachmentsCountGet**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestidattachmentscountget) | **GET** /api/v2/SupportService/SupportRequests/{supportRequestId}/Attachments/Count | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdAttachmentsGet**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestidattachmentsget) | **GET** /api/v2/SupportService/SupportRequests/{supportRequestId}/Attachments | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdAttachmentsPost**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestidattachmentspost) | **POST** /api/v2/SupportService/SupportRequests/{supportRequestId}/Attachments | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdDelete**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestiddelete) | **DELETE** /api/v2/SupportService/SupportRequests/{supportRequestId} | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdGet**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestidget) | **GET** /api/v2/SupportService/SupportRequests/{supportRequestId} | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdPut**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestidput) | **PUT** /api/v2/SupportService/SupportRequests/{supportRequestId} | 
*SupportRequestsApi* | [**apiV2SupportServiceSupportRequestsSupportRequestIdTicketsGet**](docs/Api/SupportRequestsApi.md#apiv2supportservicesupportrequestssupportrequestidticketsget) | **GET** /api/v2/SupportService/SupportRequests/{supportRequestId}/Tickets | 
*SupportTicketPrioritiesApi* | [**apiV2SupportServiceSupportTicketPrioritiesCountGet**](docs/Api/SupportTicketPrioritiesApi.md#apiv2supportservicesupportticketprioritiescountget) | **GET** /api/v2/SupportService/SupportTicketPriorities/Count | 
*SupportTicketPrioritiesApi* | [**apiV2SupportServiceSupportTicketPrioritiesGet**](docs/Api/SupportTicketPrioritiesApi.md#apiv2supportservicesupportticketprioritiesget) | **GET** /api/v2/SupportService/SupportTicketPriorities | 
*SupportTicketPrioritiesApi* | [**apiV2SupportServiceSupportTicketPrioritiesPost**](docs/Api/SupportTicketPrioritiesApi.md#apiv2supportservicesupportticketprioritiespost) | **POST** /api/v2/SupportService/SupportTicketPriorities | 
*SupportTicketPrioritiesApi* | [**apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdDelete**](docs/Api/SupportTicketPrioritiesApi.md#apiv2supportservicesupportticketprioritiessupportticketpriorityiddelete) | **DELETE** /api/v2/SupportService/SupportTicketPriorities/{supportTicketPriorityId} | 
*SupportTicketPrioritiesApi* | [**apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdGet**](docs/Api/SupportTicketPrioritiesApi.md#apiv2supportservicesupportticketprioritiessupportticketpriorityidget) | **GET** /api/v2/SupportService/SupportTicketPriorities/{supportTicketPriorityId} | 
*SupportTicketPrioritiesApi* | [**apiV2SupportServiceSupportTicketPrioritiesSupportTicketPriorityIdPut**](docs/Api/SupportTicketPrioritiesApi.md#apiv2supportservicesupportticketprioritiessupportticketpriorityidput) | **PUT** /api/v2/SupportService/SupportTicketPriorities/{supportTicketPriorityId} | 
*SupportTicketTypesApi* | [**apiV2SupportServiceSupportTicketTypesCountGet**](docs/Api/SupportTicketTypesApi.md#apiv2supportservicesupporttickettypescountget) | **GET** /api/v2/SupportService/SupportTicketTypes/Count | 
*SupportTicketTypesApi* | [**apiV2SupportServiceSupportTicketTypesGet**](docs/Api/SupportTicketTypesApi.md#apiv2supportservicesupporttickettypesget) | **GET** /api/v2/SupportService/SupportTicketTypes | 
*SupportTicketTypesApi* | [**apiV2SupportServiceSupportTicketTypesPost**](docs/Api/SupportTicketTypesApi.md#apiv2supportservicesupporttickettypespost) | **POST** /api/v2/SupportService/SupportTicketTypes | 
*SupportTicketTypesApi* | [**apiV2SupportServiceSupportTicketTypesSupportTicketTypeIdDelete**](docs/Api/SupportTicketTypesApi.md#apiv2supportservicesupporttickettypessupporttickettypeiddelete) | **DELETE** /api/v2/SupportService/SupportTicketTypes/{supportTicketTypeId} | 
*SupportTicketTypesApi* | [**apiV2SupportServiceSupportTicketTypesSupportTicketTypeIdGet**](docs/Api/SupportTicketTypesApi.md#apiv2supportservicesupporttickettypessupporttickettypeidget) | **GET** /api/v2/SupportService/SupportTicketTypes/{supportTicketTypeId} | 
*SupportTicketTypesApi* | [**apiV2SupportServiceSupportTicketTypesSupportTicketTypeIdPut**](docs/Api/SupportTicketTypesApi.md#apiv2supportservicesupporttickettypessupporttickettypeidput) | **PUT** /api/v2/SupportService/SupportTicketTypes/{supportTicketTypeId} | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsCountGet**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketscountget) | **GET** /api/v2/SupportService/SupportTickets/Count | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsGet**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketsget) | **GET** /api/v2/SupportService/SupportTickets | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsPost**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketspost) | **POST** /api/v2/SupportService/SupportTickets | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsGet**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketidconversationsget) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsPost**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketidconversationspost) | **POST** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdDelete**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketidconversationssupportticketconversationiddelete) | **DELETE** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations/{supportTicketConversationId} | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdGet**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketidconversationssupportticketconversationidget) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations/{supportTicketConversationId} | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdConversationsSupportTicketConversationIdMessagesGet**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketidconversationssupportticketconversationidmessagesget) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId}/Conversations/{supportTicketConversationId}/Messages | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdDelete**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketiddelete) | **DELETE** /api/v2/SupportService/SupportTickets/{supportTicketId} | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdGet**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketidget) | **GET** /api/v2/SupportService/SupportTickets/{supportTicketId} | 
*SupportTicketsApi* | [**apiV2SupportServiceSupportTicketsSupportTicketIdPut**](docs/Api/SupportTicketsApi.md#apiv2supportservicesupportticketssupportticketidput) | **PUT** /api/v2/SupportService/SupportTickets/{supportTicketId} | 

## Models

- [EmptyEnvelope](docs/Model/EmptyEnvelope.md)
- [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
- [Int32Envelope](docs/Model/Int32Envelope.md)
- [PrivateMessageDto](docs/Model/PrivateMessageDto.md)
- [PrivateMessageDtoListEnvelope](docs/Model/PrivateMessageDtoListEnvelope.md)
- [SupportEntitlementCreateDto](docs/Model/SupportEntitlementCreateDto.md)
- [SupportEntitlementDto](docs/Model/SupportEntitlementDto.md)
- [SupportEntitlementDtoEnvelope](docs/Model/SupportEntitlementDtoEnvelope.md)
- [SupportEntitlementDtoListEnvelope](docs/Model/SupportEntitlementDtoListEnvelope.md)
- [SupportEntitlementUpdateDto](docs/Model/SupportEntitlementUpdateDto.md)
- [SupportRequestAttachmentCreateDto](docs/Model/SupportRequestAttachmentCreateDto.md)
- [SupportRequestAttachmentDto](docs/Model/SupportRequestAttachmentDto.md)
- [SupportRequestAttachmentDtoEnvelope](docs/Model/SupportRequestAttachmentDtoEnvelope.md)
- [SupportRequestAttachmentDtoListEnvelope](docs/Model/SupportRequestAttachmentDtoListEnvelope.md)
- [SupportRequestAttachmentUpdateDto](docs/Model/SupportRequestAttachmentUpdateDto.md)
- [SupportRequestCreateDto](docs/Model/SupportRequestCreateDto.md)
- [SupportRequestDto](docs/Model/SupportRequestDto.md)
- [SupportRequestDtoEnvelope](docs/Model/SupportRequestDtoEnvelope.md)
- [SupportRequestDtoListEnvelope](docs/Model/SupportRequestDtoListEnvelope.md)
- [SupportRequestUpdateDto](docs/Model/SupportRequestUpdateDto.md)
- [SupportTicketConversationCreateDto](docs/Model/SupportTicketConversationCreateDto.md)
- [SupportTicketConversationDto](docs/Model/SupportTicketConversationDto.md)
- [SupportTicketConversationDtoEnvelope](docs/Model/SupportTicketConversationDtoEnvelope.md)
- [SupportTicketConversationDtoListEnvelope](docs/Model/SupportTicketConversationDtoListEnvelope.md)
- [SupportTicketCreateDto](docs/Model/SupportTicketCreateDto.md)
- [SupportTicketDto](docs/Model/SupportTicketDto.md)
- [SupportTicketDtoEnvelope](docs/Model/SupportTicketDtoEnvelope.md)
- [SupportTicketDtoListEnvelope](docs/Model/SupportTicketDtoListEnvelope.md)
- [SupportTicketPriorityCreateDto](docs/Model/SupportTicketPriorityCreateDto.md)
- [SupportTicketPriorityDto](docs/Model/SupportTicketPriorityDto.md)
- [SupportTicketPriorityDtoEnvelope](docs/Model/SupportTicketPriorityDtoEnvelope.md)
- [SupportTicketPriorityDtoListEnvelope](docs/Model/SupportTicketPriorityDtoListEnvelope.md)
- [SupportTicketPriorityUpdateDto](docs/Model/SupportTicketPriorityUpdateDto.md)
- [SupportTicketTypeCreateDto](docs/Model/SupportTicketTypeCreateDto.md)
- [SupportTicketTypeDto](docs/Model/SupportTicketTypeDto.md)
- [SupportTicketTypeDtoEnvelope](docs/Model/SupportTicketTypeDtoEnvelope.md)
- [SupportTicketTypeDtoListEnvelope](docs/Model/SupportTicketTypeDtoListEnvelope.md)
- [SupportTicketTypeUpdateDto](docs/Model/SupportTicketTypeUpdateDto.md)
- [SupportTicketUpdateDto](docs/Model/SupportTicketUpdateDto.md)

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
