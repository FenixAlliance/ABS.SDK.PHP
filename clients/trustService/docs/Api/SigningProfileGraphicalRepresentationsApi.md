# OpenAPI\Client\SigningProfileGraphicalRepresentationsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSigningProfileGraphicalRepresentationAsync()**](SigningProfileGraphicalRepresentationsApi.md#createSigningProfileGraphicalRepresentationAsync) | **POST** /api/v2/TrustService/SigningProfileGraphicalRepresentations | Create a new signature representation |
| [**deleteSigningProfileGraphicalRepresentationAsync()**](SigningProfileGraphicalRepresentationsApi.md#deleteSigningProfileGraphicalRepresentationAsync) | **DELETE** /api/v2/TrustService/SigningProfileGraphicalRepresentations/{id} | Delete a signature representation |
| [**getSigningProfileGraphicalRepresentationByIdAsync()**](SigningProfileGraphicalRepresentationsApi.md#getSigningProfileGraphicalRepresentationByIdAsync) | **GET** /api/v2/TrustService/SigningProfileGraphicalRepresentations/{id} | Get signature representation by ID |
| [**getSigningProfileGraphicalRepresentationsAsync()**](SigningProfileGraphicalRepresentationsApi.md#getSigningProfileGraphicalRepresentationsAsync) | **GET** /api/v2/TrustService/SigningProfileGraphicalRepresentations | Get all signature representations |
| [**getSigningProfileGraphicalRepresentationsCountAsync()**](SigningProfileGraphicalRepresentationsApi.md#getSigningProfileGraphicalRepresentationsCountAsync) | **GET** /api/v2/TrustService/SigningProfileGraphicalRepresentations/Count | Get signature representations count |
| [**patchSigningProfileGraphicalRepresentationAsync()**](SigningProfileGraphicalRepresentationsApi.md#patchSigningProfileGraphicalRepresentationAsync) | **PATCH** /api/v2/TrustService/SigningProfileGraphicalRepresentations/{id} | Patch a signature representation |
| [**updateSigningProfileGraphicalRepresentationAsync()**](SigningProfileGraphicalRepresentationsApi.md#updateSigningProfileGraphicalRepresentationAsync) | **PUT** /api/v2/TrustService/SigningProfileGraphicalRepresentations/{id} | Update a signature representation |


## `createSigningProfileGraphicalRepresentationAsync()`

```php
createSigningProfileGraphicalRepresentationAsync($tenant_id, $api_version, $x_api_version, $signing_profile_graphical_representation_create_dto)
```

Create a new signature representation

Creates a new reusable signature representation for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningProfileGraphicalRepresentationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_profile_graphical_representation_create_dto = new \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationCreateDto(); // \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationCreateDto

try {
    $apiInstance->createSigningProfileGraphicalRepresentationAsync($tenant_id, $api_version, $x_api_version, $signing_profile_graphical_representation_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling SigningProfileGraphicalRepresentationsApi->createSigningProfileGraphicalRepresentationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_profile_graphical_representation_create_dto** | [**\OpenAPI\Client\Model\SigningProfileGraphicalRepresentationCreateDto**](../Model/SigningProfileGraphicalRepresentationCreateDto.md)|  | [optional] |

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

## `deleteSigningProfileGraphicalRepresentationAsync()`

```php
deleteSigningProfileGraphicalRepresentationAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a signature representation

Deletes a signature representation for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningProfileGraphicalRepresentationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteSigningProfileGraphicalRepresentationAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling SigningProfileGraphicalRepresentationsApi->deleteSigningProfileGraphicalRepresentationAsync: ', $e->getMessage(), PHP_EOL;
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

## `getSigningProfileGraphicalRepresentationByIdAsync()`

```php
getSigningProfileGraphicalRepresentationByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDto
```

Get signature representation by ID

Retrieves a specific signature representation by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningProfileGraphicalRepresentationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSigningProfileGraphicalRepresentationByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningProfileGraphicalRepresentationsApi->getSigningProfileGraphicalRepresentationByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDto**](../Model/SigningProfileGraphicalRepresentationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningProfileGraphicalRepresentationsAsync()`

```php
getSigningProfileGraphicalRepresentationsAsync($tenant_id, $api_version, $x_api_version, $signing_profile_graphical_representation_dto_collection_query_parameters): \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoListEnvelope
```

Get all signature representations

Retrieves all reusable signature representations for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningProfileGraphicalRepresentationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_profile_graphical_representation_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningProfileGraphicalRepresentationsAsync($tenant_id, $api_version, $x_api_version, $signing_profile_graphical_representation_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningProfileGraphicalRepresentationsApi->getSigningProfileGraphicalRepresentationsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_profile_graphical_representation_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoCollectionQueryParameters**](../Model/SigningProfileGraphicalRepresentationDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoListEnvelope**](../Model/SigningProfileGraphicalRepresentationDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningProfileGraphicalRepresentationsCountAsync()`

```php
getSigningProfileGraphicalRepresentationsCountAsync($tenant_id, $api_version, $x_api_version, $signing_profile_graphical_representation_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get signature representations count

Returns the count of signature representations for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningProfileGraphicalRepresentationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_profile_graphical_representation_dto_collection_query_parameters = new \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSigningProfileGraphicalRepresentationsCountAsync($tenant_id, $api_version, $x_api_version, $signing_profile_graphical_representation_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningProfileGraphicalRepresentationsApi->getSigningProfileGraphicalRepresentationsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_profile_graphical_representation_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\SigningProfileGraphicalRepresentationDtoCollectionQueryParameters**](../Model/SigningProfileGraphicalRepresentationDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchSigningProfileGraphicalRepresentationAsync()`

```php
patchSigningProfileGraphicalRepresentationAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a signature representation

Patch a signature representation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningProfileGraphicalRepresentationsApi(
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
    $result = $apiInstance->patchSigningProfileGraphicalRepresentationAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningProfileGraphicalRepresentationsApi->patchSigningProfileGraphicalRepresentationAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateSigningProfileGraphicalRepresentationAsync()`

```php
updateSigningProfileGraphicalRepresentationAsync($tenant_id, $id, $api_version, $x_api_version, $signing_profile_graphical_representation_update_dto)
```

Update a signature representation

Updates an existing signature representation for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SigningProfileGraphicalRepresentationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$signing_profile_graphical_representation_update_dto = new \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationUpdateDto(); // \OpenAPI\Client\Model\SigningProfileGraphicalRepresentationUpdateDto

try {
    $apiInstance->updateSigningProfileGraphicalRepresentationAsync($tenant_id, $id, $api_version, $x_api_version, $signing_profile_graphical_representation_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling SigningProfileGraphicalRepresentationsApi->updateSigningProfileGraphicalRepresentationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **signing_profile_graphical_representation_update_dto** | [**\OpenAPI\Client\Model\SigningProfileGraphicalRepresentationUpdateDto**](../Model/SigningProfileGraphicalRepresentationUpdateDto.md)|  | [optional] |

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
