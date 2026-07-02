# OpenAPI\Client\CurriculumExperiencesApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCurriculumExperienceAsync()**](CurriculumExperiencesApi.md#createCurriculumExperienceAsync) | **POST** /api/v2/SocialService/Curriculums/{curriculumId}/Experiences | Create a curriculum experience |
| [**deleteCurriculumExperienceAsync()**](CurriculumExperiencesApi.md#deleteCurriculumExperienceAsync) | **DELETE** /api/v2/SocialService/Curriculums/{curriculumId}/Experiences/{experienceId} | Delete a curriculum experience |
| [**getCurriculumExperienceAsync()**](CurriculumExperiencesApi.md#getCurriculumExperienceAsync) | **GET** /api/v2/SocialService/Curriculums/{curriculumId}/Experiences/{experienceId} | Get curriculum experience by ID |
| [**getCurriculumExperiencesAsync()**](CurriculumExperiencesApi.md#getCurriculumExperiencesAsync) | **GET** /api/v2/SocialService/Curriculums/{curriculumId}/Experiences | Get curriculum experiences |
| [**getCurriculumExperiencesCountAsync()**](CurriculumExperiencesApi.md#getCurriculumExperiencesCountAsync) | **GET** /api/v2/SocialService/Curriculums/{curriculumId}/Experiences/Count | Count curriculum experiences |
| [**patchCurriculumExperienceAsync()**](CurriculumExperiencesApi.md#patchCurriculumExperienceAsync) | **PATCH** /api/v2/SocialService/Curriculums/{curriculumId}/Experiences/{experienceId} | Patch a curriculum experience |
| [**updateCurriculumExperienceAsync()**](CurriculumExperiencesApi.md#updateCurriculumExperienceAsync) | **PUT** /api/v2/SocialService/Curriculums/{curriculumId}/Experiences/{experienceId} | Update a curriculum experience |


## `createCurriculumExperienceAsync()`

```php
createCurriculumExperienceAsync($curriculum_id, $social_profile_id, $tenant_id, $api_version, $x_api_version, $curriculum_experience_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a curriculum experience

Adds a work-experience record to a curriculum authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumExperiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$curriculum_id = 'curriculum_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$curriculum_experience_create_dto = new \OpenAPI\Client\Model\CurriculumExperienceCreateDto(); // \OpenAPI\Client\Model\CurriculumExperienceCreateDto

try {
    $result = $apiInstance->createCurriculumExperienceAsync($curriculum_id, $social_profile_id, $tenant_id, $api_version, $x_api_version, $curriculum_experience_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumExperiencesApi->createCurriculumExperienceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **curriculum_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **curriculum_experience_create_dto** | [**\OpenAPI\Client\Model\CurriculumExperienceCreateDto**](../Model/CurriculumExperienceCreateDto.md)|  | [optional] |

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

## `deleteCurriculumExperienceAsync()`

```php
deleteCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a curriculum experience

Removes a work-experience record from a curriculum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumExperiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$curriculum_id = 'curriculum_id_example'; // string
$experience_id = 'experience_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumExperiencesApi->deleteCurriculumExperienceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **curriculum_id** | **string**|  | |
| **experience_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
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

## `getCurriculumExperienceAsync()`

```php
getCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CurriculumExperienceDtoEnvelope
```

Get curriculum experience by ID

Retrieves a specific work-experience record of a curriculum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumExperiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$curriculum_id = 'curriculum_id_example'; // string
$experience_id = 'experience_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumExperiencesApi->getCurriculumExperienceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **curriculum_id** | **string**|  | |
| **experience_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CurriculumExperienceDtoEnvelope**](../Model/CurriculumExperienceDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurriculumExperiencesAsync()`

```php
getCurriculumExperiencesAsync($curriculum_id, $social_profile_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\CurriculumExperienceDtoListEnvelope
```

Get curriculum experiences

Retrieves the work-experience records of a curriculum authored on the specified social profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumExperiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$curriculum_id = 'curriculum_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCurriculumExperiencesAsync($curriculum_id, $social_profile_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumExperiencesApi->getCurriculumExperiencesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **curriculum_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CurriculumExperienceDtoListEnvelope**](../Model/CurriculumExperienceDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurriculumExperiencesCountAsync()`

```php
getCurriculumExperiencesCountAsync($curriculum_id, $social_profile_id, $tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count curriculum experiences

Returns the count of work-experience records of a curriculum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumExperiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$curriculum_id = 'curriculum_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getCurriculumExperiencesCountAsync($curriculum_id, $social_profile_id, $tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumExperiencesApi->getCurriculumExperiencesCountAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **curriculum_id** | **string**|  | |
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

## `patchCurriculumExperienceAsync()`

```php
patchCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch a curriculum experience

Partially updates an existing work-experience record of a curriculum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumExperiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$curriculum_id = 'curriculum_id_example'; // string
$experience_id = 'experience_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumExperiencesApi->patchCurriculumExperienceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **curriculum_id** | **string**|  | |
| **experience_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
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

## `updateCurriculumExperienceAsync()`

```php
updateCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version, $curriculum_experience_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a curriculum experience

Updates an existing work-experience record of a curriculum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CurriculumExperiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$curriculum_id = 'curriculum_id_example'; // string
$experience_id = 'experience_id_example'; // string
$social_profile_id = 'social_profile_id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$curriculum_experience_update_dto = new \OpenAPI\Client\Model\CurriculumExperienceUpdateDto(); // \OpenAPI\Client\Model\CurriculumExperienceUpdateDto

try {
    $result = $apiInstance->updateCurriculumExperienceAsync($curriculum_id, $experience_id, $social_profile_id, $tenant_id, $api_version, $x_api_version, $curriculum_experience_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumExperiencesApi->updateCurriculumExperienceAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **curriculum_id** | **string**|  | |
| **experience_id** | **string**|  | |
| **social_profile_id** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **curriculum_experience_update_dto** | [**\OpenAPI\Client\Model\CurriculumExperienceUpdateDto**](../Model/CurriculumExperienceUpdateDto.md)|  | [optional] |

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
