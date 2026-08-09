# OpenAPI\Client\ContactProfilesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContactProfileAsync()**](ContactProfilesApi.md#createContactProfileAsync) | **POST** /api/v2/CrmService/ContactProfiles | Create a new contact profile |
| [**deleteContactProfileAsync()**](ContactProfilesApi.md#deleteContactProfileAsync) | **DELETE** /api/v2/CrmService/ContactProfiles/{id} | Delete a contact profile |
| [**getContactProfileByIdAsync()**](ContactProfilesApi.md#getContactProfileByIdAsync) | **GET** /api/v2/CrmService/ContactProfiles/{id} | Get contact profile by ID |
| [**getContactProfilesAsync()**](ContactProfilesApi.md#getContactProfilesAsync) | **GET** /api/v2/CrmService/ContactProfiles | Get all contact profiles |
| [**getContactProfilesCountAsync()**](ContactProfilesApi.md#getContactProfilesCountAsync) | **GET** /api/v2/CrmService/ContactProfiles/Count | Get contact profiles count |
| [**getPartnerProfilesCountAsync()**](ContactProfilesApi.md#getPartnerProfilesCountAsync) | **GET** /api/v2/CrmService/ContactProfiles/Partners/Count | Get partner profiles count |
| [**getPatientProfilesCountAsync()**](ContactProfilesApi.md#getPatientProfilesCountAsync) | **GET** /api/v2/CrmService/ContactProfiles/Patients/Count | Get patient profiles count |
| [**patchContactProfileAsync()**](ContactProfilesApi.md#patchContactProfileAsync) | **PATCH** /api/v2/CrmService/ContactProfiles/{id} | Patch a contact profile |
| [**updateContactProfileAsync()**](ContactProfilesApi.md#updateContactProfileAsync) | **PUT** /api/v2/CrmService/ContactProfiles/{id} | Update a contact profile |


## `createContactProfileAsync()`

```php
createContactProfileAsync($tenant_id, $api_version, $x_api_version, $contact_profile_create_dto)
```

Create a new contact profile

Creates a new contact profile for the specified tenant. The ContactId must be provided in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_profile_create_dto = new \OpenAPI\Client\Model\ContactProfileCreateDto(); // \OpenAPI\Client\Model\ContactProfileCreateDto

try {
    $apiInstance->createContactProfileAsync($tenant_id, $api_version, $x_api_version, $contact_profile_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->createContactProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_profile_create_dto** | [**\OpenAPI\Client\Model\ContactProfileCreateDto**](../Model/ContactProfileCreateDto.md)|  | [optional] |

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

## `deleteContactProfileAsync()`

```php
deleteContactProfileAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a contact profile

Deletes a contact profile for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteContactProfileAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->deleteContactProfileAsync: ', $e->getMessage(), PHP_EOL;
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

## `getContactProfileByIdAsync()`

```php
getContactProfileByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\ContactProfileDto
```

Get contact profile by ID

Retrieves a specific contact profile by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getContactProfileByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->getContactProfileByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ContactProfileDto**](../Model/ContactProfileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactProfilesAsync()`

```php
getContactProfilesAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\ContactProfileDtoListEnvelope
```

Get all contact profiles

Retrieves all contact profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getContactProfilesAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->getContactProfilesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters**](../Model/ContactProfileDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContactProfileDtoListEnvelope**](../Model/ContactProfileDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactProfilesCountAsync()`

```php
getContactProfilesCountAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get contact profiles count

Returns the count of contact profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getContactProfilesCountAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->getContactProfilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters**](../Model/ContactProfileDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getPartnerProfilesCountAsync()`

```php
getPartnerProfilesCountAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get partner profiles count

Returns the count of partner contact profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getPartnerProfilesCountAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->getPartnerProfilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters**](../Model/ContactProfileDtoCollectionQueryParameters.md)|  | [optional] |

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

## `getPatientProfilesCountAsync()`

```php
getPatientProfilesCountAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get patient profiles count

Returns the count of patient contact profiles for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_profile_dto_collection_query_parameters = new \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters

try {
    $result = $apiInstance->getPatientProfilesCountAsync($tenant_id, $api_version, $x_api_version, $contact_profile_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->getPatientProfilesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_profile_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\ContactProfileDtoCollectionQueryParameters**](../Model/ContactProfileDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchContactProfileAsync()`

```php
patchContactProfileAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a contact profile

Patch a contact profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
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
    $result = $apiInstance->patchContactProfileAsync($tenant_id, $id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->patchContactProfileAsync: ', $e->getMessage(), PHP_EOL;
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

## `updateContactProfileAsync()`

```php
updateContactProfileAsync($tenant_id, $id, $api_version, $x_api_version, $contact_profile_update_dto)
```

Update a contact profile

Updates an existing contact profile for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$contact_profile_update_dto = new \OpenAPI\Client\Model\ContactProfileUpdateDto(); // \OpenAPI\Client\Model\ContactProfileUpdateDto

try {
    $apiInstance->updateContactProfileAsync($tenant_id, $id, $api_version, $x_api_version, $contact_profile_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContactProfilesApi->updateContactProfileAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **contact_profile_update_dto** | [**\OpenAPI\Client\Model\ContactProfileUpdateDto**](../Model/ContactProfileUpdateDto.md)|  | [optional] |

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
