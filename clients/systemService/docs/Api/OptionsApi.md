# OpenAPI\Client\OptionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSystemOption()**](OptionsApi.md#createSystemOption) | **POST** /api/v2/SystemService/Options | Create a new system option |
| [**deleteSystemOption()**](OptionsApi.md#deleteSystemOption) | **DELETE** /api/v2/SystemService/Options/{optionId} | Delete a system option |
| [**getSystemOptionById()**](OptionsApi.md#getSystemOptionById) | **GET** /api/v2/SystemService/Options/{optionId} | Retrieve a single system option by its ID |
| [**getSystemOptionByKey()**](OptionsApi.md#getSystemOptionByKey) | **GET** /api/v2/SystemService/Options/Key/{key} | Retrieve a single system option by its key |
| [**getSystemOptions()**](OptionsApi.md#getSystemOptions) | **GET** /api/v2/SystemService/Options | Retrieve a list of system options |
| [**getSystemOptionsCount()**](OptionsApi.md#getSystemOptionsCount) | **GET** /api/v2/SystemService/Options/Count | Get the count of system options |
| [**updateSystemOption()**](OptionsApi.md#updateSystemOption) | **PUT** /api/v2/SystemService/Options/{optionId} | Update a system option |
| [**upsertSystemOption()**](OptionsApi.md#upsertSystemOption) | **PUT** /api/v2/SystemService/Options/Upsert/{key} | Create or update a system option by key |


## `createSystemOption()`

```php
createSystemOption($key, $portal_id, $api_version, $x_api_version, $option_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new system option

Create a new system option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_create_dto = new \OpenAPI\Client\Model\OptionCreateDto(); // \OpenAPI\Client\Model\OptionCreateDto

try {
    $result = $apiInstance->createSystemOption($key, $portal_id, $api_version, $x_api_version, $option_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->createSystemOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `deleteSystemOption()`

```php
deleteSystemOption($option_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a system option

Delete a system option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSystemOption($option_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->deleteSystemOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getSystemOptionById()`

```php
getSystemOptionById($option_id, $api_version, $x_api_version): \OpenAPI\Client\Model\OptionDtoEnvelope
```

Retrieve a single system option by its ID

Retrieve a single system option by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemOptionById($option_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getSystemOptionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getSystemOptionByKey()`

```php
getSystemOptionByKey($portal_id, $key, $api_version, $x_api_version): \OpenAPI\Client\Model\OptionDtoEnvelope
```

Retrieve a single system option by its key

Retrieve a single system option by its key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portal_id = 'portal_id_example'; // string
$key = 'key_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemOptionByKey($portal_id, $key, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getSystemOptionByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portal_id** | **string**|  | |
| **key** | **string**|  | |
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

## `getSystemOptions()`

```php
getSystemOptions($portal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\OptionDtoListEnvelope
```

Retrieve a list of system options

Retrieve a list of system options for a portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemOptions($portal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getSystemOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portal_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptionDtoListEnvelope**](../Model/OptionDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemOptionsCount()`

```php
getSystemOptionsCount($portal_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of system options

Get the count of system options for a portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemOptionsCount($portal_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getSystemOptionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portal_id** | **string**|  | |
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

## `updateSystemOption()`

```php
updateSystemOption($option_id, $api_version, $x_api_version, $option_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a system option

Update a system option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_update_dto = new \OpenAPI\Client\Model\OptionUpdateDto(); // \OpenAPI\Client\Model\OptionUpdateDto

try {
    $result = $apiInstance->updateSystemOption($option_id, $api_version, $x_api_version, $option_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->updateSystemOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `upsertSystemOption()`

```php
upsertSystemOption($key, $portal_id, $api_version, $x_api_version, $option_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create or update a system option by key

Create or update a system option by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_update_dto = new \OpenAPI\Client\Model\OptionUpdateDto(); // \OpenAPI\Client\Model\OptionUpdateDto

try {
    $result = $apiInstance->upsertSystemOption($key, $portal_id, $api_version, $x_api_version, $option_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->upsertSystemOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **portal_id** | **string**|  | [optional] |
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
