# OpenAPI\Client\SignedDocumentAttachmentsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSignedDocumentAttachmentAsync()**](SignedDocumentAttachmentsApi.md#createSignedDocumentAttachmentAsync) | **POST** /api/v2/TrustService/SignedDocumentAttachments | Create a new signed document attachment |
| [**deleteSignedDocumentAttachmentAsync()**](SignedDocumentAttachmentsApi.md#deleteSignedDocumentAttachmentAsync) | **DELETE** /api/v2/TrustService/SignedDocumentAttachments/{id} | Delete a signed document attachment |
| [**getSignedDocumentAttachmentByIdAsync()**](SignedDocumentAttachmentsApi.md#getSignedDocumentAttachmentByIdAsync) | **GET** /api/v2/TrustService/SignedDocumentAttachments/{id} | Get signed document attachment by ID |
| [**getSignedDocumentAttachmentsAsync()**](SignedDocumentAttachmentsApi.md#getSignedDocumentAttachmentsAsync) | **GET** /api/v2/TrustService/SignedDocumentAttachments | Get all signed document attachments |
| [**getSignedDocumentAttachmentsCountAsync()**](SignedDocumentAttachmentsApi.md#getSignedDocumentAttachmentsCountAsync) | **GET** /api/v2/TrustService/SignedDocumentAttachments/Count | Get signed document attachments count |
| [**patchSignedDocumentAttachmentAsync()**](SignedDocumentAttachmentsApi.md#patchSignedDocumentAttachmentAsync) | **PATCH** /api/v2/TrustService/SignedDocumentAttachments/{id} | Patch a signed document attachment |
| [**updateSignedDocumentAttachmentAsync()**](SignedDocumentAttachmentsApi.md#updateSignedDocumentAttachmentAsync) | **PUT** /api/v2/TrustService/SignedDocumentAttachments/{id} | Update a signed document attachment |


## `createSignedDocumentAttachmentAsync()`

```php
createSignedDocumentAttachmentAsync($tenant_id, $api_version, $x_api_version, $signed_document_attachment_create_dto)
```

Create a new signed document attachment

Links an already-stored file to a SignedDocument (metadata + Storage pointer; no bytes).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signed_document_attachment_create_dto = new \OpenAPI\Client\Model\SignedDocumentAttachmentCreateDto(); // \OpenAPI\Client\Model\SignedDocumentAttachmentCreateDto

try {
    $apiInstance->createSignedDocumentAttachmentAsync($tenant_id, $api_version, $x_api_version, $signed_document_attachment_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentAttachmentsApi->createSignedDocumentAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signed_document_attachment_create_dto** | [**\OpenAPI\Client\Model\SignedDocumentAttachmentCreateDto**](../Model/SignedDocumentAttachmentCreateDto.md)|  | [optional] |

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

## `deleteSignedDocumentAttachmentAsync()`

```php
deleteSignedDocumentAttachmentAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a signed document attachment

Deletes a signed document attachment link for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteSignedDocumentAttachmentAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentAttachmentsApi->deleteSignedDocumentAttachmentAsync: ', $e->getMessage(), PHP_EOL;
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

## `getSignedDocumentAttachmentByIdAsync()`

```php
getSignedDocumentAttachmentByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SignedDocumentAttachmentDto
```

Get signed document attachment by ID

Retrieves a specific signed document attachment by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSignedDocumentAttachmentByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentAttachmentsApi->getSignedDocumentAttachmentByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SignedDocumentAttachmentDto**](../Model/SignedDocumentAttachmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignedDocumentAttachmentsAsync()`

```php
getSignedDocumentAttachmentsAsync($tenant_id, $api_version, $x_api_version, $signed_document_attachment_dto_collection_query_parameters): \OpenAPI\Client\Model\SignedDocumentAttachmentDtoListEnvelope
```

Get all signed document attachments

Retrieves all signed document attachments for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signed_document_attachment_dto_collection_query_parameters = new \OpenAPI\Client\Model\SignedDocumentAttachmentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SignedDocumentAttachmentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSignedDocumentAttachmentsAsync($tenant_id, $api_version, $x_api_version, $signed_document_attachment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentAttachmentsApi->getSignedDocumentAttachmentsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signed_document_attachment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SignedDocumentAttachmentDtoCollectionQueryParameters**](../Model/SignedDocumentAttachmentDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SignedDocumentAttachmentDtoListEnvelope**](../Model/SignedDocumentAttachmentDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignedDocumentAttachmentsCountAsync()`

```php
getSignedDocumentAttachmentsCountAsync($tenant_id, $api_version, $x_api_version, $signed_document_attachment_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get signed document attachments count

Returns the count of signed document attachments for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signed_document_attachment_dto_collection_query_parameters = new \OpenAPI\Client\Model\SignedDocumentAttachmentDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SignedDocumentAttachmentDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSignedDocumentAttachmentsCountAsync($tenant_id, $api_version, $x_api_version, $signed_document_attachment_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentAttachmentsApi->getSignedDocumentAttachmentsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signed_document_attachment_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SignedDocumentAttachmentDtoCollectionQueryParameters**](../Model/SignedDocumentAttachmentDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchSignedDocumentAttachmentAsync()`

```php
patchSignedDocumentAttachmentAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a signed document attachment

Patch a signed document attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSignedDocumentAttachmentAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentAttachmentsApi->patchSignedDocumentAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **patch_operation** | [**\OpenAPI\Client\Model\PatchOperation[]**](../Model/PatchOperation.md)|  | [optional] |

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

## `updateSignedDocumentAttachmentAsync()`

```php
updateSignedDocumentAttachmentAsync($tenant_id, $id, $api_version, $x_api_version, $signed_document_attachment_update_dto)
```

Update a signed document attachment

Updates signed document attachment metadata for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signed_document_attachment_update_dto = new \OpenAPI\Client\Model\SignedDocumentAttachmentUpdateDto(); // \OpenAPI\Client\Model\SignedDocumentAttachmentUpdateDto

try {
    $apiInstance->updateSignedDocumentAttachmentAsync($tenant_id, $id, $api_version, $x_api_version, $signed_document_attachment_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentAttachmentsApi->updateSignedDocumentAttachmentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signed_document_attachment_update_dto** | [**\OpenAPI\Client\Model\SignedDocumentAttachmentUpdateDto**](../Model/SignedDocumentAttachmentUpdateDto.md)|  | [optional] |

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
