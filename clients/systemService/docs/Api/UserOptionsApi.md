# OpenAPI\Client\UserOptionsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSystemUserOption()**](UserOptionsApi.md#createSystemUserOption) | **POST** /api/v2/SystemService/Users/{userId}/Options | Create a new user option (admin) |
| [**deleteSystemUserOption()**](UserOptionsApi.md#deleteSystemUserOption) | **DELETE** /api/v2/SystemService/Users/{userId}/Options/{optionId} | Delete a user option (admin) |
| [**getSystemUserOptionById()**](UserOptionsApi.md#getSystemUserOptionById) | **GET** /api/v2/SystemService/Users/{userId}/Options/{optionId} | Retrieve a single user option by its ID (admin) |
| [**getSystemUserOptions()**](UserOptionsApi.md#getSystemUserOptions) | **GET** /api/v2/SystemService/Users/{userId}/Options | Retrieve a list of user options (admin) |
| [**getSystemUserOptionsCount()**](UserOptionsApi.md#getSystemUserOptionsCount) | **GET** /api/v2/SystemService/Users/{userId}/Options/Count | Get the count of user options (admin) |
| [**patchSystemUserOption()**](UserOptionsApi.md#patchSystemUserOption) | **PATCH** /api/v2/SystemService/Users/{userId}/Options/{optionId} | Partially update a user option (admin) |
| [**updateSystemUserOption()**](UserOptionsApi.md#updateSystemUserOption) | **PUT** /api/v2/SystemService/Users/{userId}/Options/{optionId} | Update a user option (admin) |


## `createSystemUserOption()`

```php
createSystemUserOption($user_id, $key, $portal_id, $api_version, $x_api_version, $option_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new user option (admin)

Admin endpoint to create an option for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$key = 'key_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_create_dto = new \OpenAPI\Client\Model\OptionCreateDto(); // \OpenAPI\Client\Model\OptionCreateDto

try {
    $result = $apiInstance->createSystemUserOption($user_id, $key, $portal_id, $api_version, $x_api_version, $option_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserOptionsApi->createSystemUserOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **key** | **string**|  | |
| **portal_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **option_create_dto** | [**\OpenAPI\Client\Model\OptionCreateDto**](../Model/OptionCreateDto.md)|  | [optional] |

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

## `deleteSystemUserOption()`

```php
deleteSystemUserOption($user_id, $option_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a user option (admin)

Admin endpoint to delete an option for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSystemUserOption($user_id, $option_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserOptionsApi->deleteSystemUserOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **option_id** | **string**|  | |
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

## `getSystemUserOptionById()`

```php
getSystemUserOptionById($user_id, $option_id, $api_version, $x_api_version): \OpenAPI\Client\Model\OptionDtoEnvelope
```

Retrieve a single user option by its ID (admin)

Admin endpoint to retrieve a single option for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemUserOptionById($user_id, $option_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserOptionsApi->getSystemUserOptionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **option_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptionDtoEnvelope**](../Model/OptionDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemUserOptions()`

```php
getSystemUserOptions($user_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters): \OpenAPI\Client\Model\OptionDtoListEnvelope
```

Retrieve a list of user options (admin)

Admin endpoint to retrieve options for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_dto_collection_query_parameters = new \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemUserOptions($user_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserOptionsApi->getSystemUserOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **portal_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **option_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\OptionDtoCollectionQueryParameters**](../Model/OptionDtoCollectionQueryParameters.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptionDtoListEnvelope**](../Model/OptionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemUserOptionsCount()`

```php
getSystemUserOptionsCount($user_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of user options (admin)

Admin endpoint to get the count of options for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_dto_collection_query_parameters = new \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemUserOptionsCount($user_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserOptionsApi->getSystemUserOptionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **portal_id** | **string**|  | [optional] |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **option_dto_collection_query_parameters** | [**\OpenAPI\Client\Model\OptionDtoCollectionQueryParameters**](../Model/OptionDtoCollectionQueryParameters.md)|  | [optional] |

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

## `patchSystemUserOption()`

```php
patchSystemUserOption($user_id, $option_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Partially update a user option (admin)

Admin endpoint to partially update an option for any user using a JSON Patch document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSystemUserOption($user_id, $option_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserOptionsApi->patchSystemUserOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **option_id** | **string**|  | |
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

## `updateSystemUserOption()`

```php
updateSystemUserOption($user_id, $option_id, $api_version, $x_api_version, $option_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a user option (admin)

Admin endpoint to update an option for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_update_dto = new \OpenAPI\Client\Model\OptionUpdateDto(); // \OpenAPI\Client\Model\OptionUpdateDto

try {
    $result = $apiInstance->updateSystemUserOption($user_id, $option_id, $api_version, $x_api_version, $option_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserOptionsApi->updateSystemUserOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **option_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **option_update_dto** | [**\OpenAPI\Client\Model\OptionUpdateDto**](../Model/OptionUpdateDto.md)|  | [optional] |

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
