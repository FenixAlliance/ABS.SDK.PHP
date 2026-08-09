# OpenAPI\Client\RequiredSkillsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRequiredSkillAsync()**](RequiredSkillsApi.md#createRequiredSkillAsync) | **POST** /api/v2/HrmsService/RequiredSkills | Create a required skill |
| [**deleteRequiredSkillAsync()**](RequiredSkillsApi.md#deleteRequiredSkillAsync) | **DELETE** /api/v2/HrmsService/RequiredSkills/{requiredSkillId} | Delete a required skill |
| [**getRequiredSkillByIdAsync()**](RequiredSkillsApi.md#getRequiredSkillByIdAsync) | **GET** /api/v2/HrmsService/RequiredSkills/{requiredSkillId} | Get required skill by ID |
| [**getRequiredSkillsAsync()**](RequiredSkillsApi.md#getRequiredSkillsAsync) | **GET** /api/v2/HrmsService/RequiredSkills | Get required skills |
| [**getRequiredSkillsCountAsync()**](RequiredSkillsApi.md#getRequiredSkillsCountAsync) | **GET** /api/v2/HrmsService/RequiredSkills/Count | Count required skills |
| [**patchRequiredSkillAsync()**](RequiredSkillsApi.md#patchRequiredSkillAsync) | **PATCH** /api/v2/HrmsService/RequiredSkills/{requiredSkillId} | Patch a required skill |
| [**updateRequiredSkillAsync()**](RequiredSkillsApi.md#updateRequiredSkillAsync) | **PUT** /api/v2/HrmsService/RequiredSkills/{requiredSkillId} | Update a required skill |


## `createRequiredSkillAsync()`

```php
createRequiredSkillAsync($tenant_id, $api_version, $x_api_version, $required_skill_record_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a required skill

Creates a new required-skill record for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequiredSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$required_skill_record_create_dto = new \OpenAPI\Client\Model\RequiredSkillRecordCreateDto(); // \OpenAPI\Client\Model\RequiredSkillRecordCreateDto

try {
    $result = $apiInstance->createRequiredSkillAsync($tenant_id, $api_version, $x_api_version, $required_skill_record_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequiredSkillsApi->createRequiredSkillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **required_skill_record_create_dto** | [**\OpenAPI\Client\Model\RequiredSkillRecordCreateDto**](../Model/RequiredSkillRecordCreateDto.md)|  | [optional] |

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

## `deleteRequiredSkillAsync()`

```php
deleteRequiredSkillAsync($tenant_id, $required_skill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a required skill

Deletes a required-skill record for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequiredSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$required_skill_id = 'required_skill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteRequiredSkillAsync($tenant_id, $required_skill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequiredSkillsApi->deleteRequiredSkillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **required_skill_id** | **string**|  | |
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

## `getRequiredSkillByIdAsync()`

```php
getRequiredSkillByIdAsync($tenant_id, $required_skill_id, $api_version, $x_api_version): \OpenAPI\Client\Model\RequiredSkillRecordDtoEnvelope
```

Get required skill by ID

Retrieves a specific required-skill record by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequiredSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$required_skill_id = 'required_skill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getRequiredSkillByIdAsync($tenant_id, $required_skill_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequiredSkillsApi->getRequiredSkillByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **required_skill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RequiredSkillRecordDtoEnvelope**](../Model/RequiredSkillRecordDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequiredSkillsAsync()`

```php
getRequiredSkillsAsync($tenant_id, $api_version, $x_api_version, $required_skill_record_dto_collection_query_parameters): \OpenAPI\Client\Model\RequiredSkillRecordDtoListEnvelope
```

Get required skills

Retrieves required-skill records for the specified tenant. Filter by `$filter=JobOfferId eq '...'` or `EmployerProfileId eq '...'`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequiredSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$required_skill_record_dto_collection_query_parameters = new \OpenAPI\Client\Model\RequiredSkillRecordDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\RequiredSkillRecordDtoCollectionQueryParameters

try {
    $result = $apiInstance->getRequiredSkillsAsync($tenant_id, $api_version, $x_api_version, $required_skill_record_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequiredSkillsApi->getRequiredSkillsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **required_skill_record_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\RequiredSkillRecordDtoCollectionQueryParameters**](../Model/RequiredSkillRecordDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RequiredSkillRecordDtoListEnvelope**](../Model/RequiredSkillRecordDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequiredSkillsCountAsync()`

```php
getRequiredSkillsCountAsync($tenant_id, $api_version, $x_api_version, $required_skill_record_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Count required skills

Counts required-skill records for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequiredSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$required_skill_record_dto_collection_query_parameters = new \OpenAPI\Client\Model\RequiredSkillRecordDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\RequiredSkillRecordDtoCollectionQueryParameters

try {
    $result = $apiInstance->getRequiredSkillsCountAsync($tenant_id, $api_version, $x_api_version, $required_skill_record_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequiredSkillsApi->getRequiredSkillsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **required_skill_record_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\RequiredSkillRecordDtoCollectionQueryParameters**](../Model/RequiredSkillRecordDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchRequiredSkillAsync()`

```php
patchRequiredSkillAsync($tenant_id, $required_skill_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a required skill

Partially updates an existing required-skill record for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequiredSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$required_skill_id = 'required_skill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchRequiredSkillAsync($tenant_id, $required_skill_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequiredSkillsApi->patchRequiredSkillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **required_skill_id** | **string**|  | |
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

## `updateRequiredSkillAsync()`

```php
updateRequiredSkillAsync($tenant_id, $required_skill_id, $api_version, $x_api_version, $required_skill_record_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a required skill

Updates an existing required-skill record for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequiredSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$required_skill_id = 'required_skill_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$required_skill_record_update_dto = new \OpenAPI\Client\Model\RequiredSkillRecordUpdateDto(); // \OpenAPI\Client\Model\RequiredSkillRecordUpdateDto

try {
    $result = $apiInstance->updateRequiredSkillAsync($tenant_id, $required_skill_id, $api_version, $x_api_version, $required_skill_record_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequiredSkillsApi->updateRequiredSkillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **required_skill_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **required_skill_record_update_dto** | [**\OpenAPI\Client\Model\RequiredSkillRecordUpdateDto**](../Model/RequiredSkillRecordUpdateDto.md)|  | [optional] |

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
