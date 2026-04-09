# OpenAPI\Client\SocialGroupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countSocialGroupsAsync()**](SocialGroupsApi.md#countSocialGroupsAsync) | **GET** /api/v2/SocialService/SocialGroups/Count | Count social groups |
| [**createSocialGroupAsync()**](SocialGroupsApi.md#createSocialGroupAsync) | **POST** /api/v2/SocialService/SocialGroups | Create a social group |
| [**deleteSocialGroupAsync()**](SocialGroupsApi.md#deleteSocialGroupAsync) | **DELETE** /api/v2/SocialService/SocialGroups/{socialGroupId} | Delete a social group |
| [**getSocialGroupByIdAsync()**](SocialGroupsApi.md#getSocialGroupByIdAsync) | **GET** /api/v2/SocialService/SocialGroups/{socialGroupId} | Get social group by ID |
| [**getSocialGroupsAsync()**](SocialGroupsApi.md#getSocialGroupsAsync) | **GET** /api/v2/SocialService/SocialGroups | Get social groups |
| [**updateSocialGroupAsync()**](SocialGroupsApi.md#updateSocialGroupAsync) | **PUT** /api/v2/SocialService/SocialGroups/{socialGroupId} | Update a social group |


## `countSocialGroupsAsync()`

```php
countSocialGroupsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Count social groups

Counts all social groups for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->countSocialGroupsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialGroupsApi->countSocialGroupsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
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

## `createSocialGroupAsync()`

```php
createSocialGroupAsync($tenant_id, $api_version, $x_api_version, $social_group_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a social group

Creates a new social group for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_group_create_dto = new \OpenAPI\Client\Model\SocialGroupCreateDto(); // \OpenAPI\Client\Model\SocialGroupCreateDto

try {
    $result = $apiInstance->createSocialGroupAsync($tenant_id, $api_version, $x_api_version, $social_group_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialGroupsApi->createSocialGroupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_group_create_dto** | [**\OpenAPI\Client\Model\SocialGroupCreateDto**](../Model/SocialGroupCreateDto.md)|  | [optional] |

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

## `deleteSocialGroupAsync()`

```php
deleteSocialGroupAsync($tenant_id, $social_group_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a social group

Deletes a social group for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$social_group_id = 'social_group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSocialGroupAsync($tenant_id, $social_group_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialGroupsApi->deleteSocialGroupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **social_group_id** | **string**|  | |
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

## `getSocialGroupByIdAsync()`

```php
getSocialGroupByIdAsync($tenant_id, $social_group_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialGroupDtoEnvelope
```

Get social group by ID

Retrieves a specific social group by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$social_group_id = 'social_group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialGroupByIdAsync($tenant_id, $social_group_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialGroupsApi->getSocialGroupByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **social_group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialGroupDtoEnvelope**](../Model/SocialGroupDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialGroupsAsync()`

```php
getSocialGroupsAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\SocialGroupDtoListEnvelope
```

Get social groups

Retrieves all social groups for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSocialGroupsAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialGroupsApi->getSocialGroupsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SocialGroupDtoListEnvelope**](../Model/SocialGroupDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSocialGroupAsync()`

```php
updateSocialGroupAsync($tenant_id, $social_group_id, $api_version, $x_api_version, $social_group_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a social group

Updates an existing social group for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$social_group_id = 'social_group_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$social_group_update_dto = new \OpenAPI\Client\Model\SocialGroupUpdateDto(); // \OpenAPI\Client\Model\SocialGroupUpdateDto

try {
    $result = $apiInstance->updateSocialGroupAsync($tenant_id, $social_group_id, $api_version, $x_api_version, $social_group_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialGroupsApi->updateSocialGroupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **social_group_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **social_group_update_dto** | [**\OpenAPI\Client\Model\SocialGroupUpdateDto**](../Model/SocialGroupUpdateDto.md)|  | [optional] |

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
