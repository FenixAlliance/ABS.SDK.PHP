# OpenAPI\Client\SigningRequestsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addParticipantAsync()**](SigningRequestsApi.md#addParticipantAsync) | **POST** /api/v2/TrustService/SigningRequests/{id}/participants | Add a participant to a signing request |
| [**createFromDocumentAsync()**](SigningRequestsApi.md#createFromDocumentAsync) | **POST** /api/v2/TrustService/SigningRequests/from-document/{signedDocumentId} | Create a signing request from a frozen document |
| [**executeProviderAsync()**](SigningRequestsApi.md#executeProviderAsync) | **POST** /api/v2/TrustService/SigningRequests/{id}/execute-provider | Run a signing provider to produce + finalize the signed artifact |
| [**expireAsync()**](SigningRequestsApi.md#expireAsync) | **POST** /api/v2/TrustService/SigningRequests/{id}/expire | Expire a signing request |
| [**finalizeAsync()**](SigningRequestsApi.md#finalizeAsync) | **POST** /api/v2/TrustService/SigningRequests/{id}/finalize | Finalize a completed request into a signed artifact |
| [**getSigningRequestByIdAsync()**](SigningRequestsApi.md#getSigningRequestByIdAsync) | **GET** /api/v2/TrustService/SigningRequests/{id} | Get signing request by ID |
| [**getSigningRequestParticipantsAsync()**](SigningRequestsApi.md#getSigningRequestParticipantsAsync) | **GET** /api/v2/TrustService/SigningRequests/{id}/Participants | Get participants of a signing request |
| [**getSigningRequestsAsync()**](SigningRequestsApi.md#getSigningRequestsAsync) | **GET** /api/v2/TrustService/SigningRequests | Get all signing requests |
| [**getSigningRequestsCountAsync()**](SigningRequestsApi.md#getSigningRequestsCountAsync) | **GET** /api/v2/TrustService/SigningRequests/Count | Get signing requests count |
| [**prepareAndCreateAsync()**](SigningRequestsApi.md#prepareAndCreateAsync) | **POST** /api/v2/TrustService/SigningRequests/prepare-and-create | Create, store, freeze a document and open a signing request in one call |
| [**sendAsync()**](SigningRequestsApi.md#sendAsync) | **POST** /api/v2/TrustService/SigningRequests/{id}/send | Send a signing request |
| [**voidAsync()**](SigningRequestsApi.md#voidAsync) | **POST** /api/v2/TrustService/SigningRequests/{id}/void | Void a signing request |


## `addParticipantAsync()`

```php
addParticipantAsync($tenant_id, $id, $api_version, $x_api_version, $create_signing_participant_dto): \OpenAPI\Client\Model\SigningParticipantDto
```

Add a participant to a signing request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$create_signing_participant_dto = new \OpenAPI\Client\Model\CreateSigningParticipantDto(); // \OpenAPI\Client\Model\CreateSigningParticipantDto

try {
    $result = $apiInstance->addParticipantAsync($tenant_id, $id, $api_version, $x_api_version, $create_signing_participant_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->addParticipantAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **create_signing_participant_dto** | [**\OpenAPI\Client\Model\CreateSigningParticipantDto**](../Model/CreateSigningParticipantDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningParticipantDto**](../Model/SigningParticipantDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFromDocumentAsync()`

```php
createFromDocumentAsync($tenant_id, $signed_document_id, $api_version, $x_api_version, $create_signing_request_dto): \OpenAPI\Client\Model\SigningRequestDto
```

Create a signing request from a frozen document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$signed_document_id = 'signed_document_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$create_signing_request_dto = new \OpenAPI\Client\Model\CreateSigningRequestDto(); // \OpenAPI\Client\Model\CreateSigningRequestDto

try {
    $result = $apiInstance->createFromDocumentAsync($tenant_id, $signed_document_id, $api_version, $x_api_version, $create_signing_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->createFromDocumentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **signed_document_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **create_signing_request_dto** | [**\OpenAPI\Client\Model\CreateSigningRequestDto**](../Model/CreateSigningRequestDto.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningRequestDto**](../Model/SigningRequestDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeProviderAsync()`

```php
executeProviderAsync($tenant_id, $id, $api_version, $x_api_version, $execute_signing_request_dto)
```

Run a signing provider to produce + finalize the signed artifact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$execute_signing_request_dto = new \OpenAPI\Client\Model\ExecuteSigningRequestDto(); // \OpenAPI\Client\Model\ExecuteSigningRequestDto

try {
    $apiInstance->executeProviderAsync($tenant_id, $id, $api_version, $x_api_version, $execute_signing_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->executeProviderAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **execute_signing_request_dto** | [**\OpenAPI\Client\Model\ExecuteSigningRequestDto**](../Model/ExecuteSigningRequestDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expireAsync()`

```php
expireAsync($tenant_id, $id, $api_version, $x_api_version)
```

Expire a signing request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->expireAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->expireAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizeAsync()`

```php
finalizeAsync($tenant_id, $id, $api_version, $x_api_version, $finalize_signing_request_dto)
```

Finalize a completed request into a signed artifact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$finalize_signing_request_dto = new \OpenAPI\Client\Model\FinalizeSigningRequestDto(); // \OpenAPI\Client\Model\FinalizeSigningRequestDto

try {
    $apiInstance->finalizeAsync($tenant_id, $id, $api_version, $x_api_version, $finalize_signing_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->finalizeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **finalize_signing_request_dto** | [**\OpenAPI\Client\Model\FinalizeSigningRequestDto**](../Model/FinalizeSigningRequestDto.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningRequestByIdAsync()`

```php
getSigningRequestByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SigningRequestDto
```

Get signing request by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSigningRequestByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->getSigningRequestByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningRequestDto**](../Model/SigningRequestDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningRequestParticipantsAsync()`

```php
getSigningRequestParticipantsAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SigningParticipantDtoListEnvelope
```

Get participants of a signing request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSigningRequestParticipantsAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->getSigningRequestParticipantsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningParticipantDtoListEnvelope**](../Model/SigningParticipantDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningRequestsAsync()`

```php
getSigningRequestsAsync($tenant_id, $api_version, $x_api_version, $signing_request_dto_collection_query_parameters): \OpenAPI\Client\Model\SigningRequestDtoListEnvelope
```

Get all signing requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_request_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningRequestDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningRequestDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningRequestsAsync($tenant_id, $api_version, $x_api_version, $signing_request_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->getSigningRequestsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_request_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningRequestDtoCollectionQueryParameters**](../Model/SigningRequestDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningRequestDtoListEnvelope**](../Model/SigningRequestDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningRequestsCountAsync()`

```php
getSigningRequestsCountAsync($tenant_id, $api_version, $x_api_version, $signing_request_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get signing requests count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_request_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningRequestDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningRequestDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningRequestsCountAsync($tenant_id, $api_version, $x_api_version, $signing_request_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->getSigningRequestsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_request_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningRequestDtoCollectionQueryParameters**](../Model/SigningRequestDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareAndCreateAsync()`

```php
prepareAndCreateAsync($tenant_id, $api_version, $x_api_version, $file, $title, $contact_id, $routing_mode, $expires_at_utc, $message, $correlation_id, $external_reference, $signers): \OpenAPI\Client\Model\SigningRequestDto
```

Create, store, freeze a document and open a signing request in one call

Server-owned flow (T-UX4): creates a SignedDocument from the uploaded source, stores it, freezes it, then creates a signing request over the frozen artifact and attaches its signers — all in one unit of work. Evidence truth (status/hashes/ids/tokens) is server-produced; the caller supplies intent only. The server generates the new document id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
$title = 'title_example'; // string
$contact_id = 'contact_id_example'; // string
$routing_mode = 'routing_mode_example'; // string
$expires_at_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$message = 'message_example'; // string
$correlation_id = 'correlation_id_example'; // string
$external_reference = 'external_reference_example'; // string
$signers = 'signers_example'; // string

try {
    $result = $apiInstance->prepareAndCreateAsync($tenant_id, $api_version, $x_api_version, $file, $title, $contact_id, $routing_mode, $expires_at_utc, $message, $correlation_id, $external_reference, $signers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->prepareAndCreateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **title** | **string**|  | [optional] |
| **contact_id** | **string**|  | [optional] |
| **routing_mode** | **string**|  | [optional] |
| **expires_at_utc** | **\DateTime**|  | [optional] |
| **message** | **string**|  | [optional] |
| **correlation_id** | **string**|  | [optional] |
| **external_reference** | **string**|  | [optional] |
| **signers** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningRequestDto**](../Model/SigningRequestDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendAsync()`

```php
sendAsync($tenant_id, $id, $api_version, $x_api_version)
```

Send a signing request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->sendAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->sendAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidAsync()`

```php
voidAsync($tenant_id, $id, $api_version, $x_api_version, $void_signing_request_dto)
```

Void a signing request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$void_signing_request_dto = new \OpenAPI\Client\Model\VoidSigningRequestDto(); // \OpenAPI\Client\Model\VoidSigningRequestDto

try {
    $apiInstance->voidAsync($tenant_id, $id, $api_version, $x_api_version, $void_signing_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling SigningRequestsApi->voidAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **void_signing_request_dto** | [**\OpenAPI\Client\Model\VoidSigningRequestDto**](../Model/VoidSigningRequestDto.md)|  | [optional] |

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
