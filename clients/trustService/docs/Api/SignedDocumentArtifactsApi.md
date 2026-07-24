# OpenAPI\Client\SignedDocumentArtifactsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**freezeAsync()**](SignedDocumentArtifactsApi.md#freezeAsync) | **POST** /api/v2/TrustService/SignedDocumentArtifacts/{signedDocumentId}/freeze | Freeze the source for signature |
| [**getReferenceAsync()**](SignedDocumentArtifactsApi.md#getReferenceAsync) | **GET** /api/v2/TrustService/SignedDocumentArtifacts/reference/{fileUploadId} | Get an artifact reference |
| [**setPrimaryAuthoringFileAsync()**](SignedDocumentArtifactsApi.md#setPrimaryAuthoringFileAsync) | **PUT** /api/v2/TrustService/SignedDocumentArtifacts/{signedDocumentId}/primary-file/{fileUploadId} | Set the primary authoring file |
| [**verifyAsync()**](SignedDocumentArtifactsApi.md#verifyAsync) | **GET** /api/v2/TrustService/SignedDocumentArtifacts/reference/{fileUploadId}/verify | Verify an artifact hash |


## `freezeAsync()`

```php
freezeAsync($tenant_id, $signed_document_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TrustArtifactReferenceDtoEnvelope
```

Freeze the source for signature

Copies the primary authoring artifact into a new Sealed frozen-source artifact, hashes it, and binds it to the document (LockState = FrozenForSignature).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$signed_document_id = 'signed_document_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->freezeAsync($tenant_id, $signed_document_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentArtifactsApi->freezeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **signed_document_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrustArtifactReferenceDtoEnvelope**](../Model/TrustArtifactReferenceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceAsync()`

```php
getReferenceAsync($tenant_id, $file_upload_id, $api_version, $x_api_version): \OpenAPI\Client\Model\TrustArtifactReferenceDtoEnvelope
```

Get an artifact reference

Resolves a stored artifact's reference (FileUpload id + key + hash + media hints).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$file_upload_id = 'file_upload_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getReferenceAsync($tenant_id, $file_upload_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentArtifactsApi->getReferenceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **file_upload_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrustArtifactReferenceDtoEnvelope**](../Model/TrustArtifactReferenceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPrimaryAuthoringFileAsync()`

```php
setPrimaryAuthoringFileAsync($tenant_id, $signed_document_id, $file_upload_id, $api_version, $x_api_version)
```

Set the primary authoring file

Links an existing scan-gated FileUpload as the document's mutable authoring artifact (only while editable).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$signed_document_id = 'signed_document_id_example'; // string
$file_upload_id = 'file_upload_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->setPrimaryAuthoringFileAsync($tenant_id, $signed_document_id, $file_upload_id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentArtifactsApi->setPrimaryAuthoringFileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **signed_document_id** | **string**|  | |
| **file_upload_id** | **string**|  | |
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

## `verifyAsync()`

```php
verifyAsync($tenant_id, $file_upload_id, $api_version, $x_api_version): \OpenAPI\Client\Model\BooleanEnvelope
```

Verify an artifact hash

Re-reads the artifact bytes and verifies them against the recorded SHA-256. Returns true on match.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SignedDocumentArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$file_upload_id = 'file_upload_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->verifyAsync($tenant_id, $file_upload_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentArtifactsApi->verifyAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **file_upload_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BooleanEnvelope**](../Model/BooleanEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
