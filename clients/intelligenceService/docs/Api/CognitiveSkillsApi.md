# OpenAPI\Client\CognitiveSkillsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCognitiveSkillAsync()**](CognitiveSkillsApi.md#createCognitiveSkillAsync) | **POST** /api/v2/IntelligenceService/CognitiveSkills | Create a new cognitive skill |
| [**deleteCognitiveSkillAsync()**](CognitiveSkillsApi.md#deleteCognitiveSkillAsync) | **DELETE** /api/v2/IntelligenceService/CognitiveSkills/{id} | Delete a cognitive skill |
| [**getCognitiveSkillByIdAsync()**](CognitiveSkillsApi.md#getCognitiveSkillByIdAsync) | **GET** /api/v2/IntelligenceService/CognitiveSkills/{id} | Get cognitive skill by ID |
| [**getCognitiveSkillsAsync()**](CognitiveSkillsApi.md#getCognitiveSkillsAsync) | **GET** /api/v2/IntelligenceService/CognitiveSkills | Get all cognitive skills |
| [**getCognitiveSkillsCountAsync()**](CognitiveSkillsApi.md#getCognitiveSkillsCountAsync) | **GET** /api/v2/IntelligenceService/CognitiveSkills/Count | Get cognitive skills count |
| [**updateCognitiveSkillAsync()**](CognitiveSkillsApi.md#updateCognitiveSkillAsync) | **PUT** /api/v2/IntelligenceService/CognitiveSkills/{id} | Update a cognitive skill |


## `createCognitiveSkillAsync()`

```php
createCognitiveSkillAsync($tenant_id, $api_version, $x_api_version, $cognitive_skill_create_dto)
```

Create a new cognitive skill

Creates a new reusable cognitive skill for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_skill_create_dto = new \OpenAPI\Client\Model\CognitiveSkillCreateDto(); // \OpenAPI\Client\Model\CognitiveSkillCreateDto

try {
    $apiInstance->createCognitiveSkillAsync($tenant_id, $api_version, $x_api_version, $cognitive_skill_create_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveSkillsApi->createCognitiveSkillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_skill_create_dto** | [**\OpenAPI\Client\Model\CognitiveSkillCreateDto**](../Model/CognitiveSkillCreateDto.md)|  | [optional] |

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

## `deleteCognitiveSkillAsync()`

```php
deleteCognitiveSkillAsync($tenant_id, $id, $api_version, $x_api_version)
```

Delete a cognitive skill

Deletes a reusable cognitive skill for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $apiInstance->deleteCognitiveSkillAsync($tenant_id, $id, $api_version, $x_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveSkillsApi->deleteCognitiveSkillAsync: ', $e->getMessage(), PHP_EOL;
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

## `getCognitiveSkillByIdAsync()`

```php
getCognitiveSkillByIdAsync($tenant_id, $id, $api_version, $x_api_version): \OpenAPI\Client\Model\CognitiveSkillDtoEnvelope
```

Get cognitive skill by ID

Retrieves a specific reusable cognitive skill by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCognitiveSkillByIdAsync($tenant_id, $id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveSkillsApi->getCognitiveSkillByIdAsync: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\CognitiveSkillDtoEnvelope**](../Model/CognitiveSkillDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveSkillsAsync()`

```php
getCognitiveSkillsAsync($tenant_id, $api_version, $x_api_version, $cognitive_skill_dto_collection_query_parameters): \OpenAPI\Client\Model\CognitiveSkillDtoListEnvelope
```

Get all cognitive skills

Retrieves all reusable cognitive skills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_skill_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveSkillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveSkillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveSkillsAsync($tenant_id, $api_version, $x_api_version, $cognitive_skill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveSkillsApi->getCognitiveSkillsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_skill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveSkillDtoCollectionQueryParameters**](../Model/CognitiveSkillDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CognitiveSkillDtoListEnvelope**](../Model/CognitiveSkillDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCognitiveSkillsCountAsync()`

```php
getCognitiveSkillsCountAsync($tenant_id, $api_version, $x_api_version, $cognitive_skill_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get cognitive skills count

Returns the count of reusable cognitive skills for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_skill_dto_collection_query_parameters = new \OpenAPI\Client\Model\CognitiveSkillDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\CognitiveSkillDtoCollectionQueryParameters

try {
    $result = $apiInstance->getCognitiveSkillsCountAsync($tenant_id, $api_version, $x_api_version, $cognitive_skill_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveSkillsApi->getCognitiveSkillsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_skill_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\CognitiveSkillDtoCollectionQueryParameters**](../Model/CognitiveSkillDtoCollectionQueryParameters.md)|  | [optional] |

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

## `updateCognitiveSkillAsync()`

```php
updateCognitiveSkillAsync($tenant_id, $id, $api_version, $x_api_version, $cognitive_skill_update_dto)
```

Update a cognitive skill

Updates an existing reusable cognitive skill for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CognitiveSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$cognitive_skill_update_dto = new \OpenAPI\Client\Model\CognitiveSkillUpdateDto(); // \OpenAPI\Client\Model\CognitiveSkillUpdateDto

try {
    $apiInstance->updateCognitiveSkillAsync($tenant_id, $id, $api_version, $x_api_version, $cognitive_skill_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling CognitiveSkillsApi->updateCognitiveSkillAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **cognitive_skill_update_dto** | [**\OpenAPI\Client\Model\CognitiveSkillUpdateDto**](../Model/CognitiveSkillUpdateDto.md)|  | [optional] |

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
