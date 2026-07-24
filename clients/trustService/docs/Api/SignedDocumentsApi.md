# OpenAPI\Client\SignedDocumentsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSignedDocumentAsync()**](SignedDocumentsApi.md#createSignedDocumentAsync) | **POST** /api/v2/TrustService/SignedDocuments | Create a new signed document |
| [**deleteSignedDocumentAsync()**](SignedDocumentsApi.md#deleteSignedDocumentAsync) | **DELETE** /api/v2/TrustService/SignedDocuments/{id} | Delete a signed document |
| [**getSignedDocumentByIdAsync()**](SignedDocumentsApi.md#getSignedDocumentByIdAsync) | **GET** /api/v2/TrustService/SignedDocuments/{id} | Get signed document by ID |
| [**getSignedDocumentsAsync()**](SignedDocumentsApi.md#getSignedDocumentsAsync) | **GET** /api/v2/TrustService/SignedDocuments | Get all signed documents |
| [**getSignedDocumentsCountAsync()**](SignedDocumentsApi.md#getSignedDocumentsCountAsync) | **GET** /api/v2/TrustService/SignedDocuments/Count | Get signed documents count |
| [**patchSignedDocumentAsync()**](SignedDocumentsApi.md#patchSignedDocumentAsync) | **PATCH** /api/v2/TrustService/SignedDocuments/{id} | Patch a signed document |
| [**prepareAndQuickSignAsync()**](SignedDocumentsApi.md#prepareAndQuickSignAsync) | **POST** /api/v2/TrustService/SignedDocuments/prepare-and-quick-sign | Create, freeze, and quick-sign a document in one call |
| [**quickSignSignedDocumentAsync()**](SignedDocumentsApi.md#quickSignSignedDocumentAsync) | **POST** /api/v2/TrustService/SignedDocuments/{id}/quick-sign | Quick-sign a frozen document |
| [**updateSignedDocumentAsync()**](SignedDocumentsApi.md#updateSignedDocumentAsync) | **PUT** /api/v2/TrustService/SignedDocuments/{id} | Update a signed document |
| [**verifySignedDocumentSignatureAsync()**](SignedDocumentsApi.md#verifySignedDocumentSignatureAsync) | **GET** /api/v2/TrustService/SignedDocuments/{id}/verify-signature | Verify a signed document&#39;s signature |


## `createSignedDocumentAsync()`

```php
createSignedDocumentAsync($tenant_id, $api_version, $x_api_version, $signed_document_create_dto)
```

Create a new signed document

Creates a new signed document for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signed_document_create_dto = new \OpenAPI\Client\Model\SignedDocumentCreateDto(); // \OpenAPI\Client\Model\SignedDocumentCreateDto

try {
    $apiInstance->createSignedDocumentAsync($tenant_id, $api_version, $x_api_version, $signed_document_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->createSignedDocumentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signed_document_create_dto** | [**\OpenAPI\Client\Model\SignedDocumentCreateDto**](../Model/SignedDocumentCreateDto.md)|  | [optional] |

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

## `deleteSignedDocumentAsync()`

```php
deleteSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a signed document

Deletes a signed document for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->deleteSignedDocumentAsync: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignedDocumentByIdAsync()`

```php
getSignedDocumentByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SignedDocumentDto
```

Get signed document by ID

Retrieves a specific signed document by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSignedDocumentByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->getSignedDocumentByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SignedDocumentDto**](../Model/SignedDocumentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignedDocumentsAsync()`

```php
getSignedDocumentsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SignedDocumentDtoListEnvelope
```

Get all signed documents

Retrieves all signed documents for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSignedDocumentsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->getSignedDocumentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SignedDocumentDtoListEnvelope**](../Model/SignedDocumentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignedDocumentsCountAsync()`

```php
getSignedDocumentsCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get signed documents count

Returns the count of signed documents for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSignedDocumentsCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->getSignedDocumentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

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

## `patchSignedDocumentAsync()`

```php
patchSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a signed document

Patch a signed document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->patchSignedDocumentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `prepareAndQuickSignAsync()`

```php
prepareAndQuickSignAsync($tenant_id, $api_version, $x_api_version, $id, $file, $title, $contact_id, $signing_certificate_id, $signing_profile_id, $provider_name): \OpenAPI\Client\Model\SignedDocumentDto
```

Create, freeze, and quick-sign a document in one call

Server-side single-signer flow: creates a SignedDocument from the uploaded source, stores it, freezes it, signs it with the chosen certificate + provider, and seals it — all in one unit of work. Returns the sealed document. Evidence truth (signed/status/hashes/artifact ids) is server-produced and cannot be supplied by the caller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$id = 'id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
$title = 'title_example'; // string
$contact_id = 'contact_id_example'; // string
$signing_certificate_id = 'signing_certificate_id_example'; // string
$signing_profile_id = 'signing_profile_id_example'; // string
$provider_name = 'provider_name_example'; // string

try {
    $result = $apiInstance->prepareAndQuickSignAsync($tenant_id, $api_version, $x_api_version, $id, $file, $title, $contact_id, $signing_certificate_id, $signing_profile_id, $provider_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->prepareAndQuickSignAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **title** | **string**|  | [optional] |
| **contact_id** | **string**|  | [optional] |
| **signing_certificate_id** | **string**|  | [optional] |
| **signing_profile_id** | **string**|  | [optional] |
| **provider_name** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SignedDocumentDto**](../Model/SignedDocumentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quickSignSignedDocumentAsync()`

```php
quickSignSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version, $quick_sign_signed_document_dto)
```

Quick-sign a frozen document

Signs a frozen signed document directly with a chosen certificate + provider (no signing-request workflow) and seals it. Returns the sealed document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$quick_sign_signed_document_dto = new \OpenAPI\Client\Model\QuickSignSignedDocumentDto(); // \OpenAPI\Client\Model\QuickSignSignedDocumentDto

try {
    $apiInstance->quickSignSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version, $quick_sign_signed_document_dto);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->quickSignSignedDocumentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **quick_sign_signed_document_dto** | [**\OpenAPI\Client\Model\QuickSignSignedDocumentDto**](../Model/QuickSignSignedDocumentDto.md)|  | [optional] |

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

## `updateSignedDocumentAsync()`

```php
updateSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version, $signed_document_update_dto)
```

Update a signed document

Updates an existing signed document for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signed_document_update_dto = new \OpenAPI\Client\Model\SignedDocumentUpdateDto(); // \OpenAPI\Client\Model\SignedDocumentUpdateDto

try {
    $apiInstance->updateSignedDocumentAsync($tenant_id, $id, $api_version, $x_api_version, $signed_document_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->updateSignedDocumentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signed_document_update_dto** | [**\OpenAPI\Client\Model\SignedDocumentUpdateDto**](../Model/SignedDocumentUpdateDto.md)|  | [optional] |

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

## `verifySignedDocumentSignatureAsync()`

```php
verifySignedDocumentSignatureAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SignatureVerificationDto
```

Verify a signed document's signature

Re-verifies the document's signature against its stored signed artifact (bytes intact + signed by the embedded certificate; certificate trust is a separate concern).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->verifySignedDocumentSignatureAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentsApi->verifySignedDocumentSignatureAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SignatureVerificationDto**](../Model/SignatureVerificationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
