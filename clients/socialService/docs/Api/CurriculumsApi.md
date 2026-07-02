# OpenAPI\Client\CurriculumsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCurriculumAsync()**](CurriculumsApi.md#createCurriculumAsync) | **POST** /api/v2/SocialService/Curriculums | Create a curriculum |
| [**deleteCurriculumAsync()**](CurriculumsApi.md#deleteCurriculumAsync) | **DELETE** /api/v2/SocialService/Curriculums/{curriculumId} | Delete a curriculum |
| [**getCurriculumAsync()**](CurriculumsApi.md#getCurriculumAsync) | **GET** /api/v2/SocialService/Curriculums/{curriculumId} | Get curriculum by ID |
| [**getCurriculumsAsync()**](CurriculumsApi.md#getCurriculumsAsync) | **GET** /api/v2/SocialService/Curriculums | Get curricula |
| [**getCurriculumsCountAsync()**](CurriculumsApi.md#getCurriculumsCountAsync) | **GET** /api/v2/SocialService/Curriculums/Count | Count curricula |
| [**patchCurriculumAsync()**](CurriculumsApi.md#patchCurriculumAsync) | **PATCH** /api/v2/SocialService/Curriculums/{curriculumId} | Patch a curriculum |
| [**updateCurriculumAsync()**](CurriculumsApi.md#updateCurriculumAsync) | **PUT** /api/v2/SocialService/Curriculums/{curriculumId} | Update a curriculum |


## `createCurriculumAsync()`

```php
createCurriculumAsync($social_profile_id, $tenant_id, $api_version, $x_api_version, $curriculum_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a curriculum

Creates a curriculum (CV) on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$curriculum_create_dto = new \OpenAPI\Client\Model\CurriculumCreateDto(); // \OpenAPI\Client\Model\CurriculumCreateDto

try {
    $result = $apiInstance->createCurriculumAsync($social_profile_id, $tenant_id, $api_version, $x_api_version, $curriculum_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumsApi->createCurriculumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **curriculum_create_dto** | [**\OpenAPI\Client\Model\CurriculumCreateDto**](../Model/CurriculumCreateDto.md)|  | [optional] |

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

## `deleteCurriculumAsync()`

```php
deleteCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a curriculum

Deletes a curriculum authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$curriculum_id = 'curriculum_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumsApi->deleteCurriculumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **curriculum_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
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

## `getCurriculumAsync()`

```php
getCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CurriculumDtoEnvelope
```

Get curriculum by ID

Retrieves a specific curriculum authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$curriculum_id = 'curriculum_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumsApi->getCurriculumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **curriculum_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CurriculumDtoEnvelope**](../Model/CurriculumDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurriculumsAsync()`

```php
getCurriculumsAsync($social_profile_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CurriculumDtoListEnvelope
```

Get curricula

Retrieves the curricula (CVs) authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCurriculumsAsync($social_profile_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumsApi->getCurriculumsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CurriculumDtoListEnvelope**](../Model/CurriculumDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurriculumsCountAsync()`

```php
getCurriculumsCountAsync($social_profile_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count curricula

Returns the count of curricula authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCurriculumsCountAsync($social_profile_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumsApi->getCurriculumsCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Int32Envelope**](../Model/Int32Envelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCurriculumAsync()`

```php
patchCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a curriculum

Partially updates an existing curriculum authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$curriculum_id = 'curriculum_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumsApi->patchCurriculumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **curriculum_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional] |

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

## `updateCurriculumAsync()`

```php
updateCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version, $curriculum_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a curriculum

Updates an existing curriculum authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$social_profile_id = 'social_profile_id_example'; // string
$curriculum_id = 'curriculum_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$curriculum_update_dto = new \OpenAPI\Client\Model\CurriculumUpdateDto(); // \OpenAPI\Client\Model\CurriculumUpdateDto

try {
    $result = $apiInstance->updateCurriculumAsync($social_profile_id, $curriculum_id, $tenant_id, $api_version, $x_api_version, $curriculum_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumsApi->updateCurriculumAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **social_profile_id** | **string**|  | |
| **curriculum_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **curriculum_update_dto** | [**\OpenAPI\Client\Model\CurriculumUpdateDto**](../Model/CurriculumUpdateDto.md)|  | [optional] |

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
