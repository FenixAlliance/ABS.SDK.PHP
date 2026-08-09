# OpenAPI\Client\SigningCertificatesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSigningCertificateAsync()**](SigningCertificatesApi.md#createSigningCertificateAsync) | **POST** /api/v2/TrustService/SigningCertificates | Create a new signing certificate |
| [**deleteSigningCertificateAsync()**](SigningCertificatesApi.md#deleteSigningCertificateAsync) | **DELETE** /api/v2/TrustService/SigningCertificates/{id} | Delete a signing certificate |
| [**getSigningCertificateByIdAsync()**](SigningCertificatesApi.md#getSigningCertificateByIdAsync) | **GET** /api/v2/TrustService/SigningCertificates/{id} | Get signing certificate by ID |
| [**getSigningCertificatesAsync()**](SigningCertificatesApi.md#getSigningCertificatesAsync) | **GET** /api/v2/TrustService/SigningCertificates | Get all signing certificates |
| [**getSigningCertificatesCountAsync()**](SigningCertificatesApi.md#getSigningCertificatesCountAsync) | **GET** /api/v2/TrustService/SigningCertificates/Count | Get signing certificates count |
| [**importSigningCertificateAsync()**](SigningCertificatesApi.md#importSigningCertificateAsync) | **POST** /api/v2/TrustService/SigningCertificates/Import | Import a PFX/P12 signing certificate into custody |
| [**patchSigningCertificateAsync()**](SigningCertificatesApi.md#patchSigningCertificateAsync) | **PATCH** /api/v2/TrustService/SigningCertificates/{id} | Patch a signing certificate |
| [**updateSigningCertificateAsync()**](SigningCertificatesApi.md#updateSigningCertificateAsync) | **PUT** /api/v2/TrustService/SigningCertificates/{id} | Update a signing certificate |


## `createSigningCertificateAsync()`

```php
createSigningCertificateAsync($tenant_id, $api_version, $x_api_version, $signing_certificate_create_dto)
```

Create a new signing certificate

Creates a new signing certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_certificate_create_dto = new \OpenAPI\Client\Model\SigningCertificateCreateDto(); // \OpenAPI\Client\Model\SigningCertificateCreateDto

try {
    $apiInstance->createSigningCertificateAsync($tenant_id, $api_version, $x_api_version, $signing_certificate_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->createSigningCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_certificate_create_dto** | [**\OpenAPI\Client\Model\SigningCertificateCreateDto**](../Model/SigningCertificateCreateDto.md)|  | [optional] |

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

## `deleteSigningCertificateAsync()`

```php
deleteSigningCertificateAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a signing certificate

Deletes a signing certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteSigningCertificateAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->deleteSigningCertificateAsync: ', $e->getMessage(), PHP_EOL;
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

## `getSigningCertificateByIdAsync()`

```php
getSigningCertificateByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SigningCertificateDto
```

Get signing certificate by ID

Retrieves a specific signing certificate by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSigningCertificateByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->getSigningCertificateByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SigningCertificateDto**](../Model/SigningCertificateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningCertificatesAsync()`

```php
getSigningCertificatesAsync($tenant_id, $api_version, $x_api_version, $signing_certificate_dto_collection_query_parameters): \OpenAPI\Client\Model\SigningCertificateDtoListEnvelope
```

Get all signing certificates

Retrieves all signing certificates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_certificate_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningCertificateDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningCertificateDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningCertificatesAsync($tenant_id, $api_version, $x_api_version, $signing_certificate_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->getSigningCertificatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_certificate_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningCertificateDtoCollectionQueryParameters**](../Model/SigningCertificateDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningCertificateDtoListEnvelope**](../Model/SigningCertificateDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningCertificatesCountAsync()`

```php
getSigningCertificatesCountAsync($tenant_id, $api_version, $x_api_version, $signing_certificate_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get signing certificates count

Returns the count of signing certificates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_certificate_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningCertificateDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningCertificateDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningCertificatesCountAsync($tenant_id, $api_version, $x_api_version, $signing_certificate_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->getSigningCertificatesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_certificate_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningCertificateDtoCollectionQueryParameters**](../Model/SigningCertificateDtoCollectionQueryParameters.md)|  | [optional] |

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

## `importSigningCertificateAsync()`

```php
importSigningCertificateAsync($tenant_id, $api_version, $x_api_version, $id, $file, $password, $title, $contact_id)
```

Import a PFX/P12 signing certificate into custody

Parses the uploaded PFX/P12, imports the private material into the configured signing custody, and creates the certificate metadata record. The PFX and password are used only for the request — never returned or stored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$id = 'id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
$password = 'password_example'; // string
$title = 'title_example'; // string
$contact_id = 'contact_id_example'; // string

try {
    $apiInstance->importSigningCertificateAsync($tenant_id, $api_version, $x_api_version, $id, $file, $password, $title, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->importSigningCertificateAsync: ', $e->getMessage(), PHP_EOL;
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
| **password** | **string**|  | [optional] |
| **title** | **string**|  | [optional] |
| **contact_id** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSigningCertificateAsync()`

```php
patchSigningCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a signing certificate

Patch a signing certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
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
    $result = $apiInstance->patchSigningCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->patchSigningCertificateAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateSigningCertificateAsync()`

```php
updateSigningCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $signing_certificate_update_dto)
```

Update a signing certificate

Updates an existing signing certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_certificate_update_dto = new \OpenAPI\Client\Model\SigningCertificateUpdateDto(); // \OpenAPI\Client\Model\SigningCertificateUpdateDto

try {
    $apiInstance->updateSigningCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $signing_certificate_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling SigningCertificatesApi->updateSigningCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_certificate_update_dto** | [**\OpenAPI\Client\Model\SigningCertificateUpdateDto**](../Model/SigningCertificateUpdateDto.md)|  | [optional] |

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
