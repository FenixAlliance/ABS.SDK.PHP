# OpenAPI\Client\LicenseAttributesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLicenseAttributeAsync()**](LicenseAttributesApi.md#createLicenseAttributeAsync) | **POST** /api/v2/LicensingService/LicenseAttributes | Create a new license attribute |
| [**deleteLicenseAttributeAsync()**](LicenseAttributesApi.md#deleteLicenseAttributeAsync) | **DELETE** /api/v2/LicensingService/LicenseAttributes/{id} | Delete a license attribute |
| [**getLicenseAttributeByIdAsync()**](LicenseAttributesApi.md#getLicenseAttributeByIdAsync) | **GET** /api/v2/LicensingService/LicenseAttributes/{id} | Get license attribute by ID |
| [**getLicenseAttributesAsync()**](LicenseAttributesApi.md#getLicenseAttributesAsync) | **GET** /api/v2/LicensingService/LicenseAttributes | Get all license attributes |
| [**getLicenseAttributesCountAsync()**](LicenseAttributesApi.md#getLicenseAttributesCountAsync) | **GET** /api/v2/LicensingService/LicenseAttributes/Count | Get license attributes count |
| [**patchLicenseAttributeAsync()**](LicenseAttributesApi.md#patchLicenseAttributeAsync) | **PATCH** /api/v2/LicensingService/LicenseAttributes/{id} | Patch a license attribute |
| [**updateLicenseAttributeAsync()**](LicenseAttributesApi.md#updateLicenseAttributeAsync) | **PUT** /api/v2/LicensingService/LicenseAttributes/{id} | Update a license attribute |


## `createLicenseAttributeAsync()`

```php
createLicenseAttributeAsync($tenant_id, $api_version, $x_api_version, $license_attribute_create_dto)
```

Create a new license attribute

Creates a new license attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_attribute_create_dto = new \OpenAPI\Client\Model\LicenseAttributeCreateDto(); // \OpenAPI\Client\Model\LicenseAttributeCreateDto

try {
    $apiInstance->createLicenseAttributeAsync($tenant_id, $api_version, $x_api_version, $license_attribute_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicenseAttributesApi->createLicenseAttributeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_attribute_create_dto** | [**\OpenAPI\Client\Model\LicenseAttributeCreateDto**](../Model/LicenseAttributeCreateDto.md)|  | [optional] |

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

## `deleteLicenseAttributeAsync()`

```php
deleteLicenseAttributeAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a license attribute

Deletes a license attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteLicenseAttributeAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling LicenseAttributesApi->deleteLicenseAttributeAsync: ', $e->getMessage(), PHP_EOL;
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

## `getLicenseAttributeByIdAsync()`

```php
getLicenseAttributeByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\LicenseAttributeDto
```

Get license attribute by ID

Retrieves a specific license attribute by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLicenseAttributeByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseAttributesApi->getLicenseAttributeByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\LicenseAttributeDto**](../Model/LicenseAttributeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicenseAttributesAsync()`

```php
getLicenseAttributesAsync($tenant_id, $api_version, $x_api_version, $license_attribute_dto_collection_query_parameters): \OpenAPI\Client\Model\LicenseAttributeDtoListEnvelope
```

Get all license attributes

Retrieves all license attributes for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_attribute_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicenseAttributeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicenseAttributeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicenseAttributesAsync($tenant_id, $api_version, $x_api_version, $license_attribute_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseAttributesApi->getLicenseAttributesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_attribute_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicenseAttributeDtoCollectionQueryParameters**](../Model/LicenseAttributeDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LicenseAttributeDtoListEnvelope**](../Model/LicenseAttributeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicenseAttributesCountAsync()`

```php
getLicenseAttributesCountAsync($tenant_id, $api_version, $x_api_version, $license_attribute_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get license attributes count

Returns the count of license attributes for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_attribute_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicenseAttributeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicenseAttributeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicenseAttributesCountAsync($tenant_id, $api_version, $x_api_version, $license_attribute_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseAttributesApi->getLicenseAttributesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_attribute_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicenseAttributeDtoCollectionQueryParameters**](../Model/LicenseAttributeDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchLicenseAttributeAsync()`

```php
patchLicenseAttributeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a license attribute

Patch a license attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseAttributesApi(
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
    $result = $apiInstance->patchLicenseAttributeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseAttributesApi->patchLicenseAttributeAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateLicenseAttributeAsync()`

```php
updateLicenseAttributeAsync($tenant_id, $id, $api_version, $x_api_version, $license_attribute_update_dto)
```

Update a license attribute

Updates an existing license attribute for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_attribute_update_dto = new \OpenAPI\Client\Model\LicenseAttributeUpdateDto(); // \OpenAPI\Client\Model\LicenseAttributeUpdateDto

try {
    $apiInstance->updateLicenseAttributeAsync($tenant_id, $id, $api_version, $x_api_version, $license_attribute_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicenseAttributesApi->updateLicenseAttributeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_attribute_update_dto** | [**\OpenAPI\Client\Model\LicenseAttributeUpdateDto**](../Model/LicenseAttributeUpdateDto.md)|  | [optional] |

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
