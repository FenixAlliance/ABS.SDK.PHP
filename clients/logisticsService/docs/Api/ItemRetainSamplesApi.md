# OpenAPI\Client\ItemRetainSamplesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createItemRetainSampleAsync()**](ItemRetainSamplesApi.md#createItemRetainSampleAsync) | **POST** /api/v2/LogisticsService/ItemRetainSamples | Create an item retain sample |
| [**deleteItemRetainSampleAsync()**](ItemRetainSamplesApi.md#deleteItemRetainSampleAsync) | **DELETE** /api/v2/LogisticsService/ItemRetainSamples/{retainSampleId} | Delete an item retain sample |
| [**getItemRetainSampleByIdAsync()**](ItemRetainSamplesApi.md#getItemRetainSampleByIdAsync) | **GET** /api/v2/LogisticsService/ItemRetainSamples/{retainSampleId} | Get item retain sample by ID |
| [**getItemRetainSamplesAsync()**](ItemRetainSamplesApi.md#getItemRetainSamplesAsync) | **GET** /api/v2/LogisticsService/ItemRetainSamples | Get all item retain samples |
| [**getItemRetainSamplesCountAsync()**](ItemRetainSamplesApi.md#getItemRetainSamplesCountAsync) | **GET** /api/v2/LogisticsService/ItemRetainSamples/Count | Get item retain samples count |
| [**patchItemRetainSampleAsync()**](ItemRetainSamplesApi.md#patchItemRetainSampleAsync) | **PATCH** /api/v2/LogisticsService/ItemRetainSamples/{retainSampleId} | Patch an item retain sample |
| [**updateItemRetainSampleAsync()**](ItemRetainSamplesApi.md#updateItemRetainSampleAsync) | **PUT** /api/v2/LogisticsService/ItemRetainSamples/{retainSampleId} | Update an item retain sample |


## `createItemRetainSampleAsync()`

```php
createItemRetainSampleAsync($tenant_id, $api_version, $x_api_version, $item_retain_sample_create_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Create an item retain sample

Creates a new item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRetainSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_retain_sample_create_dto = new \OpenAPI\Client\Model\ItemRetainSampleCreateDto(); // \OpenAPI\Client\Model\ItemRetainSampleCreateDto

try {
    $result = $apiInstance->createItemRetainSampleAsync($tenant_id, $api_version, $x_api_version, $item_retain_sample_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRetainSamplesApi->createItemRetainSampleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_retain_sample_create_dto** | [**\OpenAPI\Client\Model\ItemRetainSampleCreateDto**](../Model/ItemRetainSampleCreateDto.md)|  | [optional] |

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

## `deleteItemRetainSampleAsync()`

```php
deleteItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version): \OpenAPI\Client\Model\EmptyEnvelope
```

Delete an item retain sample

Deletes an item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRetainSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$retain_sample_id = 'retain_sample_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->deleteItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRetainSamplesApi->deleteItemRetainSampleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **retain_sample_id** | **string**|  | |
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

## `getItemRetainSampleByIdAsync()`

```php
getItemRetainSampleByIdAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRetainSampleDtoEnvelope
```

Get item retain sample by ID

Retrieves a specific item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRetainSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$retain_sample_id = 'retain_sample_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRetainSampleByIdAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRetainSamplesApi->getItemRetainSampleByIdAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **retain_sample_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRetainSampleDtoEnvelope**](../Model/ItemRetainSampleDtoEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRetainSamplesAsync()`

```php
getItemRetainSamplesAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\ItemRetainSampleDtoListEnvelope
```

Get all item retain samples

Retrieves all item retain samples for the specified tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRetainSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRetainSamplesAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRetainSamplesApi->getItemRetainSamplesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemRetainSampleDtoListEnvelope**](../Model/ItemRetainSampleDtoListEnvelope.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemRetainSamplesCountAsync()`

```php
getItemRetainSamplesCountAsync($tenant_id, $api_version, $x_api_version): \OpenAPI\Client\Model\Int32Envelope
```

Get item retain samples count

Returns the count of item retain samples.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRetainSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string

try {
    $result = $apiInstance->getItemRetainSamplesCountAsync($tenant_id, $api_version, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRetainSamplesApi->getItemRetainSamplesCountAsync: ', $e->getMessage(), PHP_EOL;
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

## `patchItemRetainSampleAsync()`

```php
patchItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version, $operation): \OpenAPI\Client\Model\EmptyEnvelope
```

Patch an item retain sample

Applies a JSON Patch document to an item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRetainSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$retain_sample_id = 'retain_sample_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $result = $apiInstance->patchItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRetainSamplesApi->patchItemRetainSampleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **retain_sample_id** | **string**|  | |
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

## `updateItemRetainSampleAsync()`

```php
updateItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version, $item_retain_sample_update_dto): \OpenAPI\Client\Model\EmptyEnvelope
```

Update an item retain sample

Updates an existing item retain sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ItemRetainSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$retain_sample_id = 'retain_sample_id_example'; // string
$api_version = 'api_version_example'; // string
$x_api_version = 'x_api_version_example'; // string
$item_retain_sample_update_dto = new \OpenAPI\Client\Model\ItemRetainSampleUpdateDto(); // \OpenAPI\Client\Model\ItemRetainSampleUpdateDto

try {
    $result = $apiInstance->updateItemRetainSampleAsync($tenant_id, $retain_sample_id, $api_version, $x_api_version, $item_retain_sample_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRetainSamplesApi->updateItemRetainSampleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **retain_sample_id** | **string**|  | |
| **api_version** | **string**|  | [optional] |
| **x_api_version** | **string**|  | [optional] |
| **item_retain_sample_update_dto** | [**\OpenAPI\Client\Model\ItemRetainSampleUpdateDto**](../Model/ItemRetainSampleUpdateDto.md)|  | [optional] |

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
