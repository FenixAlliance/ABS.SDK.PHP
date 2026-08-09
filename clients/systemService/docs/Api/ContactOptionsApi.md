# OpenAPI\Client\ContactOptionsApi

All URIs are relative to https://absuite.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSystemContactOption()**](ContactOptionsApi.md#createSystemContactOption) | **POST** /api/v2/SystemService/Contacts/{contactId}/Options | Create a new contact option (admin) |
| [**deleteSystemContactOption()**](ContactOptionsApi.md#deleteSystemContactOption) | **DELETE** /api/v2/SystemService/Contacts/{contactId}/Options/{optionId} | Delete a contact option (admin) |
| [**getSystemContactOptionById()**](ContactOptionsApi.md#getSystemContactOptionById) | **GET** /api/v2/SystemService/Contacts/{contactId}/Options/{optionId} | Retrieve a single contact option by its ID (admin) |
| [**getSystemContactOptions()**](ContactOptionsApi.md#getSystemContactOptions) | **GET** /api/v2/SystemService/Contacts/{contactId}/Options | Retrieve a list of contact options (admin) |
| [**getSystemContactOptionsCount()**](ContactOptionsApi.md#getSystemContactOptionsCount) | **GET** /api/v2/SystemService/Contacts/{contactId}/Options/Count | Get the count of contact options (admin) |
| [**patchSystemContactOption()**](ContactOptionsApi.md#patchSystemContactOption) | **PATCH** /api/v2/SystemService/Contacts/{contactId}/Options/{optionId} | Partially update a contact option (admin) |
| [**updateSystemContactOption()**](ContactOptionsApi.md#updateSystemContactOption) | **PUT** /api/v2/SystemService/Contacts/{contactId}/Options/{optionId} | Update a contact option (admin) |


## `createSystemContactOption()`

```php
createSystemContactOption($contact_id, $key, $portal_id, $api_version, $x_api_version, $option_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create a new contact option (admin)

Admin endpoint to create an option for any contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$key = 'key_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_create_dto = new \OpenAPI\Client\Model\OptionCreateDto(); // \OpenAPI\Client\Model\OptionCreateDto

try {
    $result = $apiInstance->createSystemContactOption($contact_id, $key, $portal_id, $api_version, $x_api_version, $option_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOptionsApi->createSystemContactOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
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

## `deleteSystemContactOption()`

```php
deleteSystemContactOption($contact_id, $option_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete a contact option (admin)

Admin endpoint to delete an option for any contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteSystemContactOption($contact_id, $option_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOptionsApi->deleteSystemContactOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
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

## `getSystemContactOptionById()`

```php
getSystemContactOptionById($contact_id, $option_id, $api_version, $x_api_version): \OpenAPI\Client\Model\OptionDtoEnvelope
```

Retrieve a single contact option by its ID (admin)

Admin endpoint to retrieve a single option for any contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getSystemContactOptionById($contact_id, $option_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOptionsApi->getSystemContactOptionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
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

## `getSystemContactOptions()`

```php
getSystemContactOptions($contact_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters): \OpenAPI\Client\Model\OptionDtoListEnvelope
```

Retrieve a list of contact options (admin)

Admin endpoint to retrieve options for any contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_dto_collection_query_parameters = new \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemContactOptions($contact_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOptionsApi->getSystemContactOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
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

## `getSystemContactOptionsCount()`

```php
getSystemContactOptionsCount($contact_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters): \OpenAPI\Client\Model\Int32Envelope
```

Get the count of contact options (admin)

Admin endpoint to get the count of options for any contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$portal_id = 'portal_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_dto_collection_query_parameters = new \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters(); // \OpenAPI\Client\Model\OptionDtoCollectionQueryParameters

try {
    $result = $apiInstance->getSystemContactOptionsCount($contact_id, $portal_id, $api_version, $x_api_version, $option_dto_collection_query_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOptionsApi->getSystemContactOptionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
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

## `patchSystemContactOption()`

```php
patchSystemContactOption($contact_id, $option_id, $api_version, $x_api_version, $patch_operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Partially update a contact option (admin)

Admin endpoint to partially update an option for any contact using a JSON Patch document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$patch_operation = array(new \OpenAPI\Client\Model\PatchOperation()); // \OpenAPI\Client\Model\PatchOperation[]

try {
    $result = $apiInstance->patchSystemContactOption($contact_id, $option_id, $api_version, $x_api_version, $patch_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOptionsApi->patchSystemContactOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
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

## `updateSystemContactOption()`

```php
updateSystemContactOption($contact_id, $option_id, $api_version, $x_api_version, $option_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update a contact option (admin)

Admin endpoint to update an option for any contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContactOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string
$option_id = 'option_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$option_update_dto = new \OpenAPI\Client\Model\OptionUpdateDto(); // \OpenAPI\Client\Model\OptionUpdateDto

try {
    $result = $apiInstance->updateSystemContactOption($contact_id, $option_id, $api_version, $x_api_version, $option_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOptionsApi->updateSystemContactOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
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
