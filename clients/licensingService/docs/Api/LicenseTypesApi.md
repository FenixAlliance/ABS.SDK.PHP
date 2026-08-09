# OpenAPI\Client\LicenseTypesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLicenseTypeAsync()**](LicenseTypesApi.md#createLicenseTypeAsync) | **POST** /api/v2/LicensingService/LicenseTypes | Create a new license type |
| [**deleteLicenseTypeAsync()**](LicenseTypesApi.md#deleteLicenseTypeAsync) | **DELETE** /api/v2/LicensingService/LicenseTypes/{id} | Delete a license type |
| [**getLicenseTypeByIdAsync()**](LicenseTypesApi.md#getLicenseTypeByIdAsync) | **GET** /api/v2/LicensingService/LicenseTypes/{id} | Get license type by ID |
| [**getLicenseTypesAsync()**](LicenseTypesApi.md#getLicenseTypesAsync) | **GET** /api/v2/LicensingService/LicenseTypes | Get all license types |
| [**getLicenseTypesCountAsync()**](LicenseTypesApi.md#getLicenseTypesCountAsync) | **GET** /api/v2/LicensingService/LicenseTypes/Count | Get license types count |
| [**patchLicenseTypeAsync()**](LicenseTypesApi.md#patchLicenseTypeAsync) | **PATCH** /api/v2/LicensingService/LicenseTypes/{id} | Patch a license type |
| [**updateLicenseTypeAsync()**](LicenseTypesApi.md#updateLicenseTypeAsync) | **PUT** /api/v2/LicensingService/LicenseTypes/{id} | Update a license type |


## `createLicenseTypeAsync()`

```php
createLicenseTypeAsync($tenant_id, $api_version, $x_api_version, $license_type_create_dto)
```

Create a new license type

Creates a new license type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_type_create_dto = new \OpenAPI\Client\Model\LicenseTypeCreateDto(); // \OpenAPI\Client\Model\LicenseTypeCreateDto

try {
    $apiInstance->createLicenseTypeAsync($tenant_id, $api_version, $x_api_version, $license_type_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicenseTypesApi->createLicenseTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_type_create_dto** | [**\OpenAPI\Client\Model\LicenseTypeCreateDto**](../Model/LicenseTypeCreateDto.md)|  | [optional] |

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

## `deleteLicenseTypeAsync()`

```php
deleteLicenseTypeAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a license type

Deletes a license type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteLicenseTypeAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling LicenseTypesApi->deleteLicenseTypeAsync: ', $e->getMessage(), PHP_EOL;
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

## `getLicenseTypeByIdAsync()`

```php
getLicenseTypeByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\LicenseTypeDto
```

Get license type by ID

Retrieves a specific license type by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLicenseTypeByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseTypesApi->getLicenseTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\LicenseTypeDto**](../Model/LicenseTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicenseTypesAsync()`

```php
getLicenseTypesAsync($tenant_id, $api_version, $x_api_version, $license_type_dto_collection_query_parameters): \OpenAPI\Client\Model\LicenseTypeDtoListEnvelope
```

Get all license types

Retrieves all license types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicenseTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicenseTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicenseTypesAsync($tenant_id, $api_version, $x_api_version, $license_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseTypesApi->getLicenseTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicenseTypeDtoCollectionQueryParameters**](../Model/LicenseTypeDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LicenseTypeDtoListEnvelope**](../Model/LicenseTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicenseTypesCountAsync()`

```php
getLicenseTypesCountAsync($tenant_id, $api_version, $x_api_version, $license_type_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get license types count

Returns the count of license types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicenseTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicenseTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicenseTypesCountAsync($tenant_id, $api_version, $x_api_version, $license_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseTypesApi->getLicenseTypesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicenseTypeDtoCollectionQueryParameters**](../Model/LicenseTypeDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchLicenseTypeAsync()`

```php
patchLicenseTypeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a license type

Patch a license type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseTypesApi(
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
    $result = $apiInstance->patchLicenseTypeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseTypesApi->patchLicenseTypeAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateLicenseTypeAsync()`

```php
updateLicenseTypeAsync($tenant_id, $id, $api_version, $x_api_version, $license_type_update_dto)
```

Update a license type

Updates an existing license type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_type_update_dto = new \OpenAPI\Client\Model\LicenseTypeUpdateDto(); // \OpenAPI\Client\Model\LicenseTypeUpdateDto

try {
    $apiInstance->updateLicenseTypeAsync($tenant_id, $id, $api_version, $x_api_version, $license_type_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicenseTypesApi->updateLicenseTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_type_update_dto** | [**\OpenAPI\Client\Model\LicenseTypeUpdateDto**](../Model/LicenseTypeUpdateDto.md)|  | [optional] |

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
