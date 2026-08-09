# OpenAPI\Client\LicensingCertificatesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLicensingCertificateAsync()**](LicensingCertificatesApi.md#createLicensingCertificateAsync) | **POST** /api/v2/LicensingService/LicensingCertificates | Create a new licensing certificate |
| [**deleteLicensingCertificateAsync()**](LicensingCertificatesApi.md#deleteLicensingCertificateAsync) | **DELETE** /api/v2/LicensingService/LicensingCertificates/{id} | Delete a licensing certificate |
| [**getLicensingCertificateByIdAsync()**](LicensingCertificatesApi.md#getLicensingCertificateByIdAsync) | **GET** /api/v2/LicensingService/LicensingCertificates/{id} | Get licensing certificate by ID |
| [**getLicensingCertificatesAsync()**](LicensingCertificatesApi.md#getLicensingCertificatesAsync) | **GET** /api/v2/LicensingService/LicensingCertificates | Get all licensing certificates |
| [**getLicensingCertificatesCountAsync()**](LicensingCertificatesApi.md#getLicensingCertificatesCountAsync) | **GET** /api/v2/LicensingService/LicensingCertificates/Count | Get licensing certificates count |
| [**patchLicensingCertificateAsync()**](LicensingCertificatesApi.md#patchLicensingCertificateAsync) | **PATCH** /api/v2/LicensingService/LicensingCertificates/{id} | Patch a licensing certificate |
| [**updateLicensingCertificateAsync()**](LicensingCertificatesApi.md#updateLicensingCertificateAsync) | **PUT** /api/v2/LicensingService/LicensingCertificates/{id} | Update a licensing certificate |


## `createLicensingCertificateAsync()`

```php
createLicensingCertificateAsync($tenant_id, $api_version, $x_api_version, $licensing_certificate_create_dto)
```

Create a new licensing certificate

Creates a new licensing certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicensingCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$licensing_certificate_create_dto = new \OpenAPI\Client\Model\LicensingCertificateCreateDto(); // \OpenAPI\Client\Model\LicensingCertificateCreateDto

try {
    $apiInstance->createLicensingCertificateAsync($tenant_id, $api_version, $x_api_version, $licensing_certificate_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicensingCertificatesApi->createLicensingCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **licensing_certificate_create_dto** | [**\OpenAPI\Client\Model\LicensingCertificateCreateDto**](../Model/LicensingCertificateCreateDto.md)|  | [optional] |

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

## `deleteLicensingCertificateAsync()`

```php
deleteLicensingCertificateAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a licensing certificate

Deletes a licensing certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicensingCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteLicensingCertificateAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling LicensingCertificatesApi->deleteLicensingCertificateAsync: ', $e->getMessage(), PHP_EOL;
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

## `getLicensingCertificateByIdAsync()`

```php
getLicensingCertificateByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\LicensingCertificateDto
```

Get licensing certificate by ID

Retrieves a specific licensing certificate by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicensingCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLicensingCertificateByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensingCertificatesApi->getLicensingCertificateByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\LicensingCertificateDto**](../Model/LicensingCertificateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicensingCertificatesAsync()`

```php
getLicensingCertificatesAsync($tenant_id, $api_version, $x_api_version, $licensing_certificate_dto_collection_query_parameters): \OpenAPI\Client\Model\LicensingCertificateDtoListEnvelope
```

Get all licensing certificates

Retrieves all licensing certificates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicensingCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$licensing_certificate_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicensingCertificateDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicensingCertificateDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicensingCertificatesAsync($tenant_id, $api_version, $x_api_version, $licensing_certificate_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensingCertificatesApi->getLicensingCertificatesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **licensing_certificate_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicensingCertificateDtoCollectionQueryParameters**](../Model/LicensingCertificateDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LicensingCertificateDtoListEnvelope**](../Model/LicensingCertificateDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicensingCertificatesCountAsync()`

```php
getLicensingCertificatesCountAsync($tenant_id, $api_version, $x_api_version, $licensing_certificate_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get licensing certificates count

Returns the count of licensing certificates for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicensingCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$licensing_certificate_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicensingCertificateDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicensingCertificateDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicensingCertificatesCountAsync($tenant_id, $api_version, $x_api_version, $licensing_certificate_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensingCertificatesApi->getLicensingCertificatesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **licensing_certificate_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicensingCertificateDtoCollectionQueryParameters**](../Model/LicensingCertificateDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchLicensingCertificateAsync()`

```php
patchLicensingCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a licensing certificate

Patch a licensing certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicensingCertificatesApi(
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
    $result = $apiInstance->patchLicensingCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensingCertificatesApi->patchLicensingCertificateAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateLicensingCertificateAsync()`

```php
updateLicensingCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $licensing_certificate_update_dto)
```

Update a licensing certificate

Updates an existing licensing certificate for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicensingCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$licensing_certificate_update_dto = new \OpenAPI\Client\Model\LicensingCertificateUpdateDto(); // \OpenAPI\Client\Model\LicensingCertificateUpdateDto

try {
    $apiInstance->updateLicensingCertificateAsync($tenant_id, $id, $api_version, $x_api_version, $licensing_certificate_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicensingCertificatesApi->updateLicensingCertificateAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **licensing_certificate_update_dto** | [**\OpenAPI\Client\Model\LicensingCertificateUpdateDto**](../Model/LicensingCertificateUpdateDto.md)|  | [optional] |

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
