# OpenAPI\Client\SupplierProfilesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupplierProfileAsync()**](SupplierProfilesApi.md#createSupplierProfileAsync) | **POST** /api/v2/LogisticsService/SupplierProfiles | Create a supplier profile |
| [**deleteSupplierProfileAsync()**](SupplierProfilesApi.md#deleteSupplierProfileAsync) | **DELETE** /api/v2/LogisticsService/SupplierProfiles/{supplierProfileId} | Delete a supplier profile |
| [**getSupplierProfileByIdAsync()**](SupplierProfilesApi.md#getSupplierProfileByIdAsync) | **GET** /api/v2/LogisticsService/SupplierProfiles/{supplierProfileId} | Get supplier profile by ID |
| [**getSupplierProfilesAsync()**](SupplierProfilesApi.md#getSupplierProfilesAsync) | **GET** /api/v2/LogisticsService/SupplierProfiles | Get all supplier profiles |
| [**getSupplierProfilesCountAsync()**](SupplierProfilesApi.md#getSupplierProfilesCountAsync) | **GET** /api/v2/LogisticsService/SupplierProfiles/Count | Get supplier profiles count |
| [**patchSupplierProfileAsync()**](SupplierProfilesApi.md#patchSupplierProfileAsync) | **PATCH** /api/v2/LogisticsService/SupplierProfiles/{supplierProfileId} | Patch a supplier profile |
| [**updateSupplierProfileAsync()**](SupplierProfilesApi.md#updateSupplierProfileAsync) | **PUT** /api/v2/LogisticsService/SupplierProfiles/{supplierProfileId} | Update a supplier profile |


## `createSupplierProfileAsync()`

```php
createSupplierProfileAsync($tenant_id, $api_version, $x_api_version, $supplier_profile_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a supplier profile

Creates a new supplier profile for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$supplier_profile_create_dto = new \OpenAPI\Client\Model\SupplierProfileCreateDto(); // \OpenAPI\Client\Model\SupplierProfileCreateDto

try {
    $result = $apiInstance->createSupplierProfileAsync($tenant_id, $api_version, $x_api_version, $supplier_profile_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierProfilesApi->createSupplierProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **supplier_profile_create_dto** | [**\OpenAPI\Client\Model\SupplierProfileCreateDto**](../Model/SupplierProfileCreateDto.md)|  | [optional] |

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

## `deleteSupplierProfileAsync()`

```php
deleteSupplierProfileAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a supplier profile

Deletes a supplier profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$supplier_profile_id = 'supplier_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSupplierProfileAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierProfilesApi->deleteSupplierProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **supplier_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmptyEnvelope**](../Model/EmptyEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierProfileByIdAsync()`

```php
getSupplierProfileByIdAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SupplierProfileDtoEnvelope
```

Get supplier profile by ID

Retrieves a specific supplier profile by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$supplier_profile_id = 'supplier_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSupplierProfileByIdAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierProfilesApi->getSupplierProfileByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **supplier_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierProfileDtoEnvelope**](../Model/SupplierProfileDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierProfilesAsync()`

```php
getSupplierProfilesAsync($tenant_id, $api_version, $x_api_version, $supplier_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\SupplierProfileDtoListEnvelope
```

Get all supplier profiles

Retrieves all supplier profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$supplier_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\SupplierProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SupplierProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSupplierProfilesAsync($tenant_id, $api_version, $x_api_version, $supplier_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierProfilesApi->getSupplierProfilesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **supplier_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SupplierProfileDtoCollectionQueryParameters**](../Model/SupplierProfileDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierProfileDtoListEnvelope**](../Model/SupplierProfileDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierProfilesCountAsync()`

```php
getSupplierProfilesCountAsync($tenant_id, $api_version, $x_api_version, $supplier_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get supplier profiles count

Returns the count of supplier profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$supplier_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\SupplierProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SupplierProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSupplierProfilesCountAsync($tenant_id, $api_version, $x_api_version, $supplier_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierProfilesApi->getSupplierProfilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **supplier_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SupplierProfileDtoCollectionQueryParameters**](../Model/SupplierProfileDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchSupplierProfileAsync()`

```php
patchSupplierProfileAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a supplier profile

Applies a JSON Patch document to a supplier profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$supplier_profile_id = 'supplier_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSupplierProfileAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierProfilesApi->patchSupplierProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **supplier_profile_id** | **string**|  | |
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

## `updateSupplierProfileAsync()`

```php
updateSupplierProfileAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version, $supplier_profile_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a supplier profile

Updates an existing supplier profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$supplier_profile_id = 'supplier_profile_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$supplier_profile_update_dto = new \OpenAPI\Client\Model\SupplierProfileUpdateDto(); // \OpenAPI\Client\Model\SupplierProfileUpdateDto

try {
    $result = $apiInstance->updateSupplierProfileAsync($tenant_id, $supplier_profile_id, $api_version, $x_api_version, $supplier_profile_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierProfilesApi->updateSupplierProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **supplier_profile_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **supplier_profile_update_dto** | [**\OpenAPI\Client\Model\SupplierProfileUpdateDto**](../Model/SupplierProfileUpdateDto.md)|  | [optional] |

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
