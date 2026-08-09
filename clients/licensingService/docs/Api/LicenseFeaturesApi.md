# OpenAPI\Client\LicenseFeaturesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLicenseFeatureAsync()**](LicenseFeaturesApi.md#createLicenseFeatureAsync) | **POST** /api/v2/LicensingService/LicenseFeatures | Create a new license feature |
| [**deleteLicenseFeatureAsync()**](LicenseFeaturesApi.md#deleteLicenseFeatureAsync) | **DELETE** /api/v2/LicensingService/LicenseFeatures/{id} | Delete a license feature |
| [**getLicenseFeatureByIdAsync()**](LicenseFeaturesApi.md#getLicenseFeatureByIdAsync) | **GET** /api/v2/LicensingService/LicenseFeatures/{id} | Get license feature by ID |
| [**getLicenseFeaturesAsync()**](LicenseFeaturesApi.md#getLicenseFeaturesAsync) | **GET** /api/v2/LicensingService/LicenseFeatures | Get all license features |
| [**getLicenseFeaturesCountAsync()**](LicenseFeaturesApi.md#getLicenseFeaturesCountAsync) | **GET** /api/v2/LicensingService/LicenseFeatures/Count | Get license features count |
| [**patchLicenseFeatureAsync()**](LicenseFeaturesApi.md#patchLicenseFeatureAsync) | **PATCH** /api/v2/LicensingService/LicenseFeatures/{id} | Patch a license feature |
| [**updateLicenseFeatureAsync()**](LicenseFeaturesApi.md#updateLicenseFeatureAsync) | **PUT** /api/v2/LicensingService/LicenseFeatures/{id} | Update a license feature |


## `createLicenseFeatureAsync()`

```php
createLicenseFeatureAsync($tenant_id, $api_version, $x_api_version, $license_feature_create_dto)
```

Create a new license feature

Creates a new license feature for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_feature_create_dto = new \OpenAPI\Client\Model\LicenseFeatureCreateDto(); // \OpenAPI\Client\Model\LicenseFeatureCreateDto

try {
    $apiInstance->createLicenseFeatureAsync($tenant_id, $api_version, $x_api_version, $license_feature_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicenseFeaturesApi->createLicenseFeatureAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_feature_create_dto** | [**\OpenAPI\Client\Model\LicenseFeatureCreateDto**](../Model/LicenseFeatureCreateDto.md)|  | [optional] |

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

## `deleteLicenseFeatureAsync()`

```php
deleteLicenseFeatureAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a license feature

Deletes a license feature for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteLicenseFeatureAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling LicenseFeaturesApi->deleteLicenseFeatureAsync: ', $e->getMessage(), PHP_EOL;
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

## `getLicenseFeatureByIdAsync()`

```php
getLicenseFeatureByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\LicenseFeatureDto
```

Get license feature by ID

Retrieves a specific license feature by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getLicenseFeatureByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseFeaturesApi->getLicenseFeatureByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\LicenseFeatureDto**](../Model/LicenseFeatureDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicenseFeaturesAsync()`

```php
getLicenseFeaturesAsync($tenant_id, $api_version, $x_api_version, $license_feature_dto_collection_query_parameters): \OpenAPI\Client\Model\LicenseFeatureDtoListEnvelope
```

Get all license features

Retrieves all license features for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_feature_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicenseFeatureDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicenseFeatureDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicenseFeaturesAsync($tenant_id, $api_version, $x_api_version, $license_feature_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseFeaturesApi->getLicenseFeaturesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_feature_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicenseFeatureDtoCollectionQueryParameters**](../Model/LicenseFeatureDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LicenseFeatureDtoListEnvelope**](../Model/LicenseFeatureDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicenseFeaturesCountAsync()`

```php
getLicenseFeaturesCountAsync($tenant_id, $api_version, $x_api_version, $license_feature_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get license features count

Returns the count of license features for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_feature_dto_collection_query_parameters = new \OpenAPI\Client\Model\LicenseFeatureDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\LicenseFeatureDtoCollectionQueryParameters

try {
    $result = $apiInstance->getLicenseFeaturesCountAsync($tenant_id, $api_version, $x_api_version, $license_feature_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseFeaturesApi->getLicenseFeaturesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_feature_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\LicenseFeatureDtoCollectionQueryParameters**](../Model/LicenseFeatureDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchLicenseFeatureAsync()`

```php
patchLicenseFeatureAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a license feature

Patch a license feature for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseFeaturesApi(
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
    $result = $apiInstance->patchLicenseFeatureAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseFeaturesApi->patchLicenseFeatureAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateLicenseFeatureAsync()`

```php
updateLicenseFeatureAsync($tenant_id, $id, $api_version, $x_api_version, $license_feature_update_dto)
```

Update a license feature

Updates an existing license feature for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LicenseFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$license_feature_update_dto = new \OpenAPI\Client\Model\LicenseFeatureUpdateDto(); // \OpenAPI\Client\Model\LicenseFeatureUpdateDto

try {
    $apiInstance->updateLicenseFeatureAsync($tenant_id, $id, $api_version, $x_api_version, $license_feature_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling LicenseFeaturesApi->updateLicenseFeatureAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **license_feature_update_dto** | [**\OpenAPI\Client\Model\LicenseFeatureUpdateDto**](../Model/LicenseFeatureUpdateDto.md)|  | [optional] |

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
