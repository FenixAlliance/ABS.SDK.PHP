# OpenAPI\Client\ContactRelationTypesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContactRelationTypeAsync()**](ContactRelationTypesApi.md#createContactRelationTypeAsync) | **POST** /api/v2/CrmService/ContactRelationTypes | Create a new contact relation type |
| [**deleteContactRelationTypeAsync()**](ContactRelationTypesApi.md#deleteContactRelationTypeAsync) | **DELETE** /api/v2/CrmService/ContactRelationTypes/{id} | Delete a contact relation type |
| [**getContactRelationTypeByIdAsync()**](ContactRelationTypesApi.md#getContactRelationTypeByIdAsync) | **GET** /api/v2/CrmService/ContactRelationTypes/{id} | Get contact relation type by ID |
| [**getContactRelationTypesAsync()**](ContactRelationTypesApi.md#getContactRelationTypesAsync) | **GET** /api/v2/CrmService/ContactRelationTypes | Get all contact relation types |
| [**getContactRelationTypesCountAsync()**](ContactRelationTypesApi.md#getContactRelationTypesCountAsync) | **GET** /api/v2/CrmService/ContactRelationTypes/Count | Get contact relation types count |
| [**patchContactRelationTypeAsync()**](ContactRelationTypesApi.md#patchContactRelationTypeAsync) | **PATCH** /api/v2/CrmService/ContactRelationTypes/{id} | Patch a contact relation type |
| [**updateContactRelationTypeAsync()**](ContactRelationTypesApi.md#updateContactRelationTypeAsync) | **PUT** /api/v2/CrmService/ContactRelationTypes/{id} | Update a contact relation type |


## `createContactRelationTypeAsync()`

```php
createContactRelationTypeAsync($tenant_id, $api_version, $x_api_version, $contact_relation_type_create_dto)
```

Create a new contact relation type

Creates a new contact relation type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactRelationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_relation_type_create_dto = new \OpenAPI\Client\Model\ContactRelationTypeCreateDto(); // \OpenAPI\Client\Model\ContactRelationTypeCreateDto

try {
    $apiInstance->createContactRelationTypeAsync($tenant_id, $api_version, $x_api_version, $contact_relation_type_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContactRelationTypesApi->createContactRelationTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_relation_type_create_dto** | [**\OpenAPI\Client\Model\ContactRelationTypeCreateDto**](../Model/ContactRelationTypeCreateDto.md)|  | [optional] |

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

## `deleteContactRelationTypeAsync()`

```php
deleteContactRelationTypeAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a contact relation type

Deletes a contact relation type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactRelationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteContactRelationTypeAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ContactRelationTypesApi->deleteContactRelationTypeAsync: ', $e->getMessage(), PHP_EOL;
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

## `getContactRelationTypeByIdAsync()`

```php
getContactRelationTypeByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\ContactRelationTypeDto
```

Get contact relation type by ID

Retrieves a specific contact relation type by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactRelationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getContactRelationTypeByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactRelationTypesApi->getContactRelationTypeByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ContactRelationTypeDto**](../Model/ContactRelationTypeDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactRelationTypesAsync()`

```php
getContactRelationTypesAsync($tenant_id, $api_version, $x_api_version, $contact_relation_type_dto_collection_query_parameters): \OpenAPI\Client\Model\ContactRelationTypeDtoListEnvelope
```

Get all contact relation types

Retrieves all contact relation types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactRelationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_relation_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\ContactRelationTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ContactRelationTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getContactRelationTypesAsync($tenant_id, $api_version, $x_api_version, $contact_relation_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactRelationTypesApi->getContactRelationTypesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_relation_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ContactRelationTypeDtoCollectionQueryParameters**](../Model/ContactRelationTypeDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContactRelationTypeDtoListEnvelope**](../Model/ContactRelationTypeDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactRelationTypesCountAsync()`

```php
getContactRelationTypesCountAsync($tenant_id, $api_version, $x_api_version, $contact_relation_type_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get contact relation types count

Returns the count of contact relation types for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactRelationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_relation_type_dto_collection_query_parameters = new \OpenAPI\Client\Model\ContactRelationTypeDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ContactRelationTypeDtoCollectionQueryParameters

try {
    $result = $apiInstance->getContactRelationTypesCountAsync($tenant_id, $api_version, $x_api_version, $contact_relation_type_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactRelationTypesApi->getContactRelationTypesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_relation_type_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ContactRelationTypeDtoCollectionQueryParameters**](../Model/ContactRelationTypeDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchContactRelationTypeAsync()`

```php
patchContactRelationTypeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a contact relation type

Patch a contact relation type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactRelationTypesApi(
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
    $result = $apiInstance->patchContactRelationTypeAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactRelationTypesApi->patchContactRelationTypeAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateContactRelationTypeAsync()`

```php
updateContactRelationTypeAsync($tenant_id, $id, $api_version, $x_api_version, $contact_relation_type_update_dto)
```

Update a contact relation type

Updates an existing contact relation type for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactRelationTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_relation_type_update_dto = new \OpenAPI\Client\Model\ContactRelationTypeUpdateDto(); // \OpenAPI\Client\Model\ContactRelationTypeUpdateDto

try {
    $apiInstance->updateContactRelationTypeAsync($tenant_id, $id, $api_version, $x_api_version, $contact_relation_type_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContactRelationTypesApi->updateContactRelationTypeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_relation_type_update_dto** | [**\OpenAPI\Client\Model\ContactRelationTypeUpdateDto**](../Model/ContactRelationTypeUpdateDto.md)|  | [optional] |

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
